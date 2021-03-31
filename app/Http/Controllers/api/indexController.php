<?php

namespace App\Http\Controllers\api;

use App\Appointment;
use App\WorkingHours;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function getWorkingHours()
    {
        $date =date("Y-m-d");
        $returnArray=[];
        $hours =WorkingHours::all();
        foreach ($hours as $k => $v){
            $control=Appointment::where('date',$date)
                ->where('workingHour',$v['id'])->count();
            $v['isActive']=($control==0) ? true:false;
            $returnArray[]=$v;
        }
        return response()->json($returnArray);

    }
}
