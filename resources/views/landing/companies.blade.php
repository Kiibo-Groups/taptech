@extends('layouts.landing')
@section('title')
    Compañias y equipo | Taptech
@endsection

@section('content')
    <!-- section begin -->
    <section id="companies" aria-label="section" class="text-light overflow-hidden"
        style="background: linear-gradient(to top left, #10092a 0%, #10092a 50%, #10092a 50%, #0d0970 100%);">
         
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="text_top">
                        <div class="spacer-double"></div>
                        <h1>¡El alcance de la <br> conexión para <br> todo tu equipo</h1>
                        <div class="spacer-20"></div>
                        <a href="explore.html" class="btn-main">BUY NOW</a>&nbsp;&nbsp;
                        <div class="spacer-double"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="lazy" src="{{ asset('assets/images/background/bg-2.png') }}" alt="logo" width="80%">
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <section
        style="background: radial-gradient(circle at center, #0d0970 10%, #10092a 25%); display: flex; justify-content: center; align-items: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-7 text-center" style="margin: auto;">
                    <h2 class="text-white" style="font-size: 60px;letter-spacing: 1px;line-height: 65px;"><strong class="text-color-purple">TapTech</strong> is a startup looking to change
                        the way people connect.</h2>
                    <p class="text-white">Our mobile app is built to seek, forge, and grow links between you,
                        people you know, and possible clients. Collect more leads, modernize you teams, and maximize your
                        revenue with Taptech.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section style="background: #10092a;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-color-purple">
                        Teams and professionals around the world trust TapTech
                    </h2>

                </div> 
            </div>
        </div>
    </section>


    <section style="background: #10092a;" class="mt-8">
        <div class="row ">
            <div class="col-8 offset-2" style="background: #ffffff;">
                <div class="container py-4">
                    <h2>Insterested in a free month trial? <br> Fill out the form below:</h2>

                    <div class="row">
                        <div class="col-12">
                            <label for="">Work Email</label>
                            <input type="text" name="name" id="name" class="form-control"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="">First name</label>
                            <input type="text" name="name" id="name" class="form-control"/>
                        </div>
                        <div class="col-6">
                            <label for="">Last name</label>
                            <input type="text" name="name" id="name" class="form-control"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="">Job title</label>
                            <input type="text" name="name" id="name" class="form-control"/>
                        </div>
                        <div class="col-6">
                            <label for="">Company name</label>
                            <input type="text" name="name" id="name" class="form-control"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center mt-4 py-4">
                <a href="#" class="btn-main wow fadeInUp lead">Watch Video</a>
            </div>
        </div>
    </section>

    @include('landing.partials.started')

    @include('landing.partials.footer')
@endsection
