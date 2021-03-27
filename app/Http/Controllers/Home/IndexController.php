<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
     //测试Home分组的Index方法
    public function index(){
        echo  "这是Home分组下的index方法";
    }
}
