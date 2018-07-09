<!-- START: Page Border -->
<div class="nk-page-border">
    <div class="nk-page-border-t"></div>
    <div class="nk-page-border-r"></div>
    <div class="nk-page-border-b"></div>
    <div class="nk-page-border-l"></div>
</div>
<!-- END: Page Border -->


<!--
Additional Classes:
    .nk-header-opaque
-->
<header class="nk-header nk-header-opaque">


    <!--
START: Top Contacts

Additional Classes:
    .nk-contacts-top-light
-->
    <div class="nk-contacts-top">
        <div class="container">
            <div class="nk-contacts-left">
                <div class="nk-navbar" style="display:none">
                    <ul class="nk-nav">
                        <li class="nk-drop-item">
                            <a href="#">Russia</a>
                            <ul class="dropdown">
                                <li><a href="#">Russia</a></li>
                                <li><a href="#">USA</a></li>
                                <li><a href="#">United Kingdom</a></li>
                                <li><a href="#">France</a></li>
                                <li><a href="#">Spain</a></li>
                                <li><a href="#">Germany</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="page-contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="nk-contacts-right">
                <div class="nk-navbar">
                    <ul class="nk-nav">
                        <li>
                            <a href="https://twitter.com/nkdevv" target="_blank">
                                <span class="ion-social-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://dribbble.com/_nK" target="_blank">
                                <span class="ion-social-dribbble-outline"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="ion-social-instagram-outline"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="ion-social-pinterest"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Top Contacts -->


    <!--
    START: Navbar

    Additional Classes:
        .nk-navbar-sticky
        .nk-navbar-transparent
        .nk-navbar-autohide
        .nk-navbar-light
        .nk-navbar-no-link-effect
-->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">

                <a href="index.html" class="nk-nav-logo">
                    <img src="assets/images/logo.png" alt="" width="90">
                </a>


                <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                    <li class="active">
                        <a href="{{ url('index') }}">Home</a>
                    </li>
                    <li class="">
                        <a href="{{ url('register') }}">Register</a>
                    </li>

                </ul>

                <ul class="nk-nav nk-nav-right nk-nav-icons">

                    <li class="single-icon hidden-lg-up">
                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>








<!--
START: Right Navbar

Additional Classes:
    .nk-navbar-right-side
    .nk-navbar-left-side
    .nk-navbar-lg
    .nk-navbar-align-center
    .nk-navbar-align-right
    .nk-navbar-overlay-content
    .nk-navbar-light
    .nk-navbar-no-link-effect
-->





<!--
START: Navbar Mobile

Additional Classes:
    .nk-navbar-left-side
    .nk-navbar-right-side
    .nk-navbar-lg
    .nk-navbar-overlay-content
    .nk-navbar-light
    .nk-navbar-no-link-effect
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content hidden-lg-up">
    <div class="nano">
        <div class="nano-content">
            <a href="index.html" class="nk-nav-logo">
                <img src="assets/images/logo.png" alt="" width="90">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->
