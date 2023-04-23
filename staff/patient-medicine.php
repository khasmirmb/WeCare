<div class="pt-3"><!--Starting of Medicine-->
<div class="container form-control p-0">
    <h2 class="py-3 px-3 text-white" style="background: #00ACB2">Medicine</h2>
<div class="p-3 pt-0">
<div class="table-responsive">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" style="background: #00ACB2; color: #fff;" class="text-left">Name</th>
      <th scope="col" style="background: #00ACB2; color: #fff;" class="text-center">Dose</th>
      <th scope="col" style="background: #00ACB2; color: #fff;" class="text-center">Started</th>
      <th scope="col" style="background: #00ACB2; color: #fff;" class="text-center">Status</th>
      <th scope="col" style="background: #00ACB2; color: #fff;" class="text-center">Note</th>
      <th scope="col" style="background: #00ACB2; color: #fff;" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    $medecine_list = $monitoring->fetch_monitoring_medecine_patient($patient->id);

    foreach($medecine_list as $med){
    ?>
        <tr>
        <th scope="row" class="text-left"><?php echo $med['medecine_name'] ?></th>
        <td class="text-center"><?php echo $med['medecine_dose'] ?></td>
        <td class="text-center"><?php echo date("M j, Y", strtotime($med['medecine_started'])) ?></td>
        <td class="text-center"><?php echo $med['medecine_status'] ?></td>
        <td class="text-center"><?php echo $med['medecine_note'] ?></td>
        <td class="text-center">
                <div class="btn-group" role="group">
                    <button type="button" class="patient-edit d-flex justify-content-center"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                    <a type="button" class="patient-delete mx-2 d-flex justify-content-center text-white text-decoration-none" href="../staff/delete-medicine.php?id=<?php echo $med['id'] ?>&patient_id=<?php echo $patient->id ?>"><i class="fa-solid fa-trash"></i>Delete</a>
                </div>
        </td>
        </tr>
    <?php } ?>
  </tbody>
  </table>
    <div class="d-grid gap-2 pt-3">
        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#med-modal"><i class="fa-solid fa-circle-plus"></i>Add More</button>
    </div>
</div>
</div>
</div><!--Last of Medicine-->


<div class="modal fade" id="med-modal" tabindex="-1" aria-labelledby="med-modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="med-modalLabel">Add Medecine</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="patient-profile.php?id=<?php echo $patient->id ?>" method="POST">
          <div class="mb-3">
            <label for="med-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="med-name" name="med-name" placeholder="Medicine Name" required>
          </div>
          <div class="mb-3">
            <label for="med-dose" class="col-form-label">Dose:</label>
            <input type="text" class="form-control" id="med-dose" name="med-dose" placeholder="Ex. Morning-Noon-Evening" required>
          </div>
          <div class="mb-3">
            <label for="med-start" class="col-form-label">Started Date:</label>
            <input type="date" class="form-control" id="med-start" name="med-start" required>
          </div>
          <div class="mb-3">
            <label for="med-status" class="col-form-label">Status:</label>
            <input type="text" class="form-control" id="med-status" name="med-status" placeholder="Ex. Active" required>
          </div>
          <div class="mb-3">
            <label for="med-note" class="col-form-label">Note:</label>
            <textarea class="form-control" id="med-note" name="med-note" placeholder="Note for Medicine" required></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" name="submit-med"  style="background: #00ACB2; border: #00ACB2; color: #fff;">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>


</div>
