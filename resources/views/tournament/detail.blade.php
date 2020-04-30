@extends('layouts.main')
@extends('layouts.nav')
@extends('layouts.side')
@extends('layouts.footer')


@section('title')
@foreach ($tournaments as $tournament)
{{$tournament->title}}
@endforeach
@endsection

@section('content')
@foreach ($tournaments as $tournament)
<section id="timeline" class="timeline-left timeline-wrapper">
    <div class="card border-grey border-lighten-2">
        <div class="card-header">
            <div class="row">
                <div class="float-xs-right alert alert-info">
                    <i class="icon-information-circled"></i><b> Info!!!</b> Please register before <b>{{$tournament->dateRegisLimit}}</b>.
                </div>
                <h1 class="card-title text-uppercase">{{$tournament->title}}</h1>
                <p class="card-subtitle text-muted pt-1">
                    <span class="font-small-3">{{$tournament->created_at}}</span>
                </p>
            </div>
        </div>
        <div class="card-body collapse in">
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <img class="img-fluid" src="{{ url('/') }}/robust/app-assets/images/portfolio/width-1200/portfolio-1.jpg" alt="Timeline Image 1">
                        <ul class="list-inline mb-1">
                            <li class="pr-1"><a href="#" class="text-muted"><span class="icon-ei-heart"></span> Like</a></li>
                            {{-- <li class="pr-1"><a href="#" class="text-muted"><span class="icon-chat2"></span> Comment</a></li> --}}
                            <li><a href="#" class="text-muted"><span class="icon-share4"></span> Share</a></li>

                            <li><a href="{{ url('register') }}/{{$tournament->title}}" class="btn btn-green m-1">Register Tournament Now !!!</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <h1 class="green">{{$tournament->company}}</h1>
                        <h3 class="my-1">{{$tournament->title}}</h3>
                        <p class="lead">{{$tournament->dateInitial}} until {{$tournament->dateFinal}}</p>
                        <br>
                        <p>
                            {{$tournament->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection