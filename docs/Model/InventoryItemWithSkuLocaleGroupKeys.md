# # InventoryItemWithSkuLocaleGroupKeys

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availability** | [**\EbayInventoryApi\Model\Availability**](Availability.md) |  | [optional] 
**condition** | **string** | This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category. To see which item condition values that a particular eBay category supports, use the getItemConditionPolicies method of the Metadata API. This method returns condition ID values that map to the enumeration values defined in the ConditionEnum type. The Item condition ID and name values topic in the Selling Integration Guide has a table that maps condition ID values to ConditionEnum values. The getItemConditionPolicies call reference page has more information. A condition value is optional up until the seller is ready to publish an offer with the SKU, at which time it becomes required. Since the condition of an inventory item must be specified before being published in an offer, this field is always returned in the &#39;Get&#39; calls for SKUs that are part of a published offer. If a SKU is not part of a published offer, this container will only be returned if set for the inventory item. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/inventory/types/ConditionEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**condition_description** | **string** | This string field is used by the seller to more clearly describe the condition of used items, or items that are not &#39;Brand New&#39;, &#39;New with tags&#39;, or &#39;New in box&#39;. The ConditionDescription field is available for all categories. If the ConditionDescription field is used with an item in a new condition (Condition IDs 1000-1499), eBay will simply ignore this field if included, and eBay will return a warning message to the user. This field should only be used to further clarify the condition of the used item. It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition value, condition description, listing description, and the item&#39;s pictures do not contradict one another.Max length: 1000. | [optional] 
**inventory_item_group_keys** | **string[]** | This array is returned if the inventory item is associated with any inventory item group(s). The value(s) returned in this array are the unique identifier(s) of the inventory item&#39;s variation in a multiple-variation listing. This array is not returned if the inventory item is not associated with any inventory item groups. | [optional] 
**locale** | **string** | This field is for future use only. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/inventory/types/LocaleEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**package_weight_and_size** | [**\EbayInventoryApi\Model\PackageWeightAndSize**](PackageWeightAndSize.md) |  | [optional] 
**product** | [**\EbayInventoryApi\Model\Product**](Product.md) |  | [optional] 
**sku** | **string** | The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


