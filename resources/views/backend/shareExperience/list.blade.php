@extends('backend.layout.layout')

@section('container')
    <!-- 麵包屑 Breadcrumb -->
    <nav class="" aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-start lh-lg m-0 ms-3">
            <li class="breadcrumb-item">首頁設定</li>
            <li class="breadcrumb-item col">診療心得分享</li>
        </ol>
    </nav>
    <div class="container-fluid p-3 m-1">
        <div class="card col-12 rounded-3 bg-white mb-4">
            <h2 class="fs-5 p-3 fw-bold border-bottom">
                診療心得分享列表
            </h2>

            <div class="card-body toScroll text-nowrap">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class=""></th>
                            <th>矯正標題</th>
                            <th>狀態</th>
                            <th>心得</th>
                            <th>療程時間</th>
                            <th>排序</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($shareExperiences as $key => $shareExperience)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $shareExperience->title }}</td>
                                <td>
                                    @if ($shareExperience->status)
                                        上架
                                    @else
                                        下架
                                    @endif
                                </td>
                                <td class="ellipsis">{{ $shareExperience->experience }}</td>
                                <td>{{ $shareExperience->treatment_duration }}</td>
                                <td>{{ $shareExperience->sort }}</td>
                                <td>
                                    <button type="button" class="btn btn-light rounded-3 shadow-sm"
                                        onclick="editBtn({{ $shareExperience->id }})">
                                        <i class="far fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @empty(!$shareExperiences)
                    {{ $shareExperiences->links('backend.pagination.pagination') }}
                @endempty
            </div>
        </div>

        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">編輯 診療心得分享</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">標題</label>
                            <input type="text" class="form-control" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="treatment_duration" class="form-label">診療時間</label>
                            <input type="text" class="form-control" id="treatment_duration">
                        </div>
                        <div class="mb-3">
                            <label for="answer" class="form-label">矯正心得</label>
                            <textarea class="form-control" id="experience" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="answer" class="form-label">版型</label>
                            @foreach (App\Models\ShareExperience::TYPES as $value => $label)
                                <input type="radio" name="type" value="{{ $value }}"
                                    id="type_{{ $value }}" class="form-check-input custom-radio-class">
                                <label for="type_{{ $value }}" class="form-check-label">
                                    {{ $label }}
                                </label>
                            @endforeach
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">上架設定</label>
                            <select class="select form-control" id="status">
                                <option value="">請選擇上下架</option>
                                <option value="1">上架</option>
                                <option value="0">下架</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sort" class="form-label">排序</label>
                            <input type="number" class="form-control" id="sort" min="0">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">上傳頭像(只接受jpg、png)</label>
                            <input type="file" id="avatar" class="form-control easein" accept="image/jpeg, image/png"
                                onchange="reviewAvatar(this)">
                            <img id="preview_avatar"class="mt-3" src="{{ asset('images/backend/defaultImage.png') }}" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" onclick="clearBtn()">清除</button>
                        <button type="button" class="btn btn-primary" id="saveBtn">保存</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let selectedFile = null;
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        function reviewAvatar(element) {
            if (element.files && element.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#preview_avatar").attr('src', e.target.result);
                }
                reader.readAsDataURL(element.files[0]);
                selectedFile = element.files[0];
            } else {
                selectedFile = null;
            }
        }

        function clearBtn() {
            $("#modal input:not([type='radio']), #modal select, #modal textarea").val('');
            $("#preview_avatar").attr("src", "{{ asset('images/backend/defaultImage.png') }}");
        }

        function handleData() {
            const formData = new FormData();
            formData.append("title", $("#title").val());
            formData.append("type", $("input[name='type']:checked").val());
            formData.append("treatment_duration", $("#treatment_duration").val());
            formData.append("experience", $("#experience").val());
            formData.append("status", $("#status").val());
            formData.append("sort", $("#sort").val() != "" ? $("#sort").val() : 1);
            if (selectedFile != null) {
                formData.append("avatar", selectedFile);
            }

            return formData;
        }

        function editBtn(id) {
            url = "{{ route('backend.shareExperience.show', ':id') }}";
            url = url.replace(':id', id);

            clearBtn();

            $.ajax({
                url: url,
                type: "GET",
                headers: {
                    "X-CSRF-TOKEN": csrfToken
                },
                success: function(response) {
                    if (response.code == '00') {
                        $("#modalLabel").text('編輯 診療心得分享');
                        $("#title").val(response.data.title);
                        $(`input[name='type'][value='${response.data.type}']`).prop("checked", true);
                        $("input[value='1']").attr('checked', true);
                        $("#treatment_duration").val(response.data.treatment_duration);
                        $("#experience").val(response.data.experience);
                        $("#status").val(response.data.status);
                        $("#sort").val(response.data.sort);
                        let basePath = "{{ asset('') }}";
                        let image = response.data.avatar;
                        $("#preview_avatar").attr("src", `${basePath}${image}`);
                        $("#saveBtn").attr("onclick", `updateBtn(${id})`);
                        $("#modal").modal("show");
                    };
                },
                error: function(xhr, status, error) {
                    let alert_text = "發生不可預期的錯誤";

                    if (xhr.status == '403') {
                        alert_text = "無此權限";
                    }

                    Swal.fire({
                        icon: "error",
                        title: alert_text,
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
            });
        }

        function updateBtn(id) {
            url = "{{ route('backend.shareExperience.update', ':id') }}";
            url = url.replace(':id', id);

            data = handleData();
            data.append('_method', 'PATCH');

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
