@extends('layouts.app.main')

@section('content')
    @push('css')
        <link rel="stylesheet" media="all" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    @endpush
    <div class="coh-container coh-style-focusable-content coh-style-paragraph-100 coh-ce-bfd264e3" id="main-content">
        <div class="coh-block">
            <div class="coh-container breadcrumbs">
                <div class="coh-container-boxed">
                    <nav role="navigation" aria-labelledby="system-breadcrumb">
                        <h2 id="system-breadcrumb" class="visually-hidden">Breadcrumb</h2>
                        <ol>
                            <li class="coh-style-paragraph-300">
                                <a href="/">Home</a>
                            </li>
                            <li class="coh-style-paragraph-300">
                                <a href="#">{{ $pageName }}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="coh-container content-region coh-ce-6d56d4bb">
            <div>
                <article>
                    <div class="coh-container coh-ce-8a31fe82">
                        <div>
                            <div
                                class="coh-container ssa-component coh-component ssa-component-instance-9249157a-3f1e-4d77-ab43-c3f6cb0fe24f coh-component-instance-9249157a-3f1e-4d77-ab43-c3f6cb0fe24f  coh-style-text-color-dark-background ssa-instance-4b302a1577be1a61eb5cdd88208c868b coh-ce-cpt_hero_banner-e2ec4263">
                                <div
                                    class="coh-container ssa-component coh-component ssa-component-instance-9249157a-3f1e-4d77-ab43-c3f6cb0fe24f coh-component-instance-9249157a-3f1e-4d77-ab43-c3f6cb0fe24f ssa-instance-46b0422ff4e7b025fa0ca43008caaaf0 coh-ce-cpt_2_column_layout-228dfee8">
                                    <div class="coh-container coh-container-boxed">
                                        <div class="coh-row coh-row-xl coh-row-visible-xl" data-coh-row-match-heights="[]"
                                            data-once="coh-row-match-heights-init">
                                            <div
                                                class="coh-row-inner ssa-instance-46b0422ff4e7b025fa0ca43008caaaf0 coh-ce-cpt_2_column_layout-8364854d">
                                                <div
                                                    class="coh-column ssa-instance-46b0422ff4e7b025fa0ca43008caaaf0 coh-ce-cpt_2_column_layout-1f4e3db coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-5 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-6 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                    <div
                                                        class="coh-container ssa-component coh-component ssa-component-instance-9249157a-3f1e-4d77-ab43-c3f6cb0fe24f coh-component-instance-9249157a-3f1e-4d77-ab43-c3f6cb0fe24f match-height     No ssa-instance-e75211e4d5a5165c35190253a494fefb coh-ce-cpt_container-ba3cd04b">
                                                        <div class="coh-container coh-ce-cpt_container-fe57b20b ">
                                                            <h1
                                                                class="coh-heading ssa-component coh-component ssa-component-instance-9249157a-3f1e-4d77-ab43-c3f6cb0fe24f coh-component-instance-9249157a-3f1e-4d77-ab43-c3f6cb0fe24f coh-style-headline-100 coh-style-text-color-dark-background align-text-left coh-style-cfa-margin-bottom-sm     ssa-instance-e43e33f0edee0753341d7d614e3a2b59 coh-ce-cpt_heading-b45c50fc">
                                                                {{ strtoupper($pageName) }} </h1>
                                                            {{-- <span
                                                                class="coh-inline-element ssa-component coh-component ssa-component-instance-9249157a-3f1e-4d77-ab43-c3f6cb0fe24f coh-component-instance-9249157a-3f1e-4d77-ab43-c3f6cb0fe24f coh-style-paragraph-50  coh-style-text-color-dark-background  coh-style-cfa-margin-bottom-lg  ssa-instance-d6c68d38141400ac35fc661ec998b13b coh-ce-cpt_text-ccc8ea09">Stay
                                                                informed about changes in the industry. </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="coh-column ssa-instance-46b0422ff4e7b025fa0ca43008caaaf0 coh-ce-cpt_2_column_layout-ecfef6d5 coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-7 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-6 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                    <div class="coh-container coh-ce-cpt_hero_banner-f2668b67">
                                                        <picture>
                                                            <source data-srcset="{{ asset('assets/images/about_me.avif') }}"
                                                                media="(min-width: 900px)" type="">
                                                            <source data-srcset="{{ asset('assets/images/about_me.avif') }}"
                                                                media="(min-width: 600px) and (max-width: 899px)"
                                                                type="">
                                                            <source data-srcset="{{ asset('assets/images/about_me.avif') }}"
                                                                media="(max-width: 599px)" type="">
                                                            <img class="coh-image ssa-component coh-component coh-image-responsive-xl coh-image-responsive-sm coh-image-responsive-ps  coh-style-object-fit "
                                                                loading="eager"
                                                                src="{{ asset('assets/images/about_me.avif') }}"
                                                                alt="Reading on laptop">
                                                        </picture>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="coh-container ssa-component coh-component ssa-component-instance-8aef2da1-2b6f-4f0c-96fe-00cd9248fc3c coh-component-instance-8aef2da1-2b6f-4f0c-96fe-00cd9248fc3c match-height      ssa-instance-065d880069483dd40ff3f8fb1af2f205 coh-ce-cpt_container-ba3cd04b">
                                <div class="coh-container coh-ce-cpt_container-fe57b20b">
                                    <div
                                        class="coh-container ssa-component coh-component ssa-component-instance-eb795cd9-55c6-46cc-8dec-c42c11da629e coh-component-instance-eb795cd9-55c6-46cc-8dec-c42c11da629e ssa-instance-378da477127db0d1378c7db7bd9f8a31 coh-ce-cpt_2_column_layout-228dfee8">
                                        <div class="coh-container coh-container-boxed">
                                            <div class="coh-row coh-row-xl coh-row-visible-xl"
                                                data-coh-row-match-heights="[]" data-once="coh-row-match-heights-init">
                                                <div
                                                    class="coh-row-inner ssa-instance-378da477127db0d1378c7db7bd9f8a31 coh-ce-cpt_2_column_layout-8364854d">
                                                    <div
                                                        class="coh-column ssa-instance-378da477127db0d1378c7db7bd9f8a31 coh-ce-cpt_2_column_layout-1f4e3db coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-6 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-6 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                        <div
                                                            class="coh-container ssa-component coh-component ssa-component-instance-13bc5f13-8653-4654-af9b-27b593a95c93 coh-component-instance-13bc5f13-8653-4654-af9b-27b593a95c93 match-height     No ssa-instance-ca713413f17e4a42b4963146bb229b79 coh-ce-cpt_container-ba3cd04b">
                                                            <div class="coh-container coh-ce-cpt_container-fe57b20b ">
                                                                <h2
                                                                    class="coh-heading ssa-component coh-component ssa-component-instance-76563179-eeb5-42fa-b634-beb2bd110b2b coh-component-instance-76563179-eeb5-42fa-b634-beb2bd110b2b  dark-heading align-text-left coh-style-cfa-margin-bottom-lg     ssa-instance-8f7a7610536af1e1b8b7bd8abc9df389 coh-ce-cpt_heading-b45c50fc">
                                                                    Vision and Philosophy</h2>
                                                                <div
                                                                    class="coh-wysiwyg ssa-component coh-component ssa-component-instance-ecd8d55f-acbe-49f1-b701-5ce030bcb7b6 coh-component-instance-ecd8d55f-acbe-49f1-b701-5ce030bcb7b6  coh-style-text-color-light-background       coh-style-cfa-margin-bottom-md coh-style-paragraph-100   ssa-instance-74594f6d693e12249b0d85cdbe8495d1 coh-ce-cpt_text-e4a5f5e1">
                                                                    <p>Muhammad Farid Alam believes that true expertise
                                                                        comes from an intricate understanding of the
                                                                        financial ecosystem and the ability to adapt to its
                                                                        ever-changing dynamics. As he aptly quotes:</p>
                                                                    <span
                                                                        style="color: black;padding: 4rem 0; font-size: large">
                                                                        "Strange how much you have to know before you know
                                                                        how little you know."
                                                                    </span>
                                                                    </br>
                                                                    </br>
                                                                    <p>For more insights, visit: <a
                                                                            href="https://www.mfaridalam.com"
                                                                            target="_blank">www.mfaridalam.com</a>.</p>
                                                                    </br>
                                                                    </br>
                                                                    <h3>About Muhammad Farid Alam, FCA</h3>
                                                                    </br>
                                                                    <p>
                                                                        Muhammad Farid Alam, FCA, brings over 20 years of
                                                                        distinguished diversified experience in the
                                                                        financial sector both from public and private
                                                                        sector. As the Chief Executive Officer of AKD
                                                                        Securities Limited (AKDSL), he leads a dynamic team
                                                                        of young professionals who consistently demonstrate
                                                                        resilience and excellence in navigating the highly
                                                                        challenging financial markets of today. Under his
                                                                        leadership, AKDSL has solidified its position as one
                                                                        of Pakistan's premier corporate brokerage houses,
                                                                        offering a comprehensive suite of financial services
                                                                        including equity, money market, forex, brokerage,
                                                                        investment banking, economic research, and in-depth
                                                                        company analysis.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="coh-column ssa-instance-378da477127db0d1378c7db7bd9f8a31 coh-ce-cpt_2_column_layout-ecfef6d5 coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-6 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-6 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                        <img src="{{ asset('assets/images/ac44e17a-3d71-4979-ac23-b85f8134d992.avif') }}"
                                                            alt=""
                                                            style="margin-bottom:3rem; border:  8px solid #224366;">
                                                        <img src="{{ asset('assets/images/0af184ad-ecbf-460b-8fbe-afa139925b67.avif') }}"
                                                            alt=""
                                                            style="margin-bottom:3rem ; border:  8px solid #224366;">
                                                        {{-- <img src="{{ asset('assets/images/3f1b64b2-57c7-4003-a8ce-ac96c6128c74.avif') }}"
                                                            alt="" style="border:  8px solid #224366;"> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div
                                class="coh-container ssa-component coh-component ssa-component-instance-04eaeaad-a4a1-41d7-8ea7-7cc1e9fc65ba coh-component-instance-04eaeaad-a4a1-41d7-8ea7-7cc1e9fc65ba  triple-links--dark ssa-instance-e5fc42cb7d55235acc3263df69d96800 coh-ce-cpt_newsfeed-28c8b2b">
                                <div class="coh-container  coh-ce-cpt_newsfeed-5d6b4da7 coh-container-boxed">
                                    <h3 class="coh-inline-element link__label coh-style-headline-heavy coh-style-headline-500 friendly-quotes"
                                        style="color: white;padding: 4rem 0; font-size: xx-large">
                                        "Strange how much
                                        you have to know"
                                        before you know
                                        now, little you know.
                                    </h3>
                                </div>
                            </div> --}}
                            <div
                                class="coh-container ssa-component coh-component ssa-component-instance-17d807a7-5409-421f-9b0a-6221434c0949 coh-component-instance-17d807a7-5409-421f-9b0a-6221434c0949 match-height background--bleed ssa-instance-27e68cfae2ae990e116098fcbc5617ea coh-ce-cpt_container-ba3cd04b">
                                <div class="coh-container coh-ce-cpt_container-fe57b20b coh-container-boxed">
                                    <div
                                        class="coh-container ssa-component coh-component ssa-component-instance-397c9456-5487-4bfb-bbee-e293ba1996aa coh-component-instance-397c9456-5487-4bfb-bbee-e293ba1996aa ssa-instance-57f4e70ce9586602d8ad2a08eeae3878 coh-ce-cpt_2_column_layout-228dfee8">
                                        <div class="coh-container">
                                            <div class="coh-row coh-row-xl coh-row-visible-xl"
                                                data-coh-row-match-heights="[]">
                                                <div
                                                    class="coh-row-inner ssa-instance-57f4e70ce9586602d8ad2a08eeae3878 coh-ce-cpt_2_column_layout-8364854d">
                                                    <div
                                                        class="coh-column ssa-instance-57f4e70ce9586602d8ad2a08eeae3878 coh-ce-cpt_2_column_layout-1f4e3db coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-6 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-6 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                        <h2
                                                            class="coh-heading ssa-component coh-component ssa-component-instance-16fbe3c9-cac8-4175-87dc-11371ef1f237 coh-component-instance-16fbe3c9-cac8-4175-87dc-11371ef1f237 light-heading align-text-left coh-style-cfa-margin-bottom-lg ssa-instance-9a7f77c8f24f88c5c4aa8aa14a3fd793 coh-ce-cpt_heading-b45c50fc">
                                                            Professional Journey</h2>
                                                        <div
                                                            class="coh-wysiwyg ssa-component coh-component ssa-component-instance-f21ab005-3355-4abe-96d4-588952153427 coh-component-instance-f21ab005-3355-4abe-96d4-588952153427 coh-style-text-color-dark-background coh-style-cfa-margin-bottom-md ssa-instance-7ab6e112073df199a5e217fffd6a6d3d coh-ce-cpt_text-e4a5f5e1">
                                                            <p><strong>AKD Group (2007 - Present)</strong></p>
                                                            <p>Before joining the AKD Group, Muhammad Farid Alam made
                                                                significant contributions to the financial sector:</p>
                                                            <p><strong>Pakistan Industrial Credit and Investment Corporation
                                                                    (PICIC)</strong></p>
                                                            <ul>
                                                                <li>Held pivotal roles including Head of Mutual Funds
                                                                    Division and Head of Treasury.</li>
                                                                <li>During his tenure, the Net Asset Value (NAV) of PICIC
                                                                    funds outperformed the KSE-100 Index and exceeded
                                                                    performance benchmarks set by management.</li>
                                                                <li>His foresight in 2003-2004 allowed him to accurately
                                                                    assess liquidity levels and investors’ appetite for
                                                                    secure investments, achieving remarkable results.</li>
                                                            </ul>
                                                            <p><strong>Crescent Investment Bank Limited (CIBL)</strong></p>
                                                            <ul>
                                                                <li>Gained early exposure to investment banking at
                                                                    Pakistan’s first investment bank.</li>
                                                                <li>Served in key roles such as Treasurer, Equity
                                                                    Strategist, Chief Financial Officer, Chief Internal
                                                                    Auditor, and Manager Corporate Finance.</li>
                                                                <li>Managed a discretionary client portfolio exceeding PKR 3
                                                                    billion, showcasing his expertise in portfolio
                                                                    management and strategic financial planning, at a fairly
                                                                    earlier stage in his professional career.</li>
                                                            </ul>
                                                            <p><strong>Professional Accreditations and
                                                                    Contributions</strong></p>
                                                            <p>Muhammad Farid Alam is a Fellow Chartered Accountant (FCA) of
                                                                the Institute of Chartered Accountants of Pakistan (ICAP).
                                                                He actively contributes to ICAP through his involvement in
                                                                various committees, including the Economic Advisory
                                                                Committee. He also serves on the Board of Advanced Studies
                                                                (BASR) of the Institute of Business Management (IoBM), Board
                                                                member of Bahria Foundation, and Hamdard University.</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="coh-column ssa-instance-57f4e70ce9586602d8ad2a08eeae3878 coh-ce-cpt_2_column_layout-ecfef6d5 coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-6 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-6 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                        <img src="{{ asset('assets/images/424d176d-93d9-4fa1-8798-ea95bc59ca32.avif') }}"
                                                            alt=""
                                                            style="margin-bottom:3rem; border:  8px solid #fff;">
                                                        <img src="{{ asset('assets/images/event.avif') }}"
                                                            alt=""
                                                            style="margin-bottom:3rem; border:  8px solid #fff;">
                                                        {{-- <img src="{{ asset('assets/images/932ec226-3d75-434c-b9a5-3172d235a209.avif') }}"
                                                            alt="" style="border: 8px solid #fff;"> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="coh-container ssa-component coh-component ssa-component-instance-8aef2da1-2b6f-4f0c-96fe-00cd9248fc3c coh-component-instance-8aef2da1-2b6f-4f0c-96fe-00cd9248fc3c match-height      ssa-instance-065d880069483dd40ff3f8fb1af2f205 coh-ce-cpt_container-ba3cd04b">
                                <div class="coh-container coh-ce-cpt_container-fe57b20b">
                                    <div
                                        class="coh-container ssa-component coh-component ssa-component-instance-eb795cd9-55c6-46cc-8dec-c42c11da629e coh-component-instance-eb795cd9-55c6-46cc-8dec-c42c11da629e ssa-instance-378da477127db0d1378c7db7bd9f8a31 coh-ce-cpt_2_column_layout-228dfee8">
                                        <div class="coh-container coh-container-boxed">
                                            <div class="coh-row coh-row-xl coh-row-visible-xl"
                                                data-coh-row-match-heights="[]" data-once="coh-row-match-heights-init">
                                                <div
                                                    class="coh-row-inner ssa-instance-378da477127db0d1378c7db7bd9f8a31 coh-ce-cpt_2_column_layout-8364854d">
                                                    <div
                                                        class="coh-column ssa-instance-378da477127db0d1378c7db7bd9f8a31 coh-ce-cpt_2_column_layout-1f4e3db coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-6 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-6 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                        <div
                                                            class="coh-container ssa-component coh-component ssa-component-instance-13bc5f13-8653-4654-af9b-27b593a95c93 coh-component-instance-13bc5f13-8653-4654-af9b-27b593a95c93 match-height     No ssa-instance-ca713413f17e4a42b4963146bb229b79 coh-ce-cpt_container-ba3cd04b">
                                                            <div class="coh-container coh-ce-cpt_container-fe57b20b">
                                                                <h2
                                                                    class="coh-heading ssa-component coh-component ssa-component-instance-76563179-eeb5-42fa-b634-beb2bd110b2b coh-component-instance-76563179-eeb5-42fa-b634-beb2bd110b2b dark-heading align-text-left coh-style-cfa-margin-bottom-lg     ssa-instance-8f7a7610536af1e1b8b7bd8abc9df389 coh-ce-cpt_heading-b45c50fc" style="white-space: nowrap;">
                                                                    Recognition and Achievements
                                                                </h2>
                                                                <div
                                                                    class="coh-wysiwyg ssa-component coh-component ssa-component-instance-ecd8d55f-acbe-49f1-b701-5ce030bcb7b6 coh-component-instance-ecd8d55f-acbe-49f1-b701-5ce030bcb7b6 coh-style-text-color-light-background       coh-style-cfa-margin-bottom-md coh-style-paragraph-100   ssa-instance-74594f6d693e12249b0d85cdbe8495d1 coh-ce-cpt_text-e4a5f5e1">
                                                                    <p>
                                                                        • Represented Pakistan at numerous international
                                                                        forums across the United States, United Kingdom,
                                                                        China, Germany, Malaysia, India, Singapore,
                                                                        Mauritius, and Hong Kong to name a few.
                                                                    </p>
                                                                    <p>
                                                                        • Regularly publishes articles in leading newspapers
                                                                        and professional journals, including Khaleej Times,
                                                                        The Express Tribune, Business Recorder, and
                                                                        Financial Daily.
                                                                    </p>
                                                                    <p>
                                                                        • Frequently invited as an expert guest on
                                                                        television channels in Pakistan to provide insights
                                                                        on Money Markets, Capital Markets, and the Economy.
                                                                    </p>
                                                                    <p>
                                                                        • Recipient of the Professional Excellence Award by
                                                                        ICAP for his advisory role in Treet Corporation
                                                                        Limited’s "Participation Term Certificate" issuance.
                                                                    </p>
                                                                    <h3>Awards and Accolades at AKDSL</h3>
                                                                    <p>
                                                                        Under his stewardship, AKDSL has won several
                                                                        prestigious awards, including:
                                                                    </p>
                                                                    <ul>
                                                                        <li>Best Brokerage House of the Year 2015</li>
                                                                        <li>Top Broker – Karachi by PME (Pakistan Mercantile
                                                                            Exchange) 2024</li>
                                                                        <li>Best Investment Forecast Award 2024</li>
                                                                        <li>Best Strategist 2018</li>
                                                                        <li>Best Corporate Finance House of the Year by the
                                                                            CFA Association of Pakistan. 2015</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="coh-column ssa-instance-378da477127db0d1378c7db7bd9f8a31 coh-ce-cpt_2_column_layout-ecfef6d5 coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-6 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-6 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                        {{-- <img src="{{ asset('assets/images/ac44e17a-3d71-4979-ac23-b85f8134d992.avif') }}"
                                                            alt=""
                                                            style="margin-bottom:3rem; border:  8px solid #224366;">
                                                        <img src="{{ asset('assets/images/ac44e17a-3d71-4979-ac23-b85f8134d992.avif') }}"
                                                            alt=""
                                                            style="margin-bottom:3rem; border:  8px solid #224366;"> --}}
                                                        <img src="{{ asset('assets/images/932ec226-3d75-434c-b9a5-3172d235a209.avif') }}"
                                                            alt="" style="border: 8px solid #224366;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </article>

            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script>
        new DataTable('#example');
    </script>
@endpush
