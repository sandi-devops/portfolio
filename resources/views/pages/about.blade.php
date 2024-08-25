@extends('layouts.app')

@section('title', 'About')

@section('content')
<div id="about" class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="about-section text-center mb-5">
                <h2 class="section-title">About Me</h2>
                
                <img src="{{ asset('mypdf/p.jpg') }}" alt="Profile Picture" class="profile-picture img-fluid rounded-circle mt-4 mb-4">
                <p class="lead">I am an IT engineer with a passion for web development, cloud computing.With a strong background in php, javascript,linux, and Node.js, I enjoy solving complex problems and building innovative solutions that make a difference.</p>
            </div>

            <div class="details-section mb-5">
                <h3>Details</h3>
                <ul class="list-unstyled">
                    <li><strong>Name:</strong> Sandi Khaing</li>
                    <li><strong>Location:</strong> Tokyo, Japan</li>
                    <li><strong>Email:</strong>sandi.ygx@gmail.com</li>
                    <li><strong>Phone:</strong> 080 -2899 3971</li>
                    <li><strong>LinkedIn:</strong> <a href="">Sandi khaing</a></li>
                </ul>
            </div>

            <div class="interests-section">
                <h3>Interests</h3>
                <p>Outside of work, I enjoy photography, traveling, and exploring new technologies. I'm also passionate about continuous learning and staying updated with industry trends.</p>
            </div>
        </div>
    </div>
</div>
@endsection



<style>
    /* Global styles */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f8f9fa;
}

.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 40px 20px;
}

.section-title {
    color: #007bff;
}

.resume-header {
    margin-bottom: 40px;
}

.download-buttons a {
    color: #fff;
}

.resume-section {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.resume-section h3 {
    color: #007bff;
    margin-bottom: 20px;
}

.resume-section p {
    color: #666;
}

.resume-section ul {
    padding-left: 20px;
}

.resume-section ul li {
    margin-bottom: 10px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .resume-section {
        padding: 20px;
    }
}

    </style>