<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $siteElement  = json_decode(file_get_contents(APPPATH . "Database\data\site-elements.json"), 1);

//        print_r($siteElement['ironSoftwareImage']);
//        exit(0);

        return view('testpage', $siteElement);
    }
}
