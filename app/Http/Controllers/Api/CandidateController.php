<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Skill;
use App\Models\SkillSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CandidateController extends Controller
{
    public function index(){
        $data = Candidate::with(['skills'])->get();
        return response()->json($data,200);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'job_id' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:candidates',
            'phone' => 'required|numeric|digits_between:10,13|unique:candidates',
            'year' => 'required',
            'skill_id' => 'required'
        ]);

        if ($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ],422);
        }

        $data = Candidate::create([
            'job_id' => $request->job_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'year' => $request->year,
        ]);
        $candidate_id = $request->get('skill_id');
        $data->skills()->attach($candidate_id);

        return response()->json([
            'success' => true,
            'message' => 'successfully to apply job',
            'data' => $data
        ], 200);
    }
}
