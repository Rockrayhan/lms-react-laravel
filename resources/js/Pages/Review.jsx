import React, { useState } from 'react';
import axios from 'axios';
import Header from './Shared/Header';
import Footer from './Shared/Footer';
import { useForm } from '@inertiajs/react';

const Review = ({myreview, userData}) => {
  const { user, token } = userData;
  // console.log(myreview);
  console.log(user?.id);
    const { data, setData, post } = useForm();

    const handleSubmit = (e) => {
      e.preventDefault();
      post(route('review.store'), data);
    };

    return (
        <div>

            <Header userData={userData}></Header> 
            <h1> Give a review </h1>

            <div className="comment-form">
            <h4>Leave a Reply</h4>
            <form className="max-w-sm mx-auto" action={route('review.store')} method='post'>
            <input type="hidden" name="_token" value={token} />

            {/* student ID */}
            <input type="text" name="student_id" defaultValue={ user.id } /> <br />

                <div className="form-group mb-3">
                  <label htmlFor="name" className="font-weight-bold">Review title</label>
                  <input type="text" name="name" className="form-control" required placeholder="Give Your Review Titel" onChange={(e) => setData("name", e.target.value)} />
                </div>
                <div className="form-group mb-3">
                  <label htmlFor="description" className="font-weight-bold">Description</label>
                  <textarea name="description" className="form-control" cols={30} rows={5} required  
                  onChange={(e) => setData("description", e.target.value)}
                  ></textarea>
                </div>
                <div className="form-group mb-3">
                  <label htmlFor="occupation" className="font-weight-bold">Your Occupation</label>
                  <input type="text" name="occupation" className="form-control" required 
                   onChange={(e) => setData("occupation", e.target.value)}
                  />
                </div>
                <div className="form-group mb-3">
                  <label className="font-weight-bold">Give Star Rating</label>
                  <div className="d-flex">
                    {[1, 2, 3, 4, 5].map((value) => (
                      <div className="form-check mx-4" key={value}>
                        <input type="radio" value={value} name="rating" className="form-check-input" 
                        onChange={(e) => setData("rating", e.target.value)}
                        />
                        <label className="form-check-label">{value} Star</label>
                      </div>
                    ))}
                  </div>
                </div>
                <button type="submit" className="btn btn-primary btn-block w-50">Submit</button>
              </form>

          </div>


          <section className="mt-5 mb-5 container">
  <h1> My reviews </h1>
  <div className="list-group">
    {
      myreview.map( item =>  
       <span className="list-group-item list-group-item-action flex-column align-items-start">
      <div className="d-flex w-100 justify-content-between">
        <h5 className="mb-1"> {item.name} </h5>
        <small>3 days ago</small>
      </div>
      <div className="d-flex justify-content-between">
        <p className="mb-1">  </p>
        <span>
          show stars
        </span>
      </div>
    </span> )
    }
  
    
  </div></section>

          <Footer></Footer>
        </div>
    );
};

export default Review;