<h2>Quotes API</h2>
Quotes API is a Drupal 8 module that allows to serve and manage short sentences and images through an API sorted by taxonomy terms.

The actions that can be performed through the API are Create, Update, Delete.

GitHub: https://github.com/sgarciafer/quotesapi

<h2>Requirements:</h2>
Drupal 8.0.0 or above
Image (packaged with core)
File (packaged with core)
Node (packaged with core)
Rest (packaged with core)
Serialization (packaged with core)

<h2>Content management:</h2>
Quotes API module creates two content types and their fields on installation, those content types are locked and cannot be manually modified while the module is installed. If the module is uninstalled the content types are not automatically deleted.

There are two content types used by Quotes API, one is called quotesapi_quotes and the second quotesapi_images. The first one will hold the types of content using text and the second images.

<h2>Authentification:</h2>

<h2>API handlers:</h2>
