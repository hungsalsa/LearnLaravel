<?php
namespace App\Http\Controllers;
// use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class HomeController extends BaseController
{

  public function ShowWelcome()
  {
    return 'Chào mừng đến với chúng tôi';
  }
}

 ?>
