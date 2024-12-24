@extends('layouts.app.main')

@section('content')
    @push('css')
        <style>
            .custom-container {
                max-width: 1200px;
                margin: 20px auto;
                padding: 0 20px;
            }

            .custom-video-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 16px;
            }

            .custom-video-card {
                background: #fff;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
                overflow: hidden;
                transition: transform 0.3s, box-shadow 0.3s;
                cursor: pointer;
            }

            .custom-video-card:hover {
                transform: scale(1.05);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .custom-video-card img {
                width: 100%;
                height: 150px;
                object-fit: cover;
            }

            .custom-video-card .custom-info {
                padding: 10px;
            }

            .custom-video-card .custom-info h3 {
                font-size: 14px;
                margin-bottom: 8px;
                overflow: hidden;
                /* white-space: nowrap; */
                text-overflow: ellipsis;
            }

            .custom-modal {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.8);
                display: none;
                justify-content: center;
                align-items: center;
                z-index: 1000;
            }

            .custom-modal.active {
                display: flex;
            }

            .custom-modal-content {
                position: relative;
                width: 90%;
                max-width: 800px;
                background: #000;
                border-radius: 8px;
                overflow: hidden;
            }

            .custom-modal-content iframe {
                width: 100%;
                height: 450px;
                border: none;
            }

            .custom-modal-close {
                position: absolute;
                top: 10px;
                right: 10px;
                background: #fff;
                border: none;
                border-radius: 50%;
                width: 30px;
                height: 30px;
                font-size: 20px;
                line-height: 30px;
                text-align: center;
                cursor: pointer;
            }

            .custom-modal-close:hover {
                background: #f00;
                color: #fff;
            }

            .custom-loader {
                text-align: center;
                margin: 20px 0;
            }

            .custom-loader img {
                width: 50px;
                height: 50px;
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
                                                                {{ strtoupper($pageName) }}</h1>
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
                                                            <source
                                                                data-srcset="{{ asset('assets/images/3f1b64b2-57c7-4003-a8ce-ac96c6128c74.avif') }}"
                                                                media="(min-width: 900px)" type="">
                                                            <source
                                                                data-srcset="{{ asset('assets/images/3f1b64b2-57c7-4003-a8ce-ac96c6128c74.avif') }}"
                                                                media="(min-width: 600px) and (max-width: 899px)"
                                                                type="">
                                                            <source
                                                                data-srcset="{{ asset('assets/images/3f1b64b2-57c7-4003-a8ce-ac96c6128c74.avif') }}"
                                                                media="(max-width: 599px)" type="">
                                                            <img class="coh-image ssa-component coh-component coh-image-responsive-xl coh-image-responsive-sm coh-image-responsive-ps  coh-style-object-fit "
                                                                loading="eager"
                                                                src="{{ asset('assets/images/3f1b64b2-57c7-4003-a8ce-ac96c6128c74.avif') }}"
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
                                <div class="coh-container coh-ce-cpt_container-fe57b20b coh-container-boxed" id="table">
                                    <h2 class="coh-heading ssa-component coh-component ssa-component-instance-d7032d65-00b4-4d4c-b659-eb632d58d0cb coh-component-instance-d7032d65-00b4-4d4c-b659-eb632d58d0cb  dark-heading align-text-left coh-style-cfa-margin-top-lg  ssa-instance-177f0c499a6f4f7476f53009d5491bb7 coh-ce-cpt_heading-b45c50fc"
                                        style="padding:4rem 0 4rem 0">
                                        {{-- Browse all {{ $pageName }}  --}}
                                    </h2>
                                    <div class="custom-container">
                                        <div class="custom-video-grid">
                                            @foreach ($data as $video)
                                                <div class="custom-video-card" data-video-id="{{ $video['url'] }}">
                                                    <img src="http://img.youtube.com/vi/{{ $video['url'] }}/hqdefault.jpg"
                                                        alt="Video Thumbnail">
                                                    <div class="custom-info">
                                                        <h3>{{ $video['name'] }}</h3>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="custom-loader" id="customLoader" style="display: none;">
                                        <img src="loader.gif" alt="Loading...">
                                    </div>
                                    <!-- Modal -->
                                    <div class="custom-modal" id="customVideoModal">
                                        <div class="custom-modal-content">
                                            <button class="custom-modal-close" id="customCloseModal">&times;</button>
                                            <iframe id="customVideoIframe" src="" allowfullscreen></iframe>
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
    <script>
        const customModal = document.getElementById('customVideoModal');
        const customIframe = document.getElementById('customVideoIframe');
        const customCloseModal = document.getElementById('customCloseModal');
        const customVideoCards = document.querySelectorAll('.custom-video-card');

        customVideoCards.forEach(card => {
            card.addEventListener('click', () => {
                const videoId = card.getAttribute('data-video-id');
                customIframe.src = `https://www.youtube.com/embed/${videoId}`;
                customModal.classList.add('active');
            });
        });

        customCloseModal.addEventListener('click', () => {
            customIframe.src = '';
            customModal.classList.remove('active');
        });

        customModal.addEventListener('click', (e) => {
            if (e.target === customModal) {
                customIframe.src = '';
                customModal.classList.remove('active');
            }
        });
    </script>
    <script>
        const customContainer = document.querySelector('.custom-video-grid');
        let nextPageUrl = "{{ $data->nextPageUrl() }}";

        const observer = new IntersectionObserver(async (entries) => {
            const lastEntry = entries[0];
            if (lastEntry.isIntersecting && nextPageUrl) {

                observer.unobserve(lastEntry.target); // Prevent multiple triggers
                const response = await fetch(nextPageUrl, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });
                const result = await response.json();

                // Append new videos to the container
                customContainer.insertAdjacentHTML('beforeend', result.data);

                // Update the next page URL
                nextPageUrl = result.nextPageUrl;

                // Re-observe the last video card
                const newLastVideoCard = customContainer.lastElementChild;
                if (newLastVideoCard) observer.observe(newLastVideoCard);
            }
        }, {
            rootMargin: '100px'
        });

        // Observe the last video card initially
        const initialLastVideoCard = customContainer.lastElementChild;
        if (initialLastVideoCard) observer.observe(initialLastVideoCard);
    </script>
@endpush
