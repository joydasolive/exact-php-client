<?php namespace Picqer\Financials\Exact;

/**
 * Class ItemWarehouseStorageLocation
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryItemWarehouseStorageLocations
 *
 * @property $Item Guid Item
 * @property $IsFractionAllowedItem Byte Does the item allow partial quantities (1.75 meters)
 * @property $ItemCode String Code of the item of this stock quantity
 * @property $ItemDescription String Description of the item of this stock quantity
 * @property $ItemUnit String Unit of the item
 * @property $ItemUnitDescription String Unit description of the item
 * @property $Stock Double Number of items in stock
 * @property $StorageLocation Guid Storage location of this stock
 * @property $StorageLocationCode String Code of the storage location of this stock quantity
 * @property $StorageLocationDescription String Description of the storage location of this stock quantity
 * @property $Warehouse Guid ID of Warehouse
 * @property $WarehouseCode String Code of the warehouse of this stock quantity
 * @property $WarehouseDescription String Description of the warehouse of this stock quantity
 */

class ItemWarehouseStorageLocation extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'Item',
        'IsFractionAllowedItem',
        'ItemCode',
        'ItemDescription',
        'ItemUnit',
        'ItemUnitDescription',
        'Stock',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'inventory/ItemWarehouseStorageLocations';

}