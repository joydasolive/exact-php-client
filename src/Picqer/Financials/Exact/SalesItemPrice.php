<?php namespace Picqer\Financials\Exact;

/**
 * Class SalesItemPrice
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsSalesItemPrices
 *
 * @property $ID Guid Primary key
 * @property $Account Guid ID of the customer
 * @property $AccountName String Name of the customer account
 * @property $Created DateTime Creation date
 * @property $Creator Guid User ID of creator
 * @property $CreatorFullName String Name of creator
 * @property $Currency String The currency of the price
 * @property $DefaultItemUnit String The default unit of the item
 * @property $DefaultItemUnitDescription String The description of the default item unit
 * @property $Division Int32 Division code
 * @property $EndDate DateTime Together with StartDate this determines whether the price is active
 * @property $Item Guid Item ID
 * @property $ItemCode String Code of Item
 * @property $ItemDescription String Description of Item
 * @property $Modified DateTime Last modified date
 * @property $Modifier Guid User ID of modifier
 * @property $ModifierFullName String Name of modifier
 * @property $NumberOfItemsPerUnit Double This is the multiplication factor when going from default item unit to the unit of this price.For example if the default item unit is 'gram' and the price unit is 'kilogram' then the value of this property is 1000.
 * @property $Price Double The actual price of this sales item
 * @property $Quantity Double Minimum quantity to which the price is applicable
 * @property $StartDate DateTime Together with EndDate this determines whether the price is active
 * @property $Unit String The unit code of the price
 * @property $UnitDescription String Description of the price unit
 */

class SalesItemPrice extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'DefaultItemUnit',
        'DefaultItemUnitDescription',
        'Division',
        'EndDate',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'NumberOfItemsPerUnit',
        'Price',
        'Quantity',
        'StartDate',
        'Unit',
        'UnitDescription',
    ];

    protected $url = 'logistics/SalesItemPrices';

}