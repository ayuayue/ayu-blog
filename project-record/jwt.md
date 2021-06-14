安装 jwt 包并配置

composer require tymon/jwt-auth

生成 jwt secret
php artisan jwt:secret


配置 config/app.php
```
'providers'=>[
...
Tymon\JWTAuth\Providers\LaravelServiceProvider::class,
],

'aliases' => [
    ...
    'JWTAuth' => Tymon\JWTAuth\Facades\JWTAuth::class,
    'JWTFactory' => Tymon\JWTAuth\Facades\JWTFactory::class,
```
发布配置文件
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider" 

修改 jwt 配置文件
```
'providers' => [
    //'jwt' => Tymon\JWTAuth\Providers\JWT\Lcobucci::class, // 使用 attempt() 方法生成 token
    'jwt' => Tymon\JWTAuth\Providers\JWT\Namshi::class,
```

修改 auth 配置
```
//把 'defaults' 数组中的默认守卫改为'api'
 'defaults' => [
//        'guard' => 'web',
        'guard' => 'api',
        'passwords' => 'users',
    ],


//把'guards' 数组中的 api 守卫的驱动改为'jwt'
'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
//            'driver' => 'token',
            'driver' => 'jwt',
            'provider' => 'users',
            'hash' => false,
        ],
    ]

```
