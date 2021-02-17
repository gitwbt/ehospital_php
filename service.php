<?php include('./config.php');?>
<?php 
$id = $_GET['id'];
if(!$id){
    header('Location: index.php');
}
?>
<?php include(ROOT_PATH.'/includes/header.php');?>

<section class="service-detail">
    <div class="container">
        <h3>Service</h3>    
    </div>
</section>

<?php include(ROOT_PATH.'/includes/footer.php');?>