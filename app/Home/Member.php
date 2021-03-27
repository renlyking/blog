<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //定义模型关联的数据表（一个模型操作一个数据表）
 	protected $table = 'student';
    //定义主键（可选如果是主键可以不用定义）
    protected $primaryKey = 'id';
    //定义禁止操作时间
    public $timestamps = false;
    //设置允许写入的数字字段
    protected $fillable = ['sid','age','username','class','telephone','email','avatar'];
}
