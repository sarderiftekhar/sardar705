<?php
namespace App\Services;

use App\Agent;
use App\AgentAreaCover;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AgentService{

   public function saveNewAgent(Request $request)
   {
      $agent = Agent::create([
               'title'=>$request->title,
               'first_name'=>$request->first_name,
               'middle_name'=>$request->middle_name,
               'last_name'=>$request->last_name,
               'phone'=>$request->phone,
               'mobile'=>$request->mobile,
               'email'=>$request->email,
               'type'=>$request->type,
               'company_id'=>$request->company_id,
               'notes'=>$request->notes,
            ]);

      for ($i=0; $i < count($request->area); $i++) 
            {
            AgentAreaCover::create([
               'agent_id'=>$agent->id,
               'area'=>$request->area[$i],
            ]);
            }

      if($request->hasFile('photograph'))
      {
            // $validator = Validator::make($request->all(), [
            //       'photograph' => 'required | mimes:jpeg,jpg,png | max:5000',
            // ]);
            // if ($validator->fails()) 
            // {
            //    return redirect()->back()->with('image_error');
            // }
         $path = Storage::disk('public')->put('agent/images/',$request->file('photograph'));
         $agent->photograph = $path;
         $agent->save();
      }   
      return $agent;
   }
}
