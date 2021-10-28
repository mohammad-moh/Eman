<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pationt;
use App\Models\pharma;

class PharPatioController extends Controller
{
    public function addPharma()
    {
        $pharm = new pharma();
        $pharm->name = 'Phama three';
        $pharm->save();
        return 'Added new Pharmacy';
    }

    public function addPationt($id)
    {
        $pharm = pharma::find($id);
        $patient = new pationt();
        $patient->name = 'Jon';
        $pharm->pationt()->save($patient);
        return 'New Patient';
    }
    public function getPatientByPharma($id)
    {
        $phram = pharma::find($id)->pationt;
        return $phram;
    }
    public function getphramBypatient($id)
    {
        $patient = pationt::find($id)->pharma_id;
        $pat_name =pationt::find($id)->name;
        return 'The ID number of the Pharmacy:  '.$patient.' And His name is: '.$pat_name;

    }
    public function getAllElements()
    {
        $element = pationt::all();
        return $element;
    }
    public function getAllPatients()
    {
        $items =pharma::all();
        return $items;
    }
}
