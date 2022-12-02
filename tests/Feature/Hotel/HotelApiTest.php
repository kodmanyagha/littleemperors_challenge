<?php

namespace Tests\Feature\Hotel;

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

        $postResult = $this->post('api/hotel', $postData);

        $resultArr = makeArray($postResult->original);

        $this->assertEquals(201, $postResult->getStatusCode());
        $this->assertEquals($resultArr['name'], $postData['name']);
        $this->assertTrue((int)$resultArr['id'] > 0);
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
