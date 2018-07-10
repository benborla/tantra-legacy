@extends('layouts.app')
@section('content')


    <div class="nk-main">


        <!-- START: Header Title -->
        <!--
    Additional Classes:
        .nk-header-title-sm
        .nk-header-title-md
        .nk-header-title-lg
        .nk-header-title-xl
        .nk-header-title-full
        .nk-header-title-parallax
        .nk-header-title-parallax-opacity
        .nk-header-title-boxed
-->
        <div class="nk-header-title nk-header-title-lg nk-header-title-parallax-opacity">

            @if (env('COUNTDOWN_ENABLED'))
            <!-- START: Coming Soon -->
            <div class="nk-box bg-dark-1 text-xs-center">
                <div class="nk-gap-6"></div>
                <div class="nk-gap-2"></div>
                <div class="bg-image op-3" style="background-image: url('assets/images/wallpapers/1920x1357-1.png');"></div>
                <div class="container">
                    <h2 class="display-4">{{ config('app.name') }}</h2>
                    <div class="nk-gap"></div>
                    <div>{{ env('COUNTDOWN_TEXT') }}</div>
                    <div class="nk-gap-4"></div>

                    <div class="nk-countdown" data-end="{{ env('COUNTDOWN_DATE') }}" data-timezone="EST"></div>
                </div>
                <div class="nk-gap-2"></div>
                <div class="nk-gap-6"></div>
            </div>
            <!-- END: Coming Soon -->
            @else

            <div class="bg-image">
                <div style="background-image: url('assets/images/wallpapers/1920x1357-1.png');"></div>
            </div>
            <div class="nk-header-table">
                <div class="nk-header-table-cell">
                    <div class="container">
                        <div class="nk-header-text">
                            <h1 class="nk-title display-3">{{ config('app.name')  }}</h1>

                            <div class="nk-gap-2"></div>
                            <a href="{{ url('register') }}" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">
                                <span>Join Now!</span>
                            </a>
                            <div class="nk-gap-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>
        <!-- END: Header Title -->

        <!-- START: Rev Slider -->
        <div class="mnt-80">
            <div id="rev_slider_50_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                 data-alias="photography-carousel48" style="padding:0px;">
                <div id="rev_slider_50_1" class="rev_slider fullscreenbanner" style="display:none;"
                     data-version="5.0.7">
                    <ul>
                        @foreach (config('images.index.wallpapers') as $idx => $wallpaper)
                        <!-- SLIDE  -->
                        <li data-index="rs-{{ $idx }}" data-transition="slideoverhorizontal" data-slotamount="7"
                            data-easein="default" data-easeout="default" data-masterspeed="1500"
                            data-thumb="{{ $wallpaper }}" data-rotate="0" data-saveperformance="true">
                            <!-- MAIN IMAGE -->
                            <img src="{{ $wallpaper }}" alt="" data-bgposition="center center"
                                 data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        </li>
                        @endforeach
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
        </div>
        <!-- END: Rev Slider -->

        <!-- START: Features -->
        <div class="container">
            <div class="nk-gap-6"></div>
            <div class="nk-gap-2"></div>
            <div class="row vertical-gap lg-gap">
                <div class="col-md-4">
                    <div class="nk-ibox">
                        <div class="nk-ibox-icon nk-ibox-icon-circle">
                            <img src="{{ asset('assets/trimurti/lg-1.png') }}">
                        </div>
                        <div class="nk-ibox-cont">
                            <h2 class="nk-ibox-title">Brahma</h2>
                            Brahma is the creator of the universe and of all beings.
                            Unlike all the other gods, Brahma carries no weapon. Although Brahma is the equal of Vishnu and Shiva, his popularity is no longer at its peak.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nk-ibox">
                        <div class="nk-ibox-icon nk-ibox-icon-circle">
                            <img src="{{ asset('assets/trimurti/lg-2.png') }}">
                        </div>
                        <div class="nk-ibox-cont">
                            <h2 class="nk-ibox-title">Vishnu</h2>
                            Vishnu, the Preserver, sustains the whole creation and has the power of manifesting himself under numerous forms.
                            In the great Cosmic Ocean, He sustains both the sun of the infinite and the eternal spirit of existence, which is the master of the universe.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nk-ibox">
                        <div class="nk-ibox-icon nk-ibox-icon-circle">
                            <img src="{{ asset('assets/trimurti/lg-4.png') }}">
                        </div>
                        <div class="nk-ibox-cont">
                            <h2 class="nk-ibox-title">Shiva</h2>
                            SHIVA is the god of destruction of those who are ignorant and of what is impure.
                            In the tantric philosophy, SIVA represents the Ultimate Reality, the Absolute, God, The Liberator, and
                            the destroyer and transformer of the universe.
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-gap-2"></div>
            <div class="nk-gap-6"></div>

        </div>
        <!-- END: Features -->


        <!-- START: Contact Form -->
        <div class="nk-gap-4"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="nk-box-3 bg-dark-4">
                        <h2 class="nk-title h3 text-xs-center">Scheduled Events</h2>
                        <div class="nk-gap-2"></div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <td><h4 class="nk-title h4">Events</h4></td>
                                    <td><h4 class="nk-title h4">Schedules</h4></td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach (config('activities.events') as $events)
                                    <tr>
                                        <td><h5>{{ $events['title'] }}</h5></td>
                                        <td><h5 class="text-center"><span class="timers" id="{{ $events['element'] }}" data-hrs="{{ $events['start_hours'] }}" data-mins="{{ $events['start_minutes'] }}">-</span></h5></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nk-box-3 bg-dark-1">
                        <h2 class="nk-title h3 text-xs-center">Login</h2>
                        <div class="nk-gap-2"></div>
                        {!! Form::open(['url' => route('login'), 'class' => 'nk-form nk-form-ajax nk-form-style-1']) !!}
                        {!! Form::text('email', null, ['class' => 'form-control required', 'required' => 'required', 'placeholder' => 'Email *']) !!}
                        <div class="nk-gap-1"></div>
                        {!! Form::password('password', ['class' => 'form-control required', 'required' => 'required', 'placeholder' => 'Password *']) !!}
                        <div class="nk-gap-2"></div>
                        <div class="nk-form-response-success"></div>
                        <div class="nk-form-response-error"></div>
                        <button type="submit" class="nk-btn nk-btn-lg link-effect-4">Login</button>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-4"></div>
        <!-- END: Contact Form -->

        <!-- START: About -->
        <div class="nk-box bg-dark-1">
            <div class="container text-xs-center">
                <div class="nk-gap-6"></div>
                <div class="nk-gap-2"></div>
                <h2 class="nk-title h1">About The Game</h2>
                <div class="nk-gap-3"></div>

                <p class="lead">Tantra Online is a simple, fast paced 3D MMORPG set in an oriental fantasy world.
                    Set in an oriental environment with 8 playable tribes and a PvP focused gameplay.
                    With a high experience rate and simple combat, Tantra is easy to jump into.
                </p>

                <div class="nk-gap-2"></div>
                <div class="row equal-height no-gap multi-columns-row">
                    <div class="col-md-4">
                        <div class="nk-box-2 nk-box-line">
                            <!-- START: Counter -->
                            <div class="nk-counter-3">
                                <div class="nk-count">8</div>
                                <h3 class="nk-counter-title h4">Classes</h3>
                                <div class="nk-gap-1"></div>
                            </div>
                            <!-- END: Counter -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="nk-box-2 nk-box-line">
                            <!-- START: Counter -->
                            <div class="nk-counter-3">
                                <div class="nk-count">3</div>
                                <h3 class="nk-counter-title h4">Gods</h3>
                                <div class="nk-gap-1"></div>
                            </div>
                            <!-- END: Counter -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="nk-box-2 nk-box-line">
                            <!-- START: Counter -->
                            <div class="nk-counter-3">
                                <div class="nk-count">1</div>
                                <h3 class="nk-counter-title h4">Goal</h3>
                                <div class="nk-gap-1"></div>
                            </div>
                            <!-- END: Counter -->
                        </div>
                    </div>
                </div>
                <div class="nk-gap-2"></div>
                <div class="nk-gap-6"></div>
            </div>
        </div>
        <!-- END: About -->

        <!-- START: Video -->
        <div class="container">
            <div class="nk-gap-6"></div>
            <div class="nk-gap-2"></div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=8A2Jc5Q9cR4"
                         data-video-thumb="assets/images/hqdefault-thumbnail.jpg"></div>
                </div>
            </div>
            <div class="nk-gap-2"></div>
            <div class="nk-gap-6"></div>
        </div>
        <!-- END: Video -->



        <!-- START: Testimonials -->
        <div class="nk-gap-6"></div>
        <div class="nk-gap-2"></div>
        <div class="nk-carousel-2" data-autoplay="12000" data-dots="true">
            <div class="text-xs-center">
                <h2 class="nk-title h1">Staffs</h2>
            </div>

            <div class="nk-gap-3"></div>
            <div class="nk-carousel-inner">
                @foreach (config('staffs') as $staff)
                    <div>
                        <div>
                            <blockquote class="nk-testimonial-2">
                                <div class="nk-testimonial-photo"
                                     style="background-image: url({{ $staff['image'] }});"></div>
                                <div class="nk-testimonial-body">
                                    <em>"{{ $staff['background_story'] }}"</em>
                                </div>
                                <div class="nk-testimonial-name h4">{{ $staff['name'] }}</div>
                                <div class="nk-testimonial-source">{{ $staff['title'] }}</div>
                            </blockquote>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="nk-gap-6"></div>
        <!-- END: Testimonials -->

        <!-- START: Follow -->
        <div class="nk-box bg-dark-1">
            <div class="nk-gap-6"></div>
            <div class="nk-gap-2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                        <h2 class="nk-title text-xs-center h1">Follow us on Facebook</h2>
                        <div class="nk-gap-3"></div>
                        <div class="nk-widget">
                            <div>
                                <div class="fb-page" data-href="https://www.facebook.com/legacydone/" data-tabs="timeline" data-width="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/legacydone/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/legacydone/">Tantra Legacy: Dawn Of New Era</a>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-gap-2"></div>
            <div class="nk-gap-6"></div>
            <div class="nk-gap-4"></div>
        </div>
        <!-- END: Follow -->


        <footer class="nk-footer nk-footer-parallax nk-footer-parallax-opacity">
            <img class="nk-footer-top-corner" src="assets/images/footer-corner.png" alt="">


            <div class="container">
                <div class="nk-gap-2"></div>
                <div class="nk-footer-logos">
                    <a href="#" target="_blank">
                        <img class="nk-img" src="assets/images/affiliates/play4free.png" alt="" width="120">
                    </a>
                    <a href="#" target="_blank">
                        <img class="nk-img" src="assets/images/affiliates/hanbitsoft.png" alt="" width="120">
                    </a>
                </div>
                <div class="nk-gap"></div>

                <p>
                    &copy; {{ date('Y') }} Hanbitsoft and related logos are registered trademarks. Tantra and related logos are registered
                    trademarks or trademarks of Hanbitsoft. and/or other countries. All other trademarks
                    or trade names are the property of their respective owners. All Rights Reserved.
                </p>

                <div class="nk-footer-links">
                    <a href="#" class="link-effect">Terms of Service</a>
                    <span>|</span> <a href="#" class="link-effect">Privacy Policy</a>
                </div>

                <div class="nk-gap-4"></div>
            </div>
        </footer>
        <!-- END: Footer -->


    </div>



    <!--
    START: Share Buttons
        .nk-share-buttons-left
-->
    <div class="nk-share-buttons nk-share-buttons-left">
        <ul>
            <li>
                <span class="nk-share-icon" title="Share page on Facebook" data-share="facebook">
                    <span class="icon fa fa-facebook"></span>
                </span>
                <span class="nk-share-name">Facebook</span>
            </li>
            <li>
                <span class="nk-share-icon" title="Share page on Twitter" data-share="twitter">
                    <span class="icon fa fa-twitter"></span>
                </span>
                <span class="nk-share-name">Twitter</span>
            </li>
            <li>
                <span class="nk-share-icon" title="Share page on Google+" data-share="google-plus">
                    <span class="icon fa fa-google-plus"></span>
                </span>
                <span class="nk-share-name">Google Plus</span>
            </li>
        </ul>
    </div>

@endsection

@push('scripts')
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script>
        $(function() {

            function pad(num) {
                return ("0" + parseInt(num)).substr(-2);
            }

            function countdown(element, hour, minutes) {
                hour = parseInt(hour);
                minutes = parseInt(minutes);

                var start = new Date();
                start.setHours(hour, minutes, 0);

                var now = new Date();
                if (now > start) { // too late, go to tomorrow
                    start.setDate(start.getDate() + 1);
                }
                var remain = ((start - now) / 1000);
                var hh = pad((remain / 60 / 60) % 60);
                var mm = pad((remain / 60) % 60);
                var ss = pad(remain % 60);

                var timeLeft =  hh + ":" + mm + ":" + ss;

                if (hh == '00' && Math.abs(parseInt(mm)) <= 5) {
                    $(element).addClass('text-main-5');
                } else {
                    $(element).removeClass('text-main-5');
                }
                $(element).html(timeLeft);
            }

            $.each($('.timers'), function (idx, timer) {
                var element = $(timer).prop('id');
                var hour    = $(timer).data().hrs;
                var mins    = $(timer).data().mins;


                setInterval(function () {
                    countdown('#'+element, hour, mins);
                }, 1000);
            });
        });


    </script>

@endpush