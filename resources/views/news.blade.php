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
                                                            <source data-srcset="{{ asset('assets/images/news.avif') }}"
                                                                media="(min-width: 900px)" type="">
                                                            <source data-srcset="{{ asset('assets/images/news.avif') }}"
                                                                media="(min-width: 600px) and (max-width: 899px)"
                                                                type="">
                                                            <source data-srcset="{{ asset('assets/images/news.avif') }}"
                                                                media="(max-width: 599px)" type="">
                                                            <img class="coh-image ssa-component coh-component coh-image-responsive-xl coh-image-responsive-sm coh-image-responsive-ps  coh-style-object-fit "
                                                                loading="eager" src="{{ asset('assets/images/news.avif') }}"
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
                                class="coh-container ssa-component coh-component ssa-component-instance-5c81f785-6a71-4793-975b-c25f42c26402 coh-component-instance-5c81f785-6a71-4793-975b-c25f42c26402 match-height      ssa-instance-40869572dc601e75ba24ccd4877c87d3 coh-ce-cpt_container-ba3cd04b">
                                <div class="coh-container coh-ce-cpt_container-fe57b20b coh-container-boxed" style="margin-bottom: 4rem;">
                                    <h2 class="coh-heading ssa-component coh-component ssa-component-instance-d7032d65-00b4-4d4c-b659-eb632d58d0cb coh-component-instance-d7032d65-00b4-4d4c-b659-eb632d58d0cb  dark-heading align-text-left coh-style-cfa-margin-top-lg  ssa-instance-177f0c499a6f4f7476f53009d5491bb7 coh-ce-cpt_heading-b45c50fc"
                                        style="padding:4rem 0 4rem 0">
                                        {{-- Browse all {{ $pageName }}  --}}
                                    </h2>
                                    <table id="example" class="stripe" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Action</th>
                                                {{-- <th>Date</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($data->isEmpty())
                                                <p>No records found.</p>
                                            @else
                                                @foreach ($data as $value)
                                                    <tr>
                                                        <td style="width:80%">{{ $value->name }}</td>
                                                        <td style="width:20%"><a href="{{ $value->path }}"
                                                                target="_blank">View</a></td>
                                                        {{-- <td>12-12-12</td> --}}
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
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
        $('#example').DataTable({
            columnDefs: [{
                width: '90%',
                targets: 0
            }],
            responsive: true
        });
    </script>
@endpush
