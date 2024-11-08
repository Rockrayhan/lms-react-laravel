<!DOCTYPE html>
<html lang="en">

<head>
    <title>News</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Elearn project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('frontend/plugins/video-js/video-js.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/news.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/news_responsive.css') }}">


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

        <!-- News -->

        <div class="news">
            <div class="container">
                <div class="row">

                    <!-- News Posts -->
                    <div class="col-lg-8">
                        <div class="news_posts">

                            <!-- News Post -->
                            <div class="news_post mt-5">
                                <div class="news_post_image"> <img class="img-fluid"
                                        src="{{ asset('images/' . $products['image']) }}" alt=""> </div>
                                <div class="news_post_body">
                                    <div class="news_post_title"><a href="#"> {{ $products['name'] }} </a></div>
                                    <div
                                        class="news_post_meta d-flex flex-row align-items-start justify-content-start">
                                        <div class="news_post_author">By <a href="#">William Smith</a></div>
                                        <div class="news_post_comments"><a href="#">3 Comments</a></div>
                                        <div class="news_post_tags">
                                            <span>in </span>
                                            <ul>
                                                <li><a href="#">Social Media</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="news_post_text">
                                        <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod
                                            pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem
                                            venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor
                                            lorem convallis ut. Maecenas rutrum viverra sapien sed fermentum. Morbi
                                            tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida
                                            augue.</p>
                                    </div>
                                    <div class="news_post_link"><a href="#">Read More</a></div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4 mt-5">
                        <div class="mt-5">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (session('msg'))
                                <div class="alert alert-success">
                                    {{ session('msg') }}
                                </div>
                            @endif
                            {{-- Lesson / Topic --}}

                            <div>
                                <h2 class="my-5">Course Topics</h2>
                                <ul>
                                    @foreach ($products->lesson as $lesson)
                                        <h4>
                                            <li style="list-style-type: square">{{ $lesson->name }}</li>
                                        </h4>
                                    @endforeach
                                </ul>
                            </div>


                            {{-- Enroll --}}


                            @if ($ordered)
                                <button type="button" class="btn btn-primary px-4 py-3 mt-5">
                                    Your Course Content are Below..
                                </button>
                            @else
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success px-4 py-3 mt-5" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Enroll Now
                                </button>
                            @endif

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Enroll Now</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="enroll-content">

                                                <h2 class="mb-4"> Enroll Now </h2>
                                                <form method="POST" action="{{ route('orders.store') }}"
                                                    class="mb-4">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="student_name">Name:</label>
                                                        <input type="text" name="student_name"
                                                            class="form-control" placeholder="Enter Your Name"
                                                            value="{{ Auth::guard('student')->user()->name }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Phone:</label>
                                                        <input type="text" name="phone" class="form-control"
                                                            placeholder="Enter Phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Email:</label>
                                                        <input type="text" name="email" class="form-control"
                                                            placeholder="Enter Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="product_name">Product Name:</label>
                                                        <input type="text" name="product_name"
                                                            class="form-control" value="{{ $products['name'] }}"
                                                            readonly>
                                                    </div>
                                                    {{-- get student id --}}
                                                    <input type="hidden" name="student_id"
                                                        value="{{ Auth::guard('student')->user()->id }}">

                                                    {{-- get product id --}}
                                                    <input type="hidden" name="product_id"
                                                        value="{{ $products['id'] }}">

                                                    <div class="form-group">
                                                        <label for="product_name">Product Price:</label>
                                                        <input type="text" name="price" class="form-control"
                                                            value="{{ $products['price'] }}" readonly>
                                                    </div>

                                                    <div class="form-group">
                                                        <label> Make Payment at: +880 168201 1307 </label> <br>

                                                        <div class="d-flex">
                                                            <img src="https://lh3.googleusercontent.com/t_AmjRLX3-4Aoss0ABhG28QvdQ760Fl3h3TLicJYWjQQutrgaZXfxD8ih1K3MeF6fA"
                                                                width="50%" height="80px" alt="">

                                                            <img src="https://www.logodee.com/wp-content/uploads/2021/10/31.jpg"
                                                                width="50%" height="80px" alt="">
                                                        </div>

                                                        <div class="d-flex">
                                                            <input type="radio" name="payment" value="bkash"
                                                                class="form-control">
                                                            <input type="radio" name="payment" value="nagad"
                                                                class="form-control">
                                                        </div>

                                                        <div>
                                                            <label for="product_name">Enter Your Transaction ID</label>
                                                            <input type="text" name="t_id"
                                                                class="form-control">
                                                        </div>

                                                    </div>



                                                    <button type="submit"
                                                        class="btn btn-primary px-5">Enroll</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--   pro content  --}}


                <div class="row" style="margin-top: 60px; margin-bottom: 60px">
                    <div class="col-3 border border-success p-4">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            @foreach ($products->lesson as $key => $lesson)
                                <a class="nav-link border border-info {{ $key == 0 ? 'active' : '' }}"
                                    id="v-pills-{{ $key }}-tab" data-toggle="pill"
                                    href="#v-pills-{{ $key }}" role="tab"
                                    aria-controls="v-pills-{{ $key }}"
                                    aria-selected="{{ $key == 0 ? 'true' : 'false' }}">{{ $lesson->name }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content border border-info p-4" id="v-pills-tabContent">
                            @foreach ($products->lesson as $key => $lesson)
                                <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                                    id="v-pills-{{ $key }}" role="tabpanel"
                                    aria-labelledby="v-pills-{{ $key }}-tab">
                                    <p>{{ $lesson->description }}</p>
                                    <div>
                                        <iframe width="400" height="315" src="{{ $lesson->video }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                {{--===== quiz =====--}}

                {{-- <div class="row my-5 container">
                    <h1>Take a Quiz</h1>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('quiz.submit') }}">
                        @csrf
                        @php $questionNumber = 1; @endphp
                        @foreach ($quiz as $item)
                            <div class="col-lg-12">
                                <div>
                                    <h3>Question {{ $questionNumber }}: {{ $item['question'] }}</h3>

                                    <input name="student_id" type="hidden"
                                        value="{{ Auth::guard('student')->user()->id }}">

                                    <label>{{ $item['option1'] }}</label>
                                    <input type="radio" name="answers[{{ $questionNumber }}]" value="option1">
                                    <br>

                                    <label>{{ $item['option2'] }}</label>
                                    <input type="radio" name="answers[{{ $questionNumber }}]" value="option2">
                                    <br>

                                    <label>{{ $item['option3'] }}</label>
                                    <input type="radio" name="answers[{{ $questionNumber }}]" value="option3">
                                    <br>

                                    <label>{{ $item['option4'] }}</label>
                                    <input type="radio" name="answers[{{ $questionNumber }}]" value="option4">   
                                    
                                </div>
                            </div>
                            @php $questionNumber++; @endphp
                        @endforeach
                        <button type="submit">Submit</button>
                    </form>
                </div> --}}
            </div>



            <!-- Footer -->

            <footer class="footer">
                <div class="container">
                    <div class="row">

                        <!-- About -->
                        <div class="col-lg-3 footer_col">
                            <div class="footer_about">
                                <div class="logo_container">
                                    <a href="#">
                                        <div
                                            class="logo_content d-flex flex-row align-items-end justify-content-start">
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
                                        <li><a href="#"><i class="fa fa-google-plus"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="copyright">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i
                                        class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                        href="https://colorlib.com" target="_blank">Colorlib</a>
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
                                        <div class="footer_contact_line">1481 Creekside Lane Avila Beach, CA 93424
                                        </div>
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
        <script src="{{ asset('frontend/js/news.js') }}"></script>
</body>

</html>
