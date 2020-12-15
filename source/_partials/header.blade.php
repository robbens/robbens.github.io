<header class="flex w-full max-w-xl items-center h-24 z-10 container mx-auto" role="banner">
    <div class="flex w-full items-center px-6">
        <div class="flex items-center">
            <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                <img class="h-8 md:h-10 mr-3" src="/assets/images/logo.svg" alt="{{ $page->siteName }} logo" />
            </a>
        </div>

        <div class="flex flex-1 justify-end items-center">
            {{--id="vue-search"--}}
            {{--<search></search>--}}

            @include('_nav.menu')

            @include('_nav.menu-toggle')
        </div>
    </div>
</header>