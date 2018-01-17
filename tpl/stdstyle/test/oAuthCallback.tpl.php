
<h1>This is debug oAuth callback for cooperation with <?=$view->service?> services</h1>
This is here for debug purpose only.

<?php if($view->error) { ?>

  <div>
    <h3>ERROR: <?=$view->errorDesc?></h3>
  </div>

<?php }else{ //if-error ?>
  <div>
    <h3>Data retiverd from <?=$view->service?></h3>
    <ul>
      <li>Username: <?=$view->oAuthObj->getUserName()?></li>
      <li>Email: <?=$view->oAuthObj->getEmail()?></li>
      <li>External ID: <?=$view->oAuthObj->getExternalId()?></li>
    </ul>
  </div>
<?php } //if-error ?>

