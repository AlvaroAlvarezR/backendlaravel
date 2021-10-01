<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ListTypes;
use Validator;

class ListTypeController extends Controller
{
    private $rules = array(
        "name"=>"required"
    );

    public function getAll(){
        $data = ListTypes::get();
        return response()->json($data, 200);
    }

    public function create(Request $request){
        $validator = Validator::make($request->all(), $this->rules);
        if($validator->fails())
        {
            return $validator->errors();
        }
        else
        {
            $data['name'] = $request['name'];
            ListTypes::create($data);
            return response()->json([
                'message' => "Successfully created",
                'success' => true
            ], 200);
        }
    }

    public function delete($id){
        $res = ListTypes::find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }

    public function get($id){
        $data = ListTypes::find($id);
        return response()->json($data, 200);
    }

    public function update(Request $request,$id){
        $validator = Validator::make($request->all(), $this->rules);
        if($validator->fails())
        {
            return $validator->errors();
        }
        else
        {
            $data['name'] = $request['name'];
            ListTypes::find($id)->update($data);
            return response()->json([
                'message' => "Successfully updated",
                'success' => true
            ], 200);
        }
    }
}
