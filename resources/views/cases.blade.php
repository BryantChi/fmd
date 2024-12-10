@extends('layouts_main.master')

@section('content')
    <div id="main" style="overflow: hidden;">
        <div class="container-fluid m-0 pt-5 px-0 position-relative" style="overflow: hidden;">
            <div class="bg-g"></div>
            <div class="bg-f"></div>
            <div class="container-fluid pt-md-5 pt-2 position-relative">
                <div class="row mx-lg-5 justify-content-center">
                    <div class="col-11 mb-lg-4">
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
                        <div class="row pt-lg-5 pt-0">
                            <div class="col-md-12 mb-3 text-right">
                                <span class="cases-count">共有12件實績案例</span>
                            </div>
                            <div class="col-lg-3 mb-5 position-relative">
                                <div class="cases-category position-relative">
                                    <div class="cases-category-mask"></div>
                                    <div
                                        class="cases-category-title position-relative d-flex justify-content-between align-items-center px-3">
                                        <h5 class="mb-0 ml-1">案例分類</h3>
                                            <div class="cases-category-item-arrow">
                                                <span class="cases-category-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                        alt=""></span>
                                                <span class="cases-category-item-arrow-p d-none"><img
                                                        src="{{asset('assets/images/05/05open.png')}}" alt=""></span>
                                            </div>
                                    </div>
                                    <div class="cases-category-list position-relative px-3">
                                        <div class="cases-category-item">
                                            <a href="" class="cases-category-link c-active">全部案例</a>
                                        </div>
                                        <div class="cases-category-item">
                                            <a href="" class="cases-category-link">分類1</a>
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
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-6 mb-3 text-center">
                                        <a href="{{ route('cases_inner') }}">
                                            <img src="{{ asset('assets/images/00-hp/case_pic1.jpg') }}" class="img-fluid case-img" alt="">
                                            <h5 class="mt-3 mb-1 case-name">7月案例1</h5>
                                            <p class="see-count">觀看人次：154</p>
                                        </a>

                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 mb-3 text-center">
                                        <img src="{{ asset('assets/images/00-hp/case_pic2.jpg') }}" class="img-fluid case-img" alt="">
                                        <h5 class="mt-3 mb-1 case-name">7月案例2</h5>
                                        <p class="see-count">觀看人次：154</p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 mb-3 text-center">
                                        <img src="{{ asset('assets/images/00-hp/case_pic3.jpg') }}" class="img-fluid case-img" alt="">
                                        <h5 class="mt-3 mb-1 case-name">7月案例3</h5>
                                        <p class="see-count">觀看人次：154</p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 mb-3 text-center">
                                        <img src="{{ asset('assets/images/00-hp/case_pic4.jpg') }}" class="img-fluid case-img" alt="">
                                        <h5 class="mt-3 mb-1 case-name">7月案例1</h5>
                                        <p class="see-count">觀看人次：154</p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 mb-3 text-center">
                                        <img src="{{ asset('assets/images/00-hp/case_pic5.jpg') }}" class="img-fluid case-img" alt="">
                                        <h5 class="mt-3 mb-1 case-name">7月案例2</h5>
                                        <p class="see-count">觀看人次：154</p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 mb-3 text-center">
                                        <img src="{{ asset('assets/images/00-hp/case_pic6.jpg') }}" class="img-fluid case-img" alt="">
                                        <h5 class="mt-3 mb-1 case-name">7月案例3</h5>
                                        <p class="see-count">觀看人次：154</p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 mb-3 text-center">
                                        <img src="{{ asset('assets/images/00-hp/case_pic7.jpg') }}" class="img-fluid case-img" alt="">
                                        <h5 class="mt-3 mb-1 case-name">7月案例1</h5>
                                        <p class="see-count">觀看人次：154</p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 mb-3 text-center">
                                        <img src="{{ asset('assets/images/00-hp/case_pic8.jpg') }}" class="img-fluid case-img" alt="">
                                        <h5 class="mt-3 mb-1 case-name">7月案例2</h5>
                                        <p class="see-count">觀看人次：154</p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 mb-3 text-center">
                                        <img src="{{ asset('assets/images/00-hp/case_pic1.jpg') }}" class="img-fluid case-img" alt="">
                                        <h5 class="mt-3 mb-1 case-name">7月案例3</h5>
                                        <p class="see-count">觀看人次：154</p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 mb-3 text-center">
                                        <img src="{{ asset('assets/images/00-hp/case_pic2.jpg') }}" class="img-fluid case-img" alt="">
                                        <h5 class="mt-3 mb-1 case-name">7月案例1</h5>
                                        <p class="see-count">觀看人次：154</p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 mb-3 text-center">
                                        <img src="{{ asset('assets/images/00-hp/case_pic3.jpg') }}" class="img-fluid case-img" alt="">
                                        <h5 class="mt-3 mb-1 case-name">7月案例2</h5>
                                        <p class="see-count">觀看人次：154</p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 mb-3 text-center">
                                        <img src="{{ asset('assets/images/00-hp/case_pic4.jpg') }}" class="img-fluid case-img" alt="">
                                        <h5 class="mt-3 mb-1 case-name">7月案例3</h5>
                                        <p class="see-count">觀看人次：154</p>
                                    </div>
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
