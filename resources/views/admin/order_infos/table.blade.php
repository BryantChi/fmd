<div class="table-responsive p-3">
    <table class="table" id="orderInfos-table">
        <thead>
            <tr>
                <th>訂單編號</th>
                <th>訂購人姓名</th>
                <th>聯絡電話</th>
                <th>Email</th>
                <th>縣市</th>
                <th>鄉鎮市區</th>
                <th>郵遞區號</th>
                <th>地址</th>
                <th>付款方式</th>
                <th>支付狀態</th>
                <th>支付詳情</th>
                <th>金額</th>
                <th>訂單內容</th>
                <th>訂單狀態</th>
                <th>訂單備註</th>
                <th>第三方支付回傳編號</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderInfos as $orderInfo)
                <tr>
                    <td>{{ $orderInfo->order_number }}</td>
                    <td>{{ $orderInfo->name }}</td>
                    <td>{{ $orderInfo->phone }}</td>
                    <td>{{ $orderInfo->email }}</td>
                    <td>{{ $orderInfo->city }}</td>
                    <td>{{ $orderInfo->district }}</td>
                    <td>{{ $orderInfo->zipcode }}</td>
                    <td>{{ $orderInfo->address }}</td>
                    <td>{{ $orderInfo->payment_method }}</td>
                    <td>{{ $orderInfo->payment_status }}</td>
                    <td>{{ $orderInfo->payment_details }}</td>
                    <td>{{ $orderInfo->amount }}</td>
                    <td>{{ $orderInfo->order_details }}</td>
                    <td>{{ $orderInfo->order_status }}</td>
                    <td>{{ $orderInfo->order_note }}</td>
                    <td>{{ $orderInfo->third_party_ref }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.orderInfos.destroy', $orderInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.orderInfos.show', [$orderInfo->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            {{-- <a href="{{ route('admin.orderInfos.edit', [$orderInfo->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a> --}}
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
