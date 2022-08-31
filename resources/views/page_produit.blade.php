@extends('layouts/detachedLayoutMaster')

@section('title', $product->title)

@section('vendor-style')
  {{-- Vendor Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/swiper.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/jquery.rateyo.min.css'))}}">
@endsection


@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-ecommerce-details.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-number-input.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-ratings.css')) }}">
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
    <div class="card"  product-id="{{ $product->id }}">
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
              <div class="item-price mr-1 h4">{{ $product->prix ?? "" }} €</div>
                <ul class="unstyled-list list-inline pl-1 border-left">
                    @for($i=1;$i<=5;$i++)
                        @if($i<=$product->rating)
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
                <a href="{{ route("produitsInit") }}" class="btn btn-outline-secondary btn-wishlist mr-0 mr-sm-1 mb-1 mb-sm-0">
                  <i data-feather="list" class="mr-50"></i>
                  <span>Retour à la liste</span>
                </a>
                <a href="#" class="btn btn-outline-{{ $compared?"primary":"secondary" }} btn-comparison me-0 mr-sm-1 mb-1 mb-sm-0" product-id="{{ $product->id }}">
                  <i data-feather="award" class="mr-50 {{ $compared?"text-primary":"" }}"></i>
                  <span>{{ $compared?"Comparé":"Comparer" }}</span>
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
            <p class="h4">Vous aimerez aussi...</p>
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
                                    @if($i<=$p->rating)
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
    <div class="card-body">
      
        @if($product->reviews->count()>0)
        <!-- Reviews Products starts -->
        <div class="mt-4 mb-2 text-center">
          <p class="h4">Avis client</p>
      </div>
      <div class="col-12 mt-1" id="blogComment">
          @foreach($product->reviews as $r) 
            <div class="row">
              <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="avatar mr-75">
                                <img src="{{asset('images/portrait/small/avatar-s-9.jpg')}}" width="38" height="38" alt="Avatar" />
                            </div>
                            <div class="author-info">
                                <h6 class="fw-bolder mb-25">{{ $r->name }}</h6>
                                <p class="card-text">{{ $r->created_at }}</p>
                                <p class="card-text">
                                  <ul class="unstyled-list list-inline">
                                    @for($i=1;$i<=5;$i++)
                                        @if($i<=$r->global_rate)
                                            <li class="ratings-list-item"><i data-feather="star" height="20px" width="20px" class="h-auto w-auto filled-star text-primary fill-current"></i></li>
                                        @else 
                                            <li class="ratings-list-item"><i data-feather="star" height="20px" width="20px" class="h-auto w-auto unfilled-star"></i></li>
                                        @endif
                                    @endfor
                                </ul>  
                                </p>
                                <p class="card-text">
                                    {{ $r->comment }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
                <div class="col-md-4 col-12">
                    <div class="card">
                      <div class="card-header justify-content-center">
                        <p class="h4 card-title text-center">Synthèse des notes</h4>
                      </div>
                      <div class="card-body">
                        <div 
                            class="review-chart" 
                            id="radar-chart" 
                            data-rate-global="{{ $r->global_rate }}" 
                            data-rate-client="{{ $r->client_service_rate }}" 
                            data-rate-functionality="{{ $r->functionalities_rate }}" 
                            data-rate-price="{{ $r->price_rate }}" 
                            data-rate-interface="{{ $r->interface_rate }}"></div>
                      </div>
                    </div>
                  </div>
              </div>
            
          @endforeach 
        <!-- Reviews Products ends -->
      </div>
        @endif 
      
    </div>
    </div>
    
    
      <!-- Leave a Blog Comment -->
      <div class="col-12 mt-1">
        <h6 class="section-label mt-25">Ajouter un avis</h6>
        <div class="card">
          <div class="card-body">
            @if($user ?? false)
              <form action="{{ route("review") }}" class="form" method="POST">
                @csrf 
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="mb-2">
                      <input type="text" class="form-control" placeholder="Nom" name="name" value="{{ $user->name }}"/>
                    </div>
                    <textarea class="form-control mb-2" rows="6" placeholder="Commentaire" name="comment"></textarea>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="card mb-1 align-items-center">
                      <div class="card-header pt-0 pb-50">
                        <p class="h4 card-title">Note globale</h4>
                      </div>
                      <div class="card-body pb-50">
                        <div class="basic-ratings ratingStars" starWidth="26px"></div>
                        <input type="hidden" name="global_rate" value="5" class="counter"/>
                      </div>
                    </div>  
                    <div class="row">
                      <div class="col-md-6 col-12">
                        <div class="card mb-1 align-items-center">
                          <div class="card-header pt-0 pb-50">
                            <p class="h4 card-title">Service client</h4>
                          </div>
                          <div class="card-body pb-50">
                            <div class="basic-ratings ratingStars"></div>
                            <input type="hidden" name="client_service_rate" value="5" class="counter"/>
                          </div>
                        </div>
                        <div class="card mb-1 align-items-center">
                          <div class="card-header pt-0 pb-50">
                            <p class="h4 card-title">Fonctionnalités</h4>
                          </div>
                          <div class="card-body pb-50">
                            <div class="basic-ratings ratingStars"></div>
                            <input type="hidden" name="functionalities_rate" value="5" class="counter"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="card mb-1 align-items-center">
                          <div class="card-header pt-0 pb-50">
                            <p class="h4 card-title">Prix</h4>
                          </div>
                          <div class="card-body pb-50">
                            <div class="basic-ratings ratingStars"></div>
                            <input type="hidden" name="price_rate" value="5" class="counter"/>
                          </div>
                        </div>
                        <div class="card mb-1 align-items-center">
                          <div class="card-header pt-0 pb-50">
                            <p class="h4 card-title">Prise en main</h4>
                          </div>
                          <div class="card-body pb-50">
                            <div class="basic-ratings ratingStars"></div>
                            <input type="hidden" name="interface_rate" value="5" class="counter"/>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="product_id" value="{{ $product->id }}"/>
                  
                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                  </div>
                </div>
              </form>
              @else 
            <a href="{{ route("auth.redirect",["slug"=>$product->slug]) }}" class="btn btn-primary">Se connecter avec LinkedIn</a>
            @endif
          </div>
        </div>
      </div>
     
      <!--/ Leave a Blog Comment -->
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
  <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/jquery.rateyo.min.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/product.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/form-number-input.js')) }}"></script>
@endsection
