<!DOCTYPE HTML>
<html lang="en">

<head>
  <!-- Identity -->
  <title>Mugenzi portifolio</title>
  <?php require_once 'general-links/css.php'; ?>
</head>

<body class="shock-body">

  <!-- Preloader -->
  <div id="preloader" class="preloader white" data-delay="0" data-limit="3000">
    <img src="assets/images/logo-gradient.svg" class="emblem" alt="Emblem" />
  </div>

  <!-- Popup Bar -->
  <div id="popup-bar" class="popup-bar bg-gradient scheme-2 shadow d-none">
    <p class="description white-85">Flash Sale! The best time to buy more licenses.</p>
    <a href="https://codings.dev/?buy=shock-html" target="_blank" class="button simple">
      <span class="button-text white white-hover"><mark class="animated-underline secondary active">Save Now</mark></span>
      <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
    </a>
    <button id="popup-bar-dismiss" class="button close-button">
      <i class="fa-solid fa-xmark button-icon white secondary-hover"></i>
    </button>
  </div>

  <!-- Popup Box -->
  <div id="popup-box" class="popup-box d-none">
    <div class="card parent">
      <div class="card-body rounded-3 small-shadow text-center bg-color white">
        <h3 class="title max-w-85 mx-auto text-style-11 black">
          <span class="bg-color white">Do you like cookies? 🍪</span>
          <span class="zzz over-text scheme-1 gray"></span>
        </h3>
        <p class="description">We use cookie technology to provide you with a better browsing experience. You accept our terms if you continue to use this site.</p>
        <!-- Button -->
        <div class="button-wrapper align-h-center">
          <a href="#your-link" target="_blank" class="button simple">
            <span class="button-text black black-hover">Read more</span>
          </a>
          <button id="popup-box-dismiss" class="button simple">
            <span class="button-text black black-hover"><mark class="animated-underline accent">Accept terms</mark></span>
            <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <header id="header" class="shock-header">
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-centered navbar-expand-lg auto-hide scheme-3 tertiary">
      <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="index.html">
          <!-- <div class="site-title">Site Title</div> -->
          <img src="assets/images/logo-white_1.gif" data-logo-alt="assets/images/logo.svg" data-logo-mobile="assets/images/logo-white_1.gif" alt="Shock Theme" class="logo" />
        </a>
        <!-- Responsive menu toggle -->
        <button class="navbar-toggler" data-bs-target="#navbar-items" data-bs-toggle="collapse" aria-expanded="false">
          <span class="navbar-toggler-icon">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </span>
        </button>
        <div id="navbar-items" class="collapse navbar-collapse">
          <!-- Responsive search form -->
          <div class="navbar-collapse-form">
            <div class="form-area d-only-mobile d-none scheme-1">
              <form class="form-fields needs-validation" novalidate="novalidate">
                <div class="form-row row has-icon">
                  <div class="form-col form-floating">
                    <button class="button overlay-button"><img class="overlay-image-icon" src="assets/svg/send-outline.svg" alt="Icon name" data-shock-icon="32" /></button>
                    <input id="InputSearchMobile" class="form-control focus-trigger-field" name="InputSearchMobile" placeholder="Type keywords..." required="required">
                    <label for="InputSearchMobile" class="form-label">Type keywords...</label>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="navbar-left">
            <!-- Link -->
            <ul class="navbar-nav">
              <li class="nav-item dropdown has-megamenu hover">
                <a class="nav-link dropdown-toggle has-icon flutter-underline" href="#" data-bs-toggle="dropdown">
                  <span class="text">What we do?</span><img class="image-icon dropdown-icon" src="assets/svg/chevron-down-outline.svg" alt="Icon name" data-shock-icon="32" />
                  <svg class="flutter-underline-graphic" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                  </svg>
                </a>
                <div class="dropdown-menu megamenu animate fade-down" role="menu">
                  <div class="container">
                    <div class="section-inner-expanded">
                      <div class="horizontal-tab scheme-1 primary">
                        <!-- Tab navigation -->
                        <ul id="elements-tab" class="nav nav-tabs js-tabs-event" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button id="elements-1-tab" class="title nav-link active" aria-selected="true" aria-controls="elements-1" data-bs-target="#elements-1" data-bs-toggle="tab" role="tab">
                              Graphic Design & Branding <!-- (Social media posts, Company brand identity (logos, typography, and colour palettes), Books, magazines, newspapers, and other publications,  ) -->
                            </button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button id="elements-2-tab" class="title nav-link" aria-selected="false" aria-controls="elements-2" data-bs-target="#elements-2" data-bs-toggle="tab" role="tab">
                              Web & UI/UX Design </button>
                          </li>
                          <!-- <li class="nav-item" role="presentation">
                            <button id="elements-3-tab" class="title nav-link" aria-selected="false" aria-controls="elements-3" data-bs-target="#elements-3" data-bs-toggle="tab" role="tab">
                              Web Design
                            </button>
                          </li>  -->
                        </ul>
                        <!-- Tab content -->
                        <div class="tab-content">
                          <div id="elements-1" class="tab-pane fade show active" role="tabpanel">
                            <div class="row g-3">
                              <div class="col-12 col-md-6 col-lg-4">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-button.html" class="nav-link parent">
                                        <span class="text">Social media posters</span>
                                        <!-- <span class="badge ms-05 primary-15 primary-15-hover">
                                          <span class="badge-text primary primary-hover">Hot</span>
                                        </span> -->
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-collapse.html" class="nav-link parent">
                                        <span class="text">Company brand identity</span><br>
                                        <em class="tag hover-up-down">(logos, typography, and color palettes)</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-tab.html" class="nav-link parent">
                                        <span class="text">Company profile</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-4">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-modal.html" class="nav-link parent">
                                        <span class="text">Signage, billboards and trade show displays</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-tooltip.html" class="nav-link parent">
                                        <span class="text">Menus</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-map-styles.html" class="nav-link parent">
                                        <span class="text">Brochures</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-4">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-card-shadow.html" class="nav-link parent">
                                        <span class="text">Presentations & Pitch deck</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-card-outline.html" class="nav-link parent">
                                        <span class="text">Infographics</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-card-double-edge.html" class="nav-link parent">
                                        <span class="text">Vehicle wraps</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="elements-2" class="tab-pane fade" role="tabpanel">
                            <div class="row g-3">
                              <div class="col-12 col-md-6 col-lg-3">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-typography.html" class="nav-link parent">
                                        <span class="text">static web design</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-headings.html" class="nav-link parent">
                                        <span class="text">dynamic web design</span>
                                        <span class="badge ms-05 primary-15 primary-15-hover">
                                          <span class="badge-text primary primary-hover">Hot</span>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-popup-bar.html" class="nav-link parent">
                                        <span class="text">eCommerce web design</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-popup-box.html" class="nav-link parent">
                                        <span class="text">Popup Box</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-3">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-typed-text.html" class="nav-link parent">
                                        <span class="text">Typed Text</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-scrolling-text.html" class="nav-link parent">
                                        <span class="text">Scrolling Text</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-circular-text.html" class="nav-link parent">
                                        <span class="text">Circular Text</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-animated-underline.html" class="nav-link parent">
                                        <span class="text">Animated Underline</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-3">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-preloader.html" class="nav-link parent">
                                        <span class="text">Preloader</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-counter-basic.html" class="nav-link parent">
                                        <span class="text">Counter</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-counter-progress-bar.html" class="nav-link parent">
                                        <span class="text">Line Progressbar</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-counter-progress-bar-radial.html" class="nav-link parent">
                                        <span class="text">Circle Progressbar</span>
                                        <span class="badge ms-05 secondary-15 secondary-15-hover">
                                          <span class="badge-text secondary secondary-hover">Hot</span>
                                        </span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-3">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="element-card-image-magnetic.html" class="nav-link parent">
                                        <span class="text">Magnetic Image</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-image-mirror.html" class="nav-link parent">
                                        <span class="text">Image Mirror</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-vertical-lines.html" class="nav-link parent">
                                        <span class="text">Vertical Lines</span>
                                        <span class="badge ms-05 tertiary-15 tertiary-15-hover">
                                          <span class="badge-text tertiary tertiary-hover">Hot</span>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="element-zzz-divider.html" class="nav-link parent">
                                        <span class="text">Zigzag Divider</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="elements-3" class="tab-pane fade" role="tabpanel">
                            <div class="row g-3">
                              <div class="col-12 col-md-6 col-lg-3">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="header-basic-1.html" class="nav-link parent">
                                        <span class="text">Navbar Basic</span><em class="tag hover-up-down">default</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="header-basic-2.html" class="nav-link parent">
                                        <span class="text">Navbar Basic</span><em class="tag hover-up-down">dark</em>
                                        <span class="badge ms-05 primary-15 primary-15-hover">
                                          <span class="badge-text primary primary-hover">Hot</span>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="footer-basic-1.html" class="nav-link parent">
                                        <span class="text">Footer Basic</span><em class="tag hover-up-down">default</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="footer-basic-2.html" class="nav-link parent">
                                        <span class="text">Footer Basic</span><em class="tag hover-up-down">light</em>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-3">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="header-extended-1.html" class="nav-link parent">
                                        <span class="text">Navbar Extended</span><em class="tag hover-up-down">default</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="header-extended-2.html" class="nav-link parent">
                                        <span class="text">Navbar Extended</span><em class="tag hover-up-down">dark</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="footer-extended-1.html" class="nav-link parent">
                                        <span class="text">Footer Extended</span><em class="tag hover-up-down">default</em>
                                        <span class="badge ms-05 secondary-15 secondary-15-hover">
                                          <span class="badge-text secondary secondary-hover">Hot</span>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="footer-extended-2.html" class="nav-link parent">
                                        <span class="text">Footer Extended</span><em class="tag hover-up-down">light</em>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-3">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="header-centered-1.html" class="nav-link parent">
                                        <span class="text">Navbar Centered</span><em class="tag hover-up-down">default</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="header-centered-2.html" class="nav-link parent">
                                        <span class="text">Navbar Centered</span><em class="tag hover-up-down">dark</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="footer-centered-1.html" class="nav-link parent">
                                        <span class="text">Footer Centered</span><em class="tag hover-up-down">default</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="footer-centered-1.html" class="nav-link parent">
                                        <span class="text">Footer Centered</span><em class="tag hover-up-down">light</em>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-3">
                                <div class="megamenu-item">
                                  <ul class="nav-list list-unstyled">
                                    <li class="nav-item">
                                      <a href="header-grid-1.html" class="nav-link parent">
                                        <span class="text">Grid Menu</span><em class="tag hover-up-down">scheme 1</em>
                                        <span class="badge ms-05 tertiary-15 tertiary-15-hover">
                                          <span class="badge-text tertiary tertiary-hover">Hot</span>
                                        </span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="header-grid-2.html" class="nav-link parent">
                                        <span class="text">Grid Menu</span><em class="tag hover-up-down">scheme 2</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="header-grid-3.html" class="nav-link parent">
                                        <span class="text">Side Menu</span><em class="tag hover-up-down">scheme dark</em>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="header-grid-4.html" class="nav-link parent">
                                        <span class="text">Side Menu</span><em class="tag hover-up-down">scheme light</em>
                                      </a>
                                    </li>
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
              </li>
              <li class="nav-item dropdown has-megamenu hover">
                <a class="nav-link dropdown-toggle has-icon flutter-underline" href="#" data-bs-toggle="dropdown">
                  <span class="text">Projects</span><img class="image-icon dropdown-icon" src="assets/svg/chevron-down-outline.svg" alt="Icon name" data-shock-icon="32" />
                  <svg class="flutter-underline-graphic" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                  </svg>
                </a>
                <div class="dropdown-menu megamenu animate fade-down" role="menu">
                  <div class="container">
                    <div class="section-inner-expanded">
                      <div class="row g-3">
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="megamenu-item">
                            <h6 class="title">Aweicon</h6>
                            <ul class="nav-list list-unstyled">
                              <li class="nav-item">
                                <a href="page-about-1.html" class="nav-link parent">
                                  <span class="text">Rwanda</span>
                                  <em class="tag hover-up-down">Logos</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="page-about-2.html" class="nav-link parent">
                                  <span class="text">International</span>
                                  <em class="tag hover-up-down">Company logos</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="page-about-3.html" class="nav-link parent">
                                  <span class="text">Aweicon</span>
                                  <em class="tag hover-up-down">logos</em>
                                </a>
                              </li>
                            </ul>
                            <!-- <h6 class="title mt-3">FAQ / Questions</h6>
                            <ul class="nav-list list-unstyled">
                              <li class="nav-item">
                                <a href="page-faq-1.html" class="nav-link">
                                  <span class="text">Modern Business</span>
                                  <em class="tag hover-up-down">search form</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="page-faq-2.html" class="nav-link">
                                  <span class="text">Dark Creative</span>
                                  <em class="tag hover-up-down">stunning design</em>
                                </a>
                              </li>
                            </ul> -->
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="megamenu-item">
                            <h6 class="title">E-ticketing</h6>
                            <ul class="nav-list list-unstyled">
                              <li class="nav-item">
                                <a href="page-services-1.html" class="nav-link">
                                  <span class="text">Buy ticket</span>
                                  <em class="tag hover-up-down">super detailed</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="page-services-2.html" class="nav-link">
                                  <span class="text">Sell tickets</span>
                                  <em class="tag hover-up-down">gradient text</em>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                          <div class="megamenu-item">
                            <h6 class="title">Giftshop</h6>
                            <ul class="nav-list list-unstyled">
                              <li class="nav-item">
                                <a href="page-single-service-1.html" class="nav-link">
                                  <span class="text">Modern Business</span>
                                  <em class="tag hover-up-down">testimonials</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="page-single-service-2.html" class="nav-link">
                                  <span class="text">Dark Creative</span>
                                  <em class="tag hover-up-down">portfolio filter</em>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="page-single-service-3.html" class="nav-link">
                                  <span class="text">Design & Art</span>
                                  <em class="tag hover-up-down">brief description</em>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="navbar-right">
            <!-- Link -->
            <ul class="navbar-nav">

              <li class="nav-item">
                <a href="https://codings.dev/?buy=shock-html" target="_blank" class="nav-link flutter-underline">
                  <span class="text">Our work</span>
                  <svg class="flutter-underline-graphic" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                  </svg>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="button small-button outline  primary-25 accent-hover button-collision rounded">
                  <span class="button-text primary white-hover black-hover">Let's talk</span>
                  <i class="fa-solid fa-arrow-right button-icon primary black-hover"></i>
                </a>
                <!-- <a href="https://codings.dev/?buy=shock-html" target="_blank" class="button small-button outline rounded primary-25 primary-hover">
                  <span class="hover-rotate">
                    <span class="button-text primary white-hover">Request quote</span>
                  </span>
                </a> -->
              </li>
            </ul>
            <!-- Icon -->
            <ul class="navbar-nav navbar-icons d-only-desktop">
              <!-- Search icon -->
              <li class="nav-item dropdown has-megamenu hover d-only-desktop">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                  <i class="fa-solid fa-magnifying-glass icon"></i>
                </a>
                <div class="dropdown-menu megamenu animate fade-down focus-trigger" role="menu">
                  <div class="container">
                    <div class="section-inner-expanded">
                      <div class="row g-3">
                        <div class="col-12 col-md-6">
                          <div class="megamenu-item">
                            <h6 class="title">Popular searches</h6>
                            <!-- Tag Cloud -->
                            <div class="tag-cloud">
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 tertiary-hover">
                                  <span class="badge-text gray white-hover">Environment</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline active gray-50 tertiary-hover floating-item-smooth">
                                  <span class="badge-text gray white-hover">Events</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 tertiary-hover">
                                  <span class="badge-text gray white-hover">Technology</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 tertiary-hover">
                                  <span class="badge-text gray white-hover">Web</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 tertiary-hover">
                                  <span class="badge-text gray white-hover">Mobile</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 tertiary-hover">
                                  <span class="badge-text gray white-hover">Design</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 tertiary-hover">
                                  <span class="badge-text gray white-hover">Branding</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 tertiary-hover">
                                  <span class="badge-text gray white-hover">Development</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 tertiary-hover">
                                  <span class="badge-text gray white-hover">Artificial</span>
                                </span>
                              </a>
                              <a href="#your-link" class="link">
                                <span class="badge outline gray-50 tertiary-hover">
                                  <span class="badge-text gray white-hover">Intelligence</span>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="megamenu-item">
                            <h6 class="title"><mark class="animated-underline accent">What are you looking for?</mark></h6>
                            <!-- Form -->
                            <div class="form-area scheme-1">
                              <form class="form-fields needs-validation" novalidate="novalidate">
                                <div class="form-row row has-icon">
                                  <div class="form-col form-floating">
                                    <button class="button overlay-button"><img class="overlay-image-icon" src="assets/svg/send-outline.svg" alt="Icon name" data-shock-icon="32" /></button>
                                    <input id="InputSearchNavbar" class="form-control focus-trigger-field" name="InputSearchNavbar" placeholder="Type keywords..." required="required">
                                    <label for="InputSearchNavbar" class="form-label">Type keywords...</label>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>






  <!-- Main -->
  <main id="main" class="shock-main bg-color gray-10">

    <!-- Banner -->
    <section id="home" class="shock-section has-overlay">
      <div class="banner">
        <div class="content-wrapper text-center">
          <div class="container">
            <!-- Intro -->
            <div class="extended-intro max-w-85 mb-35">
              <div class="wrapper">
                <div class="left-column">

                  <h2 class="title">
                    <!-- <span class="text-1 text-style-1 text-outline text-gradient scheme-2" data-text-color="#010206">Hi!</span> -->
                    <span class="text-3 text-style-2 text-italic text-gradient scheme-2">M Design</span>
                  </h2>

                  <span class="text-3 text-style-4 fw-900 text-outline text-italic white">We are a creative agency</span>
                  <div class=" text-style-12 white-90">
                    <p>We specialize in graphic design, web design, UI/UX design, video animation, branding and content creation. <!-- We breathe life into your brand's story. Let's embark on a journey together, where creativity knows no limits and your vision becomes our masterpiece. --></p>
                  </div>
                </div>
                <!-- <div class="left-column">
                  <a href="#" class="button shadow rounded white primary-hover magnetic-effect">
                    <span class="button-text black white-hover">Know More</span>
                    <i class="fa-solid fa-arrow-right button-icon black white-hover"></i>
                  </a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <!-- Video -->
        <div class="image-wrapper">
          <video class="video vh-85 fit-cover" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="assets/videos/MDESIGN2.mp4" type="video/mp4">
          </video>
        </div>
        <!-- Overlay -->
        <div class="overlay black-65"></div>
      </div>
    </section>

    <!-- Carousel -->
    <!-- <section class="shock-section climb" data-lax="inertia-top">
      <div class="container">
        <div class="gallery stretched has-gap swiper slider has-pagination scheme-1 primary" data-columns="3,3,2,1">
          <div class="swiper-wrapper">
            <div class="swiper-slide" data-aos="fade-up" data-aos-delay="800" data-aos-anchor="home">
              <a href="https://vimeo.com/222990241" class="item lightbox-link">
                <i class="fa-solid fa-circle-play gallery-icon floating-item white"></i>
                <div class="image-wrapper rounded-3 hover-zoom">
                  <img src="assets/images/social-media-posters/social-media-posters-mdesign (43).jpg" class="image" alt="This is an example description for this item." />
                  <div class="overlay black-50"></div>
                </div>
              </a>
            </div>
            <div class="swiper-slide" data-aos="fade-up" data-aos-delay="1000" data-aos-anchor="home">
              <a href="https://vimeo.com/222990241" class="item lightbox-link">
                <i class="fa-solid fa-circle-play gallery-icon floating-item white"></i>
                <div class="image-wrapper rounded-3 hover-zoom">
                  <img src="assets/images/social-media-posters/social-media-posters-mdesign (43).jpg" class="image" alt="This is an example description for this item." />
                  <div class="overlay black-50"></div>
                </div>
              </a>
            </div>
            <div class="swiper-slide" data-aos="fade-up" data-aos-delay="1200" data-aos-anchor="home">
              <a href="https://vimeo.com/222990241" class="item lightbox-link">
                <i class="fa-solid fa-circle-play gallery-icon floating-item white"></i>
                <div class="image-wrapper rounded-3 hover-zoom">
                  <img src="assets/images/social-media-posters/social-media-posters-mdesign (43).jpg" class="image" alt="This is an example description for this item." />
                  <div class="overlay black-50"></div>
                </div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="https://vimeo.com/222990241" class="item lightbox-link">
                <i class="fa-solid fa-circle-play gallery-icon floating-item white"></i>
                <div class="image-wrapper rounded-3 hover-zoom">
                  <img src="assets/images/social-media-posters/social-media-posters-mdesign (43).jpg" class="image" alt="This is an example description for this item." />
                  <div class="overlay black-50"></div>
                </div>
              </a>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section> -->

  </main>




















  <!-- Banner -->
  <section class="shock-section bg-image bg-fixed position-x-left" data-bg-image="assets/images/jpg/a-2.jpg">
    <div class="container">
      <div class="holder vh-100 align-h-right align-v-center">
        <!-- Intro -->
        <div class="side-intro max-w-50">
          <h2 class="title">
            <!-- <span class="text-1 text-style-1 text-outline text-gradient scheme-2" data-text-color="#010206">Hi!</span> -->
            <span class="text-2 text-style-2 text-italic text-gradient scheme-2">I'm Mugenzi.</span>
          </h2>
          <div class="description text-style-12 gray">
            <p>We specialize in crafting two-dimensional content for branded materials including logos, graphics, websites, animations, marketing campaign visuals, and more. These elements can help you establish your brand identity and build a fully operational persona that attracts new clients and delights existing ones.</p>

            <br>
            <p>I am a graphic designer, UI/UX designer & front-end developer with more than 4 years of experience creating and maintaining digital assets, such as graphics, images, videos, interface design, websites development and testing completed applications.</p>
          </div>
          <!-- Button -->
          <!-- <a href="#" class="button gradient rounded-pill scheme-2 magnetic-effect">
              <span class="button-text white white-hover text-center"><i class="fa-solid fa-arrow-down white white-hover"></i></span>
            </a> -->
          <a href="#section1" class="button gradient rounded-pill scheme-2 magnetic-effect">
            <span class="button-text white white-hover">Hire me</span>
            <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
          </a>
        </div>
      </div>
    </div>
  </section>


  <!--     <section class="shock-section pt-4 pb-2 bg-color black">
      <div class="container">
        <div class="basic-intro mb-2 text-center">
          <h2 class="title gray-50 text-style-5">MY SKILLS</h2>
        </div>
      </div> 
    </section> -->

  <!-- Outline gradient -->
  <!--     <section class="shock-section has-overlay">
      <div class="banner">
        <div class="content-wrapper">
          <div class="basic-intro max-w-75 text-center">
            <h1 class="title white">
              <span class="text-2 d-block text-style-3 text-italic text-gradient scheme-2">Adobe Creative Cloud Skills.</span>
            </h1>
            <div class="description text-style-12 gray">
              <p>As a graphic designer, I have a strong understanding of the latest design tools and software including 
                Adobe  Illustrator for creating digital illustrations, 
                Photoshop for photo editing and manipulation, as well as graphics, 
                Adobe XD & Figma for UX/UI design, 
                Adobe Premiere Pro for video editing, and 
                Adobe After Effects for motion graphics.</p>
            </div>
          </div>
        </div>
        <div class="image-wrapper">
          <img src="assets/images/mugenzi.jpg" class="image vh-100 fit-cover" alt="Image." /> 
        </div>
        <div class="overlay black-50"></div>
      </div>
    </section>
 -->
  <!-- Progress bar -->
  <section class="shock-section pb-6 has-overlay bg-color black">
    <div class="container">
      <div class="row mb-35">
        <div class="col-12 col-md-12">
          <!-- Intro -->
          <div class="basic-intro pt-3 ">
            <h2 class="title black">
              <span class="text-1 text-style-7 text-gradient scheme-2 text-italic gray-50 ">Adobe Creative Cloud Skills. </span>
              <!-- <span class="text-2 text-style-8">service units.</span> -->
            </h2>
            <div class="description gray">
              <p>
                As a graphic designer, I have a strong understanding of the latest design tools and software including
                Adobe Illustrator for creating digital illustrations,
                Photoshop for photo editing and manipulation, as well as graphics,
                Adobe XD & Figma for UX/UI design,
                Adobe Premiere Pro for video editing, and
                Adobe After Effects for motion graphics.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 align-h-right align-v-bottom">
          <!-- Button -->
          <!--  <a href="#your-link" class="button mt-3 shadow rounded-pill primary black-hover hover-up-down">
                <span class="button-text white white-hover">Read More</span>
                <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
              </a> -->
        </div>
      </div>

      <section class="shock-section">
        <div class="container">
          <span class="zzz scheme-2 gray-75"></span>
        </div>
      </section>


      <div class="row g-2 pt-5 d-flex justify-content-center">
        <div class="col-6 col-sm-4 col-md-2">
          <div class="radial-progress-bar">
            <div class="item">
              <h3 class="title text-style-11 white">Photoshop</h3>
              <div class="counter outline" data-value="95" data-symbol="%" data-duration="2500" data-bar-stroke="4" data-bar-stroke-empty="1" data-bar-color="var(--secondary-color)" data-empty-bar-color="var(--black-25-color)" data-text-bg-color="transparent" data-text-color="var(--gray-color)"></div>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
          <div class="radial-progress-bar">
            <div class="item">
              <h3 class="title text-style-11 white">Illustrator</h3>
              <div class="counter outline" data-value="96" data-symbol="%" data-duration="2500" data-bar-stroke="4" data-bar-stroke-empty="1" data-bar-color="var(--secondary-color)" data-empty-bar-color="var(--black-25-color)" data-text-bg-color="transparent" data-text-color="var(--gray-color)"></div>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
          <div class="radial-progress-bar">
            <div class="item">
              <h3 class="title text-style-11 white">Premiere Pro</h3>
              <div class="counter outline" data-value="90" data-symbol="%" data-duration="2500" data-bar-stroke="4" data-bar-stroke-empty="1" data-bar-color="var(--secondary-color)" data-empty-bar-color="var(--black-25-color)" data-text-bg-color="transparent" data-text-color="var(--gray-color)"></div>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
          <div class="radial-progress-bar">
            <div class="item">
              <h3 class="title text-style-11 white">After Effects</h3>
              <div class="counter outline" data-value="80" data-symbol="%" data-duration="2500" data-bar-stroke="4" data-bar-stroke-empty="1" data-bar-color="var(--secondary-color)" data-empty-bar-color="var(--black-25-color)" data-text-bg-color="transparent" data-text-color="var(--gray-color)"></div>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
          <div class="radial-progress-bar">
            <div class="item">
              <h3 class="title text-style-11 white">Figma</h3>
              <div class="counter outline" data-value="60" data-symbol="%" data-duration="2500" data-bar-stroke="4" data-bar-stroke-empty="1" data-bar-color="var(--secondary-color)" data-empty-bar-color="var(--black-25-color)" data-text-bg-color="transparent" data-text-color="var(--gray-color)"></div>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
          <div class="radial-progress-bar">
            <div class="item">
              <h3 class="title text-style-11 white">Adobe XD</h3>
              <div class="counter outline" data-value="50" data-symbol="%" data-duration="2500" data-bar-stroke="4" data-bar-stroke-empty="1" data-bar-color="var(--secondary-color)" data-empty-bar-color="var(--black-25-color)" data-text-bg-color="transparent" data-text-color="var(--gray-color)"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="shock-section pt-5">
      <div class="container">
        <span class="zzz scheme-2 gray-75"></span>
      </div>
    </section>
  </section>




  <section class="shock-section pt-5 pb-5 bg-color black">
    <div class="container">
      <!-- Intro -->
      <div class="basic-intro mb-2 text-center">
        <h2 class="title gray-50 text-style-5">LOGOFOLIO</h2>
        <hr class="gray-25">
      </div>
      <div class="row g-5">
        <!-- Sidebar -->
        <div class="col-12 col-md-12">
          <aside class="shock-sidebar top-sidebar scheme-2">
            <!-- Gallery -->
            <div class="sidebar-block">
              <div class="gallery">
                <div class="row g-1">
                  <div class="col-md-2 col-sm-4">
                    <a href="assets/images/logos/logo-mdesign-01.png" class="item lightbox-link hover-opacity">
                      <div class="image-wrapper">
                        <div class="overlay has-border rounded gray"></div>
                        <img src="assets/images/logos/logo-mdesign-01.png" class="image p-1 fit-cover" alt="Image." />
                      </div>
                    </a>
                  </div>
                  <div class="col-md-2 col-sm-4">
                    <a href="assets/images/logos/logo-mdesign-02.png" class="item lightbox-link hover-opacity">
                      <div class="image-wrapper">
                        <div class="overlay has-border rounded gray"></div>
                        <img src="assets/images/logos/logo-mdesign-02.png" class="image p-1 fit-cover" alt="Image." />
                      </div>
                    </a>
                  </div>
                  <div class="col-md-2 col-sm-4">
                    <a href="assets/images/logos/logo-mdesign-03.png" class="item lightbox-link hover-opacity">
                      <div class="image-wrapper">
                        <div class="overlay has-border rounded gray"></div>
                        <img src="assets/images/logos/logo-mdesign-03.png" class="image p-1 fit-cover" alt="Image." />
                      </div>
                    </a>
                  </div>
                  <div class="col-md-2 col-sm-4">
                    <a href="assets/images/logos/logo-mdesign-04.png" class="item lightbox-link hover-opacity">
                      <div class="image-wrapper">
                        <div class="overlay has-border rounded gray"></div>
                        <img src="assets/images/logos/logo-mdesign-04.png" class="image p-1 fit-cover" alt="Image." />
                      </div>
                    </a>
                  </div>
                  <div class="col-md-2 col-sm-4">
                    <a href="assets/images/logos/logo-mdesign-06.png" class="item lightbox-link hover-opacity">
                      <div class="image-wrapper">
                        <div class="overlay has-border rounded gray"></div>
                        <img src="assets/images/logos/logo-mdesign-06.png" class="image p-1 fit-cover" alt="Image." />
                      </div>
                    </a>
                  </div>
                  <div class="col-md-2 col-sm-4">
                    <a href="assets/images/logos/logo-mdesign-07.png" class="item lightbox-link hover-opacity">
                      <div class="image-wrapper">
                        <div class="overlay has-border rounded gray"></div>
                        <img src="assets/images/logos/logo-mdesign-07.png" class="image p-1 fit-cover" alt="Image." />
                      </div>
                    </a>
                  </div>
                  <div class="col-md-2 col-sm-4">
                    <a href="assets/images/logos/logo-mdesign-08.png" class="item lightbox-link hover-opacity">
                      <div class="image-wrapper">
                        <div class="overlay has-border rounded gray"></div>
                        <img src="assets/images/logos/logo-mdesign-08.png" class="image p-1 fit-cover" alt="Image." />
                      </div>
                    </a>
                  </div>
                  <div class="col-md-2 col-sm-4">
                    <a href="assets/images/logos/logo-mdesign-09.png" class="item lightbox-link hover-opacity">
                      <div class="image-wrapper">
                        <div class="overlay has-border rounded gray"></div>
                        <img src="assets/images/logos/logo-mdesign-09.png" class="image p-1 fit-cover" alt="Image." />
                      </div>
                    </a>
                  </div>
                  <div class="col-md-2 col-sm-4">
                    <a href="assets/images/logos/logo-mdesign-10.png" class="item lightbox-link hover-opacity">
                      <div class="image-wrapper">
                        <div class="overlay has-border rounded gray"></div>
                        <img src="assets/images/logos/logo-mdesign-10.png" class="image p-1 fit-cover" alt="Image." />
                      </div>
                    </a>
                  </div>
                  <div class="col-md-2 col-sm-4">
                    <a href="assets/images/logos/logo-mdesign-11.png" class="item lightbox-link hover-opacity">
                      <div class="image-wrapper">
                        <div class="overlay has-border rounded gray"></div>
                        <img src="assets/images/logos/logo-mdesign-11.png" class="image p-1 fit-cover" alt="Image." />
                      </div>
                    </a>
                  </div>
                  <div class="col-md-2 col-sm-4">
                    <a href="assets/images/logos/logo-mdesign-12.png" class="item lightbox-link hover-opacity">
                      <div class="image-wrapper">
                        <div class="overlay has-border rounded gray"></div>
                        <img src="assets/images/logos/logo-mdesign-12.png" class="image p-1 fit-cover" alt="Image." />
                      </div>
                    </a>
                  </div>
                  <div class="col-md-2 col-sm-4">
                    <a href="assets/images/logos/logo-mdesign-05.png" class="item lightbox-link hover-opacity">
                      <div class="image-wrapper">
                        <div class="overlay has-border rounded gray"></div>
                        <img src="assets/images/logos/logo-mdesign-05.png" class="image p-1 fit-cover" alt="Image." />
                      </div>
                    </a>
                  </div>
                  <div class="col-12 d-flex justify-content-center pt-2">
                    <a href="https://www.instagram.com/logo_pro10/" class="button gradient rounded-pill scheme-2">
                      <span class="button-text white white-hover">More Logos</span>
                      <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>

  <!-- Banner -->
  <section class="shock-section has-overlay">
    <div class="banner">
      <div class="content-wrapper">
        <!-- Intro -->
        <div class="basic-intro mb-25 text-center">
          <h1 class="title white">
            <span class="text-1 text-style-3">SOCIAL MEDIA CREATIVE</span>
          </h1>
        </div>
      </div>
      <!-- Image -->
      <div class="image-wrapper">
        <img src="assets/images/social-media-posters/social-media-posters-cover/social-media-posters-cover-01.jpg" class="image vh-75 fit-cover" alt="Image." />
      </div>
      <!-- Overlay -->
      <div class="overlay black-75"></div>
    </div>
  </section>


  <!-- Loading gallery -->
  <section class="shock-section pt-3 pb-3 shock-main bg-color black">
    <div class="container">
      <!-- Intro -->
      <!-- <div class="basic-intro mb-2 text-center">
            <h2 class="title gray-50 text-style-5">Social Media Creative</h2>
            <hr class="gray-25">
          </div> -->
      <!-- Gallery -->
      <div class="gallery stretched has-gap">
        <div id="load-more" class="row g-0" data-display="3" data-columns="3">
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (19).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (19).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (45).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (45).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (38).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (38).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (40).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (40).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (6).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (6).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (30).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (30).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (48).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (48).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (49).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (49).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (14).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (14).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (15).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (15).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (4).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (4).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (32).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (32).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (50).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (50).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (13).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (13).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (14).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (14).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (11).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (11).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (2).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (2).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (41).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (41).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (43).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (43).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (46).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (46).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 load-more-item">
            <a href="assets/images/social-media-posters/social-media-posters-mdesign (17).jpg" class="item lightbox-link hover-up-down">
              <div class="image-wrapper shadow rounded">
                <div class="overlay black-50"></div>
                <img src="assets/images/social-media-posters/social-media-posters-mdesign (17).jpg" class="image" alt="Image." />
              </div>
            </a>
          </div>
          <div class="mt-2 text-center">
            <!-- Button -->
            <button id="load-more-button" class="button shadow rounded black primary-hover button-collision">
              <span class="button-text white white-hover">Load more</span>
              <i class="fa-solid fa-arrow-rotate-right button-icon white white-hover"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Carousel -->
  <section class="shock-section pt-5 pb-5 bg-color black">
    <div class="container">
      <!-- Carousel -->
      <div class="gallery swiper slider stretched has-gap has-side-gaps has-pagination scheme-1 primary" data-columns="2,1,1,1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <!-- Video -->
            <a href="https://youtu.be/mt7D9kEfybs" class="item active lightbox-link hover-zoom">
              <i class="fa-solid fa-circle-play gallery-icon white"></i>
              <div class="image-wrapper small-shadow rounded-3">
                <img src="assets/videos/thumb-01.jpg" class="image" alt="This is an example description for this item." />
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <!-- Video -->
            <a href="https://youtu.be/6lY24lZnAwY" class="item active lightbox-link hover-zoom">
              <i class="fa-solid fa-circle-play gallery-icon white"></i>
              <div class="image-wrapper small-shadow rounded-3">
                <img src="assets/videos/thumb-04.jpg" class="image" alt="This is an example description for this item." />
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <!-- Video -->
            <a href="https://youtu.be/r-XLC4BY2jE" class="item active lightbox-link hover-zoom">
              <i class="fa-solid fa-circle-play gallery-icon white"></i>
              <div class="image-wrapper small-shadow rounded-3">
                <img src="assets/videos/thumb-02.jpg" class="image" alt="This is an example description for this item." />
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <!-- Video -->
            <a href="https://youtu.be/CDqIlBAubt0" class="item active lightbox-link hover-zoom">
              <i class="fa-solid fa-circle-play gallery-icon white"></i>
              <div class="image-wrapper small-shadow rounded-3">
                <img src="assets/videos/thumb-03.jpg" class="image" alt="This is an example description for this item." />
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-side-gaps-prev" data-bg-color="#1a1a20"></div>
        <div class="swiper-side-gaps-next" data-bg-color="#1a1a20"></div>
      </div>
    </div>
  </section>





  <section class="shock-section has-holder pt-5 pb-5 js-auto-width overflow-hidden bg-color black">
    <div class="container">
      <div class="basic-intro mb-35">
        <h2 class="title text-style-5">
          <span class="text-1 text-gradient scheme-2">Web Development Projects</span>
        </h2>
        <div class="description text-style-12 gray">
          <p>I'm passionate about creating user-friendly and efficient digital products that solve real-world problems.
            My expertise lies in building robust intuitive front-end interfaces that delight users.

            I graduated with a degree in Computer Science from Integrated Polytechnic Regional College (IPRC) and have worked with a wide range of clients, from small startups to large enterprises.
            I have experience with various programming languages and frameworks, including PHP, Laravel, Javascript, ...</p>
        </div>
      </div>
      <!-- Intro -->
      <div class="basic-intro mb-2">
        <h2 class="title gray-50 text-style-5">CDH Capital Website</h2>
        <hr class="gray-25">
      </div>
      <!-- Carousel-->
      <div class="js-auto-width-wrapper">
        <div class="gallery swiper slider stretched has-gap has-overflow-right scheme-1 primary" data-columns="2,2,1,1">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="image-wrapper">
                <img src="assets/images/jpg/web-portifolio/web-01.jpg" class="image vh-50 fit-cover shadow rounded-3" alt="Image." />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="image-wrapper">
                <img src="assets/images/jpg/web-portifolio/web-02.jpg" class="image vh-50 fit-cover shadow rounded-3" alt="Image." />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="image-wrapper">
                <img src="assets/images/jpg/web-portifolio/web-03.jpg" class="image vh-50 fit-cover shadow rounded-3" alt="Image." />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="image-wrapper">
                <img src="assets/images/jpg/web-portifolio/web-04.jpg" class="image vh-50 fit-cover shadow rounded-3" alt="Image." />
              </div>
            </div>
          </div>
        </div><br>
        <a href="https://www.cdhcapitalltd.org/" target="blank" class="button shadow rounded-pill gradient scheme-1 hover-up">
          <span class="button-text white white-hover">Visit this site</span>
          <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
        </a>
      </div>
    </div>
  </section>

  <section class="shock-section has-holder pt-5 pb-5 js-auto-width overflow-hidden bg-color black">
    <div class="container">
      <!-- Intro -->
      <div class="basic-intro mb-2">
        <h2 class="title gray-50 text-style-5">Maran Design Website</h2>
        <hr class="gray-25">
      </div>
      <!-- Carousel-->
      <div class="js-auto-width-wrapper">
        <div class="gallery swiper slider stretched has-gap has-overflow-right scheme-1 primary" data-columns="2,2,1,1">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="image-wrapper">
                <img src="assets/images/jpg/web-portifolio/web-05.jpg" class="image vh-50 fit-cover shadow rounded-3" alt="Image." />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="image-wrapper">
                <img src="assets/images/jpg/web-portifolio/web-06.jpg" class="image vh-50 fit-cover shadow rounded-3" alt="Image." />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="image-wrapper">
                <img src="assets/images/jpg/web-portifolio/web-07.jpg" class="image vh-50 fit-cover shadow rounded-3" alt="Image." />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="image-wrapper">
                <img src="assets/images/jpg/web-portifolio/web-08.jpg" class="image vh-50 fit-cover shadow rounded-3" alt="Image." />
              </div>
            </div>
          </div>
        </div><br>
        <a href="https://marandesignltd.com/" target="blank" class="button shadow rounded-pill gradient scheme-1 hover-up">
          <span class="button-text white white-hover">Visit this site</span>
          <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
        </a>
      </div>
    </div>
    <section class="shock-section pt-5">
      <div class="container">
        <span class="zzz scheme-2 gray-75"></span>
      </div>
    </section>
  </section>


  <!--       <section class="shock-section pb-5  pt-5 bg-color black">
        <div class="container max-w-85">
          <div class="content max-w-100 scheme-1">
            <div class="post-reference" data-lax="inertia-top">
              <div class="post-reference-container">
                <div class="image-wrapper">
                  <img src="assets/images/png/me2-01.png" alt="Image name" class="image">
                </div>
                <div class="text-wrapper">
                  <h3 class="title"><mark class="animated-underline secondary-50 text-white">Jean Marie Vianey Mugenzi</mark></h3>
                  <p class="description">Co-founder of <a href="https://www.instagram.com/mdesignpro10/" target="_blank"> MDesign</a>.
                   A creative designers who specialize in providing visually stunning and effective graphic design solutions for businesses and individuals alike</p>
                  <cite title="Source Title">
                  Let us help you bring your ideas to life and create a lasting impression with our innovative and professional design services.</cite>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
 -->



  <!-- 
  <main id="main" class="shock-main bg-color black">
    <section class="shock-section has-holder pt-4 pb-4">
        <div class="container max-w-75">
          <div class="basic-intro text-center">
            <h1 class="title">
              <span class="text-2 d-block text-style-2 text-italic text-gradient scheme-1">My CV</span>
            </h1>
          </div>
        </div>
      </section>
      <section class="shock-section">
        <div class="container">
          <span class="zzz scheme-2 gray-75"></span>
        </div>
      </section>

      <section class="shock-section pt-5 pb-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-md-4  col-sm-12">
              <h5 class="text-white  text-end">PROFILE</h5>
              <figure class="figure">
                <img src="assets/images/jpg/me-01.jpg" class="image shadow rounded" alt="Image name">
                <figcaption class="figure-caption text-end">
                  I am current the Graphic designer at Maran Design. With more than 4 years' experience as Graphic
                  designer & frontend/UI Developer.
                  <br><br> I have worked for different companies on different
                  projects, creating and maintaining digital assets, such as graphics, images, videos, interface design,
                  websites development and testing completed applications. 
                  <br><br> I have a Certificate of Competence in
                  Video Production, Photography & Graphic design that has equipped me with strong multimedia
                  expertise.
                </figcaption>
              </figure>
            </div>
            <div class="col-sm-12 col-md-8">
              <ol>
                <li>EDUCATION BACKGROUND
                  <ol>
                    <li>2018-2021 <mark class="animated-underline primary-10 text-white"> (Information Technology - IPRC Karongi, Rwanda): </mark> Advanced Diploma, A1 in Information Technology</li>
                    <li>2014-2016 <mark class="animated-underline primary-10 text-white"> (A Level, Mathematics, Computer Science and Economics - GS Gihundwe, Rusizi): </mark> Advanced Level Certificate (A2)</li>
                  </ol>
                </li>
                <li>TRAINING AND CERTIFICATES
                  <ol>
                    <li>6 months Certificate of Competence in Video Production, Photography & Graphic design Kigali International Arts College,  <mark class="animated-underline primary-10 text-white">2018.</mark></li>
                    <li>3 months of professional training in ECC (E-Commerce Center) Rwanda as content creator,  <mark class="animated-underline primary-10 text-white">2022.</mark></li>
                  </ol>
                </li>
                <li>TECHINICAL SKILLS
                  <ol>
                    <li><mark class="animated-underline primary-10 text-white">Media Production:</mark> Adobe XD, Adobe Photoshop, Adobe Illustrator, Adobe InDesign, Adobe premier pro, Adobe After Effects, Figma, C4D, etc..</li>
                    <li><mark class="animated-underline primary-10 text-white">Programming Languages:</mark> HTML, CSS, JavaScript, PHP, ...</li>
                    <li><mark class="animated-underline primary-10 text-white">Operating Systems:</mark> Linux, Windows</li>
                    <li><mark class="animated-underline primary-10 text-white">Databases:</mark> SQL Server, MySQL, ORACLE.</li>
                    <li><mark class="animated-underline primary-10 text-white">Networking and System Administration:</mark> Cisco Firewalls, VPN Configuration, Server Administration, Linux and Windows Servers..</li>
                  </ol>
                </li>
                <li>WORK EXPERIENCE
                  <ol>
                    <li>
                      <mark class="animated-underline primary-10 text-white">BRANDING, INNOVATION AND CREATIVITY MANAGER, JAUSOLUTIONS - </mark> FROM JANUARY 2020 TO JANUARY 2022.
                      <ul>
                        <li>Managing client proposals from typesetting through to design, print and production.</li>
                        <li>Working with clients, briefing and advising them with regard to design style, format, print production and timescales.</li>
                        <li>Developing concepts, graphics and layouts for product illustrations, company logos and websites.</li>
                        <li>Determining size and arrangement of copy and illustrative material, as well as font style and size.</li>
                        <li>Preparing rough drafts of material based on an agreed brief.</li>
                        <li>Reviewing final layouts and suggesting improvements if required.</li>
                        <li>Liaising with external printers on a regular basis to ensure deadlines are met and material is printed to the highest quality.</li>
                      </ul>
                    </li>
                    <li>
                      <mark class="animated-underline primary-10 text-white">GRAPHIC DESIGNER, ISOKO250 - </mark> 2022.
                      <ul>
                        <li>Create and maintain digital assets, such as flyers, images, videos, interface design files, wireframes, and interactive mockups.</li>
                      </ul>
                    </li>
                    <li>
                      <mark class="animated-underline primary-10 text-white">GRAPHIC DESIGNER, MARAN DERSIGN - </mark> FROM MAY 2022 - PRESENT.
                      <ul>
                        <li>Developing design concepts and layouts for a variety of print and digital media, such as websites, brochures, logos, packaging, and social media content.</li>
                        <li>Communicating effectively with clients and team members throughout the design process to ensure project success.</li>
                        <li>Creating mockups and prototypes to showcase designs to clients.</li>
                        <li>Reviewing designs for errors before printing or publishing.</li>
                        <li>Managing multiple projects and deadlines simultaneously.</li>
                        <li>Staying up-to-date with new design trends and technologies.</li>
                        <li>Creating visual elements such as illustrations, icons, and images that convey a message or brand identity.</li>
                        <li>Selecting and editing photographs, graphics, and other artwork to use in designs.</li>
                        <li>Etc.</li>
                      </ul>
                    </li>
                    <li>
                      <mark class="animated-underline primary-10 text-white">PRODUCT DESIGNER, ZIRAMBA - </mark> FROM August 2022 - PRESENT.
                      <ul>
                        <li>Design graphics for the company including posters, banners, social media content, animated content, company graphics & logos.</li>
                        <li>Managing the company's social media accounts.</li>
                        <li>Creating & posting content</li>
                        <li>Take pictures of products to be enlisted on the platform. </li>
                        <li>Support Ziramba marketing (social media accounts, campaigns, etc.)</li>
                        <li>Etc.</li>
                      </ul>
                    </li>
                  </ol>
                </li>
                <li>CONSULTANCIES __
                  <ol>
                    <li>
                      <mark class="animated-underline primary-10 text-white">JustBetweenUs</mark>
                      <ul>
                        <li>JustBetweenUs is a social network base system that provides a way of rotating savings to the trusted individuals who need it across Africa.</li>
                      </ul>
                    </li>
                    <li>
                      <mark class="animated-underline primary-10 text-white">Securis Africa</mark>
                      <ul>
                        <li>Securis Africa is particularly aimed at meeting the expectations of companies for which the safety of their employees and customers on the road. I worked at Securis Africa on different projects as Software Developer.</li>
                      </ul>
                    </li>
                    <li>
                      <mark class="animated-underline primary-10 text-white">FrikaMart</mark>
                      <ul>
                        <li>FrikaMamart is a multinational technology company specializing in e-commerce and retail online.</li>
                      </ul>
                    </li>
                    <li>
                      <mark class="animated-underline primary-10 text-white">AIMS Zimbabwe</mark>
                      <ul>
                        <li>Is a platform that monitor the workflow of livestock, agriculture, water and land sectors in Zimbabwe.</li>
                      </ul>
                    </li>
                  </ol>
                </li>
                <li>LANGUAGE SKILLS
                  <ul>
                    <li>Kinyarwanda: Spoken, written, and read fluently.</li>
                    <li>English: Spoken, written, and read fluently.</li>
                    <li>French: Spoken, written, and read fluently.</li>
                  </ul>
                </li>
              </ol><br><br>
              <a href="assets/docs/CV JMV Mugenzi  2022.pdf" download="CV JMV Mugenzi" class="button shadow rounded-pill gradient scheme-1 hover-up">
                <span class="button-text white white-hover">Download my CV</span>
                <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
              </a>
            </div>
          </div>
        </div>
      </section>
       <section class="shock-section">
        <div class="container">
          <span class="zzz scheme-2 gray-75"></span>
        </div>
      </section>
    </main> -->



  <!-- Footer -->
  <footer id="footer" class="shock-footer scheme-1 tertiary" data-bg-color="#1e1e24">
    <div class="top-bar" data-bg-color="#1e1e24">
      <div class="footer-content focus-trigger">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-12 order-1 text-center order-lg-2">
              <div class="footer-item text-center">

                <a href="assets/docs/CV JMV Mugenzi  2022.pdf" download="CV JMV Mugenzi" class="button shadow rounded-pill gradient scheme-1 hover-up">
                  <span class="button-text white white-hover">Download my CV</span>
                  <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>




  <!-- Main -->
  <main id="main" class="shock-main bg-color black">
    <!-- Form -->
    <section class="shock-section pt-5 pb-5" id="section1">
      <div class="container">
        <div class="row g-5">
          <div class="col-12 col-md-6">
            <!-- Image -->
            <div class="gallery image-mirror align-h-left">
              <div class="image-wrapper">
                <img src="assets/images/png/me-01.png" alt="Image name" class="image bg-color secondary-50" />
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 align-v-center">
            <div class="holder">
              <!-- Intro -->
              <div class="basic-intro mb-35">
                <h2 class="title text-style-5 bla">
                  <span class="text-1 d-block text-outline">Let's talk? </span>
                  <span class="text-2 text-italic">Send me a <mark class="animated-underline secondary-50">message</mark></span>
                </h2>
              </div>
              <!-- Form -->
              <div class="form-area scheme-2 secondary-50 tertiary">
                <form class="form-fields needs-validation" novalidate="novalidate">
                  <div class="form-row row">
                    <div class="form-col form-floating col-12 col-md-6">
                      <input id="InputFloatingName" class="form-control" type="text" placeholder="Name" required="required">
                      <label for="InputFloatingName" class="form-label">Name</label>
                      <div class="invalid-feedback">Please enter your name.</div>
                      <div class="valid-feedback">Looks good.</div>
                    </div>
                    <div class="form-col form-floating col-12 col-md-6">
                      <input id="InputFloatingEmail" class="form-control" type="email" placeholder="name@example.com" required="required">
                      <label for="InputFloatingEmail" class="form-label">Email</label>
                      <div class="invalid-feedback">Please enter a valid email address.</div>
                      <div class="valid-feedback">Looks good.</div>
                    </div>
                  </div>
                  <div class="form-row row">
                    <div class="form-col col-12">
                      <textarea class="form-control tertiary form-textarea" id="InputCompactMessage" rows="3" placeholder="Enter your message (optional)."></textarea>
                      <div class="valid-feedback">It's optional, but we'd like to know about it :)</div>
                    </div>
                  </div>
                  <div class="form-row row">
                    <div class="form-col col-12 col-md-12 align-h-right">
                      <!-- Button -->
                      <button class="button arrow-button next scheme-2 tertiary">
                        <span class="arrow">
                          <span class="item"></span>
                          <span class="item"></span>
                        </span>
                        <span class="line"></span>
                        <span class="text">SEND</span>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer id="footer" class="shock-footer scheme-1 tertiary" data-bg-color="#1e1e24">
    <div class="top-bar" data-bg-color="#1e1e24">
      <div class="footer-content focus-trigger">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-5 align-h-right align-v-center order-2 order-lg-1">
              <div class="footer-item text-center">
                <!-- Links list -->
                <ul class="nav-list list-unstyled">
                  <li class="nav-item">
                    <a href="tel:+19912345678" class="nav-link has-icon">
                      <img class="image-icon" src="assets/svg/call-sharp.svg" alt="Icon name" data-shock-icon="32" />
                      <span class="text fw-bold">(+250) 781 990 310</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-12 col-lg-2 order-1 order-lg-2">
              <div class="footer-item text-center">
                <!-- Brand -->
                <a href="index.html" class="footer-brand magnetic-effect">
                  <!-- <div class="site-title">Site Title</div> -->
                  <img src="assets/images/logo-white_1.gif" alt="Shock Theme" class="logo" />
                  <!-- <span class="logo-after-text">SHOCK</span> -->
                </a>
              </div>
            </div>
            <div class="col-12 col-lg-5 align-h-left align-v-center order-3">
              <div class="footer-item text-center">
                <!-- Icon list -->
                <div class="list-wrapper">
                  <ul class="icon-h-list">
                    <li class="item">
                      <a href="https://www.instagram.com/mdesignpro10/" target="_black" class="link gray tertiary-hover hover-rotate"><i class="icon fab fa-instagram"></i></a>
                    </li>
                    <!-- <li class="item">
                        <a href="#your-link" class="link gray tertiary-hover hover-rotate"><i class="icon fab fa-twitter"></i></a>
                      </li> -->
                    <li class="item">
                      <a href="https://www.facebook.com/mdesignpro10/" target="_black" class="link gray tertiary-hover hover-rotate"><i class="icon fab fa-facebook-f"></i></a>
                    </li>
                    <li class="item">
                      <a href=" https://wa.me/781990310" target="_black" class="link gray tertiary-hover hover-rotate"><i class="icon fab fa-whatsapp"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Vertical Lines -->
  <div class="vertical-lines scheme-2 primary">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-3 align-h-center">
        <span class="line"></span>
      </div>
      <div class="col-12 col-md-6 col-lg-3 align-h-center">
        <span class="line"></span>
      </div>
      <div class="col-12 col-md-6 col-lg-3 align-h-center">
        <span class="line"></span>
      </div>
      <div class="col-12 col-md-6 col-lg-3 align-h-center">
        <span class="line"></span>
      </div>
    </div>
  </div>

  <!-- Scroll to Top -->
  <div class="side-widget to-right invert-color mix-blend-difference">
    <div class="item align-v-bottom">
      <a href="#" class="link hover-up">
        <span class="widget float-icon">
          <i class="fa-solid fa-arrow-up-long icon"></i>
        </span>
      </a>
    </div>
  </div>


  <?php require_once 'general-links/js.php'; ?>

</body>

</html>