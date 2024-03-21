# LockLink

LockLink is a powerful laravel library package for Encryption and Decryption.

## Requirements

PHP version : 8.0 or higher
Laravel version : 8, 9, 10, 11 (capable with those versions)

## Installation

Use the package run the following command.

```bash
composer require laravel-pulse/locklink
```

## configuration

publish the locklink configuration files

```bash
php artisan vendor:publish --provider="LaravelPulse\LockLink\LockLinkServiceProvider"
```

This command will Publish default configuration inside config/lock-link.php


## Usages

#### locklink has 3 types of use case

### 1. Constructing LockLinkInterface

```python
use Illuminate\Http\Request;

use LaravelPulse\LockLink\Contrib\LockLinkInterface;

protected $lockLink;
public function __construct(LockLinkInterface $lockLink)
{
    $this->lockLink = $lockLink;
}

public function LockLink(Request $request, $id){

    $user = User::first();
    // encrypt id
    $id = $this->lockLink->id(12);
    // or
    $id = $this->lockLink->id($user->id);

    // in the same way you can use
    // encrypt slug
    $name = $this->lockLink->string("jhon doe");
    //or
    $name = $this->lockLink->string($user->name);

    // in the same way you can use
    // encrypt url

    $url = $this->lockLink->url("locklink.com");
    //or
    $url = $this->lockLink->url($request->url);

    // in the same way you can use
    // encrypt data
    $user = $this->lockLink->data(
           [
               'data' => [
                   'name' => "hello",
                   'email' => "world@example.com"
               ]
           ],
    );

    //or
    $user = $this->lockLink->string($user);
    return $user;

    // decryption
    return $this->lockLink- >unlock("eyJpdiI6InpCVHErOGphcXZxdmZOS0ZnNXhnQXc9PSIsInZhbHVlIjoiZzVpWkJ6Z1l6MDdORGFMblUyam5yUT09IiwibWFjIjoiYjZiZTEyNGIzZjA0OTE0ZjJlZWE3ZTFhZGEyMjRlZDY1MGJhNGFhODE5ZTk3MzMzMGNkYmY0OGY0MzY2NmZiMSIsInRhZyI6IiJ9");

    return $this->lockLink->unlockData("eyJpdiI6IndnL2JUK1VUVytZQnUveUdJbjhBSmc9PSIsInZhbHVlIjoiR2tJQXFkR245RUN4OC9BMXU2b0pnNHBhZm5WTFh3cWRTR3g2RFhNRWtDNk9nZ3pLOTBUTkE0eEp2MWliekJVVjllcE1KcjFCR1dtLzB3dmg0MzNJQ1NNMEhaTDhGZU04QStYcTJuNkFHZ0xPVkpVSFpFcmc4MjVSYWs5Qi9PRWUiLCJtYWMiOiJhN2Q0MTEyMDlmMWIxMGI2YmUxOTVmNjg5ZWFhNzdjMDE5ZGY3YmQwMWQwYjNkMjg4MzA5YWU5ZWE1ZjQzZGNkIiwidGFnIjoiIn0");
        
}


## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)
