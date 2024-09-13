@extends('layouts.guest')

@section('website')
<div class="page page-landing">
    <div class="page-inner">
        <div class="page-top-hero curved-border">
            <div class="page-top-hero__content container">
                <h1>
                    Startup Werx<br />
                    <small>For wherever you're at on your journey.</small>
                </h1>
                <p>
                    WE can help you start and create your business, whether are looking for inspiration or are you looking for something specific, like how to get a business licensee in New York or a step by step process to get business up and running... you need look no further we can guide to success. 
                </p>
                <div class="page-top-hero__cta">
                    <a href="{{ route('register') }}" class="btn btn-primary">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
        <div class="page-section whoweare-section">
            <div class="container inner-section">
                <div class="row">
                    <div class="column-left text col-lg-6">
                        <h2>
                            Who We Are
                        </h2>
                        <p>
                            We have developed these avenues to help you explore your interests or provide with the help you need to create your business.
                            Each avenue will have articles, or news, or events, and some will provide you with insights to state or local business regulatory requirements.                        
                        </p>
                        <a href="{{ route('about') }}" class="btn btn-primary">
                            Learn More
                        </a>
                    </div>
                    <div class="column-right image col-lg-6">
                        <img src="https://images.unsplash.com/photo-1665686374006-b8f04cf62d57?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Who We Are" />
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section inspirationexplorer-section">
            <div class="container inner-section">
                <div class="row">
                    <div class="column-left image col-lg-6">
                        <img src="https://images.unsplash.com/photo-1543269865-0a740d43b90c?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Inspiration Explorer" />
                    </div>
                    <div class="column-right text col-lg-6">
                        <h2>
                            Inspiration Explorer
                        </h2>
                        <p>
                            We have developed these avenues to help you explore your interests or provide with the help you need to create your business.
                            Each avenue will have articles, or news, or events, and some will provide you with insights to state or local business regulatory requirements.                        
                        </p>
                        <a href="{{ route('home') }}" class="btn btn-primary">
                            Explore More
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section industryexplorer-section">
            <div class="container inner-section">
                <div class="row">
                    <div class="column-left text col-lg-6">
                        <h2>
                            Inspiration Explorer
                        </h2>
                        <p>
                            We have developed these avenues to help you explore your interests or provide with the help you need to create your business.
                            Each avenue will have articles, or news, or events, and some will provide you with insights to state or local business regulatory requirements.                        
                        </p>
                        <a href="{{ route('home') }}" class="btn btn-primary">
                            Explore More
                        </a>
                    </div>
                    <div class="column-right image col-lg-6">
                        <img src="https://images.unsplash.com/photo-1519076651956-95f25edf6780?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Inspiration Explorer" />
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section benefits-of-registering-section">
            <div class="container inner-section">
                <div class="top-hero-header">
                    <h2>
                        How do you benefit from registering?
                    </h2>
                </div>
                <div class="row">
                    <div class="column-left text col-lg-4">
                        <h3>
                            Benefit #1
                        </h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.                        </p>
                    </div>
                    <div class="column-right text col-lg-4">
                        <h3>
                            Benefit #2
                        </h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                    <div class="column-right text col-lg-4">
                        <h3>
                            Benefit #3
                        </h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section see-it-in-action-video-section">
            <div class="container inner-section">
                <div class="top-hero-header">
                    <h2>
                        See it in action
                    </h2>
                    <p>
                        Watch this video to see how Startup Werx can help you.
                    </p>
                </div>
                <div class="row">
                    <div class="column-right text">
                        <video controls>
                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section benefits-of-subscribing-section">
            <div class="container inner-section">
                <div class="top-hero-header">
                    <h2>
                        Coming Soon
                    </h2>
                    <p>
                        We are working on some great features that will be available to our subscribers.
                    </p>
                </div>
                <div class="row">
                    <div class="column-left text col-lg-4">
                        <h3>
                            Benefit #1
                        </h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.                        </p>
                    </div>
                    <div class="column-right text col-lg-4">
                        <h3>
                            Benefit #2
                        </h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                    <div class="column-right text col-lg-4">
                        <h3>
                            Benefit #3
                        </h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section plan-your-startup-section">
            <div class="container inner-section">
                <div class="row">
                    <div class="column-left icon col-lg-3">
                        <div class="icon-holder">
                            <i class="fa fa-lightbulb"></i>
                        </div>
                    </div>
                    <div class="column-right text col-lg-9">
                        <h2>
                            Plan your Startup
                        </h2>
                        <p>
                            We have developed these avenues to help you explore your interests or provide with the help you need to create your business.
                            Each avenue will have articles, or news, or events, and some will provide you with insights to state or local business regulatory requirements.                        
                        </p>
                        <!-- Dummy image -->
                        <img src="https://plus.unsplash.com/premium_photo-1661963783275-dff88a0296f6?q=80&w=1738&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Grow Your Business" />
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section plan-your-startup-section">
            <div class="container inner-section">
                <div class="row">
                    <div class="column-left icon col-lg-3">
                        <div class="icon-holder">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                    <div class="column-right text col-lg-9">
                        <h2>
                            Customer Explorer
                        </h2>
                        <p>
                            We have developed these avenues to help you explore your interests or provide with the help you need to create your business.
                            Each avenue will have articles, or news, or events, and some will provide you with insights to state or local business regulatory requirements.                        
                        </p>
                        <!-- Dummy image -->
                        <img src="https://images.unsplash.com/photo-1517702087178-fa967a8e8169?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Grow Your Business" />
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section plan-your-startup-section">
            <div class="container inner-section">
                <div class="row">
                    <div class="column-left icon col-lg-3">
                        <div class="icon-holder">
                            <i class="fa-solid fa-seedling"></i>
                        </div>
                    </div>
                    <div class="column-right text col-lg-9">
                        <h2>
                            Grow Your Business
                        </h2>
                        <p>
                            We have developed these avenues to help you explore your interests or provide with the help you need to create your business.
                            Each avenue will have articles, or news, or events, and some will provide you with insights to state or local business regulatory requirements.                        
                        </p>
                        
                        <!-- Dummy image -->
                        <img src="https://plus.unsplash.com/premium_photo-1661635988518-bbf686a69d39?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Grow Your Business" />
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section plan-your-startup-section">
            <div class="container inner-section">
                <div class="row">
                    <div class="column-left icon col-lg-3">
                        <div class="icon-holder">
                            <i class="fa fa-home"></i>
                        </div>
                    </div>
                    <div class="column-right text col-lg-9">
                        <h2>
                            Collaborate with Community
                        </h2>
                        <p>
                            We have developed these avenues to help you explore your interests or provide with the help you need to create your business.
                            Each avenue will have articles, or news, or events, and some will provide you with insights to state or local business regulatory requirements.                        
                        </p>
                        <!-- Dummy image -->
                        <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Grow Your Business" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection