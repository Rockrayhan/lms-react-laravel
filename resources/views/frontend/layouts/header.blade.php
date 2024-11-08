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
                                    <div class="logo_img"><img src="frontend/images/logo.png" alt=""></div>
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
            <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
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
