<?php
// Delete all cookie 
setcookie('userID', '', time() - 3600, '/');
setcookie('userEmail', '', time() - 3600, '/');
setcookie('userFirstName', '', time() - 3600, '/');
setcookie('userLastName', '', time() - 3600, '/');
header('Location: /');
exit;
