@extends('layout.master')
@section('content')
 <div class="container">
    <main class="content">
        <h2>Home</h2>
        <p>
            Welcome to the main content section. The sidebar is positioned to the right. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptatum, necessitatibus at debitis magni dolore dolorem tempore, amet deserunt a quae voluptas unde laudantium, laboriosam quasi consectetur animi maxime natus corporis et quam? Quidem accusamus laudantium ratione optio error commodi asperiores qui enim, tempora praesentium. Repellat sunt animi doloremque sapiente cumque? Ipsam fuga impedit, reiciendis harum quod possimus voluptatibus sed delectus libero laudantium maiores. Ut eos at numquam ipsum voluptatibus, neque nihil non. Ut pariatur ipsa deserunt maiores doloremque? Quae ab fuga, accusantium blanditiis voluptas ullam facere voluptatem. Nisi officia necessitatibus dolorum eum iste in fugit non vel esse cumque!
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
