<?php  namespace App\Http\Controllers\BaseSet;

use App\Http\Controllers\Controller;

class BuildingController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */


/**
 * Created by PhpStorm.
 * User: zaki.zi
 * Date: 2015/7/7
 * Time: 13:34
 */

    public function __construct()
    {
//        $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('baseset\building');
    }
}