Phrogramming
============

Programming interface for the template engine called PHP

*NOTICE*
--------

This library taints [global scope](http://php.net/language.variables.scope).

Requires
--------

 * PHP 5.4+

Syntax
------

### If-Then-Else

```php
<?php include __DIR__ . '../src/bootstrap.php'; ?>
<!DOCTYPE html>
<title>boolean</title>
<?php

echo $if( $true,       'foo', 'bar' ) . PHP_EOL;
//=> 'foo'
echo $if( $not($true), 'foo', 'bar' ) . PHP_EOL;
//=> 'bar'
echo $if( $and($true, $true), 'foo', 'bar' ) . PHP_EOL;
//=> 'foo'

echo $if( $Equals(10, 20), 'foo', 'bar' ) . PHP_EOL;
//=> 'foo'
echo $if( $isGratorThan(10, 20), 'foo', 'bar' ) . PHP_EOL;
//=> 'bar'
```

Demo
----

    $ cd ./examples
	$ php -S localhost:5656

And open http://localhost:5656 in your browser.

Copyright
---------

> Phrogramming - Programming interface for the template engine called PHP
> Copyright (C) 2014 USAMI Kenta
>
> This program is free software: you can redistribute it and/or modify
> it under the terms of the GNU General Public License as published by
> the Free Software Foundation, either version 3 of the License, or
> (at your option) any later version.
>
> This program is distributed in the hope that it will be useful,
> but WITHOUT ANY WARRANTY; without even the implied warranty of
> MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
> GNU General Public License for more details.
>
> You should have received a copy of the GNU General Public License
> along with this program.  If not, see <http://www.gnu.org/licenses/>.
