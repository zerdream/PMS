<?php  namespace App\Http\Controllers\DashBoard;

use App\Http\Controllers\Controller;
/**
 * Created by PhpStorm.
 * User: zaki.zi
 * Date: 2015/7/7
 * Time: 17:06
 */
class RepairChartController extends Controller {
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
        return view('dashboard\repairchart');
    }
}