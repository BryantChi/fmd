<div class="table-responsive p-3">
    <table class="table" id="caseInfos-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>封面圖</th>
                <th>名稱</th>
                <th>類別</th>
                <th>案例標題</th>
                {{-- <th>案例內容</th> --}}
                <th>瀏覽次數</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($caseInfos as $caseInfo)
                <tr>
                    <td>{{ $caseInfo->id }}</td>
                    <td width="120"><img src="{{ env('APP_URL'). '/uploads/' .$caseInfo->case_front_image }}" class="img-fluid img-thumbnail" width="120" alt=""></td>
                    <td width="120">{{ $caseInfo->name }}</td>
                    <td width="120">{{ $caseInfo->category }}</td>
                    <td style="min-width: 300px;">{{ $caseInfo->case_title }}</td>
                    {{-- <td style="min-width: 300px;" class="multiline-ellipsis">{!! $caseInfo->case_content !!}</td> --}}
                    <td width="120">{{ $caseInfo->case_pv }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.caseInfos.destroy', $caseInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.caseInfos.show', [$caseInfo->id]) }}" class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.caseInfos.edit', [$caseInfo->id]) }}"
                                class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'button',
                                'class' => 'btn btn-danger btn-sm',
                                'onclick' => "return check(this);",
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- @push('page_css')
    <style>
        #caseInfos-table td {
            white-space:nowrap;
        }
    </style>
@endpush --}}
