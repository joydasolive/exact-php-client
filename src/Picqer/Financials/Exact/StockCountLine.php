<?php namespace Picqer\Financials\Exact;

/**
 * Class StockCountLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryStockCountLines
 *
 * @property $ID Guid Primary key
 * @property $BatchNumbers BatchNumbers The collection of batch numbers that belong to the items included in this stock count
 * @property $CostPrice Double Cost price of the item that is used to create the stock count
 * @property $Created DateTime Creation date
 * @property $Creator Guid User ID of creator
 * @property $CreatorFullName String Name of creator
 * @property $Division Int32 Division code
 * @property $Item Guid Reference to the item for which the stock is counted
 * @property $ItemCode String Item code
 * @property $ItemCostPrice Double Current standard/actual item cost price
 * @property $ItemDescription String Description of item
 * @property $ItemDivisable Boolean Indicates if fractional quantities of the item can be used, for example quantity = 0.4
 * @property $LineNumber Int32 Line number
 * @property $Modified DateTime Last modified date
 * @property $Modifier Guid User ID of modifier
 * @property $ModifierFullName String Name of modifier
 * @property $QuantityDifference Double The difference between the current quantity in stock and the new quantity in stock. For example specify -1 for this field to correct the quantity if one item in stock is broken.
 * @property $QuantityInStock Double The current quantity available in stock
 * @property $QuantityNew Double The new quantity in stock. Use this field to correct the quantity when the items in stock are physically counted.
 * @property $SerialNumbers SerialNumbers The collection of serial numbers that belong to the items included in this stock count
 * @property $StockCountID Guid Identifies the stock count. All the lines of a stock count have the same StockCountID
 * @property $StockKeepingUnit String Stock item's unit description
 * @property $StorageLocation Guid Storage location
 * @property $StorageLocationCode String Storage location code
 * @property $StorageLocationDescription String Storage location description
 */

class StockCountLine extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'BatchNumbers',
        'CostPrice',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Item',
        'ItemCode',
        'ItemCostPrice',
        'ItemDescription',
        'ItemDivisable',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'QuantityDifference',
        'QuantityInStock',
        'QuantityNew',
        'SerialNumbers',
        'StockCountID',
        'StockKeepingUnit',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
    ];

    protected $url = 'inventory/StockCountsLines';

}