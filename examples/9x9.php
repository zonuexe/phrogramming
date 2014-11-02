<?php include __DIR__ . '/../src/bootstrap.php'; ?>
<!DOCTYPE html>
<title>9x9</title>

<table border>
<?php
$for($Range(1, 9), function ($n) use ($for, $Range) { ?>
    <tr>
<?php
    $for($Range(1, 9), function ($m) use ($n) { ?>
        <td><?php echo $n * $m; ?></td>
<?php
    }); ?>
    </tr>
<?php
}); ?>
</table>
