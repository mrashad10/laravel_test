<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $customerNumber
 * @property string $checkNumber
 * @property string $paymentDate
 * @property float $amount
 * @property Customer $customer
 */
class Payment extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'paymentDate',
        'amount'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customerNumber', 'customerNumber');
    }
}
