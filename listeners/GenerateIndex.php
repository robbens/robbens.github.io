<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class GenerateIndex
{
    public function handle(Jigsaw $jigsaw)
    {
        $posts = collect($jigsaw->getCollection('posts')->map(function ($page) use ($jigsaw) {
            return [
                'title' => $page->title,
                'categories' => $page->categories,
                'link' => rightTrimPath($jigsaw->getConfig('baseUrl')) . $page->getPath(),
                'snippet' => $page->getExcerpt(),
            ];
        })->values());

        $projects = collect($jigsaw->getCollection('projects')->map(function ($page) use ($jigsaw) {
            return [
                'title' => $page->title,
                'link' => '/projects',
                'snippet' => $page->getExcerpt(),
            ];
        })->values());

        $data = $posts->merge($projects);

        file_put_contents($jigsaw->getDestinationPath() . '/index.json', json_encode($data));
    }
}
