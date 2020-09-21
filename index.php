<?php

require 'autoload.php';

use app\classes\Email;

$emails = new Email();
echo $emails->sendMail();


