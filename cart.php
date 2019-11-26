<?php require 'inc/head.php'; ?>
<?php if(empty($_SESSION['Username'])) {
    header('Location: login.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <h2>You have:</h2>
        <br>
        <p><strong><?php echo $_COOKIE['cookie']['pecan'];?> Pecan nuts</p>
        <p><?php echo $_COOKIE['cookie']['chips'];?> Chocolate chips</p>
        <p><?php echo $_COOKIE['cookie']['chocolate'];?> Full chocolate cookie</p>
        <p><?php echo $_COOKIE['cookie']['mms'];?> M&M's© cookies</p>
    </div>
</section>



<?php require 'inc/foot.php';

?>
