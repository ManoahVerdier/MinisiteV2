@extends('layouts/detachedLayoutMaster')

@section('title', $page->title)
@section('description', $page->description)

@section('body-attr')
id="home-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
    @include('layouts.partials.header.breadcrumbs')
@endsection


{{-- Content --}}
@section('content')
    <div class="container">
        
        
        
        <div class="row mt-4" id="product_carac">
            
            
            <div class="col-12">
                
                {!!$page->contenu!!}
            </div>
        </div>
        
    </div>
@endsection
{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection