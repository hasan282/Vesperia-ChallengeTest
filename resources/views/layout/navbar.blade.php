@php
    $userImage = 'default/USER000M.jpg';
    $userName = 'Hasan Abdullah';
    $userSubInfo = 'Administrator';
@endphp

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#dashboard" class="nav-link">
                <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
            </a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="/image/{{ $userImage }}" class="user-image img-circle elevation-1" alt="">
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <li class="user-header">
                    <img src="/image/{{ $userImage }}" class="img-circle elevation-2" alt="">
                    <p>{{ $userName }}</p>
                    <small>{{ $userSubInfo }}</small>
                </li>
                <li class="user-footer">
                    <a href="#setting" class="btn btn-default btn-flat">
                        <i class="fas fa-cog mr-1"></i>Settings
                    </a>
                    <a href="/logout" class="btn btn-default btn-flat float-right">
                        <i class="fas fa-sign-out-alt mr-1"></i>Logout
                    </a>
                </li>
            </ul>
        </li>
    </ul>

</nav>
