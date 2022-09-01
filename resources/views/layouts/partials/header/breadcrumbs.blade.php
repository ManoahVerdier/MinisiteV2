<section id="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12 px-4 py-2">
                <a href="{{url('/')}}" class="text-primary">Accueil</a>
                <span>&gt;</span>

                    @if($page->lien_amazon ?? false)
                       {{-- <ahref="route('page',['slug'=>$page->parent_page->slug])}}" class="text-primary"> --}}
                            <span>Produits</span>
                        {{-- </a> --}}
                        <span>&gt;</span>
                    @endif 
                    <span>{{$page->title}}</span>
            </div>
        </div>
    </div>
</section>