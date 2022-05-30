<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\JobOffer;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\JobOfferRequest;

class JobOfferController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function register(JobOfferRequest $request)
    {
        try{
            DB::beginTransaction();
            $job_offer = new JobOffer;
            $job_offer->name = $request->name;
            $job_offer->state_id = $request->state_id;
            $job_offer->save();
            
            foreach($request->users as $user_id){
                DB::table('applicants')->insert([
                    'job_offer_id' => $job_offer->id, 'user_id' => $user_id 
                ]);                
            }
                        
            DB::commit();
            return response()->json([
                'status' => 'success',
                'job_offer' => $job_offer,
                'users' => $job_offer->users,
            ]);
        }catch (Throwable $e) {
            report($e);
            DB::rollBack();
            return response()->json([
                'status' => 'fail',
                
            ]);
        }
    }

    public function getAssosiatedCandidates(){
        $job_offers = JobOffer::All();
        $job_ofers_assosiated = [];
        foreach($job_offers as $job_offer){
            if(!empty($job_offer->users->all())){
                $job_ofers_assosiated[] = $job_offer;
            }
        }
        return response()->json([
            'status' => 'fail',
            'job_ofers_assosiated' => $job_ofers_assosiated
        ]);
        
    }

}
