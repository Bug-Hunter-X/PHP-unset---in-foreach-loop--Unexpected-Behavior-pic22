```php
function foo(array $arr): array {
  //Method 1: Iterate over a copy
  $arrCopy = $arr;
  foreach ($arrCopy as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

function foo2(array $arr): array {
  //Method 2: Using array_filter
  return array_filter($arr, function ($value) { return $value !== 'bar'; });
}

$arr = ['foo' => 'bar', 'bar' => 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( )
$result2 = foo2($arr);
print_r($result2); // Output: Array ( [bar] => baz )
```