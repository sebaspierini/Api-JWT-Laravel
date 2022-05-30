<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use App\Http\Requests\ApplicantRequest;

class ApplicantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function register(ApplicantRequest $request)
    {
        $applicant = new Applicant();
        $applicant->job_offer_id = $request->job_offer_id;
        $applicant->user_id = $request->user_id;
        $applicant->save();
        
        return response()->json([
                'status' => 'success',
                'applicant' => $applicant,
            ]);
    }
}
