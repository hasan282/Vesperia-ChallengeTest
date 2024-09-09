@extends('layout.basic')

@section('body_class', 'sidebar-mini layout-fixed')

@section('div_class', 'wrapper')

@section('body')

    @include('layout.navbar')

    @include('layout.sidebar')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container content-box">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $title }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">

                            @php
                                $bread = $bread ?? $title;
                            @endphp

                            @if (is_array($bread))
                                @foreach ($bread as $k => $br)
                                    @if ($k + 1 === sizeof($bread))
                                        <li class="breadcrumb-item active">{{ $br }}</li>
                                    @else
                                        @php
                                            [$text, $href] = explode('|', $br);
                                        @endphp
                                        <li class="breadcrumb-item">
                                            <a href="/{{ $href }}">{{ $text }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            @endif

                            @if (is_string($bread))
                                <li class="breadcrumb-item active">{{ $bread }}</li>
                            @endif

                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content pb-4">
            <div class="container content-box">

                @yield('content')

            </div>
        </div>
    </div>

    <footer class="main-footer text-sm">
        <div class="text-center">
            <strong>&copy; {{ date('Y') }} <a href="https://github.com/hasan282" target="_blank">hasan282</a></strong>
            All rights reserved
        </div>
    </footer>

@endsection
