@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>About me</h1>

    <img src="/assets/images/robin.jpg"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">
        My name is Robin Nilsson. I'm a Swedish web developer working at
        <a class="text-thatsup hover:text-thatsup-dark" href="https://thatsup.se/stockholm" target="_blank" rel="noopener">Thatsup</a>.
    </p>

    <p class="mb-10">I build most of my stuff in Laravel, PHP, Vue.js and plain old JS.</p>

    <h2>Stuff I'm working on:</h2>

    <ul>
        <li><a href="https://nicedice.io">NiceDice</a> – A crypto currency dice game. <span class="text-red">Deposits are turned off!</span></li>
        <li><a href="https://up.robin.se">Uptime Monitor</a> – 1 minute checks for free</li>
        <li><a href="https://vote.robin.se">Live polls</a> – using Websockets</li>
    </ul>

    <p class="mb-6">Since 2018, I'm also working(not paid) with a nonprofit organization called <a href="http://fromonetoanother.se/">From One To Another</a>. They call me the it-support-everything-tech-guy. 😄</p>

    <h2>Want to chat?</h2>

    <p class="mb-6">
        Even though I hate email – it's still the best way to initiate contact. <br>HMU at
        <a href="mailto:yo@robin.se">yo@robin.se</a>
    </p>

    {{--<p class="mb-6">I also run a crypto currency dice game called <a href="https://nicedice.io">Nice Dice</a>. That's a bit weird for me since I hate gambling.--}}
        {{--<br>--}}
        {{--Read about this in my blog post <a href="/blog/the-dice-game">The dice game</a>.</p>--}}
@endsection
