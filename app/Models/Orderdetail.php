<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $orderNumber
 * @property string $productCode
 * @property integer $quantityOrdered
 * @property float $priceEach
 * @property integer $orderLineNumber
 * @property Order $order
 * @property Product $product
 */
class Orderdetail extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'quantityOrdered',
        'priceEach',
        'orderLineNumber'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'orderNumber', 'orderNumber');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'productCode', 'productCode');
    }
}
