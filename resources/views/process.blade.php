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
                            <p class="text-uppercase mb-0">Process</p>
                            <h3 class="mb-0 ml-1">施作流程</h3>
                        </div>
                        <p class="content-title-subtxt">
                            磁磚施工是一個技術性極強且涉及多個步驟的過程，每一步都需要細心和精確，才能保證最終的裝修效果，從基層處理到最後的<br>
                            縫隙填充，每一個環節都至關重要，無論是住宅裝修還是商業空間的設計，磁磚施工的品質直接影響整體的美觀性和使用壽命。<br>
                            FMD瓷磚工隊在施作過程中的每個細節都要求嚴格把控，致力為您打造最完美的裝修成果！
                        </p>
                    </div>
                </div>

            </div>

            <div class="container-fluid position-relative">
                <div class="row position-relative mx-lg-5 mx-4 px-lg-4 justify-content-center">
                    <div class="col-md-11 px-0 mx-0 mb-4">
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <div class="row process-item-box position-relative align-items-end m-0 p-0">
                                    <img src="{{ asset('assets/images/03/03n1.png') }}" class="img-fluid prc-step-icon"
                                        alt="">
                                    <div class="col-12 px-0 align-self-start pt-4">
                                        <div class="process-item-content text-white px-5 mb-4 mt-4">
                                            <h4 class="text-center">準備工作</h4>
                                            <p class="mb-0"><img src="{{ asset('assets/images/03/prc_list_icon.jpg') }}"
                                                    class="img-fluid" alt="">
                                                檢查基層：確保施工基層平整、清潔、無裂縫。如果基層不平整，需要先進行修補和平整處理。</p>
                                            <p class="mb-0"><img src="{{ asset('assets/images/03/prc_list_icon.jpg') }}"
                                                    class="img-fluid" alt="">
                                                測量和放線：根據設計圖紙，測量並標記出磁磚的排列位置，確保施工過程中磁磚的排列整齊。</p>
                                        </div>
                                    </div>
                                    <div class="col-12 px-0 pb-3">
                                        <div class="process-item-img">
                                            <img src="{{ asset('assets/images/03/03pic1.png') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="row process-item-box position-relative align-items-end m-0 p-0">
                                    <img src="{{ asset('assets/images/03/03n2.png') }}" class="img-fluid prc-step-icon"
                                        alt="">
                                    <div class="col-12 px-0 align-self-start pt-4">
                                        <div class="process-item-content text-white px-5 mb-4 mt-4">
                                            <h4 class="text-center">基層處理</h4>
                                            <p class="mb-0"><img src="{{ asset('assets/images/03/prc_list_icon.jpg') }}"
                                                    class="img-fluid" alt=""> 清理基層：清除基層表面的灰塵、油污和其他雜物，確保黏貼效果。</p>
                                            <p class="mb-0"><img src="{{ asset('assets/images/03/prc_list_icon.jpg') }}"
                                                    class="img-fluid" alt=""> 塗抹界面劑：在基層上塗抹界面劑，提高磁磚黏結劑的附著力。</p>
                                        </div>
                                    </div>
                                    <div class="col-12 px-0 pb-3">
                                        <div class="process-item-img">
                                            <img src="{{ asset('assets/images/03/03pic2.png') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="row process-item-box position-relative align-items-end m-0 p-0">
                                    <img src="{{ asset('assets/images/03/03n3.png') }}" class="img-fluid prc-step-icon"
                                        alt="">
                                    <div class="col-12 px-0 align-self-start pt-4">
                                        <div class="process-item-content text-white px-5 mb-4 mt-4">
                                            <h4 class="text-center">鋪貼磁磚</h4>
                                            <p class="mb-0"><img src="{{ asset('assets/images/03/prc_list_icon.jpg') }}"
                                                    class="img-fluid" alt="">
                                                鋪設磁磚：按照放線標記，從一個角落開始鋪設磁磚，使用小木槌輕敲磁磚表面，確保其點結牢固，並用水平尺檢查平整度。
                                            </p>
                                            <p class="mb-0"><img src="{{ asset('assets/images/03/prc_list_icon.jpg') }}"
                                                    class="img-fluid" alt=""> 預留縫隙：使用塑料十字架或間隔條預留磁磚之間的縫隙，確保縫隙均勻。</p>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0 pb-3">
                                        <div class="process-item-img">
                                            <img src="{{ asset('assets/images/03/03pic3.png') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="row process-item-box position-relative align-items-end m-0 p-0">
                                    <img src="{{ asset('assets/images/03/03n4.png') }}" class="img-fluid prc-step-icon"
                                        alt="">
                                    <div class="col-12 px-0 align-self-start pt-4">
                                        <div class="process-item-content text-white px-5 mb-4 mt-4 pt-3">
                                            <h4 class="text-center">調整和修整</h4>
                                            <p class="mb-0"><img src="{{ asset('assets/images/03/prc_list_icon.jpg') }}"
                                                    class="img-fluid" alt="">
                                                磁磚調整：在黏結劑未乾前，調整磁磚的排列，確保磁磚之間的縫隙一致，並且表面平整。</p>
                                            <p class="mb-0"><img src="{{ asset('assets/images/03/prc_list_icon.jpg') }}"
                                                    class="img-fluid" alt="">
                                                清理多餘黏結劑：使用濕布清理磁磚表面和縫隙間多餘的黏結劑，防止乾固後難以清理。</p>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0 pb-3">
                                        <div class="process-item-img">
                                            <img src="{{ asset('assets/images/03/03pic4.png') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="row process-item-box position-relative align-items-end m-0 p-0">
                                    <img src="{{ asset('assets/images/03/03n5.png') }}" class="img-fluid prc-step-icon"
                                        alt="">
                                    <div class="col-12 px-0 align-self-start pt-4">
                                        <div class="process-item-content text-white px-5 mb-4 mt-4 pt-3">
                                            <h4 class="text-center">縫隙填充</h4>
                                            <p class="mb-0"><img
                                                    src="{{ asset('assets/images/03/prc_list_icon.jpg') }}"
                                                    class="img-fluid" alt=""> 填充縫隙：使用橡膠抹刀將填縫劑填入磁磚縫隙中，確保填充均勻無空隙。
                                            </p>
                                            <p class="mb-0"><img
                                                    src="{{ asset('assets/images/03/prc_list_icon.jpg') }}"
                                                    class="img-fluid" alt="">
                                                清理表面：在填縫劑稍微乾固後，用濕海綿輕輕擦拭磁磚表面，清理多餘的填縫劑，保持 磁磚表面乾淨。</p>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0 pb-3">
                                        <div class="process-item-img">
                                            <img src="{{ asset('assets/images/03/03pic5.png') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="row process-item-box position-relative align-items-end m-0 p-0">
                                    <img src="{{ asset('assets/images/03/03n6.png') }}" class="img-fluid prc-step-icon"
                                        alt="">
                                    <div class="col-12 px-0 align-self-start pt-4">
                                        <div class="process-item-content text-white px-5 mb-4 mt-4 pt-3">
                                            <h4 class="text-center">養護</h4>
                                            <p class="mb-0"><img
                                                    src="{{ asset('assets/images/03/prc_list_icon.jpg') }}"
                                                    class="img-fluid" alt=""> 養護時間：填縫完成後，讓磁磚和填縫劑自然乾固，通常需要24小時。</p>
                                            <p class="mb-0"><img
                                                    src="{{ asset('assets/images/03/prc_list_icon.jpg') }}"
                                                    class="img-fluid" alt="">
                                                定期檢查：在養護期間，避免磁磚表面受力或被污染，定期檢查磁磚黏結和填縫情況。</p>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0 pb-3">
                                        <div class="process-item-img">
                                            <img src="{{ asset('assets/images/03/03pic6.png') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-md-11 px-0 mx-0 mb-4 position-relative process-item-last" style="z-index: 5;">
                        <div class="row process-item-box2 mx-lg-1 position-relative">
                            <img src="{{ asset('assets/images/03/03n7.png') }}" class="img-fluid prc-step-icon"
                                alt="">
                            <div class="col-lg-6 py-3 px-lg-52 align-self-center position-relative">
                                <div class="process-item-content2 text-white px-5 mb-4 mt-4 pt-3">
                                    <h4 class="text-center">最後清理</h4>
                                    <p class="mb-0"><img src="{{ asset('assets/images/03/prc_list_icon.jpg') }}"
                                            class="img-fluid" alt=""> 清理現場：將施工現場的垃圾和廢料清理乾淨，確保施工區域整潔。</p>
                                    <p class="mb-0"><img src="{{ asset('assets/images/03/prc_list_icon.jpg') }}"
                                            class="img-fluid" alt=""> 檢查驗收：對整體施工效果進行檢查，確保磁磚排列整齊，黏結牢固，無空鼓現象。</p>
                                </div>
                            </div>
                            <div class="col-lg-6 m-0 p-0 pr-lg-3 pb-lg-0 pb-3">
                                <div class="process-item-img2">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="container-fluid mx-0 px-0 position-relative">
                <div class="bg-g2"></div>
                <div class="line-more"></div>
                <div class="row justify-content-center">
                    <div class="col-lg-7 process-more-bg">

                    </div>
                    <div class="col-lg-5 px-lg-5 px-3 mb-5 process-more-content">
                        <h4>技術超群，安心滿分<br>精工巧匠，品質至上</h4>
                        <p>
                            FMD磁磚工隊堅持以嚴謹、專業的施作流程，確保每個項目都能達到高標準。<br>
                            從需求分析到最終驗收，逐步進行精確的規劃與施工，每一步都經過細心打磨，呈現完美 的磁磚鋪設效果。<br>
                            無論是小型空間還是大型工程，我們都提供最高品質的施工體驗，讓您享受專業且放心的服務。
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
