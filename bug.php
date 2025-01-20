```php
function foo(array $arr): array {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo' => 'bar', 'bar' => 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [bar] => baz )
```