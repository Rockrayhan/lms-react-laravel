import { Link, usePage } from '@inertiajs/react';
import React from 'react';
import OwlCarousel from 'react-owl-carousel';
import Header from './Shared/Header';
import Footer from './Shared/Footer';



const Home = (props) => {
    const {products, categories, reviews, students, userData, loginMsg } = usePage().props ;
    const { user, token } = userData;
    console.log(loginMsg);
    // console.log(products);
    // console.log(reviews);
    console.log(user.name);


    const CategoryName = (id) => {
      const category = categories.find(cat => cat.id === id);
      return category ? category.name : 'Unknown Category';
  };
    const studentName = (id) => {
      const student = students.find(stu => stu.id === id);
      return student ? student.name : 'Unknown Name';
  };

    return (
        <>
      <div>

<Header userData={userData} ></Header>
  <main>

  {
            loginMsg && <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> {loginMsg} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          }


    {/*? slider Area Start*/}
    <section className="slider-area ">
      <div className="slider-active">
        {/* Single Slider */}
        <div className="single-slider slider-height d-flex align-items-center">
          <div className="container">
            <div className="row">
              <div className="col-xl-6 col-lg-7 col-md-12">
                <div className="hero__caption">
                  <h1 data-animation="fadeInLeft" data-delay="0.2s">Online learning<br /> platform</h1>
                  <p data-animation="fadeInLeft" data-delay="0.4s">Build skills with courses, certificates, and degrees online from world-class universities and companies</p>
                  <a href="#" className="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Join for Free</a>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </section>
    
    {/* ? services-area */}
    <div className="services-area">
      <div className="container">
        <div className="row justify-content-sm-center">
          <div className="col-lg-4 col-md-6 col-sm-8">
            <div className="single-services ">
              <div className="features-icon">
                <img src="assets/img/icon/icon1.svg" alt />
              </div>
              <div className="features-caption">
                <h3>60+ UX courses</h3>
                <p> Join now to get the full efficiency of the courses. </p>
              </div>
            </div>
          </div>
          <div className="col-lg-4 col-md-6 col-sm-8">
            <div className="single-services ">
              <div className="features-icon">
                <img src="assets/img/icon/icon2.svg" alt />
              </div>
              <div className="features-caption">
                <h3>Expert instructors</h3>
                <p>The automated process all your website tasks.</p>
              </div>
            </div>
          </div>
          <div className="col-lg-4 col-md-6 col-sm-8">
            <div className="single-services ">
              <div className="features-icon">
                <img src="assets/img/icon/icon3.svg" alt />
              </div>
              <div className="features-caption">
                <h3>Life time access</h3>
                <p>The automated process all your website tasks.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {/* Courses area start */}
    <div className="courses-area  ">
      <div className="container">
        <div className="row justify-content-center">
          <div className="col-xl-7 col-lg-8">
            <div className="section-tittle text-center ">
              <h2>Our featured courses</h2>
            </div>
          </div>
        </div>
        <OwlCarousel className='owl-theme' loop margin={10}>
          {/* Single */}
            {
                products.map( item=>          
                 <div className="properties ">
                  <Link href={'/productDetails/' + item.id}>
                <div className="properties__card">
                  <div style={{height:'400px'}}>
                    <a><img 
                    src={"images/" + item.image}
                    height="300px" 
                    width="200px" 
                    alt={item.name} 
                /></a>
                  </div>
                  <div className="properties__caption">
                    <p> {CategoryName(item.category_id)} </p>

                    <h3>{item.name}</h3>
                    <p>
                        {item.description}
                    </p>
                    <div className="properties__footer d-flex justify-content-between align-items-center">
                      <div className="restaurant-name">
                        <div className="rating">
                          <i className="fas fa-star" />
                          <i className="fas fa-star" />
                          <i className="fas fa-star" />
                          <i className="fas fa-star" />
                          <i className="fas fa-star-half" />
                        </div>
                        <p><span>(4.5)</span> based on 120</p>
                      </div>
                      <div className="price">
                        <span>${item.price} </span>
                      </div>
                    </div>
                    <a className="border-btn border-btn2">Find out more</a>
                  </div>
                </div>
                </Link>
              </div> 
            
              )
            }
          {/* Single */}
        </OwlCarousel>
      </div>
    </div>
    {/* Courses area End */}
    {/*? About Area-1 Start */}
    <section className="about-area1 fix pt-10">
      <div className="support-wrapper align-items-center">
        <div className="left-content1">
          <div className="about-icon">
            <img src="assets/img/icon/about.svg" alt />
          </div>
          {/* section tittle */}
          <div className="section-tittle section-tittle2 mb-55">
            <div className="front-text">
              <h2 className>Learn new skills online with top educators</h2>
              <p>The automated process all your website tasks. Discover tools and 
                techniques to engage effectively with vulnerable children and young 
                people.</p>
            </div>
          </div>
          <div className="single-features">
            <div className="features-icon">
              <img src="assets/img/icon/right-icon.svg" alt />
            </div>
            <div className="features-caption">
              <p>Techniques to engage effectively with vulnerable children and young people.</p>
            </div>
          </div>
          <div className="single-features">
            <div className="features-icon">
              <img src="assets/img/icon/right-icon.svg" alt />
            </div>
            <div className="features-caption">
              <p>Join millions of people from around the world  learning together.</p>
            </div>
          </div>
          <div className="single-features">
            <div className="features-icon">
              <img src="assets/img/icon/right-icon.svg" alt />
            </div>
            <div className="features-caption">
              <p>Join millions of people from around the world learning together. Online learning is as easy and natural.</p>
            </div>
          </div>
        </div>
        <div className="right-content1">
          {/* img */}
          <div className="right-img">
            <img src="assets/img/gallery/about.png" alt />
            <div className="video-icon">
              <a className="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i className="fas fa-play" /></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    {/* About Area End */}
    {/*? top subjects Area Start */}
    <div className="topic-area section-padding40">
      <div className="container">
        <div className="row justify-content-center">
          <div className="col-xl-7 col-lg-8">
            <div className="section-tittle text-center mb-55">
              <h2>Explore top subjects</h2>
            </div>
          </div>
        </div>
        <div className="row">
          <div className="col-lg-3 col-md-4 col-sm-6">
            <div className="single-topic text-center mb-30">
              <div className="topic-img">
                <img src="assets/img/gallery/topic1.png" alt />
                <div className="topic-content-box">
                  <div className="topic-content">
                    <h3><a href="#">Programing</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="col-lg-3 col-md-4 col-sm-6">
            <div className="single-topic text-center mb-30">
              <div className="topic-img">
                <img src="assets/img/gallery/topic2.png" alt />
                <div className="topic-content-box">
                  <div className="topic-content">
                    <h3><a href="#">Programing</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="col-lg-3 col-md-4 col-sm-6">
            <div className="single-topic text-center mb-30">
              <div className="topic-img">
                <img src="assets/img/gallery/topic3.png" alt />
                <div className="topic-content-box">
                  <div className="topic-content">
                    <h3><a href="#">Programing</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="col-lg-3 col-md-4 col-sm-6">
            <div className="single-topic text-center mb-30">
              <div className="topic-img">
                <img src="assets/img/gallery/topic4.png" alt />
                <div className="topic-content-box">
                  <div className="topic-content">
                    <h3><a href="#">Programing</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="col-lg-3 col-md-4 col-sm-6">
            <div className="single-topic text-center mb-30">
              <div className="topic-img">
                <img src="assets/img/gallery/topic5.png" alt />
                <div className="topic-content-box">
                  <div className="topic-content">
                    <h3><a href="#">Programing</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="col-lg-3 col-md-4 col-sm-6">
            <div className="single-topic text-center mb-30">
              <div className="topic-img">
                <img src="assets/img/gallery/topic6.png" alt />
                <div className="topic-content-box">
                  <div className="topic-content">
                    <h3><a href="#">Programing</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="col-lg-3 col-md-4 col-sm-6">
            <div className="single-topic text-center mb-30">
              <div className="topic-img">
                <img src="assets/img/gallery/topic7.png" alt />
                <div className="topic-content-box">
                  <div className="topic-content">
                    <h3><a href="#">Programing</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="col-lg-3 col-md-4 col-sm-6">
            <div className="single-topic text-center mb-30">
              <div className="topic-img">
                <img src="assets/img/gallery/topic8.png" alt />
                <div className="topic-content-box">
                  <div className="topic-content">
                    <h3><a href="#">Programing</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div className="row justify-content-center">
          <div className="col-xl-12">
            <div className="section-tittle text-center mt-20">
              <a href="courses.html" className="border-btn">View More Subjects</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    {/* top subjects End */}
    {/*? About Area-3 Start */}
    <section className="about-area3 fix">
      <div className="support-wrapper align-items-center">
        <div className="right-content3">
          {/* img */}
          <div className="right-img">
            <img src="assets/img/gallery/about3.png" alt />
          </div>
        </div>
        <div className="left-content3">
          {/* section tittle */}
          <div className="section-tittle section-tittle2 mb-20">
            <div className="front-text">
              <h2 className>Learner outcomes on courses you will take</h2>
            </div>
          </div>
          <div className="single-features">
            <div className="features-icon">
              <img src="assets/img/icon/right-icon.svg" alt />
            </div>
            <div className="features-caption">
              <p>Techniques to engage effectively with vulnerable children and young people.</p>
            </div>
          </div>
          <div className="single-features">
            <div className="features-icon">
              <img src="assets/img/icon/right-icon.svg" alt />
            </div>
            <div className="features-caption">
              <p>Join millions of people from around the world
                learning together.</p>
            </div>
          </div>
          <div className="single-features">
            <div className="features-icon">
              <img src="assets/img/icon/right-icon.svg" alt />
            </div>
            <div className="features-caption">
              <p>Join millions of people from around the world learning together.
                Online learning is as easy and natural.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    {/* About Area End */}
    {/*? Team */}
    <section className="team-area section-padding40 fix">
      <div className="container">
        <div className="row justify-content-center">
          <div className="col-xl-7 col-lg-8">
            <div className="section-tittle text-center mb-55">
              <h2>Community Reviews</h2>
            </div>
          </div>
        </div>
    
    {/* ========== reviews  =============*/}

        <OwlCarousel className='owl-theme' loop margin={10} items={4}>
          {
              reviews.map( item => <div className="single-cat text-center">
              <div className="cat-cap">
                <h1> {item.name} </h1>
                <p>{item.description}</p>
                <div className='d-flex justify-center my-3'>
  {/* Generating star icons dynamically based on item.rating */}
  {Array(item.rating).fill().map((_, index) => (
    <svg key={index} xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" className="bi bi-star-fill" viewBox="0 0 16 16">
      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
    </svg>
  ))}
</div>
                <h3> {studentName(item.student_id)} </h3>
              </div>
            </div>  )
          }

        </OwlCarousel>
      </div>
    </section>
    {/* Services End */}
    {/*? About Area-2 Start */}
    <section className="about-area2 fix pb-padding">
      <div className="support-wrapper align-items-center">
        <div className="right-content2">
          {/* img */}
          <div className="right-img">
            <img src="assets/img/gallery/about2.png" alt />
          </div>
        </div>
        <div className="left-content2">
          {/* section tittle */}
          <div className="section-tittle section-tittle2 mb-20">
            <div className="front-text">
              <h2 className>Take the next step
                toward your personal
                and professional goals
                with us.</h2>
              <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.</p>
              <a href="#" className="btn">Join now for Free</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    {/* About Area End */}
  </main>

  <Footer></Footer>
</div>
</>
    );
};

export default Home;