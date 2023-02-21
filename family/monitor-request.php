<?php

    $page_title = 'WeCare - Monitoring Request';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3">
<button type="button" class="btn btn-primary"><a class="text-white text-decoration-none" href="family-moni.php">Back</a></button>
<h2 class="pb-3 pt-3"><strong>Monitoring Request</strong></h2>
<div class="container form-control">
<form class="row needs-validation">
<h4 class="bg-primary bg-gradient py-3 text-white"><strong>Patient Information</strong></h2>

  <div class="row pt-3 pb-3">
  <div class="col-sm">
  <label for="firstname"><strong>Firstname:</strong></label><br>
  <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Ex.Juan"><br>
  </div>
  <div class="col-sm">
  <label for="lastname"><strong>Lastname:</strong></label><br>
  <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Ex.Villanueva"><br>
  </div>
  <div class="col-sm">
  <label for="middlename"><strong>Middlename:</strong></label><br>
  <input class="form-control" type="text" name="middlename" id="middlename" placeholder="Ex.Carlos"><br>
  </div>
  <div class="col-sm">
  <label for="suffix"><strong>Suffix:</strong></label><br>
  <input class="form-control" type="text" name="suffix" id="suffix" placeholder="Ex.Jr"><br>
  </div>
  <div class="row">
  <div class="col-sm">
  <label for="relationship"><strong>Relationship to Patient:</strong></label><br>
  <select name="relationship" id="relationship">
          <option value="mother">Mother</option>
          <option value="father">Father</option>
          <option value="grandmother">Grandmother</option>
          <option value="grandfather">Grandfather</option>
          <option value="mother-in-law">Mother in Law</option>
          <option value="father-in-law">Father in Law</option>
          <option value="aunt">Aunt</option>
          <option value="uncle">Uncle</option>
          <option value="other-relative">Other Relative</option>
          <option value="friend">Friend</option>
          <option value="other" class="mb-3">Other</option>
        </select>
</div>
</div>
</div>
<h4 class="bg-primary bg-gradient py-3 px-3 text-white"><strong>Upload ID or any Identification that you're related to patient</strong></h4>
<div class="row pt-3">
<div class="mb-3">
  <input class="form-control" type="file" id="formFileMultiple" multiple>
</div>
</div>
</form>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end p-3">
  <button type="button" class="btn btn-outline-primary">Cancel</button>
    <button type="button" class="btn btn-primary">Submit</button>
    </div>

</div>

