<div class="table-responsive">
    <table class="table" id="caseCategoryInfos-table">
        <thead>
            <tr>
                <th>類別名稱</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($caseCategoryInfos as $caseCategoryInfo)
                <tr>
                    <td>{{ $caseCategoryInfo->name }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.caseCategoryInfos.destroy', $caseCategoryInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.caseCategoryInfos.show', [$caseCategoryInfo->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.caseCategoryInfos.edit', [$caseCategoryInfo->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'button',
                                'class' => 'btn btn-danger btn-xs',
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
