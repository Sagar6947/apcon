<?php
session_start();
unset($_SESSION['beyoubyroch']);
session_destroy();

?>
<script type="text/javascript">
window.location="index.php";
</script>