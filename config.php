<?php

return [
    'production'  => false,
    'baseUrl'     => '',
    'title'       => 'Templid tools',
    'description' => 'Templid tools - a collection of tools for business owners and entrepreneurs.',
    'collections' => [
        'posts',
        'pages',
    ],

    'pageTitle' => function ($page, $title) {
        if (!$title) {
            return $page->title;
        }

        return sprintf('%s | %s', $title, $page->title);
    },
];
