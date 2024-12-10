@extends('layouts_main.master')

@section('content')
    <div id="main" style="overflow: hidden;">
        <div class="container-fluid m-0 pt-5 px-0 position-relative" style="overflow: hidden;">
            <div class="bg-g"></div>
            <div class="bg-f"></div>
            <div class="container-fluid pt-md-5 pt-2 position-relative">
                <div class="row mx-lg-5 justify-content-center" id="pg-pagetitle">
                    <div class="col-11 mb-4">
                        <div class="content-title d-flex align-items-center mb-3">
                            <p class="text-uppercase mb-0">FAQ</p>
                            <h3 class="mb-0 ml-1">常見問題</h3>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container-fluid position-relative">
                <div class="row position-relative mx-lg-5 mx-4 px-lg-4 justify-content-center">
                    <div class="col-lg-11 px-3 mx-0 mb-5">
                        <div class="row faq-top-content">
                            <div class="col-lg-6 mx-0 align-self-lg-center align-self-end">
                                <p>
                                    FMD了解客戶在進行磁磚施工時可能會有許多疑問，因此我們整理了常見問題為您提供詳細解答。<br>
                                    無論您是首次施工還是尋求專業修補，這些常見問答將幫助您了解我們的專業服務；若您仍有其他疑問歡迎隨時聯繫我們！
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-11 px-0 mx-0 mb-4">

                        <div class="row ">
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q1.</span>磁磚工程需要多長時間完成？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            磁磚工程的時間取決於項目的規模和複雜性。小型項目如一間浴室或廚房的磁磚鋪設通常需要幾天到一周的時間，而較大的項目如整個房屋或商業空間可能需要數周甚至更長。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q2.</span>磁磚施工前需要做哪些準備工作？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            施工前需要檢查和準備基層，包括清理基層表面的灰塵和雜物，修補裂縫和不平整的地方，確保基層乾燥並塗抹界面劑以提高黏結力。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q3.</span>磁磚可以鋪在任何基層上嗎？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            磁磚不能鋪在所有基層上。基層必須穩固、平整、乾燥且無裂縫。常見的合適基層包括混凝土、水泥砂漿層、石膏板等。如果基層不符合要求，需要進行相應處理。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q4.</span>磁磚施工後多久可以使用？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            磁磚施工完成後，通常需要24-48小時的養護時間，讓黏結劑和填縫劑完全乾固。在這段時間內，避免在磁磚表面行走或施加壓力。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q5.</span>如何清潔和保養磁磚？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            清潔磁磚時，建議使用中性清潔劑和軟布，避免使用酸性或堿性清潔劑，以防損壞磁磚表面和填縫劑。定期清潔和檢查磁磚和填縫劑的狀況，有損壞及時修補。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q6.</span>磁磚適合用於哪些區域？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            磁磚廣泛應用於廚房、浴室、陽台、客廳和商業空間。針對不同的區域，選擇適合的磁磚類型，例如防滑磚、耐磨磚等，以滿足特定需求。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q7.</span>防水工程在磁磚施工中的重要性是什麼？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            防水工程在浴室、廚房和陽台等濕區域尤為重要。合適的防水處理可以防止水滲透到結構層，避免牆體和地面的潮濕和發霉問題，延長建築物的使用壽命。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q8.</span>地磚爆裂的原因有哪些？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            地磚爆裂通常是由於基層不穩定、黏結劑不當、溫度變化過大或重物撞擊造成的。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q9.</span>如何修復地磚爆裂？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            需要移除破損地磚，清理基層，重新塗抹黏結劑並鋪設新地磚，確保縫隙均勻並填充縫隙劑。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q10.</span>什麼情況下需要修補地磚？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            地磚出現破損、鬆動、空鼓或表面磨損嚴重時需要修補。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q11.</span>地磚修補的步驟是什麼？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            修補地磚時，需移除損壞地磚，清理基層，重新鋪設新地磚，並填充縫隙劑。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q12.</span>壁磚補修需要多長時間？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            補修壁磚的時間取決於損壞範圍和數量。小範圍的修補通常需要幾個小時到一天的時間。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q13.</span>壁磚補修的步驟有哪些？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            步驟包括移除損壞的壁磚，清理基層，重新塗抹黏結劑，鋪設新壁磚並填縫。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q14.</span>地坪粉刷前需要做哪些準備？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            需要清理地面，修補裂縫和平整表面，確保無灰塵和雜物。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q15.</span>地坪粉刷後需要多久才能使用？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            通常需要24到48小時的乾燥時間，具體時間取決於使用的材料和環境濕度。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q16.</span>泥作工程包括哪些項目？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            泥作工程包括牆體砌築、地基施工、混凝土澆築、抹灰等。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q17.</span>泥作工程的施工周期是多久？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            施工周期取決於項目的規模和複雜性，小型工程可能需要幾天，而大型工程可能需要數週或更長。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q18.</span>浴室整修包括哪些內容？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            浴室整修包括磁磚更換、防水處理、管道改造、設備安裝等。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q19.</span>浴室整修需要多長時間？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            整修浴室通常需要1到2週的時間，具體時間取決於工程量和複雜程度。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q20.</span>防水工程在什麼情況下需要進行？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            在建築新建、改建或發現滲漏問題時需要進行防水工程。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q21.</span>防水工程的步驟是什麼？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            步驟包括基層清理、塗抹防水材料、防水層檢查和保護層施工。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q22.</span>FMD瓷磚工隊承包的工程類型有哪些？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            我們承包各類建築裝修工程，包括磁磚施工、泥作工程、防水工程、地坪處理等多方面工程，無論您有何需求，我們都能提供專業的解決方案。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="faq-item-box">
                                    <div class="faq-item-q d-flex justify-content-between align-items-center">
                                        <h5><span class="faq-item-q-num">Q23.</span>工程承包的流程是什麼？</h5>
                                        <span class="faq-item-arrow-d"><img src="{{asset('assets/images/05/05close.png')}}"
                                                alt=""></span>
                                        <span class="faq-item-arrow-p d-none"><img src="{{asset('assets/images/05/05open.png')}}"
                                                alt=""></span>
                                    </div>
                                    <div class="faq-item-line"></div>
                                    <div class="faq-item-a">
                                        <p>
                                            流程包括需求溝通、方案設計、報價、簽訂合同、施工、驗收和售後服務。
                                        </p>
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
            $.each($('.faq-item-box'), function(i, v) {
                $(this).find('.faq-item-q').on('click', function() {
                    // 關閉所有其他的 .faq-item-a 和重設箭頭狀態
                    $('.faq-item-box').not($(this).parent()).find('.faq-item-a').slideUp();
                    $('.faq-item-box').not($(this).parent()).find('.faq-item-arrow-p').removeClass(
                        'd-none');
                    $('.faq-item-box').not($(this).parent()).find('.faq-item-arrow-d').addClass(
                        'd-none');

                    // 切換當前項目的狀態
                    $(this).parent().find('.faq-item-a').slideToggle();
                    $(this).find('.faq-item-arrow-p').toggleClass('d-none');
                    $(this).find('.faq-item-arrow-d').toggleClass('d-none');
                })
            })
        })
    </script>
@endpush
