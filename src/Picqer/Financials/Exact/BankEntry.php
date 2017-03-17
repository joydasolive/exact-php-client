<?php namespace Picqer\Financials\Exact;

/**
 * Class BankEntry
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialTransactionBankEntries
 *
 * @property $EntryID Guid Primary key
 * @property $BankEntryLines BankEntryLines Collection of lines
 * @property $BankStatementDocument Guid Reference to document with bank statement
 * @property $BankStatementDocumentNumber Int32 Document number of document with bank statement
 * @property $BankStatementDocumentSubject String Subject of document with bank statement
 * @property $ClosingBalanceFC Double Closing balance in the currency of the transaction
 * @property $Created DateTime Creation date
 * @property $Currency String Currency code
 * @property $Division Int32 Division code
 * @property $EntryNumber Int32 Entry number
 * @property $FinancialPeriod Int16 Fiancial period
 * @property $FinancialYear Int16 Fiancial year
 * @property $JournalCode String Code of Journal
 * @property $JournalDescription String Description of Journal
 * @property $Modified DateTime Last modified date
 * @property $OpeningBalanceFC Double Opening balance in the currency of the transaction
 * @property $Status Int16 Status: 5 = Rejected, 20 = Open, 50 = Processed
 * @property $StatusDescription String Description of Status
 */
class BankEntry extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'EntryID',
        'BankEntryLines',
        'BankStatementDocument',
        'BankStatementDocumentNumber',
        'BankStatementDocumentSubject',
        'ClosingBalanceFC',
        'Created',
        'Currency',
        'Division',
        'EntryNumber',
        'FinancialPeriod',
        'FinancialYear',
        'JournalCode',
        'JournalDescription',
        'Modified',
        'OpeningBalanceFC',
        'Status',
        'StatusDescription',
    ];
    protected $url = 'FinancialTransaction/BankEntries';

}