@section('side')
<div class="main-menu-content">
    <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
      <li class="nav-item"><a href="{{ url('/') }}"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span></a>
      </li>
      <li class="nav-item"><a href="{{ url('tournament') }}"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Tournament</span></a>
      </li>

      @can('isMember', Model::class)
      <li class="nav-item"><a href="{{'mylist'}}"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">My Tournament</span></a>
      </li>
      @endcan
      @cannot('isMember', Model::class)
      <li class="nav-item"><a href="{{'list'}}"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">My Tournament</span></a>
      </li>
      @endcannot
      
      
      <li class=" navigation-header"><span data-i18n="nav.category.support">Support</span><i data-toggle="tooltip" data-placement="right" data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i>
      </li>
      <li class=" nav-item"><a href="{{ url('/') }}"><i class="icon-document-text"></i><span data-i18n="nav.support_documentation.main" class="menu-title">Documentation</span></a>
      </li>
      <li class="disabled nav-item"><a href="#"><i class="icon-eye-disabled"></i><span data-i18n="nav.disabled_menu.main" class="menu-title">Disabled Menu</span></a>
      </li>
    </ul>
</div>
@endsection