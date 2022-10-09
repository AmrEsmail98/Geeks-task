<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Http\Resources\Api\CityResource;
use App\Models\City;
use App\Traits\ResponseTrait;

class CityController extends Controller{
    use ResponseTrait;

    public function index(){
        $cities = CityResource::collection(City::all());
        return $this->successData(['cities' => $cities]);
    }

    public function store (CityRequest $request){
        $city = City::UpdateOrCreate(
            [
                'name'        => $request['name'],
                'country_id'        => $request['country_id']
            ],
        );
        return $this->successData('success');
    }

    public function show($id)
    {
        $city = CityResource::collection(City::where('id',$id)->get());
        return $this->successData(['city' => $city]);
    }

    public function update($id, UpdateCityRequest $request)
    {
        City::findorfail($id)->update($request->validated());
        return $this->response('success', __('apis.updated'));


    }
    public function destroy($id)
    {
        $city = City::find($id);
        $city->delete();
        return $this->successMsg(__('apis.deleted'));
    }
}
