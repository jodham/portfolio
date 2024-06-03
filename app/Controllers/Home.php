<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
class Home extends BaseController
{

    public function index(){
        $page = 'index';
        if (! is_file(APPPATH . 'Views/index/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }
        $data['content'] = view('index/index', [], []); 
        return view('index/base', $data);
    }
}