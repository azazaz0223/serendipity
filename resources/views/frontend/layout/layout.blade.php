<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#ffffff" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#ffffff" media="(prefers-color-scheme: dark)">
    <title>{{ env('BACKEND_NAME') }}</title>

    @include('backend.layout.basicStyle')
</head>

<body>
    @include('backend.layout.menu')
    <div id="content" class="">
        @include('backend.layout.top')

        <!-- 下方內容容器 -->
        <div class="container-fluid p-3">
            @yield('container')
        </div>
    </div>
</body>

</html>
