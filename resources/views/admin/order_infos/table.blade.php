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
                {{-- <th>支付詳情</th> --}}
                <th>總金額</th>
                <th>訂單內容</th>
                <th>訂單狀態</th>
                <th>訂單備註</th>
                {{-- <th>第三方支付回傳編號</th> --}}
                <th>操作</th>
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
                    <td class="text">{{ App\Models\Admin\OrderInfo::PAYMENT_METHOD[$orderInfo->payment_method] }}</td>
                    <td style="min-width: 120px;">
                        {{-- {{ App\Models\Admin\OrderInfo::PAYMENT_STATUS[$orderInfo->payment_status] }} --}}
                        <select id="payment-status" data-id="{{ $orderInfo->id }}" data-field="payment_status">
                            <option value="pending"
                                {{ $orderInfo->payment_status == 'pending' ? ' selected="selected"' : '' }}>待付款
                            </option>
                            <option value="paid"
                                {{ $orderInfo->payment_status == 'paid' ? ' selected="selected"' : '' }}>已付款</option>
                            <option value="failed"
                                {{ $orderInfo->payment_status == 'failed' ? ' selected="selected"' : '' }}>付款失敗
                            </option>
                        </select>
                        <p class="text-success d-none data-saved">已儲存</p>
                        <p class="text-danger d-none data-failed">儲存失敗</p>
                    </td>
                    {{-- <td>{{ $orderInfo->payment_details }}</td> --}}
                    <td>${{ $orderInfo->amount }}</td>
                    <td style="min-width: 120px;">
                        @php
                            $order_details = json_decode($orderInfo->order_details);
                        @endphp
                        @foreach ($order_details as $key => $detail)
                            @if ($detail->style != null)
                                <p class="mb-2"><b>
                                        @switch($key)
                                            @case('plan_a')
                                                方案A：
                                            @break

                                            @case('plan_b')
                                                方案B:
                                            @break

                                            @case('plan_c')
                                                方案C:
                                            @break

                                            @default
                                            @break
                                        @endswitch
                                    </b></p>
                                <ul class="list-unstyled ml-3">
                                    <li>風格: {{ $detail->style }}</li>
                                    <li>空間: {{ $detail->space }}</li>
                                    <li>價格: ${{ $detail->price }}</li>
                                </ul>
                            @endif
                        @endforeach
                    </td>
                    <td style="min-width: 120px;">
                        {{-- {{ App\Models\Admin\OrderInfo::ORDER_STATUS[$orderInfo->order_status] }} --}}
                        <select id="order-status" data-id="{{ $orderInfo->id }} "data-field="order_status">
                            <option value="pending"
                                {{ $orderInfo->order_status == 'pending' ? ' selected="selected"' : '' }}>待處理
                            </option>
                            <option value="completed"
                                {{ $orderInfo->order_status == 'completed' ? ' selected="selected"' : '' }}>已處理
                            </option>
                            <option value="canceled"
                                {{ $orderInfo->order_status == 'canceled' ? ' selected="selected"' : '' }}>已取消
                            </option>
                        </select>
                        <p class="text-success d-none data-saved">已儲存</p>
                        <p class="text-danger d-none data-failed">儲存失敗</p>
                    </td>
                    <td>{{ $orderInfo->order_note }}</td>
                    {{-- <td>{{ $orderInfo->third_party_ref }}</td> --}}
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
                                'onclick' => 'return check(this);',
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@push('page_scripts')
    <script>
        function toggleIndicator(indicator, duration = 2000) {
            indicator.toggleClass('d-none');
            setTimeout(() => {
                indicator.toggleClass('d-none');
            }, duration);
        }
        function update(selector,id, field, value) {

            const updates = {};

            updates[field] = value;

            $.ajax({
                url: '{{ route("update-order", ":id") }}'.replace(':id', id),
                type: "PUT",
                data: {
                    _token: '{{ csrf_token() }}',
                    updates: updates
                },
                success: function(response) {
                    // alert("Data updated successfully!");
                    toggleIndicator(selector.parent().find('.data-saved'));
                },
                error: function(xhr) {
                    // alert("An error occurred while updating data.");
                    toggleIndicator(selector.parent().find('.data-failed'));
                }
            });

        }

        function updateStatus(selector) {
            $(`#${selector}`).on('change', function() {
                var id = $(this).data('id');
                var field = $(this).data('field');
                var value = $(this).val();

                update($(this), id, field, value);
            });
        }


        $(document).ready(function() {
            updateStatus('payment-status');
            updateStatus('order-status');
        });
    </script>
@endpush
