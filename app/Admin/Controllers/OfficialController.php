<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class OfficialController extends Controller
{
    public function index(Content $content)
    {


        $data = array(1,2,3,4,5,6,7,8);

        return $content
//            ->header('公众号管理')
//            ->description('请选择你的公众号')
            ->row(view('admin.official.officials', compact('data')));
    }
}
