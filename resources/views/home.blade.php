@extends('layouts/detachedLayoutMaster')

@section('title', App\Homepage::first()->metatitle  )
@section('description', App\Homepage::first()->metadesc)

@section('body-attr')
id="home-page"
@endsection



{{-- UPDATE --}}
@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/base/pages/page-blog.css') }}" />
@endsection

@section('content-sidebar')
    @include('home-sidebar')
@endsection

@section('content')
<!-- Blog Detail -->
<div class="blog-detail-wrapper">
  <div class="row">
    <!-- Blog -->
    <div class="col-12">
        @foreach($produits as $p)
            <div class="card">
                <img
                src="{{ URL::asset("storage/".$p->image) }}"
                class="img-fluid card-img-top"
                alt="Blog Detail Pic"
                />
                <div class="card-body">
                <h4 class="card-title">{{ $p->title }}</h4>
                <div class="my-1 py-25">
                    @if(! is_null($p->category))
                        @if(! is_null($p->category->parent_category))
                            <a href="{{ route("category",$p->category->parent_category->slug) }}">
                                    <span class="badge rounded-pill badge-primary me-50">{{ $p->category->parent_category->name }}</span>
                            </a>
                            <a href="{{ route("category",$p->category->slug) }}">
                                <span class="badge rounded-pill badge-light-primary me-50">{{ $p->category->name }}</span>
                            </a>
                        @else
                            <a href="{{ route("category",$p->category->slug) }}">
                                <span class="badge rounded-pill badge-primary me-50">{{ $p->category->name }}</span>
                            </a>
                        @endif
                    @endif
                </div>
                <p class="card-text mb-2">
                    {!! $p->description !!}
                </p>
                <h4 class="mb-75">Caractéristiques</h4>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ul class="product-features list-unstyled">
                            @foreach(\App\Attribute::where("type","<>","radio_btn")->where("type","<>","rich_text_box")->get() as $attribute)
                                <li><i data-feather="award"></i><span>{{ $attribute->displayName }}</span>&nbsp;:&nbsp;<span class="text-primary">{{ $p[lcfirst($attribute->name)] }} @if($attribute->name=="prix") € @endif</span>
                            @endforeach
                        </ul>
                    </div> 
                    <div class="col-12 col-md-6">
                        <ul class="product-features list-unstyled">
                            @foreach(\App\Attribute::where("type","radio_btn")->get() as $attribute)
                                @if($p[lcfirst($attribute->name)])
                                    <li><i data-feather="check-square"></i><span>{{ $attribute->displayName }}</span>
                                @else 
                                    <li><i data-feather="square"></i><span><s>{{ $attribute->displayName }}</s></span>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                
                
                <hr class="my-2" />
                <div class="d-flex align-items-center justify-content-between flex-column flex-md-row">
                    <div class="d-flex align-items-center">
                        <ul class="unstyled-list list-inline pl-0 pl-md-1">
                            @for($i=1;$i<=5;$i++)
                                @if($i<=$p->stars)
                                    <li class="ratings-list-item"><i data-feather="star" height="20px" width="20px" class="h-auto w-auto filled-star text-primary fill-current"></i></li>
                                @else 
                                    <li class="ratings-list-item"><i data-feather="star" height="20px" width="20px" class="h-auto w-auto unfilled-star"></i></li>
                                @endif
                            @endfor
                        </ul>
                    </div>
                    <div>
                        <a href="{{ $p->link }}" class="btn btn-primary btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0">
                          <i data-feather="shopping-cart" class="mr-50"></i>
                          <span class="add-to-cart">Acheter</span>
                        </a>
                        <a href="{{route("produit",$p->slug)}}" class="btn btn-outline-secondary btn-wishlist mr-0 mr-sm-1 mb-1 mb-sm-0">
                          <i data-feather="eye" class="mr-50"></i>
                          <span>Voir la fiche</span>
                        </a>
                    </div>
                    
                </div>
                </div>
            </div>
        @endforeach
    </div>
    <!--/ Blog -->

  </div>
</div>
<!--/ Blog Detail -->
@endsection

{{-- End update --}}
