<!--Table Hygiene-->
<div class="col-12 col-lg-8 p-3">
<div class="row">
    <div class="header d-flex">
        <h4 class="pb-3"><strong>Hyiegne</strong></h4>
    <div class="button justify-content-right ms-4">
        <button class="btn btn-primary" type="button" style="background: #198754; border: none;" data-bs-toggle="modal" data-bs-target="#hy-modal"><i class="fa-solid fa-circle-plus"></i>Add more</button>
    </div>
    </div>
    <div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col" style="background: #00ACB2; border: #00ACB2; color: #fff;">Name</th>
        <th cope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Time</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Note</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($hyiegne_list as $hyiegne){ ?>
        <tr>

        <td scope="col"><?php echo $hyiegne['hyiegne_name'] ?></td>

        <td cope="col" class="text-center"><?php echo date("g:i A", strtotime($hyiegne['hyiegne_time'])) ?></td>

        <td scope="col" class="text-center"><?php echo $hyiegne['hyiegne_status'] ?></td>

        <td scope="col" class="text-center"><?php echo $hyiegne['hyiegne_note'] ?></td>

        <td class="text-center">
             <div class="btn-group" role="group">
                <a type="button" class="patient-edit d-flex justify-content-center text-decoration-none text-info"><i class="fa-solid fa-pen"></i>Edit</a>

                <a type="button" class="delete-hy mx-2 d-flex justify-content-center text-decoration-none text-danger" href="../admin/delete-hyiegne.php?id=<?php echo $hyiegne['id'] ?>&patient_id=<?php echo $patient->id ?>"><i class="fa-solid fa-trash"></i>Delete</a>
            </div>
        </td>

        </tr>
    <?php } ?>
    </tbody>
</table>
</div>
</div>
</div>

<div class="modal fade" id="hy-modal" tabindex="-1" aria-labelledby="hy-modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hy-modalLabel">Add Hyiegne</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="patient-details.php?id=<?php echo $patient->id ?>" method="POST">
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

<div id="del-hy" class="dialog" title="Delete Record">
    <p><span>Are you sure you want to delete the selected record?</span></p>
</div>

<script>
    $(document).ready(function() {
        $("#del-hy").dialog({
            resizable: false,
            draggable: false,
            height: "auto",
            width: 400,
            modal: true,
            autoOpen: false
        });
        $(".delete-hy").on('click', function(e) {
            e.preventDefault();
            var theHREF = $(this).attr("href");

            $("#del-hy").dialog('option', 'buttons', {
                "Yes" : function() {
                    window.location.href = theHREF;
                },
                "Cancel" : function() {
                    $(this).dialog("close");
                }
            });

            $("#del-hy").dialog("open");
        });
    });
</script>