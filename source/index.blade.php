@extends('_layouts.full')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->blogDescription }}" />
@endpush

@section('body')
    {{--@include('_components.newsletter-signup')--}}

    <div class="w-full h-full font-heading flex items-center justify-center -mt-24 bg-sand-lightest">
        <div class="md:text-4xl text-3xl container max-w-xl pt-32 pb-24">
            <div class="mx-6">
                {{--<img class="h-10 md:h-24 mb-4" src="/assets/images/logo.svg" alt="{{ $page->siteName }} logo" />--}}
                <p><strong>Hey,</strong> I'm Robin Nilsson, developer at <a class="text-thatsup hover:text-thatsup-dark" href="https://thatsup.se/stockholm/" rel="noopener">Thatsup</a>.</p>
                <p>Read the <a href="/blog">blog</a>, check out my <a class="text-github hover:text-github-dark" href="https://github.com/robbens">Github</a>&nbsp;and be sure to <a href="mailto:hej@robin.se">get in touch</a> if you want to chat.</p>
                <p class="text-base text-grey-dark italic">Psst. Featured blog posts below!</p>
            </div>
        </div>
    </div>

    <div class="flex-auto w-full container max-w-xl mx-auto py-16 px-6">
        @foreach ($posts->where('featured', true)->take(6)->chunk(2) as $row)
            <div class="flex flex-col md:flex-row md:-mx-6">
                @foreach ($row as $post)
                    <div class="w-full md:w-1/2 md:mx-6">
                        @include('_components.post-preview-inline')
                    </div>

                    @if (! $loop->last)
                        <hr class="block md:hidden w-full border-b mt-2 mb-6">
                    @endif
                @endforeach
            </div>

            @if (! $loop->last)
                <hr class="w-full border-b mt-2 mb-6">
            @endif
        @endforeach
    </div>
@stop
