<?php
if(isset($_SESSION['message']))
{
    ?> 
    <div class="alert">
        <strong>Hey!</strong> <?= $_SESSION['message']; ?>
        <button class="btn-close"></button>
    </div>
    <?php
    unset($_SESSION['message']);
}
?>