# Cellact notifications channel for Laravel 5.3+

This package makes it easy to send notifications using cellact with Laravel 5.3+.


## Installation

You can install the package via composer:

```bash
composer require yna/laravel-cellact
```

Then you must install the service provider:
```php
// config/app.php
'providers' => [
    ...
    Yna\Cellact\CellactServiceProvider::class,
],
```

### Setting up the Cellact service

Add your Cellact account, user, password, from and company to your `config/services.php`:

```php
// config/services.php
...
'cellact' => [
    'user' => env('CELLACT_USER'),
    'password' => env('CELLACT_PASSWORD'),
    'company' => env('CELLACT_COMPANY'),
    'from' => env('CELLACT_FROM'),
]
...
```

## Usage

You can use the channel in your `via()` method inside the notification:

```php
use Illuminate\Notifications\Notification;
use Yna\Cellact\CellactMessage;
use Yna\Cellact\CellactChannel;

class AccountApproved extends Notification
{
    public function via($notifiable)
    {
        return [CellactChannel::class];
    }

    public function toBSms($notifiable)
    {
        return CellactMessage::create("Task #{$notifiable->id} is complete!");
    }
}
```

In your notifiable model, make sure to include a routeNotificationForPort2sms() method, which return the phone number.

```php
public function routeNotificationForCellact()
{
    return $this->phone;
}
```

### Available methods

`from()`: Sets the sender's name or phone number.

`content()`: Set a content of the notification message.

## Security

If you discover any security related issues, please email security@yna.co.il instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
