<?php namespace Picqer\Financials\Exact;

/**
 * Class SalesOrder
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderSalesOrders
 *
 * @property $OrderID Guid Primary key
 * @property $AmountDC Double Amount in the default currency of the company
 * @property $AmountFC Double Amount in the currency of the transaction
 * @property $ApprovalStatus Int16 Shows if this sales order is approved
 * @property $ApprovalStatusDescription String Description of ApprovalStatus
 * @property $Approved DateTime Approval datetime
 * @property $Approver Guid User who approved the sales order
 * @property $ApproverFullName String Name of approver
 * @property $Created DateTime Creation date
 * @property $Creator Guid User ID of creator
 * @property $CreatorFullName String Name of creator
 * @property $Currency String Currency code
 * @property $DeliverTo Guid Reference to delivery customer
 * @property $DeliverToContactPerson Guid Reference to contact person of delivery customer
 * @property $DeliverToContactPersonFullName String Name of contact person of delivery customer
 * @property $DeliverToName String Name of delivery customer
 * @property $DeliveryAddress Guid Delivery address
 * @property $DeliveryDate DateTime Delivery date
 * @property $DeliveryStatus Int16 Shipping status
 * @property $DeliveryStatusDescription String Description of DeliveryStatus
 * @property $Description String Description
 * @property $Division Int32 Division code
 * @property $Document Guid Document that is manually linked to the sales order
 * @property $DocumentNumber Int32 Number of the document
 * @property $DocumentSubject String Subject of the document
 * @property $InvoiceStatus Int16 Invoice status
 * @property $InvoiceStatusDescription String Description of InvoiceStatus
 * @property $InvoiceTo Guid Reference to the Customer who will receive the invoice
 * @property $InvoiceToContactPerson Guid Reference to the Contact person of the customer who will receive the invoice
 * @property $InvoiceToContactPersonFullName String Name of the contact person of the customer who will receive the invoice
 * @property $InvoiceToName String Name of the customer who will receive the invoice
 * @property $Modified DateTime Last modified date
 * @property $Modifier Guid User ID of modifier
 * @property $ModifierFullName String Name of modifier
 * @property $OrderDate DateTime Order date
 * @property $OrderedBy Guid Customer who ordered the sales order
 * @property $OrderedByContactPerson Guid Contact person of the customer who ordered the sales order
 * @property $OrderedByContactPersonFullName String Name of contact person of the customer who ordered the sales order
 * @property $OrderedByName String Name of the customer who ordered the sales order
 * @property $OrderNumber Int32 Number of sales order
 * @property $PaymentCondition String The payment condition used for due date and discount calculation
 * @property $PaymentConditionDescription String Description of PaymentCondition
 * @property $PaymentReference String Payment reference for sales order
 * @property $Remarks String Extra remarks
 * @property $SalesOrderLines SalesOrderLines Collection of lines
 * @property $Salesperson Guid Sales representative
 * @property $SalespersonFullName String Name of sales representative
 * @property $ShippingMethod Guid ShippingMethod
 * @property $ShippingMethodDescription String Description of ShippingMethod
 * @property $Status Int16 The status of the sales order. 12 = Open, 20 = Partial, 21 = Complete, 45 = Cancelled.
 * @property $StatusDescription String Description of Status
 * @property $TaxSchedule Guid Tax schedule linked
 * @property $TaxScheduleCode String Code of the tax schedule
 * @property $TaxScheduleDescription String Description of the tax schedule
 * @property $WarehouseCode String Code of Warehouse
 * @property $WarehouseDescription String Description of Warehouse
 * @property $WarehouseID Guid Warehouse
 * @property $YourRef String The reference number of the customer
 */
class SalesOrder extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'OrderID',
        'AmountDC',
        'AmountFC',
        'ApprovalStatus',
        'ApprovalStatusDescription',
        'Approved',
        'Approver',
        'ApproverFullName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'DeliverTo',
        'DeliverToContactPerson',
        'DeliverToContactPersonFullName',
        'DeliverToName',
        'DeliveryAddress',
        'DeliveryDate',
        'DeliveryStatus',
        'DeliveryStatusDescription',
        'Description',
        'Division',
        'Document',
        'DocumentNumber',
        'DocumentSubject',
        'InvoiceStatus',
        'InvoiceStatusDescription',
        'InvoiceTo',
        'InvoiceToContactPerson',
        'InvoiceToContactPersonFullName',
        'InvoiceToName',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'OrderDate',
        'OrderedBy',
        'OrderedByContactPerson',
        'OrderedByContactPersonFullName',
        'OrderedByName',
        'OrderNumber',
        'PaymentCondition',
        'PaymentConditionDescription',
        'PaymentReference',
        'Remarks',
        'SalesOrderLines',
        'Salesperson',
        'SalespersonFullName',
        'ShippingMethod',
        'ShippingMethodDescription',
        'Status',
        'StatusDescription',
        'TaxSchedule',
        'TaxScheduleCode',
        'TaxScheduleDescription',
        'WarehouseCode',
        'WarehouseDescription',
        'WarehouseID',
        'YourRef',
    ];

    public function getSalesOrderLines() {
        if(array_key_exists('__deferred', $this->attributes['SalesOrderLines'])) {
            $this->attributes['SalesOrderLines'] = (new SalesOrderLine($this->connection()))->filter("OrderID eq guid'{$this->OrderID}'");
        }
        return $this->attributes['SalesOrderLines'];
    }

    protected $url = 'salesorder/SalesOrders';

}