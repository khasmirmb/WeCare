<!--Table Nutrition-->
<div class="col-12 col-lg-8 p-3">
    <div class="header d-flex">
        <h4 class="pb-3"><strong>Nutrition</strong></h4>
    <div class="button justify-content-right ms-4">
        <button class="btn btn-primary" type="button" style="background: #00ACB2; border: none;" data-bs-toggle="modal" data-bs-target="#nut-modal"><i class="fa-solid fa-circle-plus"></i>Add more</button>
    </div>
    </div>
    <div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col" style="background: #00ACB2; border: #00ACB2; color: #fff;">Name</th>
        <th cope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Type</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Time</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Note</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($nutrition_list as $nutrition){ ?>
        <tr>
        <td><?php echo $nutrition['nutrition_name'] ?></td>

        <td class="text-center"><?php echo $nutrition['nutrition_type'] ?></td>

        <td class="text-center"><?php echo date("g:i A", strtotime($nutrition['nutrition_time'])) ?></td>

        <td class="text-center"><?php echo $nutrition['nutrition_status'] ?></td>

        <td class="text-center"><?php echo $nutrition['nutrition_note'] ?></td>

        <td class="text-center">
            <div class="btn-group" role="group">
            <a type="button" class="patient-edit d-flex justify-content-center text-decoration-none text-info"><i class="fa-solid fa-pen"></i>Edit</a>

            <a type="button" class="delete-nut mx-2 d-flex justify-content-center text-decoration-none text-danger" href="../admin/delete-nutrition.php?id=<?php echo $nutrition['id'] ?>&patient_id=<?php echo $patient->id ?>"><i class="fa-solid fa-trash"></i>Delete</a>
                </div>
        </td>

       </tr>
    <?php } ?>
    </tbody>
</table>
</div>
</div>

<div class="modal fade" id="nut-modal" tabindex="-1" aria-labelledby="nut-modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nut-modalLabel">Add Nutrition</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="patient-details.php?id=<?php echo $patient->id ?>" method="POST">
          <div class="mb-3">
            <label for="nut-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="nut-name" name="nut-name" placeholder="Nutrition Name" required>
          </div>
          <div class="mb-3">
            <label for="nut-type" class="col-form-label">Type:</label>
            <input type="text" class="form-control" id="nut-type" name="nut-type" placeholder="Ex. Light" required>
          </div>
          <div class="mb-3">
            <label for="nut-time" class="col-form-label">Time:</label>
            <input type="time" class="form-control" id="nut-time" name="nut-time" required>
          </div>
          <div class="mb-3">
            <label for="nut-status" class="col-form-label">Status:</label>
            <input type="text" class="form-control" id="nut-status" name="nut-status" placeholder="Ex. Done" required>
          </div>
          <div class="mb-3">
            <label for="nut-note" class="col-form-label">Note:</label>
            <textarea class="form-control" id="nut-note" name="nut-note" placeholder="Note for Nutrition" required></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" name="submit-nut"  style="background: #00ACB2; border: #00ACB2; color: #fff;">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div id="del-nut" class="dialog" title="Delete Record">
    <p><span>Are you sure you want to delete the selected record?</span></p>
</div>

<script>
    $(document).ready(function() {
        $("#del-nut").dialog({
            resizable: false,
            draggable: false,
            height: "auto",
            width: 400,
            modal: true,
            autoOpen: false
        });
        $(".delete-nut").on('click', function(e) {
            e.preventDefault();
            var theHREF = $(this).attr("href");

            $("#del-nut").dialog('option', 'buttons', {
                "Yes" : function() {
                    window.location.href = theHREF;
                },
                "Cancel" : function() {
                    $(this).dialog("close");
                }
            });

            $("#del-nut").dialog("open");
        });
    });
</script>