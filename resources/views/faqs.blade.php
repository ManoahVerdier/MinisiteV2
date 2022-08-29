@extends("layouts.contentLayoutMaster")

@section('page-style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
@endsection

{{-- Content --}}
@section('content')
<section id="pricing-plan">
    <!-- title text and switch button -->
    <div class="text-center mb-5 mb-md-2">
      <h1>FAQs</h1>
    </div>
    <!--/ title text and switch button -->

    <div class="" id="accordion">
         @foreach($faqs as $faq)
            <div class="row mx-2">
                <div class="col-12">
                    <div id="accordion-{{ $faq->slug }}" class="accordion-wrap inactive">
                        <div class="card border-0 bg-white mb-2 px-1 px-md-3 py-1 py-md-2">
                            <div class="card-header py-50 py-md-2 bg-primary text-white border-0" id="accordion-header-{{ $faq->slug }}">
                            <h2 class="h5 mb-0 w-100">
                                <button class="btn text-white btn-link collapsed" data-toggle="collapse" data-target="#{{ $faq->slug }}" aria-expanded="true" aria-controls="{{ $faq->slug }}">
                                    {{ $faq->question }}
                                </button>
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather-plus fa fa-plus faq_icon text-white"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="fa fa-minus faq_icon text-white feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </h2>
                            </div>

                            <div id="{{ $faq->slug }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body bg-white">
                                    {!!$faq->reponse!!}                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection



@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/app.js')) }}"></script>
@endsection
