@extends('layouts_main.master')

@section('content')
    <div id="main" style="overflow: hidden;">
        <div class="container-fluid m-0 pt-5 px-0 position-relative" style="overflow: hidden;">
            <div class="bg-g"></div>
            <div class="bg-f"></div>
            <div class="container-fluid pt-md-5 pt-2 position-relative">
                <div class="row mx-lg-5 justify-content-center">
                    <div class="col-11 mb-4">
                        <div class="content-title d-flex align-items-center mb-3">
                            <p class="text-uppercase mb-0">SERVICE</p>
                            <h3 class="mb-0 ml-1">服務項目</h3>
                        </div>
                        <p class="content-title-subtxt">
                            FMD磁磚工序提供全方位的磁磚施工服務，無論是新建磁磚鎮設、地磚修補，這是浴室整修和防水工程，我們的專業團隊都根<br>據您的需求提供精準、耐用的解決方案。
                        </p>
                    </div>
                </div>

                <!-- <div class="row position-relative mx-lg-5 px-lg-3 px-4 justify-content-center d-none">

                    <div class="col-lg-5 position-relative">
                        <div class="position-relative">
                            <img src="{{asset('assets/images/01/01pic1.jpg')}}" class="img-fluid pg-about-img" alt="">
                            <div class="pg-about-img-mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 position-relative">
                        <div class="content-bg"></div>
                        <div class="highlight-box mx-3">
                            <h5 class="highlight-box-title">注意施工細節・空間精準施作</h5>
                        </div>
                        <div class="content mt-4 px-3">
                            <p>
                                FMD磚砌工隊是專精於磁磚與泥作工程團隊，為客戶提供高品質、全面的建築裝修服務。<br>
                                無論是新建磁磚工程還是舊磁磚修補，我們致力於精湛的技術和豐富的經驗，為您的空間注入新的活力和機能。
                                我們深知每一個工程對客戶的重要性，無論項目大小，我們都用心對待，讓每一個細節都完美呈現。
                            </p>
                            <p>
                                FMD團隊由一群充滿熱情和專業素養的技術人員組成，在磁磚和泥作領域有著多年實務經驗。<br>
                                我們不僅重視先進的施工技術和設備，還注重與客戶的溝通和協作，施作每一個項目時都根據客戶的需求和期望進行。<br>
                                我們相信，優質的服務來自於對細節的把握和對品質的追求。
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>

            <div class="container-fluid position-relative">
                <div class="row position-relative mx-lg-5 mx-4 px-lg-4 justify-content-center">
                    <div class="col-md-11 px-0 mx-0 mb-4">
                        <div class="row service-item-box">
                            <div class="col-lg-5 servicebox-item-bg-01 m-0 p-0">
                                <img src="{{asset('assets/images/02/02pic1.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-7 py-3 px-lg-5 align-self-center servicebox-item-content">
                                <div class="d-flex servicebox-item-content-title mb-4">
                                    <img src="{{asset('assets/images/02/ser_icon01.png')}}" class="img-fluid" alt="">
                                    <div class="">
                                        <p class="mb-0">Service 01</p>
                                        <h5 class="text-white">新建磁磚・泥作工程</h5>
                                    </div>
                                </div>
                                <p>
                                    <span>・</span>FMD團隊專注於各類新建磁磚工程，無論是住宅、商業空間還是公共建設，都能根據您的需求設計並安裝高品質的磁磚，打造美觀實用的空間。
                                </p>
                                <p>
                                    <span>・</span>泥作工程涵蓋地基施工、牆體砌築、混凝土澆築等多方面，保證每一個細節都符合建築標準和您的需求。
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-11 px-0 mx-0 mb-4">
                        <div class="row service-item-box">
                            <div class="col-lg-5 servicebox-item-bg-02 m-0 p-0">
                                <img src="{{asset('assets/images/02/02pic2.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-7 py-3 px-lg-5 align-self-center servicebox-item-content">
                                <div class="d-flex servicebox-item-content-title mb-4">
                                    <img src="{{asset('assets/images/02/ser_icon02.png')}}" class="img-fluid" alt="">
                                    <div class="">
                                        <p class="mb-0">Service 02</p>
                                        <h5 class="text-white">地磚爆裂・地磚修補</h5>
                                    </div>
                                </div>
                                <p>
                                    <span>・</span>地磚爆裂不僅影響美觀，還可能造成安全隱患，FMD磁磚工隊的專業技術人員能迅速處理地磚爆裂問題，恢復地面平整美觀。
                                </p>
                                <p>
                                    <span>・</span>無論是小範圍的地磚破損還是大面積的修補工程，我們都能提供精確的修補服務，讓您的地面恢復如新。
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-11 px-0 mx-0 mb-4">
                        <div class="row service-item-box">
                            <div class="col-lg-5 servicebox-item-bg-03 m-0 p-0">
                                <img src="{{asset('assets/images/02/02pic3.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-7 py-3 px-lg-5 align-self-center servicebox-item-content">
                                <div class="d-flex servicebox-item-content-title mb-4">
                                    <img src="{{asset('assets/images/02/ser_icon03.png')}}" class="img-fluid" alt="">
                                    <div class="">
                                        <p class="mb-0">Service 03</p>
                                        <h5 class="text-white">壁磚補修・地坪粉刷</h5>
                                    </div>
                                </div>
                                <p>
                                    <span>・</span>壁磚的破損或脫落影響室內外的整體美觀和結構穩定。我們提供專業的壁磚補修服務，確保修補後的磚牆堅固耐用。
                                </p>
                                <p>
                                    <span>・</span>FMD瓷磚工隊的地坪粉刷服務包括地面打磨、平整和塗刷，使用高品質材料和先進工藝,提供耐用美觀的地坪解決方案。
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-11 px-0 mx-0 mb-4">
                        <div class="row service-item-box">
                            <div class="col-lg-5 servicebox-item-bg-04 m-0 p-0">
                                <img src="{{asset('assets/images/02/02pic4.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-7 py-3 px-lg-5 align-self-center servicebox-item-content">
                                <div class="d-flex servicebox-item-content-title mb-4">
                                    <img src="{{('assets/images/02/ser_icon04.png')}}" class="img-fluid" alt="">
                                    <div class="">
                                        <p class="mb-0">Service 04</p>
                                        <h5 class="text-white">浴室整修・防水工程</h5>
                                    </div>
                                </div>
                                <p>
                                    <span>・</span>從小範圍的修補到整體的翻新，浴室整修服務包括管道改造、防水處理、磁磚更換等，打造現代舒適的衛浴空間。
                                </p>
                                <p>
                                    <span>・</span>防水處理是建築工程的重要環節。我們提供全面的防水工程服務，使用優質防水材料和專業技術，徹底解決漏水問題，保護您的建築結構。
                                </p>
                            </div>

                        </div>
                    </div>



                    <div class="col-md-11 px-0 mx-0 mb-4 position-relative service-item-last" style="z-index: 5;">
                        <div class="row service-item-box2">
                            <div class="col-lg-5 servicebox-item-bg-05 m-0 p-0">
                                <img src="{{asset('assets/images/02/02pic5.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-7 py-3 px-lg-5 align-self-center servicebox-item-content">
                                <div class="d-flex servicebox-item-content-title mb-4">
                                    <img src="{{asset('assets/images/02/ser_icon05.png')}}" class="img-fluid" alt="">
                                    <div class="">
                                        <p class="mb-0">Service 05</p>
                                        <h5 class="text-white">工程承包一站式服務</h5>
                                    </div>
                                </div>
                                <p>
                                    <span>・</span>FMD提供全面的工程承包服務，涵蓋各類磁磚鋪設、修補和防水工程，讓您不需煩惱各項工程的協調與管理。
                                    從設計、材料選購到施工完工，全程由專業團隊負責，確保每個細節都完美呈現。<br>
                                    無論是住宅、商業空間還是公共設施，FMD磁磚工隊的工程承包一站式服務都能提供您最優質的解決方案。
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="container-fluid mx-0 px-0 position-relative">
                <div class="bg-g2"></div>
                <div class="line-more"></div>
                <div class="row justify-content-center">
                    <div class="col-lg-7 service-more-bg">

                    </div>
                    <div class="col-lg-5 px-lg-5 px-3 mb-5 service-more-content">
                        <h4>通過專業的技術和熱忱的服務，<br>為您打造理想中的美麗空間！</h4>
                        <p>
                            FMD磁磚工隊提供全方位的磁磚和相間建築裝修服務，無論是新建磁磚、地磚爆裂修補，還是防水工程和浴室整修，我們都能以專業的技術和豐富的經驗，為您打造理想中的完美空間。
                        </p>
                        <a href="{{ route('cases') }}" class="cta-btn px-4 py-2">實績案例 MORE</a>
                    </div>

                </div>
            </div>

        </div>

        <!-- <div class="container-fluid m-0 pb-5 px-0 position-relative" style="overflow: hidden;z-index: 2;">
            <div class="bg-g"></div>

        </div> -->

    </div>
@endsection
