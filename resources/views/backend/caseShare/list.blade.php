@extends('backend.layout.layout')

@section('container')
    <!-- 麵包屑 Breadcrumb -->
    <nav class="" aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-案例分享-start lh-lg m-0 ms-3">
            <li class="breadcrumb-item">評估單管理</li>
        </ol>
    </nav>

    <div class="container-fluid p-3 m-1">
        <div class="card col-12 rounded-3 bg-white mb-4">
            <h2 class="fs-5 p-3 fw-bold border-bottom">
                案例分享
                <button type="button" class="w-auto btn btn-danger btn-sm rounded-pill float-end shadow-sm lh-sm"
                    onclick="location.href='{{ route('backend.caseShare.create') }}'">
                    <i class="fas fa-plus"></i>
                </button>
            </h2>

            <div class="card-body border-bottom">
                <form method="GET" id="queryForm">
                    <div class="d-flex justify-content-start gap-3 mb-3">
                        <div class="d-flex justify-content-start gap-3 mb-3">
                            <div class="w-auto col-1">
                                <div class="dive_sub">發布日期</div>
                            </div>
                            <div class="col">
                                <input type="date" name="started_at" id="started_at" class="form-control datepicker"
                                    value="{{ request('started_at') }}">
                            </div>
                            <div class="col">
                                <input type="date" name="ended_at" id="ended_at" class="form-control datepicker"
                                    value="{{ request('ended_at') }}">
                            </div>
                            <div class="w-auto col-1">
                                <div class="dive_sub">發布者</div>
                            </div>
                            <div class="col">
                                <input type="text" name="publisher" class="form-control"
                                    value="{{ request('publisher') }}">
                            </div>
                            <button type="submit"
                                class="btn btn-secondary border-0 rounded-3 float-end shadow-sm px-3 me-2">
                                查詢
                            </button>
                        </div>
                </form>
            </div>

            <div class="card-body toScroll text-nowrap">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class=""></th>
                            <th>標題</th>
                            <th>狀態</th>
                            <th>排序</th>
                            <th>發布者</th>
                            <th>發布時間</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($caseShares as $key => $caseShare)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $caseShare->title }}</td>
                                <td>
                                    @if ($caseShare->status == 1)
                                        上架
                                    @elseif ($caseShare->status == 2)
                                        暫存
                                    @else
                                        下架
                                    @endif
                                </td>
                                <td>{{ $caseShare->sort }}</td>
                                <td>{{ $caseShare->publisher }}</td>
                                <td>{{ $caseShare->created_at }}</td>
                                <td>
                                    <button type="button" class="btn btn-light rounded-3 shadow-sm"
                                        onclick="editBtn({{ $caseShare->id }})">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    <button type="button" onclick="deleteConfirmBtn({{ $caseShare->id }})"
                                        class="btn btn-light rounded-3 shadow-sm">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @empty(!$caseShares)
                    {{ $caseShares->links('backend.pagination.pagination') }}
                @endempty
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#queryForm').on('submit', function(e) {
                const startedAt = $('#started_at').val();
                const endedAt = $('#ended_at').val();

                // 檢查日期是否有效且開始日期不大於結束日期
                if (startedAt && endedAt && new Date(startedAt) > new Date(endedAt)) {
                    e.preventDefault(); // 阻止表單提交
                    Swal.fire({
                        title: '開始日期不能晚於結束日期！',
                        icon: 'warning',
                        timer: 3000
                    })
                }
            });
        });

        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        function editBtn(id) {
            url = "{{ route('backend.caseShare.show', ':id') }}";
            url = url.replace(':id', id);

            location.href = url;
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
                    url = "{{ route('backend.caseShare.delete', ':id') }}";
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
