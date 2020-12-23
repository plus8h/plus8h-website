@extends ('master')

@section('linkedin')

    {{-- Linkedin share meta --}}
    <meta property="og:site_name" content="+8h.com">
    <meta property="og:type" content="page"/>
    <meta property="og:title" content ="Own your commercial channel in China"/>
    <meta name="author" content="+8h">
    <meta property="og:image" content ="https://plus8h.com/image/commerce/owe-site-bg.jpg"/>
    <meta property="og:image:width" content="960"/>
    <meta property="og:image:height" content="398"/>
    <meta property="og:description" content ="Own your commercial channel in China"/>
    <meta property="og:url" content ="https://plus8h.com/own-site"/>

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
                    key-banner-height
                    uk-background-cover
                    uk-position-relative 
                    uk-background-norepeat
                    uk-background-bottom-center
                    commerce-own-site-key-banner-bg" 
                    uk-grid>

            <div class="opacity7-gradient-mask uk-position-absolute"></div>

            <div class="uk-light
                uk-overlay
                uk-padding
                uk-overlay-defaul
                uk-position-bottom-left ">

                <p class="uk-heading-medium is-size-3-mobile uk-margin-remove font-AbadiExtraLight">Own your commercial</p>
                <p class="uk-heading-medium is-size-3-mobile uk-margin-remove font-AbadiExtraLight">channel in China</p>

            </div>

        </div>

        {{-- Service Banner JD/Tmall --}}

        {{--  Container  --}}
        <div class="uk-flex
                    uk-flex-center
                    uk-flex-column
                    uk-flex-middle
                    uk-width-1-1
                    yellow-background-45deg
                    key-banner-height">

            <div class="image is-96x96 uk-margin-top">
                <img src="{{ asset('/image/commerce/own-site/icon-wechat-miniprogram.png') }}" alt="+8h cross border eCommerce own site WeChat miniprogram">
            </div>

            {{-- Text --}}
            <div class="uk-flex
                        uk-card-body
                        uk-flex-column
                        uk-width-2-5@m
                        uk-flex-center">

                <div class="has-text-centered"
                    style="padding: 2rem 0">
                    <p class="is-size-4 is-size-5-mobile has-text-white">
                        Build your own WeChat store within the WeChat eco system.
                    </p>

                    <p class="uk-padding-small uk-padding-remove-left is-size-4 is-size-5-mobile has-text-white">
                        Zero distance from social influence to conversion and purchase. 
                    </p>

                    <p class="is-size-4 is-size-5-mobile has-text-white">
                        Manage consumers’ community and consumer journey in one click.
                    </p> 
                </div>

            </div>

        </div>


        {{-- Service Banner JD/Tmall --}}

        {{--  Container  --}}
        <div class="uk-flex
                    uk-flex-center
                    uk-flex-column
                    uk-flex-middle
                    uk-width-1-1
                    yellow-background-45deg
                    key-banner-height">

            <div class="image is-96x96 uk-margin-top">
                <img src="{{ asset('/image/commerce/own-site/icons8-website-100.png') }}" alt="+8h cross border eCommerce own site">
            </div>

            {{-- Text --}}
            <div class="uk-flex
                        uk-card-body
                        uk-flex-column
                        uk-width-2-5@m
                        uk-flex-center">

                <div class="has-text-centered"
                    style="padding: 2rem 0;">
                    <p class="is-size-4 is-size-5-mobile has-text-white">
                        Official Chinese website to establish the presence in China.
                    </p>

                    <p class="uk-padding-small uk-padding-remove-left is-size-4 is-size-5-mobile has-text-white">
                        Perfect connection with global site in user experience from know to buy.
                    </p>

                    <p class="is-size-4 is-size-5-mobile has-text-white">
                        SEO & SEM optimization to fit the Chinese market. 
                    </p>
                </div>

            </div>

        </div>


    </div>

@endsection
