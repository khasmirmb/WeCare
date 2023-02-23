<?php

    $page_title = 'WeCare Nursing Home Inc.';
    require_once '../includes/sidebar.php';
    session_start();
    require_once '../classes/account.class.php';
?>

  <body>

    <div class="content">
      <div class="cont-header"> <h3 class="content-text">Appointment</h3></div>
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
        
    </div>
    <div class="table-responsive">
    <table class="table table-responsive table-bordered">
        
      <thead>
        <tr class="tab-row">
          <th scope="col" class="text-center">Name</th>
          <th scope="col" class="text-center">Time</th>
          <th scope="col" class="text-center">Date</th>
          <th scope="col" class="text-center">Done</th>
          <th scope="col" class="text-center"><span>No-show</span></th>
        </tr>
      </thead>
  <tbody>
    <tr>
      <td>Althan Travis</td>
      <td class="text-center">1:20 pm</td>
      <td class="text-center"><i class="fa fa-check-circle-o green"></i><span class="ms-1">January 30, 2020</span></td>
      <td scope="row" class="text-center"><input class="form-check-input" type="checkbox"></td>
      <td scope="row" class="text-center"><input class="form-check-input" type="checkbox"></td>
    </tr>
    
    <tr>
      <td>Tomo arvis</td>
      <td class="text-center">2:00 pm</td>
      <td class="text-center"><i class="fa fa-dot-circle-o text-danger"></i><span class="ms-1">March 22, 2022</span></td>
      <td scope="row" class="text-center"><input class="form-check-input" type="checkbox"></td>
      <td scope="row" class="text-center"><input class="form-check-input" type="checkbox"></td>
    </tr>
    
    
    <tr>
      <td> Althan Travis</td>
      <td class="text-center"v>11:45 am</td>
      <td class="text-center"><i class="fa fa-check-circle-o green"></i><span class="ms-1">February 12, 2022</span></td>
      <td scope="row" class="text-center"><input class="form-check-input" type="checkbox"></td>
      <td scope="row" class="text-center"><input class="form-check-input" type="checkbox"></td>
    </tr>
    
    
    <tr>
      <td> Travis head</td>
      <td class="text-center">4:40 pm</td>
      <td class="text-center"><i class="fa fa-check-circle-o green"></i><span class="ms-1">February 26, 2022</span></td>
      <td scope="row" class="text-center"><input class="form-check-input" type="checkbox"></td>
      <td scope="row" class="text-center"><input class="form-check-input" type="checkbox"></td>
    </tr>
    
    
    <tr>
      <td> Althan Travis</td>
      <td class="text-center">6:57 pm</td>
      <td class="text-center"><i class="fa fa-check-circle-o green"></i><span class="ms-1">December 22, 2022</span></td>
      <td scope="row" class="text-center"><input class="form-check-input" type="checkbox"></td>
      <td scope="row" class="text-center"><input class="form-check-input" type="checkbox"></td>
    </tr>
  </tbody>
</table>
  
  </div>
</div>
</div>
</div>
</div>
    </div>



  </body>
</html>