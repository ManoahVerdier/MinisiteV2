@extends('layouts/detachedLayoutMaster')

@section('description', env('APP_NAME')." - Documentation")

@section('body-attr')
id="docs-page"
@endsection


{{-- Content --}}
@section('content')

<div class="container">
    <h1 class="w-100 text-center blue mb-4 mt-3">Documentation</h1>

    @foreach($pages as $page)
        <div class="row mx-2">
            <div class="col-12"><a class="h4 mb-2" href="{{route('page', ['slug' => $page->slug])}}">{{$page->title}}</a></div>
        </div>
    @endforeach
</div>
@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection