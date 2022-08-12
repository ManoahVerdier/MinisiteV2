@if(!isset($innerLoop))
<ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
@else
<ul class="dropdown-menu"  data-bs-popper="none">
@endif

@php
    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }
@endphp

@foreach ($items as $item)

    @php

        $originalItem = $item;
        if (Voyager::translatable($item)) {
            $item = $item->translate($options->locale);
        }

        $listItemClass = null;
        $linkAttributes =  null;
        $styles = null;
        $icon = null;
        $caret = null;

        // With Children Attributes
        if(!$originalItem->children->isEmpty()) {
            $linkAttributes =  'data-bs-toggle=dropdown';
            $caret = '<span class="caret"></span>';

            if(url($item->link()) == url()->current()){
                $listItemClass = 'dropdown active';
            }else{
                $listItemClass = 'dropdown';
            }
        }
        // dd($item, App\Homepage::first());
        // Set Icon
        if(isset($item->icon_class) && $item->icon_class !== null){
            $icon .= '<i data-feather="'.$item->icon_class.'"></i>';
        }

        if (url($item->link()) === URL::current()) {
            $listItemClass.="active";
        }

    @endphp

    <li class="nav-item {{ $listItemClass }}" @if(!$originalItem->children->isEmpty()){{'data-menu=dropdown'}}@endif >
        <a 
            class="nav-link d-flex align-items-center @if(! $originalItem->children->isEmpty()) dropdown-toggle @endif @if (isset($innerLoop))  {{ "dropdown-item" }} @endif" 
            @if(! $originalItem->children->isEmpty()) {!! $linkAttributes ?? '' !!} @endif  
            href="{{ url($item->link()) }}" 
            target="{{ $item->target }}" 
            style="{{ $styles }}" {!! $linkAttributes ?? '' !!}
        >
            {!! $icon !!}
            <span>{{ $item->title }}</span>
            {!! $caret !!}
        </a>
        @if(!$originalItem->children->isEmpty())
            @include('layouts.partials.header.voyager_menu', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
        @endif
    </li>
@endforeach

</ul>