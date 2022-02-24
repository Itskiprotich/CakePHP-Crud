<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PatientsFixture
 */
class PatientsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'family' => 'Lorem ipsum dolor sit amet',
                'given' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum d',
                'city' => 'Lorem ipsum dolor sit amet',
                'country' => 'Lorem ipsum dolor sit amet',
                'created_at' => '',
                'updated_at' => '',
            ],
        ];
        parent::init();
    }
}
