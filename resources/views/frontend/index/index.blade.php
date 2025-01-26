@extends('frontend.layout.layout')

@include('frontend.index.custom')

@section('body')

    <body
        class="home page-template-default page page-id-181 woocommerce-block-theme-has-button-styles mfn-footer-default  color-custom content-brightness-light input-brightness-light style-simple underline-links button-animation-fade layout-full-width full-width-content if-modern-overlay no-content-padding hide-love header-transparent header-fw sticky-header sticky-tb-color ab-hide menu-link-color menuo-right menuo-no-borders subheader-both-center responsive-overflow-x-mobile mobile-tb-center mobile-side-slide no-sec-padding-mob mobile-mini-mr-ll mobile-sticky mobile-header-mini mobile-icon-user-ss mobile-icon-wishlist-ss mobile-icon-search-ss mobile-icon-wpml-ss mobile-icon-action-ss tr-header tr-menu be-page-181 be-reg-2756">

        <div id="Wrapper">
            @include('frontend.layout.header')
            <div id="Content" role="main">
                <div class="content_wrapper clearfix">
                    <main class="sections_group">
                        <div class="entry-content" itemprop="mainContentOfPage">
                            <div class="mfn-builder-content mfn-default-content-buider">
                                {{-- 輪播 --}}
                                <div class="container-fluid px-0 mb-0">
                                    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach ($carousels as $carousel)
                                                <div class="carousel-item @if ($loop->first) active @endif">
                                                    <img class="w-100 d-block" src="{{ asset($carousel->image) }}"
                                                        alt="Image">
                                                    <div class="carousel-caption"></div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            style="background-color: transparent;" data-bs-target="#header-carousel"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            style="background-color: transparent;" data-bs-target="#header-carousel"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>

                                {{-- 影片 --}}
                                <section
                                    class="section mcb-section mfn-default-section mcb-section-s8qrv05qa has-video default-width"
                                    style="">
                                    <div class="section_video">
                                        <div class="mask"></div>
                                        @forelse ($videos as $video)
                                            <video poster="" autoplay="true" loop="true" muted="muted"
                                                playsinline="true">
                                                <source type="video/mp4" src="{{ $video }}" />
                                            </video>
                                        @empty
                                            <p class="text-center">目前沒有影片。</p>
                                        @endforelse
                                    </div>
                                    <div class="mcb-background-overlay"></div>
                                    <div
                                        class="section_wrapper mfn-wrapper-for-wraps mcb-section-inner mcb-section-inner-s8qrv05qa">
                                        <div class="wrap mcb-wrap mcb-wrap-ki3mzn01 one tablet-one laptop-one mobile-one clearfix"
                                            data-desktop-col="one" data-laptop-col="laptop-one" data-tablet-col="tablet-one"
                                            data-mobile-col="mobile-one" style="">
                                            <div
                                                class="mcb-wrap-inner mcb-wrap-inner-ki3mzn01 mfn-module-wrapper mfn-wrapper-for-wraps">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div class="column mcb-column mcb-item-txvipa9h one laptop-one tablet-one mobile-one column_lottie"
                                                    style="">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-txvipa9h mcb-item-lottie-inner">
                                                        <div class="mfn-lottie-wrapper">
                                                            <div id="mfn_lottie_478_904" class="lottie"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                {{-- 跑馬燈 --}}
                                <section
                                    class="section mcb-section mfn-default-section mcb-section-4ec0c57bc  no-margin-h no-margin-v default-width"
                                    style="">
                                    <div class="mcb-background-overlay"></div>
                                    <div
                                        class="section_wrapper mfn-wrapper-for-wraps mcb-section-inner mcb-section-inner-4ec0c57bc">
                                        <div class="wrap mcb-wrap mcb-wrap-bff2beb2a one tablet-one laptop-one mobile-one clearfix"
                                            data-desktop-col="one" data-laptop-col="laptop-one" data-tablet-col="tablet-one"
                                            data-mobile-col="mobile-one">
                                            <div
                                                class="mcb-wrap-inner mcb-wrap-inner-bff2beb2a mfn-module-wrapper mfn-wrapper-for-wraps">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div id="plan"
                                                    class="column mcb-column mcb-item-03f4f3719 one laptop-one tablet-one mobile-one column_html">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-03f4f3719 mcb-item-html-inner">
                                                        <div class="mfn-html-editor-wrapper">
                                                            <div class="marquee">
                                                                <div class="track">
                                                                    @for ($i = 0; $i < 8; $i++)
                                                                        <img class="scale-with-grid"
                                                                            src="{{ asset('images/frontend/icon/serendipity.svg') }}">
                                                                    @endfor
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                {{-- 八個牙齒圖片 --}}
                                <section
                                    class="section mcb-section mfn-default-section mcb-section-c03246503  no-margin-v default-width">
                                    <div class="mcb-background-overlay"></div>
                                    <div
                                        class="section_wrapper mfn-wrapper-for-wraps mcb-section-inner mcb-section-inner-c03246503">
                                        <div class="wrap mcb-wrap mcb-wrap-9baafc557 three-fifth tablet-two-third laptop-three-fifth mobile-one clearfix"
                                            data-desktop-col="three-fifth" data-laptop-col="laptop-three-fifth"
                                            data-tablet-col="tablet-two-third" data-mobile-col="mobile-one">
                                            <div
                                                class="mcb-wrap-inner mcb-wrap-inner-9baafc557 mfn-module-wrapper mfn-wrapper-for-wraps">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-2p2kr72z one-fourth laptop-one-fourth tablet-one-fourth mobile-one-second column_icon_box_2 iconbox">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-2p2kr72z mcb-item-icon_box_2-inner">
                                                        <div
                                                            class="mfn-icon-box mfn-icon-box-top mfn-icon-box-center mfn-icon-box-box-scale">
                                                            <div class="icon-wrapper">
                                                                <img width="160" height="120"
                                                                    src="{{ asset('images/frontend/tooth1.png') }}"
                                                                    class="attachment-full size-full" alt=""
                                                                    decoding="async"
                                                                    sizes="(max-width:767px) 160px, 160px">
                                                            </div>
                                                            <div class="desc-wrapper">
                                                                <h4 class="title label">戽斗(反咬)</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-jllof4zyk one-fourth laptop-one-fourth tablet-one-fourth mobile-one-second column_icon_box_2 iconbox">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-jllof4zyk mcb-item-icon_box_2-inner">
                                                        <div
                                                            class="mfn-icon-box mfn-icon-box-top mfn-icon-box-center mfn-icon-box-box-scale">
                                                            <div class="icon-wrapper">
                                                                <img width="160" height="120"
                                                                    src="{{ asset('images/frontend/tooth2.png') }}"
                                                                    class="attachment-full size-full" decoding="async"
                                                                    loading="lazy"
                                                                    sizes="auto, (max-width:767px) 160px, 160px" />
                                                            </div>
                                                            <div class="desc-wrapper">
                                                                <h4 class="title label">開咬</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-6wc8kbpli one-fourth laptop-one-fourth tablet-one-fourth mobile-one-second column_icon_box_2 iconbox">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-6wc8kbpli mcb-item-icon_box_2-inner">
                                                        <div
                                                            class="mfn-icon-box mfn-icon-box-top mfn-icon-box-center mfn-icon-box-box-scale">
                                                            <div class="icon-wrapper">
                                                                <img width="160" height="120"
                                                                    src="{{ asset('images/frontend/tooth3.png') }}"
                                                                    class="attachment-full size-full" decoding="async"
                                                                    loading="lazy"
                                                                    sizes="auto, (max-width:767px) 160px, 160px" />
                                                            </div>
                                                            <div class="desc-wrapper">
                                                                <h4 class="title label">齒列擁擠</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-44cqnih8 one-fourth laptop-one-fourth tablet-one-fourth mobile-one-second column_icon_box_2 iconbox">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-44cqnih8 mcb-item-icon_box_2-inner">
                                                        <div
                                                            class="mfn-icon-box mfn-icon-box-top mfn-icon-box-center mfn-icon-box-box-scale">
                                                            <div class="icon-wrapper">
                                                                <img width="160" height="120"
                                                                    src="{{ asset('images/frontend/tooth4.png') }}"
                                                                    class="attachment-full size-full" decoding="async"
                                                                    loading="lazy"
                                                                    sizes="auto, (max-width:767px) 160px, 160px" />
                                                            </div>
                                                            <div class="desc-wrapper">
                                                                <h4 class="title label">錯咬</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-jyk50npqj one-fourth laptop-one-fourth tablet-one-fourth mobile-one-second column_icon_box_2 iconbox">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-jyk50npqj mcb-item-icon_box_2-inner">
                                                        <div
                                                            class="mfn-icon-box mfn-icon-box-top mfn-icon-box-center mfn-icon-box-box-scale">
                                                            <div class="icon-wrapper">
                                                                <img width="160" height="120"
                                                                    src="{{ asset('images/frontend/tooth5.png') }}"
                                                                    class="attachment-full size-full" decoding="async"
                                                                    loading="lazy"
                                                                    sizes="auto, (max-width:767px) 160px, 160px" />
                                                            </div>
                                                            <div class="desc-wrapper">
                                                                <h4 class="title label">暴牙</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-9qybzgqii one-fourth laptop-one-fourth tablet-one-fourth mobile-one-second column_icon_box_2 iconbox">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-9qybzgqii mcb-item-icon_box_2-inner">
                                                        <div
                                                            class="mfn-icon-box mfn-icon-box-top mfn-icon-box-center mfn-icon-box-box-scale">
                                                            <div class="icon-wrapper">
                                                                <img width="160" height="120"
                                                                    src="{{ asset('images/frontend/tooth6.png') }}"
                                                                    class="attachment-full size-full" alt=""
                                                                    decoding="async" loading="lazy"
                                                                    sizes="auto, (max-width:767px) 160px, 160px" />
                                                            </div>
                                                            <div class="desc-wrapper">
                                                                <h4 class="title label">深咬</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-rmhqw9k6 one-fourth laptop-one-fourth tablet-one-fourth mobile-one-second column_icon_box_2 iconbox">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-rmhqw9k6 mcb-item-icon_box_2-inner">
                                                        <div
                                                            class="mfn-icon-box mfn-icon-box-top mfn-icon-box-center mfn-icon-box-box-scale">
                                                            <div class="icon-wrapper">
                                                                <img width="160" height="120"
                                                                    src="{{ asset('images/frontend/tooth7.png') }}"
                                                                    class="attachment-full size-full" decoding="async"
                                                                    loading="lazy"
                                                                    sizes="auto, (max-width:767px) 160px, 160px" />
                                                            </div>
                                                            <div class="desc-wrapper">
                                                                <h4 class="title label">牙縫過大</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-bztgfp6i8 one-fourth laptop-one-fourth tablet-one-fourth mobile-one-second column_icon_box_2 iconbox">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-bztgfp6i8 mcb-item-icon_box_2-inner">
                                                        <div
                                                            class="mfn-icon-box mfn-icon-box-top mfn-icon-box-center mfn-icon-box-box-scale">
                                                            <div class="icon-wrapper">
                                                                <img width="160" height="120"
                                                                    src="{{ asset('images/frontend/tooth8.png') }}"
                                                                    class="attachment-full size-full" decoding="async"
                                                                    loading="lazy"
                                                                    sizes="auto, (max-width:767px) 160px, 160px" />
                                                            </div>
                                                            <div class="desc-wrapper">
                                                                <h4 class="title label">二次矯正</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-45ade80b2 one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-45ade80b2 mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                                <div class="column mcb-column mcb-item-622783bf2 one laptop-one tablet-one mobile-one column_heading animate"
                                                    data-anim-type="fadeInUp">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-622783bf2 mcb-item-heading-inner">
                                                        <h2 class="title">我適合 <img
                                                                src="{{ asset('images/frontend/icon/serendipity_red.svg') }}"
                                                                style="height:1em;"><br>齒列矯正方案嗎？</h2>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-68f2cf3a4 one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-68f2cf3a4 mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                                <div class="column mcb-column mcb-item-592a0399c one laptop-one tablet-one mobile-one column_column animate"
                                                    data-anim-type="fadeInUp">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-592a0399c mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <p>{{ $indexSetting->subtitle_suitable_plan }}</p>
                                                            <div id="guidejar-container"
                                                                style="position: fixed; width: 0px; height: 0px; top: 0px; left: 0px; z-index: 2147483647; overflow: visible;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-aa603fc21 one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-aa603fc21 mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                                <div class="column mcb-column mcb-item-c42589036 one laptop-one tablet-one mobile-one column_button animate"
                                                    data-anim-type="fadeInUp">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-c42589036 mcb-item-button-inner">
                                                        <a class="button  button_right button_size_4" href="#price"
                                                            title="">
                                                            <span class="button_icon"><i class="icon-right-dir"
                                                                    aria-hidden="true"></i></span>
                                                            <span class="button_label">了解自己適合哪一種矯正方案！</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-decoration bottom"
                                        style="background-image:url({{ asset('images/frontend/icon/footer_curve.svg') }});height:px">
                                    </div>
                                </section>

                                {{-- 齒列矯正4步驟 --}}
                                <section
                                    class="section mcb-section mfn-default-section mcb-section-558b2d17e  no-margin-v default-width"
                                    id="step">
                                    <div class="mcb-background-overlay"></div>
                                    <div
                                        class="section_wrapper mfn-wrapper-for-wraps mcb-section-inner mcb-section-inner-558b2d17e">
                                        <div class="wrap mcb-wrap mcb-wrap-de241448e one tablet-one laptop-one mobile-one clearfix"
                                            data-desktop-col="one" data-laptop-col="laptop-one"
                                            data-tablet-col="tablet-one" data-mobile-col="mobile-one">
                                            <div
                                                class="mcb-wrap-inner mcb-wrap-inner-de241448e mfn-module-wrapper mfn-wrapper-for-wraps">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-e7ca55b32 one laptop-one tablet-one mobile-one column_image">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-e7ca55b32 mcb-item-image-inner">
                                                        <div
                                                            class="image_frame image_item no_link scale-with-grid alignnone no_border svg">
                                                            <div class="image_wrapper ">
                                                                <img src="{{ asset('images/frontend/icon/serendipity.svg') }}"
                                                                    class="scale-with-grid" alt=""
                                                                    decoding="async" loading="lazy" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-a77eab41f one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-a77eab41f mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-102dde718 one laptop-one tablet-one mobile-one column_heading">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-102dde718 mcb-item-heading-inner">
                                                        <h2 class="title">牙齒矯正4步驟</h2>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-548e48714 one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-548e48714 mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-95bc00f80 one laptop-one tablet-one mobile-one column_column">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-95bc00f80 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <p>{{ $indexSetting->subtitle_four_steps }}</p>
                                                            <div id="guidejar-container"
                                                                style="position: fixed; width: 0px; height: 0px; top: 0px; left: 0px; z-index: 2147483647; overflow: visible;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-4226fea59 one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-4226fea59 mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrap mcb-wrap mcb-wrap-b1cbc7dbf one tablet-one laptop-one mobile-one clearfix"
                                            data-desktop-col="one" data-laptop-col="laptop-one"
                                            data-tablet-col="tablet-one" data-mobile-col="mobile-one">
                                            <div
                                                class="mcb-wrap-inner mcb-wrap-inner-b1cbc7dbf mfn-module-wrapper mfn-wrapper-for-wraps">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                @for ($i = 1; $i <= 4; $i++)
                                                    <div class="column mcb-column mcb-item-9568e7d11 one-fourth laptop-one-fourth tablet-one-fourth mobile-one-second column_icon_box_2 animate"
                                                        data-anim-type="fadeInUp">
                                                        <div
                                                            class="mcb-column-inner mfn-module-wrapper mcb-column-inner-9568e7d11 mcb-item-icon_box_2-inner">
                                                            <div
                                                                class="mfn-icon-box mfn-icon-box-top mfn-icon-box-center mfn-icon-box-box-scale">
                                                                <div class="icon-wrapper">
                                                                    <img src="{{ asset($indexSetting["step_{$i}_button"]) }}"
                                                                        class="attachment-full size-full" alt=""
                                                                        decoding="async" loading="lazy" />
                                                                </div>
                                                                <div class="desc-wrapper">
                                                                    <h4 class="title label">
                                                                        {{ $indexSetting["step_{$i}_phase"] }}
                                                                        <br>
                                                                        {{ $indexSetting["step_{$i}_description"] }}
                                                                    </h4>
                                                                    <div class="desc">
                                                                        {{ $indexSetting["step_{$i}_price"] }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="wrap mcb-wrap mcb-wrap-6da4fb7ac one tablet-one laptop-one mobile-one clearfix"
                                            data-desktop-col="one" data-laptop-col="laptop-one"
                                            data-tablet-col="tablet-one" data-mobile-col="mobile-one">
                                            <div
                                                class="mcb-wrap-inner mcb-wrap-inner-6da4fb7ac mfn-module-wrapper mfn-wrapper-for-wraps">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-913a2208b one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-913a2208b mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-4c756230c one laptop-one tablet-one mobile-one column_button">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-4c756230c mcb-item-button-inner">
                                                        <a class="button  button_right button_size_4"
                                                            href="assessment.php" title="">
                                                            <span class="button_icon"><i class="icon-right-dir text-dark"
                                                                    aria-hidden="true"></i></span>
                                                            <span class="button_label">立即免費線上評估 </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-decoration bottom"
                                        style="background-image:url({{ asset('images/frontend/icon/curve_grey.svg') }});height:px">
                                    </div>
                                </section>

                                {{-- 隱形牙套矯正方案 --}}
                                <section
                                    class="section mcb-section mfn-default-section mcb-section-fe659fcf3  no-margin-h no-margin-v default-width"
                                    id="price">
                                    <div class="mcb-background-overlay"></div>
                                    <div
                                        class="section_wrapper mfn-wrapper-for-wraps mcb-section-inner mcb-section-inner-fe659fcf3">
                                        <div class="wrap mcb-wrap mcb-wrap-5f15ad762 five-sixth tablet-one laptop-one mobile-one clearfix"
                                            data-desktop-col="five-sixth" data-laptop-col="laptop-one"
                                            data-tablet-col="tablet-one" data-mobile-col="mobile-one">
                                            <div
                                                class="mcb-wrap-inner mcb-wrap-inner-5f15ad762 mfn-module-wrapper mfn-wrapper-for-wraps">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-05b41b0a1 one laptop-one tablet-one mobile-one column_heading  hide-mobile">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-05b41b0a1 mcb-item-heading-inner">
                                                        <h2 class="title">哪一種隱形牙套矯正方案<br>比較適合我？</h2>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-adbf05569 one laptop-one tablet-one mobile-one column_heading  hide-desktop hide-laptop hide-laptop hide-laptop hide-laptop hide-laptop hide-laptop hide-tablet">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-adbf05569 mcb-item-heading-inner">
                                                        <h2 class="title">哪一種隱形牙套矯正方案<br>比較適合我？</h2>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-021868556 one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-021868556 mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-db61fa0a4 one laptop-one tablet-one mobile-one column_column">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-db61fa0a4 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            {{ $indexSetting->subtitle_suitable_aligners }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-1220ecdb3 one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-1220ecdb3 mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                                @for ($i = 1; $i <= 3; $i++)
                                                    <div
                                                        class="column mcb-column mcb-item-5584d12dd one-third laptop-one-third tablet-one-third mobile-one column_pricing_item pricing_item-style-table">
                                                        <div
                                                            class="mcb-column-inner mfn-module-wrapper mcb-column-inner-5584d12dd mcb-item-pricing_item-inner">
                                                            <div class="pricing-box pricing-box-table">
                                                                <div class="plan-header">
                                                                    <h3 class="title">
                                                                        <span
                                                                            style="color:#cb1a1d;font-weight:normal">SERENDIPITY</span>
                                                                        {{ $indexSetting["plan_{$i}_name"] }}
                                                                    </h3>
                                                                </div>
                                                                <div class="plan-inside">
                                                                    <ul>
                                                                        <li>{{ $indexSetting["plan_{$i}_price"] }}</li>
                                                                        <li>{{ $indexSetting["plan_{$i}_severity"] }}</li>
                                                                        <li>{{ $indexSetting["plan_{$i}_region"] }}</li>
                                                                        <li>{{ $indexSetting["plan_{$i}_treatment"] }}</li>
                                                                        <li>{{ $indexSetting["plan_{$i}_description"] }}
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endfor
                                                <div
                                                    class="column mcb-column mcb-item-fae688c74 one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-fae688c74 mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-377037750 one laptop-one tablet-one mobile-one column_button">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-377037750 mcb-item-button-inner">
                                                        <a class="button  button_right button_size_4"
                                                            href="assessment.php" title="">
                                                            <span class="button_icon"><i class="icon-right-dir"
                                                                    aria-hidden="true"></i></span>
                                                            <span class="button_label">立即免費線上評估 </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-cae7ecdc9 one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-cae7ecdc9 mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-decoration bottom"
                                        style="background-image:url({{ asset('images/frontend/icon/footer_curve.svg') }});height:px">
                                    </div>
                                </section>

                                {{-- 付款方式 --}}
                                <section
                                    class="section mcb-section mfn-default-section mcb-section-e8c02388d  no-margin-v default-width">
                                    <div class="mcb-background-overlay"></div>
                                    <div
                                        class="section_wrapper mfn-wrapper-for-wraps mcb-section-inner mcb-section-inner-e8c02388d">
                                        <div class="wrap mcb-wrap mcb-wrap-44e4629c1 five-sixth tablet-one laptop-one mobile-one clearfix"
                                            data-desktop-col="five-sixth" data-laptop-col="laptop-one"
                                            data-tablet-col="tablet-one" data-mobile-col="mobile-one">
                                            <div
                                                class="mcb-wrap-inner mcb-wrap-inner-44e4629c1 mfn-module-wrapper mfn-wrapper-for-wraps">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-241a5c72e one laptop-one tablet-one mobile-one column_heading">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-241a5c72e mcb-item-heading-inner">
                                                        <h2 class="title">依照您喜歡的方式付款</h2>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-4a780cc3f one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-4a780cc3f mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-31a839e25 one laptop-one tablet-one mobile-one column_column">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-31a839e25 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            {{ $indexSetting->subtitle_payment_methods }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-e26956142 one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-e26956142 mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                                <div class="wrap mcb-wrap mcb-wrap-055e9c279 one-third tablet-one-third laptop-one-third mobile-one animate mfn-nested-wrap clearfix"
                                                    data-desktop-col="one-third" data-laptop-col="laptop-one-third"
                                                    data-tablet-col="tablet-one-third" data-mobile-col="mobile-one"
                                                    data-anim-type="fadeInUp">
                                                    <div
                                                        class="mcb-wrap-inner mcb-wrap-inner-055e9c279 mfn-module-wrapper mfn-wrapper-for-wraps mfn-icon-box mfn-icon-box-box-scale">
                                                        <div class="mcb-wrap-background-overlay"></div>
                                                        <div
                                                            class="column mcb-column mcb-item-e3ebb5828 one laptop-one tablet-one mobile-one column_heading">
                                                            <div
                                                                class="mcb-column-inner mfn-module-wrapper mcb-column-inner-e3ebb5828 mcb-item-heading-inner">
                                                                <h4 class="title py-2"
                                                                    style="background-color: #ffe0e0;border-radius: 10px;">
                                                                    一次付清</h4>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="column mcb-column mcb-item-e40391757 one laptop-one tablet-one mobile-one column_spacer">
                                                            <div
                                                                class="mcb-column-inner mfn-module-wrapper mcb-column-inner-e40391757 mcb-item-spacer-inner">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="column mcb-column mcb-item-ff0bfc5c8 one laptop-one tablet-one mobile-one column_image">
                                                            <div
                                                                class="mcb-column-inner mfn-module-wrapper mcb-column-inner-ff0bfc5c8 mcb-item-image-inner">
                                                                <div
                                                                    class="image_frame image_item no_link scale-with-grid alignnone no_border svg">
                                                                    <div class="image_wrapper ">
                                                                        <img src="{{ asset('images/frontend/icon/serendipity_red.svg') }}"
                                                                            class="scale-with-grid" decoding="async"
                                                                            loading="lazy" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="column mcb-column mcb-item-f00eee224 one laptop-one tablet-one mobile-one column_spacer">
                                                            <div
                                                                class="mcb-column-inner mfn-module-wrapper mcb-column-inner-f00eee224 mcb-item-spacer-inner">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="column mcb-column mcb-item-1185c2277 one laptop-one tablet-one mobile-one column_column">
                                                            <div
                                                                class="mcb-column-inner mfn-module-wrapper mcb-column-inner-1185c2277 mcb-item-column-inner">
                                                                <div class="column_attr mfn-inline-editor clearfix">
                                                                    {{ $indexSetting->payment_full_amount }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="column mcb-column mcb-item-90bdfcb21 one laptop-one tablet-one mobile-one column_spacer">
                                                            <div
                                                                class="mcb-column-inner mfn-module-wrapper mcb-column-inner-90bdfcb21 mcb-item-spacer-inner">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="column mcb-column mcb-item-9493863a9 one laptop-one tablet-one mobile-one column_button">
                                                            <div
                                                                class="mcb-column-inner mfn-module-wrapper mcb-column-inner-9493863a9 mcb-item-button-inner">
                                                                <a class="button button_right button_full_width button_size_2"
                                                                    href="assessment.php" title="">
                                                                    <span class="button_icon"><i class="icon-right-dir"
                                                                            aria-hidden="true"></i></span>
                                                                    <span class="button_label">立即免費線上評估 </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wrap mcb-wrap mcb-wrap-02eece4a6 two-third tablet-two-third laptop-two-third mobile-one animate mfn-nested-wrap clearfix"
                                                    data-desktop-col="two-third" data-laptop-col="laptop-two-third"
                                                    data-tablet-col="tablet-two-third" data-mobile-col="mobile-one"
                                                    data-anim-type="fadeInUp">
                                                    <div
                                                        class="mcb-wrap-inner mcb-wrap-inner-02eece4a6 mfn-module-wrapper mfn-wrapper-for-wraps mfn-icon-box mfn-icon-box-box-scale">
                                                        <div class="mcb-wrap-background-overlay"></div>
                                                        <div
                                                            class="column mcb-column mcb-item-fd94300ad one laptop-one tablet-one mobile-one column_heading">
                                                            <div
                                                                class="mcb-column-inner mfn-module-wrapper mcb-column-inner-fd94300ad mcb-item-heading-inner">
                                                                <h4 class="title py-2"
                                                                    style="background-color: #ffe0e0;border-radius: 10px;">
                                                                    分期付款</h4>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="column mcb-column mcb-item-f96aa8398 one laptop-one tablet-one mobile-five-sixth column_spacer">
                                                            <div
                                                                class="mcb-column-inner mfn-module-wrapper mcb-column-inner-f96aa8398 mcb-item-spacer-inner">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="column mcb-column mcb-item-b2b71ec0a one-third laptop-one-third tablet-one-third mobile-one-third column_column mfn-icon-box mfn-icon-box-box-scale">
                                                            <div
                                                                class="mcb-column-inner mfn-module-wrapper mcb-column-inner-b2b71ec0a mcb-item-column-inner">
                                                                <div class="column_attr mfn-inline-editor clearfix">
                                                                    <p class="course">Clear</p>
                                                                    <p><span
                                                                            style="font-size: 1.5em; font-weight: bold;">＄6,000</span>/月
                                                                    </p>
                                                                    <p>12個月零利率</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="column mcb-column mcb-item-77936d781 one-third laptop-one-third tablet-one-third mobile-one-third column_column mfn-icon-box mfn-icon-box-box-scale">
                                                            <div
                                                                class="mcb-column-inner mfn-module-wrapper mcb-column-inner-77936d781 mcb-item-column-inner">
                                                                <div class="column_attr mfn-inline-editor clearfix">
                                                                    <p class="course">Plus</p>
                                                                    <p><span
                                                                            style="font-size: 1.5em; font-weight: bold;">＄10,000</span>/月
                                                                    </p>
                                                                    <p>12個月零利率</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="column mcb-column mcb-item-9728db8a6 one-third laptop-one-third tablet-one-third mobile-one-third column_column mfn-icon-box mfn-icon-box-box-scale">
                                                            <div
                                                                class="mcb-column-inner mfn-module-wrapper mcb-column-inner-9728db8a6 mcb-item-column-inner">
                                                                <div class="column_attr mfn-inline-editor clearfix">
                                                                    <p class="course">Extra</p>
                                                                    <p><span
                                                                            style="font-size: 1.5em; font-weight: bold;">＄12,000</span>/月
                                                                    </p>
                                                                    <p>12個月零利率</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="column mcb-column mcb-item-7ae5d51cf one laptop-one tablet-one mobile-one column_spacer">
                                                            <div
                                                                class="mcb-column-inner mfn-module-wrapper mcb-column-inner-7ae5d51cf mcb-item-spacer-inner">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="column mcb-column mcb-item-7931d2534 one laptop-one tablet-one mobile-one column_button">
                                                            <div
                                                                class="mcb-column-inner mfn-module-wrapper mcb-column-inner-7931d2534 mcb-item-button-inner">
                                                                <a class="button button_right button_full_width button_size_2"
                                                                    href="assessment.php" title="">
                                                                    <span class="button_icon"><i class="icon-right-dir"
                                                                            aria-hidden="true"></i></span>
                                                                    <span class="button_label">立即免費線上評估 </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-decoration bottom"
                                        style="background-image:url({{ asset('images/frontend/icon/curve_pink2.svg') }});height:px">
                                    </div>
                                </section>

                                {{-- 診療心得分享 --}}
                                <section
                                    class="section mcb-section mfn-default-section mcb-section-dc070afcd no-margin-v default-width">
                                    <div class="mcb-background-overlay"></div>
                                    <div
                                        class="section_wrapper mfn-wrapper-for-wraps mcb-section-inner mcb-section-inner-dc070afcd">
                                        <div class="wrap mcb-wrap mcb-wrap-aa0f80cd0 one tablet-one laptop-one mobile-one clearfix"
                                            data-desktop-col="one" data-laptop-col="laptop-one"
                                            data-tablet-col="tablet-one" data-mobile-col="mobile-one">
                                            <div
                                                class="mcb-wrap-inner mcb-wrap-inner-aa0f80cd0 mfn-module-wrapper mfn-wrapper-for-wraps">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-5ecce5879 one laptop-one tablet-one mobile-one column_image mfn-item-inline mfn-column-absolute">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-5ecce5879 mcb-item-image-inner">
                                                        <div
                                                            class="image_frame image_item no_link scale-with-grid alignnone no_border mfn-mask-shape circle">
                                                            <div class="image_wrapper">
                                                                <img width="800" height="800"
                                                                    src="{{ asset('images/frontend/share_experience1.jpg') }}"
                                                                    class="scale-with-grid"
                                                                    style="-webkit-mask-size:contain;-webkit-mask-position:center center;"
                                                                    decoding="async" loading="lazy"
                                                                    sizes="auto, (max-width:767px) 480px, (max-width:800px) 100vw, 800px" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-707144d42 one laptop-one tablet-one mobile-one column_image mfn-item-inline mfn-column-absolute">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-707144d42 mcb-item-image-inner">
                                                        <div
                                                            class="image_frame image_item no_link scale-with-grid alignnone no_border mfn-mask-shape circle">
                                                            <div class="image_wrapper">
                                                                <img width="800" height="800"
                                                                    src="{{ asset('images/frontend/share_experience2.jpg') }}"
                                                                    class="scale-with-grid"
                                                                    style="-webkit-mask-size:contain;-webkit-mask-position:center center;"
                                                                    decoding="async" loading="lazy"
                                                                    sizes="auto, (max-width:767px) 480px, (max-width:800px) 100vw, 800px" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-81554a23b one laptop-one tablet-one mobile-one column_image mfn-item-inline mfn-column-absolute">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-81554a23b mcb-item-image-inner">
                                                        <div
                                                            class="image_frame image_item no_link scale-with-grid alignnone no_border mfn-mask-shape circle">
                                                            <div class="image_wrapper">
                                                                <img width="800" height="800"
                                                                    src="{{ asset('images/frontend/share_experience3.jpg') }}"
                                                                    class="scale-with-grid"
                                                                    style="-webkit-mask-size:contain;-webkit-mask-position:center center;"
                                                                    decoding="async" loading="lazy"
                                                                    sizes="auto, (max-width:767px) 480px, (max-width:800px) 100vw, 800px" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-593f5f5a2 one laptop-one tablet-one mobile-one column_image">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-593f5f5a2 mcb-item-image-inner">
                                                        <div
                                                            class="image_frame image_item no_link scale-with-grid alignnone no_border svg">
                                                            <div class="image_wrapper">
                                                                <img src="{{ asset('images/frontend/serendipity_blk.svg') }}"
                                                                    class="scale-with-grid" alt=""
                                                                    decoding="async" loading="lazy" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-829c9b07a one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-829c9b07a mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-650edaf0a one laptop-one tablet-one mobile-one column_heading">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-650edaf0a mcb-item-heading-inner">
                                                        <h2 class="title">讓您輕鬆變美０負擔</h2>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-7896cab18 one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-7896cab18 mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-ef8190a54 one laptop-one tablet-one mobile-one column_column  hide-mobile">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-ef8190a54 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <p>牙齒矯正除了美觀外，更重要的是能擁有一排健康的牙齒並且容易清潔護理。<br />二次矯正、門牙縫過大、咬合不正再也不用擔心笑起來不好看了！
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-qkfi12b5j one laptop-one tablet-one mobile-one column_column  hide-desktop hide-laptop hide-tablet">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-qkfi12b5j mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <p>牙齒矯正除了美觀外，<br />更重要的是能擁有一排健康的牙齒並且容易清潔護理。<br />二次矯正、門牙縫過大、咬合不正<br />再也不用擔心笑起來不好看了！
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="section mcb-section mfn-default-section mcb-section-1996e98fe default-width">
                                    <div class="mcb-background-overlay"></div>
                                    <div
                                        class="section_wrapper mfn-wrapper-for-wraps mcb-section-inner mcb-section-inner-1996e98fe">
                                        @foreach ($share_experiences as $share_experience)
                                            <div class="wrap mcb-wrap mcb-wrap-853a7d25e one-third tablet-one-third laptop-one-third mobile-one clearfix"
                                                data-desktop-col="one-third" data-laptop-col="laptop-one-third"
                                                data-tablet-col="tablet-one-third" data-mobile-col="mobile-one">
                                                <div
                                                    class="mcb-wrap-inner mcb-wrap-inner-853a7d25e mfn-module-wrapper mfn-wrapper-for-wraps">
                                                    <div class="mcb-wrap-background-overlay"></div>
                                                    @foreach ($share_experience as $item)
                                                        <div class="column mcb-column mcb-item-ed14ce20b one laptop-one tablet-one mobile-one column_column animate quoteitem mfn-transformed"
                                                            data-anim-type="fadeInUp">
                                                            <div
                                                                class="mcb-column-inner mfn-module-wrapper mcb-column-inner-ed14ce20b mcb-item-column-inner">
                                                                <div class="column_attr mfn-inline-editor clearfix">
                                                                    <p>
                                                                        <img class="wp-image-197 size-medium aligncenter"
                                                                            src="{{ asset($item->avatar) }}"
                                                                            width="300" height="300">
                                                                    </p>
                                                                    <p
                                                                        style="text-align: center; font-weight: 500; font-size: 1.2em;">
                                                                        矯正內容：{{ $item->title }}<br>療程時間：{{ $item->treatment_duration }}
                                                                    </p>
                                                                    <p>
                                                                        {{ $item->experience }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="section-decoration bottom"
                                        style="background-image:url({{ asset('images/frontend/icon/curve_wht.svg') }});height:px">
                                    </div>
                                </section>

                                {{-- Q&A --}}
                                <section
                                    class="section mcb-section mfn-default-section mcb-section-358lq5sqs  no-margin-v default-width">
                                    <div class="mcb-background-overlay"></div>
                                    <div
                                        class="section_wrapper mfn-wrapper-for-wraps mcb-section-inner mcb-section-inner-358lq5sqs">
                                        <div class="wrap mcb-wrap mcb-wrap-t54xnlplo one tablet-one laptop-one mobile-one clearfix"
                                            data-desktop-col="one" data-laptop-col="laptop-one"
                                            data-tablet-col="tablet-one" data-mobile-col="mobile-one">
                                            <div
                                                class="mcb-wrap-inner mcb-wrap-inner-t54xnlplo mfn-module-wrapper mfn-wrapper-for-wraps">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-nhvtzrjc one laptop-one tablet-one mobile-one column_heading">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-nhvtzrjc mcb-item-heading-inner">
                                                        <h2 class="title">你想知道的重要問題</h2>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-1ib10x3jv one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-1ib10x3jv mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-chnehlit three-fifth laptop-three-fifth tablet-three-fifth mobile-one column_faq">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-chnehlit mcb-item-faq-inner">
                                                        <div class="faq">
                                                            <div class="mfn-acc faq_wrapper toggle">
                                                                @foreach ($questions as $key => $question)
                                                                    <div class="question" tabindex="0" role="link">
                                                                        <div class="title">
                                                                            <span
                                                                                class="num">{{ $key + 1 }}</span>
                                                                            <i class="icon-plus acc-icon-plus"
                                                                                aria-hidden="true"></i>
                                                                            <i class="icon-minus acc-icon-minus"
                                                                                aria-hidden="true"></i>"{{ $question->title }}"
                                                                        </div>
                                                                        <div class="answer">
                                                                            {{ $question->answer }}
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="section mcb-section mfn-default-section mcb-section-k553050i4 default-width">
                                    <div class="mcb-background-overlay"></div>
                                    <div
                                        class="section_wrapper mfn-wrapper-for-wraps mcb-section-inner mcb-section-inner-k553050i4">
                                        <div class="wrap mcb-wrap mcb-wrap-cm2jqeg8n one tablet-one laptop-one mobile-one clearfix"
                                            data-desktop-col="one" data-laptop-col="laptop-one"
                                            data-tablet-col="tablet-one" data-mobile-col="mobile-one">
                                            <div
                                                class="mcb-wrap-inner mcb-wrap-inner-cm2jqeg8n mfn-module-wrapper mfn-wrapper-for-wraps">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-b2qad07y one laptop-one tablet-one mobile-one column_button">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-b2qad07y mcb-item-button-inner">
                                                        <a class="button  button_right button_size_4"
                                                            href="assessment.php" title="">
                                                            <span class="button_icon"><i class="icon-right-dir"
                                                                    aria-hidden="true"></i></span>
                                                            <span class="button_label">立即免費線上評估 </span>
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
{{-- {{ Request::path() }}; --}}
