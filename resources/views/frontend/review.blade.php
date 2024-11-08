<!DOCTYPE html>
<html lang="en">

<head>
    <title>Courses</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Elearn project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('frontend/plugins/video-js/video-js.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/courses.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/courses_responsive.css') }}">
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->
            <div class="top_bar">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <ul class="top_bar_contact_list">
                                        <li>
                                            <div class="question">Have any questions?</div>
                                        </li>
                                        <li>
                                            <div>(009) 35475 6688933 32</div>
                                        </li>
                                        <li>
                                            <div>info@elaerntemplate.com</div>
                                        </li>
                                    </ul>
                                    <div class="top_bar_login ml-auto">
                                        <ul>
                                            <li><a href="/student/dashboard">User</a></li>
                                            <li><a href="/instructor/dashboard">Instructor</a></li>
                                            <li><a href="/admin/dashboard">admin</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="#">
                                        <div class="logo_content d-flex flex-row align-items-end justify-content-start">
                                            <div class="logo_img"><img src="images/logo.png" alt=""></div>
                                            <div class="logo_text">learn</div>
                                        </div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav d-flex">
                                        <li><a href="/">home</a></li>
                                        <li><a href="/all-courses">All Courses</a></li>
                                        <li><a href="/student/mycourses">My courses</a></li>
                                        <li><a href="/review/myreview">Review</a></li>
                                        <li><a href="/student/myorders">My Orders</a></li>
                                        <li class="ml-auto">
                                            <a href="#" class="btn btn-primary">
                                                <i class="fa fa-shopping-cart"></i> Cart
                                                @php $cartItems = session('cart') ?? []; @endphp
                                                <span class="badge badge-light">{{ count($cartItems) }}</span>
                                            </a>
                                        </li>

                                        <!-- Student Name -->
                                        {{-- <h4 class="text-danger font-weight-bold">
                                            {{ Auth::guard('student')->check() ? 
                                            Auth::guard('student')->user()->name 
                                            : 
                                            '' 
                                            }}
                                        </h4> --}}

                                        <!-- Student Name -->
                                        <h5 class="text-danger font-weight-bold d-flex">
                                            @auth('student')
                                                {{ Auth::guard('student')->user()->name }}
                                                <form method="POST" action="{{ route('student.logout') }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">
                                                        Logout
                                                    </button>
                                                </form>
                                            @else
                                                <a href="/student/login"> Log In </a>
                                            @endauth
                                        </h5>


                                    </ul>

                                    <!-- Hamburger -->

                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>
                                </nav>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Search Panel -->
            <div class="header_search_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                                <form action="#" class="header_search_form">
                                    <input type="search" class="search_input" placeholder="Search" required="required">
                                    <button
                                        class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Menu -->

        <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
            <div class="menu_close_container">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="search">
                <form action="#" class="header_search_form menu_mm">
                    <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                    <button
                        class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                        <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="menu_mm"><a href="index.html">Home</a></li>
                    <li class="menu_mm"><a href="courses.html">Courses</a></li>
                    <li class="menu_mm"><a href="instructors.html">Instructors</a></li>
                    <li class="menu_mm"><a href="#">Events</a></li>
                    <li class="menu_mm"><a href="blog.html">Blog</a></li>
                    <li class="menu_mm"><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <div class="menu_extra">
                <div class="menu_phone"><span class="menu_title">phone:</span>(009) 35475 6688933 32</div>
                <div class="menu_social">
                    <span class="menu_title">follow us</span>
                    <ul>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>



        <!-- Courses -->

        <div class="courses mb-5" style="margin-top: 100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="section_title text-center">
                        </div>
                    </div>
                </div>


            </div>
        </div>
        @if (session('msg'))
            <div class="col-sm-12">
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-gray-600" role="alert">
                    {{ session('msg') }}
                    <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
                </div>
            </div>
        @endif

        <section class="mt-5 mb-5 container ">
            <div class="container w-75 border border-5 p-4">
                <h2 class="text-center"> Give a review </h2>
                <form class="max-w-sm mx-auto" method="POST" action="{{ route('review.store') }}">
                    @csrf

                    <input type="hidden" name="student_id" value="{{ Auth::guard('student')->user()->id }}"
                        class="form-control mb-3" required>

                    <div class="form-group mb-3">
                        <label for="name" class="font-weight-bold">Review title</label>
                        <input type="text" name="name" class="form-control" required
                            placeholder="Give Your Name">
                    </div>

                    <div class="form-group mb-3">
                        <label for="description" class="font-weight-bold">Description</label>
                        <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="occupation" class="font-weight-bold">Your Occupation</label>
                        <input type="text" name="occupation" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Give Star Rating</label>

                        <div class="d-flex">
                            <div class="form-check">
                                <input type="radio" value="1" name="rating" class="form-check-input"> One
                                Star
                            </div>
                            <div class="form-check mx-4">
                                <input type="radio" value="2" name="rating" class="form-check-input"> Two
                                Star
                            </div>
                            <div class="form-check">
                                <input type="radio" value="3" name="rating" class="form-check-input"> Three
                                Star
                            </div>
                            <div class="form-check mx-4">
                                <input type="radio" value="4" name="rating" class="form-check-input"> Four
                                Star
                            </div>
                            <div class="form-check">
                                <input type="radio" value="5" name="rating" class="form-check-input"> Five
                                Star
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary btn-block w-50">Submit</button>
                </form>

            </div>
        </section>



        <section class="mt-5 mb-5 container">
            <h1> My reviews </h1>

            <div class="list-group">
                @foreach ($myreview as $item)
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"> {{ $item['name'] }}</h5>
                            <small>3 days ago</small>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mb-1"> {{ $item['description'] }}</p>

                            <span>
                                @for ($i = 1; $i <= $item['rating']; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="red" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                @endfor
                            </span>

                        </div>

                    </a>
                @endforeach

        </section>

        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <!-- About -->
                    <div class="col-lg-3 footer_col">
                        <div class="footer_about">
                            <div class="logo_container">
                                <a href="#">
                                    <div class="logo_content d-flex flex-row align-items-end justify-content-start">
                                        <div class="logo_img"><img src="images/logo.png" alt=""></div>
                                        <div class="logo_text">learn</div>
                                    </div>
                                </a>
                            </div>
                            <div class="footer_about_text">
                                <p>Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus
                                    pulvinar.</p>
                            </div>
                            <div class="footer_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="copyright">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 footer_col">
                        <div class="footer_links">
                            <div class="footer_title">Quick menu</div>
                            <ul class="footer_list">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="#">Facts</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 footer_col">
                        <div class="footer_links">
                            <div class="footer_title">Useful Links</div>
                            <ul class="footer_list">
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="#">Teachers</a></li>
                                <li><a href="#">Links</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 footer_col">
                        <div class="footer_contact">
                            <div class="footer_title">Contact Us</div>
                            <div class="footer_contact_info">
                                <div class="footer_contact_item">
                                    <div class="footer_contact_title">Address:</div>
                                    <div class="footer_contact_line">1481 Creekside Lane Avila Beach, CA 93424</div>
                                </div>
                                <div class="footer_contact_item">
                                    <div class="footer_contact_title">Phone:</div>
                                    <div class="footer_contact_line">+53 345 7953 32453</div>
                                </div>
                                <div class="footer_contact_item">
                                    <div class="footer_contact_title">Email:</div>
                                    <div class="footer_contact_line">yourmail@gmail.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('frontend/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('frontend/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('frontend/plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/courses.js') }}"></script>
</body>

</html>
