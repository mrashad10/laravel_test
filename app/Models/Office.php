<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $officeCode
 * @property string $city
 * @property string $phone
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $state
 * @property string $country
 * @property string $postalCode
 * @property string $territory
 * @property Employee[] $employees
 */
class Office extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'officeCode';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'city',
        'phone',
        'addressLine1',
        'addressLine2',
        'state',
        'country',
        'postalCode',
        'territory'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees()
    {
        return $this->hasMany('App\Models\Employee', 'officeCode', 'officeCode');
    }
}
