<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $productCode
 * @property string $productName
 * @property string $productLine
 * @property string $productScale
 * @property string $productVendor
 * @property string $productDescription
 * @property integer $quantityInStock
 * @property float $buyPrice
 * @property float $MSRP
 * @property Orderdetail[] $orderdetails
 * @property Productline $productline
 */
class Product extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'productCode';

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
        'productName',
        'productLine',
        'productScale',
        'productVendor',
        'productDescription',
        'quantityInStock',
        'buyPrice',
        'MSRP'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderdetails()
    {
        return $this->hasMany('App\Models\Orderdetail', 'productCode', 'productCode');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productline()
    {
        return $this->belongsTo('App\Models\Productline', 'productLine', 'productLine');
    }
}
