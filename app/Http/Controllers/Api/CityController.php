<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\City\CityStoreRequest;
use App\Http\Resources\Api\CityCollection;
use App\Http\Resources\Api\CityResource;
use App\Models\City;
use App\Services\CityService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CityController extends Controller
{
    /**
     * @return CityCollection
     */
    public function index(): CityCollection
    {
        return CityCollection::make(City::query()->simplePaginate());
    }

    /**
     * @param CityStoreRequest $request
     * @param CityService $service
     *
     * @return CityResource
     * @throws Exception
     */
    public function store(CityStoreRequest $request, CityService $service): CityResource
    {
        $city = $service->createIfNotExist($request->validated());

        return CityResource::make($city);
    }

    /**
     * @param int $id
     *
     * @return CityResource
     */
    public function show(int $id): CityResource
    {
        return CityResource::make(City::query()->findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
