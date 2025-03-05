<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PostesFixture
 */
class PostesFixture extends TestFixture
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
                'title' => '',
                'content' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
                'created' => '2025-03-05 15:34:00',
                'modified' => '2025-03-05 15:34:00',
            ],
        ];
        parent::init();
    }
}
