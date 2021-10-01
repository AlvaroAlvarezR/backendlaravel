<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ListElements;
use Validator;

class ListElementController extends Controller
{
    private $rules = array(
        "name"=>"required",
        "list_types_id"=>"required"
    );

    public function getAll(){
        $data = ListElements::get();
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
            $data['list_types_id'] = $request['list_types_id'];
            ListElements::create($data);
            return response()->json([
                'message' => "Successfully created",
                'success' => true
            ], 200);

        }
    }

    public function delete($id){
        $res = ListElements::find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }

    public function get($id){
        $data = ListElements::with('listTypes')->find($id);
        return response()->json($data, 200);
    }

    public function update(Request $request,$id){
        $rules = array(
            "name"=>"required",
            "list_types_id"=>"required"
        );
        $validator = Validator::make($request->all(), $this->rules);
        $data['name'] = $request['name'];
        $data['list_types_id'] = $request['list_types_id'];
        if($validator->fails())
        {
            return $validator->errors();
        }
        else
        {
            ListElements::find($id)->update($data);
            return response()->json([
                'message' => "Successfully updated",
                'success' => true
            ], 200);
        }
    }
}
