@extends ('master')

@section('linkedin')

    {{-- Linkedin share meta --}}
    <meta property="og:site_name" content="+8h.com">
    <meta property="og:type" content="page"/>
    <meta property="og:title" content ="The most known payment method globally is visa and MasterCard but in China, 
            the commonly most used today is instead mobile payment method which also has to develop rapidly in Scandinavia. 
            However, the solutions used in China are rarely used in Scandinavia which is Alipay and WeChat Pay."/>
    <meta name="author" content="+8h">
    <meta property="og:image" content ="https://plus8h.com/image/services/Alipay-from-SCMP.jpg"/>
    <meta property="og:image:width" content="960"/>
    <meta property="og:image:height" content="398"/>
    <meta property="og:description" content ="The most known payment method globally is visa and MasterCard but in China, 
            the commonly most used today is instead mobile payment method which also has to develop rapidly in Scandinavia. 
            However, the solutions used in China are rarely used in Scandinavia which is Alipay and WeChat Pay."/>
    <meta property="og:url" content ="https://plus8h.com/payment"/>

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
                    auto-key-banner-height
                    uk-background-center-center
                    services-payment-solution-banner-bg" 
                    uk-grid>

            <div class="opacity7-gradient-mask uk-position-absolute"></div>

            <div class="uk-flex
                        uk-light
                        uk-overlay 
                        top-display
                        uk-width-3-4@m
                        uk-width-1-1@s
                        uk-text-center
                        uk-flex-column
                        uk-overlay-defaul
                        auto-key-banner-margin-top">
                <p class="is-size-1
                        is-size-3-mobile
                        uk-heading-medium 
                        uk-margin-remove 
                        uk-padding
                        uk-padding-remove-top
                        font-AbadiExtraLight">
                    Payment Solution
                </p>

                <div class="uk-flex 
                            uk-flex-center
                            uk-flex-middle
                            uk-flex-column">
                    <p class="is-size-4 is-size-5-mobile has-text-white">
                        The most known payment method globally is visa and mastercard but 
                        in China the commonly most used today is instead mobile payment method 
                        which also have develop rapidly in Scandinavia. However, the solutions used 
                        in China are rarely used in Scandinavia which is Alipay and WeChat Pay. At +8h, 
                        we find it important that we give the best and most trusted experience to the 
                        Chinese consumer when they are purchasing. We therefore offer the most used 
                        payment solutions to our brands and ensure that the platforms are utilized to 
                        the full and that the store staff are trained accordingly.
                    </p>
        
                </div>

            </div>

        </div>


        {{-- Key Banner --}}
        <div class="uk-flex
                    uk-width-1-1
                    uk-flex-center
                    uk-flex-middle
                    auto-key-banner-height
                    uk-grid-collapse 
                    uk-background-cover
                    uk-position-relative 
                    uk-background-norepeat
                    uk-background-center-center
                    services-payment-solution-alipay-bg" 
                    uk-grid>

            <div class="alipay-mask uk-position-absolute"></div>

            <div class="uk-flex
                        uk-light
                        uk-overlay 
                        top-display
                        uk-flex-middle
                        uk-text-center
                        uk-flex-column
                        uk-overlay-defaul">

                <div class="uk-padding uk-padding-remove-horizontal">
                    <img src="{{ asset('/image/services/payment-solution/alipay-reverse.png') }}" alt="+8h cross border payment solution alipay">
                </div>

                <div class="uk-flex
                            uk-flex-center
                            uk-flex-middle
                            uk-width-2-3@l
                            uk-width-1-1@s
                            uk-flex-column">

                    <p class="is-size-3 is-size-5-mobile has-text-white text-shadow-black-112">
                        520 million Chinese users. 
                        Alipay is not only a payment app but also functioning as a shopping app, 
                        marketing app and platform for business profiles with store information. 
                        Also allowing sales coupons and promotions, pictures and videos, 
                        it has a search function, a review section and allow push notifications
                    </p>
        
                </div>

            </div>

        </div>


        {{-- Key Banner --}}
        <div class="uk-flex
                    uk-width-1-1
                    uk-flex-center
                    uk-flex-middle
                    auto-key-banner-height
                    uk-grid-collapse 
                    uk-background-cover
                    uk-position-relative 
                    uk-background-norepeat
                    uk-background-center-center
                    services-payment-solution-wechatpay-bg" 
                    uk-grid>

            <div class="wechatpay-mask uk-position-absolute"></div>

            <div class="uk-flex
                        uk-light
                        uk-overlay 
                        top-display
                        uk-flex-middle
                        uk-text-center
                        uk-flex-column
                        uk-overlay-defaul">

                <div class="uk-padding uk-padding-remove-horizontal">
                    <img src="{{ asset('/image/services/payment-solution/wechat-pay-reverse.png') }}" alt="+8h cross border payment solution WeChat pay">
                </div>

                <div class="uk-flex        
                            uk-flex-center
                            uk-flex-middle
                            uk-width-2-3@l
                            uk-width-1-1@s
                            uk-flex-column">

                    <p class="is-size-3 is-size-5-mobile has-text-white uk-text-center text-shadow-black-112">
                        Over 600 million of the +1 billion WeChat users have WeChat pay function. 
                        WeChat is not only a payment app but a so called “super app”, 
                        functioning as a social media platform with personal wall to share content, 
                        direct messaging, official accounts for businesses to attract 
                        followers and allowing direct sales, plus many other features. 
                        Offering both online and offline payment options
                    </p>
        
                </div>

            </div>

        </div>

    </div>

@endsection
