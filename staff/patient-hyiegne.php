<div class="pt-3"><!--Starting of Hyiegne-->
<div class="container form-control p-0">
    <h2 class="py-3 px-3 text-white" style="background: #00ACB2">Hyiegne</h2>
<div class="p-3 pt-0">
<div class="table-responsive">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" style="background: #00ACB2; color: #fff;" class="text-left">Name</th>
      <th scope="col" style="background: #00ACB2; color: #fff;" class="text-center">Time</th>
      <th scope="col" style="background: #00ACB2; color: #fff;" class="text-center">Status</th>
      <th scope="col" style="background: #00ACB2; color: #fff;" class="text-center">Note</th>
      <th scope="col" style="background: #00ACB2; color: #fff;" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    $hyiegne_list = $monitoring->fetch_monitoring_hygiene_patient($patient->id);

    foreach($hyiegne_list as $hy){
    ?>
        <tr>
        <th scope="row" class="text-left"><?php echo $hy['hyiegne_name'] ?></th>
        <td class="text-center"><?php echo date("g:i a", strtotime($hy['hyiegne_time'])) ?></td>
        <td class="text-center"><?php echo $hy['hyiegne_status'] ?></td>
        <td class="text-center"><?php echo $hy['hyiegne_note'] ?></td>
        <td class="text-center">
                <div class="btn-group" role="group">
                    <button type="button" class="patient-edit d-flex justify-content-center"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                    <a type="button" class="patient-delete mx-2 d-flex justify-content-center text-white text-decoration-none" href="../staff/delete-hyiegne.php?id=<?php echo $hy['id'] ?>&patient_id=<?php echo $patient->id ?>"><i class="fa-solid fa-trash"></i>Delete</a>
                </div>
        </td>
        </tr>
    <?php } ?>
  </tbody>
  </table>
    <div class="d-grid gap-2 pt-3">
        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#hy-modal"><i class="fa-solid fa-circle-plus"></i>Add More</button>
    </div>
</div>
</div>
</div><!--Last of Hyiegne-->


<div class="modal fade" id="hy-modal" tabindex="-1" aria-labelledby="hy-modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hy-modalLabel">Add Hyiegne</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="patient-profile.php?id=<?php echo $patient->id ?>" method="POST">
          <div class="mb-3">
            <label for="hy-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="hy-name" name="hy-name" placeholder="Hyiegne Name" required>
          </div>
          <div class="mb-3">
            <label for="hy-time" class="col-form-label">Time:</label>
            <input type="time" class="form-control" id="hy-time" name="hy-time" required>
          </div>
          <div class="mb-3">
            <label for="hy-status" class="col-form-label">Status:</label>
            <input type="text" class="form-control" id="hy-status" name="hy-status" placeholder="Ex. Done" required>
          </div>
          <div class="mb-3">
            <label for="hy-note" class="col-form-label">Note:</label>
            <textarea class="form-control" id="hy-note" name="hy-note" placeholder="Note for Hyiegne" required></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" name="submit-hy"  style="background: #00ACB2; border: #00ACB2; color: #fff;">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>
