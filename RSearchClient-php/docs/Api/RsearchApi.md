# RSearch\Client\RsearchApi

All URIs are relative to *https://api.parallelstack.com/api/rsearch/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDocument**](RsearchApi.md#addDocument) | **POST** /indexes/{index_name}/document_types/{doc_type_name}/documents/{doc_id} | 
[**addDocumentType**](RsearchApi.md#addDocumentType) | **POST** /indexes/{index_name}/document_types/{doc_type_name} | 
[**addIndex**](RsearchApi.md#addIndex) | **POST** /indexes/{index_name} | 
[**deleteDocument**](RsearchApi.md#deleteDocument) | **DELETE** /indexes/{index_name}/document_types/{doc_type_name}/documents/{doc_id} | 
[**deleteIndex**](RsearchApi.md#deleteIndex) | **DELETE** /indexes/{index_name} | 
[**getAdvancedSearchResults**](RsearchApi.md#getAdvancedSearchResults) | **POST** /indexes/{index_name}/document_types/{doc_type_name}/search | 
[**getAllDocumentTypes**](RsearchApi.md#getAllDocumentTypes) | **GET** /indexes/{index_name}/document_types | 
[**getAllDocuments**](RsearchApi.md#getAllDocuments) | **GET** /indexes/{index_name}/document_types/{doc_type_name}/documents | 
[**getAllIndexes**](RsearchApi.md#getAllIndexes) | **GET** /indexes | 
[**getBasicSearchResults**](RsearchApi.md#getBasicSearchResults) | **GET** /indexes/{index_name}/search | 
[**getDocument**](RsearchApi.md#getDocument) | **GET** /indexes/{index_name}/document_types/{doc_type_name}/documents/{doc_id} | 
[**getDocumentType**](RsearchApi.md#getDocumentType) | **GET** /indexes/{index_name}/document_types/{doc_type_name} | 
[**getIndex**](RsearchApi.md#getIndex) | **GET** /indexes/{index_name} | 
[**getSuggestResults**](RsearchApi.md#getSuggestResults) | **GET** /indexes/{index_name}/document_types/{doc_type_name}/suggest | 


# **addDocument**
> \RSearch\Client\RSearchModel\InlineResponse2005 addDocument($indexName, $docTypeName, $docId, $documentDetails)



Creates `doc_id` in `doc_type_name` for `index_name`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: writeAppID
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$api_instance = new RSearch\Client\Api\RsearchApi();
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the document_type
$docId = "docId_example"; // string | Document ID
$documentDetails = NULL; // object | Details of the document

try {
    $result = $api_instance->addDocument($indexName, $docTypeName, $docId, $documentDetails);
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
 **documentDetails** | **object**| Details of the document |

### Return type

[**\RSearch\Client\RSearchModel\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[authToken](../../README.md#authToken), [writeAppID](../../README.md#writeAppID)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDocumentType**
> \RSearch\Client\RSearchModel\InlineResponse2011 addDocumentType($indexName, $docTypeName, $docTypeDetails)



Creates specific `document_type` in `index_name` with specified parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$api_instance = new RSearch\Client\Api\RsearchApi();
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the document_type
$docTypeDetails = NULL; // object | Details of the document_type

try {
    $result = $api_instance->addDocumentType($indexName, $docTypeName, $docTypeDetails);
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
 **docTypeDetails** | **object**| Details of the document_type |

### Return type

[**\RSearch\Client\RSearchModel\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addIndex**
> \RSearch\Client\RSearchModel\InlineResponse201 addIndex($indexName)



Creates `a new index`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: writeAppID
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$api_instance = new RSearch\Client\Api\RsearchApi();
$indexName = "indexName_example"; // string | Name of the index

try {
    $result = $api_instance->addIndex($indexName);
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

[**\RSearch\Client\RSearchModel\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[authToken](../../README.md#authToken), [writeAppID](../../README.md#writeAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDocument**
> \RSearch\Client\RSearchModel\InlineResponse2006 deleteDocument($indexName, $docTypeName, $docId)



Deletes `doc_id` in `doc_type_name` for `index_name`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: writeAppID
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$api_instance = new RSearch\Client\Api\RsearchApi();
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the document_type
$docId = "docId_example"; // string | Document ID

try {
    $result = $api_instance->deleteDocument($indexName, $docTypeName, $docId);
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

[**\RSearch\Client\RSearchModel\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[authToken](../../README.md#authToken), [writeAppID](../../README.md#writeAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIndex**
> \RSearch\Client\RSearchModel\InlineResponse202 deleteIndex($indexName)



Deletes `an index` {index_name}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: writeAppID
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$api_instance = new RSearch\Client\Api\RsearchApi();
$indexName = "indexName_example"; // string | Name of the index

try {
    $result = $api_instance->deleteIndex($indexName);
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

[**\RSearch\Client\RSearchModel\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[authToken](../../README.md#authToken), [writeAppID](../../README.md#writeAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdvancedSearchResults**
> \RSearch\Client\RSearchModel\InlineResponse2007 getAdvancedSearchResults($indexName, $docTypeName, $search)



Advanced Search which gets all documents in `index_name` for provided search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: writeAppID
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$api_instance = new RSearch\Client\Api\RsearchApi();
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the Document)type
$search = NULL; // object | Details of the search query

try {
    $result = $api_instance->getAdvancedSearchResults($indexName, $docTypeName, $search);
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
 **docTypeName** | **string**| Name of the Document)type |
 **search** | **object**| Details of the search query |

### Return type

[**\RSearch\Client\RSearchModel\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[authToken](../../README.md#authToken), [writeAppID](../../README.md#writeAppID)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllDocumentTypes**
> \RSearch\Client\RSearchModel\InlineResponse2002 getAllDocumentTypes($indexName)



Gets `All document_types` present in `index_name`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$api_instance = new RSearch\Client\Api\RsearchApi();
$indexName = "indexName_example"; // string | Name of the index

try {
    $result = $api_instance->getAllDocumentTypes($indexName);
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

[**\RSearch\Client\RSearchModel\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllDocuments**
> \RSearch\Client\RSearchModel\InlineResponse2002 getAllDocuments($indexName, $docTypeName)



Fetches all documents in `doc_type_name` for `index_name`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$api_instance = new RSearch\Client\Api\RsearchApi();
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the document_type

try {
    $result = $api_instance->getAllDocuments($indexName, $docTypeName);
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

[**\RSearch\Client\RSearchModel\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllIndexes**
> \RSearch\Client\RSearchModel\InlineResponse200 getAllIndexes()



Fetches `All indexes`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$api_instance = new RSearch\Client\Api\RsearchApi();

try {
    $result = $api_instance->getAllIndexes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->getAllIndexes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RSearch\Client\RSearchModel\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBasicSearchResults**
> \RSearch\Client\RSearchModel\InlineResponse2007 getBasicSearchResults($indexName, $q)



Basic Search which gets all documents in `index_name` for provided search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$api_instance = new RSearch\Client\Api\RsearchApi();
$indexName = "indexName_example"; // string | Name of the index
$q = "q_example"; // string | Search Query

try {
    $result = $api_instance->getBasicSearchResults($indexName, $q);
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

[**\RSearch\Client\RSearchModel\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocument**
> \RSearch\Client\RSearchModel\InlineResponse2004 getDocument($indexName, $docTypeName, $docId)



Fetches details of `doc_id` in `doc_type_name` for `index_name`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$api_instance = new RSearch\Client\Api\RsearchApi();
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the document_type
$docId = "docId_example"; // string | Document ID

try {
    $result = $api_instance->getDocument($indexName, $docTypeName, $docId);
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

[**\RSearch\Client\RSearchModel\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentType**
> \RSearch\Client\RSearchModel\InlineResponse2003 getDocumentType($indexName, $docTypeName)



Checks whether `document_type` in `index_name` exists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$api_instance = new RSearch\Client\Api\RsearchApi();
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the document_type

try {
    $result = $api_instance->getDocumentType($indexName, $docTypeName);
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

[**\RSearch\Client\RSearchModel\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIndex**
> \RSearch\Client\RSearchModel\InlineResponse2001 getIndex($indexName)



Checks whether `a particular index` {index_name} exists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$api_instance = new RSearch\Client\Api\RsearchApi();
$indexName = "indexName_example"; // string | Name of the index

try {
    $result = $api_instance->getIndex($indexName);
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

[**\RSearch\Client\RSearchModel\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSuggestResults**
> \RSearch\Client\RSearchModel\InlineResponse2008 getSuggestResults($indexName, $docTypeName, $q)



Basic Search - Gets Suggestions from `doc_type_name` in `index_name`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authToken
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('auth_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth_token', 'Bearer');
// Configure API key authorization: readAppID
RSearch\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RSearch-App-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RSearch\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RSearch-App-ID', 'Bearer');

$api_instance = new RSearch\Client\Api\RsearchApi();
$indexName = "indexName_example"; // string | Name of the index
$docTypeName = "docTypeName_example"; // string | Name of the Document_type
$q = "q_example"; // string | Details of the suggest query

try {
    $result = $api_instance->getSuggestResults($indexName, $docTypeName, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RsearchApi->getSuggestResults: ', $e->getMessage(), PHP_EOL;
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

[**\RSearch\Client\RSearchModel\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[authToken](../../README.md#authToken), [readAppID](../../README.md#readAppID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

