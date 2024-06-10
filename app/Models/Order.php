<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $orderNumber
 * @property string $orderDate
 * @property string $requiredDate
 * @property string $shippedDate
 * @property string $status
 * @property string $comments
 * @property integer $customerNumber
 * @property Orderdetail[] $orderdetails
 * @property Customer $customer
 */
class Order extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'orderNumber';

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
        'orderDate',
        'requiredDate',
        'shippedDate',
        'status',
        'comments',
        'customerNumber'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderdetails()
    {
        return $this->hasMany('App\Models\Orderdetail', 'orderNumber', 'orderNumber');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customerNumber', 'customerNumber');
    }
}
