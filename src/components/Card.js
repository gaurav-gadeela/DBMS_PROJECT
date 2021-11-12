import React from 'react';
import HTML from '../images/HTML.png';
import CSS from '../images/CSS.png';
import C from '../images/C.png';
import Java from '../images/Java.png';
import Javascript from '../images/Javascript.png';
import Kotlin from '../images/Kotlin.png';
import Python from '../images/Python.png';
import ReactImg from '../images/ReactImg.png';
import Swift from '../images/Swift.png';

export default function Card() {
    return (
        <div className="container">
            <h1 className="text-center mb-4 mt-2">Your Categories</h1>
            <div className="d-flex flex-row justify-content-between mb-5">
                <div className="card" style={{width: "18rem"}}>
                <img src = {HTML} className="card-img-top" style={{height:"280px",width:"280px"}} alt="..." />
                <div className="card-body">
                    <h5 className="card-title">HTML</h5>
                    <p className="card-text">{'The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.'.slice(0,200)}...</p>
                    
                    <a href="/">Read More...</a>
                </div>
                </div>

                <div className="card" style={{width: "18rem"}}>
                <img src = {CSS}className="card-img-top" style={{height:"280px",width:"280px"}} alt="..."/>
                <div className="card-body">
                    <h5 className="card-title">CSS</h5>
                    <p className="card-text">{'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.'.slice(0,200)}...</p>
                    <a href="/" className="btn btn-primary">Read More...</a>
                </div>
                </div>

                <div className="card" style={{width: "18rem"}}>
                <img src={Javascript} className="card-img-top" style={{height:"280px",width:"280px"}} alt="..."/>
                <div className="card-body">
                    <h5 className="card-title">Javascript</h5>
                    <p className="card-text">{'JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled and multi-paradigm. It has dynamic typing, prototype-based object-orientation and first-class functions.'.slice(0,200)}...</p>
                    <a href="/" className="btn btn-primary">Read More...</a>
                </div>
                </div>

            </div>


            <div className="d-flex flex-row justify-content-between mb-5">
                <div className="card" style={{width: "18rem"}}>
                <img src={Python} className="card-img-top" style={{height:"280px",width:"280px"}} alt="..."/>
                <div className="card-body">
                    <h5 className="card-title">Python</h5>
                    <p className="card-text">{'Python is an interpreted high-level general-purpose programming language. Its design philosophy emphasizes code readability with its use of significant indentation. Its language constructs as well as its object-oriented approach aim to help programmers write clear, logical code for small and large-scale projects.'.slice(0,200)}...</p>
                    <a href="/" className="btn btn-primary">Read More...</a>
                </div>
                </div>

                <div className="card" style={{width: "18rem"}}>
                <img src={Java} className="card-img-top" style={{height:"280px",width:"280px"}} alt="..."/>
                <div className="card-body">
                    <h5 className="card-title">Java</h5>
                    <p className="card-text">{'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.'.slice(0,200)}...</p>
                    <a href="/" className="btn btn-primary">Read More...</a>
                </div>
                </div>

                <div className="card" style={{width: "18rem"}}>
                <img src={Kotlin} className="card-img-top" style={{height:"280px",width:"280px"}} alt="..."/>
                <div className="card-body">
                    <h5 className="card-title">Kotlin</h5>
                    <p className="card-text">{'Kotlin is a cross-platform, statically typed, general-purpose programming language with type inference. Kotlin is designed to interoperate fully with Java, and the JVM version of Kotlins standard library depends on the Java Class Library, but type inference allows its syntax to be more concise.'.slice(0,200)}...</p>
                    <a href="/" className="btn btn-primary">Read More...</a>
                </div>
                </div>

            </div>


            <div className="d-flex flex-row justify-content-between mb-5">

                <div className="card" style={{width: "18rem"}}>
                <img src={ReactImg} className="card-img-top" style={{height:"280px",width:"280px"}} alt="..."/>
                <div className="card-body">
                    <h5 className="card-title">React</h5>
                    <p className="card-text">{'React is a free and open-source front-end JavaScript library for building user interfaces or UI components. It is maintained by Facebook and a community of individual developers and companies. React can be used as a base in the development of single-page or mobile applications.'.slice(0,200)}...</p>
                    <a href="/" className="btn btn-primary">Read More...</a>
                </div>
                </div>

                <div className="card" style={{width: "18rem"}}>
                <img src={Swift} className="card-img-top" style={{height:"280px",width:"280px"}} alt="..."/>
                <div className="card-body">
                    <h5 className="card-title">Swift</h5>
                    <p className="card-text">{'Swift is a general-purpose, multi-paradigm, compiled programming language developed by Apple Inc. and the open-source community.'.slice(0,200)}...</p>
                    <a href="/" className="btn btn-primary">Read More...</a>
                </div>
                </div>

                <div className="card" style={{width: "18rem"}}>
                <img src={C} className="card-img-top" style={{height:"280px",width:"280px"}} alt="..."/>
                <div className="card-body">
                    <h5 className="card-title">C++</h5>
                    <p className="card-text">{'C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or "C with Classes".'.slice(0,200)}...</p>
                    <a href="/" className="btn btn-primary">Read More...</a>
                </div>
                </div>

            </div>

            
        </div>
    )
}
