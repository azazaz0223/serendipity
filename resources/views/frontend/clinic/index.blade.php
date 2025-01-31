@extends('frontend.layout.layout')

@include('frontend.clinic.custom')

@section('body')

    <body
        class="page-template-default page page-id-16 woocommerce-block-theme-has-button-styles mfn-footer-default  color-custom content-brightness-light input-brightness-light style-simple underline-links button-animation-fade layout-full-width if-modern-overlay hide-love header-transparent header-fw sticky-header sticky-tb-color ab-hide menu-link-color menuo-right menuo-no-borders subheader-both-center responsive-overflow-x-mobile mobile-tb-center mobile-side-slide no-sec-padding-mob mobile-mini-mr-ll mobile-sticky mobile-header-mini mobile-icon-user-ss mobile-icon-wishlist-ss mobile-icon-search-ss mobile-icon-wpml-ss mobile-icon-action-ss tr-header tr-menu be-page-16 be-reg-2756"
        style="background-color: #FFE0E0;">
        <div id="Wrapper">

            @include('frontend.layout.header')

            <div id="Content" role="main">
                <div class="content_wrapper clearfix">
                    <main class="sections_group">
                        <div class="entry-content" itemprop="mainContentOfPage">
                            <div class="mfn-builder-content mfn-default-content-buider">
                                <!-- Title Clinic Assessment Start -->
                                <section
                                    class="section mcb-section mfn-default-section mcb-section-a67ifiqcj default-width">
                                    <div class="mcb-background-overlay"></div>
                                    <div
                                        class="section_wrapper mfn-wrapper-for-wraps mcb-section-inner mcb-section-inner-a67ifiqcj">
                                        <div class="wrap mcb-wrap mcb-wrap-lc4q2y3uc one tablet-one laptop-one mobile-one clearfix"
                                            data-desktop-col="one" data-laptop-col="laptop-one" data-tablet-col="tablet-one"
                                            data-mobile-col="mobile-one">
                                            <div
                                                class="mcb-wrap-inner mcb-wrap-inner-lc4q2y3uc mfn-module-wrapper mfn-wrapper-for-wraps">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-d2r6xlwx one laptop-one tablet-one mobile-one column_heading">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-d2r6xlwx mcb-item-heading-inner">
                                                        <h2 class="title">合作診所</h2>
                                                    </div>
                                                </div>
                                                <!-- Clinic Start -->
                                                <div
                                                    class="column mcb-column mcb-item-ofml9jsm7 four-fifth laptop-four-fifth tablet-one mobile-five-sixth column_tabs mfn-item-custom-width">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-ofml9jsm7 mcb-item-tabs-inner">
                                                        <div class="jq-tabs tabs_wrapper tabs_horizontal">
                                                            <ul>
                                                                <li><a href="#tab-1"></a></li>
                                                            </ul>
                                                            <div id="tab-1">
                                                                <div class="clinic">
                                                                    @foreach ($clinics as $clinic)
                                                                        <div class="dental">
                                                                            <img src="{{ asset($clinic->image) }}"
                                                                                alt="{{ $clinic->name }}}" />
                                                                            <div>
                                                                                <a href="{{ $clinic->url }}"
                                                                                    target="_blank">
                                                                                    <h4>{{ $clinic->name }}</h4>
                                                                                </a>
                                                                                <ul>
                                                                                    <li>{{ $clinic->county . $clinic->district . $clinic->address }}
                                                                                    </li>
                                                                                    <li>{{ $clinic->phone }}</li>
                                                                                    <li>
                                                                                        <dl>
                                                                                            @foreach ($clinic->businessHours as $hour)
                                                                                                <dt>{{ $hour->day }}</dt>
                                                                                                <dd>{{ $hour->time }}​
                                                                                                </dd>
                                                                                            @endforeach
                                                                                        </dl>
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="links">
                                                                                    <a href="{{ $clinic->line_id }}​"
                                                                                        target="_blank"
                                                                                        rel="noopener noreferrer">官方Line@​</a>
                                                                                    <a href="{{ $clinic->facebook }}"
                                                                                        target="_blank"
                                                                                        rel="noopener noreferrer">FB</a>
                                                                                    <a href="{{ $clinic->google_map }}"
                                                                                        target="_blank"
                                                                                        rel="noopener noreferrer">Map</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Assessment Start -->
                                                <div
                                                    class="column mcb-column mcb-item-qevk069j one laptop-one tablet-one mobile-one column_button">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-qevk069j mcb-item-button-inner">
                                                        <a class="button  button_right button_size_4"
                                                            href="{{ route('frontend.evaluationForm.index') }}">
                                                            <span class="button_icon">
                                                                <i class="icon-right-dir" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="button_label">立刻免費線上評估 </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            @include('frontend.layout.footer')
        </div>
        @include('frontend.layout.slide')
        @include('frontend.layout.jsStyle')
    </body>
@endsection
