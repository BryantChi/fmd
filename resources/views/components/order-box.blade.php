<div class="col-lg-4 mb-3">
    <div class="order-box">
        <div class="order-title text-center py-3">
            <h3 class="mb-0">{{ $plan['plan_name'] .' '. $plan['plan_sqm'] }}</h3>
        </div>
        <div class="order-content text-center py-3 px-3">
            <h6 class="text-uppercase">風格選擇 <span>style choices</span></h6>
            <div class="order-line"></div>

            <!-- 風格選擇標籤 -->
            <ul class="nav nav-tabs mt-4" id="myTab{{ $tabId }}" role="tablist">
                @foreach(range(1, 4) as $index)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $index === 1 ? 'active' : '' }}"
                                id="tab{{ $tabId }}-{{ $index }}"
                                data-toggle="tab"
                                data-target="#tab-content{{ $tabId }}-{{ $index }}"
                                type="button" role="tab"
                                aria-controls="tab-content{{ $tabId }}-{{ $index }}"
                                aria-selected="{{ $index === 1 ? 'true' : 'false' }}">
                            風格{{ $index }}
                        </button>
                    </li>
                @endforeach
            </ul>

            <!-- 風格選擇內容 -->
            <div class="tab-content" id="myTabContent{{ $tabId }}">
                @foreach(range(1, 4) as $index)
                    <div class="tab-pane fade {{ $index === 1 ? 'show active' : '' }}"
                         id="tab-content{{ $tabId }}-{{ $index }}"
                         role="tabpanel" aria-labelledby="tab{{ $tabId }}-{{ $index }}">
                        @if($plan['plan_style_' . $index])
                            <img src="{{ env('APP_URL'). '/uploads/' . $plan['plan_style_' . $index] }}"
                                 class="img-fluid" alt="">
                        @endif
                    </div>
                @endforeach
            </div>

            <h6 class="text-uppercase mt-3">適用空間 <span>applicable space</span></h6>
            <div class="order-line"></div>
            <ul class="list-unstyled my-3 space">
                <li class="d-flex justify-content-center">
                    <span>{{ $plan['applicable_space'] }}</span>
                </li>
            </ul>
        </div>

        <div class="order-choice-title text-center py-2">
            <h5>選定風格 ORDER</h5>
        </div>

        <!-- 風格選擇 Checkbox -->
        <div class="order-choice-style py-3 px-lg-5 px-3">
            <div class="d-flex mb-3">
                <p>風格選擇：</p>
                <div class="d-block">
                    @foreach(range(1, 4) as $index)
                        <div class="form-check align-items-center">
                            <input class="form-check-input style-{{ $style }}"
                                type="checkbox"
                                value="style{{ ucfirst($style) }}{{ $index }}"
                                id="style{{ ucfirst($style) }}{{ $index }}">
                            <label class="form-check-label" for="style{{ ucfirst($style) }}{{ $index }}">
                                風格{{ $index }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex mb-5 align-items-center">
                <p>施作空間：</p>
                <select class="custom-select form-select" id="space{{ ucfirst($style) }}">
                    <option selected>請選擇</option>
                    <option value="客廳">客廳</option>
                    <option value="房間">房間</option>
                    <option value="浴室">浴室</option>
                    <option value="廚房">廚房</option>
                    <option value="陽台">陽台</option>
                    <option value="其他">其他</option>
                </select>
            </div>
            <h4 class="order-choice-price" id="price{{ ucfirst($style) }}">NT${{ $plan['plan_price'] }}</h4>
        </div>
        <div class="order-choice-notice py-3 mx-3">
            <p class="">
                ※提醒您，風格選定後請於下方填寫訂購人資訊並點選「送出訂單」才算完成訂購！
            </p>
        </div>
    </div>
</div>
