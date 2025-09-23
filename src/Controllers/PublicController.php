<?php

namespace App\Controllers;

class PublicController
{
    public function index()
    {
        $posts = [
            [
                'title' => 'World news 1',
                'published' => '16.09.2025',
                'author' => 'Nikita',
                'body' => 'Some world news body 1'
            ],
            [
                'title' => 'World news 2',
                'published' => '17.09.2025',
                'author' => 'Nikita1',
                'body' => 'Some world news body 2'
            ],
            [
                'title' => 'World news 3',
                'published' => '18.09.2025',
                'author' => 'Nikita2',
                'body' => 'Some world news body 3'
            ],
            [
                'title' => 'World news 4',
                'published' => '19.09.2025',
                'author' => 'Nikita3',
                'body' => 'Some world news body 4'
            ],
            [
                'title' => 'World news 5',
                'published' => '20.09.2025',
                'author' => 'Nikita4',
                'body' => 'Some world news body 5'
            ],
        ];
        view('index', compact('posts'));
    }

    public function us() {
    $posts = [
        [
            'title' => ' U.S news 1',
            'published' => '16.09.2025',
            'author' => 'Ivan',
            'body' => 'some U.S news body 1'
        ],
        [
            'title' => 'U.S news 2',
            'published' => '16.09.2024',
            'author' => 'simon',
            'body' => 'some U.S news body 2'
        ],
        [
            'title' => 'U.S news 3',
            'published' => '16.09.2023',
            'author' => 'anatoly',
            'body' => 'some U.S news body 3'
        ]
    ];
    view('us',  compact('posts'));
}

public function form(){
   
    view('form');
}

public function answer(){
    dump($_GET);
    dump($_POST);
}

}
