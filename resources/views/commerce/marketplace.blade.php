@extends ('master')

@section('linkedin')

    {{-- Linkedin share meta --}}
    <meta property="og:site_name" content="+8h.com">
    <meta property="og:type" content="page"/>
    <meta property="og:title" content ="Establish your business in key marketplaces"/>
    <meta name="author" content="+8h">
    <meta property="og:image" content ="https://plus8h.com/image/homepage/tmall.jpg"/>
    <meta property="og:image:width" content="960"/>
    <meta property="og:image:height" content="398"/>
    <meta property="og:description" content ="Establish your business in key marketplaces"/>
    <meta property="og:url" content ="https://plus8h.com/marketplace"/>
    
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
                    uk-background-center-center
                    commerce-marketplace-key-banner-bg" 
                    uk-grid>

            <div class="opacity7-gradient-mask uk-position-absolute"></div>
                
            <div class="uk-light
                uk-overlay
                uk-padding
                uk-overlay-defaul
                uk-position-bottom-left ">

                <p class="uk-heading-medium is-size-3-mobile uk-margin-remove font-AbadiExtraLight">Establish your business</p>
                <p class="uk-heading-medium is-size-3-mobile uk-margin-remove font-AbadiExtraLight">in key marketplaces</p>

            </div>

        </div>


        
        {{--Tmall banner --}}

        {{--  Container  --}}
        <div class="uk-flex
                    uk-flex-center
                    uk-flex-column
                    uk-flex-middle
                    uk-width-1-1
                    yellow-background-45deg
                    key-banner-height">

            <div class="image is-96x96 uk-margin-top">
                <img src="{{ asset('/image/commerce/marketplace/icon-tmall.png') }}" alt="+8h cross border eCommerce Tmall">
            </div>

            {{-- Text --}}
            <div class="uk-flex
                        uk-card-body
                        uk-flex-column
                        uk-width-4-5@m
                        uk-flex-center">

                <div class="has-text-centered">
                    <p class="is-size-4 is-size-6-mobile has-text-white">
                        The biggest eCommerce platform in China with full consumer experience from see to buy.
                    </p>

                    <p class="uk-padding-small uk-padding-remove-left is-size-4 is-size-6-mobile has-text-white">
                        Suitable for a great variation of products. Rather high investment entry level but with massive consumer base.
                    </p>

                    <p class="uk-padding-small uk-padding-remove-left is-size-4 is-size-6-mobile has-text-white">
                        As part of the Alibaba group Taobao and Tmall stores can merge smoothly with Weibo as a traffic gate to drive attention and conversion
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

            <div class="image is-96x96 uk-margin-top">
                <img src="{{ asset('/image/commerce/marketplace/icon-jd.png') }}" alt="+8h cross border eCommerce marketplace JD">
            </div>

            {{-- Text --}}
            <div class="uk-flex
                        uk-card-body
                        uk-flex-column
                        uk-width-4-5@m
                        uk-flex-center">

                <div class="has-text-centered"
                    style="padding: 2rem 0">
                    <p class="is-size-4 is-size-5-mobile has-text-white">
                        The second largest eCommerce platform in China.
                    </p>

                    <p class="uk-padding-small uk-padding-remove-left is-size-4 is-size-5-mobile has-text-white">
                        It is very strong within electrical appliances, digital items and show growth in grocery and lifestyle categories.
                    </p>

                </div>

            </div>

        </div>


        {{-- Pingduoduo Banner --}}

        {{--  Container  --}}
        <div class="uk-flex
                    uk-flex-center
                    uk-flex-column
                    uk-flex-middle
                    uk-width-1-1
                    yellow-background-45deg
                    key-banner-height">

            <div class="image is-96x96 uk-margin-top">
                <img src="{{ asset('/image/commerce/marketplace/icon-pdd.png') }}" alt="+8h cross border eCommerce marketplace PDD">
            </div>

            {{-- Text --}}
            <div class="uk-flex
                        uk-card-body
                        uk-flex-column
                        uk-width-4-5@m
                        uk-flex-center">

                <div class="has-text-centered">

                    <p class="is-size-4 is-size-5-mobile has-text-white">
                        One of the quickest growing platforms. PingDuoDuo is strong with its power of group purchases’ with huge quantities of sales in short period.
                    </p>

                    <p class="uk-padding-small uk-padding-remove-left is-size-4 is-size-5-mobile has-text-white">
                        PingDuoDuo focus on 2nd and 3rd tier markets where they have a solid user base.
                        Suitable for daily life products as well as food and other FMCG items
                    </p>

                </div>

            </div>

        </div>


        {{-- Sunning Banner --}}

        {{--  Container  --}}
        <div class="uk-flex
                    uk-flex-center
                    uk-flex-column
                    uk-flex-middle
                    uk-width-1-1
                    yellow-background-45deg
                    key-banner-height">

            <div class="image is-96x96 uk-margin-top">
                <img src="{{ asset('/image/commerce/marketplace/icon-suning.png') }}" alt="+8h cross border eCommerce marketplace SuNing">
            </div>

            {{-- Text --}}
            <div class="uk-flex
                        uk-card-body
                        uk-flex-column
                        uk-width-4-5@m
                        uk-flex-center">

                <div class="has-text-centered">

                    <p class="is-size-4 is-size-5-mobile has-text-white">
                        Similar to JD.com, Suning previously focused mainly on electrical appliances and digital items, where they are still strong today, and had a massive offline store network.
                    </p>

                    <p class="uk-padding-small uk-padding-remove-left is-size-4 is-size-5-mobile has-text-white">
                        Owned by Alibaba group, Suning is seen as a competitor to JD.com in several ways. 
                        With base on previous business set up, Suning has a solid quantity of members and users
                    </p>

                </div>

            </div>

        </div>


        {{-- Yunji Banner --}}

        {{--  Container  --}}
        <div class="uk-flex
                    uk-flex-center
                    uk-flex-column
                    uk-flex-middle
                    uk-width-1-1
                    yellow-background-45deg
                    key-banner-height">

            <div class="image is-96x96 uk-margin-top">
                <img src="{{ asset('/image/commerce/marketplace/icon-yunji.png') }}" alt="+8h cross border eCommerce marketplace YunJi">
            </div>

            {{-- Text --}}
            <div class="uk-flex
                        uk-card-body
                        uk-flex-column
                        uk-width-4-5@m
                        uk-flex-center">

                <div class="has-text-centered">

                    <p class="is-size-4 is-size-5-mobile has-text-white">
                        Comparable to PingDuoDuo’s model with membership and more of a community sale function, Yunji is one of the new eCommerce platforms who jumps out of the market with strong business growth.
                    </p>

                    <p class="is-size-4 is-size-5-mobile has-text-white">
                        Yunji focuses on the lower tier cities and is strong in quick sales of low priced products
                    </p>

                </div>

            </div>

        </div>

    </div>

@endsection
