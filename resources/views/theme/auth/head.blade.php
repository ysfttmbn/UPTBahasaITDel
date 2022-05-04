<head>
    <title>{{config('app.name') . ': ' .$title ?? config('app.name')}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{config('app.name') . ': ' .$title ?? config('app.name')}}" />
    <meta property="og:url" content="https://upi.dev" />
    <meta property="og:site_name" content="{{config('app.name')}}" />
    <link rel="canonical" href="{{ url('https://upi.dev') }}" />
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700') }}" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('keenthemes/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('keenthemes/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>