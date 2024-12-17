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
                                                            <source data-srcset="{{ asset('assets/images/events.jpg') }}"
                                                                media="(min-width: 900px)" type="">
                                                            <source data-srcset="{{ asset('assets/images/events.jpg') }}"
                                                                media="(min-width: 600px) and (max-width: 899px)"
                                                                type="">
                                                            <source data-srcset="{{ asset('assets/images/events.jpg') }}"
                                                                media="(max-width: 599px)" type="">
                                                            <img class="coh-image ssa-component coh-component coh-image-responsive-xl coh-image-responsive-sm coh-image-responsive-ps  coh-style-object-fit "
                                                                loading="eager"
                                                                src="{{ asset('assets/images/events.jpg') }}"
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
                                class="coh-container ssa-component coh-component ssa-component-instance-84ac1214-d32d-4e00-b164-a08bddc80254 coh-component-instance-84ac1214-d32d-4e00-b164-a08bddc80254 match-height     background--bleed ssa-instance-4cca8c18c294a7bafffe20100f4a9a84 coh-ce-cpt_container-ba3cd04b">
                                <div class="coh-container coh-ce-cpt_container-fe57b20b coh-container-boxed">
                                    <h2 class="coh-heading ssa-component coh-component ssa-component-instance-4071deaa-62d6-4d38-b641-22c1f9fc5511 coh-component-instance-4071deaa-62d6-4d38-b641-22c1f9fc5511  dark-heading align-text-center coh-style-cfa-margin-bottom-lg     ssa-instance-06c0475b7fc0903eb4405c157784866d coh-ce-cpt_heading-b45c50fc"
                                        style="padding:4rem 0">
                                        Browse all {{ $pageName }}</h2>
                                    <div
                                        class="coh-container ssa-component coh-component ssa-component-instance-daae0a22-9583-4783-b45c-200af5285ecd coh-component-instance-daae0a22-9583-4783-b45c-200af5285ecd ssa-instance-210c8a7d219d405adb90a2ef9fb7a615 coh-ce-cpt_3_column_layout-9c402b21">
                                        <div class="coh-container ">
                                            <div class="coh-row coh-row-xl coh-row-visible-xl"
                                                data-coh-row-match-heights="[]" data-once="coh-row-match-heights-init">
                                                <div
                                                    class="coh-row-inner ssa-instance-210c8a7d219d405adb90a2ef9fb7a615 coh-ce-cpt_3_column_layout-a702800b">
                                                    <div
                                                        class="coh-column ssa-instance-210c8a7d219d405adb90a2ef9fb7a615 coh-ce-cpt_3_column_layout-869620fb coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-4 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-4 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                        <article
                                                            class="coh-container ssa-component coh-component ssa-component-instance-92296d97-b08d-49b0-86c5-4403363f4a63 coh-component-instance-92296d97-b08d-49b0-86c5-4403363f4a63 left-align  coh-style-margin-bottom-small    coh-style-card-text-light-background   ssa-instance-46ba79dab1d9c34060d29c04e7e561d7 coh-ce-cpt_content_card-59d33cb">
                                                            <div
                                                                class="coh-container card-contents coh-style-padding-small-24  coh-ce-cpt_content_card-ac37ef06">
                                                                <div class="coh-container coh-ce-cpt_content_card-76ba9c8">
                                                                    <p
                                                                        class="coh-heading ssa-component coh-component ssa-component-instance-92296d97-b08d-49b0-86c5-4403363f4a63 coh-component-instance-92296d97-b08d-49b0-86c5-4403363f4a63  card-eyebrow align-text-left coh-style-cfa-margin-bottom-sm     ssa-instance-b8d78d7f23239dbe769a1bab295f08d8 coh-ce-cpt_heading-b45c50fc">
                                                                        Survey report </p>
                                                                </div>
                                                                <h3
                                                                    class="coh-heading coh-style-headline-500 coh-style-headline-heavy coh-ce-cpt_content_card-db949cb9">
                                                                    <a href="https://rpc.cfainstitute.org/en/research/reports/2024/mercer-cfa-institute-global-pension-index-2024"
                                                                        class="coh-link card-link coh-ce-cpt_content_card-bc57a7f9"
                                                                        target="_self" aria-label=""> Mercer CFA Institute
                                                                        Global Pension Index 2024 </a>
                                                                </h3>
                                                                <p
                                                                    class="coh-paragraph coh-style-paragraph-100 coh-ce-cpt_content_card-274b01ef">
                                                                    This report rates global pension systems, recommending
                                                                    reforms to improve outcomes and participant trust in an
                                                                    era of aging populations.</p> <span
                                                                    class="coh-inline-element fake-link coh-style-display-none coh-ce-cpt_content_card-92be551f"
                                                                    aria-hidden="true"></span>
                                                            </div>
                                                            <div
                                                                class="coh-container card-media coh-ce-cpt_content_card-da9a3f30">
                                                                <img class="coh-image card-image coh-image-responsive-xl coh-lazy-loaded"
                                                                    loading="lazy"
                                                                    data-src="https://cfainstitute.widen.net/content/a819a44d-f083-4c79-b50d-284c3022fdf2/web/rpcbuilding-captial-markets.jpg?crop=yes&amp;w=768&amp;h=512&amp;itok=lG8xSZ_Z"
                                                                    alt="" data-once="lazyload-once"
                                                                    src="https://cfainstitute.widen.net/content/a819a44d-f083-4c79-b50d-284c3022fdf2/web/rpcbuilding-captial-markets.jpg?crop=yes&amp;w=768&amp;h=512&amp;itok=lG8xSZ_Z"
                                                                    data-was-processed="true">
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div
                                                        class="coh-column ssa-instance-210c8a7d219d405adb90a2ef9fb7a615 coh-ce-cpt_3_column_layout-3c85b07e coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-4 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-4 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                        <article
                                                            class="coh-container ssa-component coh-component ssa-component-instance-efb7bb66-ef4b-471c-b5bb-c52fd61f311b coh-component-instance-efb7bb66-ef4b-471c-b5bb-c52fd61f311b left-align  coh-style-margin-bottom-small    coh-style-card-text-light-background   ssa-instance-61f3b4a93960280002e6f8ea4af3d109 coh-ce-cpt_content_card-59d33cb">
                                                            <div
                                                                class="coh-container card-contents coh-style-padding-small-24  coh-ce-cpt_content_card-ac37ef06">
                                                                <div class="coh-container coh-ce-cpt_content_card-76ba9c8">
                                                                    <p
                                                                        class="coh-heading ssa-component coh-component ssa-component-instance-efb7bb66-ef4b-471c-b5bb-c52fd61f311b coh-component-instance-efb7bb66-ef4b-471c-b5bb-c52fd61f311b  card-eyebrow align-text-left coh-style-cfa-margin-bottom-sm     ssa-instance-50d57b444bdffc0273adc9b20073a7d4 coh-ce-cpt_heading-b45c50fc">
                                                                        Article </p>
                                                                </div>
                                                                <h3
                                                                    class="coh-heading coh-style-headline-500 coh-style-headline-heavy coh-ce-cpt_content_card-db949cb9">
                                                                    <a href="https://rpc.cfainstitute.org/en/research/reports/2024/smart-beta-direct-indexing-and-index-based-investment-strategies"
                                                                        class="coh-link card-link coh-ce-cpt_content_card-bc57a7f9"
                                                                        target="_self" aria-label=""> Smart Beta, Direct
                                                                        Indexing, and Index-Based Investment Strategies </a>
                                                                </h3>
                                                                <p
                                                                    class="coh-paragraph coh-style-paragraph-100 coh-ce-cpt_content_card-274b01ef">
                                                                    Our report offers an updated framework for active
                                                                    management to capture the full range of index-based
                                                                    strategies and to support investment decision making.
                                                                </p> <span
                                                                    class="coh-inline-element fake-link coh-style-display-none coh-ce-cpt_content_card-92be551f"
                                                                    aria-hidden="true"></span>
                                                            </div>
                                                            <div
                                                                class="coh-container card-media coh-ce-cpt_content_card-da9a3f30">
                                                                <img class="coh-image card-image coh-image-responsive-xl coh-lazy-loaded"
                                                                    loading="lazy"
                                                                    data-src="https://cfainstitute.widen.net/content/6dadfd31-4a32-4485-8e66-ecefa3fcc846/web/rpc-blue-rock-industry-future.jpg?crop=yes&amp;w=768&amp;h=512&amp;itok=cDzon3Rp"
                                                                    alt="" data-once="lazyload-once"
                                                                    src="https://cfainstitute.widen.net/content/6dadfd31-4a32-4485-8e66-ecefa3fcc846/web/rpc-blue-rock-industry-future.jpg?crop=yes&amp;w=768&amp;h=512&amp;itok=cDzon3Rp"
                                                                    data-was-processed="true">
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div
                                                        class="coh-column ssa-instance-210c8a7d219d405adb90a2ef9fb7a615 coh-ce-cpt_3_column_layout-591ded97 coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-4 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-4 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                        <article
                                                            class="coh-container ssa-component coh-component ssa-component-instance-a8f787e0-ba03-49fd-8b07-b1ffec5e5072 coh-component-instance-a8f787e0-ba03-49fd-8b07-b1ffec5e5072 left-align  coh-style-margin-bottom-small    coh-style-card-text-light-background   ssa-instance-936eabdb7a7b21b014e3bd94c1a51974 coh-ce-cpt_content_card-59d33cb">
                                                            <div
                                                                class="coh-container card-contents coh-style-padding-small-24  coh-ce-cpt_content_card-ac37ef06">
                                                                <div class="coh-container coh-ce-cpt_content_card-76ba9c8">
                                                                    <p
                                                                        class="coh-heading ssa-component coh-component ssa-component-instance-a8f787e0-ba03-49fd-8b07-b1ffec5e5072 coh-component-instance-a8f787e0-ba03-49fd-8b07-b1ffec5e5072  card-eyebrow align-text-left coh-style-cfa-margin-bottom-sm     ssa-instance-50d57b444bdffc0273adc9b20073a7d4 coh-ce-cpt_heading-b45c50fc">
                                                                        Article </p>
                                                                </div>
                                                                <h3
                                                                    class="coh-heading coh-style-headline-500 coh-style-headline-heavy coh-ce-cpt_content_card-db949cb9">
                                                                    <a href="https://rpc.cfainstitute.org/research/reports/2024/unstructured-data-and-ai"
                                                                        class="coh-link card-link coh-ce-cpt_content_card-bc57a7f9"
                                                                        target="_self" aria-label=""> Unstructured Data
                                                                        and AI: Fine-Tuning LLMs to Enhance the Investment
                                                                        Process </a>
                                                                </h3>
                                                                <p
                                                                    class="coh-paragraph coh-style-paragraph-100 coh-ce-cpt_content_card-274b01ef">
                                                                    This report discusses how to ethically build investment
                                                                    models in the open-source community. It defines
                                                                    alternative data and presents an ESG investing case
                                                                    study.</p> <span
                                                                    class="coh-inline-element fake-link coh-style-display-none coh-ce-cpt_content_card-92be551f"
                                                                    aria-hidden="true"></span>
                                                            </div>
                                                            <div
                                                                class="coh-container card-media coh-ce-cpt_content_card-da9a3f30">
                                                                <img class="coh-image card-image coh-image-responsive-xl coh-lazy-loaded"
                                                                    loading="lazy"
                                                                    data-src="https://cfainstitute.widen.net/content/48f2d61d-d68b-4aa6-9439-9bb5b70acd04/web/rpc-ai-red-data-and-tech.jpg?crop=yes&amp;w=768&amp;h=512&amp;itok=eZWCZiLT"
                                                                    alt="" data-once="lazyload-once"
                                                                    src="https://cfainstitute.widen.net/content/48f2d61d-d68b-4aa6-9439-9bb5b70acd04/web/rpc-ai-red-data-and-tech.jpg?crop=yes&amp;w=768&amp;h=512&amp;itok=eZWCZiLT"
                                                                    data-was-processed="true">
                                                            </div>
                                                        </article>
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
