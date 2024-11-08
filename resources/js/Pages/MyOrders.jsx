import React from "react";
import Header from "./Shared/Header";
import Footer from "./Shared/Footer";
import { Link } from "@inertiajs/react";
// import { Link } from "@inertiajs/react";

const MyOrders = ({ userData, orders }) => {
    const { user, token } = userData;
    return (
        <div>
            <Header userData={userData}></Header>

                <div className="my-5 container">
                    

                    {
                        orders.length > 0 ? <div>
                            <h1> You have {orders.length} Orders </h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Purchase Date</th>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">Invoice</th>
                                </tr>
                            </thead>
                            <tbody>
                                  {
                                    orders.map( item =>   
                                    <tr>
                                        <td> # </td>
                                        <td> {item.product_name}  </td>
                                        <td>{new Date(item.created_at).toLocaleDateString()}</td>
                                        <td> {item.payment}  </td>
                                        <td> {item.price}  </td>
                                        <td> {item.t_id}  </td>
                                        {/* <td> <a className="text-primary fontw-bold" href={'invoice/' + item.id}> Invoice  </a> </td> */}
                                        <td> <Link className="text-primary fontw-bold" href={'/invoice/' + item.id}> Invoice  </Link> </td>
    
                                    </tr> 
                                    )
                                  }
                                
    
    
                            </tbody>
                        </table>
                    </div> :
                    <div>
                            <h1> You Have No Orders </h1>
                    </div>
                    }

                </div>


            <Footer></Footer>
        </div>
    );
};

export default MyOrders;
