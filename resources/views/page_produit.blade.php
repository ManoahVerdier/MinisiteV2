@extends('layouts/detachedLayoutMaster')

@section('title', $product->title)

@section('vendor-style')
  {{-- Vendor Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/swiper.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
@endsection

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-ecommerce-details.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-number-input.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
@endsection

@section('description', $product->description)

@section('body-attr')
id="home-page"
@endsection
@php
    $page=$product;
@endphp
{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
    @include('layouts.partials.header.breadcrumbs')
@endsection


{{-- Content --}}
@section('content')
<section class="app-ecommerce-details">
    <div class="card">
      <!-- Product Details starts -->
      <div class="card-body">
        <div class="row my-2">
          <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
            <div class="d-flex align-items-center justify-content-center">
              <img
                src="{{ URL::asset("storage/".$product->image) }}"
                class="img-fluid product-img"
                alt="{{ $product->title }}"
              />
            </div>
          </div>
          <div class="col-12 col-md-7">
            <h4>{{ $product->title }}</h4>
            <span class="card-text item-company">De <a href="#" class="company-name">{{ $product->brand }}</a></span>
            <div class="ecommerce-details-price d-flex flex-wrap mt-1">
              <h4 class="item-price mr-1">{{ $product->prix ?? "" }} €</h4>
                <ul class="unstyled-list list-inline pl-1 border-left">
                    @for($i=1;$i<=5;$i++)
                        @if($i<=$product->stars)
                            <li class="ratings-list-item"><i data-feather="star" height="20px" width="20px" class="h-auto w-auto filled-star text-primary fill-current"></i></li>
                        @else 
                            <li class="ratings-list-item"><i data-feather="star" height="20px" width="20px" class="h-auto w-auto unfilled-star"></i></li>
                        @endif
                    @endfor
                </ul>
            </div>
            
            <p class="card-text">
              {!! $product->description !!}
            </p>
            <div class="row">
                <div class="col-12 col-md-6">
                    <ul class="product-features list-unstyled">
                        @foreach(\App\Attribute::where("type","<>","radio_btn")->where("type","<>","rich_text_box")->get() as $attribute)
                            <li><i data-feather="award"></i><span>{{ $attribute->displayName }}</span>&nbsp;:&nbsp;<span class="text-primary">{{ $product[lcfirst($attribute->name)] }} @if($attribute->name=="prix") € @endif</span>
                        @endforeach
                    </ul>
                </div> 
                <div class="col-12 col-md-6">
                    <ul class="product-features list-unstyled">
                        @foreach(\App\Attribute::where("type","radio_btn")->get() as $attribute)
                            @if($product[lcfirst($attribute->name)])
                                <li><i data-feather="check-square"></i><span>{{ $attribute->displayName }}</span>
                            @else 
                                <li><i data-feather="square"></i><span><s>{{ $attribute->displayName }}</s></span>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <hr/>
            <div class="d-flex flex-column flex-sm-row pt-1">
                <a href="{{ $product->link }}" class="btn btn-primary btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0">
                  <i data-feather="shopping-cart" class="mr-50"></i>
                  <span class="add-to-cart">Acheter</span>
                </a>
                <a href="#" class="btn btn-outline-secondary btn-wishlist mr-0 mr-sm-1 mb-1 mb-sm-0">
                  <i data-feather="list" class="mr-50"></i>
                  <span>Retour à la liste</span>
                </a>
                
              </div>
            </div>
          </div>
        </div>
        <!-- Item features starts -->
        <div class="item-features">
            <div class="row text-center">
                @forelse(\App\Attribute::where("type","rich_text_box")->get() as $attribute)
                    <div class="col-12 mb-4 mb-md-0">
                        <div class="w-75 mx-auto">
                        <i data-feather="award"></i>
                        <h4 class="mt-2 mb-1">{{ $attribute->displayName }}</h4>
                        <p class="card-text">{{ $product[$attribute->name] }}</p>
                        </div>
                    </div>
                @empty 
                    <div class="col-12 mb-4 mb-md-0">
                        {{ $product->meta_desc }}
                    </div>
                @endforelse 
            </div>
        </div>
        <!-- Item features ends -->
    

    <div class="card-body my-4">
        <div class="row">
            <div class="col-sm-12 col-md-1"></div>
            <div class="col-sm-12 col-md-5">
                <div class="bg-primary text-white d-inline-block h-100 w-100 rounded-3 mr-5 p-4 product_pro_cons" id="product_pros">
                    <p class="h3 text-center text-white">Points forts</p>
                    <div class="text-white">{!!$product->pros!!}</div>
                </div>
            </div>
            
            <div class="col-sm-12 col-md-5">
                <div class=" ml-md-5 mt-3 mt-md-0 p-4 h-100  w-100 d-inline-block border border-2 border product_pro_cons" id="product_cons"  >
                    <p class="h3 text-center">Points faibles</p>
                    {!!$product->cons!!}
                </div>
            </div>
            <div class="col-sm-12 col-md-1"></div>
        </div>
    </div> 

    @if($product->category->products->count()>1)
        <!-- Related Products starts -->
        <div class="card-body">
            <div class="mt-4 mb-2 text-center">
            <h4>Vous aimerez aussi...</h4>
            <p class="card-text">{{ $product->category->name }}</p>
            </div>
            <div class="swiper-responsive-breakpoints swiper-container px-4 py-2">
            <div class="swiper-wrapper">
                @foreach($product->category->products as $p)
                    @if($product->id != $p->id)
                        <div class="swiper-slide">
                        <a href="#">
                            <div class="item-heading">
                            <h5 class="text-truncate mb-0">{{ $p->title }}</h5>
                            <small class="text-body">{{ $p->brand }}</small>
                            </div>
                            <div class="img-container w-50 mx-auto py-75">
                            <img src="{{ URL::asset("storage/".$p->image) }}" class="img-fluid" alt="image" />
                            </div>
                            <div class="item-meta">
                            <ul class="unstyled-list list-inline mb-25">
                                @for($i=1;$i<=5;$i++)
                                    @if($i<=$p->stars)
                                        <li class="ratings-list-item"><i data-feather="star" height="20px" width="20px" class="h-auto w-auto filled-star text-primary fill-current"></i></li>
                                    @else 
                                        <li class="ratings-list-item"><i data-feather="star" height="20px" width="20px" class="h-auto w-auto unfilled-star"></i></li>
                                    @endif
                                @endfor
                            </ul>
                            <a href="{{ $p->link }}" class="btn btn-primary btn-cart mb-1 mb-sm-0 mt-2">
                                <i data-feather="shopping-cart" class="mr-50"></i>
                                <span class="add-to-cart">Acheter</span>
                              </a>
                            </div>
                        </a>
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            </div>
        </div>
        <!-- Related Products ends -->
    @endif
    </div>
    
@endsection
{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection

@section('vendor-script')
  {{-- Vendor js files --}}
  <script src="{{ asset(mix('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/swiper.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/product.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/form-number-input.js')) }}"></script>
@endsection