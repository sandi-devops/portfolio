@extends('layouts.app')

@section('title', 'Home')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
<div class="container my-5">
    <!-- Self Introduction Section -->
    <section id="intro" class="mb-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="display-4" style="color: #000;">Welcome to My Portfolio</h1>
                <p class="lead" style="color: #000;">Hello! I'm John Doe, a passionate web developer skilled in creating stunning websites and applications.</p>
                <p style="color: #000;">I specialize in full-stack development, and I love using my skills to turn ideas into reality. Here, you can explore my projects, photos, and more.</p>
            </div>
        </div>
    </section>

    <!-- Languages Section -->
    <section id="languages" class="mb-5">
        <h2 class="section-title text-center" style="color: #000;">Programming Languages</h2>
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="card bg-light border-0">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000;">HTML</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card bg-light border-0">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000;">CSS</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card bg-light border-0">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000;">JavaScript</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card bg-light border-0">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000;">PHP</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="card bg-light border-0">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000;">python</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card bg-light border-0">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000;">React.js</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card bg-light border-0">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000;">kubernateate</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card bg-light border-0">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000;">AWS</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Photos Section -->
    <section id="photos" class="mb-5">
        <h2 class="section-title text-center" style="color: #000;">Photos</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/photo1.jpg') }}" class="card-img-top" alt="Photo 1">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000;">Vacation in Hawaii</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/photo2.jpg') }}" class="card-img-top" alt="Photo 2">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000;">Mountain Hiking</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/photo3.jpg') }}" class="card-img-top" alt="Photo 3">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000;">City Skyline</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Life and Interests Section -->
    <section id="life-interests" class="mb-5">
        <h2 class="section-title text-center" style="color: #000;">Life & Interests</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-light border-0">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000;">Life Style</h5>
                        <p class="card-text" style="color: #000;">I love traveling, meeting with friends, and shooting photos. Swimming is one of my favorite activities, and I occasionally enjoy reading a book. I cherish fun times spent with friends and always look forward to learning about new technologies in the world.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-light border-0">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000;">Interests</h5>
                        <p class="card-text" style="color: #000;">I'm passionate about new technologies, open-source projects, and Cloud development. In my free time, I like to explore new tools and learng technology culture.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work and Projects Section -->
    <section id="work" class="mb-5">
        <h2 class="section-title text-center" style="color: #000;">My Work & Projects</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="{{ asset('images/project1.jpg') }}" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000;">E-commerce Website</h5>
                        <p class="card-text" style="color: #000;">A fully functional e-commerce website built with Laravel and javascript,mysql</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="{{ asset('images/project2.jpg') }}" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000;">Portfolio Website</h5>
                        <p class="card-text" style="color: #000;">A personal portfolio website to showcase my projects and skills, created with php and JavaScript.</p>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
</div>
@endsection
