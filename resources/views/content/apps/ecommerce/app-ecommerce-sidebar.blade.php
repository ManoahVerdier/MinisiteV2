<!-- Ecommerce Sidebar Starts -->
<div class="sidebar-shop">
  <div class="row">
    <div class="col-sm-12">
      <h6 class="filter-heading d-none d-lg-block">Filters</h6>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <!-- Price Filter starts -->
      <div class="multi-range-price">
        <h6 class="filter-title mt-0">Multi Range</h6>
        <ul class="list-unstyled price-range" id="price-range">
          <li>
            <div class="form-check">
              <input type="radio" id="priceAll" name="price-range" class="form-check-input" checked />
              <label class="form-check-label" for="priceAll">All</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="priceRange1" name="price-range" class="form-check-input" />
              <label class="form-check-label" for="priceRange1">&lt;=$10</label>
            </div>
          </li>
        </ul>
      </div>
      <!-- Price Filter ends -->

      <!-- Price Slider starts -->
      <div class="price-slider">
        <h6 class="filter-title">Price Range</h6>
        <div class="price-slider">
          <div class="range-slider mt-2" id="price-slider"></div>
        </div>
      </div>
      <!-- Price Range ends -->

      <!-- Categories Starts -->
      <div id="product-categories">
        <h6 class="filter-title">Categories</h6>
        <ul class="list-unstyled categories-list">
          <li>
            <div class="form-check">
              <input type="radio" id="category1" name="category-filter" class="form-check-input" checked />
              <label class="form-check-label" for="category1">Appliances</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="category2" name="category-filter" class="form-check-input" />
              <label class="form-check-label" for="category2">Audio</label>
            </div>
          </li>
        </ul>
      </div>
      <!-- Categories Ends -->

      <!-- Brands starts -->
      <div class="brands">
        <h6 class="filter-title">Brands</h6>
        <ul class="list-unstyled brand-list">
          <li>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="productBrand1" />
              <label class="form-check-label" for="productBrand1">Insignia™</label>
            </div>
            <span>746</span>
          </li>
          <li>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="productBrand2" checked />
              <label class="form-check-label" for="productBrand2">Samsung</label>
            </div>
            <span>633</span>
          </li>
          
        </ul>
      </div>
      <!-- Brand ends -->

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
        <button type="button" class="btn w-100 btn-primary">Clear All Filters</button>
      </div>
      <!-- Clear Filters Ends -->
    </div>
  </div>
</div>
<!-- Ecommerce Sidebar Ends -->
