<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="{{ $page->meta_description or $page->siteDescription }}">

<meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ $page->getUrl() }}"/>
<meta property="og:description" content="{{ $page->siteDescription }}" />

<title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

<link rel="home" href="{{ $page->baseUrl }}">
<link rel="icon" href="/favicon.png">
<link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

@stack('meta')

<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

<link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
<link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,800&display=swap" rel="stylesheet">

@if ($page->production)
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js"></script>--}}

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-64617032-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-64617032-1');
    </script>
@endif