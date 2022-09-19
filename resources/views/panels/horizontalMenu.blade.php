@php
$configData = Helper::applClasses();
@endphp
{{-- Horizontal Menu --}}

<div class="horizontal-menu-wrapper">

  <div class="header-navbar navbar-expand-sm navbar navbar-horizontal
  {{$configData['horizontalMenuClass']}}
  {{($configData['theme'] === 'dark') ? 'navbar-dark' : 'navbar-light' }}
  navbar-shadow menu-border
  {{ ($configData['layoutWidth'] === 'boxed' && $configData['horizontalMenuType']  === 'navbar-floating') ? 'container-xxl' : '' }}"
  role="navigation"
  data-menu="menu-wrapper"
  data-menu-type="floating-nav">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item me-auto">
          <a class="navbar-brand" href="{{url('/')}}">
            <span class="brand-logo">
              @if(App\Homepage::first()->logo??false)
                <img class=" mx-auto" src="{{  asset("storage/".App\Homepage::first()->logo)  }}"/>
              @else 
                <img class=" mx-auto" src="{{asset('img/header/logo.png')}}"/>
              @endif
            </span>
            <p class="h2 brand-text mb-0">{{ \App\Homepage::first()->site_name }}</p>
          </a>
        </li>
        <li class="nav-item nav-toggle">
          <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
            <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
          </a>
        </li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
    <!-- Horizontal menu content-->
    <div class="navbar-container main-menu-content" data-menu="menu-container">
      {{menu('main_menu','layouts.partials.header.voyager_menu')}}
    </div>
  </div>
</div>
