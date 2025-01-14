@extends('backend.layout.layout')

@section('container')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/backend/main-min.css') }}">
    <!-- 麵包屑 Breadcrumb -->
    <nav class="" aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-start lh-lg m-0 ms-3">
            <li class="breadcrumb-item">評估單管理</li>
            <li class="breadcrumb-item col">新增評估單</li>
        </ol>
    </nav>

    <div class="container-fluid p-3 m-1">
        <div class="card col-12 rounded-3 bg-white mb-4">
            <h2 class="fs-5 p-3 fw-bold border-bottom">新增評估單</h2>

            <div class="card-body border-bottom">
                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="w-auto col-1">
                        <div class="dive_sub">姓名</div>
                    </div>
                    <div class="col-2">
                        <input type="text" id="name" class="form-control">
                    </div>
                    <div class="w-auto col-1">
                        <div class="dive_sub">性別</div>
                    </div>
                    <div class="col-2">
                        <select id="gender" class="select form-control">
                            <option value="">請選擇性別</option>
                            <option value="male">男性</option>
                            <option value="female">女性</option>
                        </select>
                    </div>
                    <div class="w-auto">
                        <div class="dive_sub">狀態</div>
                    </div>
                    <div class="col-2">
                        <select id="status" class="select form-control">
                            <option value="">請選擇狀態</option>
                            @foreach (App\Models\EvaluationForm::STATUS as $key => $value)
                                <option value="{{ $value }}">{{ $key }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="w-auto col-1">
                        <div class="dive_sub">手機</div>
                    </div>
                    <div class="col-2">
                        <input type="text" id="phone" class="form-control" max="10w">
                    </div>
                    <div class="w-auto col-1">
                        <div class="dive_sub">Email</div>
                    </div>
                    <div class="col">
                        <input type="text" id="email" class="form-control">
                    </div>
                    <div class="w-auto col-1">
                        <div class="dive_sub">齒列問題</div>
                    </div>
                    <div class="col">
                        <select id="question" class="select form-control">
                            <option value="">請選擇齒列問題</option>
                            <option value="戽斗(反咬)">戽斗(反咬)</option>
                            <option value="開咬">開咬</option>
                            <option value="齒列擁擠">齒列擁擠</option>
                            <option value="錯咬">錯咬</option>
                            <option value="暴牙">暴牙</option>
                            <option value="深咬">深咬</option>
                            <option value="牙縫過大">牙縫過大</option>
                            <option value="二次矯正">二次矯正</option>
                            <option value="我不確定">我不確定</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="w-auto col-1">
                        <div class="dive_sub">想改善處</div>
                    </div>
                    <div class="col">
                        <textarea id="improvements" class="form-control search_input easein mb-0" rows="2" placeholder=""></textarea>
                    </div>
                </div>

                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="col-3 card-body fs-6 gray_l rounded-3">
                        <label class="mb-2">正面照</label>
                        <div class="c-mainCard__item">
                            <div class="l-upload l-upload--notSpace">
                                <!-- 圖片 -->
                                <div class="c-uploadBlock m-0 p-1" data-upload="data-upload">
                                    <div class="c-uploadBlock__upload border-0 rounded-3"
                                        data-upload-trigger="data-upload-trigger">
                                        <div class="c-uploadBlock__head c-uploadBlock__head">上傳正面照</div>
                                        <div class="c-uploadBlock__icon c-uploadBlock__icon--idFront"></div>
                                        <div class="c-uploadBlock__action">
                                            <div class="c-uploadBtn">
                                                <input type="file" id="intraoral_image_1" class="c-uploadBtn__input"
                                                    data-upload-input="data-upload-input">
                                                <div class="c-uploadBtn__icon"><i class="far fa-image"></i>
                                                </div>
                                                <label for="intraoral_image_1"
                                                    class="c-uploadBtn__label text-dark">選擇拍照或上傳圖片</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="c-uploadBlock__show" data-upload-show="data-upload-show">
                                        <img id="intraoral_image_1Img" src="{{ asset('images/backend/defaultImage.png') }}"
                                            class="c-uploadBlock__img" data-upload-img="data-upload-img">
                                        <div class="c-uploadBlock__reUpload position-relative">
                                            <a class="c-reUploadBtn" data-upload-reupload="data-upload-reupload">
                                                <div class="c-reUploadBtn__icon"><i class="fas fa-redo-alt"></i>
                                                </div>
                                                <div class="c-reUploadBtn__text">重新選擇</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="c-uploadBlock__error">尚未填寫</div><br>
                                </div>
                                <!-- 圖片 end -->

                            </div>
                        </div>
                    </div>
                    <div class="col-3 card-body fs-6 gray_l rounded-3">
                        <label class="mb-2">上排牙齒</label>
                        <div class="c-mainCard__item">
                            <div class="l-upload l-upload--notSpace">

                                <!-- 圖片 -->
                                <div class="c-uploadBlock m-0 p-1" data-upload="data-upload">
                                    <div class="c-uploadBlock__upload border-0 rounded-3"
                                        data-upload-trigger="data-upload-trigger">
                                        <div class="c-uploadBlock__head c-uploadBlock__head">上傳上排牙齒</div>
                                        <div class="c-uploadBlock__icon c-uploadBlock__icon--idFront"></div>
                                        <div class="c-uploadBlock__action">
                                            <div class="c-uploadBtn">
                                                <input type="file" id="intraoral_image_2" class="c-uploadBtn__input"
                                                    data-upload-input="data-upload-input">
                                                <div class="c-uploadBtn__icon"><i class="far fa-image"></i>
                                                </div>
                                                <label for="intraoral_image_2"
                                                    class="c-uploadBtn__label text-dark">選擇拍照或上傳圖片</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="c-uploadBlock__show" data-upload-show="data-upload-show">
                                        <img id="intraoral_image_2Img"
                                            src="{{ asset('images/backend/defaultImage.png') }}"
                                            class="c-uploadBlock__img" data-upload-img="data-upload-img">
                                        <div class="c-uploadBlock__reUpload position-relative">
                                            <a class="c-reUploadBtn" data-upload-reupload="data-upload-reupload">
                                                <div class="c-reUploadBtn__icon"><i class="fas fa-redo-alt"></i>
                                                </div>
                                                <div class="c-reUploadBtn__text">重新選擇</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="c-uploadBlock__error">尚未填寫</div><br>
                                </div>
                                <!-- 圖片 end -->

                            </div>
                        </div>
                    </div>
                    <div class="col-3 card-body fs-6 gray_l rounded-3">
                        <label class="mb-2">下排牙齒</label>
                        <div class="c-mainCard__item">
                            <div class="l-upload l-upload--notSpace">

                                <!-- 圖片 -->
                                <div class="c-uploadBlock m-0 p-1" data-upload="data-upload">
                                    <div class="c-uploadBlock__upload border-0 rounded-3"
                                        data-upload-trigger="data-upload-trigger">
                                        <div class="c-uploadBlock__head c-uploadBlock__head">上傳下排牙齒</div>
                                        <div class="c-uploadBlock__icon c-uploadBlock__icon--idFront"></div>
                                        <div class="c-uploadBlock__action">
                                            <div class="c-uploadBtn">
                                                <input type="file" id="intraoral_image_3" class="c-uploadBtn__input"
                                                    data-upload-input="data-upload-input">
                                                <div class="c-uploadBtn__icon"><i class="far fa-image"></i>
                                                </div>
                                                <label for="intraoral_image_3"
                                                    class="c-uploadBtn__label text-dark">選擇拍照或上傳圖片</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="c-uploadBlock__show" data-upload-show="data-upload-show">
                                        <img id="intraoral_image_3Img"
                                            src="{{ asset('images/backend/defaultImage.png') }}"
                                            class="c-uploadBlock__img" data-upload-img="data-upload-img">
                                        <div class="c-uploadBlock__reUpload position-relative">
                                            <a class="c-reUploadBtn" data-upload-reupload="data-upload-reupload">
                                                <div class="c-reUploadBtn__icon"><i class="fas fa-redo-alt"></i>
                                                </div>
                                                <div class="c-reUploadBtn__text">重新選擇</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="c-uploadBlock__error">尚未填寫</div><br>
                                </div>
                                <!-- 圖片 end -->

                            </div>
                        </div>
                    </div>
                    <div class="col-3 card-body fs-6 gray_l rounded-3">
                        <label class="mb-2">側臉照片</label>
                        <div class="c-mainCard__item">
                            <div class="l-upload l-upload--notSpace">

                                <!-- 圖片 -->
                                <div class="c-uploadBlock m-0 p-1" data-upload="data-upload">
                                    <div class="c-uploadBlock__upload border-0 rounded-3"
                                        data-upload-trigger="data-upload-trigger">
                                        <div class="c-uploadBlock__head c-uploadBlock__head">上傳側臉照片</div>
                                        <div class="c-uploadBlock__icon c-uploadBlock__icon--idFront"></div>
                                        <div class="c-uploadBlock__action">
                                            <div class="c-uploadBtn">
                                                <input type="file" id="intraoral_image_4" class="c-uploadBtn__input"
                                                    data-upload-input="data-upload-input">
                                                <div class="c-uploadBtn__icon"><i class="far fa-image"></i>
                                                </div>
                                                <label for="intraoral_image_4"
                                                    class="c-uploadBtn__label text-dark">選擇拍照或上傳圖片</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="c-uploadBlock__show" data-upload-show="data-upload-show">
                                        <img id="intraoral_image_4Img"
                                            src="{{ asset('images/backend/defaultImage.png') }}"
                                            class="c-uploadBlock__img" data-upload-img="data-upload-img">
                                        <div class="c-uploadBlock__reUpload position-relative">
                                            <a class="c-reUploadBtn" data-upload-reupload="data-upload-reupload">
                                                <div class="c-reUploadBtn__icon"><i class="fas fa-redo-alt"></i>
                                                </div>
                                                <div class="c-reUploadBtn__text">重新選擇</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="c-uploadBlock__error">尚未填寫</div><br>
                                </div>
                                <!-- 圖片 end -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="w-auto col-1">
                        <div class="dive_sub">諮詢備註</div>
                    </div>
                    <div class="col">
                        <textarea id="notes" class="form-control search_input easein mb-0" rows="2"></textarea>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-danger border-0 rounded-3 float-end shadow-sm px-3"
                    onclick="clearBtn()">清除</button>
                <button type="button" class="btn btn-primary border-0 rounded-3 float-end shadow-sm px-3 me-2"
                    onclick="createBtn()">新增</button>
                <button type="button" class="btn btn-secondary border-0 rounded-3 float-end shadow-sm px-3 me-2"
                    href="{{ route('backend.evaluationForm.index') }}">返回列表</button>
            </div>
        </div>
    </div>

    <script>
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        function clearBtn() {
            $("input, select, textarea").val('');
            for (let i = 1; i <= 4; i++) {
                $(`#intraoral_image_${i}Img`).attr("src", "{{ asset('images/backend/defaultImage.png') }}");
            }
        }

        function createBtn() {
            const data = new FormData();

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
                url: "{{ route('backend.evaluationForm.store') }}",
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
                            title: '新增成功！',
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
    <script src="{{ asset('js/plugins-min.js') }}"></script>
@endsection
