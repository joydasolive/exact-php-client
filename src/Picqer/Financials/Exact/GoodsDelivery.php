<?php namespace Picqer\Financials\Exact;

/**
 * Class GoodsDelivery
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderGoodsDeliveries
 *
 * @property $EntryID Guid Primary key
 * @property $Created DateTime Creation date
 * @property $Creator Guid User ID of creator
 * @property $CreatorFullName String Name of creator
 * @property $DeliveryAccount Guid Reference to account for delivery
 * @property $DeliveryAccountCode String Delivery account code
 * @property $DeliveryAccountName String Account name
 * @property $DeliveryAddress Guid Reference to shipping address
 * @property $DeliveryContact Guid Reference to contact for delivery
 * @property $DeliveryContactPersonFullName String Name of the contact person of the customer who will receive delivered goods
 * @property $DeliveryDate DateTime Date of goods delivery
 * @property $DeliveryNumber Int32 Delivery number
 * @property $Description String Header description
 * @property $Division Int32 Division code
 * @property $Document Guid Document that is manually linked to the sales order delivery
 * @property $DocumentSubject String Document Subject
 * @property $EntryNumber Int32 Entry number
 * @property $GoodsDeliveryLines GoodsDeliveryLines Collection of lines
 * @property $Modified DateTime Last modified date
 * @property $Modifier Guid User ID of modifier
 * @property $ModifierFullName String Name of modifier
 * @property $Remarks String Remarks
 * @property $ShippingMethod Guid Reference to shipping method
 * @property $ShippingMethodCode String Code of shipping method
 * @property $ShippingMethodDescription String Description of shipping method
 * @property $TrackingNumber String Reference to header tracking number
 * @property $Warehouse Guid Warehouse
 * @property $WarehouseCode String Code of Warehouse
 * @property $WarehouseDescription String Description of Warehouse
 */
class GoodsDelivery extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'EntryID',
        'Created',
        'Creator',
        'CreatorFullName',
        'DeliveryAccount',
        'DeliveryAccountCode',
        'DeliveryAccountName',
        'DeliveryAddress',
        'DeliveryContact',
        'DeliveryContactPersonFullName',
        'DeliveryDate',
        'DeliveryNumber',
        'Description',
        'Division',
        'Document',
        'DocumentSubject',
        'EntryNumber',
        'GoodsDeliveryLines',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Remarks',
        'ShippingMethod',
        'ShippingMethodCode',
        'ShippingMethodDescription',
        'TrackingNumber',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];
    protected $url = 'salesorder/GoodsDeliveries';

}