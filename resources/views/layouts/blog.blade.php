<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>
    @yield('title')
    </title>


    <!-- Styles -->
    <link href="{{ asset('css/page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
  </head>

  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="{{ route('welcome') }}">
            <img   width="100px" height="40px" class="logo-dark" src="{{ asset('img/gz3-02.png') }}" alt="logo">
            <img width="100px" height="40px" class="logo-light" src="{{ asset('img/gz3-02.png') }}" alt="logo">
          </a>
        </div>

        <section class="navbar-mobile">
          <span class="navbar-divider d-mobile-none"></span>

          <ul class="nav nav-navbar">
            <li class="nav-item">
              <a class="nav-link" href="#">Demos <span class="arrow"></span></a>
              <ul class="nav">

                <li class="nav-item">
                  <a class="nav-link" href="#">SaaS <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../demo/saas-1.html">SaaS 1</a>
                    <a class="nav-link" href="../demo/saas-2.html">SaaS 2</a>
                    <a class="nav-link" href="../demo/saas-3.html">SaaS 3</a>
                    <a class="nav-link" href="../demo/saas-4.html">SaaS 4</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Software <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../demo/software-1.html">Software 1</a>
                    <a class="nav-link" href="../demo/software-2.html">Software 2</a>
                    <a class="nav-link" href="../demo/software-3.html">Software 3</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Marketing <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../demo/marketing-1.html">Marketing 1</a>
                    <a class="nav-link" href="../demo/marketing-2.html">Marketing 2</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Listing <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../demo/listing-1.html">Listing 1</a>
                    <a class="nav-link" href="../demo/listing-2.html">Listing 2</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="../demo/finance-1.html">Finance</a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Pages <span class="arrow"></span></a>
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="../page/how-it-works.html">How it works</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="../page/pricing.html">Pricing</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Portfolio <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/portfolio.html">Potfolio listing</a>
                    <a class="nav-link" href="../page/portfolio-single.html">Potfolio single</a>
                  </nav>
                </li>

                

                

                

                

                <li class="nav-divider"></li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Extra <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/demo.html">Request demo</a>
                    <a class="nav-link" href="../page/coming-soon.html">Coming soon</a>
                    <a class="nav-link" href="../page/terms.html">Terms</a>
                    <a class="nav-link" href="../page/error-404.html">Error 404</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">User <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="../page/user-login.html">Login</a>
                    <a class="nav-link" href="../page/user-register.html">Register</a>
                    <a class="nav-link" href="../page/user-recover.html">Recover</a>
                  </nav>
                </li>

                
              </ul>
            </li>

            

            <li class="nav-item">
              <a class="nav-link" href="#">Shop <span class="arrow"></span></a>
              <nav class="nav">
                <a class="nav-link" href="../shop/list.html">List</a>
                <a class="nav-link" href="../shop/item.html">Item</a>
                <a class="nav-link" href="../shop/cart.html">Cart</a>
                <a class="nav-link" href="../shop/checkout.html">Checkout</a>
              </nav>
            </li>

            <li class="nav-item nav-mega">
              <a class="nav-link" href="#">Blocks <span class="arrow"></span></a>
              <nav class="nav px-lg-2 py-lg-4">
                <div class="container-fluid">
                  <div class="row">

                    <div class="col-lg">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../block/blog.html">Blog</a>
                        <a class="nav-link" href="../block/career.html">Career</a>
                        <a class="nav-link" href="../block/contact.html">Contact</a>
                        <a class="nav-link" href="../block/content.html">Content</a>
                        <a class="nav-link" href="../block/counter.html">Counter</a>
                        <a class="nav-link" href="../block/cover.html">Cover</a>
                        <a class="nav-link" href="../block/cta.html">Call to action</a>
                        <a class="nav-link" href="../block/download.html">Download</a>
                        <a class="nav-link" href="../block/explore.html">Explore</a>
                        <a class="nav-link" href="../block/faq.html">FAQ</a>
                      </nav>
                    </div>
                  </div>
                </div>
              </nav>
            </li>

            <li class="nav-item nav-mega">
              <a class="nav-link" href="#">UI Kit <span class="arrow"></span></a>
              <nav class="nav px-lg-2 py-lg-4">
                <div class="container-fluid">
                  <div class="row">

                    

                    <div class="col-lg-3">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../uikit/dropdown.html">Dropdown</a>
                        <a class="nav-link" href="../uikit/form.html">Form</a>
                        <a class="nav-link" href="../uikit/gallery.html">Gallery</a>
                        <a class="nav-link" href="../uikit/granim.html">Granim</a>
                        <a class="nav-link" href="../uikit/icon.html">Icon</a>
                        <a class="nav-link" href="../uikit/image.html">Image</a>
                        <a class="nav-link" href="../uikit/lightbox.html">Lightbox</a>
                        <a class="nav-link" href="../uikit/map.html">Map</a>
                        <a class="nav-link" href="../uikit/misc.html">Miscellaneous</a>
                        <a class="nav-link" href="../uikit/modal.html">Modal</a>
                      </nav>
                    </div>
                  </div>
                </div>
              </nav>
            </li>

          </ul>
        </section>

        <a class="btn btn-xs btn-round btn-success" href="{{ route('login') }}">Login</a>

      </div>
    </nav><!-- /.navbar -->


@yield('header')


@yield('content')
      
{{-- 
                <hr>

                <h6 class="sidebar-title">Top posts</h6>
                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                  <img class="rounded w-65px mr-4" src="../assets/img/thumb/4.jpg">
                  <p class="media-body small-2 lh-4 mb-0">Thank to Maryam for joining our team</p>
                </a>

                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                  <img class="rounded w-65px mr-4" src="../assets/img/thumb/3.jpg">
                  <p class="media-body small-2 lh-4 mb-0">Best practices for minimalist design</p>
                </a>

                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                  <img class="rounded w-65px mr-4" src="../assets/img/thumb/5.jpg">
                  <p class="media-body small-2 lh-4 mb-0">New published books for product designers</p>
                </a>

                <a class="media text-default align-items-center mb-5" href="blog-single.html">
                  <img class="rounded w-65px mr-4" src="../assets/img/thumb/2.jpg">
                  <p class="media-body small-2 lh-4 mb-0">Top 5 brilliant content marketing strategies</p>
                </a> --}}

      
                {{-- <h6 class="sidebar-title">About</h6>
                <p class="small-3">TheSaaS is a responsive, professional, and multipurpose SaaS, Software, Startup and WebApp landing template powered by Bootstrap 4. TheSaaS is a powerful and super flexible tool for any kind of landing pages.</p> --}}


              </div>
            </div>

          </div>
        </div>
      </div>
    </main>


    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row gap-y align-items-center">

          <div class="col-6 col-lg-3">
            <a href="../index.html"><img src="{{ asset('img/gz3-02.png') }}" alt="logo"></a>
          </div>

          <div class="col-6 col-lg-3 text-right order-lg-last">
            <div class="social">
              <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-facebook"></i></a>
              <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fa fa-twitter"></i></a>
              <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fa fa-instagram"></i></a>
              <a class="social-dribbble" href="https://dribbble.com/thethemeio"><i class="fa fa-dribbble"></i></a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="nav nav-bold nav-uppercase nav-trim justify-content-lg-center">
              <a class="nav-link" href="../uikit/index.html">Elements</a>
              <a class="nav-link" href="../block/index.html">Blocks</a>
              <a class="nav-link" href="../page/about-1.html">About</a>
              <a class="nav-link" href="../blog/grid.html">Blog</a>
              <a class="nav-link" href="../page/contact-1.html">Contact</a>
            </div>
          </div>

        </div>
      </div>
    </footer><!-- /.footer -->


    <!-- Scripts -->
    <script src="{{ asset('js/page.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

  </body>
</html>
