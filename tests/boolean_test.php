<?php

include_once __DIR__ . './bootstrap.php';

$TestCase('boolean', function ($assert) {
    $assert('True', $true                  );
    $assert('True', $not  ($false         ));
    $assert('True', $and  ($true,  $true  ));
    $assert('True', $or   ($true,  $true  ));
    $assert('True', $or   ($true,  $false ));
    $assert('True', $or   ($false, $true  ));
});
