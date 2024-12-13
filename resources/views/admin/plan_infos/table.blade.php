<div class="table-responsive">
    <table class="table" id="planInfos-table">
        <thead>
            <tr>
                <th>方案名稱</th>
                <th>方案面積</th>
                <th>方案 Style 1</th>
                <th>方案 Style 2</th>
                <th>方案 Style 3</th>
                <th>方案 Style 4</th>
                <th>方案價格</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($planInfos as $planInfo)
                <tr>
                    <td>{{ $planInfo->plan_name }}</td>
                    <td>{{ $planInfo->plan_sqm }}</td>
                    <td><img src="{{ env('APP_URL'). '/uploads/' .$planInfo->plan_style_1 }}" class="img-fluid img-thumbnail" width="120" alt=""></td>
                    <td><img src="{{ env('APP_URL'). '/uploads/' .$planInfo->plan_style_2 }}" class="img-fluid img-thumbnail" width="120" alt=""></td>
                    <td><img src="{{ env('APP_URL'). '/uploads/' .$planInfo->plan_style_3 }}" class="img-fluid img-thumbnail" width="120" alt=""></td>
                    <td><img src="{{ env('APP_URL'). '/uploads/' .$planInfo->plan_style_4 }}" class="img-fluid img-thumbnail" width="120" alt=""></td>
                    <td>${{ $planInfo->plan_price }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.planInfos.destroy', $planInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.planInfos.show', [$planInfo->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.planInfos.edit', [$planInfo->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {{-- {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'button',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return check(this);",
                            ]) !!} --}}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
