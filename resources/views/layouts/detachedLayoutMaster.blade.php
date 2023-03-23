@isset($pageConfigs)
  {!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
@php $configData = Helper::applClasses(); @endphp

<html class="loading {{ $configData['theme'] === 'light' ? '' : $configData['layoutTheme'] }}"
  lang="@if (session()->has('locale')){{ session()->get('locale') }}@else{{ $configData['defaultLanguage'] }}@endif" data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}"
  @if ($configData['theme'] === 'dark') data-layout="dark-layout" @endif>

  @livewireStyles

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
    content="@yield("metadesc")">
    <meta name="keywords"
      content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('images/ico/favicon-32x32.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
      rel="stylesheet">
    <meta id="rechercheAjaxUrl" value="{{ route("rechercheAjax",["search"=>"%"]) }}">
    <meta id="productUrl" value="{{ route("produit",["slug"=>"%"]) }}">
    <meta id="categoryUrl" value="{{ route("category",["slug"=>"%"]) }}">
    {{-- Include core + vendor Styles --}}
    @include('panels/styles')
  </head>

@isset($configData['mainLayoutType'])
  @extends((( $configData["mainLayoutType"] === 'horizontal') ? 'layouts.horizontalDetachedLayoutMaster' :
  'layouts.verticalDetachedLayoutMaster' ))
@endisset
