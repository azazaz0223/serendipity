@extends('backend.layout.layout')

@section('container')
    <!-- 麵包屑 Breadcrumb -->
    <nav class="" aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-start lh-lg m-0 ms-3">
            <li class="breadcrumb-item">首頁設定</li>
            <li class="breadcrumb-item col">影片設定</li>
        </ol>
    </nav>

    <div class="container-fluid p-3 m-1">
        <div class="card col-12 rounded-3 bg-white mb-4">
            <h2 class="fs-5 p-3 fw-bold border-bottom">現有影片</h2>
            <div class="card-body border-bottom d-flex justify-content-between gap-3">
                <div class="col-12 card-body fs-6 gray_l rounded-3">
                    @forelse ($videos as $video)
                        <div class="col-md-12 mb-3">
                            <video controls width="100%">
                                <source src="{{ $video }}" type="video/mp4">
                                您的瀏覽器不支援影片播放。
                            </video>
                        </div>
                    @empty
                        <p class="text-center">目前沒有影片。</p>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="card col-12 rounded-3 bg-white mb-4">
            <div class="card-body border-bottom d-flex justify-content-between gap-3">
                <div class="col-4 card-body fs-6 gray_l rounded-3">
                    <label class="mb-2">更換影片 (格式: MP4, MOV)</label>
                    <div class="c-mainCard__item">
                        <div class="l-upload l-upload--notSpace">
                            <div class="card-body fs-6 gray_l rounded-3">
                                <input type="file" id="video" accept=".mp4,.mov" onchange="reviewVideo(this)"
                                    class="form-control search_input product-hover easein">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-8 card-body fs-6 gray_l rounded-3">
                    <label class="mb-2">影片預覽</label>
                    <div class="p-0" id="videoPreview"></div>
                </div>
            </div>

            <div class="card-body">
                <button type="button" class="btn btn-primary border-0 rounded-3 float-end shadow-sm px-3"
                    onclick="saveBtn()">保存</button>
            </div>
        </div>
    </div>

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
