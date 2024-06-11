# UpdateNonEligibleProductRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**productId** | **string** | The external product id of the non eligible product | [optional] 
**productIdPrefix** | **string** | Prefix for filtering products with matching product IDs prefix. | [optional] 
**productCategoryId** | **int** | The product category id that identifies all related products as non eligible | [optional] 
**description** | **string** |  | [optional] 
**subsystem** | **string** | Options availabe are &#x27;All&#x27; - It matchs all subsystems, &#x27;Loyalty&#x27; - Regarding loyalty points subsystem,  &#x27;Lipscore&#x27; | [optional] 
**expiresAt** | **string** | The date when the non-eligible product expires. It should use the format yyyy-MM-dd and be greater than today. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

