@extends('layout.master')
@section('content')
<div class="container">
    {{-- Main Content  --}}
    <main class="content">
        <h2>Contact US</h2>
        <p>
        We would love to hear from you! Whether you have questions, feedback, or just want to say hello, feel free to reach out to us.

        Email:
        You can email us at  <a href="mailto:contact@example.com">contact@example.com</a>

        Phone:
        Give us a call at (123) 456-7890. Our team is available Monday through Friday, 9 AM to 5 PM.

        Office Address:
        XUFIRE
        House No.192 
        Multan, Punjab, 61000

        Follow Us on Social Media:
        Stay connected with us on our social media channels for updates and news:
            <br>
        <a href="{{ url('/') }}"><i class="bi bi-facebook"></i> Facebook</a>
            <br>
        <a href="{{ url('/') }}"><i class="bi bi-twitter"></i> X(Twitter)</a>
            <br>
        <a href="{{ url('/') }}"><i class="bi bi-linkedin"></i> LinkedIn</a>
            <br>
        Thank you for considering XUFIRE. We look forward to hearing from you soon!
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
| Contact
@endsection