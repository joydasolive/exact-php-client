<?php namespace Picqer\Financials\Exact;

/**
 * Class SalesOrderLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderSalesOrderLines
 *
 * @property $ID Guid Primary key
 * @property $AmountDC Double Amount in the default currency of the company
 * @property $AmountFC Double Amount in the currency of the transaction
 * @property $CostCenter String Reference to Cost center
 * @property $CostCenterDescription String Description of CostCenter
 * @property $CostPriceFC Double Item cost price
 * @property $CostUnit String Reference to Cost unit
 * @property $CostUnitDescription String Description of CostUnit
 * @property $DeliveryDate DateTime Delivery date of this line
 * @property $Description String Description
 * @property $Discount Double Discount given on the default price. Discount = (DefaultPrice of Item - PriceItem in line) / DefaultPrice of Item
 * @property $Division Int32 Division code
 * @property $Item Guid Reference to the item that is sold in this sales order line
 * @property $ItemCode String Code of Item
 * @property $ItemDescription String Description of Item
 * @property $ItemVersion Guid Item Version
 * @property $ItemVersionDescription String Description of Item Version
 * @property $LineNumber Int32 Line number
 * @property $Margin Double Sales margin of the sales order line
 * @property $NetPrice Double Net price of the sales order line
 * @property $Notes String Extra notes
 * @property $OrderID Guid The OrderID identifies the sales order. All the lines of a sales order have the same OrderID
 * @property $OrderNumber Int32 Number of sales order
 * @property $Pricelist Guid Price list
 * @property $PricelistDescription String Description of Pricelist
 * @property $Project Guid The project to which the sales order line is linked. The project can be different per line. Sometimes also the project in the header is filled although this is not really used
 * @property $ProjectDescription String Description of Project
 * @property $Quantity Double The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property $QuantityDelivered Double The number of items delivered
 * @property $QuantityInvoiced Double The number of items invoiced
 * @property $ShopOrder Guid Reference to ShopOrder
 * @property $TaxSchedule Guid Tax schedule linked
 * @property $TaxScheduleCode String Code of the tax schedule
 * @property $TaxScheduleDescription String Description of the tax schedule
 * @property $UnitCode String Code of item unit
 * @property $UnitDescription String Description of Unit
 * @property $UnitPrice Double Price per unit in the currency of the transaction
 * @property $UseDropShipment Byte Indicates if drop shipment is used (delivery directly to customer, invoice to wholesaler)
 * @property $VATAmount Double VAT amount in the currency of the transaction
 * @property $VATCode String VAT code
 * @property $VATCodeDescription String Description of VATCode
 * @property $VATPercentage Double The vat percentage of the VAT code. This is the percentage at the moment the sales order is created. It's also used for the default calculation of VAT amounts and VAT base amounts
 */
class SalesOrderLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AmountDC',
        'AmountFC',
        'CostCenter',
        'CostCenterDescription',
        'CostPriceFC',
        'CostUnit',
        'CostUnitDescription',
        'DeliveryDate',
        'Description',
        'Discount',
        'Division',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemVersion',
        'ItemVersionDescription',
        'LineNumber',
        'Margin',
        'NetPrice',
        'Notes',
        'OrderID',
        'OrderNumber',
        'Pricelist',
        'PricelistDescription',
        'Project',
        'ProjectDescription',
        'Quantity',
        'QuantityDelivered',
        'QuantityInvoiced',
        'ShopOrder',
        'TaxSchedule',
        'TaxScheduleCode',
        'TaxScheduleDescription',
        'UnitCode',
        'UnitDescription',
        'UnitPrice',
        'UseDropShipment',
        'VATAmount',
        'VATCode',
        'VATCodeDescription',
        'VATPercentage',
    ];
    protected $url = 'salesorder/SalesOrderLines';

}