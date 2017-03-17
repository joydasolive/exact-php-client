<?php namespace Picqer\Financials\Exact;

/**
 * Class ReadSalesItemPrice
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadLogisticsSalesItemPrice
 *
 * @property $CurrencyCode String
 * @property $ItemCode String Code of Item
 * @property $ItemDescription String Description of Item
 * @property $ItemId Guid
 * @property $PriceExcludingVAT Double
 * @property $PriceIncludingVAT Double
 * @property $UnitCode String
 * @property $UnitDescription String Description of the price unit
 * @property $VATCode String
 */

class ReadSalesItemPrice extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'CurrencyCode',
        'ItemCode',
        'ItemDescription',
        'ItemId',
        'PriceExcludingVAT',
        'PriceIncludingVAT',
        'UnitCode',
        'UnitDescription',
        'VATCode',
    ];

    protected $url = 'read/logistics/SalesItemPrice';

}