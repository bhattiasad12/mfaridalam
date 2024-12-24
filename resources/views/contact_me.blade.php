@extends('layouts.app.main')

@section('content')
    @push('css')
        <style>
            /* Styling for Contact Section */
            .custom-contact-section {
                background-color: #faf5ee;
                padding: 50px 0;
                text-align: center;
            }

            .custom-contact-container {
                display: flex;
                justify-content: space-between;
                padding: 0 20px;
            }

            .custom-contact-column,
            .custom-form-column {
                width: 45%;
            }

            .custom-heading {
                font-size: 36px;
                font-weight: bold;
                margin-bottom: 10px;
                color: #333;
            }

            .custom-divider {
                margin: 20px auto;
                border-top: 2px solid #ddd;
                width: 50px;
            }

            .custom-subheading {
                font-size: 20px;
                font-weight: bold;
                margin-bottom: 30px;
                color: #666;
            }

            .custom-contact-list {
                list-style: none;
                padding: 0;
            }

            .custom-contact-item {
                display: flex;
                align-items: center;
                margin-bottom: 15px;
                font-size: 16px;
                color: #333;
            }

            .custom-icon {
                margin-right: 10px;
                color: black;
            }

            .custom-form-heading {
                font-size: 24px;
                margin-bottom: 20px;
                color: #333;
            }

            .custom-form-group {
                margin-bottom: 20px;
            }

            .custom-form-label {
                display: block;
                font-weight: bold;
                margin-bottom: 8px;
                color: #555;
            }

            .custom-form-input,
            .custom-form-textarea {
                width: 100%;
                padding: 10px;
                font-size: 16px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #fff;
            }

            .custom-form-textarea {
                height: 150px;
            }

            .custom-submit-btn {
                background-color: #007bff;
                color: #fff;
                border: none;
                padding: 15px 30px;
                font-size: 16px;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .custom-submit-btn:hover {
                background-color: black;
            }

            /* Responsive styling */
            @media (max-width: 768px) {
                .custom-contact-container {
                    flex-direction: column;
                    align-items: center;
                }

                .custom-contact-column,
                .custom-form-column {
                    width: 80%;
                    margin-bottom: 30px;
                }
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
                                                            <source data-srcset="{{ asset('assets/images/contact_me.jpg') }}"
                                                                media="(min-width: 900px)" type="">
                                                            <source data-srcset="{{ asset('assets/images/contact_me.jpg') }}"
                                                                media="(min-width: 600px) and (max-width: 899px)"
                                                                type="">
                                                            <source data-srcset="{{ asset('assets/images/contact_me.jpg') }}"
                                                                media="(max-width: 599px)" type="">
                                                            <img class="coh-image ssa-component coh-component coh-image-responsive-xl coh-image-responsive-sm coh-image-responsive-ps  coh-style-object-fit "
                                                                loading="eager"
                                                                src="{{ asset('assets/images/contact_me.jpg') }}"
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
                                <div class="coh-container coh-ce-cpt_container-fe57b20b coh-container-boxed"
                                    style="padding:4rem 0">
                                    <div class="custom-contact-section" id="contact">
                                        <div class="custom-contact-container">
                                            <!-- Left Section: Contact Info -->
                                            <div class="custom-contact-column">
                                                <h3 class="custom-heading">Let’s Talk!</h3>
                                                <div class="custom-divider"></div>
                                                <h6 class="custom-subheading">Get In Touch</h6>
                                                <ul class="custom-contact-list">
                                                    <li class="custom-contact-item">
                                                        <span class="custom-icon"><i
                                                                class="fas fa-map-marker-alt"></i></span>
                                                        <span class="custom-text">606, Continental Trade Centre, Clifton
                                                            Block 8, Karachi, Pakistan</span>
                                                    </li>
                                                    <li class="custom-contact-item">
                                                        <span class="custom-icon"><i class="fas fa-phone-alt"></i></span>
                                                        <span class="custom-text">UAN: +92 111-253-111</span>
                                                    </li>
                                                    <li class="custom-contact-item">
                                                        <span class="custom-icon"><i class="fas fa-fax"></i></span>
                                                        <span class="custom-text">FAX: +92(21) 586-7992</span>
                                                    </li>
                                                    <li class="custom-contact-item">
                                                        <span class="custom-icon"><i class="fas fa-envelope"></i></span>
                                                        <span class="custom-text">Email: farid.alam@akdsecurities.net</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Right Section: Contact Form -->
                                            <div class="custom-form-column">
                                                <h6 class="custom-form-heading">Send Me a Message</h6>
                                                <form id="custom-contact-form" method="post" action="/"
                                                    enctype="multipart/form-data">
                                                    <div class="custom-form-group">
                                                        <label for="name" class="custom-form-label">Name</label>
                                                        <input type="text" id="name" name="name"
                                                            class="custom-form-input" placeholder="Full name" required>
                                                    </div>
                                                    <div class="custom-form-group">
                                                        <label for="email" class="custom-form-label">Email</label>
                                                        <input type="email" id="email" name="email"
                                                            class="custom-form-input" placeholder="Email address" required>
                                                    </div>
                                                    <div class="custom-form-group">
                                                        <label for="subject" class="custom-form-label">Subject</label>
                                                        <input type="text" id="subject" name="subject"
                                                            class="custom-form-input" placeholder="Subject" required>
                                                    </div>
                                                    <div class="custom-form-group">
                                                        <label for="message" class="custom-form-label">Message</label>
                                                        <textarea id="message" name="message" class="custom-form-textarea" placeholder="Your message" required></textarea>
                                                    </div>
                                                    <button type="submit"
                                                        class="coh-link coh_buttons_item     coh-style-link-button-color    ssa-instance-cd9e8472546c9656ad630da5cc48b3fb coh-ce-cpt_link-5dc08d081 coh-ce-cpt_link-5dc08d08"
                                                        target="_blank"> Send Message</button>
                                                </form>
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
