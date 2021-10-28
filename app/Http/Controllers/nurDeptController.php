<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\deprt;
use App\Models\nurse;

class nurDeptController extends Controller
{
    public function addNurse(){
        $nurs = new nurse();
        $nurs->n_name= 'Zakaria';
        $nurs->save();
        return 'new Nurse Added';
    }

    public function addDept($id)
    {
        $nur =nurse::find($id);
        $dpt = new deprt();
        $dpt->d_name ='word Eight';
        $nur->deprts()->save($dpt);
        return 'New dept Added';

    }
    public function getWord($id)
    {
        $word = deprt::find($id)->nurse;
        return $word;
    }
    public function getNurse($id)
    {
        $nrs = nurse::find($id);
        return $nrs;
    }
    public function getWordByNurse($id)
    {
        $word = nurse::find($id)->deprts;
        return $word;
    }


}
