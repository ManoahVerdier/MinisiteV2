@extends("layouts.productList")

@section('metadesc', "Recherche de produits")
@section('title', "Recherche de produits")

@section('content')
  
  @livewire('show-products', ['isCateg' => false,'search'=>$search])
@endsection

<script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>

