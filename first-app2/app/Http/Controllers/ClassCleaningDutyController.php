<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;


use App\Models\ClassCleaningDuty;

class ClassCleaningDutyController extends Controller
{
    public function getAllClassCleaningDuty() {
        $res = ClassCleaningDuty::getAll();

        return response()->json([
            'status' => 'success',
            'message' => 'Data fetched successfully',
            'data' => $res
        ], Response::HTTP_OK);
    } 
    
    public function createClassCleaningDuty(Request $request) {
        $validator = Validator::make($request->all(), [
            'id' => 'required|string|unique:class_cleaning_duty,id',
            'student_id' => 'required|string|unique:class_cleaning_duty,student_id',
            'day_name' => 'required|in:monday,tuesday,wednesday,thursday,friday,saturday,sunday'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $res = ClassCleaningDuty::createClassCleaningDuty($validator->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'Launch codes created successfully',
            'data' => $res
        ], Response::HTTP_CREATED);
    }

    public function deleteClassCleaningDuty($id) {
        $res = ClassCleaningDuty::deleteByID($id);

        if (!$res){
            return response()->json([
            'status' => 'failed',
            'message' => 'Not sure where it is lmao',
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Data deleted',
        ], Response::HTTP_OK);
    }

    public function updateClassCleaningDuty(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'id' => 'sometimes|string|unique:class_cleaning_duty,id',
            'student_id' => 'sometimes|string|unique:class_cleaning_duty,student_id',
            'day_name' => 'sometimes|in:monday,tuesday,wednesday,thursday,friday,saturday,sunday'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $res = ClassCleaningDuty::updateByID($id, $validator->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'Nuclear launch codes updated',
            'data' => $res
        ], Response::HTTP_CREATED);
    }
}
