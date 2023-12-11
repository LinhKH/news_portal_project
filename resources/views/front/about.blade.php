@extends('front.layout.app')

@section('main_content')
    <div class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $page_data->about_title }}</h2>
                    <nav class="breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ HOME }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $page_data->about_title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{-- {{ $page_data->about_detail }} --}}
                    <article class="resume-wrapper text-center position-relative">
                        <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
                            <header class="resume-header pt-4 pt-md-0">
                                <div class="row">
                                    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                                        <img class="picture" src="{{ asset('uploads/IMG_0117.jpg') }}" alt="" style="height: 220px;">
                                    </div><!--//col-->
                                    <div class="col">
                                        <div class="row p-4 justify-content-center justify-content-md-between">
                                            <div class="primary-info col-auto">
                                                <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">Kiều Hòa
                                                    Linh</h1>
                                                <div class="title mb-3">Full Stack Developer</div>
                                                <ul class="list-unstyled">
                                                    <li class="mb-2"><a class="text-link" href="#"><svg
                                                                class="svg-inline--fa fa-envelope fa-fw me-2"
                                                                data-fa-transform="grow-3" aria-hidden="true"
                                                                focusable="false" data-prefix="far" data-icon="envelope"
                                                                role="img" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 512 512" data-fa-i2svg=""
                                                                style="transform-origin: 0.5em 0.5em;">
                                                                <g transform="translate(256 256)">
                                                                    <g
                                                                        transform="translate(0, 0)  scale(1.1875, 1.1875)  rotate(0 0 0)">
                                                                        <path fill="currentColor"
                                                                            d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"
                                                                            transform="translate(-256 -256)"></path>
                                                                    </g>
                                                                </g>
                                                            </svg><!-- <i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i> Font Awesome fontawesome.com -->mr.linh1090@gmail.com</a>
                                                    </li>
                                                    <li><a class="text-link" href="#"><svg
                                                                class="svg-inline--fa fa-mobile-screen-button fa-fw me-2"
                                                                data-fa-transform="grow-6" aria-hidden="true"
                                                                focusable="false" data-prefix="fas"
                                                                data-icon="mobile-screen-button" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                                                data-fa-i2svg="" style="transform-origin: 0.375em 0.5em;">
                                                                <g transform="translate(192 256)">
                                                                    <g
                                                                        transform="translate(0, 0)  scale(1.375, 1.375)  rotate(0 0 0)">
                                                                        <path fill="currentColor"
                                                                            d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z"
                                                                            transform="translate(-192 -256)"></path>
                                                                    </g>
                                                                </g>
                                                            </svg><!-- <i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i> Font Awesome fontawesome.com -->0968146460</a>
                                                    </li>
                                                </ul>
                                            </div><!--//primary-info-->

                                        </div><!--//row-->

                                    </div><!--//col-->
                                </div><!--//row-->
                            </header>
                            <div class="resume-body p-5">
                                <section class="resume-section summary-section mb-5">
                                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">CAREER
                                        OBJECTIVES</h2>
                                    <div class="resume-section-content">
                                        <p class="mb-0">I have 5 years of php programming experience and good front-end
                                            programming skills. I want to develop my programming abilities and skills as a
                                            programmer in a professional working environment. Challenges at work will give
                                            me effective troubleshooting skills, perfect software products that meet
                                            customer requirements, enhance the company brand and reach higher positions in
                                            career</p>
                                    </div>
                                </section><!--//summary-section-->
                                <div class="row">
                                    <div class="col-lg-9">
                                        <section class="resume-section experience-section mb-5">
                                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work
                                                Experience</h2>
                                            <div class="resume-section-content">
                                                <div class="resume-timeline position-relative">
                                                    <article class="resume-timeline-item position-relative pb-5">

                                                        <div class="resume-timeline-item-header mb-2">
                                                            <div class="d-flex flex-column flex-md-row">
                                                                <h3 class="resume-position-title font-weight-bold mb-1">
                                                                    SENIOR PHP DEVELOPER, JUNIOR FULL STACK DEVELOPER</h3>
                                                                <div class="resume-company-name ms-auto">VISION VIETNAM
                                                                </div>
                                                            </div><!--//row-->
                                                            <div class="resume-position-time">2017 - Present</div>
                                                        </div><!--//resume-timeline-item-header-->
                                                        <div class="resume-timeline-item-desc">
                                                            <p>Play role as Developer, Full stack developer and develop core
                                                                system for many clients in Japan</p>

                                                            <h4 class="resume-timeline-item-desc-heading font-weight-bold">
                                                                Technologies used:</h4>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item"><span
                                                                        class="badge bg-secondary badge-pill">PHP</span>
                                                                </li>
                                                                <li class="list-inline-item"><span
                                                                        class="badge bg-secondary badge-pill">AngularJs</span>
                                                                </li>
                                                                <li class="list-inline-item"><span
                                                                        class="badge bg-secondary badge-pill">Vuejs</span>
                                                                </li>
                                                                <li class="list-inline-item"><span
                                                                        class="badge bg-secondary badge-pill">Reactjs</span>
                                                                </li>
                                                                <li class="list-inline-item"><span
                                                                        class="badge bg-secondary badge-pill">HTML/CSS/Bootstrap</span>
                                                                </li>
                                                                <li class="list-inline-item"><span
                                                                        class="badge bg-secondary badge-pill">MySQL</span>
                                                                </li>
                                                            </ul>
                                                        </div><!--//resume-timeline-item-desc-->

                                                    </article><!--//resume-timeline-item-->



                                                </div><!--//resume-timeline-->


                                            </div>
                                        </section><!--//experience-section-->
                                        <section class="resume-section experience-section mb-5">
                                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
                                                TAKEN PROJECTS SUMMARY</h2>
                                            <div class="resume-section-content">

                                                <div class="resume-timeline position-relative">
                                                    <div class="resume-timeline-item-header mb-2">
                                                        <div class="d-flex flex-column flex-md-row">
                                                            <h3 class="resume-position-title font-weight-bold mb-1">
                                                                Building a Hotel Booking</h3>
                                                        </div><!--//row-->
                                                    </div><!--//resume-timeline-item-header-->
                                                    <div class="resume-timeline-item-desc">
                                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">
                                                            Source Code:</h4>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <a href="https://booking-hotel.online"
                                                                    target="_blank">https://booking-hotel.online</a>
                                                            </li>
                                                        </ul>
                                                    </div><!--//resume-timeline-item-desc-->
                                                    <div class="resume-timeline-item-desc">
                                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">
                                                            Technologies used:</h4>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><span
                                                                    class="badge bg-secondary badge-pill">Laravel
                                                                    Framework</span></li>
                                                            <li class="list-inline-item"><span
                                                                    class="badge bg-secondary badge-pill">HTML/CSS/Bootstrap</span>
                                                            </li>
                                                        </ul>
                                                    </div><!--//resume-timeline-item-desc-->

                                                </div><!--//resume-timeline-->

                                            </div>
                                            <div class="resume-section-content">

                                                <div class="resume-timeline position-relative">
                                                    <div class="resume-timeline-item-header mb-2">
                                                        <div class="d-flex flex-column flex-md-row">
                                                            <h3 class="resume-position-title font-weight-bold mb-1">
                                                                Building a Restaurant and Food Ordering Platform</h3>
                                                        </div><!--//row-->
                                                    </div><!--//resume-timeline-item-header-->
                                                    <div class="resume-timeline-item-desc">
                                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">
                                                            Source Code:</h4>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <a href="https://ldev-food-order.net/"
                                                                    target="_blank">https://ldev-food-order.net/</a>
                                                            </li>
                                                        </ul>
                                                    </div><!--//resume-timeline-item-desc-->
                                                    <div class="resume-timeline-item-desc">
                                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">
                                                            Technologies used:</h4>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><span
                                                                    class="badge bg-secondary badge-pill">Laravel
                                                                    Framework</span></li>
                                                            <li class="list-inline-item"><span
                                                                    class="badge bg-secondary badge-pill">HTML/CSS/Bootstrap</span>
                                                            </li>
                                                            <li class="list-inline-item"><span
                                                                    class="badge bg-secondary badge-pill">Jquery</span>
                                                            </li>
                                                        </ul>
                                                    </div><!--//resume-timeline-item-desc-->

                                                </div><!--//resume-timeline-->

                                            </div>
                                            <div class="resume-section-content">

                                                <div class="resume-timeline position-relative">
                                                    <div class="resume-timeline-item-header mb-2">
                                                        <div class="d-flex flex-column flex-md-row">
                                                            <h3 class="resume-position-title font-weight-bold mb-1">
                                                                Developing a complete news portal website</h3>
                                                        </div><!--//row-->
                                                    </div><!--//resume-timeline-item-header-->
                                                    <div class="resume-timeline-item-desc">
                                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">
                                                            Source Code:</h4>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <a href="http://128.199.85.33/"
                                                                    target="_blank">http://128.199.85.33/</a>
                                                            </li>
                                                        </ul>
                                                    </div><!--//resume-timeline-item-desc-->
                                                    <div class="resume-timeline-item-desc">
                                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">
                                                            Technologies used:</h4>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><span
                                                                    class="badge bg-secondary badge-pill">Laravel
                                                                    Framework</span></li>
                                                            <li class="list-inline-item"><span
                                                                    class="badge bg-secondary badge-pill">HTML/CSS/Bootstrap</span>
                                                            </li>
                                                            <li class="list-inline-item"><span
                                                                    class="badge bg-secondary badge-pill">Javascript/Jquery/Ajax</span>
                                                            </li>
                                                        </ul>
                                                    </div><!--//resume-timeline-item-desc-->

                                                </div><!--//resume-timeline-->

                                            </div>

                                        </section><!--//experience-section-->
                                    </div>
                                    <div class="col-lg-3">
                                        <section class="resume-section skills-section mb-5">
                                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
                                                Skills &amp; Tools</h2>
                                            <div class="resume-section-content">
                                                <div class="resume-skill-item">
                                                    <h4 class="resume-skills-cat font-weight-bold">Frontend</h4>
                                                    <ul class="list-unstyled mb-4">
                                                        <li class="mb-2">
                                                            <div class="resume-skill-name">AngularJs</div>
                                                            <div class="progress resume-progress">
                                                                <div class="progress-bar theme-progress-bar-dark"
                                                                    role="progressbar" style="width: 80%"
                                                                    aria-valuenow="25" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </li>
                                                        <li class="mb-2">
                                                            <div class="resume-skill-name">VueJs</div>
                                                            <div class="progress resume-progress">
                                                                <div class="progress-bar theme-progress-bar-dark"
                                                                    role="progressbar" style="width: 70%"
                                                                    aria-valuenow="25" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </li>
                                                        <li class="mb-2">
                                                            <div class="resume-skill-name">JavaScript</div>
                                                            <div class="progress resume-progress">
                                                                <div class="progress-bar theme-progress-bar-dark"
                                                                    role="progressbar" style="width: 80%"
                                                                    aria-valuenow="25" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </li>

                                                        <li class="mb-2">
                                                            <div class="resume-skill-name">ReactJs</div>
                                                            <div class="progress resume-progress">
                                                                <div class="progress-bar theme-progress-bar-dark"
                                                                    role="progressbar" style="width: 60%"
                                                                    aria-valuenow="25" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </li>
                                                        <li class="mb-2">
                                                            <div class="resume-skill-name">HTML/CSS/Bootstrap</div>
                                                            <div class="progress resume-progress">
                                                                <div class="progress-bar theme-progress-bar-dark"
                                                                    role="progressbar" style="width: 80%"
                                                                    aria-valuenow="25" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div><!--//resume-skill-item-->

                                                <div class="resume-skill-item">
                                                    <h4 class="resume-skills-cat font-weight-bold">Backend</h4>
                                                    <ul class="list-unstyled">
                                                        <li class="mb-2">
                                                            <div class="resume-skill-name">PHP</div>
                                                            <div class="progress resume-progress">
                                                                <div class="progress-bar theme-progress-bar-dark"
                                                                    role="progressbar" style="width: 80%"
                                                                    aria-valuenow="25" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </li>
                                                        <li class="mb-2">
                                                            <div class="resume-skill-name">NodeJs</div>
                                                            <div class="progress resume-progress">
                                                                <div class="progress-bar theme-progress-bar-dark"
                                                                    role="progressbar" style="width: 50%"
                                                                    aria-valuenow="25" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div><!--//resume-skill-item-->

                                            </div><!--resume-section-content-->
                                        </section><!--//skills-section-->
                                        <section class="resume-section education-section mb-5">
                                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
                                                Education</h2>
                                            <div class="resume-section-content">
                                                <ul class="list-unstyled">
                                                    <li class="mb-2">
                                                        <div class="resume-degree font-weight-bold">Professional Programmer
                                                            Training Center</div>
                                                        <div class="resume-degree-org">iViettech</div>
                                                        <div class="resume-degree-time">05/2016 - 12/2016</div>
                                                    </li>
                                                    <li>
                                                        <div class="resume-degree font-weight-bold">Information Technology
                                                        </div>
                                                        <div class="resume-degree-org">FPT Polytechnic Tây Nguyên</div>
                                                        <div class="resume-degree-time">2013 - 2016</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </section><!--//education-section-->

                                        <section class="resume-section language-section mb-5">
                                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
                                                Language</h2>
                                            <div class="resume-section-content">
                                                <ul class="list-unstyled resume-lang-list">
                                                    <li class="mb-2"><span
                                                            class="resume-lang-name font-weight-bold">English</span> <small
                                                            class="text-muted font-weight-normal">(Basic)</small></li>
                                                </ul>
                                            </div>
                                        </section><!--//language-section-->
                                        <section class="resume-section interests-section mb-5">
                                            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
                                                Interests</h2>
                                            <div class="resume-section-content">
                                                <ul class="list-unstyled">
                                                    <li class="mb-1">Search information</li>
                                                    <li class="mb-1">Sports</li>
                                                    <li class="mb-1">Cooking</li>
                                                </ul>
                                            </div>
                                        </section><!--//interests-section-->

                                    </div>
                                </div><!--//row-->
                            </div><!--//resume-body-->


                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
