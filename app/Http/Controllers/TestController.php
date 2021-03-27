<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use DB;
//引入模型
use App\Home\Member;
class TestController extends Controller
{
    //测试控制器路由的使用
    // public function test1(){
    //     //输出任意的信息
    //     phpinfo();
    // }

    public function test1()
    {
        echo Input::get('id','222');
        //获取全部的值
        $all = Input::all(); 
        var_dump($all);
    //    dd($all);
      //获取指定信息 字符串形式
        // dd(Input::get('name'));
       //获取指定的几个值 数组形式
    //    dd(Input::only(['name','age']));
       //获取除了指定的值，之外的值
    //    dd(Input::except(['name']));
       //判断某个值是否存在与否
        dd(Input::has('age'));
    }

        // public function add(){
        // $db = DB::table('student');
        //使用insert增加记录
        // $rew=$db->insert([
        //     [
        //         'sid' => '188',
        //         'username' => '小艾',
        //         'grade' => '15',
        //         'class' => '19级3班',
        //         'telephone' => '1111111111'
        //     ],
        //     [
        //         'sid' => '14',
        //         'username' => '钟馗',
        //         'grade' => '74',
        //         'class' => '17级3班',
        //         'telephone' => '2222222222'
        //     ]
        // ]);
        

        //插入一条记录的insertGetId();
        // $rew=$db->insertGetId([
        //         'sid' => '788',
        //         'username' => '艾萨',
        //         'grade' => '19',
        //         'class' => '20级',
        //         'telephone' => '9999999'
        // ]);
        // dd($rew);
        // }

        //修改方法
        // public function update(){
        //     $db = DB::table('student');
        //     $rew=$db->where('id','=','14')->update([
        //         'username' => '李四丹',
        //     ]);
        //     dd($rew);
        // }

        public function increment(){
            $db= DB::table('student');
            $rew = $db->where('id','=','14')->increment('age',2);
            dd($rew);
        }
        
        public function decrement(){
            $db= DB::table('student');
            $rew = $db->where('id','=','17')->decrement('age',20);
            dd($rew);
        }

        public function select(){
            // $db= DB::table('student');
            // $rew=$db->get();
            // foreach($rew as $v=>$vlaue){
            //     echo "姓名：{$vlaue->username},年龄：{$vlaue->age},班级：{$vlaue->class}</br>";
               
            // }
            // // $data = $db->where('age','>','19')->get();
            // $date = $db->where('age','=','19')->where('id','=','18')->get();
            // dd($date);

            // $rew=$db->where('id','<','15')->value('age');
            // $rew = $db->select('age','class')->get();
            //    $rew = $db->select('username as name')->get();
            // $rew = DB::table('student')->orderBy('age','desc')->get();
            $rew = DB::table('student')->limit(3)->offset(2)->get();
            dd($rew);
        }

        public function del(){
            $db = DB::table('student');
            $rew = $db->where('id','15')->delete();
            dd($rew);
        }

        public function test3(){
            $date = date('Y-m-d H:i:s',time());
            $day = "白天";
            $time = strtotime('+1 year');
            // return view('home/test/test3',['date'=>$date,'day'=>$day]);
            return view('home/test/test3',compact('date','day','time'));
        }

        // foreach($rew as $v=>$vlaue){
        //     //循环
        // }
        // @foreach($rew as $v=>$vlaue)
        // //循环体
        // @endforeach

        public function test4(){
            $db = DB::table('student');
            $rew = $db->get();
            $date = date('N');
            $time = date('l dS \of F Y h:i:s A');
            return view('home/test/test4',compact('rew','date','time'));
        }
        public function test5(){
            return view('home.test.test5');
        }
        public function test6(){
            return view('home.test.test6');
        } 
        public function test7(){
            return '请求提交成功';
        }

        public function test8(Request $request){
            //实例化模型，将表和类映射起来
            $model =new Member();
            // $model->sid = '3333';
            // $model->username = '小李';
            // $model->age = '28';
            // $model->class = '大二';
            // $model->telephone = '555555555';
            // $rew = $model->save();

            //方法二的添加操作
            $res = $model->create($request -> all());
            $rew = Input::get('username');
            var_dump($rew);
            dd($res);

        }

        public function test12(){
           return view('home.test.test12');
        }

        public function test9(){
            //查询指定主键的记录
            // $data = Member::find(17)->toArray();
            //$data = Member::where('id','>','17')->first()->toArray();
            $data = Member::all();
            dd($data);
        }

        //修改操作
        public function test10(){
            //ar模式的修改操作
            $data = Member::find(17);
            //赋值属性（需要修改的字段进行赋值）
            $data->age = '15';
            $rew = $data->save();

            //使用update方法更新
            $rewq = Member::where('id','19')->update(['age'=>'24']);
            dd($rew);
        }

        //删除
        public function test11(){
            $data = Member::find(17);
            dd($data->delete());
        }

        //自动验证
        public function test13(Request $request){
            //判断请求类型
            // echo Input::method();
            if(Input::method()=='POST'){
                //自动验证
                $this->validate($request,[
                // 字段 =>验证规则1|验证规则2|....
                    'username' => 'required|min:2|max:20',
                    'age' => 'required|integer|min:1|max:100',
                    'email' => 'required|email',
                    'captcha' => 'required|captcha'

                ]);
                echo '12345';
                
            }else{
                //展示视图
            return view('home/test/test13');
            }
        } 


        public function test14(Request $request){
                //判断请求类型
                if(Input::method()=='POST'){
                    //上传
                    //判断文件是否正常
                    if($request -> hasFile('avatar') && $request -> file('avatar')->isvalid()){
                        //获取文件的原始名称
                        // dd($request -> file('avatar') -> getClientOriginalName());
                        //获取文件大小
                        // dd($request -> file('avatar') -> getClientSize());
                        $path = md5(time().rand(100000,999999)).'.'.$request->file('avatar')->getClientOriginalExtension();
                        $request -> file('avatar')->move('./uploads',$path);
                        $data = $request->all();

                        $data['avatar'] = './uploads/'.$path;

                        $rew = Member::create($data);
                        dd($rew);
                    }
                }else{
                    return view('home.test.test14');
                }
            }

        public function update(Request $request){

            $path = $request->file('avatar')->store('avatars');
        return $path;
    }

        public function test15(){
            $data = Member::paginate(2);
            return view('home.test.test15',compact('data'));
        }

        //ajax页面展示
        public function test16(){
            return view('home.test.test16');
        }

        public function test17(){
            $data = Member::all();
            return response() -> json($data);
        }

}
