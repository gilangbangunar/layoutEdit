<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
 
   <title>Enfold Free Responsive HTML5 Template | Template Stock</title>
   <!-- Google Fonts -->
   <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600,300,700' rel='stylesheet' type='text/css'>
   <!-- ionicons Fonts for icons -->
   <link href="css/ionicons.min.css" rel="stylesheet">
   <!-- bootstrap -->
   <link href="css/bootstrap.css" rel="stylesheet">
   <!-- Styles CSS-->
   <link href="css/style.css" rel="stylesheet">
   <!-- Animate CSS-->
   <link href="css/animate.css" rel="stylesheet">
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>

<body class="box-layout">
   <!-- Page Loader -->
   {{-- <div class="page-loader">
      <div class="loader">
         <span class="cssload-loading"></span>
      </div>
   </div> --}}
   <!-- End Page Loader -->
   <div class="inner-conterner">
      <!-- inner-conterner -->
      <header class="site-header">
         <div class="header-inner">
            <!-- navigation panel -->
            <div class="container">
               <div class="row">
                  <div class="header-table col-md-12">
                     <div class="brand">
                        <a href="index.html">
                           <img src="images/logo.png" alt="Enfold">
                        </a>
                     </div>
                     <nav id="nav-wrap" class="main-nav">
                        <div id="mobnav-btn"> </div>
                        <ul class="sf-menu">
                           @foreach ($menu as $item)
                              @if($item->parent == 0 )
                                 <li class="{{ ($item->is_parent == 1) ? 'dropdown' : 'current' }}">
                                       @if($item->is_parent == 1)
                                          <a class="edit_btn btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                             {{$item->menu}}
                                          </a>
                                          <ul class="dropdown-menu">
                                             @foreach($menu->where('parent', $item->id_menu) as $datarekap)
                                                   <li><a class="dropdown-item" href="{{$datarekap->href}}">{{$datarekap->menu}}</a></li>
                                             @endforeach
                                          </ul>
                                       @else
                                          <a class="tagnav" href="{{$item->href}}">{{$item->menu}}</a>
                                       @endif
                                 </li>
                              @endif
                           @endforeach
                           <li class="current">
                              <a class="tagnav" href="index.html">LOGIN</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <!-- End navigation panel -->
            </div>
            <!-- End navigation panel -->
         </div>
      </header>
      <!-- Slider -->
      <div class="slider-wrapper">
         <div class="fr-slider">
            <div class="fs_loader"></div>
            @foreach($data as $d)
            <div class="slide">
               <img data-position="155,554" data-fixed class="slide-bg" src="{{$d->img}}" alt="Slide">
               <img data-position="155,554" data-delay="300" data-in="fade" data-out="fade" src="images/slider/e1.png" alt="Enfold">
               <img data-position="185,430" data-delay="600" data-in="fade" data-out="fade" src="images/slider/e2.png" alt="Enfold">
               <img data-position="236,449" data-delay="1000" data-in="fade" data-out="fade" src="images/slider/e3.png" alt="Enfold">
               <img data-position="322,468" data-delay="1400" data-in="fade" data-out="fade" src="images/slider/e4.png" alt="Enfold">
               <img data-position="384,446" data-delay="1800" data-in="fade" data-out="fade" src="images/slider/e5.png" alt="Enfold">
            </div>
            @endforeach
         </div>
      </div>
      <!-- End Slider -->
      <!-- About Section -->
      <div class="container-about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">WHO WE ARE</h3>
                  <div class="title-un-icon"><i class="fa ion-ios-flame-outline"></i></div>
                  <p class="title-un-des">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, </p>
               </div>
            </div>
            <div class="row">
               @foreach($feature as $featItem)
                     <div class="col-md-4">
                        <!-- Service item -->
                        <div class="service-box-sb wow fadeInUp">
                           <div class="service-img">
                              <img src="{{$featItem->path_img}}" alt="Enfold">
                           </div>
                           <div class="service-info">
                              <h5>{{$featItem->title}}</h5>
                              <div class="desc">
                                 {{$featItem->deskripsi}}
                                 <br><a class="see-more" href="{{$featItem->href}}">
                              See More &rarr;
                              <div class="line"></div>
                           </a>
                              </div>
                           </div>
                        </div>
                        <!-- End Service item -->
                     </div>
               @endforeach
            </div>
         </div>
      </div>
      <!-- End About Section -->
      <!-- Story Section -->
      <div class="story-container">
         <div class="story-wrapper wow fadeInUp">
            <div class="story-info ">
               <div class="big-font-title">
                  <h1>We do something special </h1>
               </div>
               <div class="story-bio">
                  <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,</p>
               </div>
               <a href="https://vimeo.com/134683854" class="video-play-trigger"><i class="icon-play ion-ios-play"></i></a>
            </div>
         </div>
      </div>
      <!-- End Story Section -->
      <!-- Service Section -->
      <div class="container-our-services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">PROGRAM</h3>
                  <div class="title-un-icon"><i class="fa ion-ios-gear-outline"></i></div>
                  <p class="title-un-des">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, </p>
               </div>
            </div>
            <div class="row services-box-margin">
               <ul id="myTab" class="nav services-tabs ">
                  @foreach($service as $servItem)
                  <li>
                     <a href="{{$servItem->href}}" data-toggle="tab">
                        <div class="service-box-sb wow fadeInUp">
                           <div class="service-icon">
                              <i class='{{$servItem->path_icon}}'></i>
                           </div>
                           <div class="service-info">
                              <h5>{{$servItem->title}}</h5>
                           </div>
                        </div>
                     </a>
                  </li>
                  @endforeach
               </ul>
            </div>
            <div class=" align-center">
               <a class="button" href="#">VIEW ALL PROGRAM</a>
            </div>
         </div>
      </div>
      <!-- End Service item -->
      <!-- Testimonials Section -->
      <div class="testimonials-container">
         <div class="container">
            <div class="row">
               <div class="col-md-12 wow fadeInUp">
                  <div class="title-un-icon"><i class="fa ion-quote"></i></div>
                  <h3 class="title-un">WHAT PEOPLE SAY?</h3>
                  <div id="owl-slide" class="testimonials owl-carousel">
                     @foreach($testimoni as $testiItem)
                     <div class="testimonial">
                        <p>{{$testiItem->desc}}</p>
                        <div class="client">
                           <div class="client-info">
                              <div class="client-name">
                                 {{$testiItem->name}}
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Testimonials Section -->
      <!-- Portfolio Section -->
      <div class="container-about-portfolio">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">GALLERY</h3>
                  <div class="title-un-icon"><i class="fa ion-ios-heart-outline"></i></div>
                  <p class="title-un-des">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, </p>
               </div>
            </div>
         </div>
      </div>
      <div class="gallery-portfolio-container">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="classic-portfolio col-3-portfolio portfolio gallery-portfolio shortc-mp">
                     @foreach($galleri as $gallItem)
                        <div class="project-item applications">
                           <div class="project-image">
                              <img src="{{$gallItem->path_img}}" alt="">
                              <div class="overlay">
                                 <div class="content-wrap">
                                    <div class="overlay-content">
                                       <h3><a href="#">{{$gallItem->title}}</a></h3>
                                       <ul class="entry-cat">
                                          <li>{{$gallItem->desc}}</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     @endforeach
                  </div>
               </div>
               <div class=" align-center">
                  <a class="button" href="#">VIEW ALL GALLERY</a>
               </div>
            </div>
         </div>
      </div>
      <!-- End Portfolio Section -->
      <div class="container-newsletter">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">Subscribe Newsletter</h3>
                  <div class="title-un-icon"><i class="fa ion-ios-book-outline"></i></div>
                  <p class="title-un-des">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, </p>
                  <div class="newsletter-container wow fadeInUp">
                     <input placeholder="Email" class="newsletter-field" type="email" required="" name="EMAIL">
                     <button type="submit" class="button green-button">Subscribe </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Blog Section -->
      <div class="container-about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">NEWS FROM Enfold</h3>
                  <div class="title-un-icon"><i class="fa ion-ios-time-outline"></i></div>
                  <p class="title-un-des">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, </p>
                  <ul class="blog-posts-g">
                     <li>
                        <div class="post-img">
                           <a href="#">
                              <img src="images/post-1.jpg" alt="Meet the New UI Design">
                           </a>
                        </div>
                        <div class="post-content">
                           <h5><a href="#"> Enjoying Sunrise Holidays  </a></h5>
                           <div class="post-info"><span> 4 October 2015</span>/<span><a href="#"> By John Deo</a></span></div>
                           <p>
                              Dow wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse iriure molestie...
                           </p>
                        </div>
                     </li>
                     <li>
                        <div class="post-img">
                           <a href="#">
                              <img src="images/post-4.jpg" alt="A LOOK INSIDE THE Workspace">
                           </a>
                        </div>
                        <div class="post-content">
                           <h5> <a href="#"> A LOOK INSIDE THE Workspace </a></h5>
                           <div class="post-info"><span> 4 October 2015</span>/<span><a href="#"> By John Deo</a></span></div>
                           <p>
                              Dow wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse iriure molestie...
                           </p>
                        </div>
                     </li>
                     <li>
                        <div class="post-img">
                           <a href="#">
                              <img src="images/post-2.jpg" alt="Inspiration of UX design">
                           </a>
                        </div>
                        <div class="post-content">
                           <h5><a href="#"> Inspiration of UX design </a></h5>
                           <div class="post-info"><span>4 October 2015</span>/<span><a href="#"> By John Deo</a></span></div>
                           <p>
                              Dow wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse iriure molestie...
                           </p>
                        </div>
                     </li>
                  </ul>
                  <div class="align-center"> <a class="button" href="#">See More Posts</a> </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Blog Section -->
      <!-- Fact box Section -->
      <div class="container-counter-box">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="counter-box wow fadeInUp">
                     <i class="ion-ios-heart-outline"> </i>
                     <div class="counter-number"> 312 </div>
                     <div class="counter-title"> Pizzas Ordered</div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="counter-box wow fadeInUp" data-wow-delay=".2s">
                     <i class="ion-ios-wineglass-outline"> </i>
                     <div class="counter-number"> 810 </div>
                     <div class="counter-title"> Happy Clients </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="counter-box wow fadeInUp" data-wow-delay=".4s">
                     <i class="ion-ios-paw-outline"> </i>
                     <div class="counter-number"> 980 </div>
                     <div class="counter-title"> Projects Completed</div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="counter-box wow fadeInUp" data-wow-delay=".6s">
                     <i class="ion-ios-flame-outline"> </i>
                     <div class="counter-number"> 600 </div>
                     <div class="counter-title">Comments Reserved</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Fact box Section -->
      <!-- Footer area -->
      <div class="footer-area-container">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="footer-widget">
                     <a href="index.html"><img class="footer-logo" src="images/logo.png" alt="Enfold"></a>
                     <p>Dow wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. Duis autem vel eum iriure dolor in hendrerit.</p>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="footer-widget widget_nav_menu">
                     <h4 class="footer-widget-title">Get In Touch</h4>
                     <p>Caecenas wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.</p>
                     <div> <i class="ion-ios-location-outline"></i> Moonshine St. 14/05 Light City
                        <br>
                        <i class="ion-ios-telephone-outline"></i> 00 (123) 456 78 90
                        <br>
                        <i class="ion-paper-airplane"></i> <a href="first.last@email.com"> first.last@email.com</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="footer-widget widget_nav_menu">
                     <h4 class="footer-widget-title">LINKS</h4>
                     <ul>
                        <li class="menu-item"><a href="#"> Brand Creation  </a></li>
                        <li class="menu-item"><a href="#"> Press inquiries</a></li>
                        <li class="menu-item"><a href="#"> Corporate Identity </a></li>
                        <li class="menu-item"><a href="#"> Company Analysis </a></li>
                        <li class="menu-item"><a href="#"> Creative homepage </a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="footer-widget">
                     <h4 class="footer-widget-title">Flickr stream</h4>
                     <ul id="cbox" class="popup-gallery flickr-thumbs"></ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Footer area -->
      <!-- Footer -->
      <div class="footer-holder">
         <div class="container">
            <footer class="site-footer">
               <div class="row">
                  <div class="col-md-6">
                     <p>© Copyright 2016 | <a href="http://templatestock.co" target="_blank">Template Stock</a></p>
                  </div>
                  <div class="col-md-6">
                     <ul class="footer-nav">
                        <li><a href="#">Support</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                     </ul>
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <!-- End Footer -->
   </div>
   <!-- End inner-conterner -->
   <!-- ================================================== -->
   <!-- Placed js files at the end of the document so the pages load faster -->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/superfish.js"></script>
   <script src="js/jquery.easing.js"></script>
   <script src="js/wow.js"></script>
   <script src="js/jquery.isotope.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/jquery.magnific-popup.js"></script>
   <script src="js/jflickrfeed.min.js"></script>
   <script src="js/jquery.fitvids.js"></script>
   <script src="js/jquery.fractionslider.min.js"></script>
   <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
   <script type="text/javascript" src="js/SmoothScroll.js"></script>
   <script src="js/main.js"></script>
</body>

</html>
