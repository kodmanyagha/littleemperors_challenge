<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Hotel\HotelStoreRequest;
use App\Http\Resources\Api\HotelCollection;
use App\Http\Resources\Api\HotelResource;
use App\Models\Hotel;
use App\Services\City\CityService;
use App\Services\Hotel\HotelService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HotelController extends Controller
{
    /**
     * @return HotelCollection
     */
    public function index(): HotelCollection
    {
        return HotelCollection::make(Hotel::query()->simplePaginate());
    }

    /**
     * @param HotelStoreRequest $request
     * @param HotelService $hotelService
     *
     * @return HotelResource
     */
    public function store(HotelStoreRequest $request, HotelService $hotelService): HotelResource
    {
        return HotelResource::make($hotelService->create($request->validated()));
    }

    /**
     * @param int $id
     *
     * @return HotelResource
     */
    public function show(int $id): HotelResource
    {
        return HotelResource::make(Hotel::query()->findOrFail($id));
    }

    /**
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
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
