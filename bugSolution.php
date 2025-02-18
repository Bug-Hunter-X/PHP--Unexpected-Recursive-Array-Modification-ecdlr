```php
function processData(array $data): array {
  $result = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $result[$key] = processData($value); // Recursive call
    } else {
      $result[$key] = $value;
    }
  }
  return $result;
}

$data = [1, 2, [3, 4, [5, 6]]];
$result = processData($data);
print_r($result);
```