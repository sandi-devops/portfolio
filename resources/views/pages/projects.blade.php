@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div id="projects" class="container">
    <h2 class="section-title">My Projects</h2>
    <div class="row">
        <!-- Add your project details here -->
        <div class="col-md-4">
            <div class="card">
               
                <div class="card-body">
                    <h5 class="card-title">JOB Project</h5>
                    <p class="card-text">Brief description of Project 1.</p>
                </div>
            </div>
        </div>
        <!-- Repeat for more projects -->
    </div>
</div>
@endsection
