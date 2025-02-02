@extends('frontend.layout.layout')

@include('frontend.evaluationForm.custom')

@section('body')
    <link rel="stylesheet" href="{{ asset('css/frontend/camera/camera.css') }}">

    <body
        class="page-template-default page page-id-52 mfn-footer-default color-custom content-brightness-light input-brightness-light style-default button-round layout-full-width if-modern-overlay no-content-padding header-transparent header-fw sticky-header sticky-tb-color ab-hide menu-link-color menuo-right logo-sticky-width-auto subheader-both-center footer-copy-center mobile-tb-center mobile-side-slide mobile-mini-mr-ll mobile-icon-user-ss mobile-icon-wishlist-ss mobile-icon-search-ss mobile-icon-wpml-ss mobile-icon-action-ss tr-header tr-menu be-page-52 be-reg-26408"
        style="background-color: #FFE0E0;">
        <div id="Wrapper">

            <!-- Header Start -->
            <header id="mfn-header-template" data-mobile-type="" data-type=""
                class="mfn-header-tmpl mfn-header-main mfn-header-tmpl-default">
                <div class="mfn-builder-content mfn-header-tmpl-builder"></div>
            </header>


            <div id="Content" role="main">
                <div class="content_wrapper clearfix">
                    <div class="sections_group">
                        <div class="entry-content" itemprop="mainContentOfPage">


                            <div class="mfn-builder-content mfn-default-content-buider">

                                <div
                                    class="section mcb-section mfn-default-section mcb-section-6a5abb2c0  no-margin-h no-margin-v dark full-screen full-width">
                                    <div class="mcb-background-overlay"></div>
                                    <div class="section_wrapper mcb-section-inner mcb-section-inner-6a5abb2c0">

                                        <div class="wrap mcb-wrap mcb-wrap-44c8128df three-fourth tablet-three-fourth mobile-one clearfix"
                                            data-desktop-col="three-fourth" data-tablet-col="tablet-three-fourth"
                                            data-mobile-col="mobile-one">
                                            <div class="mcb-wrap-inner mcb-wrap-inner-44c8128df">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-57844b947 four-fifth tablet-four-fifth mobile-three-fourth column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-57844b947 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <div class="framedesc">
                                                                <img class="scale-with-grid js-camera-tips-picture">
                                                                <p class="js-camera-tips-text">
                                                                    <span>正面照</span>自然的咬合並微笑後牙咬緊<br>避免下顎刻意與上顎對齊
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-97ef07d47 one-fifth tablet-one-fifth mobile-one-fourth column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-97ef07d47 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <div class="number">
                                                                <p class="num1 js-camera-window-id">1</p>
                                                                <p class="slash">/</p>
                                                                <p class="num2 js-camera-window-total">4</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wrap mcb-wrap mcb-wrap-408f42d58 one tablet-one mobile-one clearfix"
                                            data-desktop-col="one" data-tablet-col="tablet-one"
                                            data-mobile-col="mobile-one">
                                            <div class="mcb-wrap-inner mcb-wrap-inner-408f42d58">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-262c22554 one tablet-one mobile-one column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-262c22554 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <div class="js-camera-container largeframe largeframe1"
                                                                style="width: 320px; height: 240px; overflow: hidden; transform: scaleX(-1);">
                                                                <div></div>
                                                                <video autoplay="autoplay" playsinline="playsinline"
                                                                    style="width: 320px; height: 240px;"></video>
                                                            </div>
                                                            <div class="js-camera-photo largeframe" style="display: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wrap mcb-wrap mcb-wrap-32da33f2e one tablet-one mobile-one clearfix"
                                            data-desktop-col="one" data-tablet-col="tablet-one"
                                            data-mobile-col="mobile-one">
                                            <div class="mcb-wrap-inner mcb-wrap-inner-32da33f2e">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-a65942b93 one tablet-one mobile-one column_column shotframe">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-a65942b93 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <div class="control">
                                                                <a class="shot js-shot-photo-button">
                                                                    <img class="scale-with-grid"
                                                                        src="{{ asset('images/frontend/icon/icon-camera-orange.svg') }}">
                                                                </a>
                                                                <a class="reshot js-reshot-photo-button"
                                                                    style="display: none;">重拍</a>
                                                                <a class="check js-confirm-photo-button"
                                                                    style="display: none;">
                                                                    <img class="scale-with-grid"
                                                                        src="{{ asset('images/frontend/icon/icon-check.svg') }}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Footer Start -->
            <footer id="mfn-footer-template" class="mfn-footer-tmpl mfn-footer">
                <div class="mfn-builder-content mfn-footer-tmpl-builder"></div>
            </footer>

        </div>

        @include('frontend.layout.jsStyle')

        <script type="text/javascript" src="{{ asset('js/jquery-ui-core.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery-ui-tabs.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins-extra.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/camera/webcam.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/camera/camera-page.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/handler.js') }}"></script>
    </body>
@endsection
