# WPDecodeJson

# Instalando 

## Composer
```shell
$ composer require wpkenpachi/wpdecodejson
```

## Configurando config/app.php
```php
'providers' => [
    ...
    Wpkenpachi\WpDecodeJson\WPDecodeJsonProvider::class,
    ...
]
```
## Usando
```php

use Wpkenpacho\WpDecodeJson\DecodeJson;

class UserController extends Controller {

    public function index(){
        // Array exemplo
        $user = [
            "id" => 1,
            "localizacao" => '{"latitude":123141, "longitude": 12341541233}'
        ];

        return DecodeJson::decodeAll( $user );
        /* Output
        [
            [id] => 1,
            [localizacao] => [
                [latitude] => 123141,
                [longitude] => 12341541233
            ]
        ]
        ou em Json
        {
            id: 1,
            localizacao: {
                latitude: 123141,
                longitude: 12341541233
            }
        }
        */
    }

}

```
