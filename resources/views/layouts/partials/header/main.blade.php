<header class="bg-dark">
    <div class="container" id="header-main">
        <div class="h-100" id="menu-head">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="{{url('/')}}" class="navbar-brand">
                    @if(App\Homepage::first()->logo??false)
                        <img class=" mx-auto" src="{{  asset("storage/".App\Homepage::first()->logo)  }}"/>
                    @else 
                        <img class=" mx-auto" src="{{asset('img/header/logo.png')}}"/>
                    @endif
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu" aria-expanded="false" aria-label="Voir le menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_menu">
                    {{--<ul class="mr-auto navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link h5 mb-0" href="#" id="domaines" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Lien 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h5 mb-0" href="#" id="domaines" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Lien 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h5 mb-0" href="#" id="domaines" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Lien 2
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h5 mb-0" href="#" id="domaines" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Lien 3
                            </a>
                        </li>
                    </ul>--}}
                    {{menu('main_menu','layouts.partials.header.voyager_menu')}}
                </div>
                
                <form method="post" action="{{route('recherche')}}" class="form-inline w-sm-100 mt-2 mt-md-0">
                    @csrf
                    <div class="input-group">
                        <input name="search" type="text" placeholder="Recherche" class="pl-1 pl-md-3 form-control border-primary border" aria-describedby="search">
                        <div class="input-group-append">
                            <button class="btn px-1 px-md-2 btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </nav>
        </div>
    </div>
</header>
