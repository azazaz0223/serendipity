@extends('backend.layout.layout')

@section('container')
    <!-- 麵包屑 Breadcrumb -->
    <nav class="" aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-start lh-lg m-0 ms-3">
            <li class="breadcrumb-item">評估單管理</li>
        </ol>
    </nav>

    <div class="container-fluid p-3 m-1">
        <div class="card col-12 rounded-3 bg-white mb-4">
            <h2 class="fs-5 p-3 fw-bold border-bottom">
                評估單管理
                <button type="button" class="w-auto btn btn-danger btn-sm rounded-pill float-end shadow-sm lh-sm"
                    onclick="location.href='{{ route('backend.evaluationForm.create') }}'">
                    <i class="fas fa-plus"></i>
                </button>
            </h2>

            <div class="card-body border-bottom">
                <form method="GET">
                    <div class="d-flex justify-content-start gap-3 mb-3">
                        <div class="w-auto col-1">
                            <div class="dive_sub">查詢期間</div>
                        </div>
                        <div class="col">
                            <input type="date" name="started_at" class="form-control datepicker"
                                value="{{ request('started_at') }}">
                        </div>
                        <div class="col">
                            <input type="date" name="ended_at" class="form-control datepicker"
                                value="{{ request('ended_at') }}">
                        </div>
                        <div class="w-auto">
                            <div class="dive_sub">狀態</div>
                        </div>
                        <div class="col-2">
                            <select name="status" class="select form-control">
                                <option value="">全部</option>
                                @foreach (App\Models\EvaluationForm::STATUS as $key => $value)
                                    <option value="{{ $value }}" @selected(request('status') == "$value")>{{ $key }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start gap-3 mb-3">
                        <div class="w-auto col-1">
                            <div class="dive_sub">客戶姓名</div>
                        </div>
                        <div class="col-2">
                            <input type="text" name="name" class="form-control" value="{{ request('name') }}">
                        </div>
                        <div class="w-auto col-1">
                            <div class="dive_sub">Email</div>
                        </div>
                        <div class="col">
                            <input type="text" name="email" class="form-control" value="{{ request('email') }}">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start gap-3 mb-3">
                        <div class="w-auto col-1">
                            <div class="dive_sub">手機號碼</div>
                        </div>
                        <div class="col-2">
                            <input type="text" name="phone" class="form-control" maxlength="10"
                                value="{{ request('phone') }}">
                        </div>
                        <div class="w-auto">
                            <div class="dive_sub">照片</div>
                        </div>
                        <div class="col">
                            <select name="is_upload" class="select form-control">
                                <option value="">全部</option>
                                <option value="0" @selected(request('is_upload') == '0')>未上傳</option>
                                <option value="1 "@selected(request('is_upload') == '1')>已上傳</option>
                            </select>
                        </div>
                        <div class="w-auto col-1">
                            <div class="dive_sub">齒列問題</div>
                        </div>
                        <div class="col">
                            <select name="question" class="select form-control">
                                <option value="">全部</option>
                                <option value="戽斗(反咬)" @selected(request('question') == '戽斗(反咬)')>戽斗(反咬)</option>
                                <option value="開咬" @selected(request('question') == '開咬')>開咬</option>
                                <option value="齒列擁擠" @selected(request('question') == '齒列擁擠')>齒列擁擠</option>
                                <option value="錯咬" @selected(request('question') == '錯咬')>錯咬</option>
                                <option value="暴牙" @selected(request('question') == '暴牙')>暴牙</option>
                                <option value="深咬" @selected(request('question') == '深咬')>深咬</option>
                                <option value="牙縫過大" @selected(request('question') == '牙縫過大')>牙縫過大</option>
                                <option value="二次矯正" @selected(request('question') == '二次矯正')>二次矯正</option>
                                <option value="我不確定" @selected(request('question') == '我不確定')>我不確定</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary border-0 rounded-3 float-end shadow-sm px-3 me-2">
                        查詢
                    </button>
                </form>
            </div>

            <div class="card-body toScroll text-nowrap">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class=""></th>
                            <th>留言日期</th>
                            <th>姓名</th>
                            <th>Email</th>
                            <th>手機</th>
                            <th>齒列問題</th>
                            <th>照片</th>
                            <th>狀態</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($evaluationForms as $key => $evaluationForm)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $evaluationForm->created_at }}</td>
                                <td>{{ $evaluationForm->name }}</td>
                                <td>{{ $evaluationForm->email }}</td>
                                <td>{{ $evaluationForm->phone }}</td>
                                <td>{{ $evaluationForm->question }}</td>
                                @if (
                                    $evaluationForm->intraoral_image_1 ||
                                        $evaluationForm->intraoral_image_2 ||
                                        $evaluationForm->intraoral_image_3 ||
                                        $evaluationForm->intraoral_image_4)
                                    <td class="text-primary">已上傳</td>
                                @else
                                    <td class="text-danger">未上傳</td>
                                @endif
                                @switch($evaluationForm->status)
                                    @case(0)
                                        <td>
                                            <span class="badge rounded-pill bg-secondary text-dark bg-opacity-25 fs-6 fw-normal">
                                                申請中
                                            </span>
                                        </td>
                                    @break

                                    @case(1)
                                        <td>
                                            <span class="badge rounded-pill bg-warning text-dark bg-opacity-25 fs-6 fw-normal">
                                                未回覆
                                            </span>
                                        </td>
                                    @break

                                    @case(2)
                                        <td>
                                            <span class="badge rounded-pill bg-primary text-dark bg-opacity-25 fs-6 fw-normal">
                                                已連繫
                                            </span>
                                        </td>
                                    @break

                                    @case(3)
                                        <td>
                                            <span class="badge rounded-pill bg-success text-dark bg-opacity-25 fs-6 fw-normal">
                                                已預約
                                            </span>
                                        </td>
                                    @break
                                @endswitch
                                <td>
                                    <button type="button" class="btn btn-light rounded-3 shadow-sm"
                                        onclick="editBtn({{ $evaluationForm->id }})">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    <button type="button" onclick="deleteConfirmBtn({{ $evaluationForm->id }})"
                                        class="btn btn-light rounded-3 shadow-sm">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @empty(!$evaluationForms)
                    {{ $evaluationForms->links('backend.pagination.pagination') }}
                @endempty
            </div>
        </div>
    </div>

    <script>
        const csrfToken = $('meta[name="csrf-token"]').attr('content');

        function editBtn(id) {
            url = "{{ route('backend.evaluationForm.show', ':id') }}";
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
                    url = "{{ route('backend.evaluationForm.delete', ':id') }}";
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
