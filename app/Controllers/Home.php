<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home'
        ];

        return view('pages/index', $data);
    }

    public function about(): string{
        $data = [
            'title' => 'About'
        ];

        return view('pages/about', $data);
    }

    public function contact(): string
    {
        $data = [
            'title' => 'Contact'
        ];

        return view('pages/contact', $data);
    }

    public function projects(): string{
        $data = [
            'title' => 'Projects'
        ];

        return view('pages/projects', $data);
    }

    public function store(): string
    {
        $data = [
            'title' => 'Store'
        ];

        return view('pages/store', $data);
    }

    public function admin(): string
    {
        $data = [
            'title' => 'Admin'
        ];

        return view('pages/admin', $data);
    }
}
