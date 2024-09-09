<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Submission Test · {{ $title }}</title>

    <link rel="shortcut icon" href="/image/icon/icon-128.png" type="image/png">
    <link rel="icon" href="/image/icon/icon-32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/image/icon/icon-64.png" sizes="64x64" type="image/png">
    <link rel="apple-touch-icon" href="/image/icon/icon-128.png">

    {!! $getPlugins['head'] !!}

</head>

<body class="hold-transition @yield('body_class')">

    <div class="@yield('div_class')">

        @yield('body')

    </div>

    <script>
        const BaseURL = "{{ url('/') }}";
    </script>

    {!! $getPlugins['foot'] !!}

    @yield('script')

</body>

</html>
