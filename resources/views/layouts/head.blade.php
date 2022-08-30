<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Hotel Asri">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset ('assets/images/brand/favicon.ico')}}" />

    <!-- TITLE -->
    <title>Hotel Asri</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset ('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset ('assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{ asset ('assets/css/dark-style.css')}}" rel="stylesheet" />
    <link href="{{ asset ('assets/css/transparent-style.css')}}" rel="stylesheet">
    <link href="{{ asset ('assets/css/skin-modes.css')}}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset ('assets/css/icons.css')}}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset ('assets/colors/color1.css')}}" />

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset ('assets/switcher/css/switcher.css')}}" rel="stylesheet" />
    <link href="{{ asset ('assets/switcher/demo.css')}}" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @yield('midtranshead')

</head>