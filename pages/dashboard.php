<?php include 'pages/header.php'; ?>
<?php
    if(!isset($_SESSION['id']))
    {
        header('Location: action.php?page=login');
    }
?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>This is dashboard page.</h1>
            </div>
        </div>
    </div>
</section>

<?php include 'pages/footer.php'; ?>