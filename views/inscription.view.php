<?php $title = "Inscription"; ?>
<?php include('partials/_header.php'); ?>

<div id="main-content">
    <div class="container">
        <h1 class="lead">Pourquoi s'en passer, c'est inutile!</h1>
        
        <?php include('partials/_error.php') ?>
        <form method="post" class="well col-md-6 col-md-offset-3">
        
            <div class="form-group">
                <label class="control-label" for="name">Nom:</label>
                <input type="text" value="<?= get_input('name') ?>" class="form-control" id="name" name="name" required="required"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="pseudo">Pseudo:</label>
                <input type="text" value="<?= get_input('pseudo') ?>" class="form-control" id="pseudo" name="pseudo" required="required"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="email">Mail:</label>
                <input type="email" value="<?= get_input('email') ?>" class="form-control" id="email" name="email" required="required"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required="required"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="password_confirm">Confirm Password:</label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm" required="required"/>
            </div>
            
            <input type="submit" class="btn btn-primary" value="inscription" name="inscription"/>
            
        </form>

    </div>
</div>

<?php include('partials/_footer.php'); ?>
