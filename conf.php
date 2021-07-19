<?php

require('stripe-php-master/init.php');
$Publishablekey="pk_test_51Ixs8CId1OsrYEU0KsLO3amWOunGCXjOe1b8GL69xLxMWvWFe8HMGT0W3VkACu5tJiW371WUHDx0PqK6B979tzdp00SAtvYImN";
$Secretkey="sk_test_51Ixs8CId1OsrYEU04pvy7LLEDZ3pXt4DWv0yy9lDkIzGbC9WpvSZuNqx6tRbKsNqoa0ZxZVgFp3XTz5h3EEFD1vI00RzN3Ckqi";
\Stripe\Stripe::setApiKey($Secretkey);





?>