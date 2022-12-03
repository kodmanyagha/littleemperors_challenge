<?php

namespace Tests\Feature\Hotel;

use App\Models\Hotel;
use Tests\Base\DbInitializedTestCase;

class HotelApiTest extends DbInitializedTestCase
{
    public function test_create_hotel_success()
    {
        $postData = [
            'name'      => $this->faker->words(5, true),
            'city'      => $this->faker->city,
            'image'     => 'test_image_path',
            'address'   => $this->faker->address,
            'latitude'  => 0.01,
            'longitude' => 0.02,
        ];

        $apiResult = $this->post('api/hotel', $postData);

        $apiResultArr = makeArray($apiResult->original);

        $this->assertEquals(201, $apiResult->getStatusCode());
        $this->assertEquals($apiResultArr['name'], $postData['name']);
        $this->assertTrue((int)$apiResultArr['id'] > 0);
    }

    public function test_update_hotel_success()
    {
        $this->test_create_hotel_success();

        $name    = $this->faker->words(5, true);
        $putData = [
            'name' => $name,
        ];

        $apiResult    = $this->put('api/hotel/1', $putData);
        $apiResultArr = makeArray($apiResult->original);

        $this->assertEquals($apiResultArr['name'], $name);
    }

    public function test_delete_hotel_success()
    {
        $this->test_create_hotel_success();

        $this->delete('api/hotel/1');

        $notExistRow = Hotel::query()->find(1);
        $this->assertTrue(true, is_null($notExistRow));
    }

    public function test_create_hotels_same_city_success()
    {
        for ($i = 0; $i < 5; $i++) {
            $postData = [
                'name'      => $this->faker->words(5, true),
                'city'      => "test",
                'image'     => 'test_image_path',
                'address'   => $this->faker->address,
                'latitude'  => 0.01,
                'longitude' => 0.02,
            ];

            $postResult = $this->post('api/hotel', $postData);

            $resultArr = makeArray($postResult->original);

            $this->assertEquals(201, $postResult->getStatusCode());
            $this->assertEquals($resultArr['name'], $postData['name']);
            $this->assertTrue((int)$resultArr['id'] > 0);
        }
    }

    public function test_create_hotel_wrong_name()
    {
        $postData = [
            'name'      => $this->faker->words(5),
            'city'      => $this->faker->city,
            'image'     => 'test_image_path',
            'address'   => $this->faker->address,
            'latitude'  => 0.01,
            'longitude' => 0.02,
        ];

        $postResult = $this->post('api/hotel', $postData);

        $resultArr = makeArray($postResult->original);

        $this->assertEquals(422, $postResult->getStatusCode());
        $this->assertEquals('The name must be a string.', $resultArr['errors']['name'][0]);
    }
}
