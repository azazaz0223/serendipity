@extends('backend.layout.layout')

@section('container')
    <!-- 麵包屑 Breadcrumb -->
    <nav class="" aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-start lh-lg m-0 ms-3">
            <li class="breadcrumb-item">評估單管理</li>
            <li class="breadcrumb-item col">編輯評估單</li>
        </ol>
    </nav>

    <div class="container-fluid p-3 m-1">
        <div class="card col-12 rounded-3 bg-white mb-4">
            <h2 class="fs-5 p-3 fw-bold border-bottom">編輯評估單</h2>

            <div class="card-body border-bottom">
                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="w-auto col-1">
                        <div class="dive_sub">姓名</div>
                    </div>
                    <div class="col-2">
                        <input type="text" id="name" class="form-control" value="{{ $evaluationForm->name }}">
                    </div>
                    <div class="w-auto col-1">
                        <div class="dive_sub">性別</div>
                    </div>
                    <div class="col-2">
                        <select id="gender" class="select form-control">
                            <option value="">請選擇性別</option>
                            <option value="male" @selected($evaluationForm->gender == 'male')>男性</option>
                            <option value="female" @selected($evaluationForm->gender == 'female')>女性</option>
                        </select>
                    </div>
                    <div class="w-auto col-1">
                        <div class="dive_sub">申請日期</div>
                    </div>
                    <div class="col">
                        <div class="form-control">{{ $evaluationForm->created_at }}</div>
                    </div>
                    <div class="w-auto">
                        <div class="dive_sub">狀態</div>
                    </div>
                    <div class="col-2">
                        <select id="status" class="select form-control">
                            <option value="">請選擇狀態</option>
                            @foreach (App\Models\EvaluationForm::STATUS as $key => $value)
                                <option value="{{ $value }}" @selected($evaluationForm->status == $value)>{{ $key }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="w-auto col-1">
                        <div class="dive_sub">手機</div>
                    </div>
                    <div class="col-2">
                        <input type="text" id="phone" class="form-control" maxlength="10"
                            value="{{ $evaluationForm->phone }}">
                    </div>
                    <div class="w-auto col-1">
                        <div class="dive_sub">Email</div>
                    </div>
                    <div class="col">
                        <input type="text" id="email" class="form-control" value="{{ $evaluationForm->email }}">
                    </div>
                    <div class="w-auto col-1">
                        <div class="dive_sub">齒列問題</div>
                    </div>
                    <div class="col">
                        <select id="question" class="select form-control">
                            <option value="">請選擇齒列問題</option>
                            <option value="戽斗(反咬)" @selected($evaluationForm->question == '戽斗(反咬)')>戽斗(反咬)</option>
                            <option value="開咬" @selected($evaluationForm->question == '開咬')>開咬</option>
                            <option value="齒列擁擠" @selected($evaluationForm->question == '齒列擁擠')>齒列擁擠</option>
                            <option value="錯咬" @selected($evaluationForm->question == '錯咬')>錯咬</option>
                            <option value="暴牙" @selected($evaluationForm->question == '暴牙')>暴牙</option>
                            <option value="深咬" @selected($evaluationForm->question == '深咬')>深咬</option>
                            <option value="牙縫過大" @selected($evaluationForm->question == '牙縫過大')>牙縫過大</option>
                            <option value="二次矯正" @selected($evaluationForm->question == '二次矯正')>二次矯正</option>
                            <option value="我不確定" @selected($evaluationForm->question == '我不確定')>我不確定</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="w-auto col-1">
                        <div class="dive_sub">想改善處</div>
                    </div>
                    <div class="col">
                        <textarea id="improvements" class="form-control search_input easein mb-0" rows="2">{{ $evaluationForm->improvements }}</textarea>
                    </div>
                </div>

                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="col-3 card-body fs-6 gray_l rounded-3">
                        <label class="mb-2">上傳正面照</label>
                        <input type="file" id="intraoral_image_1"
                            class="form-control search_input product-hover border- easein"
                            accept="image/gif, image/jpeg, image/png" onchange="reviewImage(this)">
                        <img id="intraoral_image_1Img" class="mt-3"
                            @if ($evaluationForm->intraoral_image_1) src="{{ asset($evaluationForm->intraoral_image_1) }}"
                        @else
                            src="{{ asset('images/backend/defaultImage.png') }}" @endif>
                    </div>

                    <div class="col-3 card-body fs-6 gray_l rounded-3">
                        <label class="mb-2">上傳上排牙齒</label>
                        <input type="file" id="intraoral_image_2"
                            class="form-control search_input product-hover border- easein"
                            accept="image/gif, image/jpeg, image/png" onchange="reviewImage(this)">
                        <img id="intraoral_image_2Img" class="mt-3"
                            @if ($evaluationForm->intraoral_image_2) src="{{ asset($evaluationForm->intraoral_image_2) }}"
                        @else
                            src="{{ asset('images/backend/defaultImage.png') }}" @endif>
                    </div>

                    <div class="col-3 card-body fs-6 gray_l rounded-3">
                        <label class="mb-2">上傳下排牙齒</label>
                        <input type="file" id="intraoral_image_3"
                            class="form-control search_input product-hover border- easein"
                            accept="image/gif, image/jpeg, image/png" onchange="reviewImage(this)">
                        <img id="intraoral_image_3Img" class="mt-3"
                            @if ($evaluationForm->intraoral_image_3) src="{{ asset($evaluationForm->intraoral_image_3) }}"
                        @else
                            src="{{ asset('images/backend/defaultImage.png') }}" @endif>
                    </div>

                    <div class="col-3 card-body fs-6 gray_l rounded-3">
                        <label class="mb-2">上傳側臉照片</label>
                        <input type="file" id="intraoral_image_4"
                            class="form-control search_input product-hover border- easein"
                            accept="image/gif, image/jpeg, image/png" onchange="reviewImage(this)">
                        <img id="intraoral_image_4Img" class="mt-3"
                            @if ($evaluationForm->intraoral_image_4) src="{{ asset($evaluationForm->intraoral_image_4) }}"
                        @else
                            src="{{ asset('images/backend/defaultImage.png') }}" @endif>
                    </div>
                </div>

                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="w-auto col-1">
                        <div class="dive_sub">諮詢備註</div>
                    </div>
                    <div class="col">
                        <textarea id="notes" class="form-control search_input easein mb-0" rows="2">{{ $evaluationForm->notes }}</textarea>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-danger border-0 rounded-3 float-end shadow-sm px-3"
                    onclick="clearBtn()">清除</button>
                <button type="button" class="btn btn-primary border-0 rounded-3 float-end shadow-sm px-3 me-2"
                    onclick="updateBtn()">修改</button>
                <a class="btn btn-secondary border-0 rounded-3 float-end shadow-sm px-3 me-2"
                    href="{{ route('backend.evaluationForm.index') }}">返回列表</a>
            </div>
        </div>
    </div>

    <script>
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        function reviewImage(element) {
            if (element.files && element.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(`#${element.id}Img`).attr('src', e.target.result);
                }
                reader.readAsDataURL(element.files[0]);
            }
        }

        function clearBtn() {
            $("input, select, textarea").val('');
            for (let i = 1; i <= 4; i++) {
                $(`#intraoral_image_${i}Img`).attr("src", "{{ asset('images/backend/defaultImage.png') }}");
            }
        }

        function updateBtn() {
            url = "{{ route('backend.evaluationForm.update', ':id') }}";
            url = url.replace(':id', '{{ $evaluationForm->id }}');

            const data = new FormData();
            data.append('_method', 'PATCH');

            if ($("#name").val() != "") {
                data.append("name", $("#name").val());
            } else {
                Swal.fire({
                    icon: "error",
                    title: "請輸入姓名",
                    timer: 3000
                });

                return;
            }

            if ($("#status").val() != "") {
                data.append("status", $("#status").val());
            } else {
                Swal.fire({
                    icon: "error",
                    title: "請選擇上架",
                    timer: 3000
                });

                return;
            }

            if ($("#gender").val() != "") data.append("gender", $("#gender").val());

            if ($("#phone").val() != "") {
                data.append("phone", $("#phone").val());
            } else {
                Swal.fire({
                    icon: "error",
                    title: "請輸入手機",
                    timer: 3000
                });

                return;
            }

            if ($("#email").val() != "") {
                data.append("email", $("#email").val());
            } else {
                Swal.fire({
                    icon: "error",
                    title: "請輸入E-mail",
                    timer: 3000
                });

                return;
            }

            if ($("#question").val() != "") {
                data.append("question", $("#question").val());
            } else {
                Swal.fire({
                    icon: "error",
                    title: "請選擇齒列問題",
                    timer: 3000
                });

                return;
            }

            for (let i = 1; i <= 4; i++) {
                let fileInput = $(`#intraoral_image_${i}`)[0];
                if (fileInput && fileInput.files.length > 0) {
                    data.append(`intraoral_image_${i}`, fileInput.files[0]);
                }
            }

            if ($("#improvements").val() != "") data.append("improvements", $("#improvements").val());

            if ($("#notes").val() != "") data.append("notes", $("#notes").val());

            $.ajax({
                url: url,
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
                            location.href = "{{ route('backend.evaluationForm.index') }}";
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
