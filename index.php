<?php

require 'vendor/autoload.php';

require 'app/class/Email.php';

$email = new Email();
echo $email->send();