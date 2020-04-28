<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function contactUs() {
        return view('contactUs');
    }

    public function feedback() {
        return view('feedback');
    }

    public function awards() {
        return view('awards');
    }

    public function blog() {
        return view('blog');
    }

    public function followUpCareTreatment() {
        return view('followUpCareTreatment');
    }

    public function cancerTreatmentTypes() {
        return view('cancerTreatmentTypes');
    }

    public function doctorProfile($name) {
        if ($name == 'murali') {
             return view('murali');
        }
        else if ($name == 'ranjith') {
             return view('ranjith');
        }
    }

    public function departmentPage($dept) {
      if ($dept == 'surgicalOncology') {
          return view('surgicalOncology');
      }
      else if ($dept == 'medicalOncology') {
          return view('medicalOncology');
      }
      else if ($dept == 'generalSurgery') {
          return view('generalSurgery');
      }
      else if ($dept == 'nephrology') {
          return view('nephrology');
      }
      else if ($dept == 'urology') {
          return view('urology');
      }
    }
}
