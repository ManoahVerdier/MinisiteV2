

@section('content-sidebar')
  <!-- ProductList Sidebar Starts -->
  <div class="sidebar-shop">
    <div class="row">
      <div class="col-sm-12">
        <p class="h6 filter-heading d-none d-lg-block">Filtres</p>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <p class="h4 filter-heading text-center d-block d-lg-none">Filtres</p>
        @if(! $isCateg)
          <!-- Categories Starts -->
          <div id="product-categories">
            <p class="h6 filter-title">Catégories</p>
            <ul class="list-unstyled categories-list">
              @foreach(\App\Category::where("parent_id",null)->get() as $categ)
                <li>
                  <div class="form-check">
                    <input wire:model.live="category" type="radio" id="category{{ $categ->id }}" name="category-filter" class="categUpdate form-check-input" {{ (isset($category) && $category == $categ->id) ? "checked" : "" }} value="{{ $categ->id }}" />
                    <label class="form-check-label" for="category{{ $categ->id }}">{{ $categ->name }}</label>
                  </div>
                </li>
                @foreach($categ->childs as $sub)
                  <li class="ml-1">
                    <div class="form-check">
                      <input wire:model.live="category" type="radio" id="category{{ $sub->id }}" name="category-filter" class="categUpdate form-check-input" {{ (isset($category) && $category == $sub->id) ? "checked" : "" }} value="{{ $sub->id }}" />
                      <label class="form-check-label" for="category{{ $sub->id }}">{{ $sub->name }}</label>
                    </div>
                  </li>
                @endforeach
              @endforeach
              
            </ul>
          </div>
          <!-- Categories Ends -->
        @endif
        

        <!-- Slider starts -->
        @foreach($filtersNum as $filter)
          @if($filter->min < $filter->max)
            <div class="price-slider" >
              <p class="h6 filter-title">{{ $filter->displayName}}</p>
              <div class="price-slider px-1" >
                <div class="{{ $filter->name}}-slider slider range-slider mt-2" id="price-slider" min="{{ $filter->min }}" max="{{ $filter->max }}" name="{{ $filter->name }}"></div>
              </div>
            </div>
          @endif
        @endforeach
        <!-- Slider ends -->

        

        <!-- Attributes starts -->
        <div class="attributes mt-5">
          <p class="h6 filter-title">Attributs</p>
          <ul class="list-unstyled brand-list">
            @foreach($filtersBool as $filter)
            <li>
              <div class="form-check">
                <!--<input type="checkbox" wire:click="$emit('boolUpdated','{{ $filter->name }}')" class="form-check-input" id="check_{{ $filter->name }}" />-->
                <input type="checkbox" name="{{ $filter->name }}" class="checkboxUpdate form-check-input" id="check_{{ $filter->name }}" />
                <label class="form-check-label" for="check_{{ $filter->name }}">{{ $filter->displayName }}</label>
              </div>
              <span class="number"></span>
            </li>
            @endforeach
            
          </ul>
        </div>
        <!-- Attributes ends -->

        <!-- Rating starts -->
        <div id="ratings">
          <p class="h6 filter-title">Notes</p>
          <div class="ratings-list flex-column">
            <div class="form-check">
              <input wire:model.live="rate" type="radio" id="rate0" name="rate-filter" class="rateUpdate form-check-input" value="0" />
              <label href="#" class="mb-0">
                <ul class="unstyled-list list-inline">
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                </ul>
              </label>
            </div>
            <div class="form-check">
              <input wire:model.live="rate" type="radio" id="rate1" name="rate-filter" class="rateUpdate form-check-input" value="1" />
              <label href="#" class="mb-0">
                <ul class="unstyled-list list-inline">
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                </ul>
              </label>
            </div>
            <div class="form-check">
              <input wire:model.live="rate" type="radio" id="rate2" name="rate-filter" class="rateUpdate form-check-input" value="2" />
              <label href="#" class="mb-0">
                <ul class="unstyled-list list-inline">
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                </ul>
              </label>
            </div> 
            <div class="form-check">
              <input wire:model.live="rate" type="radio" id="rate3" name="rate-filter" class="rateUpdate form-check-input" value="3" />
              <label href="#" class="mb-0">
                <ul class="unstyled-list list-inline">
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                </ul>
              </label>
            </div>
            <div class="form-check">
              <input wire:model.live="rate" type="radio" id="rate4" name="rate-filter" class="rateUpdate form-check-input" value="4" />
              <label href="#" class="mb-0" >
                <ul class="unstyled-list list-inline">
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                </ul>
              </label>
            </div>
            <div class="form-check">
              <input wire:model.live="rate" type="radio" id="rate0" name="rate-filter" class="rateUpdate form-check-input" value="5" />
              <label href="#" class="mb-0">
                <ul class="unstyled-list list-inline">
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                  <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                </ul>
              </label>
            </div>
          </div>
          
        </div>
        <!-- Rating ends -->

        <!-- Clear Filters Starts -->
        <div id="clear-filters">
          <button wire:click="reinit" type="button" class="btn w-100 btn-primary btn-reinit">Réinitialiser</button>
        </div>
        <!-- Clear Filters Ends -->
      </div>
    </div>
  </div>
  <!-- Ecommerce Sidebar Ends -->
@endsection

<div class="content">
  <!-- Début de l'entête des produits -->
  <section id="products-header">
    <div class="row">
      <div class="col-sm-12">
        <div class="ecommerce-header-items">
          <div class="result-toggler">
            <button class="navbar-toggler shop-sidebar-toggler" type="button" data-bs-toggle="collapse">
              <span class="navbar-toggler-icon d-block d-lg-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
              </span>
            </button>
            <div class="search-results">{{ $products->total() }} résultat{{ $products->total() > 1 ? "s" : "" }}</div> 
          </div>
          <div class="view-options d-flex">
            <div class="btn-group dropdown-sort">
              <button
                type="button"
                class="btn btn-outline-primary dropdown-toggle me-1"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                wire:model="orderBy"
              >
                <span class="active-sorting">@if($orderBy=="id") Recommandé @else @if($orderDirection=="asc") Notes croissantes @else Notes décroissantes @endif @endif</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item orderUpdate @if($orderBy="id") selected @endif" href="#" orderBy="id"   orderDirection="asc">Recommandé</a>
                <a class="dropdown-item orderUpdate @if($orderBy="rate" && $orderDirection="asc") selected @endif" href="#" orderBy="rate" orderDirection="asc">Notes croissantes</a>
                <a class="dropdown-item orderUpdate @if($orderBy="rate" && $orderDirection="desc") selected @endif" href="#" orderBy="rate" orderDirection="desc">Notes décroissantes</a>
              </div>
            </div>
            <div class="btn-group d-none d-md-flex" role="group">
              <input type="radio" class="btn-check" name="radio_options" id="radio_option1" autocomplete="off" checked  />
              <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn" for="radio_option1">
                <svg data-v-15eba8c6="" xmlns="http://www.w3.org/2000/svg" width="20px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="font-medium-3 feather feather-grid"><rect data-v-15eba8c6="" x="3" y="3" width="7" height="7"></rect><rect data-v-15eba8c6="" x="14" y="3" width="7" height="7"></rect><rect data-v-15eba8c6="" x="14" y="14" width="7" height="7"></rect><rect data-v-15eba8c6="" x="3" y="14" width="7" height="7"></rect></svg>                
              </label>
              <input type="radio" class="btn-check" name="radio_options" id="radio_option2" autocomplete="off" />
              <label class="btn btn-icon btn-outline-primary view-btn list-view-btn" for="radio_option2">
                <svg data-v-15eba8c6="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="font-medium-3 feather feather-list"><line data-v-15eba8c6="" x1="8" y1="6" x2="21" y2="6"></line><line data-v-15eba8c6="" x1="8" y1="12" x2="21" y2="12"></line><line data-v-15eba8c6="" x1="8" y1="18" x2="21" y2="18"></line><line data-v-15eba8c6="" x1="3" y1="6" x2="3.01" y2="6"></line><line data-v-15eba8c6="" x1="3" y1="12" x2="3.01" y2="12"></line><line data-v-15eba8c6="" x1="3" y1="18" x2="3.01" y2="18"></line></svg>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin de l'en-tête des produits -->

  <!-- background Overlay when sidebar is shown (mobile) starts-->
  <div class="body-content-overlay"></div>
  <!-- background Overlay when sidebar is shown (mobile) ends-->

  <!-- Début de la barre de recherche -->
  <section id="products-searchbar" class="ecommerce-searchbar">
    <div class="row mt-1">
      <div class="col-sm-12">
        <div class="input-group input-group-merge">
          <input
            type="text"
            class="form-control search-product"
            id="shop-search"
            placeholder="Rechercher"
            aria-label="Rechercher..."
            aria-describedby="shop-search"
            wire:model.debounce.350ms="search"
          />
          <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin de la barre de recherche -->

    

  <!-- Début des produits -->
  <section id="products" class="grid-view">
    @forelse($products as $product)
      @php 
        $compared=false;
        if(session()->has("productsComparedLst")) {
            $productsCompared = session("productsComparedLst");
            if($productsCompared->contains("id",$product->id)){
                $compared=true;
            }
        }
      @endphp 
      <div class="card ecommerce-card" product-id="{{ $product->id }}">
        <div class="item-img text-center">
          <a href="{{ $product->link }}">
            <img
              class="img-fluid card-img-top"
              src="{{ URL::asset("storage/".$product->image) }}"
              alt="img-placeholder"
            />
          </a>
          <a href="#" class="comparison-list position-absolute btn btn-circle float-right btn-{{ $compared?"primary":"outline-primary" }} btn-comparison me-0 mr-sm-1 mb-1 mb-sm-0"  product-id="{{ $product->id }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="{{ $compared?"text-white":"" }} feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
          </a>
        </div>
        
        <div class="card-body">
          <div class="item-wrapper">
            <div class="item-rating">
              <ul class="unstyled-list list-inline">
                @for($i=1;$i<=5;$i++)
                        @if($i<=$product->rating)
                            <li class="ratings-list-item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star h-auto w-auto  text-primary fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            </li>
                        @else 
                            <li class="ratings-list-item">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star h-auto w-auto  unfilled-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            </li>
                        @endif
                    @endfor
              </ul>
            </div>
            <div>
              <h2 class="h6 item-price">{{ isset($product->prix) ? $product->prix." €" : "" }}</h2>
            </div>
          </div>
          <p class="h6 item-name">
            <a class="text-body" href="{{ $product->link }}">{{ $product->title }}</a>
            <span class="card-text item-company">De <a href="#" class="company-name">{{ $product->brand }}</a></span>
            
          </p>
          <p class="card-text item-description">
            {!! \Illuminate\Support\Str::words($product->description,30," ...") !!}
          </p>
          
        </div>
        <div class="item-options text-center">
          <div class="item-wrapper">
            <div class="item-cost">
              <h4 class="item-price">{{ isset($product->prix) ? $product->prix." €" : "" }}</h4>
            </div>
          </div>
          <a href="{{route("produit",$product->slug)}}" class="btn btn-light btn-wishlist">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
            <span>Lire l'article</span>
          </a>
          <a href="{{ $product->link }}" class="btn btn-primary btn-cart">
            <svg data-v-15eba8c6="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-shopping-cart"><circle data-v-15eba8c6="" cx="9" cy="21" r="1"></circle><circle data-v-15eba8c6="" cx="20" cy="21" r="1"></circle><path data-v-15eba8c6="" d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
            <span class="add-to-cart">Voir le produit</span>
          </a>

        </div>
      </div>
      
    @empty 
      <p>Aucun résultat</p>
    @endforelse

    <!-- Fin des produits -->
  </section>

  @if(count($products))
    {{ $products->links('livewire.livewire-pagination-links') }}
  @endif

</div>
