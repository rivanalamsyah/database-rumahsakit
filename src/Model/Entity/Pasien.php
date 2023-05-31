<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pasien Entity
 *
 * @property int $No_RM
 * @property string $Nama
 * @property string $tempat_lahir
 * @property \Cake\I18n\FrozenDate $tgl_lahir
 * @property string $Alamat
 * @property string $gol_darah
 */
class Pasien extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'Nama' => true,
        'tempat_lahir' => true,
        'tgl_lahir' => true,
        'Alamat' => true,
        'gol_darah' => true,
    ];
}
