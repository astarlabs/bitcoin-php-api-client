# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creationdate** | [**\DateTime**](\DateTime.md) | API register creation date. | [optional] 
**confirmationdate** | [**\DateTime**](\DateTime.md) | first confirmation date. | [optional] 
**blockchaincreationdate** | [**\DateTime**](\DateTime.md) | blockchain creation date. | [optional] 
**txid** | **string** | hash ID of blockchain transaction. | [optional] 
**amount** | **float** | amount sended, 0 if OP_RETURN. | [optional] 
**fee** | **float** | fee spended in the blockchain transaction. | [optional] 
**txsize** | **int** | tx size. | [optional] 
**txhex** | **string** | tx hexadecimal. | [optional] 
**data** | **string** | file or string hash or address | [optional] 
**feepriority** | **int** | account fee priority | [optional] 
**confirmations** | **int** | actual transaction confirmations count | [optional] 
**errormessage** | **string** | error message in case of errors | [optional] 
**coin** | **string** | coin | [optional] 
**test** | **int** | test | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


