<html lang="en">
    <head>
        @include('_partials.head')
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-grey-lightest text-grey-darkest leading-normal font-sans">
        @include('_partials.header')

        @include('_nav.menu-responsive')

        <main role="main" class="flex-auto w-full container max-w-xl mx-auto py-16 px-6">
            @yield('body')
        </main>

        <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center list-reset">
                <li class="md:mr-2">
                    &copy; <a href="https://robin.se" title="Robin Nilsson Website">Robin Nilsson</a> {{ date('Y') }}.
                </li>
            </ul>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
