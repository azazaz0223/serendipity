<div id="Header_wrapper" class="">
    <header id="Header">
        <div class="header_placeholder"></div>
        <div id="Top_bar">
            <div class="container">
                <div class="column one">
                    <div class="top_bar_left clearfix">
                        <div class="logo">
                            <a id="logo" href="{{ route('frontend.index') }}" title="serendipity" data-height="60"
                                data-padding="15">
                                <img class="logo-main scale-with-grid svg"
                                    src="{{ asset('images/frontend/icon/logo-red.svg') }}" alt="logo-red"
                                    data-no-retina />
                                <img class="logo-sticky scale-with-grid svg"
                                    src="{{ asset('images/frontend/icon/logo-red.svg') }}" alt="logo-red"
                                    data-no-retina />
                                <img class="logo-mobile scale-with-grid svg"
                                    src="{{ asset('images/frontend/icon/logo-red.svg') }}" alt="logo-red"
                                    data-no-retina />
                                <img class="logo-mobile-sticky scale-with-grid svg"
                                    src="{{ asset('images/frontend/icon/logo-red.svg') }}" alt="logo-red"
                                    data-no-retina />
                            </a>
                        </div>
                        <div class="menu_wrapper">
                            <a class="responsive-menu-toggle  is-sticky" href="#" aria-label="mobile menu"><i
                                    class="icon-menu-fine" aria-hidden="true"></i></a>
                            <nav id="menu" role="navigation" aria-expanded="false" aria-label="Main menu">
                                <ul id="menu-main" class="menu menu-main">
                                    <li id="menu-item-36"
                                        class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                            href=""><span>案例分享</span></a></li>
                                    <li id="menu-item-35"
                                        class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                            href="{{ route('frontend.clinic.index') }}"><span>診所地圖</span></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="secondary_menu_wrapper"></div>
                    </div>
                    <div class="top_bar_right ">
                        <div class="top_bar_right_wrapper">
                            <a href="{{ route('frontend.index') }}#price"
                                class="button action_button top-bar-right-button ">認識療程方案</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
