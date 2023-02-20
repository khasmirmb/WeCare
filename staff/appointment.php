<?php

    $page_title = 'WeCare Nursing Home Inc.';
    require_once '../includes/sidebar.php';
    session_start();

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
    <table class="table table-responsive">
        
      <thead>
        <tr class="tab-row">
          <th scope="col" width="30%">Name</th>
          <th scope="col" width="20%">Time</th>
          <th scope="col" width="30%">Date</th>
          <th scope="col" width="40%">Done</th>
          <th scope="col" class="text-end" width="40%"><span>No-show</span></th>
        </tr>
      </thead>
  <tbody>
    <tr>
      <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Althan Travis</td>
      <td>1:20 pm</td>
      <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">January 30, 2020</span></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
    </tr>
    
    <tr>
      <td><img src="https://i.imgur.com/nmnmfGv.png" width="25"> Tomo arvis</td>
      <td>2:00 pm</td>
      <td><i class="fa fa-dot-circle-o text-danger"></i><span class="ms-1">March 22, 2022</span></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
    </tr>
    
    
    <tr>
      <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Althan Travis</td>
      <td>11:45 am</td>
      <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">February 12, 2022</span></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
    </tr>
    
    
    <tr>
      <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Travis head</td>
      <td>4:40 pm</td>
      <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">February 26, 2022</span></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
    </tr>
    
    
    <tr>
      <td><img src="https://i.imgur.com/nmnmfGv.png" width="25"> Althan Travis</td>
      <td>6:57 pm</td>
      <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">December 22, 2022</span></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
    </tr>
  </tbody>
</table>
  
  </div>
</div>
</div>
</div>
</div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>