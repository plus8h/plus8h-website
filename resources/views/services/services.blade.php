@extends ('master')

@section('linkedin')

    {{-- Linkedin share meta --}}
    <meta property="og:site_name" content="+8h.com">
    <meta property="og:type" content="page"/>
    <meta property="og:title" content ="A sales opportunity for all covering the entire eCommerce supply chain
            with strong added value on the key components that brings traffic and conversion"/>
    <meta name="author" content="+8h">
    <meta property="og:image" content ="https://plus8h.com/image/services/Social-Media-Marketing.jpg"/>
    <meta property="og:image:width" content="960"/>
    <meta property="og:image:height" content="398"/>
    <meta property="og:description" content ="A sales opportunity for all covering the entire eCommerce supply chain
            with strong added value on the key components that brings traffic and conversion"/>
    <meta property="og:url" content ="https://plus8h.com/our-services"/>

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
                    services-key-banner-bg
                    auto-key-banner-height
                    uk-background-center-center" 
                    uk-grid>

            <div class="opacity7-gradient-mask uk-position-absolute"></div>

            <div class="uk-flex
                        uk-light
                        uk-overlay 
                        top-display
                        uk-text-center
                        uk-flex-column
                        uk-overlay-defaul
                        auto-key-banner-margin-top">
                <p class="uk-heading-medium is-size-2-mobile uk-margin-remove font-AbadiExtraLight">
                    eCommerce in China
                </p>

                <div class="uk-flex
                            uk-padding        
                            uk-flex-center
                            uk-flex-middle
                            uk-flex-column
                            uk-padding-remove-horizontal">
                    <p class="is-size-3 is-size-4-mobile has-text-white">
                        A sales opportunity for all covering the entire eCommerce supply chain
                    </p>
                    <p class="is-size-3 is-size-4-mobile has-text-white">
                        with strong added value on the key components that brings traffic and conversion
                    </p>
                </div>

                <div>
                    <button class="button-opacity-shadow
                                uk-transition-scale-up 
                                uk-transition-opaque">
                        <a class="is-size-3 
                                    has-text-white
                                    is-size-4-mobile
                                    uk-padding-small
                                    font-AbadiExtraLight"
                                    href="/e-commerce">
                            Read more
                        </a>
                    </button>
                </div>

            </div>

        </div>


        {{-- Payment solution Banner --}}
        <a class="uk-flex
                    banner50 
                    uk-width-1-1
                    uk-flex-center
                    uk-flex-middle
                    uk-grid-collapse 
                    uk-background-cover
                    uk-position-relative 
                    uk-background-norepeat
                    uk-background-center-center
                    services-payment-solution-banner-bg" 
                    uk-grid
                    href="/payment">
                
            <div class="opacity5-black-mask uk-position-absolute"></div>
            
            <div class="uk-flex
                        uk-light
                        uk-overlay 
                        top-display
                        uk-flex-column
                        uk-text-center
                        uk-overlay-defaul
                        text-shadow-black">

                <p class="uk-heading-medium is-size-3-mobile uk-margin-remove font-AbadiExtraLight">
                    China’s payment services
                </p>

                <div class="uk-flex
                            uk-padding        
                            uk-flex-center
                            uk-flex-middle
                            uk-flex-column
                            uk-padding-remove-horizontal">
                    <p class="is-size-3 is-size-4-mobile has-text-white">
                        Optimization of Chinese customer experience and conversion
                    </p>
                    <p class="is-size-3 is-size-4-mobile has-text-white">
                        by providing familiar and trusted payment methods
                    </p>
        
                </div>

            </div>

        </a>


        {{-- Advisory Banner --}}
        <div class="uk-flex
                    banner50 
                    uk-width-1-1
                    uk-flex-center
                    uk-flex-middle
                    uk-grid-collapse
                    uk-background-cover
                    uk-position-relative 
                    uk-background-norepeat
                    uk-background-center-center
                    services-advisory-banner-bg" 
                    uk-grid>
            
            <div class="opacity5-black-mask uk-position-absolute"></div>

            <div class="uk-flex
                        uk-light
                        uk-overlay
                        top-display
                        uk-text-center
                        uk-flex-column
                        uk-overlay-defaul
                        text-shadow-black">

                <p class="uk-heading-medium is-size-3-mobile uk-margin-remove font-AbadiExtraLight">
                    Advisory
                </p>

                <div class="uk-flex
                            uk-padding        
                            uk-flex-center
                            uk-flex-middle
                            uk-flex-column
                            uk-padding-remove-horizontal">
                    <p class="is-size-3 is-size-4-mobile has-text-white">
                        Expert advisory on strategic business approach for the China market. 
                    </p>
                    <p class="is-size-3 is-size-4-mobile has-text-white">
                        Including, but not limited to, offline sales channels
                    </p>
        
                </div>

            </div>

        </div>

    </div>

@endsection
