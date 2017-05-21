<?php $title = "Connexion"; ?>
<?php include('partials/_header.php'); ?>

<div id="main-content">
    <div class="container">
        <h1 class="lead">Connexion</h1>
        
        <?php include('partials/_error.php') ?>
        <form method="post" class="well col-md-6 col-md-offset-3">
        
            <div class="form-group">
                <label class="control-label" for="name">Pseudo ou email</label>
                <input type="text" value="<?= get_input('identifiant') ?>" class="form-control" id="identifiant" name="identifiant" required="required"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required="required"/>
            </div>
            
            <input type="submit" class="btn btn-primary" value="Connexion" name="login"/>
            
        </form>

    </div>
</div>

<?php include('partials/_footer.php'); ?>
