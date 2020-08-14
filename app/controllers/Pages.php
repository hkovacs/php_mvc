<?php

class Pages extends Controller
{
    public function __construct()
    {
        // echo 'pages loaded';
    }

    public function index()
    {
        $data = [
            'title' => 'welcome'
        ];
        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'about'
        ];
        $this->view('pages/about', data);
    }
}
