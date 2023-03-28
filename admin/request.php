<?php

  $page_title = 'WeCare Admin - Request';
  require_once '../includes/admin-header.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  require_once '../includes/admin-sidebar.php';

  require_once '../classes/relative.class.php';

  $relative = new Relative;

  $request_list = $relative->show_relative_request();

  

?>
<div class="content">
<div class="container align-items-center pt-3">
    <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2; color: #fff;"><a class="text-white text-decoration-none" href="patient-list.php"> <i class="fa-solid fa-arrow-left"></i> Patient List </a></button>

    <h1 class="pt-3"><strong>Family Monitoring Request</strong></h1>

    <div class="table-responsive pt-3"> <!--Start of Table-->
    <table class="table table-striped table-hover table-bordered">
  <thead class="table-info">
    <tr>
      <th scope="col" style="background: #00ACB2; border: #00ACB2; color: #fff;">User</th>
      <th scope="col" style="background: #00ACB2; border: #00ACB2; color: #fff;">Patient Name</th>
      <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">ID/Proof</th>
      <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Patient List</th>
      <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($request_list as $row){ ?>
    <tr>
        <td><?php echo $row['fname'] . " " . $row['mname'][0] . ". ". $row['lname'] ?></td>

        <td>
        <?php echo $row['patient_fname'] . " " . $row['patient_mname'][0] . ". ". $row['patient_lname'] . " " . $row['patient_suffix'] ?>
        </td>

        <td class="text-center">
          <a class="btn btn-secondary" href="../uploads/<?php echo $row['proof'] ?>" role="button" style="background: #00ACB2; border: #00ACB2; color: #fff;" download>Download</a>
          <?php
            //Display the error message if there is any.
            if(isset($error_no_file)){
              echo '<div><p class="text-danger text-center">'.$error_no_file.'</p></div>';
            }

          ?>

        </td>

        <form action="accept-request.php" method="GET">
        <td class="text-center">
        <?php
            require_once '../classes/patient.class.php';

            $patient = new Patient;

            $patient_list = $patient->show_patient_data();
          ?>
            <select name="patient" id="patient" class="form-select form-select-sm">

            <?php foreach($patient_list as $data){ ?>
            <option value="<?php echo $data['id'] ?>"><?php echo ucfirst($data['fname']) ." ". ucfirst($data['mname'][0]) . ". " . ucfirst($data['lname']) . " " . ucfirst($data['suffix']) ?></option>
            <?php } ?>


            <input type="hidden" id="id" name="id" value="<?php echo $row['id'] ?>">
        </td>

        <td>
        <div class="d-flex gap-2 justify-content-center">

          <a class="req-reject btn btn-outline-danger" href="reject-request.php?id=<?php echo $row['id'] ?>">Reject</a> <!--Should put here the modal-->

          <button class="req-approve btn btn-success">Approve</button><!--Should put here the modal-->

        </div>
        </td>
        </form>
    </tr>
  <?php } ?>
    </tbody>
    </table>
    </div><!--End of table-->
</div>
</div>

<div id="reject-req" class="dialog" title="Reject Request">
    <p><span>Are you sure you want to reject this request?</span></p>
</div>

<div id="accept-req" class="dialog" title="Approve Request">
    <p><span>Are you sure you want to approve this request?</span></p>
</div>

<script>
    $(document).ready(function() {
        $("#accept-req").dialog({
            resizable: false,
            draggable: false,
            height: "auto",
            width: 400,
            modal: true,
            autoOpen: false
        });
        $(".req-approve").on('click', function(e) {
            e.preventDefault();
            var theHREF = $(this).attr("href");

            $("#accept-req").dialog('option', 'buttons', {
                "Yes" : function() {
                    window.location.href = theHREF;
                },
                "Cancel" : function() {
                    $(this).dialog("close");
                }
            });

            $("#accept-req").dialog("open");
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#reject-req").dialog({
            resizable: false,
            draggable: false,
            height: "auto",
            width: 400,
            modal: true,
            autoOpen: false
        });
        $(".req-reject").on('click', function(e) {
            e.preventDefault();
            var theHREF = $(this).attr("href");

            $("#reject-req").dialog('option', 'buttons', {
                "Yes" : function() {
                    window.location.href = theHREF;
                },
                "Cancel" : function() {
                    $(this).dialog("close");
                }
            });

            $("#reject-req").dialog("open");
        });
    });
</script>

<?php

require_once '../includes/admin-footer.php';

?>