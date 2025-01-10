@extends('backend.layout.layout')

@section('container')
    <style>
        .abgne_tab {
            clear: left;
            width: 100%;
            margin: 0;
            word-break: break-all;
        }

        ul.tabs {
            width: 100%;
            margin-left: 2px;
        }

        ul.tabs li {
            float: left;
            width: 25%;
            overflow: hidden;
            position: relative;
            color: #ffffff;
            background: #eeeeee;
            border-bottom: 1px solid #dddddd;
            border-radius: 6px 6px 0px 0px;
            margin: 0 1px;
        }

        ul.tabs li.li20 {
            width: 19.75%;
        }

        ul.tabs li a {
            display: block;
            width: 100%;
            color: #565656;
            padding: 8px 0;
            font-size: 15px;
            font-weight: 500;
            text-align: center;
            letter-spacing: 1.5px;
        }

        ul.tabs li:hover {
            background: #e5e5e5;
            border-bottom: 1px solid #d0d0d0;
        }

        ul.tabs li.active {
            background: #d96b6d;
            border-bottom: 1px solid #bebebe;
        }

        ul.tabs li.active a {
            color: #ffffff;
        }

        div.tab_container {
            clear: left;
            width: 100%;
        }

        ul.tabs li.popup {
            background: #1d61a3 !important;
        }
    </style>

    <!-- 麵包屑 Breadcrumb -->
    <nav class="" aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-start lh-lg m-0 ms-3">
            <li class="breadcrumb-item">首頁設定</li>
            <li class="breadcrumb-item col">首頁內容設定</li>
        </ol>
    </nav>

    <div class="container-fluid p-3 m-1">

        <!-- 我適合SERENDIPITY的齒列矯正方案嗎？ Start -->
        <div class="card col-12 rounded-3 bg-white mb-4">
            <h2 class="fs-5 p-3 fw-bold border-bottom"><span class="txt_color4">➤ </span>我適合SERENDIPITY的齒列矯正方案嗎？
                <button type="button"
                    class="w-auto btn btn-danger btn-sm rounded-pill float-end shadow-sm lh-sm px-3">更新</button>
            </h2>

            <div class="card-body">
                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="w-auto col-1">
                        <div class="dive_sub">副標</div>
                    </div>
                    <div class="col">
                        <textarea name="message_content" class="form-control search_input easein mb-0" rows="2" placeholder="副標">若是有輕度齒列問題，虎牙、暴牙、咬合不正等，
都可以透過輕矯正，解決您的問題。</textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-- SERENDIPITY齒列矯正4步驟 Start -->
        <div class="card col-12 rounded-3 bg-white mb-4">
            <h2 class="fs-5 p-3 fw-bold border-bottom"><span class="txt_color4">➤ </span>SERENDIPITY齒列矯正4步驟
                <button type="button"
                    class="w-auto btn btn-danger btn-sm rounded-pill float-end shadow-sm lh-sm px-3">更新</button>
            </h2>

            <div class="card-body">
                <div class="d-flex justify-content-start gap-3 mb-4">
                    <div class="w-auto col-1">
                        <div class="dive_sub">副標</div>
                    </div>
                    <div class="col">
                        <textarea name="message_content" class="form-control search_input easein mb-0" rows="2" placeholder="副標">專屬諮詢師將全程陪伴您找回自信笑容！</textarea>
                    </div>
                </div>

                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="abgne_tab">
                        <ul class="tabs d-flex">
                            <li class="active"><a href="#tab_1-1">步驟1</a></li>
                            <li class=""><a href="#tab_1-2">步驟2</a></li>
                            <li class=""><a href="#tab_1-3">步驟3</a></li>
                            <li class=""><a href="#tab_1-4">步驟4</a></li>
                        </ul>
                        <div class="clear"></div>

                        <div class="tab_container">
                            <!--tab1 步驟1-->
                            <div id="tab_1-1" class="tab_content">

                                <div class="col-lg-12 col-12">
                                    <div class="card border-light gray_l p-3">

                                        <div class="d-flex justify-content-start gap-3 mb-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">階段</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control" placeholder="階段"
                                                    value="完成">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">說明</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control" placeholder="說明"
                                                    value="線上評估">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start gap-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">金額</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control" placeholder="金額"
                                                    value="免費">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">icon</div>
                                            </div>
                                            <div class="col">
                                                <input type="file" class="form-control" id="inputfile"
                                                    aria-describedby="inputFileAdd" aria-label="Upload">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--tab1 end-->

                            <!--tab2 步驟2-->
                            <div id="tab_1-2" class="tab_content">

                                <div class="col-lg-12 col-12">
                                    <div class="card border-light gray_l p-3">

                                        <div class="d-flex justify-content-start gap-3 mb-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">階段</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control" placeholder="階段"
                                                    value="由專業牙醫師">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">說明</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="說明" value="進行第一次診療">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start gap-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">金額</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="金額" value="$ 3,000~5,000元">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">icon</div>
                                            </div>
                                            <div class="col">
                                                <input type="file" class="form-control" id="inputfile"
                                                    aria-describedby="inputFileAdd" aria-label="Upload">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--tab2 end-->

                            <!--tab3 步驟3-->
                            <div id="tab_1-3" class="tab_content">

                                <div class="col-lg-12 col-12">
                                    <div class="card border-light gray_l p-3">

                                        <div class="d-flex justify-content-start gap-3 mb-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">階段</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="階段" value="">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">說明</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="說明" value="">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start gap-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">金額</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="金額" value="$ 72,000~144,000元">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">icon</div>
                                            </div>
                                            <div class="col">
                                                <input type="file" class="form-control" id="inputfile"
                                                    aria-describedby="inputFileAdd" aria-label="Upload">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--tab3 end-->

                            <!--tab4 步驟4-->
                            <div id="tab_1-4" class="tab_content">

                                <div class="col-lg-12 col-12">
                                    <div class="card border-light gray_l p-3">

                                        <div class="d-flex justify-content-start gap-3 mb-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">階段</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="階段" value="">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">說明</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="說明" value="">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start gap-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">金額</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="金額" value="免費">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">icon</div>
                                            </div>
                                            <div class="col">
                                                <input type="file" class="form-control" id="inputfile"
                                                    aria-describedby="inputFileAdd" aria-label="Upload">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--tab4 end-->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 哪一種隱形牙套矯正方案比較適合我？ Start -->
        <div class="card col-12 rounded-3 bg-white mb-4">
            <h2 class="fs-5 p-3 fw-bold border-bottom"><span class="txt_color4">➤ </span>哪一種隱形牙套矯正方案比較適合我？
                <button type="button"
                    class="w-auto btn btn-danger btn-sm rounded-pill float-end shadow-sm lh-sm px-3">更新</button>
            </h2>

            <div class="card-body">
                <div class="d-flex justify-content-start gap-3 mb-4">
                    <div class="w-auto col-1">
                        <div class="dive_sub">副標</div>
                    </div>
                    <div class="col">
                        <textarea name="message_content" class="form-control search_input easein mb-0" rows="2" placeholder="副標">依據牙醫的建議，選擇合適的矯正計畫</textarea>
                    </div>
                </div>

                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="abgne_tab">
                        <ul class="tabs d-flex">
                            <li class="active"><a href="#tab_2-1">方案1</a></li>
                            <li class=""><a href="#tab_2-2">方案2</a></li>
                            <li class=""><a href="#tab_2-3">方案3</a></li>
                        </ul>
                        <div class="clear"></div>

                        <div class="tab_container">
                            <!--tab1 方案1-->
                            <div id="tab_2-1" class="tab_content">

                                <div class="col-lg-12 col-12">
                                    <div class="card border-light gray_l p-3">

                                        <div class="d-flex justify-content-start gap-3 mb-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">方案名稱</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="方案名稱" value="SERENDIPITY">
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="方案名稱" value="Clear ™">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">金額</div>
                                            </div>
                                            <div class="w-auto input-group me-2">
                                                <span class="input-group-text bg-white">$</span>
                                                <input type="text" class="form-control" placeholder="金額"
                                                    value="72,000">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start gap-3 mb-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">程度</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="程度" value="輕度、二次矯正">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">區域</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="區域" value="前排牙齒">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start gap-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">療程</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="療程" value="療程約 3 ~ 9 個月">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">說明</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="說明" value="不用拔牙">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--tab1 end-->

                            <!--tab2 方案2-->
                            <div id="tab_2-2" class="tab_content">

                                <div class="col-lg-12 col-12">
                                    <div class="card border-light gray_l p-3">

                                        <div class="d-flex justify-content-start gap-3 mb-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">方案名稱</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="方案名稱" value="SERENDIPITY">
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="方案名稱" value="Plus ™">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">金額</div>
                                            </div>
                                            <div class="w-auto input-group me-2">
                                                <span class="input-group-text bg-white">$</span>
                                                <input type="text" class="form-control" placeholder="金額"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start gap-3 mb-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">程度</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="程度" value="">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">區域</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="區域" value="">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start gap-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">療程</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="療程" value="">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">說明</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="說明" value="">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--tab2 end-->

                            <!--tab3 方案3-->
                            <div id="tab_2-3" class="tab_content">

                                <div class="col-lg-12 col-12">
                                    <div class="card border-light gray_l p-3">

                                        <div class="d-flex justify-content-start gap-3 mb-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">方案名稱</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="方案名稱" value="SERENDIPITY">
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="方案名稱" value="Extra ™">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">金額</div>
                                            </div>
                                            <div class="w-auto input-group me-2">
                                                <span class="input-group-text bg-white">$</span>
                                                <input type="text" class="form-control" placeholder="金額"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start gap-3 mb-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">程度</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="程度" value="">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">區域</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="區域" value="">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start gap-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">療程</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="療程" value="">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">說明</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="說明" value="">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--tab3 end-->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 依照您喜歡的方式付款 Start -->
        <div class="card col-12 rounded-3 bg-white mb-4">
            <h2 class="fs-5 p-3 fw-bold border-bottom"><span class="txt_color4">➤ </span>依照您喜歡的方式付款
                <button type="button"
                    class="w-auto btn btn-danger btn-sm rounded-pill float-end shadow-sm lh-sm px-3">更新</button>
            </h2>

            <div class="card-body">
                <div class="d-flex justify-content-start gap-3 mb-4">
                    <div class="w-auto col-1">
                        <div class="dive_sub">副標</div>
                    </div>
                    <div class="col">
                        <textarea name="message_content" class="form-control search_input easein mb-0" rows="2" placeholder="副標">一次全額付清、分期付款等支付方式，我們都接受！</textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-start gap-3 mb-4">
                    <div class="w-auto col-1">
                        <div class="dive_sub">一次付清</div>
                    </div>
                    <div class="col">
                        <input type="text" id="" class="form-control" placeholder="一次付清" value="不定期提供優惠方案">
                    </div>
                </div>

                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="abgne_tab">
                        <ul class="tabs d-flex">
                            <li class="active"><a href="#tab_3-1">方案1</a></li>
                            <li class=""><a href="#tab_3-2">方案2</a></li>
                            <li class=""><a href="#tab_3-3">方案3</a></li>
                        </ul>
                        <div class="clear"></div>

                        <div class="tab_container">
                            <!--tab1 方案1-->
                            <div id="tab_3-1" class="tab_content">

                                <div class="col-lg-12 col-12">
                                    <div class="card border-light gray_l p-3">

                                        <div class="d-flex justify-content-start gap-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">方案名稱</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="方案名稱" value="Clear">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">金額</div>
                                            </div>
                                            <div class="w-auto input-group me-2">
                                                <span class="input-group-text bg-white">$</span>
                                                <input type="text" class="form-control" placeholder="金額"
                                                    value="6,000">
                                                <span class="input-group-text bg-white">/月</span>
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">說明</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="說明" value="12個月零利率">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--tab1 end-->

                            <!--tab2 方案2-->
                            <div id="tab_3-2" class="tab_content">

                                <div class="col-lg-12 col-12">
                                    <div class="card border-light gray_l p-3">

                                        <div class="d-flex justify-content-start gap-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">方案名稱</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="方案名稱" value="Plus">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">金額</div>
                                            </div>
                                            <div class="w-auto input-group me-2">
                                                <span class="input-group-text bg-white">$</span>
                                                <input type="text" class="form-control" placeholder="金額"
                                                    value="10,000">
                                                <span class="input-group-text bg-white">/月</span>
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">說明</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="說明" value="12個月零利率">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--tab2 end-->

                            <!--tab3 方案3-->
                            <div id="tab_3-3" class="tab_content">

                                <div class="col-lg-12 col-12">
                                    <div class="card border-light gray_l p-3">

                                        <div class="d-flex justify-content-start gap-3">
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">方案名稱</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="方案名稱" value="Extra">
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">金額</div>
                                            </div>
                                            <div class="w-auto input-group me-2">
                                                <span class="input-group-text bg-white">$</span>
                                                <input type="text" class="form-control" placeholder="金額"
                                                    value="12,000">
                                                <span class="input-group-text bg-white">/月</span>
                                            </div>
                                            <div class="w-auto col-1">
                                                <div class="dive_sub">說明</div>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="" class="form-control"
                                                    placeholder="說明" value="12個月零利率">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--tab3 end-->

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        $(window).load(function() {

            // 預設顯示第一個 Tab
            var _showTab = 0;
            var $defaultLi = $('ul.tabs li').eq(_showTab).addClass('active');
            $($defaultLi.find('a').attr('href')).siblings().hide();

            // 當 li 頁籤被點擊時...
            // 若要改成滑鼠移到 li 頁籤就切換時, 把 click 改成 mouseover
            $('ul.tabs li').click(function() {
                // 找出 li 中的超連結 href(#id)
                var $this = $(this),
                    _clickTab = $this.find('a').attr('href');
                // 把目前點擊到的 li 頁籤加上 .active
                // 並把兄弟元素中有 .active 的都移除 class
                $this.addClass('active').siblings('.active').removeClass('active');
                // 淡入相對應的內容並隱藏兄弟元素
                $(_clickTab).stop(false, true).show().siblings().hide();

                return false;
            }).find('a').focus(function() {
                this.blur();
            });

            $("#tab_2-2, #tab_2-3").hide();
            $("#tab_3-2, #tab_3-3").hide();
        });
    </script>

    <script>
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        let selectedFile = null;

        function reviewVideo(element) {
            const file = element.files[0];
            const previewContainer = $("#videoPreview");

            // 清空之前的預覽內容
            previewContainer.empty();

            if (file) {
                // 檢查檔案格式
                const validFormats = ["video/mp4", "video/quicktime"]; // MOV 對應 MIME 類型是 video/quicktime
                if (!validFormats.includes(file.type)) {
                    previewContainer.html("<p style='color:red;'>請上傳 MP4 或 MOV 格式的影片。</p>");
                    selectedFile = null;
                    return;
                }

                // 創建預覽影片元素
                const videoElement = $("<video>", {
                    controls: true,
                    width: "100%",
                    css: {
                        marginTop: "10px"
                    },
                });

                // 設置影片來源
                const fileURL = URL.createObjectURL(file);
                videoElement.append($("<source>", {
                    src: fileURL,
                    type: 'video/mp4'
                }));

                // 插入到預覽區域
                previewContainer.append(videoElement);
                selectedFile = file;
            } else {
                previewContainer.html("<p>尚未選擇影片</p>");
                selectedFile = null;
            }
        }

        function saveBtn() {
            if (!selectedFile) {
                Swal.fire({
                    title: '請先選擇影片！',
                    icon: 'error',
                    timer: 3000
                });

                return
            }

            const formData = new FormData();
            formData.append("video", selectedFile);

            $.ajax({
                url: "{{ route('backend.video.save') }}",
                type: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.code == '00') {
                        Swal.fire({
                            title: '更換成功！',
                            icon: 'success',
                            timer: 3000
                        }).then((result) => {
                            location.reload();
                        });
                    };
                },
                error: function(xhr, status, error) {
                    alert_text = JSON.parse(xhr.responseText).message;

                    if (xhr.status == '403') {
                        alert_text = "無此權限";
                    }

                    Swal.fire({
                        icon: "error",
                        title: alert_text,
                        timer: 3000
                    });
                }
            });
        }
    </script>
@endsection
