import React from 'react';

const Footer = () => {
    return (
        <>
         <footer>
    <div className="footer-wrappper footer-bg">
      {/* Footer Start*/}
      <div className="footer-area footer-padding">
        <div className="container">
          <div className="row justify-content-between">
            <div className="col-xl-4 col-lg-5 col-md-4 col-sm-6">
              <div className="single-footer-caption mb-50">
                <div className="single-footer-caption mb-30">
                  {/* logo */}
                  <div className="footer-logo mb-25">
                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt /></a>
                  </div>
                  <div className="footer-tittle">
                    <div className="footer-pera">
                      <p>The automated process starts as soon as your clothes go into the machine.</p>
                    </div>
                  </div>
                  {/* social */}
                  <div className="footer-social">
                    <a href="#"><i className="fab fa-twitter" /></a>
                    <a href="https://bit.ly/sai4ull"><i className="fab fa-facebook-f" /></a>
                    <a href="#"><i className="fab fa-pinterest-p" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-xl-2 col-lg-3 col-md-4 col-sm-5">
              <div className="single-footer-caption mb-50">
                <div className="footer-tittle">
                  <h4>Our solutions</h4>
                  <ul>
                    <li><a href="#">Design &amp; creatives</a></li>
                    <li><a href="#">Telecommunication</a></li>
                    <li><a href="#">Restaurant</a></li>
                    <li><a href="#">Programing</a></li>
                    <li><a href="#">Architecture</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div className="col-xl-2 col-lg-4 col-md-4 col-sm-6">
              <div className="single-footer-caption mb-50">
                <div className="footer-tittle">
                  <h4>Support</h4>
                  <ul>
                    <li><a href="#">Design &amp; creatives</a></li>
                    <li><a href="#">Telecommunication</a></li>
                    <li><a href="#">Restaurant</a></li>
                    <li><a href="#">Programing</a></li>
                    <li><a href="#">Architecture</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div className="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div className="single-footer-caption mb-50">
                <div className="footer-tittle">
                  <h4>Company</h4>
                  <ul>
                    <li><a href="#">Design &amp; creatives</a></li>
                    <li><a href="#">Telecommunication</a></li>
                    <li><a href="#">Restaurant</a></li>
                    <li><a href="#">Programing</a></li>
                    <li><a href="#">Architecture</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {/* footer-bottom area */}
      <div className="footer-bottom-area">
        <div className="container">
          <div className="footer-border">
            <div className="row d-flex align-items-center">
              <div className="col-xl-12 ">
                <div className="footer-copy-right text-center">
                  <p>{/* Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. */}
                    Copyright © All rights reserved | This template is made with <i className="fa fa-heart" aria-hidden="true" /> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    {/* Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. */}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {/* Footer End*/}
    </div>
  </footer> 
  {/* Scroll Up */}
  <div id="back-top">
    <a title="Go to Top" href="#"> <i className="fas fa-level-up-alt" /></a>
  </div>
   
        </>
    );
};

export default Footer;