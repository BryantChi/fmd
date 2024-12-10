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
                                        <tr>
                                            <td>A方案 3-4坪</td>
                                            <td>風格1</td>
                                            <td>xxxxx</td>
                                        </tr>
                                        <tr>
                                            <td>C方案 8-10坪</td>
                                            <td>風格2 風格3</td>
                                            <td>xxxxx</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="bg-light">
                                        <tr>
                                            <td colspan="3" class="text-right">
                                                <h4 class="order-choice-price">總計NT$XXXXX</h4>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="order-form-complete-notice mb-5">
                                <p class="mb-5">
                                    ●付款方式：線上刷卡
                                </p>
                                <p>
                                    ※提醒您：款項請於<span class="text-danger">2024-00-00</span>前付款完成才算訂單成立。<br>
                                    ※為了保護您的個人資料，訂購人及付款等相關資訊請於電子信箱中查看本次訂購詳情，謝謝。
                                </p>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="position-relative pay-btn mx-2">
                                    <div class="btn-mask"></div>
                                    <button class="btn-pay py-3" type="button">前往付款</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-11 px-0 mx-0 mb-5">
                        <div class="payment-info px-lg-5 px-3 py-lg-5 py-4 mb-5">
                            <h4>【匯款資訊】</h4>
                            <p>
                                銀行名稱：XX銀行（代號：000）<br>

                                匯款帳號：0000-0000-00000<br>

                                戶名：FMD磁磚工隊<br>

                                ※匯款完成之後請透過E-mail、LINE或是FB私訊留言聯絡我們，並提供「匯款帳號末五碼」之資訊以利查詢。<br>

                                <span>※提醒您：為方便核對款項，請於來訊告知匯款資訊時，訂購人姓名及聯絡電話需與網站上的訂購資訊一致。</span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>


        </div>


    </div>
@endsection
