<?php

use Core\admin\AdminAuthenticator;


(new AdminAuthenticator)->logout();

header('location: /admins/session');
exit();
