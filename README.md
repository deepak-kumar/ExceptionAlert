# Exception Alert

## Installation 

You can install the package through Composer.
```bash
composer require bebetter/exception-alert
```
You must install this service provider. Make this the very first provider in list.
```php
// config/app.php
'providers' => [
    // make this very first provider
    'Bebetter\ExceptionAlert\ServiceProvider',
    //...
];
```

Then publish the config file of the package using artisan.
```bash
php artisan vendor:publish --provider="Bebetter\ExceptionAlert\ServiceProvider"
```

>And put receiver email to it.


Add to your Exception Handler's (```/app/Exceptions/Handler.php``` by default) ```report``` method these line:
```php
//...
public function report(Exception $e)
{
    \ExceptionAlert::send($e);
    
    //...
    
    return parent::report($e); 
}
//...
```


## License
The MIT License (MIT). Please see [LICENSE](https://github.com/deepak-kumar/ExceptionAlert/blob/master/LICENSE) for more information.
