<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PlanInfo;
use App\Models\Transaction;
use Validator;

class PlanController extends Controller
{
    public function postPlan(Request $request){
        $validator = Validator::make($request->all(), [
            'plan_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'amount' => 'required',
        ]);

        $success=[];
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

       
        // $user = User::create([

        // ]);
        // $success = $user;
        // $success['token'] =  $user->createToken('MyApp')->accessToken;
        

        $planinfo = PlanInfo::create([
            'user_id'=>$request->user()->id,
            'plan_id'=>$request->plan_id,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'amount'=>$request->amount, 
        ]);
        $transaction = Transaction::create([
            'user_id'=>$request->user()->id,
            'plan_id'=>$request->plan_id,
            'transaction_id'=>$request->transaction_id,
            'type'=>$request->type,
            'amount'=>$request->amount,
        ]);

       $success['planinfo']=$planinfo;
       $success['transaction']=$transaction;
        return $this->sendResponse($success, 'Plan Created successfully.');
    }

    
}
