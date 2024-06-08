@extends('layouts.landing')
@section('title')
Taptech | Bienvenido(a)
@endsection

@section('content')
    
    <!-- section begin -->
    <section id="section-hero" aria-label="section" class="text-light overflow-hidden" style="background: linear-gradient(to top left, #10092a 0%, #10092a 50%, #10092a 50%, #0d0970 100%);">
        
        <div class="container">
            <div class="row ">
                <div class="col-lg-5">
                    <div class="text_top"> 
                        <h1>Create Your Own <span>TapTech</span> Card.</h1>

                        <img src="{{ asset('assets/images/background/star1.svg') }}" class="star-1-svg">
                        <img src="{{ asset('assets/images/background/star2.svg') }}" class="star-2-svg">

                        <p class="lead">
                            Explore the convenience of NFC technology with our smart cards. Our card offer versatile solutions to simplify your daily life. Discover comfort and safety with every tap.
                        </p>
                        
                        <a href="https://links.kiibo.mx/register" class="btn-main">BUY NOW</a> 
                    </div>
                </div>

                <div class="col-lg-7 img-left-bg">
                    <img src="{{ asset('assets/images/background/left-init-bg.png') }}" class="animate__animated animate__backInRight" alt="">
                </div>

            </div>
        </div>
    </section>
    <!-- section close -->

    <section aria-label="section" data-bgcolor="#10092a">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('assets/images/background/brand_company.png') }}" class="img-fluid">
                </div> 
            </div>
        </div>
    </section>

    
    <section id="section-nfts" style="background: linear-gradient(to bottom right, #10092a 0%, #10092a 50%, #10092a 50%, #0d0970 100%);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-white">
                        <h2>Marketplace</h2>
                    </div>
                </div>
            </div>
            <div class="row wow fadeIn">                        
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item"> 
                        <div class="author_list_pp">
                            <a href="https://links.kiibo.mx/register">                                    
                                <img class="lazy" src="{{ asset('assets/images/items/item_1.png') }}" alt="">
                                
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <a href="https://links.kiibo.mx/register">                        
                                <img src="{{ asset('assets/images/items/item_1.png') }}" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="https://links.kiibo.mx/register">               
                                <h4>TapTech Card</h4>
                            </a> 
                            <div class="nft__item_action">
                                <a href="javascript:void()">  Desde $249mxn</a>
                            </div>                
                        </div> 
                    </div>
                </div>    
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item"> 
                        <div class="author_list_pp">
                            <a href="https://links.kiibo.mx/register">                                    
                                <img class="lazy" src="{{ asset('assets/images/items/item_2.png') }}" alt="">
                                
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <a href="https://links.kiibo.mx/register">                        
                                <img src="{{ asset('assets/images/items/item_2.png') }}" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="https://links.kiibo.mx/register">               
                                <h4>Custom Card</h4>
                            </a> 
                            <div class="nft__item_action">
                                <a href="javascript:void()">  Desde $350mxn</a>
                            </div>                
                        </div> 
                    </div>
                </div>  
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item"> 
                        <div class="author_list_pp">
                            <a href="https://links.kiibo.mx/register">                                    
                                <img class="lazy" src="{{ asset('assets/images/items/item_3.png') }}" alt="">
                                
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <a href="https://links.kiibo.mx/register">                        
                                <img src="{{ asset('assets/images/items/item_3.png') }}" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="https://links.kiibo.mx/register">               
                                <h4>Custom Review Sign</h4>
                            </a> 
                            <div class="nft__item_action">
                                <a href="javascript:void()">  Desde $599mxn</a>
                            </div>                
                        </div> 
                    </div>
                </div>  
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item"> 
                        <div class="author_list_pp">
                            <a href="https://links.kiibo.mx/register">                                    
                                <img class="lazy" src="{{ asset('assets/images/items/item_4.png') }}" alt="">
                                
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <a href="https://links.kiibo.mx/register">                        
                                <img src="{{ asset('assets/images/items/item_4.png') }}" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="https://links.kiibo.mx/register">               
                                <h4>Gift Card</h4>
                            </a> 
                            <div class="nft__item_action">
                                <a href="javascript:void()">  Desde $350mxn</a>
                            </div>                
                        </div> 
                    </div>
                </div>  

                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item"> 
                        <div class="author_list_pp">
                            <a href="https://links.kiibo.mx/register">                                    
                                <img class="lazy" src="{{ asset('assets/images/items/item_5.png') }}" alt="">
                                
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <a href="https://links.kiibo.mx/register">                        
                                <img src="{{ asset('assets/images/items/item_5.png') }}" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="https://links.kiibo.mx/register">               
                                <h4>Custom Badge</h4>
                            </a> 
                            <div class="nft__item_action">
                                <a href="javascript:void()">  Desde $749mxn</a>
                            </div>                
                        </div> 
                    </div>
                </div>  
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item"> 
                        <div class="author_list_pp">
                            <a href="https://links.kiibo.mx/register">                                    
                                <img class="lazy" src="{{ asset('assets/images/items/item_6.png') }}" alt="">
                                
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <a href="https://links.kiibo.mx/register">                        
                                <img src="{{ asset('assets/images/items/item_6.png') }}" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="https://links.kiibo.mx/register">               
                                <h4>TapTech Sticker - 10 Pack</h4>
                            </a> 
                            <div class="nft__item_action">
                                <a href="javascript:void()">  Desde $249mxn</a>
                            </div>                
                        </div> 
                    </div>
                </div>  
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item"> 
                        <div class="author_list_pp">
                            <a href="https://links.kiibo.mx/register">                                    
                                <img class="lazy" src="{{ asset('assets/images/items/item_7.png') }}" alt="">
                                
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <a href="https://links.kiibo.mx/register">                        
                                <img src="{{ asset('assets/images/items/item_7.png') }}" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="https://links.kiibo.mx/register">               
                                <h4>TapTech Cards - 10 Pack</h4>
                            </a> 
                            <div class="nft__item_action">
                                <a href="javascript:void()">  Desde $1,300mxn</a>
                            </div>                
                        </div> 
                    </div>
                </div>  
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item"> 
                        <div class="author_list_pp">
                            <a href="https://links.kiibo.mx/register">                                    
                                <img class="lazy" src="{{ asset('assets/images/items/item_8.png') }}" alt="">
                                
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <a href="https://links.kiibo.mx/register">                        
                                <img src="{{ asset('assets/images/items/item_8.png') }}" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="https://links.kiibo.mx/register">               
                                <h4>100 - Bundle Custom Cards</h4>
                            </a> 
                            <div class="nft__item_action">
                                <a href="javascript:void()">  Desde $7,999mxn</a>
                            </div>                
                        </div> 
                    </div>
                </div>  

                <div class="col-md-12 text-center">
                    <a href="{{ route('home_landing.shop') }}" class="btn-main lead">Show All Products</a>
                </div>                                              
            </div>
        </div>
    </section>

    <section id="how-works"  style="background: linear-gradient(to top right, #10092a 0%, #10092a 50%, #10092a 50%, #0d0970 100%);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-white">
                        <h2>How it Works?</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="box-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M33.0276 6C39.92 6 43.9929 9.95724 43.9929 16.6757V16.7503H35.5236C31.5822 16.7572 28.3893 19.8703 28.3822 23.7131C28.3769 27.5646 31.5733 30.6916 35.5236 30.6968H44V31.3087C44 38.0272 39.9271 42 33.0347 42H14.9671C8.07289 42 4 38.0272 4 31.3087V16.6757C4 9.95724 8.07289 6 14.9671 6H33.0276ZM24.7662 13.7498H13.4791C12.64 13.7533 11.9591 14.4172 11.9555 15.237C11.952 16.0604 12.6347 16.7312 13.4791 16.7347H24.7804C25.6249 16.7312 26.3076 16.0604 26.304 15.2353C26.3004 14.412 25.6107 13.7464 24.7662 13.7498Z" fill="#1C51FE"/>
                            <path opacity="0.4" d="M32.0748 24.5934C32.4931 26.4958 34.161 27.8342 36.0652 27.7994H42.565C43.3573 27.7994 44 27.1432 44 26.3321V21.269C43.9983 20.4597 43.3573 19.8018 42.565 19.8H35.9122C33.7461 19.807 31.9966 21.6049 32 23.8206C32 24.0799 32.0255 24.3393 32.0748 24.5934Z" fill="#1C51FE"/>
                            <path d="M36 25.8C37.1046 25.8 38 24.9046 38 23.8C38 22.6955 37.1046 21.8 36 21.8C34.8954 21.8 34 22.6955 34 23.8C34 24.9046 34.8954 25.8 36 25.8Z" fill="#1C51FE"/>
                          </svg>
                        <h4 class="text-white">Step #1</h4>
                        <p class="text-white">Set up your free digital business card online here.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path opacity="0.4" d="M32.151 4H38.923C41.7275 4 44 6.2917 44 9.11993V15.949C44 18.7773 41.7275 21.069 38.923 21.069H32.151C29.3465 21.069 27.074 18.7773 27.074 15.949V9.11993C27.074 6.2917 29.3465 4 32.151 4Z" fill="#1C51FE"/>
                            <path d="M15.849 26.931C18.6535 26.931 20.926 29.2227 20.926 32.051V38.8801C20.926 41.7064 18.6535 44 15.849 44H9.07705C6.27251 44 4 41.7064 4 38.8801V32.051C4 29.2227 6.27251 26.931 9.07705 26.931H15.849ZM38.923 26.931C41.7275 26.931 44 29.2227 44 32.051V38.8801C44 41.7064 41.7275 44 38.923 44H32.151C29.3465 44 27.074 41.7064 27.074 38.8801V32.051C27.074 29.2227 29.3465 26.931 32.151 26.931H38.923ZM15.849 4C18.6535 4 20.926 6.2917 20.926 9.11993V15.949C20.926 18.7773 18.6535 21.069 15.849 21.069H9.07705C6.27251 21.069 4 18.7773 4 15.949V9.11993C4 6.2917 6.27251 4 9.07705 4H15.849Z" fill="#1C51FE"/>
                            </svg>
                        <h4 class="text-white">Step #2</h4>
                        <p class="text-white">Start sharing your information instantly using your page.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path opacity="0.4" d="M14.861 38.1371C16.521 38.1371 17.881 39.4971 17.881 41.1771C17.881 42.8371 16.521 44.1971 14.861 44.1971C13.181 44.1971 11.821 42.8371 11.821 41.1771C11.821 39.4971 13.181 38.1371 14.861 38.1371ZM37.361 38.1371C39.021 38.1371 40.381 39.4971 40.381 41.1771C40.381 42.8371 39.021 44.1971 37.361 44.1971C35.681 44.1971 34.321 42.8371 34.321 41.1771C34.321 39.4971 35.681 38.1371 37.361 38.1371Z" fill="#1C51FE"/>
                            <path d="M5.55766 4.99958L5.76148 5.01605L10.5315 5.73605C11.2115 5.85805 11.7115 6.41605 11.7715 7.09605L12.1515 11.5761C12.2115 12.2181 12.7315 12.6981 13.3715 12.6981H40.3815C41.6015 12.6981 42.4015 13.1181 43.2015 14.0381C44.0015 14.9581 44.1415 16.2781 43.9615 17.4761L42.0615 30.5961C41.7015 33.118 39.5415 34.9761 37.0015 34.9761H15.1815C12.5215 34.9761 10.3215 32.9361 10.1015 30.298L8.26148 8.49605L5.24148 7.97605C4.44148 7.83605 3.88148 7.05605 4.02148 6.25605C4.16148 5.43605 4.94148 4.89605 5.76148 5.01605L5.55766 4.99958ZM33.8015 20.0961H28.2615C27.4215 20.0961 26.7615 20.7561 26.7615 21.5961C26.7615 22.416 27.4215 23.0961 28.2615 23.0961H33.8015C34.6415 23.0961 35.3015 22.416 35.3015 21.5961C35.3015 20.7561 34.6415 20.0961 33.8015 20.0961Z" fill="#1C51FE"/>
                          </svg>
                        <h4 class="text-white">Step #3</h4>
                        <p class="text-white">Order an optional TapTech accessory to share your information.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-12 text-center">
                    <a href="#" class="btn-main wow fadeInUp lead">Watch Video</a>
                </div>
            </div>
        </div>
    </section>

    @include('landing.partials.started')

    @include('landing.partials.footer')

@endsection
