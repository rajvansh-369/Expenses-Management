@extends('portfolio.app')

@section('content')
    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row p-60-0 p-lg-30-0 p-md-15-0">
            <!-- col -->
            <div class="col-lg-12">

                <!-- banner -->
                <div class="art-a art-banner" style="background-image: url({{ asset('storage/img/bg.jpg') }})">
                    <!-- banner back -->
                    <div class="art-banner-back"></div>
                    <!-- banner dec -->
                    <div class="art-banner-dec"></div>
                    <!-- banner overlay -->
                    <div class="art-banner-overlay">
                        <!-- main title -->
                        <div class="art-banner-title">
                            <!-- title -->
                            <h2 class="mb-15">Hi, I'm Snehal Rajvansh <br> a Software Developer</h2>
                            <!-- suptitle -->
                            <div class="art-lg-text art-code mb-25">&lt;<i>code</i>&gt; I code
                                <span class="txt-rotate" data-period="2000"
                                    data-rotate='[ "Web Application.", "APIs.", "Crawler", "automation tools(Cron Job)." ]'></span>&lt;/<i>code</i>&gt;
                            </div>
                            <div class="art-buttons-frame">
                                <!-- button -->
                                <!-- <a href="#." class="art-btn art-btn-md"><span>Explore now</span></a> -->
                                <!-- button -->
                                <!-- <a href="#." class="art-link art-white-link art-w-chevron">Hire me</a> -->
                            </div>
                        </div>
                        <!-- main title end -->
                        <!-- photo -->
                        <!--<img src="img/snhlImg.png" class="art-banner-photo" alt="Your Name" style="width: 300px;">-->
                    </div>
                    <!-- banner overlay end -->
                </div>
                <!-- banner end -->

            </div>
            <!-- col end -->
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row p-30-0">

            <!-- col -->
            <div class="col-md-3 col-6">

                <!-- couner frame -->
                <div class="art-counter-frame">
                    <!-- counter -->
                    <div class="art-counter-box">
                        <!-- counter number -->
                        <span class="art-counter">3</span><span class="art-counter-plus">+</span>
                    </div>
                    <!-- counter end -->
                    <!-- title -->
                    <h6>Years Experience</h6>
                </div>
                <!-- couner frame end -->

            </div>
            <!-- col end -->

            <!-- col -->
            <div class="col-md-3 col-6">

                <!-- couner frame -->
                <div class="art-counter-frame">
                    <!-- counter -->
                    <div class="art-counter-box">
                        <!-- counter number -->
                        <span class="art-counter">10</span>
                    </div>
                    <!-- counter end -->
                    <!-- title -->
                    <h6>Completed Projects</h6>
                </div>
                <!-- couner frame end -->

            </div>
            <!-- col end -->

            <!-- col -->
            <div class="col-md-3 col-6">

                <!-- couner frame -->
                <div class="art-counter-frame">
                    <!-- counter -->
                    <div class="art-counter-box">
                        <!-- counter number -->
                      {{-- <span class="art-counter">114</span> --}}
                    </div>
                    <!-- counter end -->
                    <!-- title -->
                    <a target="_blank" data-no-swup href="{{url('blog')}}"><h2>Blogs</h2></a>
                </div>
                <!-- couner frame end -->

            </div>
            <!-- col end -->

            <!-- col -->
            <div class="col-md-3 col-6">

                <!-- couner frame -->
                <div class="art-counter-frame">
                    <!-- counter -->
                    <div class="art-counter-box">
                        <!-- counter number -->
                        <!-- <span class="art-counter">20</span><span class="art-counter-plus">+</span> -->
                    </div>
                    <!-- counter end -->
                    <!-- title -->
                    <!-- <h6>Honors and Awards</h6> -->
                </div>
                <!-- couner frame end -->

            </div>
            <!-- col end -->

        </div>
        <!-- row end -->

    </div>
    <!-- container end -->



    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-lg-12">

                <!-- section title -->
                <div class="art-section-title">
                    <!-- title frame -->
                    <div class="art-title-frame">
                        <!-- title -->
                        <h4>Projects</h4>
                    </div>
                    <!-- title frame end -->
                </div>
                <!-- section title end -->

            </div>
            <!-- col end -->

            <!-- col -->
            <div class="col-lg-12 col-md-12 my-2">

                <!-- service -->
                <div class="art-a art-service-icon-box">
                    <!-- service content -->
                    <div class="art-service-ib-content">
                        <div class="container">
                            <div class="row">



                                @foreach ($projects as $poject)
                                    <div class="col-md-3 ">
                                     <a target="_blank" data-no-swup href="{{ $poject->project_url }}">
                                        <div class="wraps">
                                            @if (!$poject->img)
                                                <iframe class="frames" src="{{ $poject->project_url }}"
                                                    frameborder="0"></iframe>
                                            @else
                                                <img src="{{ asset('storage/'. $poject->img) }}" alt="{{$poject->img}}" width="263px">
                                            @endif


                                        </div>

                                            <h5 class="projectName text-center">
                                                {{ $poject->project_name }}</h5>
                                            <p class="projectName ">
                                        {{ substr($poject->project_description, 0, 100) }}  {{ (str_word_count($poject->project_description) > 100) ? "..."   : ""}}
                                            </p>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                    </div>
                    <!-- service content end -->
                </div>
                <!-- service end -->

            </div>
            <!-- col end -->

        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-lg-12">

                <!-- section title -->
                <div class="art-section-title">
                    <!-- title frame -->
                    <div class="art-title-frame">
                        <!-- title -->
                        <h4>Hands On</h4>
                    </div>
                    <!-- title frame end -->
                </div>
                <!-- section title end -->

            </div>
            <!-- col end -->

            <!-- col -->
            <div class="col-lg-12 col-md-12">

                <!-- service -->
                <div class="art-a art-service-icon-box">
                    <!-- service content -->
                    <div class="art-service-ib-content">
                        <!-- title -->
                        <div class="skillIcons">

                            <img class="full_screen"
                                src="https://skillicons.dev/icons?i=php,laravel,python,js,wordpress,jquery,html,css,bootstrap,mysql,git,arduino"
                                alt="">
                            <img class="mobile_screen" src="https://skillicons.dev/icons?i=php,laravel,python,"
                                alt="">
                            <img class="mobile_screen" src="https://skillicons.dev/icons?i=js,wordpress,jquery"
                                alt="">
                            <img class="mobile_screen" src="https://skillicons.dev/icons?i=html,css,bootstrap"
                                alt="">
                            <img class="mobile_screen" src="https://skillicons.dev/icons?i=mysql,git,arduino"
                                alt="">
                        </div>
                        <!-- text -->
                        <div class="mb-15">

                        </div>

                    </div>
                    <!-- service content end -->
                </div>
                <!-- service end -->

            </div>
            <!-- col end -->

        </div>
        <!-- row end -->

    </div>
    <!-- container end -->







    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-lg-6">

                <!-- section title -->
                <div class="art-section-title">
                    <!-- title frame -->
                    <div class="art-title-frame">
                        <!-- title -->
                        <h4>Education</h4>
                    </div>
                    <!-- title frame end -->
                </div>
                <!-- section title end -->

                <!-- timeline -->
                <div class="art-timeline art-gallery" id="history">
                    <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>

                        <div class="art-a art-timeline-content">
                            <div class="art-card-header">
                                <div class="art-left-side">
                                    <h5>B.Tech (Lovely Professional University, Punjab)</h5>
                                    <div class="art-el-suptitle mb-15">Computer Science and
                                        Engineering</div>
                                </div>
                                <div class="art-right-side">
                                    <span class="art-date">Aug 2016 - Jul 2020</span>
                                </div>
                            </div>

                            <!-- <p>Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p> -->
                            {{-- <a data-fancybox="diplome" data-no-swup href="files/certificate.jpg"
                                                        class="art-link art-color-link art-w-chevron">Diplome</a> --}}
                        </div>
                    </div>

                    <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>

                        <div class="art-a art-timeline-content">
                            <div class="art-card-header">
                                <div class="art-left-side">
                                    <h5>XII (Deepak Upadhaya Higher Secondary School)</h5>
                                    <div class="art-el-suptitle mb-15">PCM</div>
                                </div>
                                <div class="art-right-side">
                                    <span class="art-date">Mar 2014 - Jun 2016</span>
                                </div>
                            </div>
                            <!-- <div>Consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</div> -->
                        </div>
                    </div>

                    <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>

                        <div class="art-a art-timeline-content">
                            <div class="art-card-header">
                                <div class="art-left-side">
                                    <h5>X (Kendriya Vidyalaya No-2 OTA, Gaya)</h5>
                                    <div class="art-el-suptitle mb-15">CBSE</div>
                                </div>
                                <div class="art-right-side">
                                    <span class="art-date">2014</span>
                                </div>
                            </div>
                            <!-- <p>Dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p> -->
                            {{-- <a data-fancybox="diplome" data-no-swup href="files/certificate.jpg"
                                                        class="art-link art-color-link art-w-chevron">Licence</a> --}}
                        </div>

                    </div>

                </div>
                <div class="art-timeline art-gallery" id="history">




                    <!-- section title -->
                    <div class="art-section-title">
                        <!-- title frame -->
                        <div class="art-title-frame">
                            <!-- title -->
                            <h4>Certificate</h4>
                        </div>
                        <!-- title frame end -->
                    </div>
                    <!-- section title end -->
                    <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>

                        <div class="art-a art-timeline-content">
                            <div class="art-card-header">
                                <div class="art-left-side">
                                    <h5>Introduction to PHP</h5>
                                    <div class="art-el-suptitle mb-15">Simpili Learn</div>
                                </div>
                                <div class="art-right-side">
                                    <span class="art-date">2022</span>
                                </div>
                            </div>

                            <!-- <p>Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p> -->
                            {{-- <a data-fancybox="diplome" data-no-swup href="files/certificate.jpg"
                                                        class="art-link art-color-link art-w-chevron">Diplome</a> --}}
                        </div>

                    </div>
                    <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>

                        <div class="art-a art-timeline-content">
                            <div class="art-card-header">
                                <div class="art-left-side">
                                    <h5>C++ For C Programmers</h5>
                                    <div class="art-el-suptitle mb-15">Coursera (University of
                                        California, Santa Cruz)</div>
                                </div>
                                <div class="art-right-side">
                                    <span class="art-date">2022</span>
                                </div>
                            </div>

                            <!-- <p>Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p> -->
                            {{-- <a data-fancybox="diplome" data-no-swup href="files/certificate.jpg"
                                                        class="art-link art-color-link art-w-chevron">Diplome</a> --}}
                        </div>

                    </div>

                </div>
                <!-- timeline end -->

            </div>
            <div class="col-lg-6">

                <!-- section title -->
                <div class="art-section-title">
                    <!-- title frame -->
                    <div class="art-title-frame">
                        <!-- title -->
                        <h4>Work History</h4>
                    </div>
                    <!-- title frame end -->
                </div>
                <!-- section title end -->

                <!-- timeline -->
                <div class="art-timeline">

                    <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>


                        <div class="art-a art-timeline-content">
                            <div class="art-card-header">
                                <div class="art-left-side">
                                    <h5>Webroot Technologies</h5>
                                    <div class="art-el-suptitle mb-15">Senior Software Developer
                                    </div>
                                </div>
                                <div class="art-right-side">
                                    <span class="art-date">Feb 2022 - Till Date</span>
                                </div>
                            </div>
                            <p>The Key job responsibility includes:</p>
                            <ul>
                                <li>Produce clean, efficient code based on specifications</li>
                                <li>Confirmed that completed software met client requirements.</li>
                                <li>Confirmed that completed software met client requirements.</li>
                                <li>Full lifecycle application development.</li>
                                <li>Design, code, and debug applications.</li>
                                <li>Support, maintain and document software functionality</li>
                                <li> Create technical documentation for reference and reporting</li>
                            </ul>
                            {{-- <a data-fancybox="recommendation" data-no-swup
                                                        href="#art-recomendation-popup-1"
                                                        class="art-link art-color-link art-w-chevron">Recommendation</a> --}}

                        </div>
                    </div>

                    <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>




                        <!-- popup -->
                        <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-1">

                            <!-- testimonial -->
                            <div class="art-a art-testimonial">
                                <!-- testimonial body -->
                                <div class="testimonial-body">
                                    <!-- photo -->
                                    <img class="art-testimonial-face"
                                        src="{{ asset('storage/img/testimonials/face-3.jpg') }}" alt="face">
                                    <!-- name -->
                                    <h5>Paul Trueman</h5>
                                    <div class="art-el-suptitle mb-15">Template author</div>
                                    <!-- text -->
                                    <div class="mb-15">Working with Artur has been a pleasure.
                                        Better yet - I alerted them of a minor issue before going to
                                        sleep. The issue was fixed the next morning. I couldn't ask
                                        for better support. Thank you Artur!
                                        This is easily a 5 star freelancer.</div>
                                </div>
                                <!-- testimonial body end -->
                                <!-- testimonial footer -->
                                <div class="art-testimonial-footer">
                                    <div class="art-left-side">
                                        <!-- star rate -->
                                        <ul class="art-star-rate">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <!-- star rate end -->
                                    </div>
                                    <div class="art-right-side">

                                    </div>
                                </div>
                                <!-- testimonial footer end -->
                            </div>
                            <!-- testimonial end -->

                        </div>
                        <!-- popup end -->

                    </div>

                    <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>

                        <div class="art-a art-timeline-content">
                            <div class="art-card-header">
                                <div class="art-left-side">
                                    <h5>Save Solution Pvt.Ltd</h5>
                                    <div class="art-el-suptitle mb-15">Asst IT Manager</div>
                                </div>
                                <div class="art-right-side">
                                    <span class="art-date">Sep 2020 - Dec 2021</span>
                                </div>
                            </div>
                            <p>The Key job responsibility includes:</p>
                            <ul>
                                <li>Produce clean, efficient code based on specifications</li>
                                <li>Confirmed that completed software met client requirements.</li>
                                <li>Confirmed that completed software met client requirements.</li>
                                <li>Full lifecycle application development.</li>
                                <li>Design, code, and debug applications.</li>
                                <li>Support, maintain and document software functionality</li>
                                <li> Create technical documentation for reference and reporting</li>
                            </ul>
                            {{-- <a data-fancybox="recommendation" data-no-swup
                                                        href="#art-recomendation-popup-2"
                                                        class="art-link art-color-link art-w-chevron">Recommendation</a> --}}
                        </div>

                        <!-- popup -->
                        <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-2">

                            <!-- testimonial -->
                            <div class="art-a art-testimonial">
                                <!-- testimonial body -->
                                <div class="testimonial-body">
                                    <!-- photo -->
                                    <img class="art-testimonial-face"
                                        src="{{ asset('storage/img/testimonials/face-4.jpg') }}" alt="face">
                                    <!-- name -->
                                    <h5>Paul Trueman</h5>
                                    <div class="art-el-suptitle mb-15">Template author</div>
                                    <!-- text -->
                                    <div class="mb-15">Working with Artur has been a pleasure.
                                        Better yet - I alerted them of a minor issue before going to
                                        sleep. The issue was fixed the next morning. I couldn't ask
                                        for better support. Thank you Artur!
                                        This is easily a 5 star freelancer.</div>
                                </div>
                                <!-- testimonial body end -->
                                <!-- testimonial footer -->
                                <div class="art-testimonial-footer">
                                    <div class="art-left-side">
                                        <!-- star rate -->
                                        <ul class="art-star-rate">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <!-- star rate end -->
                                    </div>
                                    <div class="art-right-side">

                                    </div>
                                </div>
                                <!-- testimonial footer end -->
                            </div>
                            <!-- testimonial end -->

                        </div>
                        <!-- popup end -->

                    </div>



                </div>
                <!-- timeline end -->

            </div>
            <!-- col end -->

        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <div class="container-fluid">

        <div class="col-lg-12">

            <!-- section title -->
            <div class="art-section-title">
                <!-- title frame -->
                <div class="art-title-frame">
                    <!-- title -->
                    <h4>Projects</h4>
                </div>
                <!-- title frame end -->
            </div>
            <!-- section title end -->

            <!-- timeline -->
            <!-- <div id="scrollbar3" class="art-scroll-frame"> -->
            <div class="art-timeline">
                <div class="art-timeline-item">
                    <div class="art-timeline-mark-light"></div>
                    <div class="art-timeline-mark"></div>


                    <div class="art-a art-timeline-content">
                        <div class="art-card-header">
                            <div class="art-left-side">
                                <h5>Lakshya </h5>
                                <div class="art-el-suptitle mb-15">(Laravel, Filament REST API,
                                    JSON, MySQL)</div>
                            </div>
                            <div class="art-right-side">
                                <span class="art-date">Nov 2022 - On-Going</span>
                            </div>
                        </div>
                        <p>Developed Restful API for ecommerce mobile application with functionality
                            of
                            Sanctum Authentication, Product Listing, Product Details, Cart
                            Management and
                            Checkout.</p>

                        {{-- <a data-fancybox="recommendation" data-no-swup
                                                    href="#art-recomendation-popup-1"
                                                    class="art-link art-color-link art-w-chevron">Recommendation</a> --}}

                    </div>
                </div>

                <div class="art-timeline-item">
                    <div class="art-timeline-mark-light"></div>
                    <div class="art-timeline-mark"></div>




                    <!-- popup -->
                    <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-1">

                        <!-- testimonial -->
                        <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                                <!-- photo -->
                                <img class="art-testimonial-face" src="{{ asset('storage/img/testimonials/face-3.jpg') }}"
                                    alt="face">
                                <!-- name -->
                                <h5>Paul Trueman</h5>
                                <div class="art-el-suptitle mb-15">Template author</div>
                                <!-- text -->
                                <div class="mb-15">Working with Artur has been a pleasure. Better
                                    yet - I alerted them of a minor issue before going to sleep. The
                                    issue was fixed the next morning. I couldn't ask for better
                                    support. Thank you Artur!
                                    This is easily a 5 star freelancer.</div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                                <div class="art-left-side">
                                    <!-- star rate -->
                                    <ul class="art-star-rate">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <!-- star rate end -->
                                </div>
                                <div class="art-right-side">

                                </div>
                            </div>
                            <!-- testimonial footer end -->
                        </div>
                        <!-- testimonial end -->

                    </div>
                    <!-- popup end -->

                </div>

                <div class="art-timeline-item">
                    <div class="art-timeline-mark-light"></div>
                    <div class="art-timeline-mark"></div>

                    <div class="art-a art-timeline-content">
                        <div class="art-card-header">
                            <div class="art-left-side">
                                <h5>Go-local Basket</h5>
                                <div class="art-el-suptitle mb-15">Laravel, Filament, REST API,
                                    JSON, MySQL</div>
                            </div>
                            <div class="art-right-side">
                                <span class="art-date">Jul 2022 - On-Going</span>
                            </div>
                        </div>
                        <p>o An Ecommerce mobile application use for delivery products from multiple
                            warehouses with live tracking Order.
                            <br>
                            o Developed Restful API with functionality of Sanctum Authentication,
                            Product
                            Listing, Product Details, Cart Management and Checkout.
                        </p>

                        {{-- <a data-fancybox="recommendation" data-no-swup
                                                    href="#art-recomendation-popup-2"
                                                    class="art-link art-color-link art-w-chevron">Recommendation</a> --}}
                    </div>

                    <!-- popup -->
                    <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-2">

                        <!-- testimonial -->
                        <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                                <!-- photo -->
                                <img class="art-testimonial-face" src="{{ asset('storage/img/testimonials/face-4.jpg') }}"
                                    alt="face">
                                <!-- name -->
                                <h5>Paul Trueman</h5>
                                <div class="art-el-suptitle mb-15">Template author</div>
                                <!-- text -->
                                <div class="mb-15">Working with Artur has been a pleasure. Better
                                    yet - I alerted them of a minor issue before going to sleep. The
                                    issue was fixed the next morning. I couldn't ask for better
                                    support. Thank you Artur!
                                    This is easily a 5 star freelancer.</div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                                <div class="art-left-side">
                                    <!-- star rate -->
                                    <ul class="art-star-rate">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <!-- star rate end -->
                                </div>
                                <div class="art-right-side">

                                </div>
                            </div>
                            <!-- testimonial footer end -->
                        </div>
                        <!-- testimonial end -->

                    </div>
                    <!-- popup end -->

                </div>
                <div class="art-timeline-item">
                    <div class="art-timeline-mark-light"></div>
                    <div class="art-timeline-mark"></div>

                    <div class="art-a art-timeline-content">
                        <div class="art-card-header">
                            <div class="art-left-side">
                                <h5>Footfanz.com</h5>
                                <div class="art-el-suptitle mb-15">(Laravel, Filament, MySQL, JS &
                                    Bootstrap</div>
                            </div>
                            <div class="art-right-side">
                                <span class="art-date">Jun 2022 - Dec 2022</span>
                            </div>
                        </div>
                        <p>o A dating application based on Only Fans functionality. Where modals can
                            work as
                            content creator or user can view, purchase, Chat etc.
                        </p>

                        {{-- <a data-fancybox="recommendation" data-no-swup
                                                    href="#art-recomendation-popup-2"
                                                    class="art-link art-color-link art-w-chevron">Recommendation</a> --}}
                    </div>

                    <!-- popup -->
                    <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-2">

                        <!-- testimonial -->
                        <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                                <!-- photo -->
                                <img class="art-testimonial-face"
                                    src="{{ asset('storage/img/testimonials/face-4.jpg') }}" alt="face">
                                <!-- name -->
                                <h5>Paul Trueman</h5>
                                <div class="art-el-suptitle mb-15">Template author</div>
                                <!-- text -->
                                <div class="mb-15">Working with Artur has been a pleasure. Better
                                    yet - I alerted them of a minor issue before going to sleep. The
                                    issue was fixed the next morning. I couldn't ask for better
                                    support. Thank you Artur!
                                    This is easily a 5 star freelancer.</div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                                <div class="art-left-side">
                                    <!-- star rate -->
                                    <ul class="art-star-rate">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <!-- star rate end -->
                                </div>
                                <div class="art-right-side">

                                </div>
                            </div>
                            <!-- testimonial footer end -->
                        </div>
                        <!-- testimonial end -->

                    </div>
                    <!-- popup end -->

                </div>
                <div class="art-timeline-item">
                    <div class="art-timeline-mark-light"></div>
                    <div class="art-timeline-mark"></div>

                    <div class="art-a art-timeline-content">
                        <div class="art-card-header">
                            <div class="art-left-side">
                                <h5>justBoardrooms.com</h5>
                                <div class="art-el-suptitle mb-15">Laravel, Filament. MySQL, JSON
                                </div>
                            </div>
                            <div class="art-right-side">
                                <span class="art-date">Mar 2022 - Oct 2022</span>
                            </div>
                        </div>
                        <p>o Boardroom is a web Application where clients can allocate their
                            physical
                            spaces/rooms for Business meets or as a co-operate office</p>

                        {{-- <a data-fancybox="recommendation" data-no-swup
                                                    href="#art-recomendation-popup-2"
                                                    class="art-link art-color-link art-w-chevron">Recommendation</a> --}}
                    </div>

                    <!-- popup -->
                    <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-2">

                        <!-- testimonial -->
                        <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                                <!-- photo -->
                                <img class="art-testimonial-face"
                                    src="{{ asset('storage/img/testimonials/face-4.jpg') }}" alt="face">
                                <!-- name -->
                                <h5>Paul Trueman</h5>
                                <div class="art-el-suptitle mb-15">Template author</div>
                                <!-- text -->
                                <div class="mb-15">Working with Artur has been a pleasure. Better
                                    yet - I alerted them of a minor issue before going to sleep. The
                                    issue was fixed the next morning. I couldn't ask for better
                                    support. Thank you Artur!
                                    This is easily a 5 star freelancer.</div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                                <div class="art-left-side">
                                    <!-- star rate -->
                                    <ul class="art-star-rate">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <!-- star rate end -->
                                </div>
                                <div class="art-right-side">

                                </div>
                            </div>
                            <!-- testimonial footer end -->
                        </div>
                        <!-- testimonial end -->

                    </div>
                    <!-- popup end -->

                </div>
                <div class="art-timeline-item">
                    <div class="art-timeline-mark-light"></div>
                    <div class="art-timeline-mark"></div>

                    <div class="art-a art-timeline-content">
                        <div class="art-card-header">
                            <div class="art-left-side">
                                <h5>Go-local Basket</h5>
                                <div class="art-el-suptitle mb-15">Laravel, Filament, REST API,
                                    JSON, MySQL</div>
                            </div>
                            <div class="art-right-side">
                                <span class="art-date">Jul 2022 - On-Going</span>
                            </div>
                        </div>
                        <p>o An Ecommerce mobile application use for delivery products from multiple
                            warehouses with live tracking Order.
                            <br>
                            o Developed Restful API with functionality of Sanctum Authentication,
                            Product
                            Listing, Product Details, Cart Management and Checkout.
                        </p>

                        {{-- <a data-fancybox="recommendation" data-no-swup
                                                    href="#art-recomendation-popup-2"
                                                    class="art-link art-color-link art-w-chevron">Recommendation</a> --}}
                    </div>


                    <!-- popup -->
                    <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-2">

                        <!-- testimonial -->
                        <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                                <!-- photo -->

                                <img class="art-testimonial-face"
                                    src="{{ asset('storage/img/testimonials/face-4.jpg') }}" alt="face">
                                <!-- name -->
                                <h5>Paul Trueman</h5>
                                <div class="art-el-suptitle mb-15">Template author</div>
                                <!-- text -->
                                <div class="mb-15">Working with Artur has been a pleasure. Better
                                    yet - I alerted them of a minor issue before going to sleep. The
                                    issue was fixed the next morning. I couldn't ask for better
                                    support. Thank you Artur!
                                    This is easily a 5 star freelancer.</div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                                <div class="art-left-side">
                                    <!-- star rate -->
                                    <ul class="art-star-rate">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <!-- star rate end -->
                                </div>
                                <div class="art-right-side">

                                </div>
                            </div>
                            <!-- testimonial footer end -->
                        </div>
                        <!-- testimonial end -->

                    </div>
                    <!-- popup end -->

                </div>



            </div>

            <!-- </div> -->
            <!-- timeline end -->

        </div>

    </div>

    <!-- container -->
    <div class="container-fluid">

        <!-- row -->
        <div class="row p-30-0">

            <!-- col -->
            <div class="col-lg-12">

                <!-- section title -->
                <div class="art-section-title">
                    <!-- title frame -->
                    <div class="art-title-frame">
                        <!-- title -->
                        <h4>Contact information</h4>
                    </div>
                    <!-- title frame end -->
                </div>
                <!-- section title end -->

            </div>
            <!-- col end -->
            <!-- col -->
            <div class="col-lg-4">
                <!-- contact card -->
                <div class="art-a art-card">
                    <div class="art-table p-15-15">
                        <ul>
                            <li>
                                <h6>Country:</h6><span>India</span>
                            </li>
                            <li>
                                <h6>City:</h6><span>Chandigarh</span>
                            </li>

                            <li>
                                <h6>Street:</h6><span>IT Park</span>
                            </li>
                        </ul>





                    </div>
                </div>
                <!-- contact card end -->
            </div>
            <!-- col end -->
            <!-- col -->
            <div class="col-lg-4">
                <!-- contact card -->
                <div class="art-a art-card">
                    <div class="art-table p-15-15">
                        <ul>
                            <li>
                                <h6>Email:</h6><span>snhlrj8[at]gmail.com</span>
                            </li>
                            <li>
                                <h6>LinkedIn:</h6><span>@snhlrj</span>
                            </li>
                            <li>
                                <h6>GitHub:</h6><span>rajvansh-369</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- contact card end -->
            </div>
            <!-- col end -->
            <!-- col -->
            <div class="col-lg-4">
                <!-- contact card -->
                <div class="art-a art-card">
                    <div class="art-table p-15-15">
                        <ul>
                            <li>
                                <!-- <h6>Support service:</h6><span>+78 (098) 333 11 22</span> -->
                            </li>
                            <li>
                                <!-- <h6>Office:</h6><span>+78 (098) 326 11 22</span> -->
                            </li>
                            <li>
                                <h6>Personal:</h6><span>+91 (7979) *** ****</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- contact card end -->

            </div>
            <!-- col end -->

            <!-- col -->
            <div class="col-lg-12">

                <!-- section title -->
                <div class="art-section-title">
                    <!-- title frame -->
                    <div class="art-title-frame">
                        <!-- title -->
                        <h4>Get in touch</h4>
                    </div>
                    <!-- title frame end -->
                </div>
                <!-- section title end -->

                <!-- contact form frame -->
                <div class="art-a art-card">

                    <!-- contact form -->
                    <form id="form" class="art-contact-form">
                        <!-- form field -->
                        <div class="art-form-field">
                            <!-- name input -->
                            <input id="name" name="name" class="art-input" type="text" placeholder="Name"
                                required>
                            <!-- label -->
                            <label for="name"><i class="fas fa-user"></i></label>
                        </div>
                        <!-- form field end -->
                        <!-- form field -->
                        <div class="art-form-field">
                            <!-- email input -->
                            <input id="email" name="email" class="art-input" type="email" placeholder="Email"
                                required>
                            <!-- label -->
                            <label for="email"><i class="fas fa-at"></i></label>
                        </div>
                        <!-- form field end -->
                        <!-- form field -->
                        <div class="art-form-field">
                            <!-- message textarea -->
                            <textarea id="message" name="text" class="art-input" placeholder="Message" required></textarea>
                            <!-- label -->
                            <label for="message"><i class="far fa-envelope"></i></label>
                        </div>
                        <!-- form field end -->
                        <!-- button -->
                        <div class="art-submit-frame">
                            <button class="art-btn art-btn-md art-submit"><span>Send message</span></button>
                            <!-- success -->
                            <div class="art-success">Success <i class="fas fa-check"></i></div>
                        </div>
                    </form>
                    <!-- contact form end -->

                </div>
                <!-- contact form frame end -->

            </div>
            <!-- col end -->

        </div>
        <!-- row end -->

    </div>
    <!-- container end -->









    <script>
        // Contact form
        $('.art-input').keyup(function() {
            if ($(this).val()) {
                $(this).addClass('art-active');
            } else {
                $(this).removeClass('art-active');
            }
        });



        $(".art-submit").click(function() {

            var name = document.getElementById('name').value
            var email = document.getElementById('email').value
            var message = document.getElementById('message').value

            if (name != "" && email != "") {

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: @json(route('sendMessage')),
                    data: {
                        'name': name,
                        'email': email,
                        'message': message,

                    }
                }).done(function() {

                    var tl = anime.timeline({
                        easing: 'easeOutExpo',
                    });

                    document.getElementById('name').value = "";
                    document.getElementById('email').value = "";
                    document.getElementById('message').value = "";

                    tl
                        .add({
                            targets: '.art-submit',
                            opacity: 0,
                            scale: .5,
                        })
                        .add({
                            targets: '.art-success',
                            scale: 1,
                            height: '45px',
                        })
                });

            } else {

                alert("Please enter Name & Email");
            }
            return false;
        });
    </script>
@endsection
