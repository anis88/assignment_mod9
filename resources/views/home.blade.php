@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <!-- Home Page Section -->
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="{{ asset('images/tanchan.png') }}" class="img-fluid rounded-circle shadow-lg rounded" alt="Your Profile Picture" width="350px" height="350px">
                    <h1 class="pro-heading">Tanchan</h1>
                    <h4 class="pro-title"><img src="{{ asset('images/chef.png') }}" alt="chef" class="pro-icon">Artiste Culinaire - <img src="images/edit.png" alt="designer" class="pro-icon">Passionné de Design - <img src="images/mountain.png" alt="traveller" class="pro-icon">Voyageur</h4>
                    <p><i>Chef Tanchan</i>  is a highly skilled and internationally trained pastry chef with over 2 years of experience
                        in the art of baking and pastry. His expertise spans a wide range of techniques, from traditional recipes to innovative,
                        globally inspired creations. Known for his meticulous attention to detail, <i>Chef Tanchan</i> excels in crafting desserts
                        that not only taste exceptional but also exhibit artistic flair.
                    </p>
                    <p>
                        With a strong foundation in classic pastry arts, <i>Chef Tanchan</i> has expanded his repertoire through culinary journeys across
                        various cultural landscapes, infusing his creations with a unique global perspective. As the head pastry chef at <b>"Sugar Lane Bakery"</b>,
                        his own renowned bakery, he showcases a diverse menu of pastries, cakes, and confections, all made with the finest locally sourced
                        ingredients.
                    </p>

                    <!--<a href="#about" class="btn btn-primary">Learn More</a>-->
                </div>
            </div>
        </div>
    </section>
    <!-- Home Page Section -->
    


    <!-- Skills Section -->
    <section id="skills">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Skills</h2>
                    <p>A brief summary of my skills</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4>Master of Pastry Arts</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                    <h4>Master of Bread Baking</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Menu Development</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                    </div>
                    <h4>Inventory Management</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 96%;" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100">96%</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Hygiene & Safety Management</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 94%;" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100">94%</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Communicating & Coordinating</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">92%</div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Skills Section -->
@endsection
