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
                            <p class="text-uppercase mb-0">About</p>
                            <h3 class="mb-0 ml-1">FMD優勢</h3>
                        </div>
                    </div>
                </div>

                <div class="row position-relative mx-lg-5 px-lg-3 px-4 justify-content-center">
                    <!-- Image Column -->
                    <div class="col-lg-5 position-relative">
                        <div class="position-relative">
                            <img src="{{asset('assets/images/01/01pic1.jpg')}}" class="img-fluid pg-about-img" alt="">
                            <div class="pg-about-img-mask"></div>
                        </div>
                    </div>

                    <!-- Text Content Column -->
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
                </div>
            </div>

            <div class="container-fluid px-0 mx-0 pt-lg-auto pt-3 position-relative">
                <img src="{{asset('assets/images/01/01bg.svg')}}" class="img-fluid slogan-bg" alt="">
                <div class="container-fluid position-relative">
                    <div class="row mx-lg-5 my-3 justify-content-center">
                        <div class="col-11">
                            <p class="slogan">
                                PROFESSIONAL<br>
                                高難度磁磚鋪設，就交給FMD！
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid position-relative">
                <div class="row position-relative mx-lg-5 mx-4 px-lg-4 justify-content-center">
                    <div class="col-md-11 px-0 mx-0 mb-4">
                        <div class="row about-item-box">
                            <div class="col-lg align-self-center px-lg-auto px-4">
                                <div class="row">
                                    <div class="col-auto about-item-num pt-3 pl-lg-5 pl-3 pr-3">
                                        <p class="text-uppercase num-txt">HIGH<br>DIFFICULTY</p>
                                        <p class="num">1</p>
                                    </div>
                                    <div class="col-lg py-3 px-3">
                                        <h4>難貼難做磁磚鋪設</h4>
                                        <p>
                                            FMD磁磚工隊的團隊專精於難貼難做磁磚鋪設，不論是複雜的花紋設計，還是高難度的空間結構，我們都能迎刃而解。<br>
                                            我們堅信，經過細緻的計劃與精準的施工，就能達到完美的效果。<br>
                                            透過我們的專業技術，確保每一片磁磚都能穩固貼合，持久耐用。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg aboutbox-item-bg-01 m-0 p-0">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-11 px-0 mx-0 mb-4">
                        <div class="row about-item-box">
                            <div class="col-lg aboutbox-item-bg-02 m-0 p-0">
                            </div>
                            <div class="col-lg align-self-center px-lg-auto px-4">
                                <div class="row">
                                    <div class="col-auto about-item-num pt-3 pl-lg-5 pl-3 pr-3">
                                        <p class="text-uppercase num-txt">HIGH<br>DIFFICULTY</p>
                                        <p class="num">2</p>
                                    </div>
                                    <div class="col-lg py-3 px-3">
                                        <h4>多角類型磁磚鋪設</h4>
                                        <p>
                                            現代設計趨勢不斷演變，多角類型磁磚的運用越來越廣泛，FMD磁磚工隊擁有豐富的經驗，能夠熟練處理各種形狀和大小的磁磚鋪設。我們的團隊善於創新，能根據您的需求和空間特點，設計出獨特的鋪設方案；我們精心挑選高品質材料，並運用精湛的技藝，打造出既美觀又實用的地面和牆面。
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-11 px-0 mx-0 mb-4 position-relative about-item-last" style="z-index: 5;">
                        <div class="row about-item-box2">
                            <div class="col-lg align-self-center px-lg-auto px-4">
                                <div class="row">
                                    <div class="col-auto about-item-num pt-3 pl-lg-5 pl-3 pr-3">
                                        <p class="text-uppercase num-txt">HIGH<br>DIFFICULTY</p>
                                        <p class="num">3</p>
                                    </div>
                                    <div class="col-lg py-3 px-3">
                                        <h4>馬賽克藝術拼貼</h4>
                                        <p>
                                            馬賽克藝術拼貼是一種極具藝術感的裝飾方式，能為您的空間增添無限風采。FMD磁磚工隊擅長將各種顏色和材質的馬賽克磁磚拼貼成獨特的圖案和畫面。我們的專業設計師會根據您的喜好和風格，量身打造專屬的藝術拼貼，我們相信，每一個細節都至關重要，從選材到拼貼，每一步驟都力求完美，為您創造出驚豔的視覺效果。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg aboutbox-item-bg-03 m-0 p-0">
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="container-fluid mx-0 px-0 position-relative">
                <div class="bg-g2"></div>
                <div class="line-more"></div>
                <div class="row justify-content-center">
                    <div class="col-lg-5 px-lg-5 px-3 mb-5 about-more-content">
                        <h4>無微不至的服務，無可挑剔的品質！<br>FMD磁磚工隊，您的最佳選擇。</h4>
                        <p>
                            選擇FMD磁磚工隊，讓我們用專業和熱情，為您打造夢想中的理想空間。
                            無論是住宅還是商業空間，我們都能以卓越的工藝和服務，實現您的願景。
                        </p>
                        <a href="{{ route('service') }}" class="cta-btn px-4 py-2">服務項目 MORE</a>
                    </div>
                    <div class="col-lg-7 about-more-bg">

                    </div>
                </div>
            </div>

        </div>

        <!-- <div class="container-fluid m-0 pb-5 px-0 position-relative" style="overflow: hidden;z-index: 2;">
            <div class="bg-g"></div>

        </div> -->

    </div>
@endsection
