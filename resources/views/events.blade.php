@extends('layouts.app.main')

@section('content')
    @push('css')
        <style>
            /* Modal Styles */
            .modal-description {
                font-size: 16px;
                color: #555;
                margin: 0 2rem 2rem 2rem;
            }

            .image-viewer {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 2000;
                background-color: rgba(0, 0, 0, 0.9);
                justify-content: center;
                align-items: center;
            }

            .image-viewer-overlay {
                position: absolute;
                width: 100%;
                height: 100%;
                background: transparent;
            }

            .image-viewer-content {
                position: relative;
                text-align: center;
                max-width: 90%;
                max-height: 90%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin: auto;
            }

            .viewer-image {
                padding: 15%;
                max-width: 80%;
                max-height: 80%;
                border-radius: 8px;
                margin: 20px auto;
            }

            .viewer-caption {
                margin-top: 10px;
                font-size: 16px;
                color: #ccc;
                text-align: center;
            }

            /* Close Button */
            .image-viewer-close {
                position: fixed;
                top: 20px;
                right: 20px;
                font-size: 24px;
                cursor: pointer;
                color: white;
                transition: color 0.3s;
                z-index: 10;
            }

            .image-viewer-close:hover {
                color: #e74c3c;
            }


            /* Navigation Buttons */
            .image-viewer-nav {
                position: fixed;
                top: 50%;
                width: 100%;
                display: flex;
                justify-content: space-between;
                transform: translateY(-50%);
                z-index: 10;
                pointer-events: none;
                /* Prevent interfering with the image clicks */
            }

            .viewer-prev,
            .viewer-next {
                background-color: rgba(0, 0, 0, 0.6);
                color: white;
                border: none;
                padding: 10px 20px;
                font-size: 20px;
                cursor: pointer;
                border-radius: 4px;
                pointer-events: auto;
                /* Enable click events for the buttons */
                transition: background-color 0.3s;
            }

            .viewer-prev:hover,
            .viewer-next:hover {
                background-color: rgba(0, 0, 0, 0.8);
            }


            /* Event Card Styles */
            .event-card {
                border: 1px solid #ddd;
                border-radius: 8px;
                margin: 16px;
                padding: 16px;
                transition: box-shadow 0.3s;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                height: 100%;
            }

            .event-card:hover {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .event-card-content {
                text-align: center;
                flex-grow: 1;
            }

            .event-title {
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 8px;
            }

            .event-description {
                font-size: 14px;
                color: #555;
                margin-bottom: 12px;
            }

            .event-image {
                width: 100%;
                height: auto;
                border-radius: 8px;
                cursor: pointer;
                transition: transform 0.3s;
            }

            .event-image:hover {
                transform: scale(1.05);
            }

            .card-media {
                position: relative;
                width: 100%;
                padding-top: 56.25%;
                /* 16:9 aspect ratio (height = 9/16 * 100) */
                overflow: hidden;
                border-radius: 8px 8px 0 0;
                background-color: #f0f0f0;
                /* Placeholder background for empty spaces */
            }

            .card-media img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: contain;
                /* object-position: top; */
                /* object-fit: contain; */
                /* Ensures the image fills the container without distortion */
                border-radius: inherit;
            }


            /* Custom Modal Styles */
            .custom-modal {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1000;
                background-color: rgba(0, 0, 0, 0.5);
                overflow-y: auto;
            }

            .modal-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: transparent;
            }

            .modal-content {
                position: relative;
                background: #fff;
                margin: 50px auto;
                padding: 20px;
                width: 80%;
                max-width: 800px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                animation: slideIn 0.3s;
            }

            .modal-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-bottom: 1px solid #ddd;
                padding-bottom: 10px;
            }

            .modal-title {
                font-size: 20px;
                font-weight: bold;
            }

            .modal-close {
                font-size: 24px;
                cursor: pointer;
                transition: color 0.3s;
            }

            .modal-close:hover {
                color: #e74c3c;
            }

            .modal-body {
                padding: 20px 0;
            }

            .modal-images {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                justify-content: center;
            }

            .modal-image-item {
                width: 30%;
                padding: 5px;
            }

            .modal-image {
                width: 100%;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            }

            @keyframes slideIn {
                from {
                    transform: translateY(-50px);
                    opacity: 0;
                }

                to {
                    transform: translateY(0);
                    opacity: 1;
                }
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
                                        {{-- Browse all {{ $pageName }} --}}
                                    </h2>
                                    <div
                                        class="coh-container ssa-component coh-component ssa-component-instance-daae0a22-9583-4783-b45c-200af5285ecd coh-component-instance-daae0a22-9583-4783-b45c-200af5285ecd ssa-instance-210c8a7d219d405adb90a2ef9fb7a615 coh-ce-cpt_3_column_layout-9c402b21">
                                        <div class="coh-container ">
                                            <div class="coh-row coh-row-xl coh-row-visible-xl"
                                                data-coh-row-match-heights="[]" data-once="coh-row-match-heights-init">
                                                <div id="event-container"
                                                    class="custom-video-grid coh-row-inner ssa-instance-210c8a7d219d405adb90a2ef9fb7a615 coh-ce-cpt_3_column_layout-a702800b">
                                                    @if ($data->isEmpty())
                                                        <p>No events found.</p>
                                                    @else
                                                        @foreach ($data as $value)
                                                            <div
                                                                class="coh-column ssa-instance-210c8a7d219d405adb90a2ef9fb7a615 coh-ce-cpt_3_column_layout-869620fb coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-4 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-4 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                                <article
                                                                    class="coh-container ssa-component coh-component ssa-component-instance-92296d97-b08d-49b0-86c5-4403363f4a63 coh-component-instance-92296d97-b08d-49b0-86c5-4403363f4a63 left-align coh-style-margin-bottom-small coh-style-card-text-light-background ssa-instance-46ba79dab1d9c34060d29c04e7e561d7 coh-ce-cpt_content_card-59d33cb"
                                                                    style="border-radius: 8px;">
                                                                    <div
                                                                        class="coh-container card-contents coh-style-padding-small-24 coh-ce-cpt_content_card-ac37ef06">
                                                                        <div
                                                                            class="coh-container coh-ce-cpt_content_card-76ba9c8">
                                                                        </div>
                                                                        <h3
                                                                            class="coh-heading coh-style-headline-500 coh-style-headline-heavy coh-ce-cpt_content_card-db949cb9 text-truncate">
                                                                            <a href="javascript:void(0)"
                                                                                onclick="openModal({{ @$value->id }})"
                                                                                class="coh-link card-link coh-ce-cpt_content_card-bc57a7f9"
                                                                                target="_self"
                                                                                aria-label="">{{ Str::limit(@$value->name, 50, '...') }}</a>
                                                                        </h3>
                                                                        <p
                                                                            class="coh-paragraph coh-style-paragraph-100 coh-ce-cpt_content_card-274b01ef text-truncate">
                                                                            {{ Str::limit(@$value->description, 100, '...') }}
                                                                        </p>
                                                                        <span
                                                                            class="coh-inline-element fake-link coh-style-display-none coh-ce-cpt_content_card-92be551f"
                                                                            aria-hidden="true"></span>
                                                                    </div>
                                                                    <div
                                                                        class="coh-container card-media coh-ce-cpt_content_card-da9a3f30">
                                                                        @if ($value->images->isNotEmpty())
                                                                            <img class="coh-image card-image coh-image-responsive-xl coh-lazy-loaded"
                                                                                loading="lazy"
                                                                                src="{{ asset($value->images->first()->image_path) }}"
                                                                                alt="{{ $value->images->first()->image_name }}"
                                                                                data-was-processed="true"
                                                                                style="border-radius: 8px 8px 0 0;">
                                                                        @else
                                                                            <img class="coh-image card-image coh-image-responsive-xl coh-lazy-loaded"
                                                                                loading="lazy" src="default-placeholder.jpg"
                                                                                alt="No image available"
                                                                                data-was-processed="true"
                                                                                style="border-radius: 8px 8px 0 0;">
                                                                        @endif
                                                                    </div>
                                                                </article>
                                                            </div>
                                                            <div class="custom-modal" id="modal-{{ $value->id }}">
                                                                <div class="modal-overlay"
                                                                    onclick="closeModal('{{ $value->id }}')"></div>
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">{{ $value->name }}
                                                                        </h5>
                                                                        <span class="modal-close"
                                                                            onclick="closeModal('{{ $value->id }}')">&times;</span>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p class="modal-description">
                                                                            {{ $value->description }}</p>
                                                                        <div class="modal-images">
                                                                            @foreach ($value->images as $index => $image)
                                                                                <div class="modal-image-item">
                                                                                    <img src="{{ asset($image->image_path) }}"
                                                                                        alt="{{ $image->image_name }}"
                                                                                        class="modal-image"
                                                                                        onclick="initializeImages('{{ $value->id }}'); viewImage('{{ asset($image->image_path) }}', '{{ $image->image_name }}', {{ $index }})">
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <!-- Fullscreen Image Viewer -->
                                                        <div class="image-viewer" id="image-viewer">
                                                            <div class="image-viewer-overlay" onclick="closeImageViewer()">
                                                            </div>
                                                            <div class="image-viewer-content">
                                                                <span class="image-viewer-close"
                                                                    onclick="closeImageViewer()">&times;</span>
                                                                <img id="viewer-image" class="viewer-image"
                                                                    src="" alt="">
                                                                <p id="viewer-caption" class="viewer-caption"></p>
                                                                <div class="image-viewer-nav">
                                                                    <button class="viewer-prev"
                                                                        onclick="prevImage()">&lt;</button>
                                                                    <button class="viewer-next"
                                                                        onclick="nextImage()">&gt;</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="custom-loader" id="customLoader"
                                                            style="display: none;">Loading
                                                        </div>
                                                    @endif

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
    <script>
        // Open Image Viewer
        function viewImage(imageSrc, imageAlt) {
            const viewer = document.getElementById('image-viewer');
            const viewerImage = document.getElementById('viewer-image');
            const viewerCaption = document.getElementById('viewer-caption');

            viewerImage.src = imageSrc;
            viewerCaption.textContent = imageAlt;
            viewer.style.display = 'flex';
        }

        // Modal Toggle
        function openModal(id) {
            const modal = document.getElementById(`modal-${id}`);
            modal.style.display = 'block';

            // Disable page scrolling
            document.body.classList.add('no-scroll');
        }

        function closeModal(id) {
            const modal = document.getElementById(`modal-${id}`);
            modal.style.display = 'none';

            // Enable page scrolling
            document.body.classList.remove('no-scroll');
        }


        let currentImageIndex = 0;
        let images = [];

        // Open Image Viewer
        function viewImage(imageSrc, imageAlt, index) {
            const viewer = document.getElementById('image-viewer');
            const viewerImage = document.getElementById('viewer-image');
            const viewerCaption = document.getElementById('viewer-caption');

            currentImageIndex = index;
            viewerImage.src = imageSrc;
            viewerCaption.textContent = imageAlt;
            viewer.style.display = 'flex';
        }

        // Close Image Viewer
        function closeImageViewer() {
            const viewer = document.getElementById('image-viewer');
            viewer.style.display = 'none';
        }

        // Navigate to Previous Image
        function prevImage() {
            if (currentImageIndex > 0) {
                currentImageIndex--;
            } else {
                currentImageIndex = images.length - 1; // Loop to last image
            }
            updateViewerImage();
        }

        // Navigate to Next Image
        function nextImage() {
            if (currentImageIndex < images.length - 1) {
                currentImageIndex++;
            } else {
                currentImageIndex = 0; // Loop to first image
            }
            updateViewerImage();
        }

        // Update Viewer Image
        function updateViewerImage() {
            const viewerImage = document.getElementById('viewer-image');
            const viewerCaption = document.getElementById('viewer-caption');

            const image = images[currentImageIndex];
            viewerImage.src = image.src;
            viewerCaption.textContent = image.alt;
        }

        // Initialize Images Array
        function initializeImages(eventId) {
            const imageElements = document.querySelectorAll(`#modal-${eventId} .modal-image`);
            images = Array.from(imageElements).map((img, index) => ({
                src: img.src,
                alt: img.alt,
                index: index,
            }));
        }
    </script>
    <script>
        let nextPageUrl = "{{ $data->nextPageUrl() }}"; // Initial next page URL
        let isLoading = false;

        window.addEventListener('scroll', () => {
            if (isLoading || !nextPageUrl) return;

            const scrollPosition = window.scrollY + window.innerHeight;
            const bottomPosition = document.body.offsetHeight;

            if (scrollPosition >= bottomPosition - 250) { // Load more when close to the bottom
                isLoading = true;
                document.getElementById('customLoader').style.display = 'block';

                fetch(nextPageUrl, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('customLoader').style.display = 'none';

                        // Append new events
                        const eventContainer = document.getElementById('event-container');
                        const tempDiv = document.createElement('div');
                        tempDiv.innerHTML = data.data; // Rendered HTML from the controller
                        while (tempDiv.firstChild) {
                            eventContainer.appendChild(tempDiv.firstChild);
                        }

                        // Update the next page URL
                        nextPageUrl = data.nextPageUrl;
                        isLoading = false;
                    })
                    .catch(error => {
                        console.error('Error fetching events:', error);
                        document.getElementById('customLoader').style.display = 'none';
                        isLoading = false;
                    });
            }
        });
    </script>
@endpush
