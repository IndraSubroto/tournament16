@section('nav')
<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav">
          <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
          <li class="nav-item"><a href="index.html" class="navbar-brand nav-link"><img alt="branding logo" src="{{ url('/') }}/robust/app-assets/images/logo/robust-logo-light.png" data-expand="{{ url('/') }}/robust/app-assets/images/logo/robust-logo-light.png" data-collapse="{{ url('/') }}/robust/app-assets/images/logo/robust-logo-small.png" class="brand-logo"></a></li>
          <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
        </ul>
      </div>
      
      <div class="navbar-container content container-fluid">
        <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
          <ul class="nav navbar-nav float-xs-right">
            <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-bell4"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 New</span></h6>
                </li>
                <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
                    <div class="media">
                      <div class="media-left valign-middle"><i class="icon-cart3 icon-bg-circle bg-cyan"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">You have new order!</h6>
                        <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                          <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time></small>
                      </div>
                    </div></a></li>
                <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a></li>
              </ul>
            </li>

            <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-mail6"></i><span class="tag tag-pill tag-default tag-info tag-default tag-up">8</span></a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag tag tag-default tag-info float-xs-right m-0">4 New</span></h6>
                </li>
                <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
                    <div class="media">
                      <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="{{ url('/') }}/robust/app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                      <div class="media-body">
                        <h6 class="media-heading">Eric Alsobrook</h6>
                        <p class="notification-text font-small-3 text-muted">We have project party this saturday night.</p><small>
                          <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">last month</time></small>
                      </div>
                    </div></a></li>
                <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all messages</a></li>
              </ul>
            </li>

            @auth
            @guest
            <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else   
            <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="{{ url('/') }}/robust/app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name">{{ Auth::user()->name }}</span></a>            
              <div class="dropdown-menu dropdown-menu-right">
                
                @can('isMember')
                <a href="{{url('upgrade')}}" class="dropdown-item"><i class="icon-banknote icon-bg-circle bg-warning"></i> Upgrade to Promotor</a>
                @endcan
                @cannot('isMember')
                <a href="{{url('tournament/create')}}" class="dropdown-item"><i class="icon-head  icon-bg-circle bg-warning"></i>Create a Tournament</a>
                @endcannot
                @cannot('isAdmin')
                <a href="{{url('profile')}}" class="dropdown-item"><i class="icon-head icon-bg-circle bg-info"></i> Edit Profile</a>
                <div class="dropdown-divider"></div>
                @endcannot

              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-power3 icon-bg-circle bg-danger"></i> {{ __('Sign Out') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
            @endguest
            @else
            <li class="dropdown dropdown-notification nav-item"><a href="{{ route('login') }}" class="nav-link nav-link-label"><i class="ficon icon-log-in"></i>Sign In</a></li>
            @if (Route::has('register'))
            <li class="dropdown dropdown-notification nav-item"><a href="{{ route('register') }}" class="nav-link nav-link-label"><i class="ficon icon-registration"></i>Sign Up</a></li>
            @endif  </li>
            @endauth
          </ul>
        </div>
      </div>
    </div>
</nav>
@endsection