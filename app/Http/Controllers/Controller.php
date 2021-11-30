<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public $activationFee = 10000;

    public $referralBonus = 3000;

    public $adminPayment = 1000;


    public $level1Payment = 26000;
    public $level2Payment = 128100;
    public $level3Payment = 250000;
    


}
