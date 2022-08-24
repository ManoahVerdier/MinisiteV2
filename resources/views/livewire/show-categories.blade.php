<div>
    <section id="categories-searchbar" class="ecommerce-searchbar mb-5">
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
                <div class="input-group-append">
                    <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                </div>
                </div>
            </div>
        </div>
    </section>
    @forelse($mainCategories as $c)
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse"  data-bs-toggle="collapse"
            data-bs-target="#accordion{{ $c->id }}"
            aria-expanded="false"
            aria-controls="accordion{{ $c->id }}">
                <h4 class="lead collapse-title">{{ $c->name }}</h4>
                <a href="" class="btn btn-small btn-primary float-right">Voir les produits</a>
            </div>
            <div
                id="accordion{{ $c->id }}"
                class="collapse"
                aria-labelledby="heading{{ $c->id }}"
                data-bs-parent="#accordionExample"
            >
                <div class="card-body">
                    <div class="list-group">
                        @foreach($subCategories as $sc) 
                            @if($sc->parent_id = $c->id)
                                <div class="list-group-item bg-light-primary">
                                    <span>{{ $sc->name }}</span> 
                                    <a href="" class="btn btn-sm btn-primary float-right">Voir les produits</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @empty 
        <p class="text-primary">
            Aucune catégorie ne correspond à ce texte.
        </p>
    @endforelse
</div>