<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

class HomeController extends MainController
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['page_breadcrumbs'][] = [
            'title' => 'Here'
        ];
    }

    /**
     * Show dashboard index page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->setMeta('Title', 'Page Title', 'description');

        return view('dashboard.index', $this->data);
    }
}
