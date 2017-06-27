<form id="form-customize" method="post" data-persist="garlic">
    <div class="row">
        <?php require('inputs/between.php'); ?>
        <button type="submit" id="create-pdf-btn-top" class="btn btn-primary btn-lg btn-block">Enregistrer au format PDF <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></button>
    </div>
    <div class="row">
        <?php require('vendor/google/pub_rwd.php'); ?>
    </div>
    <div class="row">
        <?php require('inputs/project.php'); ?>
    </div>
    <div class="row">
        <?php require('inputs/amount.php'); ?>
    </div>
    <div class="row">
        <?php require('inputs/payment.php'); ?>
    </div>
    <div class="row">
        <?php require('inputs/legal.php'); ?>
    </div>
    <button type="submit" id="create-pdf-btn" class="btn btn-primary btn-lg btn-block">Enregistrer au format PDF <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></button>
    <input id="input-html" type="hidden" name="html" value="">
</form>
