@extends('layouts.master')

@section('title', 'Projects')

@section('content')
    <!-- Projects Page Section -->
    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="project-heading">Projects</h1>
                </div>
            </div>
            
            <div class="row">
                <!-- Project Card 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/project1.jpg') }}" class="card-img-top" alt="Project 1 Image" height="400px">
                        <div class="card-body">
                            <h5 class="card-title">Pain Au Levain</h5>
                            <p class="card-text">Sourdough is a healthier alternative to regular white or whole wheat bread.
                                The prebiotics helps to keep your gut bacteria happy, and it may be less likely to spike blood sugar levels.
                                 </p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/project2.jpg') }}" class="card-img-top" alt="Project 2 Image" height="400px">
                        <div class="card-body">
                            <h5 class="card-title">Biscuits Au Chocolat</h5>
                            <p class="card-text">A chocolate chip cookie is a drop cookie that features chocolate chips or chocolate morsels as its distinguishing ingredient.
                                 Per cent Daily Values are based on a 2,000 calorie diet.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Project Card 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/project3.jpg') }}" class="card-img-top" alt="Project 3 Image" height="400px">
                        <div class="card-body">
                            <h5 class="card-title">Gâteau</h5>
                            <p class="card-text">A cupcake, fairy cake, or bun is a small cake designed to serve one person, which may be baked in a small thin paper or aluminum cup.
                                 As with larger cakes, frosting and other cake decorations may be applied.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects Page Section -->
@endsection
