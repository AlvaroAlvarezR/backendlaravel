<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\thirdParties;
use Validator;

class ThirdPartieController extends Controller
{
    private $rules = array(
        "name1"=>"required",
        "name2"=>"required",
        "lastname1"=>"required",
        "lastname2"=>"required",
        "id_type_id"=>"required",
        "third_type_id"=>"required",
        "municipality_id"=>"required",
        "department_id"=>"required",
        "taxpayer_type_id"=>"required"
    );

    public function getAll(){
        $data = thirdParties::get();
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
            $data['name1'] = $request['name1'];
            $data['name2'] = $request['name2'];
            $data['lastname1'] = $request['lastname1'];
            $data['lastname2'] = $request['lastname2'];
            $data['id_type_id'] = $request['id_type_id'];
            $data['third_type_id'] = $request['third_type_id'];
            $data['municipality_id'] = $request['municipality_id'];
            $data['department_id'] = $request['department_id'];
            $data['taxpayer_type_id'] = $request['taxpayer_type_id'];
            thirdParties::create($data);
            return response()->json([
                'message' => "Successfully created",
                'success' => true
            ], 200);
        }
    }

    public function delete($id){
        $res = thirdParties::find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }

    public function get($id){
        $data = thirdParties::find($id);
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
            $data['name1'] = $request['name1'];
            $data['name2'] = $request['name2'];
            $data['lastname1'] = $request['lastname1'];
            $data['lastname2'] = $request['lastname2'];
            $data['id_type_id'] = $request['id_type_id'];
            $data['third_type_id'] = $request['third_type_id'];
            $data['municipality_id'] = $request['municipality_id'];
            $data['department_id'] = $request['department_id'];
            $data['taxpayer_type_id'] = $request['taxpayer_type_id'];
            thirdParties::find($id)->update($data);
            return response()->json([
                'message' => "Successfully updated",
                'success' => true
            ], 200);
        }   
    }
}
