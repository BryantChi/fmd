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
                        {{-- <div class="row">
                            <div class="col-lg-4 mb-3">
                                <div class="order-box">
                                    <div class="order-title text-center py-3">
                                        <h3 class="mb-0">{{ $planInfo[0]->plan_name .' '. $planInfo[0]->plan_sqm }}</h3>
                                    </div>
                                    <div class="order-content text-center py-3 px-3">
                                        <h6 class="text-uppercase">風格選擇 <span>style choices</span></h6>
                                        <div class="order-line"></div>

                                        <ul class="nav nav-tabs mt-4" id="myTabA" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="sca1-tab" data-toggle="tab"
                                                    data-target="#sca1" type="button" role="tab" aria-controls="sca1"
                                                    aria-selected="true">風格1</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="sca2-tab" data-toggle="tab"
                                                    data-target="#sca2" type="button" role="tab" aria-controls="sca2"
                                                    aria-selected="false">風格2</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="sca3-tab" data-toggle="tab"
                                                    data-target="#sca3" type="button" role="tab" aria-controls="sca3"
                                                    aria-selected="false">風格3</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="sca4-tab" data-toggle="tab"
                                                    data-target="#sca4" type="button" role="tab" aria-controls="sca4"
                                                    aria-selected="false">風格4</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContentA">
                                            <div class="tab-pane fade show active" id="sca1" role="tabpanel"
                                                aria-labelledby="sca1-tab">
                                                <img src="{{ env('APP_URL'). '/uploads/' .$planInfo[0]->plan_style_1 }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="tab-pane fade" id="sca2" role="tabpanel"
                                                aria-labelledby="sca2-tab">
                                                <img src="{{ env('APP_URL'). '/uploads/' .$planInfo[0]->plan_style_2 }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="tab-pane fade" id="sca3" role="tabpanel"
                                                aria-labelledby="sca3-tab">
                                                <img src="{{ env('APP_URL'). '/uploads/' .$planInfo[0]->plan_style_3 }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="tab-pane fade" id="sca4" role="tabpanel"
                                                aria-labelledby="sca4-tab">
                                                <img src="{{ env('APP_URL'). '/uploads/' .$planInfo[0]->plan_style_4 }}" class="img-fluid" alt="">
                                            </div>
                                        </div>


                                        <h6 class="text-uppercase mt-3">適用空間 <span>applicable space</span></h6>
                                        <div class="order-line"></div>

                                        <ul class="list-unstyled my-3 space">
                                            <li class="d-flex justify-content-center">
                                                <span>小型浴室 / 小型廚房 / 小型陽台</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="order-choice-title text-center py-2">
                                        <h5>選定風格 ORDER</h5>
                                    </div>

                                    <div class="order-choice-style order-choice-A py-3 px-lg-5 px-3">
                                        <div class="d-flex mb-3">
                                            <p>風格選擇：</p>
                                            <div class="d-block">
                                                <div class="form-check align-items-center">
                                                    <input class="form-check-input style-a" type="checkbox" value="styleA1"
                                                        id="styleA1">
                                                    <label class="form-check-label" for="styleA1">
                                                        風格1
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input style-a" type="checkbox" value="styleA2"
                                                        id="styleA2">
                                                    <label class="form-check-label" for="styleA2">
                                                        風格2
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input style-a" type="checkbox" value="styleA3"
                                                        id="styleA3">
                                                    <label class="form-check-label" for="styleA3">
                                                        風格3
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input style-a" type="checkbox" value="styleA4"
                                                        id="styleA4">
                                                    <label class="form-check-label" for="styleA4">
                                                        風格4
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-5 align-items-center">
                                            <p>施作空間：</p>
                                            <select class="custom-select form-select" id="spaceA">
                                                <option selected>請選擇</option>
                                                <option value="客廳">客廳</option>
                                                <option value="房間">房間</option>
                                                <option value="浴室">浴室</option>
                                                <option value="廚房">廚房</option>
                                                <option value="陽台">陽台</option>
                                                <option value="其他">其他</option>
                                            </select>
                                        </div>
                                        <h4 class="order-choice-price" id="priceA">NT${{ $planInfo[0]->plan_price }}</h4>
                                    </div>
                                    <div class="order-choice-notice py-3 mx-3">
                                        <p class="">
                                            ※提醒您，風格選定後請於下方填寫訂購人資訊並點選「送出訂單」才算完成訂購！
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="order-box">
                                    <div class="order-title text-center py-3">
                                        <h3 class="mb-0">{{ $planInfo[1]->plan_name .' '. $planInfo[1]->plan_sqm }}</h3>
                                    </div>
                                    <div class="order-content text-center py-3 px-3">
                                        <h6 class="text-uppercase">風格選擇 <span>style choices</span></h6>
                                        <div class="order-line"></div>

                                        <ul class="nav nav-tabs mt-4" id="myTabB" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="scb1-tab" data-toggle="tab"
                                                    data-target="#scb1" type="button" role="tab"
                                                    aria-controls="scb1" aria-selected="true">風格1</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="scb2-tab" data-toggle="tab"
                                                    data-target="#scb2" type="button" role="tab"
                                                    aria-controls="scb2" aria-selected="false">風格2</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="scb3-tab" data-toggle="tab"
                                                    data-target="#scb3" type="button" role="tab"
                                                    aria-controls="scb3" aria-selected="false">風格3</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="scb4-tab" data-toggle="tab"
                                                    data-target="#scb4" type="button" role="tab"
                                                    aria-controls="scb4" aria-selected="false">風格4</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContentB">
                                            <div class="tab-pane fade show active" id="scb1" role="tabpanel"
                                                aria-labelledby="scb1-tab">
                                                <img src="{{ env('APP_URL'). '/uploads/' .$planInfo[1]->plan_style_1 }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="tab-pane fade" id="scb2" role="tabpanel"
                                                aria-labelledby="scb2-tab">
                                                <img src="{{ env('APP_URL'). '/uploads/' .$planInfo[1]->plan_style_2 }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="tab-pane fade" id="scb3" role="tabpanel"
                                                aria-labelledby="scb3-tab">
                                                <img src="{{ env('APP_URL'). '/uploads/' .$planInfo[1]->plan_style_3 }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="tab-pane fade" id="scb4" role="tabpanel"
                                                aria-labelledby="scb4-tab">
                                                <img src="{{ env('APP_URL'). '/uploads/' .$planInfo[1]->plan_style_4 }}" class="img-fluid" alt="">
                                            </div>
                                        </div>


                                        <h6 class="text-uppercase mt-3">適用空間 <span>applicable space</span></h6>
                                        <div class="order-line"></div>

                                        <ul class="list-unstyled my-3 space">
                                            <li class="d-flex justify-content-center">
                                                <span>中型浴室 / 中型廚房 / 客廳局部空間</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="order-choice-title text-center py-2">
                                        <h5>選定風格 ORDER</h5>
                                    </div>

                                    <div class="order-choice-style order-choice-A py-3 px-lg-5 px-3">
                                        <div class="d-flex mb-3">
                                            <p>風格選擇：</p>
                                            <div class="d-block">
                                                <div class="form-check align-items-center">
                                                    <input class="form-check-input style-b" type="checkbox" value="styleB1"
                                                        id="styleB1">
                                                    <label class="form-check-label" for="styleB1">
                                                        風格1
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input style-b" type="checkbox" value="styleB2"
                                                        id="styleB2">
                                                    <label class="form-check-label" for="styleB2">
                                                        風格2
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input style-b" type="checkbox" value="styleB3"
                                                        id="styleB3">
                                                    <label class="form-check-label" for="styleB3">
                                                        風格3
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input style-b" type="checkbox" value="styleB4"
                                                        id="styleB4">
                                                    <label class="form-check-label" for="styleB4">
                                                        風格4
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-5 align-items-center">
                                            <p>施作空間：</p>
                                            <select class="custom-select form-select" id="spaceB">
                                                <option selected>請選擇</option>
                                                <option value="客廳">客廳</option>
                                                <option value="房間">房間</option>
                                                <option value="浴室">浴室</option>
                                                <option value="廚房">廚房</option>
                                                <option value="陽台">陽台</option>
                                                <option value="其他">其他</option>
                                            </select>
                                        </div>
                                        <h4 class="order-choice-price" id="priceB">NT${{ $planInfo[0]->plan_price }}</h4>
                                    </div>
                                    <div class="order-choice-notice py-3 mx-3">
                                        <p class="">
                                            ※提醒您，風格選定後請於下方填寫訂購人資訊並點選「送出訂單」才算完成訂購！
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="order-box">
                                    <div class="order-title text-center py-3">
                                        <h3 class="mb-0">{{ $planInfo[2]->plan_name .' '. $planInfo[2]->plan_sqm }}</h3>
                                    </div>
                                    <div class="order-content text-center py-3 px-3">
                                        <h6 class="text-uppercase">風格選擇 <span>style choices</span></h6>
                                        <div class="order-line"></div>

                                        <ul class="nav nav-tabs mt-4" id="myTabC" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="scc1-tab" data-toggle="tab"
                                                    data-target="#scc1" type="button" role="tab"
                                                    aria-controls="scc1" aria-selected="true">風格1</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="scc2-tab" data-toggle="tab"
                                                    data-target="#scc2" type="button" role="tab"
                                                    aria-controls="scc2" aria-selected="false">風格2</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="scc3-tab" data-toggle="tab"
                                                    data-target="#scc3" type="button" role="tab"
                                                    aria-controls="scc3" aria-selected="false">風格3</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="scc4-tab" data-toggle="tab"
                                                    data-target="#scc4" type="button" role="tab"
                                                    aria-controls="scc4" aria-selected="false">風格4</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContentC">
                                            <div class="tab-pane fade show active" id="scc1" role="tabpanel"
                                                aria-labelledby="scc1-tab">
                                                <img src="{{ env('APP_URL'). '/uploads/' .$planInfo[2]->plan_style_1 }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="tab-pane fade" id="scc2" role="tabpanel"
                                                aria-labelledby="scc2-tab">
                                                <img src="{{ env('APP_URL'). '/uploads/' .$planInfo[2]->plan_style_2 }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="tab-pane fade" id="scc3" role="tabpanel"
                                                aria-labelledby="scc3-tab">
                                                <img src="{{ env('APP_URL'). '/uploads/' .$planInfo[2]->plan_style_3 }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="tab-pane fade" id="scc4" role="tabpanel"
                                                aria-labelledby="scc4-tab">
                                                <img src="{{ env('APP_URL'). '/uploads/' .$planInfo[0]->plan_style_1 }}" class="img-fluid" alt="">
                                            </div>
                                        </div>


                                        <h6 class="text-uppercase mt-3">適用空間 <span>applicable space</span></h6>
                                        <div class="order-line"></div>

                                        <ul class="list-unstyled my-3 space">
                                            <li class="d-flex justify-content-center">
                                                <span>大型浴室 / 大型廚房 / 全戶地磚更換</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="order-choice-title text-center py-2">
                                        <h5>選定風格 ORDER</h5>
                                    </div>

                                    <div class="order-choice-style order-choice-A py-3 px-lg-5 px-3">
                                        <div class="d-flex mb-3">
                                            <p>風格選擇：</p>
                                            <div class="d-block">
                                                <div class="form-check align-items-center">
                                                    <input class="form-check-input style-c" type="checkbox" value="styleC1"
                                                        id="styleC1">
                                                    <label class="form-check-label" for="styleC1">
                                                        風格1
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input style-c" type="checkbox" value="styleC2"
                                                        id="styleC2">
                                                    <label class="form-check-label" for="styleC2">
                                                        風格2
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input style-c" type="checkbox" value="styleC3"
                                                        id="styleC3">
                                                    <label class="form-check-label" for="styleC3">
                                                        風格3
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input style-c" type="checkbox" value="styleC4"
                                                        id="styleC4">
                                                    <label class="form-check-label" for="styleC4">
                                                        風格4
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-5 align-items-center">
                                            <p>施作空間：</p>
                                            <select class="custom-select form-select" id="spaceC">
                                                <option selected>請選擇</option>
                                                <option value="客廳">客廳</option>
                                                <option value="房間">房間</option>
                                                <option value="浴室">浴室</option>
                                                <option value="廚房">廚房</option>
                                                <option value="陽台">陽台</option>
                                                <option value="其他">其他</option>
                                            </select>
                                        </div>
                                        <h4 class="order-choice-price" id="priceC">NT${{ $planInfo[2]->plan_price }}</h4>
                                    </div>
                                    <div class="order-choice-notice py-3 mx-3">
                                        <p class="">
                                            ※提醒您，風格選定後請於下方填寫訂購人資訊並點選「送出訂單」才算完成訂購！
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div> --}}
                        <div class="row">
                            @foreach($planInfo as $index => $plan)
                                <x-order-box :plan="$plan" :tabId="$index" :style="chr(97 + $index)" />
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-11 px-0 mx-0 mb-4">
                        <div class="order-form">
                            <form action="{{route('order_online.submit')}}" method="post">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <p style="color: #d22b49">(*為必填欄位)</p>
                                        <h5 class="order-form-title-info py-2 px-2">訂購人資訊</h5>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <h5><span class="text-danger">*</span> 訂購人姓名（必填）：</h5>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="姓名"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <h5><span class="text-danger">*</span> 聯絡電話（必填）：</h5>
                                        <div class="form-floating">
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="電話"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <h5><span class="text-danger">*</span> 電子信箱（必填）：</h5>
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="E-MAIL" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <h5><span class="text-danger">*</span> 地址（必填）：</h5>
                                    </div>
                                    <div class="col-md-auto">
                                        <!-- 縣市下拉選單 -->
                                        <div class="form-floating">
                                            <select class="form-select form-control" id="city" name="city" aria-placeholder="縣市"
                                                aria-label="縣市" required>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-auto">
                                        <!-- 鄉鎮市區下拉選單 -->
                                        <div class="form-floating">
                                            <select class="form-select form-control" id="district" name="district"
                                                aria-placeholder="鄉鎮市區" aria-label="鄉鎮市區" required>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-auto">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="郵遞區號"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2 mb-4">
                                        <div class="form-floating2">
                                            <input type="text" class="form-control" id="address" name="address" placeholder=""
                                                required>
                                            <!-- <label for="address"></label> -->
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <h5 class="order-form-title-info py-2 px-2">付款資訊</h5>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <h5><span class="text-danger">*</span> 付款方式（必選）：</h5>
                                        <div class="form-floating">
                                            <select class="form-select form-control" id="payment-method" name="payment_method"
                                                aria-placeholder="付款方式" aria-label="" required>
                                                <option selected>請選擇付款方式</option>
                                                <option value="atm">ATM轉帳匯款</option>
                                                <option value="credit">線上刷卡</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <h5>備註（可省略）：</h5>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="客製化服務可於此處備註" id="order-note" name="order_note" rows="5" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 order-details">
                                        <input type="text" hidden id="order-style-a" name="order_style_a">
                                        <input type="text" hidden id="order-style-a-space" name="order_style_a_space">
                                        <input type="text" hidden id="order-style-b" name="order_style_b">
                                        <input type="text" hidden id="order-style-b-space" name="order_style_b_space">
                                        <input type="text" hidden id="order-style-c" name="order_style_c">
                                        <input type="text" hidden id="order-style-c-space" name="order_style_c_space">
                                    </div>
                                    <div class="col-12 my-3 text-center">
                                        <p style="color: #d22b49;">※提醒您：在按下「送出訂單」之前請先檢查填寫的資訊是否正確，資料一經送出便無法再修改訂單</p>
                                    </div>
                                    @csrf
                                    <div class="col-12 d-md-flex d-block justify-content-center align-items-center">
                                        <div class="position-relative reset-btn mx-md-2 mx-auto mb-3"
                                            style="width: max-content;">
                                            <div class="btn-mask"></div>
                                            <button class="btn-reset py-3" type="reset"
                                                onclick="resetForm()">清除重填</button>
                                        </div>
                                        <div class="position-relative submit-btn mx-md-2 mx-auto mb-3"
                                            style="width: max-content;">
                                            <div class="btn-mask"></div>
                                            <button class="btn-submit py-3" type="button"
                                                onclick="submitForm()">確認送出</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
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

@push('page_scripts')
    <script>
        function handleCheckboxChange(groupPrefix, inputId) {
            $(`[id^="${groupPrefix}"]`).on('change', function() {
                if ($(this).prop('checked')) {
                    $(`#${inputId}`).val($(this).val());
                    $(`[id^="${groupPrefix}"]`).not(this).prop('checked', false);
                } else {
                    $(`#${inputId}`).val('');
                }
            });
        }

        function handleSelectChange(selectIdPrefix, inputIdPrefix) {
            $(`select[id^="${selectIdPrefix}"]`).on('change', function() {
                const selectedValue = $(this).val();
                // const groupId = $(this).attr('id').replace(selectIdPrefix, '');
                $(`#${inputIdPrefix}`).val(selectedValue);
            });
        }


        $(function() {
            $('.cases-category-title').on('click', function() {
                $(this).parent().find('.cases-category-list').slideToggle();
                $(this).find('.cases-category-item-arrow-p').toggleClass('d-none');
                $(this).find('.cases-category-item-arrow-d').toggleClass('d-none');
            })
            if ($(window).width() < 992) {
                $('.cases-category-title').click();
            }

            handleCheckboxChange('styleA', 'order-style-a');
            handleCheckboxChange('styleB', 'order-style-b');
            handleCheckboxChange('styleC', 'order-style-c');

            handleSelectChange('spaceA', 'order-style-a-space');
            handleSelectChange('spaceB', 'order-style-b-space');
            handleSelectChange('spaceC', 'order-style-c-space');
        });
    </script>
    <script>
        $(document).ready(function() {
            // 定義資料來源的 URL
            const dataUrl =
                'https://gist.githubusercontent.com/mukiwu/50bccbe60f1e65660cfa12bec1d4a5f1/raw/TwCities.json';

            // 透過 AJAX 取得線上 JSON 資料
            $.getJSON(dataUrl, function(data) {
                // 初始化縣市下拉選單
                $('#city').append(new Option('請選擇縣市', ''));
                $('#district').append(new Option('請選擇鄉鎮市區', ''));
                data.forEach(function(city) {
                    $('#city').append(new Option(city.name, city.name));
                });

                // 當縣市選單變更時，更新鄉鎮市區選單
                $('#city').change(function() {
                    const selectedCity = $(this).val();
                    const districtSelect = $('#district');
                    districtSelect.empty().append(new Option('請選擇鄉鎮市區', ''));

                    if (selectedCity) {
                        const cityData = data.find(city => city.name === selectedCity);
                        cityData.districts.forEach(function(district) {
                            // 這裡將郵遞區號作為選項的值，以便選擇後顯示
                            const option = new Option(district.name, district.name);
                            $(option).attr('data-zip', district.zip); // 設定 data-zip 屬性
                            districtSelect.append(option);
                        });
                    }

                    // 清空郵遞區號顯示
                    $('#zipcode').text('');
                });

                // 當鄉鎮市區選單變更時，顯示對應的郵遞區號
                $('#district').change(function() {
                    const selectedOption = $(this).find(':selected');
                    const selectedZip = selectedOption.data('zip'); // 獲取 data-zip 的值
                    $('#zipcode').val(selectedZip); // 顯示選中的郵遞區號
                });
            });
        });

        function resetForm() {
            $('form')[0].reset();
            $('[id^="style"]').prop('checked', false);
            $('[id^="space"]').prop('selectedIndex', 0);
        }

        function validateOrder() {
            // 定義三組的輸入框 ID
            const groups = [
                ['#order-style-a', '#order-style-a-space'],
                ['#order-style-b', '#order-style-b-space'],
                ['#order-style-c', '#order-style-c-space']
            ];

            let isValid = false;

            // 遍歷每一組
            for (const group of groups) {
                const [field1, field2] = group;
                const value1 = $(field1).val().trim();
                const value2 = $(field2).val().trim();

                // 檢查當前組是否符合條件
                if (value1 && value2) {
                    isValid = true;
                    break; // 任意一組通過即可
                }
            }

            return isValid;
        }

        function submitForm() {
            if ($('#payment-method').val() == 'credit') {
                alert('付款方式-線上刷卡 尚未開放');
                return;
            } else if ($('#payment-method').val() == '請選擇付款方式') {
                alert('請選擇付款方式');
                return;
            }
            if (validateOrder() == false) {
                alert('請至少選擇一個方案');
                return;
            }
            $('form').submit();
        }

        // function go2pay() {
        //     var pay = $('#payment-method').val();
        //     switch (pay) {
        //         case 'ATM轉帳匯款':
        //             window.location.href = '{{ route("order_pay_atm") }}';
        //             break;
        //         case '線上刷卡':
        //             window.location.href = '{{ route("order_pay_credit") }}';
        //             break;

        //         default:
        //             break;
        //     }
        // }
    </script>
@endpush
