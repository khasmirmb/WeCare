<?php

    $page_title = 'WeCare Staff - Patient List';
    require_once '../includes/staff-header.php';
    session_start();

    if(!isset($_SESSION['staff_logged'])){
      header('location: ../account/signin.php');
    }

    require_once '../includes/staff-sidebar.php';

?>

    <div class="content">
        <div class="container">
           <div class="row height d-flex justify-content-center align-items-center">
            <div class="cont-search d-flex justify-content-center align-items-center">
            <div class="col-md-6">
            <div class="d-flex align-items-center justify-content-center">
            <div class="input-group d-flex">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
          </div>
          <div class="dropdown d-flex justify-content-center align-items-center">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Sort by
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Name</a></li>
            <li><a class="dropdown-item" href="#">Room</a></li>
            <li><a class="dropdown-item" href="#">Status</a></li>
          </ul>
        </div>
        </div>
      </div>
  </div>
  <section class="intro-table">
  <div class="gradient-custom-1 h-100">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table mb-0 table-bordered">
                <thead style="background-color: #00ACB2;">
                  <tr>
                    <th scope="col" class="text-center" >NAMES</th>
                    <th scope="col" class="text-center">ROOM</th>
                    <th scope="col" class="text-center" >STATUS</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" style="color: #666666;"><a href="../staff/patient-profile.php" class="patient-prof">Carl Bonifacio Sr</a></th>
                    <td class="text-center">Room 2</td>
                    <td class="text-center"><span class="label label-success">Discharged</span>
                    <button type="button" class="Discharge-btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                      <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg></button> <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Discharged</a></li>
                    <li><a class="dropdown-item" href="#">Reassigned Patient</a></li>
                    <li><a class="dropdown-item" href="#">Deceased</a></li>
                  </ul>
                </div></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #666666;"><a href="../staff/patient-profile.php" class="patient-prof">Sonya Frost</a></th>
                    <td class="text-center">Room 1</td>
                    <td class="text-center"><span class="label label-success">Discharged</span>
                    <button type="button" class="Discharge-btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                      <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg></button> <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Discharged</a></li>
                    <li><a class="dropdown-item" href="#">Reassigned Patient</a></li>
                    <li><a class="dropdown-item" href="#">Deceased</a></li>
                  </ul>
                </div></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #666666;"><a href="../staff/patient-profile.php" class="patient-prof">Jena Gaines</a></th>
                    <td class="text-center">Room 3</td>
                    <td class="text-center"><span class="label label-success">Discharged</span>
                    <button type="button" class="Discharge-btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                      <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg></button> <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Discharged</a></li>
                    <li><a class="dropdown-item" href="#">Reassigned Patient</a></li>
                    <li><a class="dropdown-item" href="#">Deceased</a></li>
                  </ul>
                </div></td>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<?php

  require_once '../includes/staff-footer.php';

?>