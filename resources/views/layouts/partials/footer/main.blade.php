<footer class='mt-5'>
    <div class="container bg-dark text-white">    
        <div class="row pt-3">
            <div class="col-12 col-md-6 text-left px-5">
                <p class="py-4 text-left mb-4">{{  App\Homepage::first()->footer  }}</p>
            </div>
            <div class="col-12 col-md-6 px-5 text-center">
                <p class="h5"><b>Liens utiles</b></p>
                {{ menu('footer','bootstrap')}}
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-12 text-center">
                <span>{{env('APP_NAME')}} - Copyright 2022 - Tous droits reserves. | </span>
                <a href="{{route('mentions_legales')}}">Mentions legales</a> 
                
            </div>
        </div>
    </div>
</footer>