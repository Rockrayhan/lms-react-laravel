import NavLink from '@/Components/NavLink';
// import React from 'react';
import logo from '../../../../public/assets/img/logo/logo.png';
import { Link, usePage } from '@inertiajs/react';
import React, { useState, useEffect } from 'react';
import axios from 'axios';

const Header = ({userData}) => {
  const { user, token } = userData;
  console.log(user?.name);


    return (
        <>
<header>
      {/* Header Start */}
      <div className="header-area">
        <div className="main-header ">
          <div className="header-bottom  header-sticky">
            <div className="container-fluid">
              <div className="row align-items-center">
                {/* Logo */}
                <div className="col-xl-2 col-lg-2">
                  <div className="logo">
                    <NavLink to="/"><img src={logo} alt="Logo" /></NavLink>
                  </div>
                </div>
                <div className="col-xl-10 col-lg-10">
                  <div className="menu-wrapper d-flex align-items-center justify-content-end">
                    {/* Main-menu */}
                    <div className="main-menu d-none d-lg-block">
                      <nav>
                      <ul id="navigation">
                      <li><NavLink href="/">Home</NavLink></li>
                      <li><NavLink href="/about">About</NavLink></li>
                      <li><NavLink href="/all-courses">All Courses</NavLink></li>

                        {
                         user ? 
                         <span>
                          <li><NavLink href="/student/mycourses">My Courses</NavLink></li>
                          <li><NavLink href="/review/myreview"> Review </NavLink></li>
                          <li><NavLink href="/student/myorders"> My Orders </NavLink></li>
                          {/* <li><Link href={route('student.logout')} className="btn btn-danger">Log out</Link></li> */}
                          <li>
                          <form method="POST" action={route('student.logout')}>
                          <input type="hidden" name="_token" value={token} />
                          <button type="submit" className="btn btn-danger">
                          Log out
                          </button>
                          </form>
                          </li>
                         </span> 
                        : 
                        <span>
                            <li className="button-header"><Link href="/student/login" className="btn btn3">Log in</Link></li>
                          </span>
                        }
                        <li>
                            <a href="#">Admin | Instructor </a>
                            <ul className="submenu">
                              <li><a href="/admin/login">Admin</a></li>
                              <li><a href="/instructor/dashboard">Instructor</a></li>
                            </ul>
                          </li>
                        </ul> 
                      </nav>
                    </div>
                  </div>
                </div>
                {/* Mobile Menu */}
                <div className="col-12">
                  <div className="mobile_menu d-block d-lg-none" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {/* Header End */}
    </header>
        </>
    );
};

export default Header;