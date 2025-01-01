@extends('backend.layout.layout')

@section('container')
    <!-- 麵包屑 Breadcrumb -->
    <nav class="" aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-start lh-lg m-0 ms-3">
            <li class="breadcrumb-item">首頁設定</li>
            <li class="breadcrumb-item col">Q&A</li>
        </ol>
    </nav>
    <div class="container-fluid p-3 m-1">
        <div class="card col-12 rounded-3 bg-white mb-4">
            <h2 class="fs-5 p-3 fw-bold border-bottom">Q&A列表</h2>

            <div class="card-body toScroll text-nowrap">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class=""></th>
                            <th>問題</th>
                            <th>狀態</th>
                            <th>回覆</th>
                            <th>排序</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($questions as $question)
                            <tr>
                                <td>{{ $question->id }}</td>
                                <td>{{ $question->title }}</td>
                                <td>
                                    @if ($question->status)
                                        上架
                                    @else
                                        下架
                                    @endif
                                </td>
                                <td class="ellipsis">{{ $question->answer }}</td>
                                <td>{{ $question->sort }}</td>
                                <td>
                                    <button type="button" class="btn btn-light rounded-3 shadow-sm"
                                        onclick="editBtn({{ $question->id }})">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    <button type="button" onclick="deleteConfirmBtn({{ $question->id }})"
                                        class="btn btn-light rounded-3 shadow-sm">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @empty(!$questions)
                    {{ $questions->links('backend.pagination.pagination') }}
                @endempty
            </div>
        </div>

        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">編輯 Q&A</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">問題標題</label>
                            <input type="text" class="form-control" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="answer" class="form-label">問題回覆</label>
                            <textarea class="form-control" id="answer" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">上架設定</label>
                            <select class="form-select" id="status">
                                <option value="1" selected>上架</option>
                                <option value="0">下架</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sort" class="form-label">排序</label>
                            <input type="number" class="form-control" id="sort" min="0">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                        <button type="button" class="btn btn-primary" id="updateBtn">保存修改</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        function editBtn(id) {
            url = "{{ route('backend.question.show', ':id') }}";
            url = url.replace(':id', id);

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
                        $("#title").val(response.data.title);
                        $("#answer").val(response.data.answer);
                        $("#status").val(response.data.status);
                        $("#sort").val(response.data.sort);
                        $("#updateBtn").attr("onclick", `updateBtn(${id})`);
                        $("#editModal").modal("show");
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
            url = "{{ route('backend.question.update', ':id') }}";
            url = url.replace(':id', id);

            data = {};
            if ($("#title").val() != "") {
                data.title = $("#title").val();
            } else {
                Swal.fire({
                    icon: "error",
                    title: "請輸入問題標題",
                    showConfirmButton: false,
                    timer: 3000
                });
                return
            }

            if ($("#answer").val() != "") {
                data.answer = $("#answer").val();
            } else {
                Swal.fire({
                    icon: "error",
                    title: "請輸入問題回覆",
                    showConfirmButton: false,
                    timer: 3000
                });
                return
            }

            data.status = $("#status").val();

            if ($("#sort").val() != "") {
                data.sort = $("#sort").val();
            } else {
                Swal.fire({
                    icon: "error",
                    title: "請輸入問題排序",
                    showConfirmButton: false,
                    timer: 3000
                });
                return
            }

            $.ajax({
                url: url,
                type: "PATCH",
                headers: {
                    "X-CSRF-TOKEN": csrfToken
                },
                data: data,
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
                    url = "{{ route('backend.question.delete', ':id') }}";
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
