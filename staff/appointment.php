<?php

  $page_title = 'WeCare Staff - Appointment';
  require_once '../includes/staff-header.php';
  session_start();

  if(!isset($_SESSION['staff_logged']) || $_SESSION['user_type'] != 'staff'){
      header('location: ../account/signin.php');
  }

    
  require_once '../includes/staff-sidebar.php';


?>

<div class="content">
  <div class="cont-header">
    <h3 class="content-text">Appointment</h3>
  </div>
  <div class="cont-table">
    <div class="container mt-5 px-2">
      <div class="table_border">
        <div class="mb-2 d-flex justify-content-between align-items-center">

          <div class="position-relative">
      
          </div>

          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Sort by
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Name</a></li>
              <li><a class="dropdown-item" href="#">Date</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>

        <?php
          require_once '../classes/appointment.class.php';

          $staff_appointment = new Appointment;

          $staff_app_list = $staff_appointment->show_assigned_staff_appointment($_SESSION['logged_id'], $_SESSION['staff_logged']);

        ?>
        </div>
        <div class="table-responsive">
          <table class="table table-responsive table-bordered">

          <thead>
            <tr class="tab-row">
              <th scope="col" class="text-center">Name</th>
              <th scope="col" class="text-center">Purpose</th>
              <th scope="col" class="text-center">Time</th>
              <th scope="col" class="text-center">Date</th>
              <th scope="col" class="text-center">Status</th>
              <th scope="col" class="text-center"><span>Client Showed</span></th>
              <th scope="col" class="text-center"><span>Action</span></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($staff_app_list as $row){ ?>
            <tr>
              <td class="text-center"><?php echo $row['fname'] . " " . $row['mname'][0] . ". " . $row['lname']?></td>

              <td class="text-center">
              <?php echo $row['purpose']; ?></td>

              <td class="text-center"><?php echo date("g:i a", strtotime($row['appointment_time'])) ?></td>

              <td class="text-center"><?php echo date("M jS, Y", strtotime($row['appointment_date'])) ?></td>

              <td class="text-center"><?php echo $row['status']?></td>

              <td class="text-center"><?php echo $row['client_came']?></td>

              <td class="text-center">
                <a type="button" class="action-completed btn btn-success" href="app.completed.php?id=<?php echo $row['id'] ?>">Done</a>

                <a type="button" class="action-noshow btn btn-danger" href="app.noshow.php?id=<?php echo $row['id'] ?>">No-Show</a>
              </td>

            </tr>
          <?php } ?>
          </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="complete-app" class="dialog" title="Complete Appointment">
    <p><span>Are you sure you want to complete the selected record?</span></p>
</div>

</div>

<script>
    $(document).ready(function() {
        $("#complete-app").dialog({
            resizable: false,
            draggable: false,
            height: "auto",
            width: 400,
            modal: true,
            autoOpen: false
        });
        $(".action-completed").on('click', function(e) {
            e.preventDefault();
            var theHREF = $(this).attr("href");

            $("#complete-app").dialog('option', 'buttons', {
                "Yes" : function() {
                    window.location.href = theHREF;
                },
                "Cancel" : function() {
                    $(this).dialog("close");
                }
            });

            $("#complete-app").dialog("open");
        });

    });
</script>

<div id="no-show" class="dialog" title="Client No-Show">
    <p><span>Are you sure you want to declare no-show the selected record?</span></p>
</div>

</div>

<script>
    $(document).ready(function() {
        $("#no-show").dialog({
            resizable: false,
            draggable: false,
            height: "auto",
            width: 400,
            modal: true,
            autoOpen: false
        });
        $(".action-noshow").on('click', function(e) {
            e.preventDefault();
            var theHREF = $(this).attr("href");

            $("#no-show").dialog('option', 'buttons', {
                "Yes" : function() {
                    window.location.href = theHREF;
                },
                "Cancel" : function() {
                    $(this).dialog("close");
                }
            });

            $("#no-show").dialog("open");
        });

    });
</script>


<?php

  require_once '../includes/staff-footer.php';

?>