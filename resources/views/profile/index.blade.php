@extends('layouts.main')
@extends('layouts.nav')
@extends('layouts.side')
@extends('layouts.footer')

@section('title','Profile')

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title" id="basic-layout-colored-form-control">User Profile</h4>
            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
        </div>
        <div class="card-body collapse in">
            <div class="card-block">

                <form method="post" class="form" action="{{url('profile',['$user->id'])}}">
                    @method('put')
                    @csrf
                    @foreach ($user as $usr)
                        
                    <div class="form-body">
                        <h4 class="form-section"><i class="icon-eye6"></i> About User</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="text" id="name" class="form-control border-primary" value="{{$usr->name}}" placeholder="Name" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" class="form-control border-primary" value="{{$usr->email}}" placeholder="Email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control border-primary" name="password" placeholder="Enter Password">
                                </div>
                            </div>
                        </div>
                        <div class="row">        
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password">Re-password</label>
                                    <input id="password-confirm" type="password" class="form-control border-primary" name="password_confirmation" placeholder="Enter Password">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="form-actions right">
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