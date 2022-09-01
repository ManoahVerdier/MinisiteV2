@if(!@isset($hp))
  <!-- BEGIN: Vendor CSS-->
  @if ($configData['direction'] === 'rtl' && isset($configData['direction']))
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/vendors-rtl.min.css')) }}" />
  @else
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/vendors.min.css')) }}" />
  @endif
@endisset
@yield('vendor-style')
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link  rel="stylesheet"  href="{{ asset(mix('css/core.css')) }}" />
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="{{ asset(mix('css/base/themes/dark-layout.css')) }}" />



@php $configData = Helper::applClasses(); @endphp

<!-- BEGIN: Page CSS-->
@if ($configData['mainLayoutType'] === 'horizontal')
  <link rel="stylesheet" href="{{ asset(mix('css/base/core/menu/menu-types/horizontal-menu.css')) }}" />
@else
  <link rel="stylesheet" href="{{ asset(mix('css/base/core/menu/menu-types/vertical-menu.css')) }}" />
@endif

{{-- Page Styles --}}
@yield('page-style')

<!-- laravel style -->
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"href="{{ asset(mix('css/overrides.css')) }}" />

<!-- BEGIN: Custom CSS-->
