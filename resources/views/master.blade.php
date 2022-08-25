@include('bookingclient.layout.head')

<body class="app sidebar-mini ltr">

{{-- @include('layout.switcher') --}}

<!-- GLOBAL-LOADER -->
<div id="global-loader">
<img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
<div class="page-main">

@include('bookingclient.layout.header')
{{-- @include('layouts.sidebar')
@include('layouts.sidebar-right') --}}
@yield('contentbooking')
@include('bookingclient.layout.footer')
@include('bookingclient.layout.script')
