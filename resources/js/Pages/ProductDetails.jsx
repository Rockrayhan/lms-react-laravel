import React from 'react';
import Footer from './Shared/Footer';
import { Link, usePage } from '@inertiajs/react';
import Header from './Shared/Header';
import { Col, Nav, Row, Tab } from 'react-bootstrap';

const ProductDetails = ({products,userData, ordered, pending, enrolledCount}) => {
    const { user, token } = userData;
    console.log(user.id);
    console.log(products);
    return (
        <div>
            <Header userData={userData}></Header>
        <div>
  {/*? slider Area Start*/}
  <section className="slider-area2">
    <div className="">
      {/* Single Slider */}
      <div className="">
        <div className="container">
          <div className="row container">
            <div className="col-xl-8 col-lg-11 col-md-12">
              <div className="hero__caption hero__caption2">
                <h1 data-animation="bounceIn" data-delay="0.2s">Course Details</h1>
                {/* breadcrumb Start*/}
                <nav aria-label="breadcrumb">
                  <ol className="breadcrumb">
                    <li className="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li className="breadcrumb-item"><a href="#">Blog</a></li> 
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
  {/*? Blog Area Start */}
  <section className="blog_area single-post-area">
    <div className="container">
      <div className="row">
        <div className="col-lg-6 posts-list">
          <div className="single-post">
            <div className="feature-img">
              <img  className="img-fluid" width={'400px'} src={"../images/" + products.image} alt='no img' />
            </div>
            <div className="blog_details">
              <h2 style={{color: '#2d2d2d'}}> 
              {products.name} 
              </h2>
              <ul className="blog-info-link mt-3 mb-4">
                <li> Student Enrolled: {enrolledCount} </li>
              </ul>
              <p className="excert my-2">
              {products.description} 

              <h3 className='my-3'> What You will Learn </h3> 
              <ul>
        {products.lesson.map(lesson => (
          <li style={{listStyleType:'circle'}} key={lesson.id}> {lesson.name} </li>
        ))}
      </ul>            
              </p>
            </div>
          </div>

{
  ordered ? (
    <div>Your contents are here</div>
  ) : pending ? (
    <div>
      <h1 className='bg-warning p-4'>Your order is on pending</h1>
    </div>
  ) : (
    <Link href={'/enroll/' + products.id}>
 <button
      type="button"
      className="btn btn-success px-4 py-3 mt-5"
    >
      Enroll Now
    </button>
    </Link>
   
  )
}




{/* pro Content Available only for Purchased one */}
{
  ordered && 
<div className='course-content'>
<Tab.Container id="left-tabs-example" defaultActiveKey="tab-1">
  <Row>
    <Col sm={3}>
      <Nav variant="pills" className="flex-column border-4 border-primary p-2">
        {products.lesson.map((lesson, index) => (
          <Nav.Item key={index}>
            <Nav.Link className='bg-primary my-3' eventKey={`tab-${index + 1}`}>{lesson.name}</Nav.Link>
          </Nav.Item>
        ))}
      </Nav>
    </Col>
    <Col sm={9}>
      <Tab.Content className=' border-4 border-primary p-2'>
        {products.lesson.map((lesson, index) => (
          <Tab.Pane key={index} eventKey={`tab-${index + 1}`}>
            {/* <Sonnet /> */}
            
            
            <p className='text-primary'>{lesson.description}</p>

            <div>
            <iframe width="560" height="315" src={lesson.video} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </Tab.Pane>
        ))}
      </Tab.Content>
    </Col>
  </Row>
</Tab.Container>
</div>



}
        </div>
        <div className="col-lg-4">
          <div className="blog_right_sidebar">
            <aside className="single_sidebar_widget post_category_widget">
              <h4 className="widget_title" style={{color: '#2d2d2d'}}>  <b>Topics</b> </h4>
              <ul className="list cat-list">
 
              <ul>
        {products.lesson.map(lesson => (
          <li key={lesson.id}> {lesson.name} </li>
        ))}
      </ul>
              </ul>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<Footer/>
        </div>
    );
};

export default ProductDetails;