@extends('layout.master')
@section('content')

<div class="container">
    {{-- Main Content  --}}
    <main class="content">
        <h2>About US</h2>
        <p>
            Welcome to XUFIRE! We are a passionate team dedicated to providing high-quality services and innovative solutions to our clients. Our journey began in 2020, with a vision to empower businesses through technology and creativity.
    
            At XUFIRE, we believe in collaboration and understanding our clients needs. Our expertise spans various fields, including e.g., web development, digital marketing, and design, ensuring that we deliver tailored solutions that drive success.
    
            Our commitment to excellence and customer satisfaction sets us apart. We strive to stay ahead of industry trends, continuously improving our skills and services. Whether you are a small startup or a large corporation, we are here to help you achieve your goals.
    
            Thank you for considering XUFIRE. We look forward to partnering with you on your journey!
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
| About
@endsection