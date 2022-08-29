@extends("layouts.detachedLayoutMaster")

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="h3">Catégories</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                <div id="accordionWrapa1" role="tablist" aria-multiselectable="true" class="collapse-icon collapse-shadow">
                    @livewire('show-categories')
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection 