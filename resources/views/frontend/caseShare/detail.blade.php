@extends('frontend.layout.layout')

@include('frontend.caseShare.customDetail')

@section('body')

    <body
        class="post-template-default single single-post postid-243 single-format-standard woocommerce-block-theme-has-button-styles mfn-footer-default  color-custom content-brightness-light input-brightness-light style-simple underline-links button-animation-fade layout-full-width if-modern-overlay hide-love header-transparent header-fw sticky-header sticky-tb-color ab-hide menu-link-color menuo-right menuo-no-borders subheader-both-center responsive-overflow-x-mobile mobile-tb-center mobile-side-slide no-sec-padding-mob mobile-mini-mr-ll mobile-sticky mobile-header-mini mobile-icon-user-ss mobile-icon-wishlist-ss mobile-icon-search-ss mobile-icon-wpml-ss mobile-icon-action-ss tr-header tr-menu be-page-243 be-reg-2756"
        style="background-color: #FFE0E0;">
        <div id="Wrapper">

            @include('frontend.layout.header')

            <!-- Title Start -->
            <div id="Subheader" style="background-color: #FFE0E0;">
                <div class="container px-0">
                    <div class="column one">
                        <h2 class="title">{{ $caseShare->title }}</h2>
                    </div>
                </div>
            </div>

            <div id="Content">
                <div class="content_wrapper clearfix">
                    <main class="sections_group">
                        <article
                            class="no-title share-simple post-243 post type-post status-publish format-standard has-post-thumbnail hentry category-share">

                            <!-- Published Photo Start -->
                            <header class="section mcb-section section-post-header">
                                <div class="section_wrapper clearfix">

                                    <!-- Arrow Start -->
                                    <div class="column one post-nav minimal">
                                        <a class="prev" href="{{ route('frontend.cashShare.index') }}">
                                            <i class="icon icon-left-open-big" aria-label="previous post"></i>
                                        </a>
                                    </div>

                                    <!-- Published Start -->
                                    <div class="column one post-header">
                                        <div class="mcb-column-inner">
                                            <div class="title_wrapper">
                                                <div class="post-meta clearfix">

                                                    <div class="author-date">
                                                        <span class="vcard author post-author" itemprop="author">
                                                            <span class="label">Published by</span>
                                                            <i class="icon-user" aria-label="author"></i>
                                                            <span class="fn"
                                                                itemprop="name">{{ $caseShare->publisher }}</span>
                                                        </span>

                                                        <span class="date">
                                                            <span class="label">on</span>
                                                            <i class="icon-clock"></i>
                                                            <time class="entry-date updated" itemprop="datePublished">
                                                                {{ $caseShare->created_at->translatedFormat('j n 月, Y') }}
                                                            </time>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </header>

                            <!-- Information Start -->
                            <div class="post-wrapper-content">
                                <!-- Post Start -->
                                <div class="mfn-builder-content mfn-default-content-buider"></div>
                                <section class="section mcb-section the_content has_content">
                                    <div class="section_wrapper">
                                        <div class="the_content_wrapper">
                                            {!! $caseShare->content !!}
                                        </div>
                                    </div>
                                </section>
                                <section class="section mcb-section section-post-footer">
                                    <div class="section_wrapper clearfix">
                                        <div class="column one post-pager">
                                            <div class="mcb-column-inner">
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- Share icon Start -->
                                <section class="section section-post-intro-share">
                                    <div class="section_wrapper clearfix">
                                        <div class="column one">
                                            <div class="mcb-column-inner">
                                                <div class="share-simple-wrapper "><span class="share-label">Share</span>
                                                    <div class="icons">
                                                        <a target="_blank" class="facebook"
                                                            href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}">
                                                            <i class="icon-facebook" aria-label="facebook icon"></i>
                                                        </a>
                                                        <a target="_blank" class="twitter"
                                                            href="https://twitter.com/intent/tweet?text={{ urlencode(env('FRONTEND_NAME') . request()->fullUrl()) }}">
                                                            <i class="icon-x-twitter" aria-label="x twitter icon"></i>
                                                        </a>
                                                        <a target="_blank" class="linkedin"
                                                            href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->fullUrl()) }}">
                                                            <i class="icon-linkedin" aria-label="linkedin icon"></i>
                                                        </a>
                                                        <a target="_blank" class="pinterest"
                                                            href="https://pinterest.com/pin/find/?url={{ urlencode(request()->fullUrl()) }}">
                                                            <i class="icon-pinterest" aria-label="pinterest icon"></i>
                                                        </a>
                                                    </div>
                                                    <div class="button-love"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </article>
                    </main>
                </div>
            </div>
            @include('frontend.layout.footer')
        </div>
        @include('frontend.layout.slide')
        @include('frontend.layout.jsStyle')
    </body>
@endsection
