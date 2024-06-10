<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $productLine
 * @property string $textDescription
 * @property string $htmlDescription
 * @property string $image
 * @property Product[] $products
 */
class Productline extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'productLine';

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
    protected $fillable = ['textDescription', 'htmlDescription', 'image'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'productLine', 'productLine');
    }
}
