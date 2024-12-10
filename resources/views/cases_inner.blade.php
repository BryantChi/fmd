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
                            <p class="text-uppercase mb-0">CASES</p>
                            <h3 class="mb-0 ml-1">實績案例</h3>
                        </div>
                        <p class="content-title-subtxt">
                            FMD磁磚工隊以卓越的技術和專業的服務，成功完成了眾多優質磁磚工程項目，贏得客戶的一致好評。
                        </p>
                    </div>
                </div>

            </div>

            <div class="container-fluid position-relative">
                <div class="row position-relative mx-lg-5 mx-4 px-lg-4 justify-content-center">
                    <div class="col-md-11 px-0 mx-0 mb-4">
                        <div class="row">
                            <div class="col-lg-3 mb-5 position-relative">
                                <div class="cases-category position-relative">
                                    <div class="cases-category-mask"></div>
                                    <div
                                        class="cases-category-title position-relative d-flex justify-content-between align-items-center px-3">
                                        <h5 class="mb-0 ml-1">案例分類</h3>
                                            <div class="cases-category-item-arrow">
                                                <span class="cases-category-item-arrow-d"><img src="images/05/05close.png"
                                                        alt=""></span>
                                                <span class="cases-category-item-arrow-p d-none"><img
                                                        src="images/05/05open.png" alt=""></span>
                                            </div>
                                    </div>
                                    <div class="cases-category-list position-relative px-3">
                                        <div class="cases-category-item">
                                            <a href="" class="cases-category-link">全部案例</a>
                                        </div>
                                        <div class="cases-category-item">
                                            <a href="" class="cases-category-link c-active">分類1</a>
                                        </div>
                                        <div class="cases-category-item">
                                            <a href="" class="cases-category-link">分類2</a>
                                        </div>
                                        <div class="cases-category-item">
                                            <a href="" class="cases-category-link">分類3</a>
                                        </div>
                                        <div class="cases-category-item">
                                            <a href="" class="cases-category-link">分類4</a>
                                        </div>
                                        <div class="cases-category-item">
                                            <a href="" class="cases-category-link">分類5</a>
                                        </div>
                                        <div class="cases-category-item">
                                            <a href="" class="cases-category-link">分類6</a>
                                        </div>
                                        <div class="cases-category-item">
                                            <a href="" class="cases-category-link">分類7</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-9">
                                <div class="case-inner-title">
                                    <h3 class="mb-0 text-center">7月案例1</h3>
                                </div>

                                <div class="case-inner-content pt-3 mb-4 px-lg-auto px-3">
                                    <div class="d-flex justify-content-end">
                                        <p class="mr-3 cases-info">分類1|觀看人次：154</p>
                                    </div>
                                    <div class="row mt-4 justify-content-center">
                                        <div class="col-lg-11 mb-3">
                                            <img src="images/04/04pic.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-lg-11 mb-3">
                                            <p>
                                                這個住宅浴室整修項目中，我們重新設計並鋪設了地磚和壁磚，同時進行了全面的防水處理。<br>
                                                我們選用防滑耐磨的磁磚，並精心設計了淋浴區和浴缸周邊的磁磚拼貼，確保浴室既美觀又實用，客戶對最終效果非常滿意。<br><br>

                                                FMD將繼續以客戶滿意為目標，提供高品質的服務，為更多的項目注入我們的專業技術和熱情。<br>
                                                立即聯繫我們，了解更多關於我們的服務和案例，共同創造美好空間！
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center my-5">
                                    <a href="{{ route('cases') }}" class="case-btn px-4 py-2">
                                        < 返回列表</a>
                                </div>


                            </div>

                        </div>
                    </div>

                </div>
            </div>


        </div>


    </div>
@endsection

@push('page_scripts')
    <script>
        $(function() {
            $('.cases-category-title').on('click', function() {
                $(this).parent().find('.cases-category-list').slideToggle();
                $(this).find('.cases-category-item-arrow-p').toggleClass('d-none');
                $(this).find('.cases-category-item-arrow-d').toggleClass('d-none');
            })
            if ($(window).width() < 992) {
                $('.cases-category-title').click();
            }
        });
    </script>
@endpush
