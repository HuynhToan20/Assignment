<?php
include "../view/header_logout.php"
?>
<div class="container">
    <?php $_SESSION = array();
        session_destroy(); ?>
    <center>  <a style="font-size:24px;" href="?action=home">Về trang home</a></center>
    
</div>
<?php
include "../view/footer.php"
?>