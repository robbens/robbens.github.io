<nav id="js-nav-menu" class="nav-menu hidden lg:hidden absolute pin-x pin-y items-center justify-center text-center">
    <ul class="list-reset my-0">
        <li>
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="nav-menu__item hover:text-blue {{ $page->isActive('/blog') ? 'active text-blue' : '' }}"
            >Blog</a>
        </li>
        <li>
            <a
                title="{{ $page->siteName }} About"
                href="/about"
                class="nav-menu__item hover:text-blue {{ $page->isActive('/about') ? 'active text-blue' : '' }}"
            >About</a>
        </li>
        <li>
            <a title="Github" href="https://github.com/robbens"
               class="nav-menu__item hover:text-blue">
                <img class="w-6" src="/assets/images/github.svg" alt="Github Profile">
            </a>
        </li>
        {{--<li>--}}
            {{--<a--}}
                {{--title="{{ $page->siteName }} Contact"--}}
                {{--href="/contact"--}}
                {{--class="nav-menu__item hover:text-blue {{ $page->isActive('/contact') ? 'active text-blue' : '' }}"--}}
            {{-->Contact</a>--}}
        {{--</li>--}}
    </ul>
</nav>
