<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Peta extends BaseController
{
    public function index()
    {
        //
        helper('filesystem');

        $data['filenames'] = directory_map('./resources/', false, true);

        return view('peta/index', $data);
    }
}
