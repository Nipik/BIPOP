<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>BIPOP</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/templatemo-breezed.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/lightbox.css') }}">
    </head>
    <body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="{{ route('home') }}" class="logo">
                            BIPOP
                        </a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#projects">Projects</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Action</a>
                                <ul>
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('inscription') }}">Register</a></li>
                                    <li><a href="{{ route('admin.login') }}">Admin</a></li>
                                    <li><a href="">Blog</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#contact-us">Contact Us</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div id="search">
        <button type="button" class="close">×</button>
        <form id="contact" action="#" method="get">
            <fieldset>
                <input type="search" name="q" placeholder="SEARCH KEYWORD(s)" aria-label="Search through site content">
            </fieldset>
            <fieldset>
                <button type="submit" class="main-button">Search</button>
            </fieldset>
        </form>
    </div>
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <div class="item">
            <div class="img-fill">
                <img src="{{ asset('images/slide-01.jpg') }}" alt="">
                <div class="text-content">
                  <h3>Welcome To BIPOP</h3>
                  <h5>New Photo Laboratory</h5>
                  <a href="#" class="main-stroked-button">Learn More</a>
                  <a href="{{ route('inscription') }}" class="main-filled-button">Get It Now</a>
                </div>
            </div>
          </div>
          <div class="item">
            <div class="img-fill">
                <img src="{{ asset('images/slide-02.jpg') }}" alt="">
                <div class="text-content">
                  <h3>Ideal Application For Creation</h3>
                  <h5>Best Photo Laboratory</h5>
                  <a href="#" class="main-stroked-button">Read More</a>
                  <a href="{{ route('inscription') }}" class="main-filled-button">Take Action</a>
                </div>
            </div>
          </div>
          <div class="item">
            <div class="img-fill">
                <img src="{{ asset('images/slide-03.jpg') }}" alt="">
                <div class="text-content">
                  <h3>High Performance</h3>
                  <h5>Robust and Speedy</h5>
                  <a href="#" class="main-stroked-button">Learn More</a>
                  <a href="{{ route('inscription') }}" class="main-filled-button">Get It Now</a>
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>

    <section class="section" id="about">
        <div class="container">
            <div class="video">
                <video controls poster="{{ asset('images\lab.jpg') }}" width="1200px">
                    <source src="{{ asset ('video/trailer.mp4') }}" type="video/mp4">
               </video>
            </div>
        </div>
    </section>
    <section class="section" id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h6>Subscribe Newsletters</h6>
                        <h2>Don’t miss this chance!</h2>
                    </div>
                    <div class="subscribe-content">
                        <p>Vivamus suscipit blandit nibh, in cursus mi. Proin vel blandit metus, et auctor elit. Vivamus tincidunt tristique convallis. Ut nec odio vel arcu euismod semper nec ac sem.</p>
                        <div class="subscribe-form">
                            <form id="subscribe-now" action="" method="get">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12">
                                      <fieldset>
                                        <input name="email" type="text" id="email" placeholder="Enter your email..." required="">
                                      </fieldset>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                      <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Subscribe Now</button>
                                      </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="projects">
      <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="section-heading">
                    <h6>Our Projects</h6>
                    <h2>Some of our latest projects</h2>
                </div>
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".des">Design</li>
                        <li data-filter=".dev">Filter effect</li>
                        <li data-filter=".gra">Graphics</li>
                        <li data-filter=".tsh">Artworks</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="filters-content">
                    <div class="row grid">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                          <div class="item">
                            <a href="{{ asset('images/project-big-item-01.jpg') }}" data-lightbox="image-1" data-title="Our Projects"><img src="{{ asset('images/project-item-01.jpg') }}" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                          <div class="item">
                            <a href="{{ asset('images/project-big-item-02.jpg') }}" data-lightbox="image-1" data-title="Our Projects"><img src="{{ asset('images/project-item-02.jpg') }}" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all gra">
                          <div class="item">
                            <a href="{{ asset('images/project-big-item-03.jpg') }}" data-lightbox="image-1" data-title="Our Projects"><img src="{{ asset('images/project-item-03.jpg') }}" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all tsh">
                          <div class="item">
                            <a href="{{ asset('images/project-big-item-04.jpg') }}" data-lightbox="image-1" data-title="Our Projects"><img src="{{ asset('images/project-item-04.jpg') }}" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                          <div class="item">
                            <a href="{{ asset('images/project-big-item-05.jpg') }}" data-lightbox="image-1" data-title="Our Projects"><img src="{{ asset('images/project-item-05.jpg') }}" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                          <div class="item">
                            <a href="{{ asset('images/project-big-item-06.jpg') }}" data-lightbox="image-1" data-title="Our Projects"><img src="{{ asset('images/project-item-06.jpg') }}" alt=""></a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h6>Digital Team</h6>
                        <h2>young and talented members</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{ asset('images/member-item-01.jpg') }}" alt="">
                                <div class="hover-effect">
                                </div>
                            </div>
                            <h4>.01 James Walsh</h4>
                            <span>Photographer</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{ asset('images/member-item-04.jpg') }}" alt="">
                                <div class="hover-effect">
                                </div>
                            </div>
                            <h4>.02 Sara Wils</h4>
                            <span>Graphic Designer</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{ asset('images/member-item-02.jpg') }}" alt="">
                                <div class="hover-effect">
                                </div>
                            </div>
                            <h4>.03 Johnny Egg</h4>
                            <span>Digital Influencer</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{ asset('images/member-item-05.jpg') }}" alt="">
                                <div class="hover-effect">
                                </div>
                            </div>
                            <h4>.04 Catherine Phyu</h4>
                            <span>Graphic Designer</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{ asset('images/member-item-03.jpg') }}" alt="">
                                <div class="hover-effect">
                                </div>
                            </div>
                            <h4>.05 Shao Lynn</h4>
                            <span>Chief Marketing</span>
                        </div>
                        
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{ asset('images/member-item-08.jpg') }}" alt="">
                                <div class="hover-effect">
                                </div>
                            </div>
                            <h4>.06 Emma Honey</h4>
                            <span>Digital Influencer</span>
                        </div>
                        
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{ asset('images/member-item-06.jpg') }}" alt="">
                                <div class="hover-effect">
                                </div>
                            </div>
                            <h4>.07 Oliva Sofie</h4>
                            <span>Website Analyst</span>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Feel free to keep in touch with us!</h2>
                        </div>
                        <ul class="contact-info">
                            <li><img src="{{ asset('images/contact-info-01.png') }}" alt="">010-020-0860</li>
                            <li><img src="{{ asset('images/contact-info-02.png') }}" alt="">info@company.com</li>
                            <li><img src="{{ asset('images/contact-info-03.png') }}" alt="">www.company.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Your Phone" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" id="email" placeholder="Your Email *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Send Message Now <i class="fa fa-arrow-right"></i></button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                        <p>Copyright &copy; 2023 QCT FAT.GR. 
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    


    <script src="{{ asset('js/jquery-2.1.0.min.js') }}" defer></script>
    <script src="{{ asset('js/popper.js') }}"  defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/owl-carousel.js') }}" defer></script>
    <script src="{{ asset('js/scrollreveal.min.js') }}" defer></script>
    <script src="{{ asset('js/waypoints.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}" defer></script>
    <script src="{{ asset('js/imgfix.min.js') }}" defer></script> 
    <script src="{{ asset('js/slick.js') }}" defer></script> 
    <script src="{{ asset('js/lightbox.js') }}" defer></script> 
    <script src="{{ asset('js/isotope.js') }}" defer></script> 
    <script src="{{ asset('js/custom.js') }}" defer></script>
    
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });
    </script>
  </body>
</html>