@extends('layouts/detachedLayoutMaster')

@section('title', App\Homepage::first()->metatitle  )
@section('metadesc', App\Homepage::first()->metadesc)

@section('body-attr')
id="home-page"
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/base/pages/page-blog.css') }}" />
@endsection

@section('content-sidebar')
    @include('home-sidebar')
@endsection

@section('content')

<style>
.product.card img{
max-height:400px;
max-width:400px;
margin-left:auto;
margin-right:auto;
padding-top:20px;
padding-bottom:20px;
}
</style>

<!-- Blog Detail -->
<div class="blog-detail-wrapper">
  <div class="row">
    <!-- Blog -->
    <div class="col-12">
        @foreach($produits as $p)
            <div class="card product">
                <img
                src="{{ URL::asset("storage/".$p->image) }}"
                srcset="{{ URL::asset("storage/".$p->image) }} 2400w, {{ URL::asset("storage/".str_replace(".jpg","-medium.jpg",$p->image)) }} 1200w, {{ URL::asset("storage/".str_replace(".jpg","-small.jpg",$p->image)) }} 600w"
                class="img-fluid card-img-top"
                alt="Blog Detail Pic"
                />
                <div class="card-body">
                <h2 class="h4 card-title">{{ $p->title }}</h2>
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
                <p class="h4 mb-75">Caractéristiques</p>
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
                                @if($i<=$p->rating)
                                    <li class="ratings-list-item"><i data-feather="star" height="20px" width="20px" class="h-auto w-auto filled-star text-primary fill-current"></i></li>
                                @else
                                    <li class="ratings-list-item"><i data-feather="star" height="20px" width="20px" class="h-auto w-auto unfilled-star"></i></li>
                                @endif
                            @endfor
                        </ul>
                    </div>
                    <div>
                        <a href="{{ $p->link }}" class="btn btn-primary btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0" style="background-color:#EB8D03 !important;border-color:#EB8D03 !important;">
                          <span class="add-to-cart">Voir le prix</span>
                          <i data-feather="chevron-right" class="ml-50"></i>
                        </a>
                        <a href="{{route("produit",$p->slug)}}" class="btn btn-outline-secondary btn-wishlist mr-0 mr-sm-1 mb-1 mb-sm-0">
                          <i data-feather="book-open" class="mr-50"></i>
                          <span>Lire l'article</span>
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
