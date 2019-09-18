# test composer and patern observer

```sh

```

```php
<?php
require __DIR__ . '/vendor/autoload.php';


use Serh\Observer\WheatherGenerator;
use Serh\Observer\WheatherLondon;
use Serh\Observer\WheatherKiev;
//$observer = new Observer;
$weatherLondon = new WheatherLondon();
$weatherKiev = new WheatherKiev();

$weatherGenerator= new WheatherGenerator();
$weatherGenerator->atach($weatherLondon);
$weatherGenerator->atach($weatherKiev);


$weatherGenerator->setParams(14, 770);
```