@extends("layouts.productList")

@section('content')
  @livewire('show-products', ['isCateg' => false,'search'=>$search])
@endsection

<script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>

@section('vendor-script')
  <!-- Vendor js files -->
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@endsection
