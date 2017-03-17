<?php namespace Picqer\Financials\Exact;

/**
 * Class Item
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsItems
 *
 * @property $ID Guid
 * @property $Barcode String
 * @property $Class_01 String
 * @property $Class_02 String
 * @property $Class_03 String
 * @property $Class_04 String
 * @property $Class_05 String
 * @property $Code String
 * @property $CopyRemarks Byte
 * @property $CostPriceCurrency String
 * @property $CostPriceNew Double
 * @property $CostPriceStandard Double
 * @property $Created DateTime
 * @property $Creator Guid
 * @property $CreatorFullName String
 * @property $Description String
 * @property $Division Int32
 * @property $EndDate DateTime
 * @property $ExtraDescription String
 * @property $FreeBoolField_01 Boolean
 * @property $FreeBoolField_02 Boolean
 * @property $FreeBoolField_03 Boolean
 * @property $FreeBoolField_04 Boolean
 * @property $FreeBoolField_05 Boolean
 * @property $FreeDateField_01 DateTime
 * @property $FreeDateField_02 DateTime
 * @property $FreeDateField_03 DateTime
 * @property $FreeDateField_04 DateTime
 * @property $FreeDateField_05 DateTime
 * @property $FreeNumberField_01 Double
 * @property $FreeNumberField_02 Double
 * @property $FreeNumberField_03 Double
 * @property $FreeNumberField_04 Double
 * @property $FreeNumberField_05 Double
 * @property $FreeNumberField_06 Double
 * @property $FreeNumberField_07 Double
 * @property $FreeNumberField_08 Double
 * @property $FreeTextField_01 String
 * @property $FreeTextField_02 String
 * @property $FreeTextField_03 String
 * @property $FreeTextField_04 String
 * @property $FreeTextField_05 String
 * @property $FreeTextField_06 String
 * @property $FreeTextField_07 String
 * @property $FreeTextField_08 String
 * @property $FreeTextField_09 String
 * @property $FreeTextField_10 String
 * @property $GLCosts Guid
 * @property $GLCostsCode String
 * @property $GLCostsDescription String
 * @property $GLRevenue Guid
 * @property $GLRevenueCode String
 * @property $GLRevenueDescription String
 * @property $GLStock Guid
 * @property $GLStockCode String
 * @property $GLStockDescription String
 * @property $GrossWeight Double
 * @property $IsBatchItem Byte
 * @property $IsBatchNumberItem Byte
 * @property $IsFractionAllowedItem Boolean
 * @property $IsMakeItem Byte
 * @property $IsNewContract Byte
 * @property $IsOnDemandItem Byte
 * @property $IsPackageItem Boolean
 * @property $IsPurchaseItem Boolean
 * @property $IsRegistrationCodeItem Byte
 * @property $IsSalesItem Boolean
 * @property $IsSerialItem Boolean
 * @property $IsSerialNumberItem Boolean
 * @property $IsStockItem Boolean
 * @property $IsSubcontractedItem Boolean
 * @property $IsTaxableItem Byte
 * @property $IsTime Byte
 * @property $IsWebshopItem Byte
 * @property $ItemGroup Guid
 * @property $ItemGroupCode String
 * @property $ItemGroupDescription String
 * @property $Modified DateTime
 * @property $Modifier Guid
 * @property $ModifierFullName String
 * @property $NetWeight Double
 * @property $Notes String
 * @property $PictureName String
 * @property $PictureThumbnailUrl String
 * @property $PictureUrl String
 * @property $SalesVatCode String
 * @property $SalesVatCodeDescription String
 * @property $SearchCode String
 * @property $SecurityLevel Int32
 * @property $StartDate DateTime
 * @property $Stock Double
 * @property $Unit String
 * @property $UnitDescription String
 * @property $UnitType String
 */

class Item extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Barcode',
        'Class_01',
        'Class_02',
        'Class_03',
        'Class_04',
        'Class_05',
        'Code',
        'CopyRemarks',
        'CostPriceCurrency',
        'CostPriceNew',
        'CostPriceStandard',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'EndDate',
        'ExtraDescription',
        'FreeBoolField_01',
        'FreeBoolField_02',
        'FreeBoolField_03',
        'FreeBoolField_04',
        'FreeBoolField_05',
        'FreeDateField_01',
        'FreeDateField_02',
        'FreeDateField_03',
        'FreeDateField_04',
        'FreeDateField_05',
        'FreeNumberField_01',
        'FreeNumberField_02',
        'FreeNumberField_03',
        'FreeNumberField_04',
        'FreeNumberField_05',
        'FreeNumberField_06',
        'FreeNumberField_07',
        'FreeNumberField_08',
        'FreeTextField_01',
        'FreeTextField_02',
        'FreeTextField_03',
        'FreeTextField_04',
        'FreeTextField_05',
        'FreeTextField_06',
        'FreeTextField_07',
        'FreeTextField_08',
        'FreeTextField_09',
        'FreeTextField_10',
        'GLCosts',
        'GLCostsCode',
        'GLCostsDescription',
        'GLRevenue',
        'GLRevenueCode',
        'GLRevenueDescription',
        'GLStock',
        'GLStockCode',
        'GLStockDescription',
        'GrossWeight',
        'IsBatchItem',
        'IsBatchNumberItem',
        'IsFractionAllowedItem',
        'IsMakeItem',
        'IsNewContract',
        'IsOnDemandItem',
        'IsPackageItem',
        'IsPurchaseItem',
        'IsRegistrationCodeItem',
        'IsSalesItem',
        'IsSerialItem',
        'IsSerialNumberItem',
        'IsStockItem',
        'IsSubcontractedItem',
        'IsTaxableItem',
        'IsTime',
        'IsWebshopItem',
        'ItemGroup',
        'ItemGroupCode',
        'ItemGroupDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'NetWeight',
        'Notes',
        'PictureName',
        'PictureThumbnailUrl',
        'PictureUrl',
        'SalesVatCode',
        'SalesVatCodeDescription',
        'SearchCode',
        'SecurityLevel',
        'StartDate',
        'Stock',
        'Unit',
        'UnitDescription',
        'UnitType',
    ];

    protected $url = 'logistics/Items';

}