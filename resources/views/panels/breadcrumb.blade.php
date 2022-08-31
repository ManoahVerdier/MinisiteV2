<div class="content-header row">
  <div class="content-header-left col-12 mb-2">
    <div class="row breadcrumbs-top">
      <div class="col-12">
        
        <div class="breadcrumb-wrapper">
          @if(@isset($breadcrumbs))
          <ol class="breadcrumb">
              {{-- this will load breadcrumbs dynamically from controller --}}
              @foreach ($breadcrumbs as $breadcrumb)
              <li class="breadcrumb-item">
                  @if(isset($breadcrumb['link']))
                  <a href="{{ $breadcrumb['link'] == 'javascript:void(0)' ? $breadcrumb['link']:url($breadcrumb['link']) }}">
                      @endif
                      {{$breadcrumb['name']}}
                      @if(isset($breadcrumb['link']))
                  </a>
                  @endif
              </li>
              @endforeach
          </ol>
          @endisset
        </div>
        @if(@isset($title))
          <h1 class="text-center content-header-title float-start mb-0 border-0">@yield('title')</h1>
        @endisset
        @if(@isset($subtitle))
          <h2 class="text-center h4 text-secondary mb-0 border-0">@yield('subtitle')</h2>
        @endisset
      </div>
    </div>
  </div>
  
</div>
