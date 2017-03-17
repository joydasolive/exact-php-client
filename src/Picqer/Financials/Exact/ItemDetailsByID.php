<?php namespace Picqer\Financials\Exact;

/**
 * Class ItemDetailsByID
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadLogisticsItemDetailsByID
 *
 * @property $ID Guid Primary key
 * @property $Code String Item code
 * @property $Description String Description of the item
 * @property $IsFractionAllowedItem Boolean Indicates if fractions (for example 0.35) are allowed for quantities of this item
 * @property $IsSalesItem Boolean Indicates if the item can be sold
 * @property $SalesCurrency String Currency of the sales price
 * @property $SalesPrice Double Sales price of the item
 */

class ItemDetailsByID extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Description',
        'IsFractionAllowedItem',
        'IsSalesItem',
        'SalesCurrency',
        'SalesPrice',
    ];

    protected $url = 'read/logistics/ItemDetailsByID';

}