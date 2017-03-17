<?php namespace Picqer\Financials\Exact;

/**
 * Class InvoiceSalesOrder
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesInvoiceInvoiceSalesOrders
 *
 * @property $ID Guid Primary key
 * @property $CreateMode Int32 Invoice creation mode- 0: Per customer 1: Per sales order
 * @property $DeliveryNumber Int32 Stock entries entry number.
 * @property $EndDate DateTime Stock entries entry end date.
 * @property $Errors String Errors in the process.
 * @property $InvoiceMode Int32 Invoice quantity processing mode- 0:By quantity delivered 1:By quantity ordered.
 * @property $JournalCode String Code of Journal
 * @property $NumberOfCreatedInvoices Int32 Number of invoices successfully created.
 * @property $NumberOfFailedInvoices Int32 Number of invoices failed to create.
 * @property $SalesOrderIDs SalesOrderIDs Collection of Sales order IDs.
 * @property $StartDate DateTime Stock entries entry start date.
 * @property $UserInvoiceDate DateTime Possibility to override the InvoiceDate during creation of sales invoice from sales orders. Works only for integration with Intuit QuickBooks.
 */
class InvoiceSalesOrder extends Model
{
    use Query\Findable;
    use Persistance\Storable;
    protected $fillable = [
        'ID',
        'CreateMode',
        'DeliveryNumber',
        'EndDate',
        'Errors',
        'InvoiceMode',
        'JournalCode',
        'NumberOfCreatedInvoices',
        'NumberOfFailedInvoices',
        'SalesOrderIDs',
        'StartDate',
        'UserInvoiceDate',
    ];
    protected $url = 'salesinvoice/InvoiceSalesOrders';

}