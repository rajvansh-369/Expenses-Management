@extends('portfolio.app')

@section('content')

  <!-- app -->
  <div class="art-app art-app-onepage clickable" >

    <!-- mobile top bar -->
    <div class="art-mobile-top-bar"></div>

    <!-- app wrapper -->
    <div class="art-app-wrapper">

      <!-- app container end -->
      <div class="art-app-container">

        <!-- info bar -->
        <div class="art-info-bar">

          <!-- menu bar frame -->
          <div class="art-info-bar-frame">

            <!-- info bar header -->
            <div class="art-info-bar-header">
              <!-- info bar button -->
              <div class="art-info-bar-btn">
                <!-- icon -->
                <i class="fas fa-ellipsis-v"></i>
              </div>
              <!-- info bar button end -->
            </div>
            <!-- info bar header end -->

            <!-- info bar header -->
            <div class="art-header">
              <!-- avatar -->
              <div class="art-avatar">
                <a data-fancybox="avatar" data-no-swup href="{{asset('img/face-1.jpg')}}" class="art-avatar-curtain">
                  <img src="{{asset('storage/img/pic.jpeg')}}" alt="avatar">
                  <i class="fas fa-expand"></i>
                </a>
                <!-- available -->
                <div class="art-lamp-light">
                  <!-- add class 'art-not-available' if not available-->
                  <div class="art-available-lamp"></div>
                </div>
              </div>
              <!-- avatar end -->
              <!-- name -->
              <h5 class="art-name mb-10">Snehal Rajvansh</h5>
              <!-- post -->
              <div class="art-sm-text">Software Deweloper <br>PHP, Laravel, Python </div>
            </div>
            <!-- info bar header end -->

            <!-- scroll frame -->
            <div id="scrollbar2" class="art-scroll-frame">

              <!-- info bar about -->
              <div class="art-table p-15-15">
                <!-- about text -->
                <ul>
                  <!-- country -->
                  <li>
                    <h6>Residence:</h6><span>Chandigarh</span>
                  </li>
                  <!-- city -->
                  <li>
                    <h6>City:</h6><span>Chandigarh</span>
                  </li>
                  <!-- age -->
                  <li>
                    <h6>Age:</h6><span>23</span>
                  </li>
                </ul>
              </div>
              <!-- info bar about end -->

              <!-- divider -->
              <div class="art-ls-divider"></div>

              <!-- language skills -->
              <div class="art-lang-skills p-30-15">

                <!-- skill -->
                <div class="art-lang-skills-item">
                  <div id="circleprog2" class="art-cirkle-progress"></div>
                  <!-- title -->
                  <h6>English</h6>
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-lang-skills-item">
                  <div id="circleprog1" class="art-cirkle-progress"></div>
                  <!-- title -->
                  <h6>Hindi</h6>
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-lang-skills-item">
                  <div id="circleprog3" class="art-cirkle-progress"></div>
                  <!-- title -->
                  <!-- <h6>Spanish</h6> -->
                </div>
                <!-- skill end -->

              </div>
              <!-- language skills end -->

              <!-- divider -->
              <div class="art-ls-divider"></div>

              <!-- hard skills -->
              <div class="art-hard-skills p-30-15">

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>Core PHP</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog1"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>Laravel</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog2"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>JS/jQuery</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog3"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>HTML/CSS</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog4"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>dJango</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog5"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

              </div>
              <!-- language skills end -->

              <!-- divider -->
              <div class="art-ls-divider"></div>

              <!-- knowledge list -->
              <ul class="art-knowledge-list p-15-0">
                <!-- list item -->
                <li>Laravel, CodeIgniter</li>
                <!-- list item -->
                <li>Filament, LiveWire, jetStream</li>
                <!-- list item -->
                <li>MySQL</li>
                <!-- list item -->
                <li>GIT</li>
              </ul>
              <!-- knowledge list end -->

              <!-- divider -->
              <div class="art-ls-divider"></div>

              <!-- links frame -->
              <div class="art-links-frame p-15-15">

                <!-- download cv button -->
                <a href="https://snehal.info/snehal/files/snehal_backend_dev_2.0Y.pdf" class="art-link" download data-no-swup>Download cv <i class="fas fa-download"></i></a>

              </div>
              <!-- links frame end -->

            </div>
            <!-- scroll frame end -->

            <!-- sidebar social -->
            <div class="art-ls-social">
              <!-- social link -->
              <a href="https://www.linkedin.com/in/snehal-raj-7373bb14b/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
              <!-- social link -->
              <a href="#." target="_blank"><i class="fab fa-facebook"></i></a>
              <!-- social link -->
              <a href="https://www.instagram.com/snehal_rajvansh_" target="_blank"><i class="fab fa-instagram"></i></a>
              <!-- social link -->
              <a href="https://github.com/rajvansh-369" target="_blank"><i class="fab fa-github"></i></a>
              <!-- social link -->
              <a href="#." target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
            <!-- sidebar social end -->

          </div>
          <!-- menu bar frame end -->

        </div>
        <!-- info bar end -->

        <!-- content -->
        <div class="art-content">

          <!-- curtain -->
          <div class="art-curtain"></div>

          <!-- top background -->
          <div class="art-top-bg" style="background-image: url({{asset('storage/img/bg.jpg')}})">
            <!-- overlay -->
            <div class="art-top-bg-overlay"></div>
            <!-- overlay end -->
          </div>
          <!-- top background end -->

          <!-- swup container -->
          <div class="transition-fade" id="swup">

            <!-- scroll frame -->
            <div id="scrollbar" class="art-scroll-frame">

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-60-0 p-lg-30-0 p-md-15-0">
                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- banner -->
                    <div class="art-a art-banner" style="background-image: url({{asset('storage/img/bg.jpg')}})">
                      <!-- banner back -->
                      <div class="art-banner-back"></div>
                      <!-- banner dec -->
                      <div class="art-banner-dec"></div>
                      <!-- banner overlay -->
                      <div class="art-banner-overlay">
                        <!-- main title -->
                        <div class="art-banner-title">
                          <!-- title -->
                          <h1 class="mb-15">Hi, I'm Software <br>Developer</h1>
                          <!-- suptitle -->
                          <div class="art-lg-text art-code mb-25">&lt;<i>code</i>&gt;  I code <span class="txt-rotate" data-period="2000"
                              data-rotate='[ "Web Application.", "APIs.", "design database structure.", "automation tools(Cron Job)." ]'></span>&lt;/<i>code</i>&gt;</div>
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
                        <span class="art-counter">2</span><span class="art-counter-plus">+</span>
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
                        <!-- <span class="art-counter">114</span> -->
                      </div>
                      <!-- counter end -->
                      <!-- title -->
                      <!-- <h6>Happy Customers</h6> -->
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
                        <h4>Hands On</h4>
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

                      @foreach ($projects as  $poject)
                    
                      <div class="col-md-3 ">
                          <div class="wraps">
                            <a target="_blank" href="{{$poject->project_url}}">
                            <iframe class="frames" src="{{$poject->project_url}}" frameborder="0" ></iframe></a>
                          </div>
                       <h5 class="projectName text-center">{{$poject->project_name}}</h5>
                          <p class="projectName ">{{substr($poject->project_description,0 , 100)}}...</p>
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
                        <img class="full_screen" src="https://skillicons.dev/icons?i=php,laravel,python,js,wordpress,jquery,html,css,bootstrap,mysql,git,arduino" alt="">
                        <img class="mobile_screen" src="https://skillicons.dev/icons?i=php,laravel,python,js,wordpress,jquery" alt="">
                        <img class="mobile_screen" src="https://skillicons.dev/icons?i=html,css,bootstrap,mysql,git,arduino" alt="">
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
                              <div class="art-el-suptitle mb-15">Computer Science and Engineering</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">Aug 2016 - Jul 2020</span>
                            </div>
                          </div>

                          <!-- <p>Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p> -->
                          <a data-fancybox="diplome" data-no-swup href="files/certificate.jpg" class="art-link art-color-link art-w-chevron">Diplome</a>
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
                          <a data-fancybox="diplome" data-no-swup href="files/certificate.jpg" class="art-link art-color-link art-w-chevron">Licence</a>
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
                          <a data-fancybox="diplome" data-no-swup href="files/certificate.jpg" class="art-link art-color-link art-w-chevron">Diplome</a>
                        </div>

                      </div>
                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>

                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>C++ For C Programmers</h5>
                              <div class="art-el-suptitle mb-15">Coursera (University of California, Santa Cruz)</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">2022</span>
                            </div>
                          </div>

                          <!-- <p>Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p> -->
                          <a data-fancybox="diplome" data-no-swup href="files/certificate.jpg" class="art-link art-color-link art-w-chevron">Diplome</a>
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
                              <div class="art-el-suptitle mb-15">Senior Software Developer</div>
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
                          <a data-fancybox="recommendation" data-no-swup href="#art-recomendation-popup-1" class="art-link art-color-link art-w-chevron">Recommendation</a>

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
                              <img class="art-testimonial-face" src="{{asset('storage/img/testimonials/face-3.jpg')}}" alt="face">
                              <!-- name -->
                              <h5>Paul Trueman</h5>
                              <div class="art-el-suptitle mb-15">Template author</div>
                              <!-- text -->
                              <div class="mb-15">Working with Artur has been a pleasure. Better yet - I alerted them of a minor issue before going to sleep. The issue was fixed the next morning. I couldn't ask for better support. Thank you Artur!
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
                          <a data-fancybox="recommendation" data-no-swup href="#art-recomendation-popup-2" class="art-link art-color-link art-w-chevron">Recommendation</a>
                        </div>

                        <!-- popup -->
                        <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-2">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="{{asset('storage/img/testimonials/face-4.jpg')}}" alt="face">
                              <!-- name -->
                              <h5>Paul Trueman</h5>
                              <div class="art-el-suptitle mb-15">Template author</div>
                              <!-- text -->
                              <div class="mb-15">Working with Artur has been a pleasure. Better yet - I alerted them of a minor issue before going to sleep. The issue was fixed the next morning. I couldn't ask for better support. Thank you Artur!
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
                              <div class="art-el-suptitle mb-15">(Laravel, Filament REST API, JSON, MySQL)</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">Nov 2022 - On-Going</span>
                            </div>
                          </div>
                          <p>Developed Restful API for ecommerce mobile application with functionality of
                            Sanctum Authentication, Product Listing, Product Details, Cart Management and 
                            Checkout.</p>
                          
                          <a data-fancybox="recommendation" data-no-swup href="#art-recomendation-popup-1" class="art-link art-color-link art-w-chevron">Recommendation</a>

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
                              <img class="art-testimonial-face" src="{{asset('storage/img/testimonials/face-3.jpg')}}" alt="face">
                              <!-- name -->
                              <h5>Paul Trueman</h5>
                              <div class="art-el-suptitle mb-15">Template author</div>
                              <!-- text -->
                              <div class="mb-15">Working with Artur has been a pleasure. Better yet - I alerted them of a minor issue before going to sleep. The issue was fixed the next morning. I couldn't ask for better support. Thank you Artur!
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
                              <div class="art-el-suptitle mb-15">Laravel, Filament, REST API, JSON, MySQL</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">Jul 2022 - On-Going</span>
                            </div>
                          </div>
                          <p>o An Ecommerce mobile application use for delivery products from multiple 
                            warehouses with live tracking Order.
                            <br>
                            o Developed Restful API with functionality of Sanctum Authentication, Product 
                            Listing, Product Details, Cart Management and Checkout.
                            </p>
                         
                          <a data-fancybox="recommendation" data-no-swup href="#art-recomendation-popup-2" class="art-link art-color-link art-w-chevron">Recommendation</a>
                        </div>

                        <!-- popup -->
                        <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-2">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="{{asset('storage/img/testimonials/face-4.jpg')}}" alt="face">
                              <!-- name -->
                              <h5>Paul Trueman</h5>
                              <div class="art-el-suptitle mb-15">Template author</div>
                              <!-- text -->
                              <div class="mb-15">Working with Artur has been a pleasure. Better yet - I alerted them of a minor issue before going to sleep. The issue was fixed the next morning. I couldn't ask for better support. Thank you Artur!
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
                              <div class="art-el-suptitle mb-15">(Laravel, Filament, MySQL, JS & Bootstrap</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">Jun 2022 - Dec 2022</span>
                            </div>
                          </div>
                          <p>o A dating application based on Only Fans functionality. Where modals can work as 
                            content creator or user can view, purchase, Chat etc.
                           </p>
                         
                          <a data-fancybox="recommendation" data-no-swup href="#art-recomendation-popup-2" class="art-link art-color-link art-w-chevron">Recommendation</a>
                        </div>

                        <!-- popup -->
                        <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-2">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="{{asset('storage/img/testimonials/face-4.jpg')}}" alt="face">
                              <!-- name -->
                              <h5>Paul Trueman</h5>
                              <div class="art-el-suptitle mb-15">Template author</div>
                              <!-- text -->
                              <div class="mb-15">Working with Artur has been a pleasure. Better yet - I alerted them of a minor issue before going to sleep. The issue was fixed the next morning. I couldn't ask for better support. Thank you Artur!
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
                              <div class="art-el-suptitle mb-15">Laravel, Filament. MySQL, JSON</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">Mar 2022 - Oct 2022</span>
                            </div>
                          </div>
                          <p>o Boardroom is a web Application where clients can allocate their physical 
                            spaces/rooms for Business meets or as a co-operate office</p>
                         
                          <a data-fancybox="recommendation" data-no-swup href="#art-recomendation-popup-2" class="art-link art-color-link art-w-chevron">Recommendation</a>
                        </div>

                        <!-- popup -->
                        <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-2">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="{{asset('storage/img/testimonials/face-4.jpg')}}" alt="face">
                              <!-- name -->
                              <h5>Paul Trueman</h5>
                              <div class="art-el-suptitle mb-15">Template author</div>
                              <!-- text -->
                              <div class="mb-15">Working with Artur has been a pleasure. Better yet - I alerted them of a minor issue before going to sleep. The issue was fixed the next morning. I couldn't ask for better support. Thank you Artur!
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
                              <div class="art-el-suptitle mb-15">Laravel, Filament, REST API, JSON, MySQL</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">Jul 2022 - On-Going</span>
                            </div>
                          </div>
                          <p>o An Ecommerce mobile application use for delivery products from multiple 
                            warehouses with live tracking Order.
                            <br>
                            o Developed Restful API with functionality of Sanctum Authentication, Product 
                            Listing, Product Details, Cart Management and Checkout.
                            </p>
                         
                          <a data-fancybox="recommendation" data-no-swup href="#art-recomendation-popup-2" class="art-link art-color-link art-w-chevron">Recommendation</a>
                        </div>

                        <!-- popup -->
                        <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-2">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="{{asset('storage/img/testimonials/face-4.jpg')}}" alt="face">
                              <!-- name -->
                              <h5>Paul Trueman</h5>
                              <div class="art-el-suptitle mb-15">Template author</div>
                              <!-- text -->
                              <div class="mb-15">Working with Artur has been a pleasure. Better yet - I alerted them of a minor issue before going to sleep. The issue was fixed the next morning. I couldn't ask for better support. Thank you Artur!
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
                            <h6>Streat:</h6><span>IT Park</span>
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
                            <h6>Email:</h6><span>snhlrj8@gmail.com</span>
                          </li>
                          <li>
                            <h6>LinkedIn:</h6><span>@snhlrj</span>
                          </li>
                          <li>
                            <h6>Skype:</h6><span>Snehal Raj</span>
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
                            <h6>Personal:</h6><span>+91 (7979) 068 408</span>
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
                          <input id="name" name="name" class="art-input" type="text" placeholder="Name" required>
                          <!-- label -->
                          <label for="name"><i class="fas fa-user"></i></label>
                        </div>
                        <!-- form field end -->
                        <!-- form field -->
                        <div class="art-form-field">
                          <!-- email input -->
                          <input id="email" name="email" class="art-input" type="email" placeholder="Email" required>
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
                          <button class="art-btn art-btn-md art-submit" type="submit"><span>Send message</span></button>
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

      

              <!-- container -->
              <div class="container-fluid">

                <!-- footer -->
                <footer>
                  <!-- copyright -->
                  <div class="art-copy">© 2022 Snehal Rajvansh</div>
                  <!-- author ( Please! Do not delete it. You are awesome! :) -->
                  <div>Template author:&#160; <a href="https://themeforest.net/user/millerdigitaldesign" target="_blank" data-no-swup>Nazar Miller</a></div>
                </footer>
                <!-- footer end -->

              </div>
              <!-- container end -->

            </div>
            <!-- scroll frame end -->

          </div>
          <!-- swup container end -->

        </div>
        <!-- content end -->

      </div>
      <!-- app container end -->

    </div>
    <!-- app wrapper end -->

    <!-- preloader -->
    <div class="art-preloader">
      <!-- preloader content -->
      <div class="art-preloader-content">
        <!-- title -->
        <h4>Snehal Rajvansh</h4>
        <!-- progressbar -->
        <div id="preloader" class="art-preloader-load"></div>
      </div>
      <!-- preloader content end -->
    </div>
    <!-- preloader end -->

  </div>


@endsection