<div class="table-responsive">
    <table class="table" id="marqueeInfos-table">
        <thead>
            <tr>
                <th>跑馬燈文字</th>
                <th>狀態</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($marqueeInfos as $marqueeInfo)
                <tr>
                    <td style="min-width: 300px;">{{ $marqueeInfo->marquee_text }}</td>
                    <td width="120">{{ $marqueeInfo->used == 1 ? '啟用' : '停用' }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.marqueeInfos.destroy', $marqueeInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.marqueeInfos.show', [$marqueeInfo->id]) }}"
                                class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.marqueeInfos.edit', [$marqueeInfo->id]) }}"
                                class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'button',
                                'class' => 'btn btn-danger btn-sm',
                                'onclick' => "return check(this)",
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
