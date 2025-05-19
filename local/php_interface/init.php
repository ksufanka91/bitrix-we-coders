<?php

global $SiteExpireDate;
if (defined('DEMO') && DEMO && ($SiteExpireDate < time())) {
    $SiteExpireDate = time() * 1.1;
}

require __DIR__ . '/include/functions.php';