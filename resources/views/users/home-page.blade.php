<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <title>The Professor</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="{{ asset('/images/Logo.png') }}"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="/">Home page</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="section_title text-center">
                <h2 class="title_color">Grade</h2>
                <p>Please chose your grade</p>
            </div>
            <div class="row mb_30" style="justify-content: space-between;">
                @foreach ($grades as $grades)
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="{{ asset($grades->grade_img) }}" alt="{{ $grades->grade_name }}">
                                <a href="/home-page/{{ $grades->id }}" class="btn theme_btn button_hover">Enroll</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">{{ $grades->grade_name }}</h4>
                            </a>
                            <h5>{{ $grades->grade_price }}<small>$/month</small></h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->

    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">Testimonies</h2>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">

                        <h5 class="sec_h5" style="color: yellow;">Jane Doe</h5>
                        <p>I was never a good student, but this educational place changed everything. The classes are
                            small and the teachers really get to know you. They also offer a lot of support services,
                            like tutoring and study groups.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h5 class="sec_h5" style="color: yellow;">Mary Johnson</h5>
                        <p>I was afraid to go back to school after being out of the workforce for a few years, but this
                            educational place made it so easy. The classes are flexible and the teachers are
                            understanding. I'm so glad I took the plunge!
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4" style="color: yellow;">Susan Jones</h4>
                        <p>I was looking for a way to change careers, and this educational place helped me do it. I'm so
                            happy with
                            the results!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Facilities Area  =================-->

    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">Location</h2>
                        <p>123, Mars</p>
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99462.93711522968!2d-98.28913423400543!3d38.827495795431304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87a316d7169cdd9f%3A0x40df3213a71e3737!2sSherman%2C%20KS%2C%20USA!5e0!3m2!1sen!2seg!4v1693945713016!5m2!1sen!2seg"
                            class="button_hover theme_btn_two">View in
                            google maps</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99462.93711522968!2d-98.28913423400543!3d38.827495795431304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87a316d7169cdd9f%3A0x40df3213a71e3737!2sSherman%2C%20KS%2C%20USA!5e0!3m2!1sen!2seg!4v1693945713016!5m2!1sen!2seg"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script script src="{{ asset('/assets/js/popper.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('/assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('/assets/vendors/nice-select/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('/assets/js/stellar.js') }}"></script>
    <script src="{{ asset('/assets/vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('/assets/js/custom.js') }}"></script>
</body>

</html>
