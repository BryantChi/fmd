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
                                            <a href="{{ route('cases') }}" class="cases-category-link {{ $categoryId == null ? 'c-active' : '' }}">全部案例</a>
                                        </div>
                                        @foreach ($categoryInfo as $category)
                                        <div class="cases-category-item">
                                            <a href="{{ route('cases', $category->id) }}" class="cases-category-link {{ $category->id == $categoryId ? 'c-active' : '' }}">{{ $category->name }}</a>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-9">
                                <div class="case-inner-title">
                                    <h3 class="mb-0 text-center">{{ $caseInfo->case_title }}</h3>
                                </div>

                                <div class="case-inner-content pt-3 mb-4 px-lg-auto px-3">
                                    <div class="d-flex justify-content-end">
                                        <p class="mr-3 cases-info">{{ App\Models\Admin\CaseCategoryInfo::find($caseInfo->category)->value('name') }}|觀看人次：{{ $caseInfo->case_pv }}</p>
                                    </div>
                                    <div class="row mt-4 justify-content-center">
                                        {{-- <div class="col-lg-11 mb-3">
                                            <img src="{{ env('APP_URL', 'https://fmd.tw') . '/uploads/' . $caseInfo->case_front_image }}" class="img-fluid w-100" alt="">
                                        </div> --}}
                                        <div class="col-lg-11 mb-3">
                                            {!! $caseInfo->case_content !!}
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
