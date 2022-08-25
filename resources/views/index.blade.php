@include('layouts.head')

<body class="app sidebar-mini ltr">

@include('layouts.switcher')

<!-- GLOBAL-LOADER -->
<div id="global-loader">
<img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
<div class="page-main">

@include('layouts.header')
@include('layouts.sidebar')
@include('layouts.sidebar-right')
@yield('content')
@include('layouts.footer')
@include('layouts.script')
