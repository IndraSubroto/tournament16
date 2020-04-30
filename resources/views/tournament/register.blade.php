@extends('layouts.main')
@extends('layouts.nav')
@extends('layouts.side')
@extends('layouts.footer')

@section('title')
@forelse ($tournaments as $tournament)
Register to {{$tournament->title}}
@empty
    enggak ada
@endforelse
@endsection

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title" id="basic-layout-tooltip">Create Tournament</h4>
            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
        </div>
        <div class="card-body collapse in">
            <div class="card-block">
            <form method="POST" class="form" action="{{ url('register')}}/{{$tournament->id}}">
                    @csrf
                    <div class="form-body">
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tournament_id">Tournament's Title</label>
                                    <input disabled type="text" id="tournament_id" class="form-control" value="{{$tournament->title}}" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Title Tournament" name="tournament_id">    
                                </div>
                                
                                <div class="form-group">
                                    <label for="team_name">Team Name</label>
                                    <input  type="text" id="team_name" class="form-control" name="team_name" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Team Name">
                                </div>
                            </div>
                
                            <div class="col-md-6">
                                <label for="img">Preview Team's Logo</label>    
                                <img id="image-preview" class="card-img-top img-fluid height-350" src="{{ url('/') }}/robust/app-assets/images/carousel/06.jpg" alt="image preview">
                                <div class="form-group mt-1">
                                    <label>Select File</label>
                                    <label id="projectinput7" class="file center-block">
                                        <input type="file" id="image-source" onchange="previewImage();">
                                        <span class="file-custom"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                
                        {{-- <div class="dropdown-divider"></div> --}}
                    </div>
                
                    <div class="form-actions">
                        <button type="button" class="btn btn-warning mr-1">
                            <i class="icon-cross2"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="icon-check2"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection