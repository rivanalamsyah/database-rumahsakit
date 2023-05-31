<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PasienFixture
 */
class PasienFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pasien';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'No_RM' => 1,
                'Nama' => 'Lorem ipsum dolor sit amet',
                'tempat_lahir' => 'Lorem ipsum dolor sit amet',
                'tgl_lahir' => '2023-04-04',
                'Alamat' => 'Lorem ipsum dolor sit amet',
                'gol_darah' => 'Lor',
            ],
        ];
        parent::init();
    }
}
