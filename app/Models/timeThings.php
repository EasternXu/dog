<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class timeThings extends Model
{
    //
    protected $table='time_things';
    public $timestamps = true;
    protected $guarded = []; //黑名单



    public static function add($data)
    {
        if(empty($data)){
            $res =  ['stat'=>801,'message'=>'事件信息错误'.$data];
        }else{
            $arr = array();
            $arr = json_decode($data);
        // var_dump($arr);die;
            $bool = timeThings::create($arr);
            if($bool)
            {
                $res =  ['stat'=>800,'message'=>'时间添加成功'];
            }else{
                    $res =  ['stat'=>202,'message'=>'数据库请求出错,请联系后台人员'];
            }
            
        }
        return $res;
    }
}
