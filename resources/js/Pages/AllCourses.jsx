import React from 'react';
import Header from './Shared/Header';
import Footer from './Shared/Footer';
import { Link } from '@inertiajs/react';

const AllCourses = ({ userData, products, categories, enrollMsg }) => {
    const { user, token } = userData;

    const CategoryName = (id) => {
        const category = categories.find(cat => cat.id === id);
        return category ? category.name : 'Unknown Category';
    };
    return (
        <div>
                    
            <Header userData={userData}></Header>


            {
            enrollMsg && <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>  {enrollMsg}  </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          }

                    
           <main>
  {/*? slider Area Start*/}
  <section className="slider-area slider-area2">
    <div className="slider-active">
      {/* Single Slider */}
      <div className="single-slider slider-height2">
        <div className="container">
          <div className="row">
            <div className="col-xl-8 col-lg-11 col-md-12">
              <div className="hero__caption hero__caption2">
                <h1>All courses</h1>
                {/* breadcrumb Start*/}
                <nav aria-label="breadcrumb">
                  <ol className="breadcrumb">
                    <li className="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li className="breadcrumb-item"><a href="#">Services</a></li> 
                  </ol>
                </nav>
                {/* breadcrumb End */}
              </div>
            </div>
          </div>
        </div>          
      </div>
    </div>
  </section>
  {/* Courses area start */}
  <div className="courses-area section-padding40 fix">
    <div className="container">
      <div className="row justify-content-center">
        <div className="col-xl-7 col-lg-8">
          <div className="section-tittle text-center mb-55">
            <h2>Our courses</h2>
          </div>
        </div>
      </div>
      <div className="row">
      <div className='row'>

{
products.map( item=>          
<div className="col-lg-4">
<div className="properties ">
                  <Link href={'/productDetails/' + item.id}>
                <div className="properties__card">
                  <div style={{height:'400px'}}>
                    <a><img 
                    src={"images/" + item.image}
                    height="" 
                    width="" 
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
</div>

)
}



</div>
      </div>
    </div>
  </div>
  {/* Courses area End */}
  {/*? top subjects Area Start */}
  <div className="topic-area">
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
  {/* ? services-area */}
  <div className="services-area services-area2 section-padding40">
    <div className="container">
      <div className="row justify-content-sm-center">
        <div className="col-lg-4 col-md-6 col-sm-8">
          <div className="single-services mb-30">
            <div className="features-icon">
              <img src="assets/img/icon/icon1.svg" alt />
            </div>
            <div className="features-caption">
              <h3>60+ UX courses</h3>
              <p>The automated process all your website tasks.</p>
            </div>
          </div>
        </div>
        <div className="col-lg-4 col-md-6 col-sm-8">
          <div className="single-services mb-30">
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
          <div className="single-services mb-30">
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
</main>



                    

            <Footer></Footer>
        </div>
    );
};

export default AllCourses;