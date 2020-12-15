<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-grey-darkest hover:text-blue-dark {{ $page->isActive('/blog') ? 'active text-blue-dark' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-grey-darkest hover:text-blue-dark {{ $page->isActive('/about') ? 'active text-blue-dark' : '' }}">
        About
    </a>

    <a title="Github" href="https://github.com/robbens"
       class="ml-6 text-grey-darkest hover:text-blue-dark">
        <img class="w-6" src="/assets/images/github.svg" alt="Github Profile">
    </a>

    {{--<a title="{{ $page->siteName }} Contact" href="/contact"--}}
        {{--class="ml-6 text-grey-darkest hover:text-blue-dark {{ $page->isActive('/contact') ? 'active text-blue-dark' : '' }}">--}}
        {{--Contact--}}
    {{--</a>--}}
</nav>
