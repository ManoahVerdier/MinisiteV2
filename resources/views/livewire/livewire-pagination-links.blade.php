@if ($paginator->hasPages())
    <section id="ecommerce-pagination">
        <div class="row">
            <div class="col-sm-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-2">
                        @if($paginator->onFirstPage())
                            <li disabled class="disabled page-item prev-item">
                                <a class="page-link" href="javascript:;"></a>
                            </li>
                        @else 
                            <li class="page-item prev-item">
                                <a class="page-link" href="javascript:;" wire:click="previousPage" rel="prev"></a>
                            </li>
                        @endif
                        
                        @foreach($elements as $element)
                            @if(is_string($element))
                                <li class="page-item disabled">
                                    <a class="page-link" href="javascript:;">{{ $element }}</a>
                                </li>
                            @endif 

                            @if(is_array($element))
                                @foreach($element as $page=>$url)
                                    @if($page == $paginator->currentPage())
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="javascript:;" wire:click="gotoPage({{ $page}})">{{ $page }}</a>
                                        </li>
                                    @else 
                                        <li class="page-item" aria-current="page">
                                            <a class="page-link" href="javascript:;" wire:click="gotoPage({{ $page}})">{{ $page }}</a>
                                        </li>
                                    @endif
                                @endforeach 
                            @endif 
                        @endforeach

                        @if ($paginator->hasMorePages())
                            <li class="page-item next-item">
                                <a class="page-link" href="javascript:;" wire:click="nextPage" rel="next"></a>
                            </li>
                        @else
                            <li disabled class="disabled page-item next-item">
                                <a class="page-link" href="javascript:;" wire:click="nextPage" rel="next"></a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </section>
@endif 