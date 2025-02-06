@extends('frontend.layout.layout')

@include('frontend.evaluationForm.custom')

@section('body')

    <body
        class="page-template-default page page-id-52 mfn-footer-default color-custom content-brightness-light input-brightness-light style-default button-round layout-full-width if-modern-overlay no-content-padding header-transparent header-fw sticky-header sticky-tb-color ab-hide menu-link-color menuo-right logo-sticky-width-auto subheader-both-center footer-copy-center mobile-tb-center mobile-side-slide mobile-mini-mr-ll mobile-icon-user-ss mobile-icon-wishlist-ss mobile-icon-search-ss mobile-icon-wpml-ss mobile-icon-action-ss tr-header tr-menu be-page-52 be-reg-26408"
        style="background-color: #FFE0E0;">
        <div id="Wrapper">

            @include('frontend.evaluationForm.header')

            <div id="Content" role="main">
                <div class="content_wrapper clearfix">
                    <div class="sections_group">
                        <div class="entry-content" itemprop="mainContentOfPage">
                            <div class="mfn-builder-content mfn-default-content-buider">
                                <!-- Right now Start -->
                                <div
                                    class="section mcb-section mfn-default-section mcb-section-a011abf6b default-width d-none d-md-block">
                                    <div class="mcb-background-overlay"></div>
                                    <div class="section_wrapper mcb-section-inner mcb-section-inner-a011abf6b">
                                        <div class="wrap mcb-wrap mcb-wrap-a0f275190 one tablet-one mobile-one clearfix"
                                            data-desktop-col="one" data-tablet-col="tablet-one"
                                            data-mobile-col="mobile-one">
                                            <div class="mcb-wrap-inner mcb-wrap-inner-a0f275190">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-17824d052 one tablet-one mobile-one column_heading">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-17824d052 mcb-item-heading-inner">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br></br>

                                <!-- Section 2: 用戶齒列問題選擇 -->
                                <div
                                    class="section mcb-section mfn-default-section mcb-section-94527553a default-width js-dentition-problem-section">
                                    <div class="mcb-background-overlay"></div>
                                    <div class="section_wrapper mcb-section-inner mcb-section-inner-94527553a">
                                        <div class="wrap mcb-wrap mcb-wrap-0336b048e one-sixth tablet-one mobile-one clearfix"
                                            data-desktop-col="one-sixth" data-tablet-col="tablet-one-sixth"
                                            data-mobile-col="mobile-one">
                                            <div class="mcb-wrap-inner mcb-wrap-inner-0336b048e">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-e6318c18f one tablet-one mobile-one column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-e6318c18f mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <div class="list">2</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrap mcb-wrap mcb-wrap-fdd67052f five-sixth tablet-one mobile-one clearfix"
                                            data-desktop-col="five-sixth" data-tablet-col="tablet-five-sixth"
                                            data-mobile-col="mobile-one">
                                            <div class="mcb-wrap-inner mcb-wrap-inner-fdd67052f">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-0c9800f3d one tablet-one mobile-one column_heading">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-0c9800f3d mcb-item-heading-inner">
                                                        <h3 class="title">您是哪種齒列問題?</h3>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-361ed5660 one-fourth tablet-one-fourth mobile-one-third column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-361ed5660 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <div class="tooth" data-dentition-problem-option="1">
                                                                <img class="scale-with-grid"
                                                                    src="{{ asset('images/frontend/icon/tooth1.svg') }}">
                                                            </div>
                                                            戽斗(反咬)
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-a4879a7d9 one-fourth tablet-one-fourth mobile-one-third column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-a4879a7d9 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <div class="tooth" data-dentition-problem-option="2">
                                                                <img class="scale-with-grid"
                                                                    src="{{ asset('images/frontend/icon/tooth2.svg') }}">
                                                            </div>
                                                            開咬
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-26b404796 one-fourth tablet-one-fourth mobile-one-third column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-26b404796 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <div class="tooth" data-dentition-problem-option="3">
                                                                <img class="scale-with-grid"
                                                                    src="{{ asset('images/frontend/icon/tooth3.svg') }}">
                                                            </div>
                                                            齒列擁擠
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-59877f55b one-fourth tablet-one-fourth mobile-one-third column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-59877f55b mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <div class="tooth" data-dentition-problem-option="4">
                                                                <img class="scale-with-grid"
                                                                    src="{{ asset('images/frontend/icon/tooth4.svg') }}">
                                                            </div>
                                                            錯咬
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-e26eaae61 one-fourth tablet-one-fourth mobile-one-third column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-e26eaae61 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <div class="tooth" data-dentition-problem-option="5">
                                                                <img class="scale-with-grid"
                                                                    src="{{ asset('images/frontend/icon/tooth5.svg') }}">
                                                            </div>
                                                            暴牙
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-73f4268f1 one-fourth tablet-one-fourth mobile-one-third column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-73f4268f1 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <div class="tooth" data-dentition-problem-option="6">
                                                                <img class="scale-with-grid"
                                                                    src="{{ asset('images/frontend/icon/tooth6.svg') }}">
                                                            </div>
                                                            深咬
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-80426864c one-fourth tablet-one-fourth mobile-one-third column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-80426864c mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <div class="tooth" data-dentition-problem-option="7">
                                                                <img class="scale-with-grid"
                                                                    src="{{ asset('images/frontend/icon/tooth7.svg') }}">
                                                            </div>
                                                            牙縫過大
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-80426864c one-fourth tablet-one-fourth mobile-one-third column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-80426864c mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <div class="tooth" data-dentition-problem-option="8">
                                                                <img class="scale-with-grid"
                                                                    src="{{ asset('images/frontend/icon/tooth8.svg') }}">
                                                            </div>
                                                            二次矯正
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-80426864c one-fourth tablet-one-fourth mobile-one-third column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-80426864c mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <div class="tooth active" data-dentition-problem-option="7">
                                                                <img class="scale-with-grid"
                                                                    src="{{ asset('images/frontend/icon/tooth9.png') }}">
                                                            </div>
                                                            我不確定
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 3: 用戶期望改善問題填寫 -->
                                <div class="section mcb-section mfn-default-section mcb-section-ce243562d default-width">
                                    <div class="mcb-background-overlay"></div>
                                    <div class="section_wrapper mcb-section-inner mcb-section-inner-ce243562d">
                                        <div class="wrap mcb-wrap mcb-wrap-a4e425cc4 one-sixth tablet-one mobile-one clearfix"
                                            data-desktop-col="one-sixth" data-tablet-col="tablet-one-sixth"
                                            data-mobile-col="mobile-one">
                                            <div class="mcb-wrap-inner mcb-wrap-inner-a4e425cc4">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-9a66ff999 one tablet-one mobile-one column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-9a66ff999 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <div class="list">3</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrap mcb-wrap mcb-wrap-43fa96456 five-sixth tablet-one mobile-one clearfix"
                                            data-desktop-col="five-sixth" data-tablet-col="tablet-five-sixth"
                                            data-mobile-col="mobile-one">
                                            <div class="mcb-wrap-inner mcb-wrap-inner-43fa96456">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-ad880e2ad one tablet-one mobile-one column_heading">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-ad880e2ad mcb-item-heading-inner">
                                                        <h3 class="title">您主要想改善的地方？</h3>
                                                    </div>
                                                </div>
                                                <div
                                                    class="column mcb-column mcb-item-8ed689424 one tablet-one mobile-one column_column info">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-8ed689424 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <textarea id="improvements" rows="5" placeholder="例如: 我想要把門牙縫縮小 "></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 下一步 -->
                                <div class="section mcb-section mfn-default-section mcb-section-aaaa9fef7 default-width">
                                    <input type="hidden" name="_token"
                                        value="Qs7XcUoz4QuLGiRcKG2BnBig4if05ESXE7s7ryub">
                                    <div class="mcb-background-overlay"></div>
                                    <div class="section_wrapper mcb-section-inner mcb-section-inner-aaaa9fef7">
                                        <div class="wrap mcb-wrap mcb-wrap-5989e6ec4 five-sixth tablet-one mobile-one clearfix"
                                            data-desktop-col="five-sixth" data-tablet-col="tablet-five-sixth"
                                            data-mobile-col="mobile-one">
                                            <div class="mcb-wrap-inner mcb-wrap-inner-5989e6ec4">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-a2d53ad45 one tablet-one mobile-one column_button js-send-button">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-a2d53ad45 mcb-item-button-inner">
                                                        <a class="button button_full_width button_size_4 button_dark"
                                                            onclick="nextStep()">
                                                            <span class="button_label">下一步</span>
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
            @include('frontend.layout.footer')
        </div>

        <a id="back_to_top" class="footer_button sticky scroll" href=""><i class="icon-up-open-big"
                aria-label="Back to top icon"></i></a>

        @include('frontend.layout.jsStyle')

        <script type="text/javascript" src="{{ asset('js/jquery-ui-core.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery-ui-tabs.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins-extra.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/form-page.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/handler.js') }}"></script>

        <script>
            $(function() {
                let formData = JSON.parse(localStorage.getItem(`evaluationForm`));
                if (formData) {

                    Object.keys(formData).forEach(key => {
                        $(`#${key}`).val(formData[key]);
                    });
                }
            })

            function nextStep() {
                let data = JSON.parse(localStorage.getItem("evaluationForm"));

                $(".tooth.active").each(function() {
                    let value = $(this).data("dentition-problem-option"); // 取得 data-dentition-problem-option
                    let text = $(this).parent().contents().filter(function() {
                        return this.nodeType === 3; // 過濾出純文字節點
                    }).text().trim();

                    data.question = text;
                });

                if ($("#improvements").val() != "") {
                    data.improvements = $("#improvements").val();
                }

                $.ajax({
                    url: "{{ route('frontend.evaluationForm.store') }}",
                    type: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    data: data,
                    success: function(response) {
                        if (response.code == '00') {
                            Swal.fire({
                                title: '新增成功！',
                                icon: 'success',
                                timer: 3000
                            }).then((result) => {
                                localStorage.removeItem(`evaluationForm`);
                                let url = "{{ route('frontend.evaluationForm.detail', ':id') }}";
                                url = url.replace(':id', response.data.id);
                                location.href = url;
                            });
                        };
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            icon: "error",
                            title: JSON.parse(xhr.responseText).message,
                            timer: 3000
                        });
                    }
                });
            }
        </script>
    </body>
@endsection
