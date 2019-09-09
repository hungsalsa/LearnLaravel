<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
class WelcomeController extends BaseController
{
    function showinfo()
    {
    	return 'day la 1 test controller';
    }
    public function hochiminh()
    {
    	return Redirect()->Route('hcm');
    }
}