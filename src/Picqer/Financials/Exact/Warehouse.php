<?php namespace Picqer\Financials\Exact;

/**
 * Class Warehouse
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryWarehouses
 *
 * @property $ID Guid Primary key
 * @property $Code String Code of the warehouse
 * @property $Created DateTime Creation date
 * @property $Creator Guid User ID of creator
 * @property $CreatorFullName String Name of creator
 * @property $Description String The description of the warehouse
 * @property $Division Int32 Division code
 * @property $EMail String Email address
 * @property $Main Byte Indicates if this is the main warehouse. There's always exactly one main warehouse per administration
 * @property $ManagerUser Guid User reponsible for the warehouse
 * @property $Modified DateTime Last modified date
 * @property $Modifier Guid User ID of modifier
 * @property $ModifierFullName String Name of modifier
 * @property $UseStorageLocations Byte Indicates if this warehouse is using storage locations. The storage locations will not be removed when when this is deactivated
 */
class Warehouse extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'EMail',
        'Main',
        'ManagerUser',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'UseStorageLocations',
    ];
    protected $url = 'inventory/Warehouses';

}