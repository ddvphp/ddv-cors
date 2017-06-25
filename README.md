ddv-cors
===================

Installation - 安装
------------

```bash
composer require ddvphp/ddv-cors
```

Usage - 使用
-----

### 1、直接使用

```php

$res = \DdvPhp\DdvCors::run(array(// 来源
  'origin'=>array(
      'http://127.0.0.1',
      'http://127.0.0.1:*',
      'http://10.*.*.*',
      'http://10.*.*.*:*',
      'http://www.ddvjs.net',
  ),
  // 授权请求
  'method'=>array(
      'GET',
      'POST',
      'PUT',
      'HEAD',
      'DELETE'
  ),
  // 授权请求头
  'allowHeader'=>array(
      'accept',
      'authorization',
      'content-md5',
      'content-type',
      'x-requested-with',
      'x_requested_with',
      'cookie',
      'origin',
      'x-ddv-*'

  ),
  // 授权响应头读取
  'exposeHeader'=>array(
      'set-cookie',
      'x-ddv-request-id',
      'x-ddv-session-sign'
  ),
  // 缓存时间
  'control'=>7200
));


```

>* `$res` 返回三个值
>* `$res` 如果为 `null` 就是 需要中断程序的运行
>* `$res` 如果为 `false` 就是 不符合授权标准或者授权失败
>* `$res` 如果为 `true` 就是 符合授权标准或者授权成功

### 1、继承使用

```php

class Cors extends \DdvPhp\DdvCors
{
  // 重新头输出方式
  public static function header($header)
  {
    @header($header);
  }
}

$res = Cors::run($config);

```
