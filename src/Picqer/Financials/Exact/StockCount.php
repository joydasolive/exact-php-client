<?php namespace Picqer\Financials\Exact;

/**
* Class StockCount
*
* @package Picqer\Financials\Exact
* @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryStockCounts
*
* @property $StockCountID Guid Primary key
* @property $Created DateTime Creation date
* @property $Creator Guid User ID of creator
* @property $CreatorFullName String Name of creator
* @property $Description String Description of the stock count
* @property $Division Int32 Division code
* @property $EntryNumber Int32 Entry number of the stock transactions
* @property $Modified DateTime Last modified date
* @property $Modifier Guid User ID of modifier
* @property $ModifierFullName String Name of modifier
* @property $OffsetGLInventory Guid Offset GL account of inventory
* @property $OffsetGLInventoryCode String GLAccount code
* @property $OffsetGLInventoryDescription String GLAccount description
* @property $Source Int16 Source of stock count entry: 1-Manual entry, 2-Import, 3-Stock count, 4-Web service
* @property $Status Int16 Stock count status: 12-Draft, 21-Processed
* @property $StockCountDate DateTime Stock count date
* @property $StockCountLines StockCountLines Collection of stock count lines
* @property $StockCountNumber Int32 Human readable id of the stock count
* @property $Warehouse Guid Warehouse
* @property $WarehouseCode String Code of Warehouse
* @property $WarehouseDescription String Description of Warehouse
*/

class StockCount extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'StockCountID';

    protected $fillable = [
    'StockCountID',
    'Created',
    'Creator',
    'CreatorFullName',
    'Description',
    'Division',
    'EntryNumber',
    'Modified',
    'Modifier',
    'ModifierFullName',
    'OffsetGLInventory',
    'OffsetGLInventoryCode',
    'OffsetGLInventoryDescription',
    'Source',
    'Status',
    'StockCountDate',
    'StockCountLines',
    'StockCountNumber',
    'Warehouse',
    'WarehouseCode',
    'WarehouseDescription',
    ];

    protected $url = 'inventory/StockCounts';

    public function getStockCountLines() {
        if(array_key_exists('__deferred', $this->attributes['StockCountLines'])) {
            $this->attributes['StockCountLines'] = (new StockCountLine($this->connection()))->filter("StockCountID eq guid'{$this->StockCountID}'");
        }
        return $this->attributes['StockCountLines'];
    }

}