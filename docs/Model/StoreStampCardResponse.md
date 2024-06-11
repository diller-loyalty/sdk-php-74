# StoreStampCardResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**externalId** | **string** |  | [optional] 
**articleNumber** | **string** |  | [optional] 
**title** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**requiredPoints** | **int** |  | [optional] 
**isRestartable** | **bool** |  | [optional] 
**requiredStamps** | **int** |  | [optional] 
**imageUrl** | **string** |  | [optional] 
**lastStampText** | **string** |  | [optional] 
**productIds** | **string[]** |  | [optional] 
**cardType** | **string** | CardType can have the values &#x27;standard&#x27; or &#x27;threshold&#x27; | [optional] 
**thresholdAmount** | **double** | The minimum transaction amount required to earn a stamp when the stamp card is of type \\&#x27;threshold\\&#x27;. | [optional] 
**validFrom** | [**\DateTime**](\DateTime.md) |  | [optional] 
**validTo** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

