# # EbayOfferDetailsWithAll

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available_quantity** | **int** | This integer value indicates the quantity of the inventory item (specified by the sku value) that will be available for purchase by buyers shopping on the eBay site specified in the marketplaceId field. For unpublished offers where the available quantity has yet to be set, the availableQuantity value is set to 0. | [optional] 
**category_id** | **string** | The unique identifier of the primary eBay category that the inventory item is listed under. This field is always returned for published offers, but is only returned if set for unpublished offers. | [optional] 
**charity** | [**\EbayInventoryApi\Model\Charity**](Charity.md) |  | [optional] 
**format** | **string** | This enumerated value indicates the listing format of the offer. Currently, the only supported value for this field is FIXED_PRICE. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/inventory/types/FormatTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**include_catalog_product_details** | **bool** | This field indicates whether or not eBay product catalog details are applied to a listing. A value of true indicates the listing corresponds to the eBay product associated with the provided product identifier. The product identifier is provided in createOrReplaceInventoryItem. Note: Though the includeCatalogProductDetails parameter is not required to be submitted in the request, the parameter defaults to &#39;true&#39; if omitted. | [optional] 
**listing** | [**\EbayInventoryApi\Model\ListingDetails**](ListingDetails.md) |  | [optional] 
**listing_description** | **string** | The description of the eBay listing that is part of the unpublished or published offer. This field is always returned for published offers, but is only returned if set for unpublished offers. Max Length: 500000 (which includes HTML markup/tags) | [optional] 
**listing_duration** | **string** | This field indicates the number of days that the listing will be active. &#39;GTC&#39; (Good &#39;til Cancelled) listings are automatically renewed each calendar month until the seller decides to end the listing. Note: This field is always returned and its value is always GTC since the Inventory API currently only supports fixed-price listings, and the only supported listing duration for fixed-price listings is &#39;GTC&#39;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/inventory/types/ListingDurationEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**listing_policies** | [**\EbayInventoryApi\Model\ListingPolicies**](ListingPolicies.md) |  | [optional] 
**lot_size** | **int** | This field is only applicable and returned if the listing is a lot listing. A lot listing is a listing that has multiple quantity of the same product. An example would be a set of four identical car tires. The integer value in this field is the number of identical items being sold through the lot listing. | [optional] 
**marketplace_id** | **string** | This enumeration value is the unique identifier of the eBay site on which the offer is available, or will be made available. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/inventory/types/MarketplaceEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**merchant_location_key** | **string** | The unique identifier of the inventory location. This identifier is set up by the merchant when the inventory location is first created with the createInventoryLocation call. Once this value is set for an inventory location, it can not be modified. To get more information about this inventory location, the getInventoryLocation call can be used, passing in this value at the end of the call URI. This field is always returned for published offers, but is only returned if set for unpublished offers. Max length: 36 | [optional] 
**offer_id** | **string** | The unique identifier of the offer. This identifier is used in many offer-related calls, and it is also used in the bulkUpdatePriceQuantity call. | [optional] 
**pricing_summary** | [**\EbayInventoryApi\Model\PricingSummary**](PricingSummary.md) |  | [optional] 
**quantity_limit_per_buyer** | **int** | This field is only applicable and set if the seller wishes to set a restriction on the purchase quantity of an inventory item per seller. If this field is set by the seller for the offer, then each distinct buyer may purchase up to, but not exceed the quantity in this field. So, if this field&#39;s value is 5, each buyer may purchase a quantity of the inventory item between one and five, and the purchases can occur in one multiple-quantity purchase, or over multiple transactions. If a buyer attempts to purchase one or more of these products, and the cumulative quantity will take the buyer beyond the quantity limit, that buyer will be blocked from that purchase. | [optional] 
**sku** | **string** | This is the seller-defined SKU value of the product in the offer. Max Length: 50 | [optional] 
**status** | **string** | The enumeration value in this field specifies the status of the offer - either PUBLISHED or UNPUBLISHED. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/inventory/types/OfferStatusEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**store_category_names** | **string[]** | This container is returned if the seller chose to place the inventory item into one or two eBay store categories that the seller has set up for their eBay store. The string value(s) in this container will be the full path(s) to the eBay store categories, as shown below: &amp;quot;storeCategoryNames&amp;quot;: [  &amp;quot;/Fashion/Men/Shirts&amp;quot;,  &amp;quot;/Fashion/Men/Accessories&amp;quot; ], | [optional] 
**tax** | [**\EbayInventoryApi\Model\Tax**](Tax.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

