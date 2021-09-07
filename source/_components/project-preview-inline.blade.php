<div class="flex flex-col mb-4">
    @if($project->url)
        <h2 class="text-3xl mt-0 mb-2">
            <a
                class="text-gray-900 font-extrabold"
                href="{{ $project->url }}"
                title="Go to {{ $project->title }}"
                target="_blank"
            >
                {{ $project->title }}
            </a>
        </h2>
    @else
        <h2 class="text-3xl mt-0 text-gray-900 font-extrabold">
            {{ $project->title }}
        </h2>
    @endif

    <div>
        @if($project->development)
            <span class="bg-orange-500 text-white text-xs font-semibold rounded-3xl px-3 py-1 mb-2 mt-2 mr-2">
                In development
            </span>
        @endif

        @foreach($project->tech as $text)
            @php
                $css = 'from-blue-500 to-indigo-600 text-white';

                if ($text === 'Laravel') {
                    $css = 'from-red-400 to-red-700 text-white';
                }

                if ($text === 'Vue.Js') {
                    $css = 'from-green-400 to-green-700 text-white';
                }
            @endphp

            <span class="bg-gradient-to-r {{ $css }} text-xs font-semibold rounded-3xl px-3 py-1 mb-2 mt-2 mr-2 {{ \Illuminate\Support\Str::kebab($text) }}">
                {{ $text }}
            </span>
        @endforeach
    </div>

    <div class="mb-4 mt-0">
        {!! $project->getContent() !!}
    </div>
</div>
