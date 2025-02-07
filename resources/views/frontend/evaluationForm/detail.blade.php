@extends('frontend.layout.layout')

@include('frontend.evaluationForm.custom')

@section('body')
    <link rel="stylesheet" href="{{ asset('css/frontend/camera/camera.css') }}">

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
                                                <div
                                                    class="column mcb-column mcb-item-db9812120 one tablet-one mobile-one column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-db9812120 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <p>
                                                                <strong>
                                                                    您的初步資料系統已收到！<br>
                                                                    請協助上傳4張您的口內照片，以利醫師評估作業！
                                                                </strong>
                                                            </p>
                                                            <div style="color:#CE0000;font-size:medium;"
                                                                class="qr-code-message">
                                                                <p>建議更換為行動裝置填寫表單，方便拍攝照片喔！</p>
                                                            </div>
                                                            <a class="button  button_right button_size_4 mt-2"
                                                                href="" data-bs-toggle="modal"
                                                                data-bs-target="#QRscanning">
                                                                <span class="button_label">使用手機上傳照片</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br></br>

                                <!-- Section 4: 用戶利用視訊鏡頭拍照 (optional) -->
                                <div
                                    class="section mcb-section mfn-default-section mcb-section-fd8f73b29 default-width js-camera-section">
                                    <div class="mcb-background-overlay"></div>
                                    <div class="section_wrapper mcb-section-inner mcb-section-inner-fd8f73b29">
                                        <div class="wrap mcb-wrap mcb-wrap-a008c004c one-sixth tablet-one mobile-one clearfix"
                                            data-desktop-col="one-sixth" data-tablet-col="tablet-one-sixth"
                                            data-mobile-col="mobile-one">
                                            <div class="mcb-wrap-inner mcb-wrap-inner-a008c004c">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-ee1a703f2 one tablet-one mobile-one column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-ee1a703f2 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">
                                                            <div class="list">4</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrap mcb-wrap mcb-wrap-c60952b18 five-sixth tablet-one mobile-one clearfix"
                                            data-desktop-col="five-sixth" data-tablet-col="tablet-five-sixth"
                                            data-mobile-col="mobile-one">
                                            <div class="mcb-wrap-inner mcb-wrap-inner-c60952b18">
                                                <div class="mcb-wrap-background-overlay"></div>
                                                <div
                                                    class="column mcb-column mcb-item-8de48e3d5 one tablet-one mobile-one column_heading">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-8de48e3d5 mcb-item-heading-inner">
                                                        <h3 class="title">拍四張口內照片上傳評估</h3>
                                                    </div>
                                                </div>

                                                <!-- 照片縮圖窗格 1 -->
                                                <div
                                                    class="column mcb-column mcb-item-da608cc91 one-second tablet-one-second mobile-one column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-da608cc91 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">

                                                            <div class="frame frame1 js-preview-frame1">
                                                                <div class="camera" data-id={{ $evaluationForm->id }}
                                                                    data-window-id=1>
                                                                    <img class="scale-with-grid"
                                                                        src="{{ asset('images/frontend/icon/icon-camera.svg') }}">
                                                                </div>
                                                            </div>
                                                            <div class="framedesc">
                                                                <img class="scale-with-grid"
                                                                    src="{{ asset('images/frontend/photo1.jpg') }}">
                                                                <p><span>正面照</span>自然的咬合並微笑後牙咬緊<br>避免下顎刻意與上顎對齊</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 照片縮圖窗格 2 -->
                                                <div
                                                    class="column mcb-column mcb-item-47311858b one-second tablet-one-second mobile-one column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-47311858b mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">

                                                            <div class="frame frame2 js-preview-frame2">
                                                                <div class="camera" data-id={{ $evaluationForm->id }}
                                                                    data-window-id=2>
                                                                    <img class="scale-with-grid"
                                                                        src="{{ asset('images/frontend/icon/icon-camera.svg') }}">
                                                                </div>
                                                            </div>
                                                            <div class="framedesc">
                                                                <img class="scale-with-grid"
                                                                    src="{{ asset('images/frontend/photo2.jpg') }}">
                                                                <p><span>上排牙齒</span>盡量張開嘴巴避免嘴唇遮擋牙齒</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 照片縮圖窗格 3 -->
                                                <div
                                                    class="column mcb-column mcb-item-f8f1ed2e4 one-second tablet-one-second mobile-one column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-f8f1ed2e4 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">

                                                            <div class="frame frame3 js-preview-frame3">
                                                                <div class="camera" data-id={{ $evaluationForm->id }}
                                                                    data-window-id=3>
                                                                    <img class="scale-with-grid"
                                                                        src="{{ asset('images/frontend/icon/icon-camera.svg') }}">
                                                                </div>
                                                            </div>
                                                            <div class="framedesc">
                                                                <img class="scale-with-grid"
                                                                    src="{{ asset('images/frontend/photo3.jpg') }}">
                                                                <p><span>下排牙齒</span>盡量張開嘴巴避免嘴唇遮擋牙齒</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 照片縮圖窗格 4 -->
                                                <div
                                                    class="column mcb-column mcb-item-6bb2c18e2 one-second tablet-one-second mobile-one column_column">
                                                    <div
                                                        class="mcb-column-inner mcb-column-inner-6bb2c18e2 mcb-item-column-inner">
                                                        <div class="column_attr mfn-inline-editor clearfix">

                                                            <div class="frame frame4 js-preview-frame4">
                                                                <div class="camera" data-id={{ $evaluationForm->id }}
                                                                    data-window-id=4>
                                                                    <img class="scale-with-grid"
                                                                        src="{{ asset('images/frontend/icon/icon-camera.svg') }}">
                                                                </div>
                                                            </div>
                                                            <div class="framedesc">
                                                                <img class="scale-with-grid"
                                                                    src="{{ asset('images/frontend/photo4.jpg') }}">
                                                                <p><span>側臉照片</span>拍攝您自然闔嘴的側面照片</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Section 上傳資料按鈕 -->
                                <div class="section mcb-section mfn-default-section mcb-section-aaaa9fef7 default-width">
                                    <input type="hidden" name="_token" value="">
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
                                                            onclick="updateBtn()">
                                                            <span class="button_label">上傳您的資料</span>
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

        <div class="modal fade" id="QRscanning" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                <div class="modal-content" style="background-color: #FFE0E0;border-radius: 1rem;">
                    <div class="modal-body">
                        <button type="button" class="btn-close float-end p-2" style="background-color:transparent;"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                        <!DOCTYPE html>
                        <html>

                        <head>
                            <style>
                                /* 頁面主體內容的樣式 */
                                .qr-code-container {
                                    position: static;
                                    width: 100%;
                                    height: 240px;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    margin: auto;
                                    /* 置中顯示 */
                                }

                                .qr-code-message {
                                    text-align: center;
                                    margin-top: 1px;
                                }

                                /* 置中容器樣式 */
                                .center-container {
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                    justify-content: center;
                                    height: auto;
                                    /* 讓容器佔滿整個視窗高度 */
                                }
                            </style>
                        </head>

                        <body>
                            <!-- 你的表單內容 -->
                            <div style="color:#CE0000;font-size:medium;" class="qr-code-message">
                                <div class="qr-code-container">
                                    <div id="qrcode"></div>
                                </div>
                            </div>
                            <center>
                                <p>掃描 QR code 前往手機裝置，完成免費評估。</p>
                            </center>

                            <!-- 引入 qrcodejs 庫 -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
                            <script>
                                // 當前頁面的 URL
                                const url = "{{ request()->fullUrl() }}";
                                // 生成 QR Code
                                new QRCode(document.getElementById("qrcode"), {
                                    text: url,
                                    width: 160,
                                    height: 160
                                });
                            </script>
                        </body>

                        </html>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function updateBtn() {
                let url = "{{ route('frontend.evaluationForm.update', ':id') }}";
                url = url.replace(':id', '{{ $evaluationForm->id }}');

                const formData = new FormData();
                assessmentHandler.info.photos.forEach((photo, num) => {
                    if (photo) {
                        id = num + 1;
                        formData.append(`intraoral_image_${id}`, photo);
                    }
                });

                formData.append('_method', 'PATCH');

                $.ajax({
                    url: url,
                    type: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    processData: false,
                    contentType: false,
                    data: formData,
                    success: function(response) {
                        if (response.code == '00') {
                            Swal.fire({
                                title: '修改成功！',
                                icon: 'success',
                                timer: 3000
                            }).then((result) => {
                                assessmentHandler.init();
                                location.href = "{{ route('frontend.index') }}";
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
