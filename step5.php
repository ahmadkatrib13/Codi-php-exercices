<?php
$course_name = "PHP";
$enrolled_students  = 36;
$price = 12.33;
$on_discount = true;

echo "
Course title:${course_name}
Enrolled Students: ${enrolled_students}
Course price: ${price} $ USD
Course on discount: ", ($on_discount ? 'yes' : 'no'), "\n";
