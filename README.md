# TagFun
[php] Replace content within tags with function's output.

### Use
```php
<?php
require_once 'tagfun.php';

$str = 'This is a <<tagged>> string';
$str = tagfun($str, '<<', '>>', function($c){
    return "<b>$c</b>";
});
echo($str);
```
