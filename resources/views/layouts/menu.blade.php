<li class="nav-item mb-4">
    <a href="{{ route('index') }}" target="_blank" class="nav-link">
        <span class="h5 mr-2 brand-image"><i class="fas fa-external-link-alt"></i></span>
        <p class="h5"> 瀏覽網站</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.adminUsers.index') }}"
        class="nav-link {{ Request::is('admin/adminUsers*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-users-cog"></i></span>
        <p> 管理員</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.seoSettings.index') }}"
       class="nav-link {{ Request::is('admin/seoSettings*') ? 'active' : '' }}">
       <span class="mr-2 brand-image"><i class="fas fa-search"></i></span>
        <p>Seo設定</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.caseInfos.index') }}"
       class="nav-link {{ Request::is('admin/caseInfos*') ? 'active' : '' }}">
       <span class="mr-2 brand-image"><i class="fas fa-info-circle"></i></span>
        <p>實績案例</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.planInfos.index') }}"
       class="nav-link {{ Request::is('admin/planInfos*') ? 'active' : '' }}">
       <span class="mr-2 brand-image"><i class="fas fa-paint-brush"></i></span>
        <p>方案管理</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admin.orderInfos.index') }}"
       class="nav-link {{ Request::is('admin/orderInfos*') ? 'active' : '' }}">
       <span class="mr-2 brand-image"><i class="fas fa-money-check"></i></span>
        <p>訂單紀錄</p>
    </a>
</li>


