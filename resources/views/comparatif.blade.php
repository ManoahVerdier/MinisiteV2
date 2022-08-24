@extends("layouts.productList")

@section('content')
  @livewire('show-products', ['isCateg' => false,'search'=>$search])
@endsection