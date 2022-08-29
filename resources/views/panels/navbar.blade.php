@if ($configData['mainLayoutType'] === 'horizontal' && isset($configData['mainLayoutType']))
<nav
    class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center {{ $configData['navbarColor'] }}"
    data-nav="brand-center">
    <div class="navbar-header d-xl-block d-none">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="navbar-brand" href="{{ url('/') }}">
            <span class="brand-logo">
              @if(App\Homepage::first()->logo??false)
                <img class=" mx-auto" src="{{  asset("storage/".App\Homepage::first()->logo)  }}"/>
              @else 
                <img class=" mx-auto" src="{{asset('img/header/logo.png')}}"/>
              @endif
            </span>
            <h2 class="brand-text mb-0">{{ App\Homepage::first()->title }}</h2>
          </a>
        </li>
      </ul>
    </div>
  @else
    <nav
      class="header-navbar navbar navbar-expand-lg align-items-center {{ $configData['navbarClass'] }} navbar-light navbar-shadow {{ $configData['navbarColor'] }} {{ $configData['layoutWidth'] === 'boxed' && $configData['verticalMenuNavbarType'] === 'navbar-floating'? 'container-xxl': '' }}">
@endif
<div class="navbar-container d-flex content">
  <div class="bookmark-wrapper d-flex align-items-center">
    <ul class="nav navbar-nav d-xl-none">
      <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
            data-feather="menu"></i></a></li>
    </ul>
  
    
  </div>
  <ul class="nav navbar-nav align-items-center ms-auto">
    
    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
          data-feather="{{ $configData['theme'] === 'dark' ? 'sun' : 'moon' }}"></i></a></li>
    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
          data-feather="search"></i></a>
      <div class="search-input">
        <div class="search-input-icon"><i data-feather="search"></i></div>
        <input class="form-control input" type="text" placeholder="Rechercher..." tabindex="-1" data-search="search">
        <div class="search-input-close"><i data-feather="x"></i></div>
        <ul class="search-list search-list-main"></ul>
      </div>
    </li>
    
    
  </ul>
  <span class="d-md-none brand-logo mx-auto" style="padding-right:70px">
    @if(App\Homepage::first()->logo??false)
      <img class=" mx-auto" src="{{  asset("storage/".App\Homepage::first()->logo)  }}" style="max-height:50px"/>
    @else 
      <img class=" mx-auto" src="{{asset('img/header/logo.png')}}" style="max-height:50px"/>
    @endif
  </span>
</div>
</nav>

{{-- Search Start Here --}}
<ul class="main-search-list-defaultlist d-none">
  
  
</ul>

{{-- if main search not found! --}}
<ul class="main-search-list-defaultlist-other-list d-none">
  <li class="auto-suggestion justify-content-between">
    <a class="d-flex align-items-center justify-content-between w-100 py-50">
      <div class="d-flex justify-content-start">
        <span class="me-75" data-feather="alert-circle"></span>
        <span>No results found.</span>
      </div>
    </a>
  </li>
</ul>
{{-- Search Ends --}}
<!-- END: Header-->
