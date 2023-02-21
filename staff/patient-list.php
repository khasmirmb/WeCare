<?php

    $page_title = 'WeCare Nursing Home Inc.';
    require_once '../includes/sidebar.php';
    session_start();

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
              <table class="table mb-0">
                <thead style="background-color: #00ACB2;">
                  <tr>
                    <th scope="col" width="35%">NAMES</th>
                    <th scope="col" width="35%">ROOM</th>
                    <th scope="col" width="10%">STATUS</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" style="color: #666666;">Tiger Nixon</th>
                    <td>Room 2</td>
                    <td><span class="label label-success">Discharged</span><i class="fa fa-ellipsis-h  ms-2"></i></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #666666;">Sonya Frost</th>
                    <td>Room 1</td>
                    <td><span class="label label-success">Discharged</span><i class="fa fa-ellipsis-h  ms-2"></i></td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #666666;">Jena Gaines</th>
                    <td>Room 3</td>
                    <td><span class="label label-success">Discharged</span><i class="fa fa-ellipsis-h  ms-2"></i></td>
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

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>