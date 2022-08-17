# transsmart
PHP library for transsmart webservices

For now four functions are implemented:
- doBooking
- getDocs
- getStatus
- doDelete
- getShipments

To use a dependency injection container for the config you can use the class TranssmartServiceFactory.
Otherwise you can directly feed the credentials trhough an array and use the TranssmartFactory.
For examples you can see the files doBooking.php and getDocs.php.

Following functions will be added later:
- getLabel
- getStatusHistory
- getRates
- setStatus
- doManifest

