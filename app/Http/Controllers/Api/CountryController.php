<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Http\Resources\Api\AreaResource;
use App\Http\Resources\Api\CityResource;
use App\Http\Resources\Api\CountryResource;
use App\Traits\ResponseTrait;
use App\Models\Country;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CountryController extends Controller
{
    use ResponseTrait;

    public function index()
    {
            $countries = CountryResource::collection(Country::all());
            return $this->successData(['countries' => $countries]);

    }

    public function store(CountryRequest $request)
    {
        $country = Country::UpdateOrCreate(
            [
                'name'        => $request['name']
            ],
        );
        return $this->successData('success');

    }

    public function show($id)
    {
        $country = CountryResource::collection(Country::where('id',$id)->get());
        return $this->successData(['country' => $country]);
    }

    public function update($id, UpdateCountryRequest $request)
    {
        Country::findorfail($id)->update($request->validated());
        return $this->response('success', __('apis.updated'));


    }

    public function destroy($id)
    {
        $country = Country::find($id);
        $country->delete();
        return $this->successMsg(__('apis.deleted'));
    }

    public function citybycountry($id){

        $cities = AreaResource::collection(Country::where('id', $id)->get());
        return $this->successData(['cities' => $cities]);
    }
}
