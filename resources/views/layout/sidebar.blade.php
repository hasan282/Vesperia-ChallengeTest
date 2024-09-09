@php
    $brandImage = '/image/icon/icon-64.png';

    $userImage = 'default/USER000M.jpg';
    $userName = 'Hasan Abdullah';
@endphp

<aside class="main-sidebar sidebar-dark-info elevation-4">

    <a href="/" class="brand-link link-transparent">
        <img src="{{ $brandImage }}" alt="" class="brand-image">
        <span class="brand-text font-weight-lighter"><strong>Submission</strong> Test</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/image/{{ $userImage }}" class="img-circle elevation-1" alt="">
            </div>
            <div class="info">
                <a href="#user" class="d-block">{{ $userName }}</a>
            </div>
        </div>
        <nav class="mt-2 pb-5">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="/operational-risk" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Risiko Operasional</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/damage-loss" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Kerugian</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
