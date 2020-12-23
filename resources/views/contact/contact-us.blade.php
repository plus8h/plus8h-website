@section('linkedin')

    {{-- Linkedin share meta --}}
    <meta property="og:site_name" content="+8h.com">
    <meta property="og:type" content="page"/>
    <meta property="og:title" content ="We are digital brand growers contact us"/>
    <meta name="author" content="+8h">
    <meta property="og:image" content ="https://plus8h.com/image/contact-us/contact-us-bg.jpg"/>
    <meta property="og:image:width" content="960"/>
    <meta property="og:image:height" content="398"/>
    <meta property="og:description" content ="We are digital brand growers contact us"/>
    <meta property="og:url" content ="https://plus8h.com/contact"/>

@stop



@include ('layout.common.header')

    {{-- page content --}}
    <div class="" style="height: 100vh">

            {{-- nav --}}
            <div class="uk-position-relative">
                <div class="uk-position-top">
                    <nav class="uk-navbar-container uk-navbar-transparent uk-light" 
                        uk-navbar="boundary-align: true; align: left;mode: click;duration:0"
                        id="nav">
                        
                        <a class="uk-flex-column
                                uk-flex-center" href="/"
                                style="display: flex!important">
                            <img class="uk-margin-small-left contact-nav-logo" src="{{asset('../image/icon/p8h-logo-nav.png')}}" alt="+8h logo">
                        </a>
            
                        <div class="uk-navbar-right">
            
                            <ul class="uk-navbar-nav">
                                <li>
                                    <a href="" id="navbarClickSection">
                                        <span class="is-size-5
                                                    has-text-white
                                                    nav-bar-menu-text
                                                    uk-margin-small-right" 
                                                    id="navbarTitle">
                                            menu
                                        </span>
            
                                        <span uk-navbar-toggle-icon class="has-text-white"></span>
                                        
                                    </a>
                                
                                    
                                    <div class="uk-margin-remove
                                                yellow-background
                                                uk-navbar-dropdown" 
                                                style="height:100vh;width:100vw;box-shadow:0 0 0;"
                                                id="navbarDropdownContainer">
            
                                        <ul class="uk-nav uk-navbar-dropdown-nav uk-width-2-5@m" id="navbarDropdownUl">
                                            <li class="uk-nav-divider uk-width-1-4@m"></li>
                                            <li class="uk-nav-header uk-margin-remove-top uk-padding-remove">
                                                <a class="has-text-white font-AbadiExtraLight is-size-4" href="/about">About us</a>
                                            </li>
                                            <li class="uk-nav-header uk-margin-remove-top uk-padding-remove">
                                                <a class="has-text-white font-AbadiExtraLight is-size-4" href="/our-services">Services</a>
                                            </li>
                                            <li class="uk-nav-header uk-margin-remove-top uk-padding-remove">
                                                <a class="has-text-white font-AbadiExtraLight is-size-4" href="/our-insights">Insights</a>
                                            </li>
                                            <li class="uk-nav-header uk-margin-remove-top uk-padding-remove">
                                                <a class="has-text-white font-AbadiExtraLight is-size-4" href="/contact">Contact us</a>
                                            </li>
                                        </ul>
            
                                    </div>
                                </li>
                            </ul>
            
                        </div>
                    </nav>
            
                    {{-- <div class="uk-navbar-dropbar"></div> --}}
                </div>
            </div>


            {{-- contact-us container --}}
            <div class="level
                        columns
                        is-gapless 
                        uk-height-1-1
                        uk-margin-remove-bottom
                        uk-grid-collapse">
                
                {{-- left image background --}}
                <div class="column
                            is-one-third
                            contact-us-bg
                            uk-height-1-1                
                            uk-background-cover
                            uk-position-relative 
                            uk-background-norepeat
                            uk-background-center-center">

                    <div class="opacity5-black-mask uk-position-absolute"></div>

                    <div class="uk-flex
                                uk-flex-center
                                uk-flex-middle
                                uk-width-1-1
                                uk-height-1-1">

                        <p class="top-display 
                                    has-text-white
                                    is-size-1
                                    font-AbadiExtraLight">Contact Us</p>

                    </div>

                </div>
                
                
                {{-- right contact us form --}}
                <div class="uk-flex
                            uk-flex-middle
                            uk-height-1-1
                            yellow-background
                            right-container">

                    <div class="uk-flex
                                uk-flex-center
                                uk-padding-small">

                        {{-- form --}}
                        <form class="uk-flex
                                    uk-flex-column
                                    uk-flex-center
                                    uk-width-3-4@m" 
                                action="mail/send" method="post">
                            {{-- laravel CSRF --}}
                            @csrf
                            {{-- drop select --}}
                            <div class="uk-flex
                                        uk-flex-bottom
                                        uk-margin-small">

                                    <div class="form-left-text-container-width uk-margin-small-right">
                                        <p class="is-size-5
                                        has-text-white
                                        font-AbadiExtraLight">Area of Interest</p>
                                    </div>

                                    <div class="uk-width-expand">
                                        <select class="uk-width-1-1
                                                        plus8h-select"
                                                name="select">
                                            <option value=""></option>
                                            <option name="E-commerce" value="E-commerce" style="color:black">eCommerce</option>
                                            <option name="PaymentSolution" value="Payment solution" style="color:black">Payment solution</option>
                                            <option name="Advisory" value="Advisory" style="color:black">Advisory</option>
                                        </select>
                                    </div>
                                    
                            </div>

                            {{-- First Name input --}}
                            <div class="uk-flex
                                        uk-flex-bottom
                                        uk-margin-small">

                                    <div class="form-left-text-container-width uk-margin-small-right">
                                        <p class="is-size-5
                                        has-text-white
                                        font-AbadiExtraLight">First Name</p>
                                    </div>

                                    <div class="uk-width-expand">
                                        <input class="uk-width-expand
                                                    plus8h-input"
                                                type="text"
                                                name="firstName">
                                    </div>
                                    
                            </div>

                            {{-- Last Name input --}}
                            <div class="uk-flex
                                        uk-flex-bottom
                                        uk-margin-small">

                                    <div class="form-left-text-container-width uk-margin-small-right">
                                        <p class="is-size-5
                                        has-text-white
                                        font-AbadiExtraLight">Last Name</p>
                                    </div>

                                    <div class="uk-width-expand">
                                        <input class="uk-width-expand
                                                    plus8h-input"
                                                type="text"
                                                name="lastName">
                                    </div>
                                    
                            </div>

                            {{-- Company input --}}
                            <div class="uk-flex
                                        uk-flex-bottom
                                        uk-margin-small">

                                    <div class="form-left-text-container-width uk-margin-small-right">
                                        <p class="is-size-5
                                        has-text-white
                                        font-AbadiExtraLight">Company</p>
                                    </div>

                                    <div class="uk-width-expand">
                                        <input class="uk-width-expand
                                                    plus8h-input"
                                                type="text"
                                                name="company">
                                    </div>
                                    
                            </div>


                            {{-- Email input --}}
                            <div class="uk-flex
                                        uk-flex-bottom
                                        uk-margin-small">

                                    <div class="form-left-text-container-width uk-margin-small-right">
                                        <p class="is-size-5
                                        has-text-white
                                        font-AbadiExtraLight">Email</p>
                                    </div>

                                    <div class="uk-width-expand">
                                        <input class="uk-width-expand
                                                    plus8h-input"
                                                type="text"
                                                name="email"
                                                required="required">
                                    </div>
                                    
                            </div>           
                            
                            {{-- Enquiry textarea --}}
                            <div class="uk-width-1-1
                                        uk-margin-small">

                                    <div class="form-left-text-container-width uk-margin-small-right">
                                        <p class="is-size-5
                                        has-text-white
                                        font-AbadiExtraLight">Enquiry</p>
                                    </div>

                                    <div class="uk-width-1-1
                                                uk-width-expand
                                                uk-margin-small-top">
                                        <textarea class="uk-width-1-1
                                                        plus8h-textarea" 
                                                        name="enquiry" id=""></textarea>
                                    </div>
                                    
                            </div>                 
                            
                            {{-- tip text --}}
                            <div>
                                <p class="is-size-6
                                            has-text-white
                                            font-AbadiExtraLight">
                                    When you click submit, we will store and process your personal data 
                                    that you have entered above. Our privacy policy is here. 
                                    Please read this to understand how we handle and use your personal information, 
                                    and to understand your rights with regard to your personal data that we process. 
                                </p>
                            </div>

                            {{-- submit --}}
                            <div class="uk-width-1-1
                                        uk-margin-small-top
                                        has-text-centered">

                                    <div class="uk-width-1-1
                                                uk-width-expand">
                                        <button class="button 
                                                    is-primary 
                                                    is-medium 
                                                    is-inverted 
                                                    is-outlined
                                                    top-display
                                                    font-AbadiExtraLight" 
                                                    type="submit"
                                                    value="Submit input"
                                                    href="mail/send">Submit</button>
                                    </div>
                                    
                            </div>   
                            
                            @if(Session::has('message'))
                            <div class="uk-padding-small">
                                <p class="is-size-3 has-text-white has-text-centered">
                                    <b>We have received your message.</b>
                                </p>
                            </div>
                            @endif
                            
                        </form>

                    </div>

                </div>

            </div>


            {{-- footer --}}
            <div class="uk-position-relative">
                <div class="uk-position-bottom">
                    <footer class="uk-flex
                                    uk-flex-bottom
                                    uk-flex-between"
                                    style="height: 120px">

                        <div class="uk-flex
                                    uk-flex-middle
                                    uk-flex-row">

                            <div>
                                <a class="image is-96x96
                                        uk-flex-column
                                        uk-flex-center" href="/"
                                        style="display: flex!important">
                                    <img class="nav-bar-logo" src="{{asset('../image/icon/p8h-logo.png')}}" alt="+8h logo">
                                </a>
                            </div>

                            <div class="is-size-5
                                        has-text-white">
                                <p><b>+8h ©2020</b></p>
                            </div>

                        </div>


                        <div class="uk-flex
                                    uk-padding-small 
                                    uk-flex-row">
                            <div class="uk-padding-small">
                                <a class="image is-32x32" href="https://www.linkedin.com/company/plus8h/">
                                    <img class="nav-bar-logo" src="{{asset('../image/icon/social-linkedin.png')}}" alt="+8h linkedin href icon">
                                </a>
                            </div>

                            <div  class="uk-padding-small uk-padding-remove-left">
                                <a class="image is-32x32" href="/contact">
                                    <img class="nav-bar-logo" src="{{asset('../image/icon/contact-us.png')}}" alt="+8h email href icon">
                                </a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>

    </div>

@include ('layout.common.footer')