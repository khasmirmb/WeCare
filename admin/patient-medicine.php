<!--Table medicine-->
<div class="row">
<div class="col-12 col-lg-12 p-3">
    <div class="header d-flex">
        <h4 class="pb-3"><strong>Medicine</strong></h4>
    <div class="button justify-content-right ms-4">
        <button class="btn btn-primary" type="button" style="background: #198754; border: none;" data-bs-toggle="modal" data-bs-target="#med-modal"><i class="fa-solid fa-circle-plus"></i>Add more</button>
    </div>
    </div>
    <div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col" style="background: #00ACB2; border: #00ACB2; color: #fff;">Name</th>
        <th cope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Dose</th>
        <th cope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Intake</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Started at</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Note</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($medecine_list as $medecine){ ?>
        <tr>

        <td><?php echo $medecine['medecine_name'] ?></td>

        <td class="text-center"><?php echo $medecine['medecine_dose'] ?></td>

        <td class="text-center"><?php echo $medecine['medecine_frequency'] ?></td>

        <td class="text-center"><?php echo date("M j, Y", strtotime($medecine['medecine_started'])) ?></td>

        <td class="text-center"><?php echo $medecine['medecine_status'] ?></td>

        <td class="text-center"><?php echo $medecine['medecine_note'] ?></td>

        <td class="text-center">
             <div class="btn-group" role="group">
                <a type="button" class="patient-edit d-flex justify-content-center text-decoration-none text-info"><i class="fa-solid fa-pen"></i>Edit</a>

                <a type="button" class="delete-med mx-2 d-flex justify-content-center text-decoration-none text-danger" href="../admin/delete-medicine.php?id=<?php echo $medecine['id'] ?>&patient_id=<?php echo $patient->id ?>"><i class="fa-solid fa-trash"></i>Delete</a>
            </div>
        </td>

       </tr>
    <?php } ?>
    </tbody>
</table>
</div>
</div>

<div class="modal fade" id="med-modal" tabindex="-1" aria-labelledby="med-modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="med-modalLabel">Add Medicine</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="patient-details.php?id=<?php echo $patient->id ?>" method="POST">
          <div class="mb-3">
            <label for="med-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="med-name" name="med-name" placeholder="Medicine Name" required>
          </div>
          <div class="mb-3">
            <label for="med-dose" class="col-form-label">Dose:</label>
            <select class="form-select" aria-label="Default select example" name="med-dose" required>
              <option value="50">50 mg</option>
              <option value="75">75 ml</option>
              <option value="100">100 mg</option>
              <option value="150">150 mg</option>
              <option value="200">200 mg</option>
              <option value="250">250 mg</option>
              <option value="300">300 mg</option>
              <option value="400">400 mg</option>
          </select>
          </div>
          <div class="mb-3">
            <label for="med-intake" class="col-form-label">Frequency:</label>
            <input type="text" class="form-control" id="med-intake" name="med-intake" placeholder="Ex. 3x a day" required>
          </div>
          <div class="mb-3">
            <label for="med-start" class="col-form-label">Started Date:</label>
            <input type="date" class="form-control" id="med-start" name="med-start" required>
          </div>
          <div class="mb-3">
            <label for="med-status" class="col-form-label">Status:</label>
            <input type="text" class="form-control" id="med-status" name="med-status" placeholder="Ex. On" required>
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

<div id="del-med" class="dialog" title="Delete Record">
    <p><span>Are you sure you want to delete the selected record?</span></p>
</div>

<script>
    $(document).ready(function() {
        $("#del-med").dialog({
            resizable: false,
            draggable: false,
            height: "auto",
            width: 400,
            modal: true,
            autoOpen: false
        });
        $(".delete-med").on('click', function(e) {
            e.preventDefault();
            var theHREF = $(this).attr("href");

            $("#del-med").dialog('option', 'buttons', {
                "Yes" : function() {
                    window.location.href = theHREF;
                },
                "Cancel" : function() {
                    $(this).dialog("close");
                }
            });

            $("#del-med").dialog("open");
        });
    });
</script>