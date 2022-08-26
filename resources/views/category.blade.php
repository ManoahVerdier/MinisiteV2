@extends("layouts.productList")

@section('content')
  @livewire('show-products', ['category' => $category->id,'isCateg' => true])
@endsection

<script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>