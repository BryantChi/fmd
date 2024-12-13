@extends('layouts_main.master')

@section('content')

<div id="main" style="overflow: hidden;">
    <div class="container-fluid m-0 pt-5 px-0 position-relative" style="overflow: hidden;">
        <div class="bg-g"></div>
        <div class="bg-f"></div>
        <div class="container-fluid pt-md-5 pt-2 position-relative">
            <div class="row mx-lg-5 justify-content-center">
                <div class="col-11 mb-4">
                    <div class="content-title d-md-flex d-block align-items-center mb-3">
                        <p class="text-uppercase mb-0">ORDER ONLINE</p>
                        <h3 class="mb-0 ml-1">線上下單</h3>
                    </div>
                    <p class="content-title-subtxt">
                        FMD磁磚工隊為您提供便捷的線上下單方案，輕鬆選擇適合的坪數和風格，享受專業的磁磚施工服務。<br>
                        多種方案，滿足不同空間大小和設計需求；立即選擇適合您的方案，打造專屬理想空間！
                    </p>
                </div>
            </div>

        </div>

        <div class="container-fluid position-relative">
            <div class="row position-relative mx-lg-5 mx-4 px-lg-4 justify-content-center">

                <div class="col-md-11 px-0 mx-0 mb-4">
                    <div class="order-form-complete">
                        <h4 class="text-center mb-4" style="color: #1c2021;">下單完成</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>方案</th>
                                        <th>樣式</th>
                                        <th>金額</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-light">
                                    @php
                                        $details = json_decode($orderInfo->order_details);
                                    @endphp

                                    @foreach ($details as $detail)
                                        @php
                                            $plan = DB::table('plan_infos')->whereNull('deleted_at')->where('id', $detail->id)->first();
                                            $style = '';
                                            switch ($detail->style) {
                                                case 'styleA1':
                                                case 'styleB1':
                                                case 'styleC1':
                                                case 'styleD1':
                                                    $style = '風格1';
                                                    break;

                                                case 'styleA2':
                                                case 'styleB2':
                                                case 'styleC2':
                                                case 'styleD2':
                                                    $style = '風格2';
                                                    break;

                                                case 'styleA3':
                                                case 'styleB3':
                                                case 'styleC3':
                                                case 'styleD3':
                                                    $style = '風格3';
                                                    break;

                                                case 'styleA4':
                                                case 'styleB4':
                                                case 'styleC4':
                                                case 'styleD4':
                                                    $style = '風格4';
                                                    break;

                                                default:
                                                    $style = '';
                                                    break;
                                            }

                                            if ($style == '') {
                                                continue;
                                            }
                                        @endphp
                                        <tr>
                                            <td>{{ ($plan->plan_name ?? '') . ' ' . ($plan->plan_sqm ?? '0 坪') }}</td>
                                            <td>{{ $style }}</td>
                                            <td>{{ $plan->plan_price ?? 0 }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="bg-light">
                                    <tr>
                                        <td colspan="3" class="text-right">
                                            <h4 class="order-choice-price">總計NT${{ $orderInfo->amount.'' }}</h4>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="order-form-complete-notice mb-5">
                            <p class="mb-5">
                                ●付款方式：ATM轉帳匯款
                            </p>
                            <p>
                                ※提醒您：款項請於<span class="text-danger">2024-00-00</span>前付款完成才算訂單成立。<br>
                                ※為了保護您的個人資料，訂購人及付款等相關資訊請於電子信箱中查看本次訂購詳情，謝謝。
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-md-11 px-0 mx-0 mb-5">
                    <x-payment-info/>
                </div>

            </div>
        </div>


    </div>


</div>

@endsection
