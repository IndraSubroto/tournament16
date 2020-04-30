@extends('layouts.auth')

@section('title','Register')

@section('content')
<section class="flexbox-container">
    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
            <div class="card-header no-border">
                <div class="card-title text-xs-center">
                    <div class="p-1"><img src="{{ url('/') }}/robust/app-assets/images/logo/robust-logo-dark.png" alt="branding logo"></div>
                </div>
                <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Create Account</span></h6>
            </div>
            <div class="card-body collapse in">	
                <div class="card-block">
                    <form method="POST" class="form-horizontal form-simple" action="{{ route('register') }}">
                        @csrf
                        <fieldset class="form-group position-relative has-icon-left mb-1">
                            <input id="name" type="text" class="form-control form-control-lg input-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="User Name" autocomplete="name" autofocus>
                            <div class="form-control-position">
                                <i class="icon-head"></i>
                            </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left mb-1">
                            <input id="email" type="email" class="form-control form-control-lg input-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email Address">
                            <div class="form-control-position">
                                <i class="icon-mail6"></i>
                            </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left">
                            <input id="password" type="password" class="form-control form-control-lg input-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">
                            <div class="form-control-position">
                                <i class="icon-key3"></i>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left">
                            <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" placeholder="Enter Password">
                            <div class="form-control-position">
                                <i class="icon-key3"></i>
                            </div>
                        </fieldset>
                        
                        <button type="submit" class="btn btn-primary"><i class="icon-unlock2"></i> Register</button>
                    </form>
                </div>
                <p class="text-xs-center">Already have an account ? <a href="{{ route('login') }}" class="card-link">Login</a></p>
            </div>
        </div>
    </div>
</section>

@endsection
