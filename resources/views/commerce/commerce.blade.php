@extends ('master')

@section('linkedin')

    {{-- Linkedin share meta --}}
    <meta property="og:site_name" content="+8h.com">
    <meta property="og:type" content="page"/>
    <meta property="og:title" content ="We at +8h helps selected brands communicate your story and reaching out to the Chinese consumers."/>
    <meta name="author" content="+8h">
    <meta property="og:image" content ="https://plus8h.com/image/commerce/plus8h-E-commerce-banner-linkedin.png"/>
    <meta property="og:image:width" content="960"/>
    <meta property="og:image:height" content="398"/>
    <meta property="og:description" content ="We at +8h helps selected brands communicate your story and reaching out to the Chinese consumers."/>
    <meta property="og:url" content ="https://plus8h.com/e-commerce"/>

@stop


@section('content')

    {{-- page content --}}
    <div class="uk-grid-collapse uk-width-1-1" uk-grid>
        
        {{-- Key Banner --}}
        <div class="uk-flex
                    uk-width-1-1
                    uk-flex-center
                    uk-flex-middle
                    uk-grid-collapse
                    uk-background-cover
                    uk-position-relative 
                    uk-background-norepeat
                    commerce-key-banner-bg
                    commerce-key-banner-height
                    uk-background-bottom-center" 
                    uk-grid>

            <div class="opacity7-gradient-mask uk-position-absolute"></div>
                
            <div class="uk-flex
                        uk-light
                        uk-overlay 
                        top-display
                        uk-flex-column
                        uk-text-center
                        uk-overlay-defaul
                        commerce-key-banner-margin-top">
                <p class="is-size-1
                            is-size-3-mobile
                            uk-heading-medium 
                            has-text-white
                            uk-margin-remove 
                            font-AbadiExtraLight">
                    Join the world's largest eCommerce market
                </p>

                <div class="uk-flex
                            uk-padding        
                            uk-flex-center
                            uk-flex-middle
                            uk-flex-column">
                    <p class="is-size-4 is-size-5-mobile has-text-white">
                        China's eCommerce account for more than 55% of global transactions, 
                        grossing over 1 trillion USD annually. 
                        We at +8h helps selected brands communicate your story and reaching out to the Chinese consumers. 
                        May China be your first market or amongst one of the focus markets, 
                        +8h tailor make the most suitable solution for you. 
                        Guiding through an end to end process or pinpointed measures in the eCommerce supply chain.
                    </p>
        
                </div>

            </div>

        </div>


        {{-- Own site banner --}}
        
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
                        commerce-own-site-banner-banner-bg"
                        href="/own-site">
            </a>

            {{-- Left Text container--}}
            <a class="uk-flex
                        banner50
                        uk-position-relative
                        has-background-grey-darker"
                        href="/own-site">


            {{-- 8h logo image --}}
                <div class="image
                            logo-watermark
                            logo-watermark-position">
                    <img src="{{ asset('/image/icon/p8h-logo.png') }}" alt="+8h logo">
                </div>

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-width-3-4@m
                            uk-flex-column
                            uk-flex-center">

                    <div style="padding: 2em 0">
                        <p class="is-size-5 has-text-white">OWN SALES SITE</p>
                    </div>
                    <h3 class="is-size-3 has-text-white">
                        Build and own your store
                    </h3>
                    <p class="is-size-5 has-text-white">
                        Find the most suitable option for your business 
                    </p>
                    <p class="is-size-5 has-text-white">
                        Different solutions able for customization based on your needs 
                    </p>

                </div>

            </a>

        </div>


        {{-- Marketplace banner --}}

        {{--  Container  --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default  
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            {{-- Left image  --}}
            <a class="banner50
                        uk-cover-container
                        uk-card-media-left
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-center-center
                        tmall-banner"
                        href="/marketplace">
            </a>

            {{-- Right Text container--}}
            <a class="uk-flex
                        banner50
                        uk-position-relative
                        has-background-grey-darker"
                        href="/marketplace">

                {{-- 8h logo image --}}
                <div class="image
                            logo-watermark
                            logo-watermark-position">
                    <img src="{{ asset('/image/icon/p8h-logo.png') }}" alt="+8h logo">
                </div>

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-width-3-4@m
                            uk-flex-column
                            uk-flex-center">

                    <div style="padding: 2em 0">
                        <p class="is-size-5 has-text-white">MARKETPLACE STORE</p>
                    </div>
                    <h3 class="is-size-3 has-text-white">
                        The largest marketplace
                    </h3>
                    <p class="is-size-5 has-text-white">
                        Utilize the biggest platforms for eCommerce. 
                    </p>
                    <p class="is-size-5 has-text-white">
                        Well known marketplaces as Tmall, JD, Pinduoduo, Suning, Yunji
                    </p>

                </div>

            </a>

        </div>


        {{-- Cross border banner --}}

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
                        uk-background-center-center
                        cross-border"
                        href="/cross-border">
            </a>
            
            {{-- Left Text container--}}
            <a class="uk-flex
                        banner50
                        uk-position-relative
                        has-background-grey-darker"
                        href="/cross-border">

            {{-- 8h logo image --}}
                <div class="image
                            logo-watermark
                            logo-watermark-position">
                    <img src="{{ asset('/image/icon/p8h-logo.png') }}" alt="+8h logo">
                </div>

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-width-4-5@m
                            uk-flex-column
                            uk-flex-center">

                    <div style="padding: 2em 0">
                        <p class="is-size-5 has-text-white">CROSS BORDER SALES</p>
                    </div>
                    <h3 class="is-size-3 has-text-white">
                        Sell to China from your home market
                    </h3>
                    <p class="is-size-5 is-size-6-mobile has-text-white">
                        Cross border eCommerce allow a foreign entity, 
                        operating from outside China, to do eCommerce with Chinese consumers. 
                        You can promote, sell and ship from your current warehouse. 
                        A good way to test your product on the market and gain awareness
                    </p>

                </div>

            </a>

        </div>


    </div>
    
@endsection
