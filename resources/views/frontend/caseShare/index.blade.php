@extends('frontend.layout.layout')

@include('frontend.caseShare.custom')

@section('body')

    <body
        class="page-template-default page page-id-14 woocommerce-block-theme-has-button-styles mfn-footer-default  color-custom content-brightness-light input-brightness-light style-simple underline-links button-animation-fade layout-full-width if-modern-overlay hide-love header-transparent header-fw sticky-header sticky-tb-color ab-hide menu-link-color menuo-right menuo-no-borders subheader-both-center responsive-overflow-x-mobile mobile-tb-center mobile-side-slide no-sec-padding-mob mobile-mini-mr-ll mobile-sticky mobile-header-mini mobile-icon-user-ss mobile-icon-wishlist-ss mobile-icon-search-ss mobile-icon-wpml-ss mobile-icon-action-ss tr-header tr-menu be-page-14 be-reg-2756">
        <div id="Wrapper">

            @include('frontend.layout.header')

            <div id="Content" role="main">
                <div class="content_wrapper clearfix">
                    <main class="sections_group">
                        <div class="entry-content" itemprop="mainContentOfPage">


                            <div class="mfn-builder-content mfn-default-content-buider">

                                <!-- Share Start -->
                                <section class="section mcb-section mfn-default-section mcb-section-33b4h2shl default-width">
                                    <div class="mcb-background-overlay"></div>
                                    <div
                                        class="section_wrapper mfn-wrapper-for-wraps mcb-section-inner mcb-section-inner-33b4h2shl">
                                        <div class="wrap mcb-wrap mcb-wrap-6stijfc5a four-fifth tablet-four-fifth laptop-four-fifth mobile-one clearfix"
                                            data-desktop-col="four-fifth" data-laptop-col="laptop-four-fifth"
                                            data-tablet-col="tablet-four-fifth" data-mobile-col="mobile-one">
                                            <div
                                                class="mcb-wrap-inner mcb-wrap-inner-6stijfc5a mfn-module-wrapper mfn-wrapper-for-wraps">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-zg6ch3kfi one laptop-one tablet-one mobile-one column_blog">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-zg6ch3kfi mcb-item-blog-inner">
                                                        <div class="column_filters">

                                                            <!-- Filters Start -->
                                                            <div id="Filters" class="isotope-filters only only-categories"
                                                                data-parent="column_filters">
                                                                <div class="mcb-column-inner">

                                                                    <div class="filters_wrapper">
                                                                        <ul class="categories">
                                                                            <li class="">
                                                                                <a class="all"
                                                                                    href="{{ route('frontend.cashShare.index', ['filter' => 'latest']) }}">最新排序</a>
                                                                            </li>
                                                                            <li class="">
                                                                                <a
                                                                                    href="{{ route('frontend.cashShare.index', ['filter' => 'popular']) }}">熱門程度</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!-- blog Start -->
                                                            <div class="blog_wrapper isotope_wrapper clearfix">
                                                                <div class="posts_group lm_wrapper col3 classic isotope"
                                                                    id="data-container">
                                                                    <!-- blog post-item Start -->
                                                                    @foreach ($caseShares as $caseShare)
                                                                        <article
                                                                            class="post post-item isotope-item clearfix post-243 type-post status-publish format-standard has-post-thumbnail hentry category-share">

                                                                            <div class="date_label">
                                                                                {{ $caseShare->created_at->translatedFormat('j n 月, Y') }}
                                                                            </div>

                                                                            <div
                                                                                class="image_frame post-photo-wrapper scale-with-grid image">
                                                                                <div class="image_wrapper">
                                                                                    <a
                                                                                        href="{{ route('frontend.caseShare.detail', $caseShare->id) }}">
                                                                                        <div class="mask"></div>
                                                                                        <img width="960" height="750"
                                                                                            src="{{ asset($caseShare->image) }}"
                                                                                            class="scale-with-grid wp-post-image"
                                                                                            decoding="async"
                                                                                            sizes="(max-width:767px) 480px, (max-width:960px) 100vw, 960px" />
                                                                                    </a>
                                                                                    <div class="image_links double">
                                                                                        <a class="zoom tooltip"
                                                                                            data-tooltip="Zoom"
                                                                                            data-position="left"
                                                                                            rel="prettyphoto"
                                                                                            href="{{ asset($caseShare->image) }}">
                                                                                            <svg viewBox="0 0 26 26">
                                                                                                <defs>
                                                                                                    <style>
                                                                                                        .path {
                                                                                                            fill: none;
                                                                                                            stroke: #333;
                                                                                                            stroke-miterlimit: 10;
                                                                                                            stroke-width: 1.5px;
                                                                                                        }
                                                                                                    </style>
                                                                                                </defs>
                                                                                                <circle cx="11.35"
                                                                                                    cy="11.35" r="6"
                                                                                                    class="path"></circle>
                                                                                                <line x1="15.59"
                                                                                                    y1="15.59"
                                                                                                    x2="20.65"
                                                                                                    y2="20.65"
                                                                                                    class="path"></line>
                                                                                            </svg>
                                                                                        </a>
                                                                                        <a class="link tooltip"
                                                                                            data-tooltip="Details"
                                                                                            data-position="left"
                                                                                            href="{{ route('frontend.caseShare.detail', $caseShare->id) }}">
                                                                                            <svg viewBox="0 0 26 26">
                                                                                                <defs>
                                                                                                    <style>
                                                                                                        .path {
                                                                                                            fill: none;
                                                                                                            stroke: #333;
                                                                                                            stroke-miterlimit: 10;
                                                                                                            stroke-width: 1.5px;
                                                                                                        }
                                                                                                    </style>
                                                                                                </defs>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M10.17,8.76l2.12-2.12a5,5,0,0,1,7.07,0h0a5,5,0,0,1,0,7.07l-2.12,2.12"
                                                                                                        class="path">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M15.83,17.24l-2.12,2.12a5,5,0,0,1-7.07,0h0a5,5,0,0,1,0-7.07l2.12-2.12"
                                                                                                        class="path">
                                                                                                    </path>
                                                                                                    <line x1="10.17"
                                                                                                        y1="15.83"
                                                                                                        x2="15.83"
                                                                                                        y2="10.17"
                                                                                                        class="path">
                                                                                                    </line>
                                                                                                </g>
                                                                                            </svg>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="post-desc-wrapper bg- has-custom-bg">
                                                                                <div class="post-desc">
                                                                                    <div class="post-head">
                                                                                        <div class="post-meta clearfix">
                                                                                            <div class="author-date">
                                                                                                <span
                                                                                                    class="vcard author post-author">
                                                                                                    <span
                                                                                                        class="label">Published
                                                                                                        by </span>
                                                                                                    <i class="icon-user"
                                                                                                        aria-label="author"></i>
                                                                                                    <span
                                                                                                        class="fn">{{ $caseShare->publisher }}</span>
                                                                                                </span>
                                                                                                <span class="date">
                                                                                                    <span
                                                                                                        class="label">on</span>
                                                                                                    <i
                                                                                                        class="icon-clock"></i>
                                                                                                    <span
                                                                                                        class="post-date updated">{{ $caseShare->created_at->translatedFormat('j n 月, Y') }}</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="post-title">
                                                                                        <h3 class="entry-title"
                                                                                            itemprop="headline">
                                                                                            <a
                                                                                                href="{{ route('frontend.caseShare.detail', $caseShare->id) }}">
                                                                                                {{ $caseShare->title }}
                                                                                            </a>
                                                                                        </h3>
                                                                                    </div>
                                                                                    <div class="post-excerpt">
                                                                                        {{ $caseShare->summary }}
                                                                                    </div>
                                                                                    <div class="post-footer">
                                                                                        <div class="post-links">
                                                                                            <i class="icon-doc-text"
                                                                                                aria-hidden="true"></i>
                                                                                            <a href="{{ route('frontend.caseShare.detail', $caseShare->id) }}"
                                                                                                class="post-more">Read
                                                                                                more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- Assessment Start -->
                                <section
                                    class="section mcb-section mfn-default-section mcb-section-5znfczz37  no-margin-v full-width-ex-mobile default-width"
                                    style="background-color: #FFE0E0;">
                                    <div class="mcb-background-overlay"></div>
                                    <div
                                        class="section_wrapper mfn-wrapper-for-wraps mcb-section-inner mcb-section-inner-5znfczz37">
                                        <div class="wrap mcb-wrap mcb-wrap-nkalos6zr one-second tablet-two-fifth laptop-one-second mobile-one lefttxt clearfix"
                                            data-desktop-col="one-second" data-laptop-col="laptop-one-second"
                                            data-tablet-col="tablet-two-fifth" data-mobile-col="mobile-one">
                                            <div
                                                class="mcb-wrap-inner mcb-wrap-inner-nkalos6zr mfn-module-wrapper mfn-wrapper-for-wraps">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-urd9c35f one laptop-one tablet-one mobile-one column_image">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-urd9c35f mcb-item-image-inner">
                                                        <div
                                                            class="image_frame image_item no_link scale-with-grid alignnone no_border svg">
                                                            <div class="image_wrapper">
                                                                <img src="{{ asset('images/frontend/serendipity_blk.svg') }}"
                                                                    class="scale-with-grid" decoding="async"
                                                                    loading="lazy" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-pkksdou1f one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-pkksdou1f mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-b4w6j9amv one laptop-one tablet-one mobile-one column_heading">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-b4w6j9amv mcb-item-heading-inner">
                                                        <h2 class="title">擁有自信笑容很簡單</h2>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-2y4t9zcbb one laptop-one tablet-one mobile-one column_spacer">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-2y4t9zcbb mcb-item-spacer-inner">
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-mjr9axjtp one laptop-one tablet-one mobile-one column_button">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-mjr9axjtp mcb-item-button-inner">
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
                                        <div class="wrap mcb-wrap mcb-wrap-dbk6ag1xf one-second tablet-one-second laptop-one-second mobile-one clearfix"
                                            data-desktop-col="one-second" data-laptop-col="laptop-one-second"
                                            data-tablet-col="tablet-one-second" data-mobile-col="mobile-one">
                                            <div
                                                class="mcb-wrap-inner mcb-wrap-inner-dbk6ag1xf mfn-module-wrapper mfn-wrapper-for-wraps">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-jp49fjvfr one laptop-one tablet-one mobile-one column_image">
                                                    <div
                                                        class="mcb-column-inner mfn-module-wrapper mcb-column-inner-jp49fjvfr mcb-item-image-inner">
                                                        <div
                                                            class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                            <div class="image_wrapper">
                                                                <img width="1293" height="1226"
                                                                    src="{{ asset('images/frontend/man2.jpg') }}"
                                                                    class="scale-with-grid" decoding="async"
                                                                    loading="lazy"
                                                                    sizes="auto, (max-width:767px) 480px, (max-width:1293px) 100vw, 1293px" />
                                                            </div>
                                                        </div>
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

    <script>
        function loadMoreData(page) {
            return new Promise((resolve, reject) => {
                $.ajax({
                    url: "{{ route('frontend.caseShare.more') }}",
                    method: 'GET',
                    data: {
                        page: page,
                        filter: "{{ request('filter') == 'popular' ? 'popular' : 'latest' }}",
                    },
                    success: function(response) {
                        resolve(response.data);
                    },
                    error: function(xhr) {
                        reject(xhr.responseJSON?.message || '資料加載失敗');
                    }
                });
            });
        }

        let page = 1;
        let loading = false;

        $(window).scroll(async function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
                if (loading) return;

                loading = true;

                try {
                    const data = await loadMoreData(page);
                    const url = "{{ route('frontend.caseShare.detail', ':id') }}";

                    if (data.length > 0) {
                        data.forEach(caseShare => {
                            date = new Date(caseShare.created_at);
                            const day = date.getDate();
                            const month = date.getMonth() + 1;
                            const year = date.getFullYear();
                            const detailUrl = url.replace(':id', caseShare.id);
                            $('#data-container').append(`
                            <article
                                class="post post-item isotope-item clearfix post-243 type-post status-publish format-standard has-post-thumbnail hentry category-share">

                                <div class="date_label">${day} ${month} 月, ${year}</div>

                                <div
                                    class="image_frame post-photo-wrapper scale-with-grid image">
                                    <div class="image_wrapper">
                                        <a
                                            href="${detailUrl}">
                                            <div class="mask"></div>
                                            <img width="960" height="750"
                                                src="{{ asset('') }}${caseShare.image}"
                                                class="scale-with-grid wp-post-image"
                                                decoding="async"
                                                sizes="(max-width:767px) 480px, (max-width:960px) 100vw, 960px" />
                                        </a>
                                        <div class="image_links double">
                                            <a class="zoom tooltip"
                                                data-tooltip="Zoom"
                                                data-position="left"
                                                rel="prettyphoto"
                                                href="{{ asset('') }}${caseShare.image}g">
                                                <svg viewBox="0 0 26 26">
                                                    <defs>
                                                        <style>
                                                            .path {
                                                                fill: none;
                                                                stroke: #333;
                                                                stroke-miterlimit: 10;
                                                                stroke-width: 1.5px;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <circle cx="11.35"
                                                        cy="11.35" r="6"
                                                        class="path"></circle>
                                                    <line x1="15.59"
                                                        y1="15.59"
                                                        x2="20.65"
                                                        y2="20.65"
                                                        class="path"></line>
                                                </svg>
                                            </a>
                                            <a class="link tooltip"
                                                data-tooltip="Details"
                                                data-position="left"
                                                href="${detailUrl}">
                                                <svg viewBox="0 0 26 26">
                                                    <defs>
                                                        <style>
                                                            .path {
                                                                fill: none;
                                                                stroke: #333;
                                                                stroke-miterlimit: 10;
                                                                stroke-width: 1.5px;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <g>
                                                        <path
                                                            d="M10.17,8.76l2.12-2.12a5,5,0,0,1,7.07,0h0a5,5,0,0,1,0,7.07l-2.12,2.12"
                                                            class="path">
                                                        </path>
                                                        <path
                                                            d="M15.83,17.24l-2.12,2.12a5,5,0,0,1-7.07,0h0a5,5,0,0,1,0-7.07l2.12-2.12"
                                                            class="path">
                                                        </path>
                                                        <line x1="10.17"
                                                            y1="15.83"
                                                            x2="15.83"
                                                            y2="10.17"
                                                            class="path">
                                                        </line>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="post-desc-wrapper bg- has-custom-bg">
                                    <div class="post-desc">
                                        <div class="post-head">
                                            <div class="post-meta clearfix">
                                                <div class="author-date">
                                                    <span
                                                        class="vcard author post-author">
                                                        <span
                                                            class="label">Published
                                                            by </span>
                                                        <i class="icon-user"
                                                            aria-label="author"></i>
                                                        <span
                                                            class="fn">${caseShare.publisher}</span>
                                                    </span>
                                                    <span class="date">
                                                        <span
                                                            class="label">on</span>
                                                        <i
                                                            class="icon-clock"></i>
                                                        <span
                                                            class="post-date updated">${day} ${month} 月, ${year}</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title">
                                            <h3 class="entry-title"
                                                itemprop="headline">
                                                <a
                                                    href="${detailUrl}">
                                                    ${caseShare.title}
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="post-excerpt">
                                            ${caseShare.summary}
                                        </div>
                                        <div class="post-footer">
                                            <div class="post-links">
                                                <i class="icon-doc-text"
                                                    aria-hidden="true"></i>
                                                <a href="${detailUrl}"
                                                    class="post-more">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        `);
                        });
                        page += 1; // 更新頁碼
                    }
                } catch (error) {
                    console.log(error); // 顯示錯誤訊息
                } finally {
                    loading = false;
                }
            }
        });
    </script>
@endsection
