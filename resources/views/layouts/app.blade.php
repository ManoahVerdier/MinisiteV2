<!doctype html>
<html lang="fr" class="h-100 w-100">
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WV9DF45');</script>
        <!-- End Google Tag Manager -->

        {{--Favicon--}}
        <link rel="icon" href="{{env('APP_URL')}}favicon.ico" />
        
        {{-- Required meta tags --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="page" content="@yield('page')">

        @yield('extra-meta')

        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')"/>

        {{-- CSS --}}
        @section('css')
        {!! Html::style(mix('/css/app.css')) !!}
        @show

        @yield('captcha')

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-9998670-35"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-9998670-35');
        </script>


        
        @yield('extra-css')
    </head>

    <body @yield('body-attr')>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WV9DF45"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->


        {{-- Header --}}
        @yield('header')

        {{-- Content --}}
        <main class="content" style="height: calc(100% - 60px)">
            @yield('content')
        </main>

        {{-- Footer --}}
        @yield('footer')

        {{-- JavaScript --}}
        @section('script')
        @yield('extra-js')
        {!! Html::script(mix('/js/app.js')) !!}
        @show

        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'GA_TRACKING_ID');
        </script>
        <!-- End global Site Tag (gtag.js) - Google Analytics -->

        <script>
            function initFreshChat() {
                if(window.fcWidget) {
                    window.fcWidget.init({
                        token: "4b595a1a-4a6f-4b35-92ca-71f3abba4e57",
                        host: "https://wchat.eu.freshchat.com"
                    });
                }
            }
            function initialize(i,t){
                var e;
                i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.eu.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))
            }
            function initiateCall(){
                initialize(document,"freshchat-js-sdk")
            }
            window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
        </script>
    </body>
</html>