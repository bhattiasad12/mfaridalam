@extends('layouts.app.main')

@section('content')
    @push('css')
        <style>
            .custom-gallery {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
                gap: 15px;
                max-width: 1200px;
                margin: 20px;
                padding: 10px;
                background: #fff;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }

            .custom-gallery-item {
                position: relative;
                overflow: hidden;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .custom-gallery-item img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.3s ease;
                cursor: pointer;
            }

            .custom-gallery-item:hover img {
                transform: scale(1.1);
            }

            .custom-modal {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.8);
                justify-content: center;
                align-items: center;
                z-index: 1000;
            }

            .custom-modal img {
                max-width: 90%;
                max-height: 90%;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            }

            .custom-modal .custom-close {
                position: absolute;
                top: 20px;
                right: 20px;
                font-size: 30px;
                color: #fff;
                cursor: pointer;
                background: none;
                border: none;
            }
        </style>
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
                                <a href="/events">Events</a>
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
                                class="coh-container ssa-component coh-component ssa-component-instance-84ac1214-d32d-4e00-b164-a08bddc80254 coh-component-instance-84ac1214-d32d-4e00-b164-a08bddc80254 match-height     background--bleed ssa-instance-4cca8c18c294a7bafffe20100f4a9a84 coh-ce-cpt_container-ba3cd04b">
                                <div class="coh-container coh-ce-cpt_container-fe57b20b coh-container-boxed">
                                    {{-- <h2 class="coh-heading ssa-component coh-component ssa-component-instance-4071deaa-62d6-4d38-b641-22c1f9fc5511 coh-component-instance-4071deaa-62d6-4d38-b641-22c1f9fc5511  dark-heading align-text-center coh-style-cfa-margin-bottom-lg     ssa-instance-06c0475b7fc0903eb4405c157784866d coh-ce-cpt_heading-b45c50fc"
                                        style="padding:4rem 0">
                                        Browse all {{ $pageName }}</h2> --}}
                                    <div class="custom-gallery">
                                        <div class="custom-gallery-item">
                                            <img src="{{ asset('assets/images/farid3.jpg') }}" alt="Image 1">
                                        </div>
                                        <div class="custom-gallery-item">
                                            <img src="{{ asset('assets/images/farid3.jpg') }}" alt="Image 2">

                                        </div>
                                        <div class="custom-gallery-item">
                                            <img src="{{ asset('assets/images/farid3.jpg') }}" alt="Image 3">

                                        </div>
                                        <div class="custom-gallery-item">
                                            <img src="{{ asset('assets/images/farid3.jpg') }}" alt="Image 4">

                                        </div>
                                        <div class="custom-gallery-item">
                                            <img src="{{ asset('assets/images/farid3.jpg') }}" alt="Image 5">

                                        </div>
                                        <div class="custom-gallery-item">
                                            <img src="{{ asset('assets/images/farid3.jpg') }}" alt="Image 6">

                                        </div>
                                    </div>

                                    <div class="custom-modal" id="customModal">
                                        <button class="custom-close" id="customClose">&times;</button>
                                        <img id="customModalImg" src="" alt="Modal Image">
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
    <script>
        const modal = document.getElementById('customModal');
        const modalImg = document.getElementById('customModalImg');
        const closeModal = document.getElementById('customClose');

        document.querySelectorAll('.custom-gallery-item img').forEach(img => {
            img.addEventListener('click', () => {
                modal.style.display = 'flex';
                modalImg.src = img.src;
            });
        });

        closeModal.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    </script>
@endpush
