<?php include __DIR__ . '/../src/bootstrap.php'; ?>
<!DOCTYPE html>
<title>Phrogramming! demos - List</title>
<p><?php echo $car($cons('aaa', 'bbb')); ?></p>
<p><?php echo $car($List('aaa')); ?></p>
<p><?php echo $car($List('aaa', 'bbb')); ?></p>

<p><?php echo $cdr($cons('aaa', 'bbb')); ?></p>
<p><?php echo $car($cdr($List('aaa', 'bbb'))); ?></p>
<p><?php echo $cadr($List('aaa', 'bbb')); ?></p>
