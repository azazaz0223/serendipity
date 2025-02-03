@extends('backend.layout.layout')

@section('container')
    <!-- 麵包屑 Breadcrumb -->
    <nav class="" aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-start lh-lg m-0 ms-3">
            <li class="breadcrumb-item">診所地圖</li>
        </ol>
    </nav>
    <div class="container-fluid p-3 m-1">
        <div class="card col-12 rounded-3 bg-white mb-4">
            <h2 class="fs-5 p-3 fw-bold border-bottom">
                診所地圖列表
                <button type="button" class="w-auto btn btn-danger btn-sm rounded-pill float-end shadow-sm lh-sm"
                    onclick="createBtn()">
                    <i class="fas fa-plus"></i>
                </button>
            </h2>

            <div class="card-body toScroll text-nowrap">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class=""></th>
                            <th>診所名稱</th>
                            <th>狀態</th>
                            <th>地址</th>
                            <th>電話</th>
                            <th>排序</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($clinics as $clinic)
                            <tr>
                                <td>{{ $clinic->id }}</td>
                                <td>{{ $clinic->name }}</td>
                                <td>
                                    @if ($clinic->status)
                                        上架
                                    @else
                                        下架
                                    @endif
                                </td>
                                <td>{{ $clinic->county . $clinic->district . $clinic->address }}</td>
                                <td>{{ $clinic->phone }}</td>
                                <td>{{ $clinic->sort }}</td>
                                <td>
                                    <button type="button" class="btn btn-light rounded-3 shadow-sm"
                                        onclick="editBtn({{ $clinic->id }})">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    <button type="button" onclick="deleteConfirmBtn({{ $clinic->id }})"
                                        class="btn btn-light rounded-3 shadow-sm">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @empty(!$clinics)
                    {{ $clinics->links('backend.pagination.pagination') }}
                @endempty
            </div>
        </div>

        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">編輯 診所地圖</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">診所名稱</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="county" class="form-label">縣市</label>
                            <select id="county" class="select form-control"></select>
                        </div>
                        <div class="mb-3">
                            <label for="district" class="form-label">行政區</label>
                            <select id="district" class="select form-control"></select>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">地址</label>
                            <input type="text" class="form-control" id="address">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">電話</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">連結</label>
                            <input type="text" class="form-control" id="url">
                        </div>
                        <div class="mb-3">
                            <label for="line_id" class="form-label">LINE@</label>
                            <input type="text" class="form-control" id="line_id">
                        </div>
                        <div class="mb-3">
                            <label for="facebook" class="form-label">FB</label>
                            <input type="text" class="form-control" id="facebook">
                        </div>
                        <div class="mb-3">
                            <label for="google_map" class="form-label">GOOGLE MAP</label>
                            <input type="text" class="form-control" id="google_map">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">營業時間</label>
                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <input type="text" name="business_hours[0][day]" class="form-control"
                                        placeholder="周幾">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="business_hours[0][time]" class="form-control"
                                        placeholder="時間">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <input type="text" name="business_hours[1][day]" class="form-control"
                                        placeholder="周幾">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="business_hours[1][time]" class="form-control"
                                        placeholder="時間">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <input type="text" name="business_hours[2][day]" class="form-control"
                                        placeholder="周幾">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="business_hours[2][time]" class="form-control"
                                        placeholder="時間">
                                </div>
                            </div>
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
                            <label class="form-label">上傳圖片(只接受jpg、png)</label>
                            <input type="file" id="image" class="form-control easein"
                                accept="image/jpeg, image/png" onchange="reviewImage(this)">
                            <img id="preview_image" class="mt-3" src="{{ asset('images/backend/defaultImage.png') }}">
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

    <script src="https://cdn.jsdelivr.net/npm/tw-city-selector@2.0.0/dist/tw-city-selector.min.js"></script>

    <script>
        const citySelector = new TwCitySelector({
            el: '#modal',
            elCounty: '#county',
            elDistrict: '#district'
        });

        let selectedFile = null;
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

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

        function clearBtn() {
            $("#modal input, #modal select").val('');
            $("#preview_image").attr("src", "{{ asset('images/backend/defaultImage.png') }}");
        }

        function handleData() {
            const formData = new FormData();

            formData.append("name", $("#name").val());
            formData.append("county", $("#county").val());
            formData.append("district", $("#district").val());
            formData.append("address", $("#address").val());
            formData.append("phone", $("#phone").val());
            formData.append("url", $("#url").val());
            formData.append("line_id", $("#line_id").val());
            formData.append("facebook", $("#facebook").val());
            formData.append("google_map", $("#google_map").val());
            formData.append("status", $("#status").val());
            formData.append("sort", $("#sort").val() !== "" ? $("#sort").val() : 1);

            // 處理圖片檔案
            if (selectedFile != null) {
                formData.append("image", selectedFile);
            }

            $('[name^="business_hours"]').each(function() {
                let name = $(this).attr('name');
                let match = name.match(/business_hours\[(\d+)\]\[(\w+)\]/);

                if (match) {
                    let index = match[1];
                    let key = match[2];
                    const value = $(this).val();

                    // 過濾空值
                    if (key === 'day' && value.trim() === '') {
                        return;
                    }
                    if (key === 'time' && value.trim() === '') {
                        return;
                    }

                    // 加入非空的項目
                    formData.append(`business_hours[${index}][${key}]`, value);
                }
            });

            return formData;
        }

        function createBtn() {
            clearBtn();
            $("#modalLabel").text('新增 診所地圖');
            $("#saveBtn").attr("onclick", `storeBtn()`);
            $("#modal").modal("show");
        }

        function storeBtn() {
            data = handleData();

            $.ajax({
                url: "{{ route('backend.clinic.store') }}",
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

        function editBtn(id) {
            url = "{{ route('backend.clinic.show', ':id') }}";
            url = url.replace(':id', id);

            clearBtn();

            $.ajax({
                url: url,
                type: "GET",
                headers: {
                    "X-CSRF-TOKEN": csrfToken
                },
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.code == '00') {
                        $("#modalLabel").text('編輯 診所地圖');
                        $("#name").val(response.data.name);
                        $("#county").val(response.data.county).change();;
                        $("#district").val(response.data.district).change();
                        $("#address").val(response.data.address);
                        $("#phone").val(response.data.phone);
                        $("#url").val(response.data.url);
                        let basePath = "{{ asset('') }}";
                        let image = response.data.image;
                        $("#preview_image").attr("src", `${basePath}${image}`);
                        $("#line_id").val(response.data.line_id);
                        $("#facebook").val(response.data.facebook);
                        $("#google_map").val(response.data.google_map);
                        $("#status").val(response.data.status);
                        $("#sort").val(response.data.sort);
                        response.data.business_hours.forEach(function(hour, index) {
                            $(`input[name='business_hours[${index}][day]']`).val(hour.day);
                            $(`input[name='business_hours[${index}][time]']`).val(hour.time);
                        });
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
            url = "{{ route('backend.clinic.update', ':id') }}";
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
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
            });
        }

        function deleteConfirmBtn(id) {
            Swal.fire({
                title: '確認要刪除嗎？',
                text: '刪除後無法撤銷！',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '是的，刪除！',
                cancelButtonText: '取消',
            }).then((result) => {
                if (result.isConfirmed) {
                    const csrfToken = $('meta[name="csrf-token"]').attr('content');
                    url = "{{ route('backend.clinic.delete', ':id') }}";
                    url = url.replace(':id', id);
                    $.ajax({
                        url: url,
                        type: "DELETE",
                        headers: {
                            "X-CSRF-TOKEN": csrfToken
                        },
                        success: function(response) {
                            if (response.code == '00') {
                                Swal.fire({
                                    title: '刪除成功！',
                                    icon: 'success',
                                    timer: 3000
                                }).then((result) => {
                                    location.reload();
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            alert_text = JSON.parse(xhr.responseText).message;

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
            });
        }
    </script>
@endsection
