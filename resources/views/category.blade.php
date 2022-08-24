@extends("layouts.productList")

@section('content')
  @livewire('show-products', ['category' => $category->id,'isCateg' => true])
@endsection