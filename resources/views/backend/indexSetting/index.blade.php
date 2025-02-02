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
            <h2 class="fs-5 p-3 fw-bold border-bottom"><span class="txt_color4">➤ </span>我適合SERENDIPITY的齒列矯正方案嗎?
                <button type="button" class="w-auto btn btn-danger btn-sm rounded-pill float-end shadow-sm lh-sm px-3"
                    onclick="updateBtn('subtitle_suitable_plan')">更新</button>
            </h2>

            <div class="card-body">
                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="w-auto col-1">
                        <div class="dive_sub">副標</div>
                    </div>
                    <div class="col">
                        <textarea id="subtitle_suitable_plan" class="form-control search_input easein mb-0" rows="2">{{ $indexSetting->subtitle_suitable_plan }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-- SERENDIPITY齒列矯正4步驟 Start -->
        <div class="card col-12 rounded-3 bg-white mb-4">
            <h2 class="fs-5 p-3 fw-bold border-bottom"><span class="txt_color4">➤ </span>SERENDIPITY齒列矯正4步驟
                <button type="button" class="w-auto btn btn-danger btn-sm rounded-pill float-end shadow-sm lh-sm px-3"
                    onclick="updateBtn('steps')">更新</button>
            </h2>

            <div class="card-body">
                <div class="d-flex justify-content-start gap-3 mb-4">
                    <div class="w-auto col-1">
                        <div class="dive_sub">副標</div>
                    </div>
                    <div class="col">
                        <textarea id="subtitle_four_steps" class="form-control search_input easein mb-0" rows="2">{{ $indexSetting->subtitle_four_steps }}</textarea>
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
                            @for ($i = 1; $i <= 4; $i++)
                                <div id="tab_1-{{ $i }}" class="tab_content">

                                    <div class="col-lg-12 col-12">
                                        <div class="card border-light gray_l p-3">

                                            <div class="d-flex justify-content-start gap-3 mb-3">
                                                <div class="w-auto col-1">
                                                    <div class="dive_sub">階段</div>
                                                </div>
                                                <div class="col">
                                                    <input type="text" id="step_{{ $i }}_phase"
                                                        class="form-control" value='{{ $indexSetting["step_{$i}_phase"] }}'>
                                                </div>
                                                <div class="w-auto col-1">
                                                    <div class="dive_sub">說明</div>
                                                </div>
                                                <div class="col">
                                                    <input type="text" id="step_{{ $i }}_description"
                                                        class="form-control"
                                                        value='{{ $indexSetting["step_{$i}_description"] }}'>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start gap-3">
                                                <div class="w-auto col-1">
                                                    <div class="dive_sub">金額</div>
                                                </div>
                                                <div class="col">
                                                    <input type="text" id="step_{{ $i }}_price"
                                                        class="form-control" value='{{ $indexSetting["step_{$i}_price"] }}'>
                                                </div>
                                                <div class="w-auto col-1">
                                                    <div class="dive_sub">icon</div>
                                                </div>
                                                <div class="col">
                                                    <input type="file" class="form-control"
                                                        id="step_{{ $i }}_button" aria-describedby="inputFileAdd"
                                                        aria-label="Upload" accept=".svg">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 哪一種隱形牙套矯正方案比較適合我？ Start -->
        <div class="card col-12 rounded-3 bg-white mb-4">
            <h2 class="fs-5 p-3 fw-bold border-bottom"><span class="txt_color4">➤ </span>哪一種隱形牙套矯正方案比較適合我？
                <button type="button" class="w-auto btn btn-danger btn-sm rounded-pill float-end shadow-sm lh-sm px-3"
                    onclick="updateBtn('plan')">更新</button>
            </h2>

            <div class="card-body">
                <div class="d-flex justify-content-start gap-3 mb-4">
                    <div class="w-auto col-1">
                        <div class="dive_sub">副標</div>
                    </div>
                    <div class="col">
                        <textarea id="subtitle_suitable_aligners" class="form-control search_input easein mb-0" rows="2">{{ $indexSetting->subtitle_suitable_aligners }}</textarea>
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
                            @for ($i = 1; $i <= 3; $i++)
                                <div id="tab_2-{{ $i }}" class="tab_content">

                                    <div class="col-lg-12 col-12">
                                        <div class="card border-light gray_l p-3">

                                            <div class="d-flex justify-content-start gap-3 mb-3">
                                                <div class="w-auto col-1">
                                                    <div class="dive_sub">方案名稱</div>
                                                </div>
                                                <div class="col">
                                                    <input type="text" id="plan_{{ $i }}_name"
                                                        class="form-control"
                                                        value='{{ $indexSetting["plan_{$i}_name"] }}'>
                                                </div>
                                                <div class="w-auto col-1">
                                                    <div class="dive_sub">金額</div>
                                                </div>
                                                <div class="w-auto input-group me-2">
                                                    <span class="input-group-text bg-white">$</span>
                                                    <input type="text" id="plan_{{ $i }}_price"
                                                        class="form-control"
                                                        value='{{ $indexSetting["plan_{$i}_price"] }}'>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start gap-3 mb-3">
                                                <div class="w-auto col-1">
                                                    <div class="dive_sub">程度</div>
                                                </div>
                                                <div class="col">
                                                    <input type="text" id="plan_{{ $i }}_severity"
                                                        class="form-control"
                                                        value='{{ $indexSetting["plan_{$i}_severity"] }}'>
                                                </div>
                                                <div class="w-auto col-1">
                                                    <div class="dive_sub">區域</div>
                                                </div>
                                                <div class="col">
                                                    <input type="text" id="plan_{{ $i }}_region"
                                                        class="form-control"
                                                        value='{{ $indexSetting["plan_{$i}_region"] }}'>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start gap-3">
                                                <div class="w-auto col-1">
                                                    <div class="dive_sub">療程</div>
                                                </div>
                                                <div class="col">
                                                    <input type="text" id="plan_{{ $i }}_treatment"
                                                        class="form-control"
                                                        value='{{ $indexSetting["plan_{$i}_treatment"] }}'>
                                                </div>
                                                <div class="w-auto col-1">
                                                    <div class="dive_sub">說明</div>
                                                </div>
                                                <div class="col">
                                                    <input type="text" id="plan_{{ $i }}_description"
                                                        class="form-control"
                                                        value='{{ $indexSetting["plan_{$i}_description"] }}'>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 依照您喜歡的方式付款 Start -->
        <div class="card col-12 rounded-3 bg-white mb-4">
            <h2 class="fs-5 p-3 fw-bold border-bottom"><span class="txt_color4">➤ </span>依照您喜歡的方式付款
                <button type="button" class="w-auto btn btn-danger btn-sm rounded-pill float-end shadow-sm lh-sm px-3"
                    onclick="updateBtn('payment')">更新</button>
            </h2>

            <div class="card-body">
                <div class="d-flex justify-content-start gap-3 mb-4">
                    <div class="w-auto col-1">
                        <div class="dive_sub">副標</div>
                    </div>
                    <div class="col">
                        <textarea id="subtitle_payment_methods" class="form-control search_input easein mb-0" rows="2">{{ $indexSetting->subtitle_payment_methods }}</textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-start gap-3 mb-4">
                    <div class="w-auto col-1">
                        <div class="dive_sub">一次付清</div>
                    </div>
                    <div class="col">
                        <textarea id="payment_full_amount" class="form-control search_input easein mb-0" rows="2">{{ $indexSetting->payment_full_amount }}</textarea>
                    </div>
                </div>

                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="abgne_tab">
                        <div class="w-auto col-1">
                            <div class="dive_sub">分期付款</div>
                        </div>
                        <ul class="tabs d-flex">
                            <li class="active"><a href="#tab_3-1">方案1</a></li>
                            <li class=""><a href="#tab_3-2">方案2</a></li>
                            <li class=""><a href="#tab_3-3">方案3</a></li>
                        </ul>
                        <div class="clear"></div>

                        <div class="tab_container">
                            @for ($i = 1; $i <= 3; $i++)
                                <div id="tab_3-{{ $i }}" class="tab_content">

                                    <div class="col-lg-12 col-12">
                                        <div class="card border-light gray_l p-3">

                                            <div class="d-flex justify-content-start gap-3">
                                                <div class="w-auto col-1">
                                                    <div class="dive_sub">方案名稱</div>
                                                </div>
                                                <div class="col">
                                                    <input type="text" id="payment_{{ $i }}_name"
                                                        class="form-control"
                                                        value='{{ $indexSetting["payment_{$i}_name"] }}'>
                                                </div>
                                                <div class="w-auto col-1">
                                                    <div class="dive_sub">金額</div>
                                                </div>
                                                <div class="w-auto input-group me-2">
                                                    <span class="input-group-text bg-white">$</span>
                                                    <input type="text" id="payment_{{ $i }}_price"
                                                        class="form-control"
                                                        value='{{ $indexSetting["payment_{$i}_price"] }}'>
                                                    <span class="input-group-text bg-white">/月</span>
                                                </div>
                                                <div class="w-auto col-1">
                                                    <div class="dive_sub">說明</div>
                                                </div>
                                                <div class="col">
                                                    <input type="text" id="payment_{{ $i }}_description"
                                                        class="form-control"
                                                        value='{{ $indexSetting["payment_{$i}_description"] }}'>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            @endfor
                            <!--tab1 end-->
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

        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        function handleData(param) {
            const data = new FormData();
            data.append("param", param);
            switch (param) {
                case 'subtitle_suitable_plan':
                    data.append("subtitle_suitable_plan", $("#subtitle_suitable_plan").val());
                    break;

                case 'steps':
                    data.append("subtitle_four_steps", $("#subtitle_four_steps").val());
                    for (let i = 1; i <= 4; i++) {
                        data.append(`step_${i}_phase`, $(`#step_${i}_phase`).val());
                        data.append(`step_${i}_description`, $(`#step_${i}_description`).val());
                        data.append(`step_${i}_price`, $(`#step_${i}_price`).val());
                        let fileInput = $(`#step_${i}_button`)[0];
                        if (fileInput && fileInput.files.length > 0) {
                            data.append(`step_${i}_button`, fileInput.files[0]);
                        }
                    }
                    break;

                case 'plan':
                    data.append("subtitle_suitable_aligners", $("#subtitle_suitable_aligners").val());
                    for (let i = 1; i <= 3; i++) {
                        data.append(`plan_${i}_name`, $(`#plan_${i}_name`).val());
                        data.append(`plan_${i}_price`, $(`#plan_${i}_price`).val());
                        data.append(`plan_${i}_severity`, $(`#plan_${i}_severity`).val());
                        data.append(`plan_${i}_region`, $(`#plan_${i}_region`).val());
                        data.append(`plan_${i}_treatment`, $(`#plan_${i}_treatment`).val());
                        data.append(`plan_${i}_description`, $(`#plan_${i}_description`).val());
                    }
                    break;

                case 'payment':
                    data.append("subtitle_payment_methods", $("#subtitle_payment_methods").val());
                    data.append("payment_full_amount", $("#payment_full_amount").val());
                    for (let i = 1; i <= 3; i++) {
                        data.append(`payment_${i}_name`, $(`#payment_${i}_name`).val());
                        data.append(`payment_${i}_price`, $(`#payment_${i}_price`).val());
                        data.append(`payment_${i}_description`, $(`#payment_${i}_description`).val());
                    }
                    break;
            }

            return data;
        }

        function updateBtn(param) {
            data = handleData(param);
            data.append('_method', 'PATCH');

            $.ajax({
                url: "{{ route('backend.indexSetting.update', '1') }}",
                type: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken
                },
                data: data,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.code == '00') {
                        Swal.fire({
                            title: '修改成功！',
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
