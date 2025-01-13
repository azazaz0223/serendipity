@extends('backend.layout.layout')

@section('container')
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
                    <div class="w-auto col-1">
                        <div class="dive_sub">申請日期</div>
                    </div>
                    <div class="col">
                        <input type="text" id="" class="form-control" placeholder="" value="2024-12-31"
                            disabled="">
                    </div>
                    <div class="w-auto">
                        <div class="dive_sub">狀態</div>
                    </div>
                    <div class="col-2">
                        <select id="" class="select form-control">
                            <option>申請中</option>
                            <option>未回覆</option>
                            <option>已聯繫</option>
                            <option>已預約</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="w-auto col-1">
                        <div class="dive_sub">手機</div>
                    </div>
                    <div class="col-2">
                        <input type="text" id="" class="form-control" placeholder="">
                    </div>
                    <div class="w-auto col-1">
                        <div class="dive_sub">Email</div>
                    </div>
                    <div class="col">
                        <input type="text" id="" class="form-control" placeholder="">
                    </div>
                    <div class="w-auto col-1">
                        <div class="dive_sub">齒列問題</div>
                    </div>
                    <div class="col">
                        <select id="" class="select form-control">
                            <option>全部</option>
                            <option>戽斗(反咬)</option>
                            <option>開咬</option>
                            <option>齒列擁擠</option>
                            <option>錯咬</option>
                            <option>暴牙</option>
                            <option>深咬</option>
                            <option>牙縫過大</option>
                            <option>二次矯正</option>
                            <option>我不確定</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="w-auto col-1">
                        <div class="dive_sub">想改善處</div>
                    </div>
                    <div class="col">
                        <textarea name="message_content" class="form-control search_input easein mb-0" rows="2" placeholder="描述">我超級戽斗，醜爆</textarea>
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
                                                <input type="file" id="photo_1" class="c-uploadBtn__input"
                                                    data-upload-input="data-upload-input">
                                                <div class="c-uploadBtn__icon"><i class="far fa-image"></i>
                                                </div>
                                                <label for="photo_1" class="c-uploadBtn__label text-dark">選擇拍照或上傳圖片</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="c-uploadBlock__show" data-upload-show="data-upload-show">
                                        <img id="IMG_photo_1" src="#" class="c-uploadBlock__img"
                                            data-upload-img="data-upload-img">
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
                                                <input type="file" id="photo_2" class="c-uploadBtn__input"
                                                    data-upload-input="data-upload-input">
                                                <div class="c-uploadBtn__icon"><i class="far fa-image"></i>
                                                </div>
                                                <label for="photo_2"
                                                    class="c-uploadBtn__label text-dark">選擇拍照或上傳圖片</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="c-uploadBlock__show" data-upload-show="data-upload-show">
                                        <img id="IMG_photo_2" src="#" class="c-uploadBlock__img"
                                            data-upload-img="data-upload-img">
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
                                                <input type="file" id="photo_3" class="c-uploadBtn__input"
                                                    data-upload-input="data-upload-input">
                                                <div class="c-uploadBtn__icon"><i class="far fa-image"></i>
                                                </div>
                                                <label for="photo_3"
                                                    class="c-uploadBtn__label text-dark">選擇拍照或上傳圖片</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="c-uploadBlock__show" data-upload-show="data-upload-show">
                                        <img id="IMG_photo_3" src="#" class="c-uploadBlock__img"
                                            data-upload-img="data-upload-img">
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
                                                <input type="file" id="photo_4" class="c-uploadBtn__input"
                                                    data-upload-input="data-upload-input">
                                                <div class="c-uploadBtn__icon"><i class="far fa-image"></i>
                                                </div>
                                                <label for="photo_4"
                                                    class="c-uploadBtn__label text-dark">選擇拍照或上傳圖片</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="c-uploadBlock__show" data-upload-show="data-upload-show">
                                        <img id="IMG_photo_4" src="#" class="c-uploadBlock__img"
                                            data-upload-img="data-upload-img">
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
                        <textarea name="message_content" class="form-control search_input easein mb-0" rows="2" placeholder="諮詢備註"></textarea>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-secondary border-0 rounded-3 float-end shadow-sm px-3">新增</a>
                <a href="#" class="btn btn-secondary border-0 rounded-3 float-end shadow-sm px-3 me-2">確認修改</a>
                <a href="#" class="btn btn-secondary border-0 rounded-3 float-end shadow-sm px-3 me-2">清除</a>
                <a href="assessment.php"
                    class="btn btn-secondary border-0 rounded-3 float-end shadow-sm px-3 me-2">返回列表</a>
            </div>
        </div>
    </div>

    <script>
        const csrfToken = $('meta[name="csrf-token"]').attr('content');
    </script>

    <script>
        $("#progressbarTWInput").change(function() {
            $("#preview_progressbarTW_imgs").html(""); // 清除預覽
            readURL(this);
        });

        function readURL(input) {
            if (input.files && input.files.length >= 0) {
                for (var i = 0; i < input.files.length; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var img = $("<img width='100%' height=''>").attr('src', e.target.result);
                        $("#preview_progressbarTW_imgs").append(img);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            } else {
                var noPictures = $("<p>尚未選擇圖片</p>");
                $("#preview_progressbarTW_imgs").append(noPictures);
            }
        }
    </script>

    <!-- JavaScript part -->
    <script>
        $("#single_img_input").change(function() {
            readURL(this);
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#preview_single_img").attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


    <script src="js/plugins-min.js" type="text/javascript"></script>
@endsection
