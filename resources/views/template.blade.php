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
               <div class="col-md-4">
                  <!-- Service item -->
                  <div class="service-box-sb wow fadeInUp">
                     <div class="service-img">
                        <img src="images/sas.jpg" alt="Enfold">
                     </div>
                     <div class="service-info">
                        <h5>UNIQUE FEATURES</h5>
                        <div class="desc">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis sapien sit amet arcu ornare, non commodo ligula consectetur adipiscing elit.
                           <a class="see-more" href="#">
                        See More &rarr;
                        <div class="line"></div>
                      </a>
                        </div>
                     </div>
                  </div>
                  <!-- End Service item -->
               </div>
               <div class="col-md-4">
                  <!-- Service item -->
                  <div class="service-box-sb wow fadeInUp" data-wow-delay=".2s">
                     <div class="service-img">
                        <img src="images/sasa.jpg" alt="Enfold">
                     </div>
                     <div class="service-info">
                        <h5>RESPONSIVE LAYOUT</h5>
                        <div class="desc">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis sapien sit amet arcu ornare, non commodo ligula consectetur adipiscing elit.
                           <a class="see-more" href="#">
                        See More &rarr;
                        <div class="line"></div>
                      </a>
                        </div>
                     </div>
                  </div>
                  <!-- End Service item -->
               </div>
               <div class="col-md-4">
                  <!-- Service item -->
                  <div class="service-box-sb wow fadeInUp" data-wow-delay=".4s">
                     <div class="service-img">
                        <img src="images/sasaa.jpg" alt="Enfold">
                     </div>
                     <div class="service-info">
                        <h5>PAGE BUILDER</h5>
                        <div class="desc">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis sapien sit amet arcu ornare, non commodo ligula consectetur adipiscing elit.
                           <a class="see-more" href="#">See More &rarr;<div class="line"></div></a>
                        </div>
                     </div>
                  </div>
                  <!-- End Service item -->
               </div>
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
                  <h3 class="title-un">SERVICES</h3>
                  <div class="title-un-icon"><i class="fa ion-ios-gear-outline"></i></div>
                  <p class="title-un-des">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, </p>
               </div>
            </div>
            <div class="row services-box-margin">
               <ul id="myTab" class="nav services-tabs ">
                  <li class="active">
                     <a href="#FirstTab" data-toggle="tab">
                        <div class="service-box-sb wow fadeInUp">
                           <div class="service-icon">
                              <i class="fa ion-ios-paperplane-outline"></i>
                           </div>
                           <div class="service-info">
                              <h5>Product Design</h5>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="#SecoundTab" data-toggle="tab">
                        <div class="service-box-sb wow fadeInUp" data-wow-delay=".4s">
                           <div class="service-icon">
                              <i class="fa ion-ios-shuffle"></i>
                           </div>
                           <div class="service-info">
                              <h5>UX Design</h5>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="#ThirdTab" data-toggle="tab">
                        <div class="service-box-sb wow fadeInUp" data-wow-delay=".4s">
                           <div class="service-icon">
                              <i class="fa ion-ios-game-controller-b-outline"></i>
                           </div>
                           <div class="service-info">
                              <h5>Development</h5>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="#ThirdTab" data-toggle="tab">
                        <div class="service-box-sb wow fadeInUp" data-wow-delay=".4s">
                           <div class="service-icon">
                              <i class="fa  ion-ios-monitor-outline"></i>
                           </div>
                           <div class="service-info">
                              <h5>Web Design</h5>
                           </div>
                        </div>
                     </a>
                  </li>
               </ul>
               <div id="myTabContent" class=" tab-content service-tab-content">
                  <div class="tab-pane fade  active in" id="FirstTab">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="service-tagline">
                              <p>
                                 If you decide that you’re going to do only the things you know are going to work, you’re going to leave a lot of opportunity on the table.
                                 <br> ― Jeff Bezos
                              </p>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <p> Caecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum volutpat nibh, accumsan purus. Lorem ipsum dolor sit semper amet, consectetur adipiscing elit. In maximus ligula metus pellentesque mattis. Caecenas volutpat.
                           </p>
                           <p> Daecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum volutpat nibh, accumsan purus. Lorem ipsum dolor sit semper amet, consectetur adipiscing elit. In maximus ligula metus pellentesque mattis.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="SecoundTab">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="service-tagline">
                              <p>
                                 If you decide that you’re going to do only the things you know are going to work, you’re going to leave a lot of opportunity on the table.
                                 <br> ― Jeff Bezos
                              </p>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <p> Caecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum volutpat nibh, accumsan purus. Lorem ipsum dolor sit semper amet, consectetur adipiscing elit. In maximus ligula metus pellentesque mattis. Caecenas volutpat.
                           </p>
                           <p> Daecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum volutpat nibh, accumsan purus. Lorem ipsum dolor sit semper amet, consectetur adipiscing elit. In maximus ligula metus pellentesque mattis.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="ThirdTab">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="service-tagline">
                              <p>
                                 If you decide that you’re going to do only the things you know are going to work, you’re going to leave a lot of opportunity on the table.
                                 <br> ― Jeff Bezos
                              </p>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <p> Caecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum volutpat nibh, accumsan purus. Lorem ipsum dolor sit semper amet, consectetur adipiscing elit. In maximus ligula metus pellentesque mattis. Caecenas volutpat.
                           </p>
                           <p> Daecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum volutpat nibh, accumsan purus. Lorem ipsum dolor sit semper amet, consectetur adipiscing elit. In maximus ligula metus pellentesque mattis.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class=" align-center">
               <a class="button" href="#">VIEW ALL SERVICES</a>
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
                     <div class="testimonial">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut ullamcorper lacus, vel mattis nibh. Aliquam a enim rutrum, ultrices purus at, porta leo at pellentesque. </p>
                        <div class="client">
                           <div class="client-info">
                              <div class="client-name">
                                 John Doe, Lacus INC
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut ullamcorper lacus, vel mattis nibh. Aliquam a enim rutrum, ultrices purus at, porta leo at pellentesque. </p>
                        <div class="client">
                           <div class="client-info">
                              <div class="client-name">
                                 John Doe, Lacus INC
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut ullamcorper lacus, vel mattis nibh. Aliquam a enim rutrum, ultrices purus at, porta leo at pellentesque. </p>
                        <div class="client">
                           <div class="client-info">
                              <div class="client-name">
                                 John Doe, Lacus INC
                              </div>
                           </div>
                        </div>
                     </div>
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
                  <h3 class="title-un">OUR LATEST WORKS</h3>
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
                  <nav class="port-filter m-port-filter">
                     <ul>
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".photography">Photography</a></li>
                        <li><a href="#" data-filter=".webdesign">Web design</a></li>
                        <li class=""><a href="#" data-filter=".branding ">Branding </a></li>
                        <li><a href="#" data-filter=".illustration ">Illustration </a></li>
                        <li><a href="#" data-filter=".applications">Applications </a></li>
                     </ul>
                  </nav>
                  <div class="classic-portfolio col-3-portfolio portfolio gallery-portfolio shortc-mp">
                     <div class="project-item applications illustration">
                        <div class="project-image">
                           <img src="images/gallery/i4.jpg" alt="">
                           <div class="overlay">
                              <div class="content-wrap">
                                 <div class="overlay-content">
                                    <h3><a href="#">WIDE GALLERY</a></h3>
                                    <ul class="entry-cat">
                                       <li><a href="#">Motion  </a></li>
                                       <li><a href="#">Photography  </a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="project-item illustration  webdesign">
                        <div class="project-image">
                           <img src="images/gallery/i5.jpg" alt="">
                           <div class="overlay">
                              <div class="content-wrap">
                                 <div class="overlay-content">
                                    <h3><a href="#">WIDE GALLERY</a></h3>
                                    <ul class="entry-cat">
                                       <li><a href="#">Motion  </a></li>
                                       <li><a href="#">Photography  </a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="project-item webdesign branding applications photography">
                        <div class="project-image">
                           <img src="images/gallery/i6.jpg" alt="">
                           <div class="overlay">
                              <div class="content-wrap">
                                 <div class="overlay-content">
                                    <h3><a href="#">WIDE GALLERY</a></h3>
                                    <ul class="entry-cat">
                                       <li><a href="#">Motion  </a></li>
                                       <li><a href="#">Photography  </a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="project-item webdesign illustration  ">
                        <div class="project-image">
                           <img src="images/gallery/i7.jpg" alt="">
                           <div class="overlay">
                              <div class="content-wrap">
                                 <div class="overlay-content">
                                    <h3><a href="#">WIDE GALLERY</a></h3>
                                    <ul class="entry-cat">
                                       <li><a href="#">Motion  </a></li>
                                       <li><a href="#">Photography  </a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="project-item webdesign">
                        <div class="project-image">
                           <img src="images/gallery/i1.jpg" alt="">
                           <div class="overlay">
                              <div class="content-wrap">
                                 <div class="overlay-content">
                                    <h3><a href="#">WIDE GALLERY</a></h3>
                                    <ul class="entry-cat">
                                       <li><a href="#">Motion  </a></li>
                                       <li><a href="#">Photography  </a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="project-item applications photography">
                        <div class="project-image">
                           <img src="images/gallery/i2.jpg" alt="">
                           <div class="overlay">
                              <div class="content-wrap">
                                 <div class="overlay-content">
                                    <h3><a href="#">WIDE GALLERY</a></h3>
                                    <ul class="entry-cat">
                                       <li><a href="#">Motion  </a></li>
                                       <li><a href="#">Photography  </a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
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
      @yield('footer')
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