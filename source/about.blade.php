---
title: About
description: A little bit about the site
---
@extends('_layouts.master')

@section('body')
    <h1>About me</h1>

    <img src="/assets/images/robin.jpg" alt="About image"
         class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">
        My name is Robin Nilsson. I'm a Swedish web developer working at
        <a class="text-thatsup hover:text-thatsup-dark" href="https://thatsup.se/stockholm" target="_blank"
           rel="noopener">Thatsup</a>.
    </p>

    <p class="mb-10">I build most of my stuff in Laravel, PHP, Vue.js and plain old JS.</p>









    <p class="mb-6">Since 2018, I'm also working(not paid) with a nonprofit organization called <a
                href="http://fromonetoanother.se/">From One To Another</a>. They call me the
        it-support-everything-tech-guy. 😄</p>

    <h2>Want to chat?</h2>

    <p class="mb-6">
        Even though I hate email – it's still the best way to initiate contact. <br>HMU at
        <a href="mailto:yo@robin.se">yo@robin.se</a>
    </p>




@endsection
