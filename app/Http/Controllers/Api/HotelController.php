<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Hotel\HotelStoreRequest;
use App\Http\Requests\Api\Hotel\HotelUpdateRequest;
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
     * Get hotel
     * @group Hotel
     *
     * @return HotelCollection
     */
    public function index(): HotelCollection
    {
        return HotelCollection::make(Hotel::query()->simplePaginate());
    }

    /**
     * Create hotel
     * @group Hotel
     *
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
     * Get a hotel
     * @group Hotel
     *
     * @param int $id
     *
     * @return HotelResource
     */
    public function show(int $id): HotelResource
    {
        return HotelResource::make(Hotel::query()->with('city')->findOrFail($id));
    }

    /**
     * Update a hotel
     * @group Hotel
     *
     * @param HotelUpdateRequest $request
     * @param int $id
     * @param HotelService $hotelService
     *
     * @return HotelResource
     */
    public function update(HotelUpdateRequest $request, int $id, HotelService $hotelService): HotelResource
    {
        return HotelResource::make($hotelService->update($id, $request->validated()));
    }

    /**
     * Delete a hotel
     * @group Hotel
     *
     * @param int $id
     * @param HotelService $hotelService
     *
     * @return Response
     */
    public function destroy(int $id, HotelService $hotelService): Response
    {
        $hotelService->delete($id);

        return response()->noContent();
    }
}
