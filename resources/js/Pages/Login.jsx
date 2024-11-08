import React from "react";
import { useForm, Link } from "@inertiajs/react";

const Login = () => {
    const { data, setData, post, errors } = useForm();

    const submit = (e) => {
        e.preventDefault();
        post(route("student.login"));
    };
    return (
        <div>
                <h1 className="text-center mt-5 text-4xl"> Please Login </h1>
            

                <div className="container-fluid">
    <div className="row">
        <div className="col-lg-6 d-flex align-items-center justify-content-center ">
            <img className="img-fluid w-75" src="https://img.freepik.com/free-vector/login-concept-illustration_114360-739.jpg" alt="Login" />
        </div>
        <div className="col-lg-6 d-flex align-items-center justify-content-center">
            <div className="login-form-wrapper">
                <form
                    className="login-form"
                    onSubmit={submit}
                    // method="POST"
                    // action={route("student.login")}
                >
                    <div className="mb-3">
                        <input
                            type="text"
                            className="form-control"
                            name="email"
                            value={data.email}
                            placeholder="Enter Email"
                            onChange={(e) => setData("email", e.target.value)}
                        />
                    </div>
                    <div className="mb-3">
                        <input
                            type="password"
                            className="form-control"
                            name="password"
                            placeholder="Enter Password"
                            value={data.password}
                            onChange={(e) => setData("password", e.target.value)}
                        />
                    </div>
                    <button className="btn btn-warning" type="submit">
                        Submit
                    </button>
        
           <div className="mt-3"> 
            <Link className="text-blue-600 font-bold" href='/student/register'> New User ? Please Register </Link>
            </div>
                </form>
            </div>
        </div>
    </div>
</div>


        </div>
    );
};

export default Login;
