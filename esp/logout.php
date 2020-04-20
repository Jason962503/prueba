<?php
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header('Location: login.php');
exit;
?>


<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script> 

