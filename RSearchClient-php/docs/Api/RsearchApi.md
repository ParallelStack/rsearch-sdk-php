# RSearch\Client\RsearchApi

All URIs are relative to *https://api.parallelstack.com/api/rsearch/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDocument**](RsearchApi.md#addDocument) | **POST** /indexes/{index_name}/document_types/{doc_type_name}/documents/{doc_id} | 
[**addDocumentType**](RsearchApi.md#addDocumentType) | **POST** /indexes/{index_name}/document_types/{doc_type_name} | 
[**addIndex**](RsearchApi.md#addIndex) | **POST** /indexes/{index_name} | 
[**deleteDocument**](RsearchApi.md#deleteDocument) | **DELETE** /indexes/{index_name}/document_types/{doc_type_name}/documents/{doc_id} | 
[**deleteIndex**](RsearchApi.md#deleteIndex) | **DELETE** /indexes/{index_name} | 
[**getAdvancedDocTypeSuggestResults**](RsearchApi.md#getAdvancedDocTypeSuggestResults) | **POST** /indexes/{index_name}/document_types/{doc_type_name}/suggest | 
[**getAdvancedIndexSuggestResults**](RsearchApi.md#getAdvancedIndexSuggestResults) | **POST** /indexes/{index_name}/suggest | 
[**getAdvancedSearchResults**](RsearchApi.md#getAdvancedSearchResults) | **POST** /indexes/{index_name}/document_types/{doc_type_name}/search | 
[**getAllDocumentTypes**](RsearchApi.md#getAllDocumentTypes) | **GET** /indexes/{index_name}/document_types | 
[**getAllDocuments**](RsearchApi.md#getAllDocuments) | **GET** /indexes/{index_name}/document_types/{doc_type_name}/documents | 
[**getAllIndexes**](RsearchApi.md#getAllIndexes) | **GET** /indexes | 
[**getBasicSearchResults**](RsearchApi.md#getBasicSearchResults) | **GET** /indexes/{index_name}/search | 
[**getDocTypeSuggestResults**](RsearchApi.md#getDocTypeSuggestResults) | **GET** /indexes/{index_name}/document_types/{doc_type_name}/suggest | 
[**getDocument**](RsearchApi.md#getDocument) | **GET** /indexes/{index_name}/document_types/{doc_type_name}/documents/{doc_id} | 
[**getDocumentType**](RsearchApi.md#getDocumentType) | **GET** /indexes/{index_name}/document_types/{doc_type_name} | 
[**getIndex**](RsearchApi.md#getIndex) | **GET** /indexes/{index_name} | 


# **addDocument**
> \RSearch\Client\RSearchModel\CreateDocumentSuccess addDocument($indexName, $docTypeName, $docId, $documentDetails)



Creates `doc_id` in `doc_type_name` for `index_name`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: writeAppID
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$apiInstance = new RSearch\Client\Api\RsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the document_type
$docId = "docId_example"; // string | Document ID
$documentDetails = new \RSearch\Client\RSearchModel\Document(); // \RSearch\Client\RSearchModel\Document | Details of the document

try {
    $result = $apiInstance->addDocument($indexName, $docTypeName, $docId, $documentDetails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->addDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexName** | **string**| Name of the index |
 **docTypeName** | **string**| Name of the document_type |
 **docId** | **string**| Document ID |
 **documentDetails** | [**\RSearch\Client\RSearchModel\Document**](../Model/Document.md)| Details of the document |

### Return type

[**\RSearch\Client\RSearchModel\CreateDocumentSuccess**](../Model/CreateDocumentSuccess.md)

### Authorization

[authToken](../../README.md#authToken), [writeAppID](../../README.md#writeAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDocumentType**
> \RSearch\Client\RSearchModel\CreateDocTypeSuccess addDocumentType($indexName, $docTypeName, $docTypeDetails)



Creates specific `document_type` in `index_name` with specified parameters. You should define the parameters correctly as per the getting started guide, else getting the right structure might be an issue.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$apiInstance = new RSearch\Client\Api\RsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the document_type
$docTypeDetails = new \RSearch\Client\RSearchModel\DocumentType(); // \RSearch\Client\RSearchModel\DocumentType | Details of the document_type

try {
    $result = $apiInstance->addDocumentType($indexName, $docTypeName, $docTypeDetails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->addDocumentType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexName** | **string**| Name of the index |
 **docTypeName** | **string**| Name of the document_type |
 **docTypeDetails** | [**\RSearch\Client\RSearchModel\DocumentType**](../Model/DocumentType.md)| Details of the document_type |

### Return type

[**\RSearch\Client\RSearchModel\CreateDocTypeSuccess**](../Model/CreateDocTypeSuccess.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addIndex**
> \RSearch\Client\RSearchModel\CreateIndexSuccess addIndex($indexName)



Creates `a new index`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: writeAppID
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$apiInstance = new RSearch\Client\Api\RsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexName = "indexName_example"; // string | Name of the index

try {
    $result = $apiInstance->addIndex($indexName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->addIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexName** | **string**| Name of the index |

### Return type

[**\RSearch\Client\RSearchModel\CreateIndexSuccess**](../Model/CreateIndexSuccess.md)

### Authorization

[authToken](../../README.md#authToken), [writeAppID](../../README.md#writeAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDocument**
> \RSearch\Client\RSearchModel\DeleteDocumentSuccess deleteDocument($indexName, $docTypeName, $docId)



Deletes `doc_id` in `doc_type_name` for `index_name`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: writeAppID
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$apiInstance = new RSearch\Client\Api\RsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the document_type
$docId = "docId_example"; // string | Document ID

try {
    $result = $apiInstance->deleteDocument($indexName, $docTypeName, $docId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexName** | **string**| Name of the index |
 **docTypeName** | **string**| Name of the document_type |
 **docId** | **string**| Document ID |

### Return type

[**\RSearch\Client\RSearchModel\DeleteDocumentSuccess**](../Model/DeleteDocumentSuccess.md)

### Authorization

[authToken](../../README.md#authToken), [writeAppID](../../README.md#writeAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIndex**
> \RSearch\Client\RSearchModel\DeleteIndexSuccess deleteIndex($indexName)



Deletes `an index` {index_name}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: writeAppID
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$apiInstance = new RSearch\Client\Api\RsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexName = "indexName_example"; // string | Name of the index

try {
    $result = $apiInstance->deleteIndex($indexName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->deleteIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexName** | **string**| Name of the index |

### Return type

[**\RSearch\Client\RSearchModel\DeleteIndexSuccess**](../Model/DeleteIndexSuccess.md)

### Authorization

[authToken](../../README.md#authToken), [writeAppID](../../README.md#writeAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdvancedDocTypeSuggestResults**
> \RSearch\Client\RSearchModel\SuggestSuccess getAdvancedDocTypeSuggestResults($indexName, $docTypeName, $suggest)



Gets Suggestions from `doc_type_name` in `index_name` limited by the body params. Please ensure you refer the getting started guides, to get the format of the query right.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$apiInstance = new RSearch\Client\Api\RsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the Document_type
$suggest = new \RSearch\Client\RSearchModel\SuggestQuery(); // \RSearch\Client\RSearchModel\SuggestQuery | Details of the search query

try {
    $result = $apiInstance->getAdvancedDocTypeSuggestResults($indexName, $docTypeName, $suggest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->getAdvancedDocTypeSuggestResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexName** | **string**| Name of the index |
 **docTypeName** | **string**| Name of the Document_type |
 **suggest** | [**\RSearch\Client\RSearchModel\SuggestQuery**](../Model/SuggestQuery.md)| Details of the search query |

### Return type

[**\RSearch\Client\RSearchModel\SuggestSuccess**](../Model/SuggestSuccess.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdvancedIndexSuggestResults**
> \RSearch\Client\RSearchModel\SuggestSuccess getAdvancedIndexSuggestResults($indexName, $search)



Gets Suggestions in `index_name` limited by the request body fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$apiInstance = new RSearch\Client\Api\RsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexName = "indexName_example"; // string | Name of the index
$search = new \RSearch\Client\RSearchModel\SuggestQuery(); // \RSearch\Client\RSearchModel\SuggestQuery | Details of the search query

try {
    $result = $apiInstance->getAdvancedIndexSuggestResults($indexName, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->getAdvancedIndexSuggestResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexName** | **string**| Name of the index |
 **search** | [**\RSearch\Client\RSearchModel\SuggestQuery**](../Model/SuggestQuery.md)| Details of the search query |

### Return type

[**\RSearch\Client\RSearchModel\SuggestSuccess**](../Model/SuggestSuccess.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdvancedSearchResults**
> \RSearch\Client\RSearchModel\SearchSuccess getAdvancedSearchResults($indexName, $docTypeName, $search)



Advanced Search which gets all documents in `index_name` for provided search criteria. Please ensure you refer the getting started guides, to get the format of the query right.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: writeAppID
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$apiInstance = new RSearch\Client\Api\RsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the Document_type
$search = new \RSearch\Client\RSearchModel\SearchQuery(); // \RSearch\Client\RSearchModel\SearchQuery | Details of the search query

try {
    $result = $apiInstance->getAdvancedSearchResults($indexName, $docTypeName, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->getAdvancedSearchResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexName** | **string**| Name of the index |
 **docTypeName** | **string**| Name of the Document_type |
 **search** | [**\RSearch\Client\RSearchModel\SearchQuery**](../Model/SearchQuery.md)| Details of the search query |

### Return type

[**\RSearch\Client\RSearchModel\SearchSuccess**](../Model/SearchSuccess.md)

### Authorization

[authToken](../../README.md#authToken), [writeAppID](../../README.md#writeAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllDocumentTypes**
> \RSearch\Client\RSearchModel\GetDocTypesSuccess getAllDocumentTypes($indexName)



Gets `All document_types` present in `index_name`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$apiInstance = new RSearch\Client\Api\RsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexName = "indexName_example"; // string | Name of the index

try {
    $result = $apiInstance->getAllDocumentTypes($indexName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->getAllDocumentTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexName** | **string**| Name of the index |

### Return type

[**\RSearch\Client\RSearchModel\GetDocTypesSuccess**](../Model/GetDocTypesSuccess.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllDocuments**
> \RSearch\Client\RSearchModel\GetDocumentsSuccess getAllDocuments($indexName, $docTypeName)



Fetches all documents in `doc_type_name` for `index_name`. All the documents and hence careful with its use.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$apiInstance = new RSearch\Client\Api\RsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the document_type

try {
    $result = $apiInstance->getAllDocuments($indexName, $docTypeName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->getAllDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexName** | **string**| Name of the index |
 **docTypeName** | **string**| Name of the document_type |

### Return type

[**\RSearch\Client\RSearchModel\GetDocumentsSuccess**](../Model/GetDocumentsSuccess.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllIndexes**
> \RSearch\Client\RSearchModel\GetIndexesSuccess getAllIndexes()



Fetches `All indexes` that the user has. Not recommended to be used in production code, as there isn't that big a Use case for listing all indexes!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$apiInstance = new RSearch\Client\Api\RsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllIndexes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->getAllIndexes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RSearch\Client\RSearchModel\GetIndexesSuccess**](../Model/GetIndexesSuccess.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBasicSearchResults**
> \RSearch\Client\RSearchModel\SearchSuccess getBasicSearchResults($indexName, $q)



Basic Search which gets all documents in `index_name` for provided search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$apiInstance = new RSearch\Client\Api\RsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexName = "indexName_example"; // string | Name of the index
$q = "q_example"; // string | Search Query

try {
    $result = $apiInstance->getBasicSearchResults($indexName, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->getBasicSearchResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexName** | **string**| Name of the index |
 **q** | **string**| Search Query |

### Return type

[**\RSearch\Client\RSearchModel\SearchSuccess**](../Model/SearchSuccess.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocTypeSuggestResults**
> \RSearch\Client\RSearchModel\SuggestSuccess getDocTypeSuggestResults($indexName, $docTypeName, $q)



Gets Suggestions from `doc_type_name` in `index_name`. Please ensure you refer the getting started guides, to get the format of the query right.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$apiInstance = new RSearch\Client\Api\RsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the Document_type
$q = "q_example"; // string | Details of the suggest query

try {
    $result = $apiInstance->getDocTypeSuggestResults($indexName, $docTypeName, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->getDocTypeSuggestResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexName** | **string**| Name of the index |
 **docTypeName** | **string**| Name of the Document_type |
 **q** | **string**| Details of the suggest query |

### Return type

[**\RSearch\Client\RSearchModel\SuggestSuccess**](../Model/SuggestSuccess.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocument**
> \RSearch\Client\RSearchModel\GetDocumentSuccess getDocument($indexName, $docTypeName, $docId)



Fetches the document referenced by `doc_id` in `doc_type_name` for `index_name`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$apiInstance = new RSearch\Client\Api\RsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the document_type
$docId = "docId_example"; // string | Document ID

try {
    $result = $apiInstance->getDocument($indexName, $docTypeName, $docId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexName** | **string**| Name of the index |
 **docTypeName** | **string**| Name of the document_type |
 **docId** | **string**| Document ID |

### Return type

[**\RSearch\Client\RSearchModel\GetDocumentSuccess**](../Model/GetDocumentSuccess.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentType**
> \RSearch\Client\RSearchModel\GetDocTypeSuccess getDocumentType($indexName, $docTypeName)



Checks whether `document_type` in `index_name` exists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$apiInstance = new RSearch\Client\Api\RsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the document_type

try {
    $result = $apiInstance->getDocumentType($indexName, $docTypeName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->getDocumentType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexName** | **string**| Name of the index |
 **docTypeName** | **string**| Name of the document_type |

### Return type

[**\RSearch\Client\RSearchModel\GetDocTypeSuccess**](../Model/GetDocTypeSuccess.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIndex**
> \RSearch\Client\RSearchModel\GetIndexSuccess getIndex($indexName)



Checks whether `a particular index` {index_name} exists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
$config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$apiInstance = new RSearch\Client\Api\RsearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexName = "indexName_example"; // string | Name of the index

try {
    $result = $apiInstance->getIndex($indexName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->getIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **indexName** | **string**| Name of the index |

### Return type

[**\RSearch\Client\RSearchModel\GetIndexSuccess**](../Model/GetIndexSuccess.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

