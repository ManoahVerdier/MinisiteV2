

@section('content-sidebar')
  <!-- ProductList Sidebar Starts -->
  <div class="sidebar-shop">
    <div class="row">
      <div class="col-sm-12">
        <h6 class="filter-heading d-none d-lg-block">Filtres</h6>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        @if(! $isCateg)
          <!-- Categories Starts -->
          <div id="product-categories">
            <h6 class="filter-title">Catégories</h6>
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
              <h6 class="filter-title">{{ $filter->displayName}}</h6>
              <div class="price-slider px-1" >
                <div class="{{ $filter->name}}-slider slider range-slider mt-2" id="price-slider" min="{{ $filter->min }}" max="{{ $filter->max }}" name="{{ $filter->name }}"></div>
              </div>
            </div>
          @endif
        @endforeach
        <!-- Slider ends -->

        

        <!-- Attributes starts -->
        <div class="attributes mt-5">
          <h6 class="filter-title">Attributs</h6>
          <ul class="list-unstyled brand-list">
            @foreach($filtersBool as $filter)
            <li>
              <div class="form-check">
                <!--<input type="checkbox" wire:click="$emit('boolUpdated','{{ $filter->name }}')" class="form-check-input" id="check_{{ $filter->name }}" />-->
                <input type="checkbox" name="{{ $filter->name }}" class="checkboxUpdate form-check-input" id="check_{{ $filter->name }}" />
                <label class="form-check-label" for="productBrand1">{{ $filter->displayName }}</label>
              </div>
              <span class="number"></span>
            </li>
            @endforeach
            
          </ul>
        </div>
        <!-- Attributes ends -->

        <!-- Rating starts -->
        <div id="ratings">
          <h6 class="filter-title">Ratings</h6>
          <div class="ratings-list">
            <a href="#">
              <ul class="unstyled-list list-inline">
                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                <li>& up</li>
              </ul>
            </a>
            <div class="stars-received">160</div>
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
              <span class="navbar-toggler-icon d-block d-lg-none"><i data-feather="menu"></i></span>
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
                <span class="active-sorting">Recommandé</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Recommandé</a>
                <a class="dropdown-item" href="#">Notes croissantes</a>
                <a class="dropdown-item" href="#">Notes décroissantes</a>
              </div>
            </div>
            <div class="btn-group" role="group">
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
      <div class="card ecommerce-card">
        <div class="item-img text-center">
          <a href="{{ $product->link }}">
            <img
              class="img-fluid card-img-top"
              src="{{ URL::asset("storage/".$product->image) }}"
              alt="img-placeholder"
            />
          </a>
        </div>
        <div class="card-body">
          <div class="item-wrapper">
            <div class="item-rating">
              <ul class="unstyled-list list-inline">
                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
              </ul>
            </div>
            <div>
              <h6 class="item-price">{{ isset($product->prix) ? $product->prix." €" : "" }}</h6>
            </div>
          </div>
          <h6 class="item-name">
            <a class="text-body" href="{{ $product->link }}">{{ $product->title }}</a>
            <span class="card-text item-company">De <a href="#" class="company-name">{{ $product->brand }}</a></span>
          </h6>
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
          <a href="#" class="btn btn-light btn-wishlist">
            <i data-feather="book"></i>
            <span>Lire l'article</span>
          </a>
          <a href="{{ $product->link }}" class="btn btn-primary btn-cart">
            <i data-feather="shopping-cart"></i>
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
