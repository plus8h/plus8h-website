@extends ('master')

@section('linkedin')

    {{-- Linkedin share meta --}}
    <meta property="og:site_name" content="+8h.com">
    <meta property="og:type" content="page"/>
    <meta property="og:title" content ="Investments too heavy for set up
            Chinese entity and presence?
            Below options might be your solution"/>
    <meta name="author" content="+8h">
    <meta property="og:image" content ="https://plus8h.com//image/homepage/cross-border.jpg"/>
    <meta property="og:image:width" content="960"/>
    <meta property="og:image:height" content="398"/>
    <meta property="og:description" content ="+8h cross border sales"/>
    <meta property="og:url" content ="https://plus8h.com/cross-border"/>

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
                    about-we-are-digital-bg" 
                    uk-grid>

            <div class="opacity7-gradient-mask uk-position-absolute"></div>
                
            <div class="uk-light
                uk-overlay
                uk-padding
                uk-width-3-4@m 
                uk-overlay-defaul
                uk-position-bottom-left ">

                <p class="is-size-4-mobile is-size-2-desktop uk-heading-medium uk-margin-remove font-AbadiExtraLight">
                    Investments too heavy for set up
                </p>

                <p class="is-size-4-mobile is-size-2-desktop uk-heading-medium uk-margin-remove font-AbadiExtraLight">
                    Chinese entity and presence?
                </p>

                <p class="is-size-4-mobile is-size-2-desktop uk-heading-medium uk-margin-remove font-AbadiExtraLight">
                    Below options might be your solution
                </p>

            </div>

        </div>

        <div class="uk-width-1-1
                    uk-grid-collapse
                    yellow-background
                    uk-position-relative" 
                    uk-grid>

            {{-- map section container --}}
            <div class="uk-flex
                        uk-card
                        uk-width-1-1
                        uk-flex-middle
                        uk-child-width-1-2@m
                        uk-padding-small
                        uk-margin-bottom"
                        uk-grid>


                {{-- left China map section --}}
                <div class="uk-flex
                            uk-flex-around
                            uk-flex-center
                            uk-flex-column
                            uk-flex-middle
                            key-banner-height
                            uk-card-media-left
                            uk-position-relative
                            cross-border-key-banner-content-height">

                    <div class="uk-width-1-1
                                uk-position-relative
                                commerce-marketplace-key-banner-content-body">

                        <div class="uk-width-1-2
                                    uk-position-absolute
                                    commerce-cross-border-China-map">
                            <img src="{{asset('/image/commerce/cross-border/china-map.png')}}" alt="+8h cross border China map">
                        </div>

                        <div class="uk-flex
                                    uk-height-1-1
                                    uk-flex-cloumn
                                    uk-flex-middle
                                    uk-flex-center">
                            
                            <div class="has-text-centered">
                                <h3 class="is-size-1 is-size-3-mobile has-text-white">
                                    <b>DOMESTIC SALES</b>
                                </h3>
                
                                <p class="is-size-4 has-text-white">
                                    <b>Store owner has Chinese business license</b>
                                </p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="uk-flex
                                uk-flex-cloumn
                                uk-flex-middle
                                uk-padding-small"
                                style="height: 30%">
                        <div class="is-size-5 has-text-white has-text-centered">
                            <p>
                                Chinese legal entity required
                            </p>
                            <p>
                                Corporate bank account within China and payment in CNY
                            </p>
                            <p>
                                Trademark registered in China
                            </p>
                            <p>
                                Warehouse within China
                            </p>
                            <p>
                                Shipment and delivery within China
                            </p>
                        </div>
                    </div>

                </div>


                {{-- right global map section --}}
                <div class="uk-flex
                            uk-flex-around
                            uk-flex-center
                            uk-flex-column
                            uk-flex-middle
                            key-banner-height
                            uk-position-relative
                            cross-border-key-banner-content-height">

                    <div class="uk-width-1-1
                                uk-position-relative
                                commerce-marketplace-key-banner-content-body">

                        <div class="uk-width-1-2
                                    uk-position-absolute
                                    commerce-cross-border-global-map">
                            <img src="{{asset('/image/commerce/cross-border/global-map.png')}}" alt="+8h cross border global map">
                        </div>

                        <div class="uk-flex
                                    uk-height-1-1
                                    uk-flex-cloumn
                                    uk-flex-middle
                                    uk-flex-center">
                            
                            <div class="has-text-centered">
                                <h3 class="is-size-1 is-size-3-mobile has-text-white">
                                    <b>CROSS BORDER SALES</b>
                                </h3>
                
                                <p class="is-size-4 has-text-white">
                                    <b>Business is located abroad and import per-order basis</b>
                                </p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="uk-flex
                                uk-flex-cloumn
                                uk-flex-middle
                                uk-padding-small"
                                style="height: 30%">
                        <div class="is-size-5 has-text-white has-text-centered">
                            <p>
                                International legal entity
                            </p>
                            <p>
                                Trademark registered in home country
                            </p>
                            <p>
                                Trademark registered in China
                            </p>
                            <p>
                                Warehouse outside China
                            </p>
                            <p>
                                Orders shipped from overseas directly to Chinese consumers
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        {{-- Tmall store Banner --}}
        
        {{--  Container  --}}
        <div class="uk-flex
                    uk-flex-center
                    uk-flex-column
                    uk-flex-middle
                    uk-width-1-1
                    yellow-background-45deg
                    key-banner-height">

            <div class="image is-96x96 uk-margin-top">
                <img src="{{ asset('/image/commerce/cross-border/icon-tmall-global.png') }}" alt="+8h cross border eCommerce Tmall global">
            </div>

            {{-- Text --}}
            <div class="uk-flex
                        uk-card-body
                        uk-flex-column
                        uk-width-4-5@m
                        uk-flex-center">

                <div class="has-text-centered">

                    <p class="is-size-4 has-text-white is-size-5-mobile">
                        Is the biggest cross border eCommerce platform base under the Taobao group. 
                    </p>

                    <p class="uk-padding-small uk-padding-remove-left is-size-4 has-text-white is-size-5-mobile">
                        From warehouse to delivery – one stop service. Share and utilize the traffic from the Taobao eco system
                    </p>

                </div>

            </div>

        </div>


        {{-- JD Banner --}}

        {{--  Container  --}}
        <div class="uk-flex
                    uk-flex-center
                    uk-flex-column
                    uk-flex-middle
                    uk-width-1-1
                    yellow-background-45deg
                    key-banner-height">

            <div class="image uk-width-medium uk-margin-top ">
                <img src="{{ asset('/image/commerce/cross-border/icon-jd-global.png') }}" alt="+8h cross border eCommerce JD global">
            </div>

            {{-- Text --}}
            <div class="uk-flex
                        uk-card-body
                        uk-flex-column
                        uk-width-4-5@m
                        uk-flex-center">

                <div class="has-text-centered">

                    <p class="is-size-4 has-text-white is-size-5-mobile">
                        Is a growing cross border eCommerce platform and the main competitor of Tmall Global. 
                        Providing full service solution
                    </p>
                    <p class="uk-padding-small uk-padding-remove-left is-size-4 has-text-white is-size-5-mobile">
                        Perfect merge with the WeChat system make JD Global a good solution for brands to leverage on the WeChat community and traffic
                    </p>

                </div>

            </div>

        </div>


        {{-- own WeChat store --}}

        {{--  Container  --}}
        <div class="uk-flex
                    uk-flex-center
                    uk-flex-column
                    uk-flex-middle
                    uk-width-1-1
                    yellow-background-45deg
                    key-banner-height">

            <div class="image is-96x96 uk-margin-top">
                <img src="{{ asset('/image/commerce/cross-border/icon-wechat-miniprogram.png') }}" alt="+8h cross border eCommerce WeChat miniprogram">
            </div>

            {{-- Text --}}
            <div class="uk-flex
                        uk-card-body
                        uk-flex-column
                        uk-width-4-5@m
                        uk-flex-center">

                <div class="has-text-centered">

                    <p class="is-size-4 has-text-white is-size-6-mobile">
                        Even without a Chinese legal entity, brands are able to setup cross border store on the WeChat system. This platform offer the fast growing popularity of the so called mini-program store solution, 
                        an “app-in-app” function with no downloads nor installations required.
                    </p>
                    <p class="uk-padding-small uk-padding-remove-left is-size-4 has-text-white is-size-6-mobile">
                        Good choice for oversea brands and also virtual goods offered by hotels, sightseeing tours, museums etc.
                    </p>

                </div>

            </div>

        </div>


    </div>

@endsection
