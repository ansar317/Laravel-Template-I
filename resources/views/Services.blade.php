@extends('layout.master')
@section('content')
<div class="container">
    {{-- Main Content  --}}
    <main class="content">
        <h2>Contact US</h2>
        <p>
            At XUFIRE, we offer a range of services designed to meet the diverse needs of our clients. Our team of experts is committed to delivering high-quality solutions tailored to help your business succeed.

            <h3>
                1. Web Development
            </h3>
            We create responsive and user-friendly websites that enhance your online presence. Our web development services include custom website design, e-commerce solutions, and content management systems (CMS).
            
            <h3>
                2. Digital Marketing
            </h3>
            Our digital marketing services help you reach your target audience effectively. From search engine optimization (SEO) and pay-per-click (PPC) advertising to social media marketing, we have the tools to boost your online visibility.
            
            <h3>
                3. Graphic Design
            </h3>
            We provide creative graphic design solutions that resonate with your brand identity. Our services include logo design, branding, marketing materials, and more.
            
            <h3>
                4. Mobile App Development
            </h3>
            Our team specializes in developing mobile applications for iOS and Android platforms, ensuring seamless user experiences and functionality.
            
            <h3>
                5. Consulting Services
            </h3>
            We offer strategic consulting services to help you navigate the complexities of your industry. Whether it's technology consulting or business strategy, we are here to guide you.
            
            <h3>
                6. Training and Support
            </h3>
            We believe in empowering our clients. Our training and support services ensure that you and your team have the knowledge and resources needed to utilize our solutions effectively.
            
            
        </p>
    </main>

    {{--  Sidebar  --}}
    <aside class="sidebar">
        <h2>Sidebar</h2>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/services') }}">Services</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </aside>
</div>
@endsection

@section('title')
| Services
@endsection