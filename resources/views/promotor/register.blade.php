@extends('layouts.main')
@extends('layouts.nav')
@extends('layouts.side')
@extends('layouts.footer')

@section('title','Registration to Promotor')

@section('content')
<section class="flexbox-container">
    <div class="col-lg-12">
        <div class="card border-grey border-lighten-3 px-2 py-2 mb-2">
            <div class="card-header no-border">
                <div class="card-title text-xs-center">
                    <div class="p-1"><img src="{{ url('/') }}/robust/app-assets/images/logo/robust-logo-dark.png" alt="branding logo"></div>
                </div>
                <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Create Promotor Account</span></h6>
            </div>
            <div class="card-body collapse in">	
                <div class="card-block">
                    <form method="POST" class="form-horizontal form-simple" action="{{ url('upgrade') }}">
                        @csrf
                        <fieldset class="form-group position-relative has-icon-left mb-1">
                            <input id="company" type="text" class="form-control form-control-lg input-lg @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}" required placeholder="Company Name" autocomplete="company" autofocus>
                            <div class="form-control-position">
                                <i class="icon-head"></i>
                            </div>
                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left mb-1">
                            <input id="phone" type="phone" class="form-control form-control-lg input-lg @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Your Phone Number">
                            <div class="form-control-position">
                                <i class="icon-mail6"></i>
                            </div>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left mb-1">
                            <input id="instagram" type="instagram" class="form-control form-control-lg input-lg @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') }}" required autocomplete="instagram" placeholder="Your Instagram Account">
                            <div class="form-control-position">
                                <i class="icon-mail6"></i>
                            </div>
                                @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left mb-1">
                            <input id="facebook" type="facebook" class="form-control form-control-lg input-lg @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}" required autocomplete="facebook" placeholder="Your Facebook Account">
                            <div class="form-control-position">
                                <i class="icon-mail6"></i>
                            </div>
                                @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </fieldset>
                        
                        <button type="submit" class="btn btn-primary"><i class="icon-unlock2"></i> Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection