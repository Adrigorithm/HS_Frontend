<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home',
            'loggedIn' => auth()->loggedIn()
        ];

        return view('pages/index', $data);
    }

    public function about(): string{
        $data = [
            'title' => 'About',
            'loggedIn' => auth()->loggedIn()
        ];

        return view('pages/about', $data);
    }

    public function contact(): string
    {
        $data = [
            'title' => 'Contact',
            'loggedIn' => auth()->loggedIn()
        ];

        return view('pages/contact', $data);
    }

    public function projects(): string{
        $data = [
            'title' => 'Projects',
            'loggedIn' => auth()->loggedIn()
        ];

        return view('pages/projects', $data);
    }

    public function store(): string
    {
        $data = [
            'title' => 'Store',
            'loggedIn' => auth()->loggedIn()
        ];

        return view('pages/store', $data);
    }

    public function admin(): string
    {
        $data = [
            'title' => 'Admin',
            'loggedIn' => auth()->loggedIn()
        ];

        return view('pages/admin', $data);
    }

    public function login(): string
    {
        $data = [
            'title' => 'Login',
            'loggedIn' => auth()->loggedIn()
        ];

        return view('pages/login', $data);
    }

    public function logout(): string
    {
        $data = [
            'title' => 'Home',
            'loggedIn' => auth()->loggedIn()
        ];

        return view('pages/index', $data);
    }

    public function account(): string
    {
        $data = [
            'title' => 'Account',
            'loggedIn' => auth()->loggedIn()
        ];

        return view('pages/account', $data);
    }
}
