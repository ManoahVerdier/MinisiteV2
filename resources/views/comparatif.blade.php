@extends("layouts.contentLayoutMaster")

@section('content')
<section id="pricing-plan">
  <!-- title text and switch button -->
  <div class="text-center">
    <h1>Comparatif</h1>
    <p class="mb-2 pb-75">
      Retrouvez ci-dessous jusqu'à 3 produits ajoutés au comparatif.
    </p>
  </div>
  <!--/ title text and switch button -->

  <!-- pricing plan cards -->
  <div class="row pricing-card">
    <div class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-10 mx-auto">
      <div class="row">
        @forelse($products as $product)
          <div class="col-12 col-md-4">
            <div class="card basic-pricing text-center">
              <div class="card-header embed-responsive text-center justify-content-center">
                <img
                  src="{{ URL::asset("storage/".$product->image) }}"
                  class="img-fluid product-img mb-3"
                  alt="{{ $product->title }}"
                />
              </div>
              <div class="card-body">
                
                <h3 class="mb-2">{{ $product->title }}</h3>
                <p class="card-text">
                  {!! \Illuminate\Support\Str::words($product->description,20," ...")  !!}
                </p>
                
                <ul class="product-features list-unstyled">
                  @foreach(\App\Attribute::where("type","<>","radio_btn")->where("type","<>","rich_text_box")->get() as $attribute)
                    @if($attribute->name=="prix")                    
                      <li class="plan-price mt-2">
                        <span class="pricing-basic-value fw-bolder text-primary">0</span>
                        <span class="font-medium-1 fw-bold text-primary">€</span>
                      </li>
                    @else 
                      <li><i data-feather="award" class="mr-50"></i><span>{{ $attribute->displayName }}</span>&nbsp;:&nbsp;<span class="text-primary">{{ $product[lcfirst($attribute->name)] }} @if($attribute->name=="prix") € @endif</span>
                    @endif
                  @endforeach
                  @foreach(\App\Attribute::where("type","radio_btn")->get() as $attribute)
                    @if($product[lcfirst($attribute->name)])
                        <li><i data-feather="check-square" class="mr-50"></i><span>{{ $attribute->displayName }}</span>
                    @else 
                        <li><i data-feather="square" class="mr-50"></i><span><s>{{ $attribute->displayName }}</s></span>
                    @endif
                  @endforeach
                  
                </ul>
                @foreach(\App\Attribute::where("type","rich_text_box")->get() as $attribute)
                    <div class="col-12 mb-4 mb-md-0">
                        <div class="w-75 mx-auto">
                        <i data-feather="award"></i>
                        <h4 class="mt-2 mb-1">{{ $attribute->displayName }}</h4>
                        <p class="card-text">{{ $product[$attribute->name] }}</p>
                        </div>
                    </div>
                  @endforeach 
                <a href="{{ $product->link }}" class="btn w-100 btn-outline-primary mt-2">Voir le produit</a>
              </div>
            </div>
          </div>
        @empty 
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <p class="text-center d-inline-block w-100">
                  <i data-feather="alert-triangle" class="font-weight-bolder h-auto w-auto" height="150px" width="150px" style="line-height:1"></i> 
                </p>
              </div> 
              <div class="card-body">
                <h3 class="text-center">Aucun produit n'a encore été ajouté au comparatif !</h3>
              </div>
            </div> 
          </div>
        @endforelse 
      </div>
    </div>
  </div>
</section>
@endsection
