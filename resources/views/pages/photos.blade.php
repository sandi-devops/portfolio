@extends('layouts.app')

@section('title', 'Photos')

@section('content')
<div id="photos" class="container">
    <h2 class="section-title">My Traveling collection Photos</h2>
    <div class="row">
        <!-- Photo 1 -->
        <div class="col-md-4">
            <div class="card">                
                <img src="{{ asset('images/photo1.jpg') }}" class="card-img-top" alt="Photo 1">
                <div class="card-body">
                    <h5 class="card-title">Photo 1</h5>
                    <p class="card-text">Description of Photo 1.</p>
                </div>
            </div>
        </div>

        <!-- Photo 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/photo2.jpg') }}" class="card-img-top" alt="Photo 2">
                <div class="card-body">
                    <h5 class="card-title">Photo 2</h5>
                    <p class="card-text">Description of Photo 2.</p>
                </div>
            </div>
        </div>

        <!-- Photo 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/photo3.jpg') }}" class="card-img-top" alt="Photo 3">
                <div class="card-body">
                    <h5 class="card-title">Photo 3</h5>
                    <p class="card-text">Description of Photo 3.</p>
                </div>
            </div>
        </div>


        <div class="row">
        <!-- Photo 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/photo1.jpg') }}" class="card-img-top" alt="Photo 1">
                <div class="card-body">
                    <h5 class="card-title">Photo 1</h5>
                    <p class="card-text">Description of Photo 1.</p>
                </div>
            </div>
        </div>

        <!-- Photo 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/photo2.jpg') }}" class="card-img-top" alt="Photo 2">
                <div class="card-body">
                    <h5 class="card-title">Photo 2</h5>
                    <p class="card-text">Description of Photo 2.</p>
                </div>
            </div>
        </div>

        <!-- Photo 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/photo3.jpg') }}" class="card-img-top" alt="Photo 3">
                <div class="card-body">
                    <h5 class="card-title">Photo 3</h5>
                    <p class="card-text">Description of Photo 3.</p>
                </div>
            </div>
        </div>
        <!-- Photo 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/photo2.jpg') }}" class="card-img-top" alt="Photo 2">
                <div class="card-body">
                    <h5 class="card-title">Photo 2</h5>
                    <p class="card-text">Description of Photo 2.</p>
                </div>
            </div>
        </div>

        <!-- Photo 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/photo3.jpg') }}" class="card-img-top" alt="Photo 3">
                <div class="card-body">
                    <h5 class="card-title">Photo 3</h5>
                    <p class="card-text">Description of Photo 3.</p>
                </div>
            </div>
        </div>
        <!-- Photo 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/photo2.jpg') }}" class="card-img-top" alt="Photo 2">
                <div class="card-body">
                    <h5 class="card-title">Photo 2</h5>
                    <p class="card-text">Description of Photo 2.</p>
                </div>
            </div>
        </div>

        <!-- Photo 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/photo3.jpg') }}" class="card-img-top" alt="Photo 3">
                <div class="card-body">
                    <h5 class="card-title">Photo 3</h5>
                    <p class="card-text">Description of Photo 3.</p>
                </div>
            </div>
        </div>
        <!-- Photo 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/photo2.jpg') }}" class="card-img-top" alt="Photo 2">
                <div class="card-body">
                    <h5 class="card-title">Photo 2</h5>
                    <p class="card-text">Description of Photo 2.</p>
                </div>
            </div>
        </div>

        <!-- Photo 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/photo3.jpg') }}" class="card-img-top" alt="Photo 3">
                <div class="card-body">
                    <h5 class="card-title">Photo 3</h5>
                    <p class="card-text">Description of Photo 3.</p>
                </div>
            </div>
        </div>
        <!-- Add more photos as needed -->
    </div>
</div>
@endsection
