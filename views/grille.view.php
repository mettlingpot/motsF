<?php $title = "Grille"; ?>
<?php include('partials/_header.php');?>

<div id="main-content">
    <div class="container">
        <div class="jumbotron">
            <h1>Grille</h1>
        </div>
        <table class="table-bordered">
            <tbody>
                <?php creer_grille($tab); ?>
            </tbody>
        </table>
    </div>
</div>

<script><?php include('grilleCor.js');?></script>
<?php //include('partials/_footer.php'); ?>