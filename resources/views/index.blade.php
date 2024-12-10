@extends('layouts_main.master')

@section('content')
    <div id="main-section" style="overflow: hidden;">
        <div class="container-fluid m-0 py-5 position-relative" style="overflow: hidden;">
            <div class="bg-g"></div>
            <div class="bg-f"></div>
            <div class="container-fluid px-lg-5 px-3 py-md-5 py-2">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="content-title d-flex align-items-center">
                                    <p class="text-uppercase mb-0">Service</p>
                                    <h3 class="mb-0 ml-1">服務項目</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="ser-box text-white">
                                    <div class="ser-header text-center">
                                        <p>Service 01</p>
                                        <img src="{{asset('assets/images/00-hp/ser_icon01.png')}}" class="img-fluid" alt="">
                                        <h4>新建磁磚 • 泥作工程</h4>
                                    </div>
                                    <div class="ser-body px-lg-5 px-3">
                                        <p>
                                            FMD團隊擁有多年經驗，能夠處理各種複雜的建築結構，確保每一片磁磚都穩固耐用、外觀美觀，為您提供高品質的磁磚鋪設服務。
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <div class="ser-box text-white">
                                    <div class="ser-header text-center">
                                        <p>Service 02</p>
                                        <img src="{{asset('assets/images/00-hp/ser_icon02.png')}}" class="img-fluid" alt="">
                                        <h4>地磚爆裂 • 地磚修補</h4>
                                    </div>
                                    <div class="ser-body px-lg-5 px-3">
                                        <p>
                                            地磚爆裂問題讓人困擾，FMD技術團隊能迅速評估問題，使用高品質材料和專業工具進行修補，讓您的地磚恢復如新，避免進一步損壞。
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <div class="ser-box text-white">
                                    <div class="ser-header text-center">
                                        <p>Service 03</p>
                                        <img src="{{('assets/images/00-hp/ser_icon03.png')}}" class="img-fluid" alt="">
                                        <h4>壁磚補修 • 地坪粉刷</h4>
                                    </div>
                                    <div class="ser-body px-lg-5 px-3">
                                        <p>
                                            壁磚損壞影響整體美觀，無論是小面積修補還是大範圍更換，FMD都能精確匹配原有磁磚，保證修補效果天衣無縫。地坪粉刷服務，為您的地面增添一層保護和美化，提升整體空間質感。
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <div class="ser-box text-white">
                                    <div class="ser-header text-center">
                                        <p>Service 04</p>
                                        <img src="{{asset('assets/images/00-hp/ser_icon04.png')}}" class="img-fluid" alt="">
                                        <h4>浴室整修 • 防水工程</h4>
                                    </div>
                                    <div class="ser-body px-lg-5 px-3">
                                        <p>
                                            FMD磁磚工隊從地磚、壁磚更換到整體設計改造，都能滿足您的裝修需求。我們也提供專業的防水工程服務，確保浴室和其他濕區不會出現漏水問題， 保持乾燥舒適。
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <div class="ser-box text-white">
                                    <div class="ser-header text-center">
                                        <p>Service 05</p>
                                        <img src="{{asset('assets/images/00-hp/ser_icon05.png')}}" class="img-fluid" alt="">
                                        <h4>工程承包一站式服務</h4>
                                    </div>
                                    <div class="ser-body px-lg-5 px-3">
                                        <p>
                                            FMD提供全面的工程承包服務，涵蓋各類磁磚鋪設、修補和防水工程，讓您不需煩惱各項工程的協調與管理。從設計、材料選購到施工完工，全程由專業團隊負責，確保每一個細節都完美呈現。
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <div class="ser-box2 align-items-center">
                                    <div class="ser-header text-center mt-5">
                                        <h4>FMD磁磚工隊</h4>
                                    </div>
                                    <div class="ser-body position-relative text-center w-100 px-lg-5 px-3">
                                        <p class="text-start mb-5">
                                            提供全方位的磁磚和相關建築裝修服務，無論是新建磁磚、地磚爆裂修補，還是防水工程和浴室整修，我們都能以專業的技術和豐富的經驗，為您打造理想中的完美空間。
                                        </p>
                                        <a href="{{ route('service') }}" class="ser-btn px-4 py-2">了解更多 MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid m-0 py-5 position-relative bg-about">
            <!-- <div class=""></div> -->
            <div class="container-fluid px-lg-5 px-3 my-auto pt-lg-4 pt-3">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 mb-lg-auto mb-3">
                        <div class="content-title d-flex align-items-center mb-3">
                            <p class="text-uppercase mb-0 text-white">About</p>
                            <h3 class="mb-0 ml-1">FMD優勢</h3>
                        </div>

                        <div>
                            <p class="text-white mb-4">
                                FMD磁磚工隊是專業且經驗豐富的磁磚鋪設團隊，為每位客戶提供最優質的服務。<br>
                                無論是難貼難做磁磚鋪設、多角類型磁磚鋪設，還是馬賽克藝術拼貼，我們都能以高水準的工藝與創意，為您的空間增添獨特魅力。<br><br>


                                FMD磁磚工隊以客戶滿意為最終目標，注重每一個施工細節,確保工程品質達到最高標準。<br>
                                FMD團隊由一群熱愛磁磚工藝的專業人士組成，不僅技術精湛，還具備創造力和設計眼光，<br>
                                無論您的需求多麼獨特或困難，我們都能為您提供量身訂製的解決方案。<br>
                            </p>

                            <a href="{{ route('about') }}" class="ab-btn-more px-4 py-2">了解更多 MORE</a>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self-center py-3 position-relative">
                        <div class="ab-pic-bg"></div>
                        <img src="{{asset('assets/images/00-hp/ab_pic.jpg')}}" class="img-fluid ab-pic-img" alt="">

                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid m-0 py-5 px-0 position-relative bg-order">
            <div class="container-fluid px-lg-5 px-3">
                <div class="row justify-content-center">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="content-title d-md-flex d-block align-items-center mb-3">
                            <p class="text-uppercase mb-0">ORDER ONLINE</p>
                            <h3 class="mb-0 ml-1">線上下單</h3>
                        </div>

                    </div>
                    <div class="col-12 mb-4">
                        <p class="text-center mx-auto" style="color: #1c2020;">
                            FMD磁磚工隊為您提供便捷的線上下單方案，輕鬆選擇適合的坪數和風格，享受專業的磁磚施工服務。 <br>
                            多種方案，滿足不同空間大小和設計需求；立即選擇適合您的方案，打造專屬理想空間！
                        </p>
                    </div>

                    <div class="col-lg-11">
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                <div class="order-box">
                                    <div class="order-title text-center py-3">
                                        <h3 class="mb-0">A方案 3-4坪</h3>
                                    </div>
                                    <div class="order-content text-center py-3 px-3">
                                        <h6 class="text-uppercase">風格選擇 <span>style choices</span></h6>
                                        <div class="order-line"></div>

                                        <ul class="nav nav-tabs mt-4" id="myTabA" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="sca1-tab" data-toggle="tab"
                                                    data-target="#sca1" type="button" role="tab"
                                                    aria-controls="sca1" aria-selected="true">風格1</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="sca2-tab" data-toggle="tab"
                                                    data-target="#sca2" type="button" role="tab"
                                                    aria-controls="sca2" aria-selected="false">風格2</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="sca3-tab" data-toggle="tab"
                                                    data-target="#sca3" type="button" role="tab"
                                                    aria-controls="sca3" aria-selected="false">風格3</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="sca4-tab" data-toggle="tab"
                                                    data-target="#sca4" type="button" role="tab"
                                                    aria-controls="sca4" aria-selected="false">風格4</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContentA">
                                            <div class="tab-pane fade show active" id="sca1" role="tabpanel"
                                                aria-labelledby="sca1-tab">
                                                <img src="{{asset('assets/images/00-hp/order_pic.jpg')}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="tab-pane fade" id="sca2" role="tabpanel"
                                                aria-labelledby="sca2-tab">...
                                            </div>
                                            <div class="tab-pane fade" id="sca3" role="tabpanel"
                                                aria-labelledby="sca3-tab">...
                                            </div>
                                            <div class="tab-pane fade" id="sca4" role="tabpanel"
                                                aria-labelledby="sca4-tab">...
                                            </div>
                                        </div>


                                        <h6 class="text-uppercase mt-3">適用空間 <span>applicable space</span></h6>
                                        <div class="order-line"></div>

                                        <ul class="list-unstyled my-3 space">
                                            <li class="d-flex justify-content-center">
                                                <span>小型浴室</span>
                                            </li>
                                            <li class="d-flex justify-content-center">
                                                <span>小型廚房</span>
                                            </li>
                                            <li class="d-flex justify-content-center">
                                                <span>小型陽台</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="order-box">
                                    <div class="order-title text-center py-3">
                                        <h3 class="mb-0">B方案 5-7坪</h3>
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
                                                <img src="{{asset('assets/images/00-hp/order_pic.jpg')}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="tab-pane fade" id="scb2" role="tabpanel"
                                                aria-labelledby="scb2-tab">...
                                            </div>
                                            <div class="tab-pane fade" id="scb3" role="tabpanel"
                                                aria-labelledby="scb3-tab">...
                                            </div>
                                            <div class="tab-pane fade" id="scb4" role="tabpanel"
                                                aria-labelledby="scb4-tab">...
                                            </div>
                                        </div>


                                        <h6 class="text-uppercase mt-3">適用空間 <span>applicable space</span></h6>
                                        <div class="order-line"></div>

                                        <ul class="list-unstyled my-3 space">
                                            <li class="d-flex justify-content-center">
                                                <span>中型浴室</span>
                                            </li>
                                            <li class="d-flex justify-content-center">
                                                <span>中型廚房</span>
                                            </li>
                                            <li class="d-flex justify-content-center">
                                                <span>客廳局部空間</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="order-box">
                                    <div class="order-title text-center py-3">
                                        <h3 class="mb-0">C方案 8-10坪</h3>
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
                                                <img src="{{asset('assets/images/00-hp/order_pic.jpg')}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="tab-pane fade" id="scc2" role="tabpanel"
                                                aria-labelledby="scc2-tab">...
                                            </div>
                                            <div class="tab-pane fade" id="scc3" role="tabpanel"
                                                aria-labelledby="scc3-tab">...
                                            </div>
                                            <div class="tab-pane fade" id="scc4" role="tabpanel"
                                                aria-labelledby="scc4-tab">...
                                            </div>
                                        </div>


                                        <h6 class="text-uppercase mt-3">適用空間 <span>applicable space</span></h6>
                                        <div class="order-line"></div>

                                        <ul class="list-unstyled my-3 space">
                                            <li class="d-flex justify-content-center">
                                                <span>大型浴室</span>
                                            </li>
                                            <li class="d-flex justify-content-center">
                                                <span>大型廚房</span>
                                            </li>
                                            <li class="d-flex justify-content-center">
                                                <span>全戶地磚更換</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 mt-5 mb-4 text-center">
                                <a href="{{ route('order_online') }}" class="or-btn px-4 py-2">了解更多 MORE</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <img src="images/00-hp/bg_g_slash.svg" class="img-fluid bg-g-slash" alt="">

            <div class="container-fluid px-lg-5 px-3 mt-5">
                <div class="row justify-content-center">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="content-title d-flex align-items-center mb-3">
                            <p class="text-uppercase mb-0">CASES</p>
                            <h3 class="mb-0 ml-1">實績案例</h3>
                        </div>

                    </div>
                    <div class="col-12 mb-4">
                        <p class="text-center mx-auto" style="color: #1c2020;">
                            FMD磁磚工隊以卓越的技術和專業的服務，成功完成了眾多優質磁磚工程項目，贏得客戶的一致好評。
                        </p>
                    </div>

                    <div class="col-lg-11">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-3 text-center">
                                <img src="{{ asset('assets/images/00-hp/case_pic1.jpg') }}" class="img-fluid case-img" alt="">
                                <h5 class="mt-3 mb-1 case-name">7月案例1</h5>
                                <p class="see-count">觀看人次：154</p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-3 text-center">
                                <img src="{{ asset('assets/images/00-hp/case_pic2.jpg') }}" class="img-fluid case-img" alt="">
                                <h5 class="mt-3 mb-1 case-name">7月案例2</h5>
                                <p class="see-count">觀看人次：154</p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-3 text-center">
                                <img src="{{ asset('assets/images/00-hp/case_pic3.jpg') }}" class="img-fluid case-img" alt="">
                                <h5 class="mt-3 mb-1 case-name">7月案例3</h5>
                                <p class="see-count">觀看人次：154</p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-3 text-center">
                                <img src="{{ asset('assets/images/00-hp/case_pic4.jpg') }}" class="img-fluid case-img" alt="">
                                <h5 class="mt-3 mb-1 case-name">7月案例4</h5>
                                <p class="see-count">觀看人次：154</p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-3 text-center">
                                <img src="{{ asset('assets/images/00-hp/case_pic5.jpg') }}" class="img-fluid case-img" alt="">
                                <h5 class="mt-3 mb-1 case-name">7月案例5</h5>
                                <p class="see-count">觀看人次：154</p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-3 text-center">
                                <img src="{{ asset('assets/images/00-hp/case_pic6.jpg') }}" class="img-fluid case-img" alt="">
                                <h5 class="mt-3 mb-1 case-name">7月案例6</h5>
                                <p class="see-count">觀看人次：154</p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-3 text-center">
                                <img src="{{ asset('assets/images/00-hp/case_pic7.jpg') }}" class="img-fluid case-img" alt="">
                                <h5 class="mt-3 mb-1 case-name">7月案例7</h5>
                                <p class="see-count">觀看人次：154</p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-3 text-center">
                                <img src="{{ asset('assets/images/00-hp/case_pic8.jpg') }}" class="img-fluid case-img" alt="">
                                <h5 class="mt-3 mb-1 case-name">7月案例8</h5>
                                <p class="see-count">觀看人次：154</p>
                            </div>


                            <div class="col-12 mt-4 mb-4 text-center">
                                <a href="{{ route('cases') }}" class="or-btn px-4 py-2">更多案例 MORE</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div class="container-fluid m-0 py-5 px-0 position-relative bg-process align-items-center">
            <div class="container mb-lg-5 mb-3">
                <div class="row pt-lg-5 pt-3">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="content-title d-flex align-items-center mb-3">
                            <p class="text-uppercase mb-0 text-light">PROCESS</p>
                            <h3 class="mb-0 ml-1">施作流程</h3>
                        </div>

                    </div>
                    <div class="col-12 mb-4">
                        <p class="text-center mx-auto " style="color: #ffffffcc;">
                            FMD磁磚工隊的施作流程嚴謹而高效，確保每個步驟都精確無誤，為您打造完美空間。
                        </p>
                    </div>
                </div>
            </div>

            <div class="container-fluid px-lg-5 px-3">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="row justify-content-center">
                            <div class="col-lg-auto mb-4">
                                <div class="process-item">
                                    <div class="process-icon text-center mb-3">
                                        <img src="{{asset('assets/images/00-hp/pro_icon01.png')}}" class="img-fluid">
                                    </div>
                                    <div class="process-text mx-auto">
                                        <h5 class="text-light d-flex align-items-center mb-3"><span
                                                class="num-box mr-1">1</span>項目諮詢與需求分析</h5>
                                        <p>
                                            來電/來訊進行初步溝通，了解<br>
                                            您的具體需求和預算，並提供<br>
                                            專業的建議和解決方案。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto mb-4 align-self-center text-center d-lg-block d-none">
                                <img src="{{asset('assets/images/00-hp/pro_arrow.png')}}" class="img-fluid img-arrow-pro" alt="">
                            </div>

                            <div class="col-lg-auto mb-4">
                                <div class="process-item">
                                    <div class="process-icon text-center mb-3">
                                        <img src="{{asset('assets/images/00-hp/pro_icon02.png')}}" class="img-fluid">
                                    </div>
                                    <div class="process-text mx-auto">
                                        <h5 class="text-light d-flex align-items-center mb-3"><span
                                                class="num-box mr-1">2</span>現場勘查與測量</h5>
                                        <p>
                                            前往現場進行實地勘查，詳細<br>
                                            測量需要鋪設磁磚的區域，並<br>
                                            評估現場的結構特點和可能存<br>
                                            在的挑戰。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto mb-4 align-self-center text-center d-lg-block d-none">
                                <img src="{{asset('assets/images/00-hp/pro_arrow.png')}}" class="img-fluid img-arrow-pro" alt="">
                            </div>

                            <div class="col-lg-12 d-block d-ls-none"></div>
                            <div class="col-lg-auto mb-4">
                                <div class="process-item">
                                    <div class="process-icon text-center mb-3">
                                        <img src="{{asset('assets/images/00-hp/pro_icon03.png')}}" class="img-fluid">
                                    </div>
                                    <div class="process-text mx-auto">
                                        <h5 class="text-light d-flex align-items-center mb-3"><span
                                                class="num-box mr-1">3</span>設計與材料選擇</h5>
                                        <p>
                                            根據測量結果和您的需求，<br>
                                            FMD會推薦適合的磁磚種類<br>
                                            、顏色和圖案，並根據空間特<br>
                                            點進行最佳排版設計。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto mb-4 align-self-center text-center d-lg-block d-none">
                                <img src="{{asset('assets/images/00-hp/pro_arrow.png')}}" class="img-fluid img-arrow-pro" alt="">
                            </div>

                            <div class="col-lg-auto mb-4">
                                <div class="process-item">
                                    <div class="process-icon text-center mb-3">
                                        <img src="{{asset('assets/images/00-hp/pro_icon04.png')}}" class="img-fluid">
                                    </div>
                                    <div class="process-text mx-auto">
                                        <h5 class="text-light d-flex align-items-center mb-3"><span
                                                class="num-box mr-1">4</span>材料準備與施工計劃</h5>
                                        <p>
                                            確定風格方案後，FMD會準<br>
                                            備所需的所有材料，制定詳細<br>
                                            的施工計劃，包括每階段的時<br>
                                            間安排和人力配置。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-auto mb-4">
                                <div class="process-item">
                                    <div class="process-icon text-center mb-3">
                                        <img src="{{asset('assets/images/00-hp/pro_icon05.png')}}" class="img-fluid">
                                    </div>
                                    <div class="process-text mx-auto">
                                        <h5 class="text-light d-flex align-items-center mb-3"><span
                                                class="num-box mr-1">5</span>基礎處理與防水工程</h5>
                                        <p>
                                            正式鋪設磁磚前，會對地面和牆<br>
                                            面進行基礎處理，確保表面平整<br>
                                            、乾燥並具備良好的附著力。對<br>
                                            於濕區和容易滲水的區域，進行<br>
                                            專業的防水工程。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto mb-4 align-self-center text-center d-lg-block d-none">
                                <img src="{{asset('assets/images/00-hp/pro_arrow.png')}}" class="img-fluid img-arrow-pro" alt="">
                            </div>

                            <div class="col-lg-auto mb-4">
                                <div class="process-item">
                                    <div class="process-icon text-center mb-3">
                                        <img src="{{asset('assets/images/00-hp/pro_icon06.png')}}" class="img-fluid">
                                    </div>
                                    <div class="process-text mx-auto">
                                        <h5 class="text-light d-flex align-items-center mb-3"><span
                                                class="num-box mr-1">6</span>磁磚鋪設與校正</h5>
                                        <p>
                                            FMD的施工團隊將按照設計方<br>
                                            案進行磁磚鋪設，嚴格控制每<br>
                                            一片磁磚的間距和角度，讓整<br>
                                            體效果美觀一致。鋪設過程中<br>
                                            隨時進行校正，避免出現任何<br>
                                            偏差。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto mb-4 align-self-center text-center d-lg-block d-none">
                                <img src="{{asset('assets/images/00-hp/pro_arrow.png')}}" class="img-fluid img-arrow-pro" alt="">
                            </div>

                            <div class="col-lg-12 d-block d-ls-none"></div>
                            <div class="col-lg-auto mb-4">
                                <div class="process-item">
                                    <div class="process-icon text-center mb-3">
                                        <img src="{{asset('assets/images/00-hp/pro_icon07.png')}}" class="img-fluid">
                                    </div>
                                    <div class="process-text mx-auto">
                                        <h5 class="text-light d-flex align-items-center mb-3"><span
                                                class="num-box mr-1">7</span>縫隙填充與表面清潔</h5>
                                        <p>
                                            磁磚鋪設完成後，會使用高品質<br>
                                            的填縫劑對縫隙進行填充，確保<br>
                                            磁磚之間的連接牢固且美觀；並<br>
                                            於乾燥後，進行磁磚表面的全面<br>
                                            清潔。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto mb-4 align-self-center text-center d-lg-block d-none">
                                <img src="{{asset('assets/images/00-hp/pro_arrow.png')}}" class="img-fluid img-arrow-pro" alt="">
                            </div>

                            <div class="col-lg-auto mb-4">
                                <div class="process-item">
                                    <div class="process-icon text-center mb-3">
                                        <img src="{{asset('assets/images/00-hp/pro_icon08.png')}}" class="img-fluid">
                                    </div>
                                    <div class="process-text mx-auto">
                                        <h5 class="text-light d-flex align-items-center mb-3"><span
                                                class="num-box mr-1">8</span>檢查驗收與維護指導</h5>
                                        <p>
                                            施工完成後，進行最終檢查，<br>
                                            將邀請您一同驗收，並提供專<br>
                                            業的維護指導，幫助您保持磁<br>
                                            磚的美觀和耐用性。
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row justify-content-center">
                            <div class="col-12 mt-4 mb-4 text-center">
                                <a href="{{ route('cases') }}" class="case-btn px-4 py-2">更多案例 MORE</a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>


        <div class="container-fluid m-0 px-0 position-relative">
            <div class="container-fluid m-0 p-0 position-relative">
                <div class="row no-gutters position-relative">
                    <div class="col-12 bg-cta" style="z-index: 3;"></div>
                    <div class="col-lg-7 or-bg-left">
                    </div>
                    <div class="col-lg-5 position-relative" style="background-color: #1c2022;">
                        <div class="or-bg-right d-none d-lg-block"></div>
                        <div class="inner-content position-relative pl-lg-0 pl-md-5 pl-3" style="z-index: 2;">
                            <div class="text-content px-md-5 px-3 py-5 text-white">
                                <h2 class="font-weight-bold text-white">ORDER ONLINE <br
                                        class="d-block d-l-none"><span>線上下單</span></h2>
                                <p class="text-white">
                                    輕鬆瀏覽各種風格樣式，選擇喜愛的磁磚風格，並在線完成訂單。<br>
                                    從選材設計到施工完成，每一步都簡單便捷，助您打造專屬的理想空間。
                                </p>
                                <a href="{{ route('order_online') }}" class="cta-btn px-4 py-2 mt-3">前往瀏覽 MORE</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row bg-cta-line w-100 p-0 m-0"></div>

                <div class="row no-gutters position-relative">
                    <div class="col-lg-5 position-relative pl-lg-5" style="background-color: #1c2022;">
                        <div class="faq-bg-left d-none d-lg-block"></div>
                        <div class="inner-content position-relative pl-md-5 pl-3" style="z-index: 2;">
                            <div class="text-content pl-md-5 pl-3 pr-md-4 pr-3 py-5 text-white">
                                <h2 class="font-weight-bold">FAQ <span>常見問答</span></h2>
                                <p class="text-white">
                                    這裡整理了一些磁磚工程常見的問題和答案，幫助您更好地了解我們的服<br>
                                    務，如果您有任何其他問題，歡迎隨時聯繫我們。
                                </p>
                                <a href="{{ route('faq') }}" class="cta-btn px-4 py-2 mt-3">前往瀏覽 MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 faq-bg-right">
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
