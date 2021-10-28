<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patients;
use App\Models\doctor;

class docPatController extends Controller
{
    public function addDoctor()
    {
        $doc = new doctor();
        $doc->name= 'doctor22';
        $doc->save();
        return 'Adding New Doctor';
    }

    public function addPatient($id)
    {
        $doct =doctor::find($id);

        $pat = new patients();
        $pat->name = 'patient7';

        $doct->patient()->save($pat);
        return 'Done';
    }
}
