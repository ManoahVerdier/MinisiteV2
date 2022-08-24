@extends('layouts/detachedLayoutMaster')

@section('title',  $title ?? "" )
@section('vendor-style')
<!-- Vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/nouislider.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
@endsection
@section('page-style')
<!-- Page css files -->
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-sliders.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/productList.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
@endsection

@section('vendor-script')
<!-- Vendor js files -->
<script src="{{ asset(mix('vendors/js/extensions/wNumb.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/nouislider.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@endsection
@section('page-script')
<!-- Page js files -->
<script src="{{ asset(mix('js/productList.js')) }}"></script>
@endsection
