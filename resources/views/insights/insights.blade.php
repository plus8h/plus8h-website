@extends ('master')

@section('linkedin')

    {{-- Linkedin share meta --}}
    <meta property="og:site_name" content="+8h.com">
    <meta property="og:type" content="page"/>
    <meta property="og:title" content ="+8h Our Insights"/>
    <meta name="author" content="+8h">
    <meta property="og:image" content ="https://plus8h.com/image/our-insight/our-insight-key-banner-bg.jpg"/>
    <meta property="og:image:width" content="960"/>
    <meta property="og:image:height" content="398"/>
    <meta property="og:description" content ="+8h Our Insights"/>
    <meta property="og:url" content ="https://plus8h.com/our-insights"/>

@stop


@section('content')

    {{-- page content --}}
    <div class="uk-grid-collapse uk-width-1-1" uk-grid>
        
        {{-- Key Banner --}}
        <div class="uk-width-1-1
                    uk-grid-collapse
                    key-banner-height
                    uk-background-cover
                    uk-position-relative 
                    uk-background-norepeat
                    uk-background-center-center
                    our-insight-key-banner-bg" 
                    uk-grid>

            <div class="opacity7-gradient-mask uk-position-absolute"></div>
                
            <div class="uk-light
                        uk-overlay            
                        max-width-50
                        uk-overlay-defaul
                        uk-position-bottom-left ">
                <p class="uk-heading-medium uk-margin-remove font-AbadiExtraLight">Our Insights</p>

            </div>

        </div>


        {{-- 50% Banner --}}

        {{--  Container  --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default  
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            {{-- Left image --}}
            <a class="banner50
                        uk-cover-container
                        uk-card-media-left
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-center-center
                        our-insight-banner50-10-bg"
                        href="/live-streaming-a-natural-part-of-your-eCommerce-strategy">
            </a>

            {{-- Right Text container--}}
            <a class="uk-flex
                        banner50
                        uk-position-relative
                        has-background-grey-darker"
                        href="/live-streaming-a-natural-part-of-your-eCommerce-strategy">


                {{-- 8h logo image --}}
                <div class="image
                            logo-watermark
                            logo-watermark-position">
                    <img src="{{ asset('/image/icon/p8h-logo.png') }}" alt="+8h logo">
                </div>

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-flex-column
                            uk-flex-center">

                    <h3 class="is-size-2 is-size-3-mobile has-text-white">
                        Live Streaming a natural part of your eCommerce strategy, Why?
                    </h3>

                    <p class="is-size-3 is-size-5-mobile has-text-white">
                        Dec 2020
                    </p>

                </div>

            </a>

        </div>
        

        {{-- 50% Banner --}}

        {{-- Container --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default 
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            {{-- Right image container --}}
            <a class="banner50
                        uk-flex-last@s
                        uk-cover-container
                        uk-card-media-right
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-center-center
                        our-insight-banner50-9-bg"
                        href="/new-singles-day-record-set-by-alibaba">
            </a>

            {{-- Left Text container--}}
            <a class="uk-flex
                        banner50
                        uk-position-relative
                        has-background-grey-darker"
                        href="/new-singles-day-record-set-by-alibaba">

                {{-- 8h logo image --}}
                <div class="image
                            logo-watermark
                            logo-watermark-position">
                    <img src="{{ asset('/image/icon/p8h-logo.png') }}" alt="+8h logo">
                </div>

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-flex-column
                            uk-flex-center">

                    <h3 class="is-size-2 is-size-3-mobile has-text-white">
                        New Singles Day Record set by Alibaba Group during ongoing pandemic 
                    </h3>

                    <p class="is-size-3 is-size-5-mobile has-text-white">
                        November 2020
                    </p>

                </div>

            </a>

        </div>


        {{-- 50% Banner --}}

        {{--  Container  --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default  
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            {{-- Left image --}}
            <a class="banner50
                        uk-cover-container
                        uk-card-media-left
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-center-center
                        our-insight-banner50-8-bg"
                        href="/the-biggest-eCommerce-platforms-in-China">
            </a>

            {{-- Right Text container--}}
            <a class="uk-flex
                        banner50
                        uk-position-relative
                        has-background-grey-darker"
                        href="/the-biggest-eCommerce-platforms-in-China">


                {{-- 8h logo image --}}
                <div class="image
                            logo-watermark
                            logo-watermark-position">
                    <img src="{{ asset('/image/icon/p8h-logo.png') }}" alt="+8h logo">
                </div>

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-flex-column
                            uk-flex-center">

                    <h3 class="is-size-2 is-size-4-mobile has-text-white">
                        The biggest eCommerce platforms in China – Find the most suitable marketplace for your brand? 
                    </h3>

                    <p class="is-size-3 is-size-5-mobile has-text-white">
                        October 2020
                    </p>

                </div>

            </a>

        </div>
        

        {{-- 50% Banner --}}

        {{-- Container --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default 
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            {{-- Right image container --}}
            <a class="banner50
                        uk-flex-last@s
                        uk-cover-container
                        uk-card-media-right
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-center-left
                        our-insight-banner50-7-bg"
                        href="/WeChat-Mini-Program">
            </a>

            {{-- Left Text container--}}
            <a class="uk-flex
                        banner50
                        uk-position-relative
                        has-background-grey-darker"
                        href="/WeChat-Mini-Program">

                {{-- 8h logo image --}}
                <div class="image
                            logo-watermark
                            logo-watermark-position">
                    <img src="{{ asset('/image/icon/p8h-logo.png') }}" alt="+8h logo">
                </div>

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-flex-column
                            uk-flex-center">

                    <h3 class="is-size-3 is-size-4-mobile has-text-white">
                        The APP is dead – long live the APP
                    </h3>
                    <h3 class="is-size-3 is-size-4-mobile has-text-white">
                        WeChat Mini Program – the app-in-app for all daily tasks
                    </h3>

                    <p class="is-size-3 is-size-5-mobile has-text-white">
                        September 2020
                    </p>

                </div>

            </a>

        </div>


        {{-- 50% Banner --}}

        {{--  Container  --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default  
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            {{-- Left image --}}
            <a class="banner50
                        uk-cover-container
                        uk-card-media-left
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-center-center
                        our-insight-banner50-6-bg"
                        href="/website-optimization">
            </a>

            {{-- Right Text container--}}
            <a class="uk-flex
                        banner50
                        uk-position-relative
                        has-background-grey-darker"
                        href="/website-optimization">


                {{-- 8h logo image --}}
                <div class="image
                            logo-watermark
                            logo-watermark-position">
                    <img src="{{ asset('/image/icon/p8h-logo.png') }}" alt="+8h logo">
                </div>

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-flex-column
                            uk-flex-center">

                    <h3 class="is-size-2 is-size-4-mobile has-text-white">
                        Website optimization, with the China firewall and SEO 
                        on Baidu as different from google
                    </h3>

                    <p class="is-size-3 is-size-5-mobile has-text-white">
                        August 2020
                    </p>

                </div>

            </a>

        </div>


        {{-- 50% Banner --}}

        {{-- Container --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default 
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            {{-- Right image container --}}
            <a class="banner50
                        uk-flex-last@s
                        uk-cover-container
                        uk-card-media-right
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-center-center
                        our-insight-banner50-5-bg"
                        href='/trademark-in-China'>
            </a>

            {{-- Left Text container--}}
            <a class="uk-flex
                        banner50
                        uk-position-relative
                        has-background-grey-darker"
                        href='/trademark-in-China'>

                {{-- 8h logo image --}}
                <div class="image
                            logo-watermark
                            logo-watermark-position">
                    <img src="{{ asset('/image/icon/p8h-logo.png') }}" alt="+8h logo">
                </div>

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-flex-column
                            uk-flex-center">

                    <h3 class="is-size-1 is-size-3-mobile has-text-white">
                        Trademark in China 
                    </h3>
                    <h3 class="is-size-1 is-size-3-mobile has-text-white">
                        do I need it? 
                    </h3>

                    <p class="is-size-3 is-size-5-mobile has-text-white">
                        July 2020
                    </p>

                </div>

            </a>

        </div>


        {{-- 50% Banner --}}

        {{--  Container  --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default  
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            {{-- Left image --}}
            <a class="banner50
                        uk-cover-container
                        uk-card-media-left
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-center-center
                        our-insight-banner50-4-bg"
                        href="/uniqueness-of-China-e-commerce">
            </a>

            {{-- Right Text container--}}
            <a class="uk-flex
                        banner50
                        uk-position-relative
                        has-background-grey-darker"
                        href="/uniqueness-of-China-e-commerce">


                {{-- 8h logo image --}}
                <div class="image
                            logo-watermark
                            logo-watermark-position">
                    <img src="{{ asset('/image/icon/p8h-logo.png') }}" alt="+8h logo">
                </div>

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-flex-column
                            uk-flex-center">

                    <h3 class="is-size-1 is-size-3-mobile has-text-white">
                        Uniqueness of China
                    </h3>
                    <h3 class="is-size-1 is-size-3-mobile has-text-white">
                        eCommerce landscape
                    </h3>

                    <p class="is-size-3 is-size-5-mobile has-text-white">
                        June 2020
                    </p>

                </div>

            </a>

        </div>
        

        {{-- 50% Banner --}}

        {{-- Container --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default 
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            {{-- Right image container --}}
            <a class="banner50
                        uk-flex-last@s
                        uk-cover-container
                        uk-card-media-right
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-center-center
                        our-insight-banner50-3-bg"
                        href="/growth-of-mobile-payment-solutions">
            </a>

            {{-- Left Text container--}}
            <a class="uk-flex
                        banner50
                        uk-position-relative
                        has-background-grey-darker"
                        href="/growth-of-mobile-payment-solutions">

                {{-- 8h logo image --}}
                <div class="image
                            logo-watermark
                            logo-watermark-position">
                    <img src="{{ asset('/image/icon/p8h-logo.png') }}" alt="+8h logo">
                </div>

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-flex-column
                            uk-flex-center">

                    <h3 class="is-size-1 is-size-3-mobile has-text-white">
                        Growth of mobile 
                    </h3>
                    <h3 class="is-size-1 is-size-3-mobile has-text-white">
                        payment solution
                    </h3>

                    <p class="is-size-3 is-size-5-mobile has-text-white">
                        May 2020
                    </p>

                </div>

            </a>

        </div>


        {{-- 50% Banner --}}

        {{--  Container  --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default  
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            {{-- Left image --}}
            <a class="banner50
                        uk-cover-container
                        uk-card-media-left
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-center-center
                        our-insight-banner50-2-bg"
                        href="/cross-border-e-commerce">
            </a>

            {{-- Right Text container--}}
            <a class="uk-flex
                        banner50
                        uk-position-relative
                        has-background-grey-darker"
                        href="/cross-border-e-commerce">


                {{-- 8h logo image --}}
                <div class="image
                            logo-watermark
                            logo-watermark-position">
                    <img src="{{ asset('/image/icon/p8h-logo.png') }}" alt="+8h logo">
                </div>

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-flex-column
                            uk-flex-center">

                    <h3 class="is-size-1 is-size-3-mobile has-text-white">
                        Opportunities to test market 
                    </h3>
                    <h3 class="is-size-1 is-size-3-mobile has-text-white">
                        With Cross border
                    </h3>

                    <p class="is-size-3 is-size-5-mobile has-text-white">
                        April 2020
                    </p>

                </div>

            </a>

        </div>


        {{--50% Banner --}}

        {{--  Container  --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default  
                    uk-grid-collapse 
                    uk-child-width-1-2@m"
                    uk-grid>
            
            {{-- Right image --}}

            <a class="banner50
                        uk-flex-last@s 
                        uk-cover-container
                        uk-card-media-right
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-top-center
                        our-insight-banner50-1-bg"
                        href="/social-media">
            </a>

            {{-- Left Text container--}}
            <a class="uk-flex
                        banner50
                        uk-position-relative
                        has-background-grey-darker"
                        href="/social-media">


            {{-- 8h logo image --}}
                <div class="image
                            logo-watermark
                            logo-watermark-position">
                    <img src="{{ asset('/image/icon/p8h-logo.png') }}" alt="+8h logo">
                </div>

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-flex-column
                            uk-flex-center">

                    <h3 class="is-size-1 is-size-3-mobile has-text-white">
                        The importance of social media
                    </h3>
                    <h3 class="is-size-1 is-size-3-mobile has-text-white">
                        to boom your eCommerce
                    </h3>

                    <p class="is-size-3 is-size-5-mobile has-text-white">
                        March 2020
                    </p>

                </div>

            </a>

        </div>


    </div>

@endsection
