@extends('backend.layout.layout')

@section('container')
    <nav class="" aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-start lh-lg m-0 ms-3">
            <li class="breadcrumb-item">案例分享</li>
            <li class="breadcrumb-item col">編輯案例</li>
        </ol>
    </nav>

    <div class="container-fluid p-3 m-1">
        <div class="card col-12 rounded-3 bg-white mb-4">
            <h2 class="fs-5 p-3 fw-bold border-bottom">案例分享</h2>
            <div class="card-body border-bottom">
                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="w-auto col-1">
                        <div class="dive_sub">發布者</div>
                    </div>
                    <div class="col">
                        <input type="text" id="publisher" class="form-control" value="{{ $caseShare->publisher }}">
                    </div>
                    <div class="w-auto col-1">
                        <div class="dive_sub">排序</div>
                    </div>
                    <div class="col-1">
                        <input type="number" id="sort" class="form-control" value="{{ $caseShare->sort }}">
                    </div>
                    <div class="w-auto col-1">
                        <div class="dive_sub">上架設定</div>
                    </div>
                    <div class="col-2">
                        <div class="radio_style wd100">
                            <input type="radio" id="up" name="status" value="1" @checked($caseShare->status == 1)>
                            <label class="wd47" for="up">上架</label>
                            <input type="radio" id="down" name="status" value="0" @checked($caseShare->status == 0)>
                            <label class="wd47" for="down">下架</label>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="w-auto col-1">
                        <div class="dive_sub">標題</div>
                    </div>
                    <div class="col">
                        <input type="text" id="title" class="form-control" value="{{ $caseShare->title }}">
                    </div>
                </div>
                <div class="d-flex justify-content-start gap-3 mb-3">
                    <div class="w-auto col-1">
                        <div class="dive_sub">摘要</div>
                    </div>
                    <div class="col">
                        <textarea id="summary" class="form-control search_input easein mb-0" rows="2">{{ $caseShare->summary }}</textarea>
                    </div>
                </div>
            </div>

            <div class="card-body border-bottom">
                <textarea id="caseShare_content" class="form-control search_input easein mb-0">{{ $caseShare->content }}</textarea>
            </div>

            <div class="d-flex justify-content-start gap-3 mb-3">
                <div class="col-3 card-body fs-6 gray_l rounded-3">
                    <label class="mb-2">上傳封面照</label>
                    <input type="file" id="image" class="form-control search_input product-hover border- easein"
                        accept="image/gif, image/jpeg, image/png" onchange="reviewImage(this)">
                    <img id="preview_image" class="mt-3" src="{{ asset($caseShare->image) }}">
                </div>
            </div>

            <div class="card-body">
                <button type="button" class="btn btn-danger border-0 rounded-3 float-end shadow-sm px-3"
                    onclick="updateBtn(2)">暫存</button>
                <button type="button" class="btn btn-primary border-0 rounded-3 float-end shadow-sm px-3 me-2"
                    onclick="updateBtn()">修改</button>
                <a class="btn btn-secondary border-0 rounded-3 float-end shadow-sm px-3 me-2"
                    href="{{ route('backend.caseShare.index') }}">返回列表</a>
            </div>
        </div>
    </div>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script>
        let selectedFile = null;
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        CKEDITOR.replace('caseShare_content', {
            extraPlugins: 'uploadimage,clipboard',
            language: 'zh',
            filebrowserImageBrowseUrl: '{{ url('laravel-filemanager?type=Images') }}',
            filebrowserImageUploadUrl: '{{ url('laravel-filemanager/upload?type=Images&_token=' . csrf_token()) }}',
        });

        function reviewImage(element) {
            if (element.files && element.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#preview_image").attr('src', e.target.result);
                }
                reader.readAsDataURL(element.files[0]);
                selectedFile = element.files[0];
            } else {
                selectedFile = null;
            }
        }

        function updateBtn(status) {
            url = "{{ route('backend.caseShare.update', ':id') }}";
            url = url.replace(':id', '{{ $caseShare->id }}');

            const formData = new FormData();

            if ($("#publisher").val() != "") {
                formData.append("publisher", $("#publisher").val());
            } else {
                Swal.fire({
                    icon: "error",
                    title: "請輸入發布者",
                    timer: 3000
                });

                return;
            }

            formData.append("sort", $("#sort").val() != "" ? $("#sort").val() : 1);

            if (status != undefined) {
                formData.append("status", status);
            } else {
                const selectedStatus = $("input[name='status']:checked").val();
                if (selectedStatus != "") {
                    formData.append("status", selectedStatus);
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "請選擇上架",
                        timer: 3000
                    });
                    return;
                }
            }

            if ($("#title").val() != "") {
                formData.append("title", $("#title").val());
            } else {
                Swal.fire({
                    icon: "error",
                    title: "請輸入標題",
                    timer: 3000
                });
                return;
            }

            if ($("#summary").val() != "") {
                formData.append("summary", $("#summary").val());
            } else {
                Swal.fire({
                    icon: "error",
                    title: "請輸入摘要",
                    timer: 3000
                });
                return;
            }

            const content = CKEDITOR.instances['caseShare_content'].getData();
            formData.append("content", content);

            if (selectedFile != null) {
                formData.append("image", selectedFile);
            }

            formData.append('_method', 'PATCH');

            $.ajax({
                url: url,
                type: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken
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
                            location.href = "{{ route('backend.caseShare.index') }}";
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
