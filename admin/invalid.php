<?php 
session_unset(); 
session_destroy(); 
exit(header("Location: /arena/admin/index.php"));