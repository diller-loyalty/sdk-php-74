# TransactionDetailRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product** | [**\DillerAPI\Model\ProductDetail**](ProductDetail.md) |  | [optional] 
**quantity** | **double** |  | [optional] 
**unitPrice** | **double** | Unit price including taxes | [optional] 
**unitMeasure** | **string** |  | [optional] 
**taxPercentage** | **double** | Value stored from 0.00 to 100.00 | [optional] 
**discount** | **double** | Discount amount applied to this product | [optional] 
**totalPrice** | **double** | Total price after dicount and taxes  Qty x unit price - discount | [optional] 
**stampCardIds** | **int[]** |  | [optional] 
**deductedStampCardIds** | **int[]** |  | [optional] 
**couponCodes** | **string[]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

