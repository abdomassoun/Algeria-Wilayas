<?php

namespace Abdo\AlgeriaWilayas\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AlgWilaya
 *
 * @package Abdo\AlgeriaWilayas\Models
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $arabic_name
 * @property float $latitude
 * @property float $longitude
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class AlgWilaya extends Model
{
    use HasFactory;

    protected $table = 'alg_wilayas';

    protected $fillable = [
        'name',
        'code',
        'arabic_name',
        'latitude',
        'longitude',
    ];
}
