---
title: About me
description: My name is Robin Nilsson. I'm a Swedish web developer
---
@extends('_layouts.master')

@section('body')
    <h1>About me</h1>

    <p class="mb-6">
        My name is Robin Nilsson. I'm a Swedish web developer working at
        <a class="text-thatsup hover:text-thatsup-dark" href="https://thatsup.se/stockholm" target="_blank"
           rel="noopener">Thatsup</a>.
    </p>

    <img src="/assets/images/robin.jpg" alt="About image"
         class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <h2>What I like to do on my spare time</h2>

    <p class="mt-10">
        ✈️ I enjoy <strong>traveling</strong> and creating amateur travel videos. Of course I work remote while doing so.
    </p>
    <p class="mt-10">
        🪂 <strong>Skydiving</strong> is a hobby I recently found which has taken over quite a bit to be honest. It is an amazing sport with a community unlike anything I've experienced.
    </p>
    <p class="mt-10">
        🎥 When I wind down, I like to watch <strong>educational YouTube videos</strong> such as Wendover Productions, Half as Interesting, Veritasium, etc. etc.
    </p>
    <p class="mt-10">
        👨‍💻 Obviously, somewhere in between I like <strong>building stuff on the web</strong>! <br>
        I build most of my stuff in Laravel, PHP, Vue.js and plain old JS. <br>
        See my <a href="/projects">current projects here</a>
    </p>

    <p class="mt-10">
        🎗 Since 2018, I'm also working(not paid) with a <strong>nonprofit organization</strong> called
        <a href="http://fromonetoanother.se/">From One To Another</a>. They call me the
        it-support-everything-tech-guy. 😄
    </p>

    <img class="rounded-lg" src="/assets/images/robin-2-wide.jpg" alt="Robin Nilsson">

    <h2>Want to chat?</h2>

    <p class="mb-6">
        Even though I hate email – it's still the best way to initiate contact. <br>HMU at
        <a href="mailto:yo@robin.se">yo@robin.se</a>
    </p>
@endsection
