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
            <span class="bg-green-500 text-white text-xs font-semibold rounded-3xl px-3 py-1 mb-2 mt-2 mr-2">
                In development
            </span>
        @endif

        @foreach($project->tech as $text)
            <span class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-xs font-semibold rounded-3xl px-3 py-1 mb-2 mt-2 mr-2">
                {{ $text }}
            </span>
        @endforeach
    </div>

    <div class="mb-4 mt-0">
        {!! $project->getContent() !!}
    </div>
</div>
