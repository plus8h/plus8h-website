<div class="uk-position-relative">
    <div class="uk-position-top">
        <nav class="uk-navbar-container uk-navbar-transparent uk-light" 
            uk-navbar="boundary-align: true; align: left;mode: click;duration:0"
            id="nav">
            
            <a class="image is-96x96
                    uk-flex-column
                    uk-flex-center" href="/"
                    style="display: flex!important">
                <img class="nav-bar-logo uk-margin-small-left" src="{{asset('../image/icon/p8h-logo-nav.png')}}" alt="+8h logo">
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

