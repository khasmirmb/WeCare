<?php

  $page_title = 'WeCare Admin - Settings';
  require_once '../includes/admin-header.php';
  require_once '../classes/services.class.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  if(isset($_POST['submit'])){

    $services = new Services;

    $services->services = htmlentities($_POST['services']);
    $services->price = htmlentities($_POST['price']);

    if($services->add_services()){
      $success = "Service Added";
    }
  }

  if(isset($_POST['edit'])){

    $services = new Services;

    $services->services = htmlentities($_POST['services']);
    $services->price = htmlentities($_POST['price']);

    if($services->edit_services($_POST['id'])){
      $success = "Service Edited";
    }
  }


  require_once '../includes/admin-sidebar.php';

?>

<div class="content">

<div class="row gutters-sm">
        <div class="col-md-4 d-none d-md-block">
          <div class="card">
            <div class="card-body">
              <nav class="nav flex-column nav-pills nav-gap-y-1">
                <a href="../admin/setting.php" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Profile Information
                </a>
                <a href="../admin/account-settings.php" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded active">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mr-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>Website Settings
                </a>
                <a href="../admin/security.php" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield mr-2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>Security
                </a>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-header border-bottom mb-3 d-flex d-md-none">
              <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                <li class="nav-item">
                  <a href="../admin/setting.php" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a>
                </li>
                <li class="nav-item">
                  <a href="../admin/account-settings.php" data-toggle="tab" class="nav-link has-icon active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a>
                </li>
                <li class="nav-item">
                  <a href="../admin/security.php" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></a>
                </li>
                <li class="nav-item">
                  <a href="../admin/notification.php" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></a>
                </li>
            </div>
        <div class="card-body tab-content">
        <div class="tab-pane active" id="account">
                <h6 style="margin-top: 10px;">WEBSITE SETTINGS</h6>
                <hr>
                <div class="row mb-3">
                  <div class="col"><label for="table"><strong>Services</strong></label></div>
                  <div class="col justify-content-end d-flex">
                    <button class="btn btn-info btn-sm" type="button" style="background: #00ACB2; border: #00ACB2; color:#fff;" data-bs-toggle="modal" data-bs-target="#addservice"><a class="text-white text-decoration-none" href="#"><i class="fa-solid fa-plus me-1"></i> Add Services</a></button>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-bordered border-dark text-center">
                  <?php
                    require_once '../classes/reference.class.php';
                    $services = new Reference();

                    $service_list = $services->get_services();
                  ?>
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Price</th>
                      <th scope="col" >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($service_list as $row){ ?>
                    <tr>
                      <td><?php echo $row['services'] ?></td>
                      <td>₱<?php echo number_format($row['price']) ?></td>
                      <td><a href="#"><i class="fa-solid fa-pen" data-bs-toggle="modal" data-bs-target="#edit-service<?php echo $row['id'] ?>"></i><i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target="#delete-service<?php echo $row['id'] ?>"></i></a></td>
                    </tr>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="delete-service<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="delete-serviceLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="delete-serviceLabel">Delete Service</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body text-center">
                            Are you sure to delete the selected service?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="remove-service.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Yes</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="edit-service<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="edit-serviceLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Service</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="account-settings.php" method="POST">
                              <div class="mb-3">
                                <label for="services" class="col-form-label"><strong>Name:</strong></label>
                                <input type="text" class="form-control" id="services" name="services" value="<?php echo $row['services'] ?>">
                              </div>
                              <div class="mb-3">
                              <label for="price" class="col-form-label"><strong>Price:</strong></label>
                                <input type="number" class="form-control" id="price" name="price" value="<?php echo $row['price'] ?>">

                                <input type="text" class="form-control" id="id" name="id" value="<?php echo $row['id'] ?>" hidden>
                              </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="edit">Confirm</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>

                  <?php } ?>
                  </tbody>
                  </table>
                </div>
          <div class="text-center">
          <?php
            if(isset($success)){
                echo '<div><p class="text-success mt-2 mb-2">'.$success.'</p></div>';
            }     
          ?>
          </div>
          </div>
          </div>

<div class="modal fade" id="addservice" tabindex="-1" aria-labelledby="addserviceLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="account-settings.php" method="POST">
          <div class="mb-3">
            <label for="services" class="col-form-label"><strong>Name:</strong></label>
            <input type="text" class="form-control" id="services" name="services">
          </div>
          <div class="mb-3">
          <label for="price" class="col-form-label"><strong>Price:</strong></label>
            <input type="number" class="form-control" id="price" name="price">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Confirm</button>
      </div>
    </form>
    </div>
  </div>
</div>

              
</div>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<?php

require_once '../includes/admin-footer.php';

?>