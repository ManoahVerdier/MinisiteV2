<div class="blog-sidebar my-2 my-lg-0">
    <!-- Search bar -->
    <div class="blog-search">
      <form method="post" action="{{route('recherche')}}" class="">
        @csrf
        <div class="input-group input-group-merge">
            <input type="text" class="form-control" name="search" placeholder="Recherche" />
            <div class="cursor-pointer input-group-append">
                <button type="submit" class="input-group-text">
                    <i data-feather="search"></i>
                </button>
            </div>
        </div>
    </form>
    </div>
    <!--/ Search bar -->
  
    <!-- Recent Posts -->
    <div class="blog-recent-posts mt-3">
      <h6 class="section-label">Derniers produits ajoutés</h6>
      <div class="mt-75">
        @foreach($produitsRecents as $p)
            <div class="d-flex mb-2">
            <a href="{{route("produit",$p->slug)}}" class="mr-2">
                <img
                class="rounded"
                src="{{ URL::asset("storage/".$p->image) }}"
                width="100"
                height="70"
                alt="{{ $p->title }}"
                />
            </a>
            <div class="blog-info">
                <h6 class="blog-recent-post-title mb-0">
                    <a href="{{route("produit",$p->slug)}}" class="text-body-heading">{{ $p->title }}</a>
                </h6>
                <div class="text-muted mb-0">
                    <ul class="unstyled-list list-inline mb-0">
                        @for($i=1;$i<=5;$i++)
                            @if($i<=$p->reviews->avg("global_rate"))
                                <li class="ratings-list-item"><i data-feather="star" height="14px" width="14px" class="h-auto w-auto filled-star text-primary fill-current"></i></li>
                            @else 
                                <li class="ratings-list-item"><i data-feather="star" height="14px" width="14px" class="h-auto w-auto unfilled-star"></i></li>
                            @endif
                        @endfor
                    </ul>
                </div>
            </div>
            </div>
        @endforeach
        
      </div>
    </div>
    <!--/ Recent Posts -->
  
    <!-- Categories -->
    <div class="blog-categories mt-3">
      <h6 class="section-label">Categories</h6>
      <div class="mt-1">
        @foreach(\App\Category::where('parent_id',NULL)->get() as $c)
            <div class="d-flex justify-content-start align-items-center mb-75">
            <a href="#" class="mr-75">
                <div class="avatar bg-light-primary rounded">
                <div class="avatar-content">
                    <i data-feather="award" class="avatar-icon font-medium-1"></i>
                </div>
                </div>
            </a>
            <a href="{{ route("category",$c->slug) }}">
                <div class="blog-category-title text-body">{{ $c->name }}</div>
            </a>
            </div>
        @endforeach
        
      </div>
    </div>
    <!--/ Categories -->
  </div>
  