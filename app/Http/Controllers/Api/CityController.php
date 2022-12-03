<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\City\CityStoreRequest;
use App\Http\Resources\Api\CityCollection;
use App\Http\Resources\Api\CityResource;
use App\Models\City;
use App\Services\City\CityService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CityController extends Controller
{
    /**
     * Get cities
     * @group City
     *
     * @return CityCollection
     */
    public function index(): CityCollection
    {
        return CityCollection::make(City::query()->simplePaginate());
    }

    /**
     * Create city
     * @group City
     *
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
     * Get a city
     * @group City
     *
     * @param int $id
     *
     * @return CityResource
     */
    public function show(int $id): CityResource
    {
        return CityResource::make(City::query()->findOrFail($id));
    }

    /**
     * Update a city
     * @group City
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
     * Delete a city
     * @group City
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
