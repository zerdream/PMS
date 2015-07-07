<?php namespace App\Http\Controllers\BaseSet;

use App\Http\Controllers\Controller;
/**
 * Created by PhpStorm.
 * User: zaki.zi
 * Date: 2015/7/7
 * Time: 13:53
 */
class FeeController extends Controller {
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
        return view('baseset/fee');
    }
}