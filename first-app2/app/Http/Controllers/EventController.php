<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;


use App\Models\Event;

class EventController extends Controller
{
    public function getAllEvent() {
        $res = Event::getAll();

        return response()->json([
            'status' => 'success',
            'message' => 'Data fetched successfully',
            'data' => $res
        ], Response::HTTP_OK);
    } 
    
    public function createEvent(Request $request) {
        $validator = Validator::make($request->all(), [
            'id' => 'required|string|unique:event,id',
            'description' => 'required|string',
            'date_start' => 'required|date_format:Y-m-d',
            'date_end' => 'required|date_format:Y-m-d',
            'type' => 'required|in:exam, holiday'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $res = Event::createEvent($validator->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'Launch codes created successfully',
            'data' => $res
        ], Response::HTTP_CREATED);
    }

    public function deleteEvent($id) {
        $res = Event::deleteByID($id);

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

    public function updateEvent(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'id' => 'sometimes|string|unique:event,id',
            'description' => 'sometimes|string|unique:event,description',
            'date_start' => 'sometimes|date_format:Y-m-d',
            'date_end' => 'sometimes|date_format:Y-m-d',
            'type' => 'sometimes|in:exam, holiday'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $res = Event::updateByID($id, $validator->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'Nuclear launch codes updated',
            'data' => $res
        ], Response::HTTP_CREATED);
    }
}
