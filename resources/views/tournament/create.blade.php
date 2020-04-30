@extends('layouts.table')
@extends('layouts.nav')
@extends('layouts.side')
@extends('layouts.footer')

@section('title','Create a Tournament')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title" id="basic-layout-tooltip">Create Tournament</h4>
            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
        </div>
        <div class="card-body collapse in">
            <div class="card-block">

                <form method="POST" class="form" action="{{ url('tournament')}}">
                    @csrf
                    <div class="form-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Tournament's Title</label>
                                    <input type="text" id="title" class="form-control" placeholder="Title Tournament" name="title" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Title Tournament">
                                </div>
                                
                                <div class="form-group">
                                    <label for="promotor_id">Comppany</label>
                                    @foreach ($promotor as $pmtr)
                                    <input disabled type="text" id="promotor_id" class="form-control" value="{{$pmtr->company}}" name="promotor_id" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="promotor_id Name">
                                    @endforeach
                                </div>

                                {{-- <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="province">Province</label>
                                            <select id="province" name="status" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Province">
                                                <option value="not started">Province</option>
                                                @foreach ($provinces as $province)
                                                <option value="{{$province->id}}">{{$province->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <select id="city" name="status" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="City">
                                                <option value="not started">City</option>
                                                @foreach ($cities as $city)
                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="district">District</label>
                                            <select id="district" name="status" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="District">
                                                <option value="not started">District</option>
                                                @foreach ($districts as $district)
                                                <option value="{{$district->id}}">{{$district->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- <div class="form-group">
                                    <example-component>
                                        das
                                    </example-component>
                                    <form-location>
                                        ds
                                    </form-location>
                                </div> --}}
                                
                                <div class="form-group">
                                    <label for="description">Tournament's Title</label>
                                    <textarea id="description" rows="8" class="form-control" name="description" placeholder="Text your description" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Description"></textarea>
                                </div>
                            </div>
    
                            <div class="col-md-6">
                                <label for="img">Preview Poster</label>    
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

                        <div class="dropdown-divider"></div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Minimal Price Pool</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">Rp.</span>
                                        <input id="minPrice" type="number" class="form-control" placeholder="Minimal Price Pool" aria-label="Minimal Price Pool" name="minPrice" step="10000">
                                        <span class="input-group-addon">Rupiah</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Maximal Price Pool</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">Rp.</span>
                                        <input id="maxPrice" type="number" class="form-control" placeholder="Maximal Price Pool" aria-label="Maximal Price Pool" name="maxPrice" step="10000">
                                        <span class="input-group-addon">Rupiah</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dateRegisLimit">Date Limit Registration</label>
                                    <input type="date" id="dateRegisLimit" class="form-control" name="dateRegisLimit" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Registration Limit">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dateInitial">Date Initial</label>
                                    <input type="date" id="dateInitial" class="form-control datepicker" name="dateInitial" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date dateInitial">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dateFinal">Date Final</label>
                                    <input type="date" id="dateFinal" class="form-control datepicker" name="dateFinal" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date dateFinal">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="minAge">Minimal Age</label>
                                    <div class="input-group">
                                        <select id="minAge" name="minAge" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Minimal Age">
                                            <option value="Under">Under</option>
                                            @foreach ($ages as $age)
                                            <option value="{{$age->id}}">{{$age->name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="input-group-addon">Years</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="maxAge">Maximal Age</label>
                                    <div class="input-group">
                                        <select id="maxAge" name="maxAge" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Maximal Age">
                                            <option value="Over">Over</option>
                                            @foreach ($ages->reverse() as $age)
                                            <option value="{{$age->id}}">{{$age->name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="input-group-addon">Years</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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

@section('linkscript')
@endsection