<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Page data.
     *
     * @var array
     */
    public $data = [];

    /**
     * MainController constructor.
     */
    public function __construct()
    {
        $this->data['page_breadcrumbs'][] = [
            'title' => 'Dashboard',
            'link'  => '/dashboard'
        ];
    }

    /**
     * Set meta title, description, etc.
     *
     * @param $title
     * @param $page_title
     * @param $page_description
     *
     * @return void
     */
    public function setMeta($title, $page_title, $page_description)
    {
        $this->data['page_title'] = $title;
        $this->data['page_header'] = $page_title;
        $this->data['page_description'] = $page_description;
    }
}
