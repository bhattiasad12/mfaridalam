import {
  buildRedirectionTrigger,
  loadAdvancedSearchQueryActions
} from 'https://static.cloud.coveo.com/atomic/v2/headless/headless.esm.js';

const analyticsClientMiddleware = (eventName, payload) => {
  payload.customData['cfaData'] = drupalSettings.cfaData;
  payload.originLevel2 = drupalSettings.cfaData.pageUrl;
  return payload;
};

(async  function () {
  'use strict';

  await customElements.whenDefined('atomic-search-interface');

  const globalSearchBox = document.querySelectorAll('#global-search-box');
  for (const searchInterface of globalSearchBox) {
    await IntitilaizeInterface(searchInterface, analyticsClientMiddleware);
  }

  const searchInterfaces = document.querySelectorAll('.cfa-coveo-atomic-ui-search-interface');
  for (const searchInterface of searchInterfaces) {
    await IntitilaizeInterface(searchInterface, analyticsClientMiddleware);
    searchInterface.executeFirstSearch();
  }

  const searchInterfacesWithHeadless = document.querySelectorAll('.cfa-coveo-search-interface-atomic-with-headless');
  for (const searchInterface of searchInterfacesWithHeadless) {
    await IntitilaizeInterface(searchInterface, analyticsClientMiddleware);

    const engine = searchInterface.engine;

    const controller = buildRedirectionTrigger(engine);
    controller.subscribe(() => {
      const { redirectTo } = controller.state;
      if (redirectTo) {
        window.location.replace(redirectTo);
      }
    });

    const action = loadAdvancedSearchQueryActions(engine).updateAdvancedSearchQueries({
      aq: jQuery(searchInterface).data("aq"),
    });
    engine.dispatch(action);

    searchInterface.executeFirstSearch();
  }
})();
async function IntitilaizeInterface(searchInterface, analyticsClientMiddlewarePointer) {

  const resultTogglerCSSQuery = '.toggleResultLayout';
  bindTogglerScript(resultTogglerCSSQuery);
  await searchInterface.initialize({
    accessToken: await getAccessToken(),
    // Replace with an API key or search token that grants the privileges to execute queries and push usage analytics data.
    organizationId: drupalSettings.coveo.organization_id,
    organizationEndpoints: await searchInterface.getOrganizationEndpoints(drupalSettings.coveo.organization_id),
    analytics: {
      analyticsClientMiddleware: analyticsClientMiddlewarePointer,
    },
    renewAccessToken: async () => {
      return getAccessToken();
    },
  });

}

const coveoAccessTokenStorageKey = 'coveo_access_token';
//function to make rest api call to get access token
async function getAccessToken() {

  //check if token exists in cookies
  let existingToken = Cookies.get(coveoAccessTokenStorageKey);

  if(existingToken && existingToken.length > 0){
    return existingToken;
  } else {
    let newToken = getNewAccessToken();
    if(newToken){
      //store token in cookie for 24 hours
      let now = new Date();
      now.setTime(now.getTime() + 23 * 3600 * 1000);
      Cookies.set(coveoAccessTokenStorageKey, await newToken, { expires: now, secure: true});
      return newToken;
    }
  }
  return '';
}

async function getNewAccessToken() {

  //fetch token from server
  const response = await fetch('/cfa/coveo/auth/token', {
    method: 'GET',
    headers: {},
  });
  const data = await response.json();
  let returnedObject = JSON.parse(data);

  if(returnedObject && returnedObject.hasOwnProperty('access_token')){
    return '' + returnedObject.access_token;
  }
  return data;
}

//function to toggle the search interface
function bindTogglerScript(resultTogglerCSSQuery) {
  const resultList = document.querySelector('atomic-result-list');
  if(resultList) {
    const selectors = document.querySelectorAll(resultTogglerCSSQuery)
    selectors.forEach(el => el.addEventListener('click', event => {
      resultList.display = jQuery(event.target).data().layout;
    }));
  }
}
