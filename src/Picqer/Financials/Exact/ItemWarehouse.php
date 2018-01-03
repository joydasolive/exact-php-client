<?php namespace Picqer\Financials\Exact;

/**
 * Class ItemWarehouse
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryItemWarehouses
 *
 * @property $ID Guid Primary key
 * @property $Created DateTime Creation date
 * @property $Creator Guid User ID of creator
 * @property $CreatorFullName String Name of creator
 * @property $CurrentStock Double Quantity that is currently on stock, sales/purchase orders excluded
 * @property $DefaultStorageLocation Guid This is a default storage location
 * @property $DefaultStorageLocationCode String Default storage location's code
 * @property $DefaultStorageLocationDescription String Default storage location's description
 * @property $Division Int32 Division code
 * @property $Item Guid Item ID
 * @property $ItemCode String Code of item
 * @property $ItemDescription String Description of item
 * @property $ItemIsFractionAllowedItem Boolean Indicates if fractions (for example 0.35) are allowed for quantities of this item
 * @property $ItemUnit String The standard unit code of this item
 * @property $ItemUnitDescription String Description of item's unit
 * @property $MaximumStock Double Maximum number of stock could enter warehouse
 * @property $Modified DateTime Last modified date
 * @property $Modifier Guid User ID of modifier
 * @property $ModifierFullName String Name of modifier
 * @property $PlannedStockIn Double The quantity still open to be received based on i.e. purchase orders and assembly orders.
 * @property $PlannedStockOut Double The quantity still open to be delivered based on i.e. sales orders and assembly orders.
 * @property $PlanningDetailsUrl String URL of the stock planning details of this record
 * @property $ProjectedStock Double The quantity of stock projected given all planned future stock changes
 * @property $ReorderPoint Double Reorder point when stock depletes
 * @property $ReservedStock Double The quantity in a back to back order process which is already received from the purchase order, but not yet delivered for the sales order.
 * @property $SafetyStock Double Safety stock
 * @property $StorageLocationUrl String URL pointing to details of which storage locations this ItemWarehouse's stock is located
 * @property $Warehouse Guid Warehouse ID
 * @property $WarehouseCode String Code of warehouse
 * @property $WarehouseDescription String Description of warehouse
 */

class ItemWarehouse extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'CurrentStock',
        'DefaultStorageLocation',
        'DefaultStorageLocationCode',
        'DefaultStorageLocationDescription',
        'Division',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemIsFractionAllowedItem',
        'ItemUnit',
        'ItemUnitDescription',
        'MaximumStock',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PlannedStockIn',
        'PlannedStockOut',
        'PlanningDetailsUrl',
        'ProjectedStock',
        'ReorderPoint',
        'ReservedStock',
        'SafetyStock',
        'StorageLocationUrl',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'inventory/ItemWarehouses';

}