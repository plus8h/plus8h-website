@extends ('master')

@section('linkedin')

    {{-- Linkedin share meta --}}
    <meta property="og:site_name" content="+8h.com">
    <meta property="og:type" content="page"/>
    <meta property="og:title" content ="We are digital brand growers.
            A sales opportunity for everyone covering the entire eCommerce supply
            chain and marketing your brand to drive traffic and sales conversion"/>
    <meta name="author" content="+8h">
    <meta property="og:image" content ="https://plus8h.com/image/homepage/homepage-share-image.png"/>
    <meta property="og:image:width" content="960"/>
    <meta property="og:image:height" content="398"/>
    <meta property="og:description" content ="We are digital brand growers.
            A sales opportunity for everyone covering the entire eCommerce supply
            chain and marketing your brand to drive traffic and sales conversion"/>
    <meta property="og:url" content ="https://plus8h.com"/>

@stop


@section('content')

    {{-- page content --}}
    <div class="uk-grid-collapse uk-width-1-1" uk-grid>
        
        {{-- Key Banner --}}
        <div class="uk-flex
                    uk-width-1-1
                    uk-grid-collapse
                    key-banner-height
                    uk-background-cover
                    uk-position-relative 
                    uk-background-norepeat
                    homepage-key-banner-bg
                    uk-background-center-center" 
                    uk-grid>

            <div class="opacity7-gradient-mask uk-position-absolute"></div>
                
            <div class="uk-light
                        uk-overlay
                        uk-padding
                        uk-overlay-defaul
                        uk-position-bottom-left ">
                <p class="uk-heading-medium is-size-3-mobile uk-margin-remove font-AbadiExtraLight">Your sales team</p>
                <p class="uk-heading-medium is-size-3-mobile uk-margin-remove font-AbadiExtraLight">toward Chinese consumers</p>

            </div>

        </div>


        {{-- Call to action Banner --}}

        <div class="uk-card
                    uk-width-1-1
                    uk-card-default  
                    uk-grid-collapse
                    yellow-background
                    call-to-action-banner-height"
                    uk-grid>
                    
            <div class="uk-flex
                        uk-overlay 
                        uk-flex-column
                        uk-flex-center
                        uk-card-body">     

                <div class="uk-flex
                            uk-flex-column
                            uk-flex-left">

                    <div>
                        <h3 class="is-size-2 is-size-3-mobile has-text-white ">We are digital brand growers</h3>
                
                        <p class="is-size-4 is-size-5-mobile has-text-white">
                            A sales opportunity for everyone covering the entire eCommerce supply
                        </p>
                        <p class="is-size-4 is-size-5-mobile has-text-white">
                            chain and marketing your brand to drive traffic and sales conversion
                        </p>
                    </div>

                    <div class="uk-light
                                uk-padding
                                uk-padding-remove-bottom
                                uk-padding-remove-horizontal">

                        <div class="uk-inline-clip 
                                    uk-transition-toggle"
                                    tabindex="0">

                            <button class="button-opacity-shadow
                                        uk-transition-scale-up 
                                        uk-transition-opaque">
                                <a class="is-size-3
                                            is-size-5-mobile 
                                            has-text-white 
                                            uk-padding-small 
                                            font-AbadiExtraLight"
                                            href="/our-services">
                                    See what we do
                                </a>
                            </button>
                            
                        </div>

                    </div>
                </div> 



            </div>
        </div>



        {{-- Service Banner WeChat store --}}
        
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
                        wechat-store-banner 
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-top-center"
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
                            uk-flex-column
                            uk-flex-center">

                    <div>
                        <p class="is-size-3 is-size-4-mobile has-text-white">OWN SALES SITE</p>
                    </div>
                    <h3 class="is-size-1 is-size-2-mobile has-text-white">WeChat Store</h3>
                    <p class="is-size-3 is-size-4-mobile has-text-white">
                        Your official WeChat digital store in your control.
                    </p>
                    <p class="is-size-3 is-size-4-mobile has-text-white">
                        Accessible by 1+ billion Chinese WeChat users.
                    </p>

                </div>

            </a>

        </div>


        {{-- Service Banner JD/Tmall --}}

        {{--  Container  --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default  
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            {{-- Left image --}}
            <a class="tmall-banner
                        banner50
                        uk-cover-container
                        uk-card-media-left
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-center-center"
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
                            uk-flex-column
                            uk-flex-center">

                    <div>
                        <p class="is-size-3 is-size-4-mobile has-text-white">MARKETPLACE STORE</p>
                    </div>
                    <h3 class="is-size-1 is-size-2-mobile has-text-white">
                        Tmall store
                    </h3>
                    <p class="is-size-3 is-size-4-mobile has-text-white">
                        Your own flagship store on the No. 1 marketplace in China.
                    </p>

                </div>

            </a>

        </div>


        {{-- Service Banner Cross-border --}}

        {{--  Container  --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default 
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            {{-- Right image --}}
            <a class="cross-border
                        banner50
                        uk-flex-last@s
                        uk-cover-container
                        uk-card-media-right
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-center-center"
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
                            uk-flex-column
                            uk-flex-center">

                    <div>
                        <p class="is-size-3 is-size-4-mobile has-text-white">CROSS BORDER SALES</p>
                    </div>
                    <h3 class="is-size-1 is-size-2-mobile has-text-white">
                        Access China from home
                    </h3>
                    <p class="is-size-3 is-size-4-mobile has-text-white">
                        Soft entry to create presence & sales, or for sales trials.
                    </p>

                </div>

            </a>

        </div>


    </div>

@endsection
