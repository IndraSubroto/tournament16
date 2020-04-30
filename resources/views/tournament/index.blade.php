@extends('layouts.main')
@extends('layouts.nav')
@extends('layouts.side')
@extends('layouts.footer')

@section('title','Tournament')

@section('content')

<div class="card row match-height p-2">

    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Latest Winner</h4>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
                    <div id="carousel-example-caption" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-caption" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-caption" data-slide-to="1"></li>
                            <li data-target="#carousel-example-caption" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="{{ url('/') }}/robust/app-assets/images/carousel/06.jpg" alt="First slide">
                                <div class="carousel-caption">
                                    <h3>First Slide Label</h3>
                                    <p>Donut jujubes I love topping I love sweet. Jujubes I love brownie gummi bears I love donut sweet chocolate. Tart chocolate marshmallow.Tart carrot cake muffin.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('/') }}/robust/app-assets/images/carousel/08.jpg" alt="Second slide">
                                <div class="carousel-caption">
                                    <h3>Second Slide Label</h3>
                                    <p>Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies. Cupcake cake I love cake danish carrot cake.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('/') }}/robust/app-assets/images/carousel/05.jpg" alt="Third slide">
                                <div class="carousel-caption">
                                    <h3>Third Slide Label</h3>
                                    <p>Pudding sweet pie gummies. Chocolate bar sweet tiramisu cheesecake chocolate cotton candy pastry muffin. Marshmallow cake powder icing.</p>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-caption" role="button" data-slide="prev">
                            <span class="icon-prev" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-caption" role="button" data-slide="next">
                            <span class="icon-next" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($tournaments as $tournament)
    <div class="col-xl-3 col-md-6">
        <div class="card height-400">
            <div class="card-header height-20-per">
                <h4 class="card-title">{{$tournament->title}}</h4>
            </div>
            <div class="card-body">
                <img class="img-fluid" src="{{ url('/') }}/robust/app-assets/images/carousel/02.jpg" alt="Card image cap">
            </div>
            <div class="card-body m-1">
                <button type="button" class="btn btn-info" data-toggle="popover" data-content="{{$tournament->description}}" data-original-title="Click Triggered" data-trigger="focus" data-placement="top">
                    Description
                </button>
                <button type="button" class="btn btn-info">
                    <a href="tournament/id={{$tournament->id}}&title={{$tournament->title}}" class="card-link white">Read More</a>
                </button>
            </div>
            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                <span class="float-xs-left">Created at : <br>{{$tournament->created_at}}</span>
            </div>
        </div>
    </div>
    @endforeach
    
</div>

@endsection