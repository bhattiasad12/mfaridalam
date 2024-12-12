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
                                                                {{ $pageName }} </h1>
                                                            <span
                                                                class="coh-inline-element ssa-component coh-component ssa-component-instance-9249157a-3f1e-4d77-ab43-c3f6cb0fe24f coh-component-instance-9249157a-3f1e-4d77-ab43-c3f6cb0fe24f coh-style-paragraph-50  coh-style-text-color-dark-background  coh-style-cfa-margin-bottom-lg  ssa-instance-d6c68d38141400ac35fc661ec998b13b coh-ce-cpt_text-ccc8ea09">Stay
                                                                informed about changes in the industry. </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="coh-column ssa-instance-46b0422ff4e7b025fa0ca43008caaaf0 coh-ce-cpt_2_column_layout-ecfef6d5 coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-7 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-6 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                    <div class="coh-container coh-ce-cpt_hero_banner-f2668b67">
                                                        <picture>
                                                            <source data-srcset="{{ asset('assets/images/farid3.jpg') }}"
                                                                media="(min-width: 900px)" type="">
                                                            <source data-srcset="{{ asset('assets/images/farid3.jpg') }}"
                                                                media="(min-width: 600px) and (max-width: 899px)"
                                                                type="">
                                                            <source data-srcset="{{ asset('assets/images/farid3.jpg') }}"
                                                                media="(max-width: 599px)" type="">
                                                            <img class="coh-image ssa-component coh-component coh-image-responsive-xl coh-image-responsive-sm coh-image-responsive-ps  coh-style-object-fit "
                                                                loading="eager"
                                                                src="{{ asset('assets/images/farid3.jpg') }}"
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
                                <div class="coh-container coh-ce-cpt_container-fe57b20b coh-container-boxed">
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
                                                                    Muhammad Farid Alam, FCA</h2>
                                                                <div
                                                                    class="coh-wysiwyg ssa-component coh-component ssa-component-instance-ecd8d55f-acbe-49f1-b701-5ce030bcb7b6 coh-component-instance-ecd8d55f-acbe-49f1-b701-5ce030bcb7b6  coh-style-text-color-light-background       coh-style-cfa-margin-bottom-md coh-style-paragraph-100   ssa-instance-74594f6d693e12249b0d85cdbe8495d1 coh-ce-cpt_text-e4a5f5e1">
                                                                    <p><span dir="ltr"> I have over 20 years of
                                                                            experience in the financial sector. My current
                                                                            assignment as CEO AKD Securities Limited (AKDS)
                                                                            includes heading a talented team of young
                                                                            professionals who have proven their resilience
                                                                            by performing exceedingly well under the highly
                                                                            challenging conditions prevailing in the
                                                                            financial market of today. AKDS is a top notch
                                                                            corporate brokerage house of Pakistan, providing
                                                                            a full range of financial services, ranging from
                                                                            equity brokerage and investment banking to
                                                                            undertaking research and evaluation of the
                                                                            economy and an independent and thorough analysis
                                                                            of individual companies.
                                                                            <br />
                                                                            <br />
                                                                            AKDS accounts for about 8% – 10% of the volume
                                                                            traded at KSE and its Investment Banking
                                                                            division is considered to be one of the most
                                                                            active and innovative set ups in the financial
                                                                            sector. I also oversee AKD Group financials, in
                                                                            consort with CEOs of the respective group
                                                                            companies.
                                                                            <br />
                                                                            <br />
                                                                            Before joining the AKD group in 2007, I had been
                                                                            working for
                                                                            Pakistan Industrial Credit and Investment
                                                                            Corporation
                                                                            (PICIC) initially as the Head of Mutual Funds
                                                                            Division and
                                                                            later as the Head of Treasury at PICIC. During
                                                                            my tenor, the
                                                                            Net Asset Value (NAV) of the PICIC funds grew at
                                                                            a rate
                                                                            which surpassed not only the KSE- 100 Index, but
                                                                            also the
                                                                            other tougher parameters of performance set by
                                                                            the PICIC
                                                                            management. I had the vision to correctly gauge
                                                                            the
                                                                            liquidity levels prevailing during the year
                                                                            2003-04 and the
                                                                            investors’ appetite for secured investment of
                                                                            their funds.
                                                                            <br />
                                                                            <br />
                                                                            My investment banking skills grew with time,
                                                                            following the
                                                                            exposure to this specialized field, fairly early
                                                                            in my
                                                                            professional career, during my stay at Crescent
                                                                            Investment
                                                                            Bank Limited (CIBL) -the first investment bank
                                                                            in Pakistan,
                                                                            where I served in various capacities including
                                                                            Treasurer,
                                                                            Equity Strategist, Chief Financial Officer,
                                                                            Chief Internal
                                                                            Auditor and Manager Corporate Finance. During my
                                                                            last two
                                                                            years with CIBL, I was also entrusted with the
                                                                            management of
                                                                            the bank’s discretionary clients’ portfolio of
                                                                            over PKR 3
                                                                            billion.
                                                                            <br />
                                                                            <br />
                                                                            My investment banking skills grew with time,
                                                                            following the
                                                                            exposure to this specialized field, fairly early
                                                                            in my
                                                                            professional career, during my stay at Crescent
                                                                            Investment
                                                                            Bank Limited (CIBL) -the first investment bank
                                                                            in Pakistan,
                                                                            where I served in various capacities including
                                                                            Treasurer,
                                                                            Equity Strategist, Chief Financial Officer,
                                                                            Chief Internal
                                                                            Auditor and Manager Corporate Finance. During my
                                                                            last two
                                                                            years with CIBL, I was also entrusted with the
                                                                            management of
                                                                            the bank’s discretionary clients’ portfolio of
                                                                            over PKR 3
                                                                            billion.
                                                                            <br />
                                                                            <br />
                                                                            I am a fellow (FCA) of the Institute of
                                                                            Chartered
                                                                            Accountants in Pakistan (ICAP) and serve on
                                                                            various
                                                                            committees of ICAP, including a high powered
                                                                            Economic
                                                                            Advisory Committee. I am also a member of Board
                                                                            of Studies
                                                                            of IoBM (Institute of Business Management).
                                                                        </span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="coh-column ssa-instance-378da477127db0d1378c7db7bd9f8a31 coh-ce-cpt_2_column_layout-ecfef6d5 coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-6 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-6 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                        <img src="{{ asset('assets/images/2bbf7a03-a89d-4033-b202-8c45623a28ba.jpg') }}"
                                                            alt="">
                                                        <img src="{{ asset('assets/images/b12f5e6a-78e4-4dc8-baac-c0f06c902d40.jpg') }}"
                                                            alt="">
                                                        <img src="{{ asset('assets/images/90cbce89-6605-4c78-bf9b-f774601ed438.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="coh-container ssa-component coh-component ssa-component-instance-04eaeaad-a4a1-41d7-8ea7-7cc1e9fc65ba coh-component-instance-04eaeaad-a4a1-41d7-8ea7-7cc1e9fc65ba  triple-links--dark ssa-instance-e5fc42cb7d55235acc3263df69d96800 coh-ce-cpt_newsfeed-28c8b2b">
                                <div class="coh-container  coh-ce-cpt_newsfeed-5d6b4da7 coh-container-boxed">
                                    <h3 class="coh-inline-element link__label coh-style-headline-heavy coh-style-headline-500"
                                        style="color: white;padding: 4rem 0;">
                                        "Strange how much
                                        you have to know"
                                        before you know
                                        now, little you know.
                                    </h3>
                                </div>
                            </div>
                            <div
                                class="coh-container ssa-component coh-component ssa-component-instance-17d807a7-5409-421f-9b0a-6221434c0949 coh-component-instance-17d807a7-5409-421f-9b0a-6221434c0949 match-height     background--bleed ssa-instance-27e68cfae2ae990e116098fcbc5617ea coh-ce-cpt_container-ba3cd04b">
                                <div class="coh-container coh-ce-cpt_container-fe57b20b coh-container-boxed">
                                    <div
                                        class="coh-container ssa-component coh-component ssa-component-instance-397c9456-5487-4bfb-bbee-e293ba1996aa coh-component-instance-397c9456-5487-4bfb-bbee-e293ba1996aa ssa-instance-57f4e70ce9586602d8ad2a08eeae3878 coh-ce-cpt_2_column_layout-228dfee8">
                                        <div class="coh-container ">
                                            <div class="coh-row coh-row-xl coh-row-visible-xl"
                                                data-coh-row-match-heights="[]">
                                                <div
                                                    class="coh-row-inner ssa-instance-57f4e70ce9586602d8ad2a08eeae3878 coh-ce-cpt_2_column_layout-8364854d">
                                                    <div
                                                        class="coh-column ssa-instance-57f4e70ce9586602d8ad2a08eeae3878 coh-ce-cpt_2_column_layout-1f4e3db coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-6 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-6 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                        <h2
                                                            class="coh-heading ssa-component coh-component ssa-component-instance-16fbe3c9-cac8-4175-87dc-11371ef1f237 coh-component-instance-16fbe3c9-cac8-4175-87dc-11371ef1f237  light-heading align-text-left coh-style-cfa-margin-bottom-lg     ssa-instance-9a7f77c8f24f88c5c4aa8aa14a3fd793 coh-ce-cpt_heading-b45c50fc">
                                                            Latest
                                                            CEO AKD Securities Limited (AKDS) </h2>
                                                        <div
                                                            class="coh-wysiwyg ssa-component coh-component ssa-component-instance-f21ab005-3355-4abe-96d4-588952153427 coh-component-instance-f21ab005-3355-4abe-96d4-588952153427  coh-style-text-color-dark-background       coh-style-cfa-margin-bottom-md    ssa-instance-7ab6e112073df199a5e217fffd6a6d3d coh-ce-cpt_text-e4a5f5e1">
                                                            <p>I have the honor of representing Pakistan at various
                                                                international forums in United States, United Kingdom,
                                                                Germany, Malaysia, India, Singapore, Mauritius and Hong
                                                                Kong. My articles on professional issues frequently appear
                                                                in such prestigious newspapers as Khaleej Times, The Express
                                                                Tribune, Business Recorder, Financial Daily etc in addition
                                                                to the journals of various professional bodies. I am also
                                                                often invited by the television channels in Pakistan for
                                                                broadcasting my professional comments, as an expert on
                                                                topics relating to Money Markets, Capital Markets & the
                                                                Economy.
                                                                <br />
                                                                <br />
                                                                Over the years my team and I at AKDS have won several awards
                                                                and accolades including recognitions from the prestigious
                                                                CFA Association of Pakistan such as the ‘Best Brokerage
                                                                House of the Year’ and ‘Best Corporate Finance House of the
                                                                Year’ awards. Lately in March 2013, I was awarded
                                                                Professional Excellence Award (1st position) on acting as an
                                                                advisor and arranger for the “Participation Term
                                                                Certificate” Issued by Treet Corporation Limited by ICAP.
                                                            </p>
                                                        </div>
                                                        {{-- <div
                                                        class="coh-container ssa-component coh-component ssa-component-instance-07f58fc7-2ee5-45bd-aca4-e6c0740d2027 coh-component-instance-07f58fc7-2ee5-45bd-aca4-e6c0740d2027  ssa-instance-32e3132f2be990934d2958cf740e5a05 coh-ce-cpt_link-480bb5f4">
                                                        <a href="programs/cfa-program.html"
                                                            class="coh-link coh_buttons_item     coh-style-link-button-neutral coh-style-text-color-dark-background   ssa-instance-32e3132f2be990934d2958cf740e5a05 coh-ce-cpt_link-5dc08d081 coh-ce-cpt_link-5dc08d08"
                                                            target="_self"> Find out what it takes </a>
                                                    </div> --}}
                                                    </div>
                                                    <div
                                                        class="coh-column ssa-instance-57f4e70ce9586602d8ad2a08eeae3878 coh-ce-cpt_2_column_layout-ecfef6d5 coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-6 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-6 coh-col-xl-push-0 coh-col-xl-pull-0">

                                                        <img src="{{ asset('assets/images/932ec226-3d75-434c-b9a5-3172d235a209.jpg') }}"
                                                            alt="">
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
