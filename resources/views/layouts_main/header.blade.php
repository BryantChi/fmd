<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle text-white"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar site-header">

        <a href="https://www.facebook.com/Wade0510/?locale=zh_TW" target="_blank"
            class="d-none d-lg-block">
            <img src="{{asset('assets/images/00-hp/top_fb.png')}}" class="img-fluid2 top-fb-img" alt="">
        </a>

        <div class="container position-relative">

            <div class="row align-items-center">

                <div class="col-11 col-lg-3">
                    <h1 class="mb-0 site-logo p-md-3"><a href="{{ route('index') }}" class="text-white mb-0"><img
                                src="{{asset('assets/images/00-hp/top_logo.svg')}}" class="img-fluid2 logo-img" alt=""></a></h1>
                </div>
                <div class="col-12 col-xl-9 col-lg-8 d-none d-lg-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="{{ Request::is('about') ? 'active' : ''}}"><a href="{{ route('about') }}"><span>FMD優勢</span></a></li>
                            <li class="{{ Request::is('service') ? 'active' : ''}}"><a href="{{ route('service') }}"><span>服務項目</span></a></li>
                            <li class="{{ Request::is('process') ? 'active' : ''}}"><a href="{{ route('process') }}"><span>施作流程</span></a></li>
                            <li class="{{ Request::is('cases*') ? 'active' : ''}}"><a href="{{ route('cases') }}"><span>實績案例</span></a></li>
                            <li class="{{ Request::is('faq') ? 'active' : '' }}"><a href="{{ route('faq') }}"><span>常見問題</span></a></li>
                            <li class="{{ Request::is('order_*') ? 'active' : ''}}"><a href="{{ route('order_online') }}"><span>線上下單</span></a></li>
                        </ul>
                    </nav>
                </div>


                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"
                    style="position: relative; top: 3px;right: 30px;"><a href="#"
                        class="site-menu-toggle js-menu-toggle" style="color: #0d0d0f;"><span
                            class="icon-menu h3"></span></a></div>

            </div>

        </div>

    </header>

</div>
