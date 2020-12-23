@extends ('master')

@section('linkedin')

    {{-- Linkedin share meta --}}
    <meta property="og:site_name" content="+8h.com">
    <meta property="og:type" content="page"/>
    <meta property="og:title" content ="We are from Scandinavia and China with deep bonds with both countries
            We are obsessed about finding the right formula for driving traffic and maximizing conversions
            We are digital brand growers"/>
    <meta name="author" content="+8h">
    <meta property="og:image" content ="https://plus8h.com/image/about/about-team-bg.jpg"/>
    <meta property="og:image:width" content="960"/>
    <meta property="og:image:height" content="398"/>
    <meta property="og:description" content ="We are from Scandinavia and China with deep bonds with both countries
            We are obsessed about finding the right formula for driving traffic and maximizing conversions
            We are digital brand growers"/>
    <meta property="og:url" content ="https://plus8h.com/about"/>

@stop


@section('content')

    {{-- page content --}}
    <div class="uk-grid-collapse uk-width-1-1">
        
        {{-- Key Banner --}}
        <div class="uk-width-1-1
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

        
        {{-- About Banner --}}

        <div class="uk-flex
                    uk-width-1-1
                    uk-flex-middle
                    uk-flex-center
                    uk-grid-collapse 
                    key-banner-height
                    uk-background-cover
                    uk-position-relative 
                    uk-background-norepeat
                    about-we-are-digital-bg
                    uk-background-center-center" 
                    uk-grid>
                
            <div class="uk-flex 
                        is-size-4
                        uk-flex-column
                        uk-text-center
                        has-text-white
                        uk-width-4-5@l
                        uk-padding-large
                        text-shadow-black">
                <p>
                    We are from Scandinavia and China with deep bonds with both countries 
                </p>
                <p class="uk-padding">
                    We are obsessed about finding the right formula for driving traffic and maximizing conversions
                </p>
                <p>
                    We are digital brand growers
                </p>
            </div>

        </div>


        {{-- About Banner Body --}}
        <div class="uk-flex
                    uk-width-1-1
                    uk-flex-column
                    uk-flex-middle
                    uk-flex-center
                    uk-padding
                    uk-padding-remove-horizontal
                    yellow-background
                    about-banner-body">


            <div class="uk-flex
                        uk-width-5-6@l
                        uk-flex-column
                        uk-flex-middle
                        uk-flex-center
                        overflow-scroll">

                <div class="is-size-2 
                            is-size-4-mobile 
                            has-text-white
                            uk-text-center">
                    <p>
                        +8h is your sales service partner
                    </p>
                    <p>
                        toward the Chinese consumer 
                    </p>
                </div>

                <div>
                    <p class="is-size-4 is-size-5-mobile has-text-white uk-padding-small">
                        we are with you all the way
                    </p>
                </div>

                <div class="uk-card
                            is-size-5
                            uk-width-1-1
                            has-text-white
                            uk-child-width-1-2@m
                            uk-padding-small
                            mobile-content-margin-right-0"
                            uk-grid>
                    <div class="uk-card-media-left">
                        <p class="uk-padding-small mobile-text-center">
                            Just a decade ago, China accounted for less than 1% of all  global online transactions, now more than 55%. These figures have made Chinese consumers one of the most important target audiences globally. However, China’s eCommerce behaviours are unique from the rest of the world.
                        </p>
                    </div>

                    <div class="">
                        <p class="uk-padding-small mobile-text-center">
                            We at +8h focus on helping brands effectively navigate around the Chinese digital landscape by acting as your online sales team. We are  located  in Falkenberg, Sweden, and we have a team of online sales experts operating your brands from our Shanghai office.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    

        {{-- Team Banner --}}

        <div class="uk-flex
                    uk-flex-column
                    uk-flex-middle
                    uk-flex-center
                    uk-padding-large
                    about-banner-body
                    uk-background-cover
                    about-team-banner-bg
                    text-shadow-black-112">
            
            <div>
                <p class="is-size-2
                            has-text-white">
                    Our team
                </p>
            </div>

            <div class="uk-width-3-4@s 
                        uk-width-3-4@m 
                        uk-text-center
                        uk-padding-large">
                <p class="is-size-4
                            is-size-5-mobile
                            has-text-white">
                            We come from various backgrounds, ranging from consulting to operations, 
                            via sales, eCommerce, branding and logistic. 
                            What we have in common is that we all have a professional relation to both Scandinavia and China, 
                            enabling us to be the gate keepers of your brand. 
                            At the same time have the know-how on the Chinese consumers to maximize your conversion. 
                </p>
            </div>

        </div>


        {{-- Founder Banner --}}

        <div class="uk-card
                    uk-width-1-1
                    uk-card-default  
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            
            {{-- founder image --}}
            <div class="about-founder-image
                        banner50
                        uk-cover-container
                        uk-card-media-left
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-top-center">          
            </div>

            {{-- Right Text container--}}
            <div class="uk-flex
                        banner50
                        uk-padding-small	
                        yellow-background">

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-flex-column
                            uk-flex-center
                            uk-width-3-4@m">

                    <div class="uk-padding-small uk-padding-remove-horizontal">
                        <p class="is-size-5 has-text-white">CEO & CO-FOUNDER</p>
                        <p class="is-size-1 is-size-4-mobile has-text-white">
                            Max Twisselmann
                        </p>
                    </div>
                    <p class="is-size-5 is-size-6-mobile has-text-white">
                        +10 years of experience from sales and operation in China. 
                        Established a Swedish brand in China from zero to successfully 
                        building a profitable company with full organization, own factory and sales office.

                    </p>

                </div>

            </div>

        </div>


        {{-- Partner & Exeecutive Banner --}}

        {{-- Simon Westerlund --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default  
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            {{-- Simon image --}}
            <div class="about-simon-image
                        banner50
                        uk-flex-last@s 
                        uk-cover-container
                        uk-card-media-right
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-top-center">               
            </div>

            {{-- Left Text container--}}
            <div class="uk-flex
                        banner50
                        uk-padding-small
                        yellow-background">

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-flex-column
                            uk-flex-center
                            uk-width-3-4@m">

                    <div class="uk-padding-small uk-padding-remove-horizontal">
                        <p class="is-size-5 has-text-white">PARTNER</p>
                        <p class="is-size-1 is-size-4-mobile has-text-white">
                            Simon Westerlund
                        </p>
                    </div>
                    <p class="is-size-5 is-size-6-mobile has-text-white">
                        +10 years of experience consulting Nordic companies into the Chinese market within energy, 
                        environment, health, logistic and technology industries with strong Chinese network. 
                    </p>

                </div>

            </div>

        </div>


        {{-- Nathan Sun  --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default  
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            {{-- background image --}}
            <div class="about-nathan-image
                        banner50
                        uk-cover-container
                        uk-card-media-left
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-top-right">         
            </div>

            {{-- Left Text container--}}
            <div class="uk-flex
                        banner50
                        uk-padding-small
                        yellow-background">

                {{-- Text --}}
                <div class="uk-flex
                            banner50
                            uk-card-body
                            uk-flex-column
                            uk-flex-center
                            uk-width-3-4@m
                            uk-padding-small">

                    <div class="uk-padding-small uk-padding-remove-horizontal">
                        <p class="is-size-5 has-text-white">ADVISOR</p>
                        <p class="is-size-1 is-size-4-mobile has-text-white">
                            Nathan Sun 
                        </p>
                    </div>
                    <p class="is-size-4-tablet is-size-5-mobile has-text-white">
                        +20 years’ experience of product merchandising in the Chinese market 
                        with brands including Bestseller, Etam, Adidas and Esprit.
                    </p>

                </div>

            </div>

        </div>

        {{-- Per Mortensen --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default  
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>

            {{-- background image --}}
            <div class="about-Per-image
                        banner50
                        uk-flex-last@s 
                        uk-cover-container
                        uk-card-media-right
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-top-center">   
            </div>

            {{-- Left Text container--}}
            <div class="uk-flex
                        banner50
                        uk-padding-small
                        yellow-background">

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-flex-column
                            uk-flex-center
                            uk-width-3-4@m">

                    <div class="uk-padding-small uk-padding-remove-horizontal">
                        <p class="is-size-5 has-text-white">ADVISOR</p>
                        <p class="is-size-1 is-size-4-mobile has-text-white">
                            Per Mortensen
                        </p>
                    </div>
                    <p class="is-size-4-tablet is-size-6-mobile has-text-white">
                        +10 years’ experience of sales operation on the Chinese market 
                        with strong management experience both of Chinese and Nordic teams.
                    </p>

                </div>

            </div>

        </div>
        

        {{-- Sarah Chu  --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default  
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            {{-- background image --}}
            <div class="about-sarah-image
                        banner50
                        uk-cover-container
                        uk-card-media-left
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-top-center">
            </div>

            {{-- Left Text container--}}
            <div class="uk-flex
                        banner50
                        uk-padding-small
                        yellow-background">

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-flex-column
                            uk-flex-center
                            uk-width-3-4@m">

                    <div class="uk-padding-small uk-padding-remove-horizontal">
                        <p class="is-size-5 has-text-white">ADVISOR</p>
                        <p class="is-size-1 is-size-4-mobile has-text-white">
                            Sarah Chu
                        </p>
                    </div>
                    <p class="is-size-4-tablet is-size-6-mobile has-text-white">
                        +10 years’ experience in branding consumer brands in China 
                        and gained several rewards for her work as Head of Marketing of ECCO Shoes.
                    </p>

                </div>

            </div>

        </div>


        {{-- Lindsay Li --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default  
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>

            {{-- background image --}}
            <div class="about-lindsay-image
                        banner50
                        uk-flex-last@s 
                        uk-cover-container
                        uk-card-media-right
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-top-center">   
            </div>

            {{-- Left Text container--}}
            <div class="uk-flex
                        banner50
                        uk-padding-small
                        yellow-background">

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-flex-column
                            uk-flex-center
                            uk-width-3-4@m">

                    <div class="uk-padding-small uk-padding-remove-horizontal">
                        <p class="is-size-5 has-text-white">PROJECT MANAGER</p>
                        <p class="is-size-1 is-size-4-mobile has-text-white">
                            Lindsay Li
                        </p>
                    </div>
                    <p class="is-size-4-tablet is-size-6-mobile has-text-white">
                        +6 years’ experience of project management within varies areas including consultancy, 
                        trademark and media advertising agency in China.
                    </p>

                </div>

            </div>

        </div>


        {{-- Xiaonan Cui  --}}
        <div class="uk-card
                    uk-width-1-1
                    uk-card-default  
                    uk-grid-collapse 
                    uk-child-width-1-2@m" 
                    uk-grid>
            
            {{-- background image --}}
            <div class="about-xiaonan-image
                        banner50
                        uk-cover-container
                        uk-card-media-left
                        uk-background-cover
                        uk-background-norepeat
                        uk-background-top-center">
            </div>

            {{-- Left Text container--}}
            <div class="uk-flex
                        banner50
                        uk-padding-small
                        yellow-background">

                {{-- Text --}}
                <div class="uk-flex
                            uk-card-body
                            uk-flex-column
                            uk-flex-center
                            uk-width-3-4@m">

                    <div class="uk-padding-small uk-padding-remove-horizontal">
                        <p class="is-size-5 has-text-white">Lead Software Engineer</p>
                        <p class="is-size-1 is-size-4-mobile has-text-white">
                            Xiaonan Cui
                        </p>
                    </div>
                    <p class="is-size-4-tablet is-size-6-mobile has-text-white">
                        +10 years’ experience of developing, 
                        designing and writing mobile products and solutions in the Chinese market 
                        with strong experience from ERP, education, tourism and lo T industries.
                    </p>

                </div>

            </div>

        </div>

    </div>

@endsection
