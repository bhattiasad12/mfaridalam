@extends('layouts.app.main')

@section('content')
    <div class="coh-container coh-style-focusable-content coh-style-paragraph-100 coh-ce-bfd264e3" id="main-content">
        <div class="coh-block"> </div>
        <div class="coh-container content-region coh-ce-6d56d4bb">
            <div>
                <article>
                    <div>
                        <div>
                            <div
                                class="coh-container ssa-component coh-component ssa-component-instance-fc2db1d5-479c-4c43-be1f-c74013099190 coh-component-instance-fc2db1d5-479c-4c43-be1f-c74013099190  ssa-instance-27584faef612cacc28c3060138df1130 coh-ce-cpt_hero-453a75b5">
                                <div
                                    class="coh-container tall left-align-content coh-ce-cpt_hero-6c530fb6 coh-container-boxed">
                                    <div class="coh-container text-content coh-ce-cpt_hero-1f517203">
                                        <!-- <h1 class="coh-heading heading coh-style-cfa-margin-bottom-lg coh-style-text-color-dark-background coh-style-flecha coh-style-flecha-xxl coh-ce-cpt_hero-10cc7c5d">Muhammad Farid Alam, FCA</h1> -->
                                        <h2
                                            class="coh-heading heading coh-style-cfa-margin-bottom-lg coh-style-text-color-dark-background coh-style-flecha coh-ce-cpt_hero-10cc7c5d">
                                            Muhammad Farid Alam, FCA</h2>
                                        <div
                                            class="coh-wysiwyg coh-style-text-color-dark-background coh-style-cfa-margin-bottom-lg coh-style-paragraph-50">
                                            <p>Chartered Accountant & Investment Banker</p>
                                            <p>I currently serve as CEO at AKD Securities Limited, which is a proud
                                                winner of the Best Equity Brokerage House by the CFA Association of
                                                Pakistan for the last two years.</p>
                                            <!-- <p>"My moto in life is first deserve then desire"</p> -->
                                        </div>
                                        <div
                                            class="coh-wysiwyg coh-style-text-color-dark-background coh-style-cfa-margin-bottom-lg coh-style-paragraph-50">
                                            <p>"My moto in life is first deserve then desire"</p>
                                        </div>`
                                    </div>
                                    <div class="coh-container drop-zone-content coh-ce-cpt_hero-96075d54">
                                        <picture>
                                            <source
                                                data-srcset="{{ asset('assets/images/a0d3dd3c-936d-4456-aec1-1a76b3d195ce.avif') }}"
                                                media="(min-width: 900px)" type="">
                                            <source
                                                data-srcset="{{ asset('assets/images/a0d3dd3c-936d-4456-aec1-1a76b3d195ce.avif') }}"
                                                media="(min-width: 600px) and (max-width: 899px)" type="">
                                            <source
                                                data-srcset="{{ asset('assets/images/a0d3dd3c-936d-4456-aec1-1a76b3d195ce.avif') }}"
                                                media="(max-width: 599px)" type="">
                                            <img class="coh-image ssa-component coh-component coh-image-responsive-xl coh-image-responsive-sm coh-image-responsive-ps coh-style-aspect-ratio---square coh-style-object-fit coh-style-fill-available-space"
                                                loading="eager"
                                                src="{{ asset('assets/images/a0d3dd3c-936d-4456-aec1-1a76b3d195ce.avif') }}"
                                                alt="blue" />
                                        </picture>

                                    </div>
                                </div>
                            </div>
                            {{-- <div
                            class="coh-container ssa-component coh-component ssa-component-instance-04eaeaad-a4a1-41d7-8ea7-7cc1e9fc65ba coh-component-instance-04eaeaad-a4a1-41d7-8ea7-7cc1e9fc65ba  triple-links--dark ssa-instance-e5fc42cb7d55235acc3263df69d96800 coh-ce-cpt_newsfeed-28c8b2b">
                            <div class="coh-container  coh-ce-cpt_newsfeed-5d6b4da7 coh-container-boxed"><span
                                class="coh-inline-element link__label coh-style-headline-heavy coh-style-headline-500" style="color: white;font-size: 3rem;">
                                "My moto in life is first deserve then desire"
                            </span>
                        </div>
                    </div> --}}
                            <div
                                class="coh-container ssa-component coh-component ssa-component-instance-04eaeaad-a4a1-41d7-8ea7-7cc1e9fc65ba coh-component-instance-04eaeaad-a4a1-41d7-8ea7-7cc1e9fc65ba  triple-links--dark ssa-instance-e5fc42cb7d55235acc3263df69d96800 coh-ce-cpt_newsfeed-28c8b2b">
                                <div class="coh-container  coh-ce-cpt_newsfeed-5d6b4da7 coh-container-boxed"><span
                                        class="coh-inline-element link__label coh-style-headline-heavy coh-style-headline-500"
                                        style="color: white;font-size: 1rem;padding: 4rem;">
                                        "KEEP YOUR DREAMS ALIVE. UNDERSTAND, TO ACHIEVE ANYTHING REQUIRES FAITH AND BELIEF
                                        IN YOURSELF, VISION, HARD WORK, DETERMINATION, AND DEDICATION. REMEMBER ALL THINGS
                                        ARE POSSIBLE FOR THOSE WHO BELIEVE" (DEVERS).
                                        THIS IS ESSENTIALLY ALL THE ATTRIBUTES I HAVE BANKED UPON TO ACCOMPLISH MY GOALS. IN
                                        THE MOST TRYING HOURS OF MY LIFE I HAVE CLING ON TO THE SLIGHTEST BIT OF HOPE TO
                                        RUN, WALK OR INCH UP TOWARDS MY GOALS."
                                    </span>
                                </div>
                            </div>

                            {{-- <style>
                        .vid-list {
                            width: 1344px;
                            position: relative;
                            top: 0;
                            left: 0;
                        }

                        .vid-item {
                            display: block;
                            width: 280px;
                            height: 280px;
                            float: left;
                            margin: 0;
                            padding: 10px;
                        }

                        .thumb {
                            overflow: hidden;
                            height: 150px;
                        }

                        .thumb img {
                            width: 100%;
                            position: relative;
                            top: -13px;
                        }

                        .vid-item .desc {
                            color: #21A1D2;
                            font-size: 15px;
                            margin-top: 5px;
                        }

                        .arrows {
                            position: relative;
                            width: 100%;
                        }

                        .arrow-left {
                            color: #fff;
                            position: absolute;
                            background: #777;
                            padding: 15px;
                            left: -25px;
                            top: -130px;
                            z-index: 99;
                            cursor: pointer;
                        }

                        .arrow-right {
                            color: #fff;
                            position: absolute;
                            background: #777;
                            padding: 15px;
                            right: -25px;
                            top: -130px;
                            z-index: 100;
                            cursor: pointer;
                        }

                        @media (max-width: 624px) {
                            .arrows {
                                position: relative;
                                margin: 0 auto;
                                width: 96px;
                            }

                            .arrow-left {
                                left: 0;
                                top: -20px;
                            }

                            .arrow-right {
                                right: 0;
                                top: -20px;
                            }
                        }
                    </style> --}}
                            {{-- <div
                                class="coh-container ssa-component coh-component ssa-component-instance-901d01f0-d5bc-4cce-8acf-c0620b66a0f4 coh-component-instance-901d01f0-d5bc-4cce-8acf-c0620b66a0f4 match-height     No ssa-instance-ffe51fbee06ed89a8624c742f0556707 coh-ce-cpt_container-ba3cd04b">
                                <div class="coh-container coh-ce-cpt_container-fe57b20b coh-container-boxed">
                                    <h2
                                        class="coh-heading ssa-component coh-component ssa-component-instance-d5a81fe8-ecc1-4b85-879f-9ea764b584d4 coh-component-instance-d5a81fe8-ecc1-4b85-879f-9ea764b584d4  dark-heading align-text-center coh-style-cfa-margin-bottom-lg     ssa-instance-100210e470bfc6a16b73516a2a5f8227 coh-ce-cpt_heading-b45c50fc">
                                        Interviews </h2>
                                    <div
                                        class="coh-container ssa-component coh-component ssa-component-instance-d997245e-e9f3-4bd0-9bfd-097b6b50b1f4 coh-component-instance-d997245e-e9f3-4bd0-9bfd-097b6b50b1f4 ssa-instance-3fd8eaa62372287f3c437c8e5f6bdd80 coh-ce-cpt_1_column_layout-5d838e07">
                                        <div class="coh-container ">
                                            <div class="coh-row coh-row-xl coh-row-visible-xl"
                                                data-coh-row-match-heights="[]">
                                                <div
                                                    class="coh-row-inner ssa-instance-3fd8eaa62372287f3c437c8e5f6bdd80 coh-ce-cpt_1_column_layout-9e55245b">
                                                    <div
                                                        class="coh-column ssa-instance-3fd8eaa62372287f3c437c8e5f6bdd80 coh-ce-cpt_1_column_layout-979786f7 coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-12 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-8 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                        <div
                                                            class="coh-wysiwyg ssa-component coh-component ssa-component-instance-f2fc76b7-b7d6-4b98-80bd-ad1394aa9d05 coh-component-instance-f2fc76b7-b7d6-4b98-80bd-ad1394aa9d05  coh-style-text-color-light-background       coh-style-cfa-margin-bottom-md    ssa-instance-dff9024e09adbd0f69d5069ae341af70 coh-ce-cpt_text-e4a5f5e1">
                                                            <p>Interview from Business TV channels and New Channels.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="container my-5">
                                        <div class="carousel-container">
                                            <!-- Carousel -->
                                            <div id="multiSlideCarousel" class="carousel slide" data-bs-ride="carousel">
                                                <!-- Indicators -->
                                                <div class="carousel-indicators">
                                                    @foreach (array_chunk($interviews, 3) as $index => $chunk)
                                                        <button type="button" data-bs-target="#multiSlideCarousel"
                                                            data-bs-slide-to="{{ $index }}"
                                                            class="{{ $index === 0 ? 'active' : '' }}"></button>
                                                    @endforeach

                                                </div>

                                                <!-- Carousel Inner -->
                                                <div class="carousel-inner">
                                                    @foreach (array_chunk($interviews, 3) as $index => $chunk)
                                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                            <div class="row">
                                                                @foreach ($chunk as $key => $value)
                                                                    @php
                                                                        $queries = [];
                                                                        parse_str($value, $queries);
                                                                        $code =
                                                                            $queries['https://www_youtube_com/watch?v'];
                                                                    @endphp
                                                                    <div class="col-md-4 mt-2">
                                                                        <a href ="{{ $value }}" target="_blank"><img
                                                                                src="http://img.youtube.com/vi/{{ $code }}/hqdefault.jpg"
                                                                                class="img-fluid"
                                                                                alt="Slide Image {{ $index * 3 + $key + 1 }}"></a>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                        </div>
                                        <button type="button" data-bs-target="#multiSlideCarousel" data-bs-slide="prev"  class="me-5 slick-prev coh-style-slider-navigation-left slick-arrow" aria-label="Previous slide" style=""></button>
                                            <button type="button" data-bs-target="#multiSlideCarousel" data-bs-slide="next" class="ms-5 slick-next coh-style-slider-navigation-right slick-arrow" aria-label="Next slide" style=""></button>
                                    </div> 
                                    <div class="vid-item">
                                        <div class="thumb">
                                            <img src="https://placehold.co/400">
                                        </div>
                                        <div class="desc">
                                            Lorem ipsum dolor sit amet.
                                        </div>
                                    </div>
                                    <div class="vid-item">
                                        <div class="thumb">
                                            <img src="https://placehold.co/400">
                                        </div>
                                        <div class="desc">
                                            Lorem ipsum dolor sit amet.
                                        </div>
                                    </div>
                                    <div class="vid-item">
                                        <div class="thumb">
                                            <img src="https://placehold.co/400">
                                        </div>
                                        <div class="desc">
                                            Lorem ipsum dolor sit amet.
                                        </div>
                                    </div>
                                    <div class="vid-item">
                                        <div class="thumb">
                                            <img src="https://placehold.co/400">
                                        </div>
                                        <div class="desc">
                                            Lorem ipsum dolor sit amet.
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
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
                                                                    Welcome to mfaridalam.com</h2>
                                                                <div
                                                                    class="coh-wysiwyg ssa-component coh-component ssa-component-instance-ecd8d55f-acbe-49f1-b701-5ce030bcb7b6 coh-component-instance-ecd8d55f-acbe-49f1-b701-5ce030bcb7b6  coh-style-text-color-light-background       coh-style-cfa-margin-bottom-md coh-style-paragraph-100   ssa-instance-74594f6d693e12249b0d85cdbe8495d1 coh-ce-cpt_text-e4a5f5e1">
                                                                    <p><span dir="ltr">Welcome to my website. I intend
                                                                            to introduce myself to you through this website
                                                                            so as to have a medium to discuss issues of
                                                                            common interest. In this regard, I feel it is
                                                                            appropriate to give you my introduction. By
                                                                            profession, I am a Chartered Accountant and by
                                                                            occupation, I am an investment Banker. I
                                                                            currently serve as CEO at AKD Securities
                                                                            Limited, which is proud winner of the Best
                                                                            Equity Brokerage House by the CFA Association of
                                                                            Pakistan for the last two years.
                                                                            <br />
                                                                            <br />
                                                                            I have had a wonderful experience so far both in
                                                                            the private and public sector – although I could
                                                                            not bear the public sector for more than a year
                                                                            and a half.</span></p>
                                                                </div>
                                                                {{-- <div
                                                                    class="coh-container ssa-component coh-component ssa-component-instance-14e47541-47a2-443f-8796-9066641e3f89 coh-component-instance-14e47541-47a2-443f-8796-9066641e3f89  ssa-instance-b1ff1e45c1befd6557a3f16eaa4d1c1f coh-ce-cpt_link-480bb5f4">
                                                                    <a href="about.html"
                                                                        class="coh-link coh_buttons_item     coh-style-link-button-neutral-secondary    ssa-instance-b1ff1e45c1befd6557a3f16eaa4d1c1f coh-ce-cpt_link-5dc08d081 coh-ce-cpt_link-5dc08d08"
                                                                        target="_self"> Learn more </a>
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="coh-column ssa-instance-378da477127db0d1378c7db7bd9f8a31 coh-ce-cpt_2_column_layout-ecfef6d5 coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-6 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-6 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                        <img src="{{ asset('assets/images/1839be53-ddf5-4389-b37e-c43752378076.avif') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                            Childhood Memories
                                                        </h2>
                                                        <div
                                                            class="coh-wysiwyg ssa-component coh-component ssa-component-instance-f21ab005-3355-4abe-96d4-588952153427 coh-component-instance-f21ab005-3355-4abe-96d4-588952153427  coh-style-text-color-dark-background       coh-style-cfa-margin-bottom-md    ssa-instance-7ab6e112073df199a5e217fffd6a6d3d coh-ce-cpt_text-e4a5f5e1">
                                                            <p>My childhood memories are from Model Town, Lahore where I was
                                                                a student at Divisional Public School. I was a good student
                                                                till class 8 but after that I really shined. I remember how
                                                                great feeling it used to be when my Parents visited School
                                                                for parent – teacher meetings and every teacher had to tell
                                                                good things about me.
                                                                <br />
                                                                <br />
                                                                I recall that I was good at every subject especially
                                                                languages but bad at mathematics. In sports I was School
                                                                champ of Badminton and I was a Prefect.
                                                                <br />
                                                                <br />
                                                                I did not do well at Forman Christian College (F C College)
                                                                from where I did F. SC. As mentioned earlier I was an
                                                                excellent sportsman so I got admission in B. SC with double
                                                                maths & physics as the subjects at the famous Government
                                                                College, Lahore.
                                                                <br />
                                                                <br />
                                                                Switching from science to commerce after about six months in
                                                                session was a U turn in my academic career and leaving
                                                                Government College was also a bold step I took. I must share
                                                                with readers here that although commerce as a subject was
                                                                new to me but my father had been teaching me and my younger
                                                                brother how to do business since we were lad.
                                                                <br />
                                                                <br />
                                                                How can I forget my first day at college where on reaching
                                                                my Classroom at B.Com, I came to know that it was an
                                                                assessment day and I was asked to appear in the test. I
                                                                remember the test was about Journal entries of which I knew
                                                                nothing and secured zero marks. To my utmost surprise the
                                                                teacher while announcing the results asked me to come
                                                                forward and receive the answer sheet and ridiculed me
                                                                generously in front of all students including my female
                                                                classmates which added insult to injury. As I missed out
                                                                half of the academic session and knew nothing about commerce
                                                                I could not do well in part I, but the final year was my
                                                                year not only I enjoyed the subjects but also cleared the
                                                                first year deficit and topped the Punjab university in the
                                                                subject of Auditing while securing overall 3rd position at
                                                                the college.
                                                                <br />
                                                                <br />
                                                                Education really kept me pre-occupied and whatever time I
                                                                could muster got consummated giving on extra-curricular. So
                                                                as they say “When the Going Gets Tough, the Tough Gets
                                                                Going”, never say die attitude and the blind faith and
                                                                conviction in my idea spurred me on and made sure that I
                                                                stayed focused and achieve the ultimate goal.
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
                                                        <img src="{{ asset('assets/images/b3f83b15-2f70-44ab-9bed-ee2d974a43cc.avif') }}"
                                                        alt="">
                                                        <img src="{{ asset('assets/images/b315b5bd-6557-40f0-9537-629b38de71f9.avif') }}"
                                                        alt="">
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
                                                                    My Professional Journey</h2>
                                                                <h3
                                                                    class="coh-heading coh-style-headline-500 coh-style-headline-heavy ssa-instance-c96d9abd7172c9cd49d5a55670f989d9 coh-ce-cpt_icon_card-d94f8b1f">
                                                                    My Professional Background and how it started </h3>
                                                                <div
                                                                    class="coh-wysiwyg ssa-component coh-component ssa-component-instance-ecd8d55f-acbe-49f1-b701-5ce030bcb7b6 coh-component-instance-ecd8d55f-acbe-49f1-b701-5ce030bcb7b6  coh-style-text-color-light-background       coh-style-cfa-margin-bottom-md coh-style-paragraph-100   ssa-instance-74594f6d693e12249b0d85cdbe8495d1 coh-ce-cpt_text-e4a5f5e1">
                                                                    <p>
                                                                        <span dir="ltr">
                                                                            I am a fellow Chartered
                                                                            Accountant with over 2 decades of first-hand
                                                                            experience in financial markets. The love of
                                                                            Auditing, as a subject, lured me to this
                                                                            profession. In my B.Com examinations I aced
                                                                            Punjab University in the subject. My best friend
                                                                            was doing internship from a Chartered firm and
                                                                            challenged me to join that very firm. I joined
                                                                            it for an internship of three months but as luck
                                                                            would have it, stayed there and did my C A. I
                                                                            was doing fine as the youngest CFO of Pakistan’s
                                                                            first investment bank, when I was denied hefty
                                                                            bonus on the premise that I was not in the
                                                                            earning department of the bank. Accounts /audit
                                                                            and compliance and risk management were
                                                                            considered overheads. I switched from CFO to
                                                                            first Corporate Finance and then to equity
                                                                            department as equity strategist. For this
                                                                            position I had to migrate to Karachi which is
                                                                            the financial hub of the country. The lust of
                                                                            the capital markets has not allowed me to move
                                                                            on.
                                                                            <br />
                                                                            <br />
                                                                            Passing the CA exams really re-enforced my
                                                                            belief that there are no short cuts in life and
                                                                            everything can be achieved through hard work.
                                                                            <br />
                                                                            <br />
                                                                            My father was my first mentor who has shaped my
                                                                            personality. Realizing that I was disturbed he
                                                                            gave me a booster by proposing the name of my
                                                                            chartered firm as “HANRIF” and allocating space
                                                                            in his office at The Mall for my proposed
                                                                            chartered firm. He took first alphabets from our
                                                                            family name and coined this name. This gave me
                                                                            the required motivation to work even harder to
                                                                            achieve my goal.
                                                                            <br />
                                                                            <br />
                                                                            As a philosopher once said probably to his
                                                                            beloved I changed the character and said it to
                                                                            the ICAP (The institute of Chartered Accountants
                                                                            of Pakistan):
                                                                            <br />
                                                                            <br />
                                                                            O my friend you knew it well how painful it is
                                                                            to be in love yet you loved me and let me love
                                                                            you so passionately.
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <h3
                                                                    class="coh-heading coh-style-headline-500 coh-style-headline-heavy ssa-instance-c96d9abd7172c9cd49d5a55670f989d9 coh-ce-cpt_icon_card-d94f8b1f">
                                                                    My First Job & Next and Next…</h3>
                                                                <div
                                                                    class="coh-wysiwyg ssa-component coh-component ssa-component-instance-ecd8d55f-acbe-49f1-b701-5ce030bcb7b6 coh-component-instance-ecd8d55f-acbe-49f1-b701-5ce030bcb7b6  coh-style-text-color-light-background       coh-style-cfa-margin-bottom-md coh-style-paragraph-100   ssa-instance-74594f6d693e12249b0d85cdbe8495d1 coh-ce-cpt_text-e4a5f5e1">
                                                                    <p><span dir="ltr">
                                                                            I joined CresBank – Pakistan’s first investment
                                                                            bank as an internal auditor. I must share with
                                                                            you especially if you are young and starting
                                                                            your careers that one should start his/ her
                                                                            carrier from internal audit but must not and I
                                                                            repeat must not end up as an internal auditor. I
                                                                            joined before I qualified as a Chartered
                                                                            Accountant and I could not go back to profession
                                                                            on one pretext or other after qualifying as I
                                                                            got used to regular cash flows and the fact that
                                                                            I was youngest CIA, CFO, Equity Strategist and
                                                                            Treasurer probably at any bank in Pakistan.
                                                                            <br />
                                                                            <br />
                                                                            I left CresBank to join CIRC Ministry of Finance
                                                                            Government of Pakistan. The organization had the
                                                                            then strongest and most talented board
                                                                            comprising of the following members:
                                                                            <br />
                                                                            <br />
                                                                            Governor SBP Dr. Ishrat Hussain, Minister for
                                                                            Privatization Mr. Altaf Saleem Minister for
                                                                            commerce Mr. Razzaque Dawood Secretary General
                                                                            Finance Mr. Mueen Afzal Private sector notables
                                                                            representing chambers with Mr Shaukat Aziz as
                                                                            Chairman
                                                                            <br />
                                                                            <br />
                                                                            I joined PICIC to head the mutual fund division
                                                                            which had acquired 14 closed ended mutual funds
                                                                            from Investment Corporation of Pakistan. I did
                                                                            exceptionally well not by my own standards but
                                                                            also by the standards of a very demanding and
                                                                            experienced board. My performance was second to
                                                                            none especially viz z viz a group which had also
                                                                            acquired 13 funds from ICP and had an already
                                                                            established asset management company and was in
                                                                            the business for long.
                                                                            <br />
                                                                            <br />
                                                                            I was lucky in the sense that the organization
                                                                            headed by Mr. Mohammad Ali Khoja had its best
                                                                            time 2003-2006 when I was there and I
                                                                            contributed to its glory and that I sensed that
                                                                            post-merger things will not be the same for
                                                                            PICIC and its staff. So I left the organization.
                                                                            I feel pride in stating that exactly the same
                                                                            happened.
                                                                            <br />
                                                                            <br />
                                                                            I had always aspired to work for World Bank/
                                                                            Asian Development Bank and by the grace of God
                                                                            it did come my way when I acted as a Domestic
                                                                            Consultant for ADB. I can tell you that after
                                                                            doing the assignment I have stopped narrating
                                                                            all the jokes which I used to crack about
                                                                            consultants as I realized it was no joke to be a
                                                                            Consultant!
                                                                            <br />
                                                                            <br />
                                                                            I was migrating to Geneva to join Merrill Lynch
                                                                            where my old friend was doing exceptionally well
                                                                            in the private banking group that I was called
                                                                            by legend Aqeel Karim Dhedhi (AKD) who convinced
                                                                            me to join AKD Group where I subsequently took
                                                                            over as CEO AKD Securities. I enjoy the work and
                                                                            enduring ups and down of the economy and the
                                                                            capital markets.
                                                                            <br />
                                                                            <br />
                                                                            The lust of the capital markets has not allowed
                                                                            me to move on
                                                                        </span></p>
                                                                </div>
                                                                {{-- <div
                                                                class="coh-container ssa-component coh-component ssa-component-instance-14e47541-47a2-443f-8796-9066641e3f89 coh-component-instance-14e47541-47a2-443f-8796-9066641e3f89  ssa-instance-b1ff1e45c1befd6557a3f16eaa4d1c1f coh-ce-cpt_link-480bb5f4">
                                                                <a href="about.html"
                                                                    class="coh-link coh_buttons_item     coh-style-link-button-neutral-secondary    ssa-instance-b1ff1e45c1befd6557a3f16eaa4d1c1f coh-ce-cpt_link-5dc08d081 coh-ce-cpt_link-5dc08d08"
                                                                    target="_self"> Learn more </a>
                                                            </div> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="coh-column ssa-instance-378da477127db0d1378c7db7bd9f8a31 coh-ce-cpt_2_column_layout-ecfef6d5 coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-6 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-6 coh-col-xl-push-0 coh-col-xl-pull-0">
                                                            <img src="{{ asset('assets/images/b3f83b15-2f70-44ab-9bed-ee2d974a43cc.avif') }}"  alt="">
                                                            <img src="{{ asset('assets/images/7903f1c8-1916-477e-affa-7626762a2fff.avif') }}"  alt="">
                                                            <img src="{{ asset('assets/images/4a010ad8-3780-43b3-867f-8534e4ccc006.avif') }}"  alt="">
                                                            <img src="{{ asset('assets/images/d6287080-efa1-4312-9a5d-d2b936fe0ccf.avif') }}"  alt="">
                                                            <img src="{{ asset('assets/images/ee0839fe-9c9c-429d-b378-d063f621a6e8.avif') }}"  alt="">
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
