import {MetadataSection} from './web-components/global-search/MetadataSection.js';
import {ThumbnailSection} from './web-components/global-search/ThumbnailSection.js';
import {AnnotationBadgeSection} from './web-components/global-search/AnnotationBadgeSection.js';
import {TitleSection} from './web-components/global-search/TitleSection.js';
import {BodySection} from './web-components/global-search/BodySection.js';
import {ReadMoreSection} from './web-components/global-search/ReadMoreSection.js';
import {PdfSearchTermSection} from './web-components/global-search/PdfSearchTermSection.js';
import {GlossaryResultItem} from './web-components/GlossaryResultItem.js';
import {PrepProvidersResultItem} from './web-components/PrepProvidersResultItem.js';
import {WaiverResultItem} from './web-components/WaiverResultItem.js';
import {RefresherReadingsResultItem} from './web-components/RefresherReadingsResultItem.js';
import {SocietiesResultItem} from './web-components/SocietiesResultItem.js';
import {PoliciesResultItem} from './web-components/PoliciesResultItem.js';
import {PressReleaseResultItem} from './web-components/PressReleaseResultItem.js';
import {UniversityAffiliationResultItem} from './web-components/UniversityAffiliationResultItem.js';
import {SanctionResultItem} from './web-components/SanctionResultItem.js';
import {CollectionStructureTypeSection} from './web-components/collection/CollectionStructureTypeSection.js';
import {CollectionMetadataSection} from './web-components/collection/CollectionMetadataSection.js';
import { DateRangeField } from './web-components/DateRangeField.js';
import { DateTimeField } from './web-components/DateTimeField.js';

(function ($, Drupal) {
  Drupal.behaviors.coveoWebComponents = {
    attach: function (context, settings) {
      window.customElements.define('thumbnail-section', ThumbnailSection);
      window.customElements.define('annotation-badge-section', AnnotationBadgeSection);
      window.customElements.define('title-section', TitleSection);
      window.customElements.define('body-section', BodySection);
      window.customElements.define('read-more-section', ReadMoreSection);
      window.customElements.define('pdf-search-term-section', PdfSearchTermSection);
      window.customElements.define('metadata-section', MetadataSection);
      window.customElements.define('glossary-result-item', GlossaryResultItem);
      window.customElements.define('prep-providers-result-item', PrepProvidersResultItem);
      window.customElements.define('waiver-result-item', WaiverResultItem);
      window.customElements.define('refresher-readings-result-item', RefresherReadingsResultItem);
      window.customElements.define('societies-result-item', SocietiesResultItem);
      window.customElements.define('policies-result-item', PoliciesResultItem);
      window.customElements.define('press-release-result-item', PressReleaseResultItem);
      window.customElements.define('university-affiliation-result-item', UniversityAffiliationResultItem);
      window.customElements.define('sanction-result-item', SanctionResultItem);
      window.customElements.define('collection-structure-type-section', CollectionStructureTypeSection);
      window.customElements.define('collection-metadata-section', CollectionMetadataSection);
      window.customElements.define('date-range-field', DateRangeField);
      window.customElements.define('date-time-field', DateTimeField);
    }
  }
})(jQuery, Drupal);
