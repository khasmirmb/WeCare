<?php

    $page_title = 'WeCare - Survey';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<!--Breadscrumbs-->
<div class="bg-primary p-5">
  <nav style="--bs-breadcrumb-divider: '>>'; color: white;" aria-label="breadcrumb">
    <ol class="breadcrumb d-flex justify-content-center" style="color: white">
    <li class="breadcrumb-item"aria-current="page">Survey</li>
          <li class="breadcrumb-item active"aria-current="page">Patient Info</li>
          <li class="breadcrumb-item active" aria-current="page">Relative Details</li>
          <li class="breadcrumb-item active" aria-current="page">Review</li>
    </ol>
  </nav>
</div>

<!--Survey & Services-->
<div class="container align-items-center pt-3">
<div class="container form-control">
  <h2 class="text-center">Survey & Services</h2>
  <h6 class="text-center">Just fill out this form, and we will know the initial care level recommendation.</h6>
  
  <form>
    <div class="container-fluid">
      <div class="row align-items-start">

      <label for="services"><strong>Services Needed:</strong></label><br>
      
        <div class="col-lg-2 col-md-3 col-sm-4">
          <input type="checkbox" id="caregiving" name="caregiving">
          <label for="caregiving">Caregiving</label><br>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4">
        <input type="checkbox" id="rehabilitation" name="rehabilitation">
        <label for="rehabilitation">Rehabilitation</label><br>
        </div>
       <div class="col-lg-2 col-md-3 col-sm-4">
        <input type="checkbox" id="consultation" name="consultation">
        <label for="consultation">Consultation</label><br>
      </div>
        <div class="col-lg-2 col-md-3 col-sm-4">
        <input type="checkbox" id="rooms" name="rooms">
        <label for="rooms">Rooms</label><br>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4">
        <input type="checkbox" id="bundle" name="bundle">
        <label for="bundle">Bundle</label><br>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4">
        <input type="checkbox" id="all" name="all">
        <label for="all" class="mb-3">Applied All</label><br>
        </div>
      </div>

      <div class="mb-3">
      <div class = "inquiries">
        <label for="inquire"><strong>I want to inquire for?</strong></label><br>
        <select name="inquire" id="inquire">
          <option value="mother">Mother</option>
          <option value="father">Father</option>
          <option value="grandmother">Grandmother</option>
          <option value="grandfather">Grandfather</option>
          <option value="mother-in-law">Mother in Law</option>
          <option value="father-in-law">Father in Law</option>
          <option value="aunt">Aunt</option>
          <option value="uncle">Uncle</option>
          <option value="other-relative">Other Relative</option>
          <option value="friend">Friend</option>
          <option value="other" class="mb-3">Other</option>
        </select>
      </div>
        </div>
    
  
  <h4>What best describes the resident?</h4>
  <h9 class="mb-4">To help us provide our initial core service and package recommendations, please answer the following questions:</h9>
  <!--Details-->
      <ol class="mb-3">
        
        <div class="row">
        <li><strong>Does the resident walk with assistance?</strong></li>
          <div class="col">
            <label for="assistance"><strong>Yes</strong></label>
            <input type="radio" id="yes" name="assistance" value="yes">
          </div>
          <div class="col">
          <label for="no-assistance"><strong>No</strong></label>
        <input type="radio" class="mb-3" id="no" name="no-assistance" value="no"><br>
          </div>
        </div>
        <div class="row">
        <li><strong>Is the resident is Wheelchair-bound?</strong></li>
          <div class="col">
            <label for="wheelchair"><strong>Yes</strong></label>
            <input type="radio" id="yes" name="wheelchair" value="yes">
          </div>
          <div class="col">
            <label for="no-wheelchair"><strong>No</strong></label>
          <input type="radio" class="mb-3" id="no" name="no-wheelchair" value="no"><br>
          </div>
        </div>
        <div class="row">
        <li><strong>Is the resident is bedridden?</strong></li>
          <div class="col">
          <label for="bedridden"><strong>Yes</strong></label>
          <input type="radio" id="yes" name="bedridden" value="yes">
          </div>
          <div class="col">
            <label for="no-wheelchair"><strong>No</strong></label>
          <input type="radio" class="mb-3" id="no" name="no-wheelchair" value="no"><br>
          </div>
        </div>
        <div class="row">
        <li><strong>Is the resident experiencing memory loss or difficulty remembering the time, date, place, other people, or themselves?</strong></li>
          <div class="col">
          <label for="memory-lost"><strong>Yes</strong></label>
        <input type="radio" id="yes" name="memory-lost" value="yes">
          </div>
          <div class="col">
          <label for="no-memory-lost"><strong>No</strong></label>
        <input type="radio" class="mb-3" id="no" name="no-memory-lost" value="no"><br>
          </div>
        </div>
        <div class="row">
        <li><strong>Does the resident need assistance when taking a bath?</strong></li>
          <div class="col">
          <label for="bath"><strong>Yes</strong></label>
        <input type="radio" id="yes" name="bath" value="yes">
          </div>
          <div class="col">
          <label for="no-bath"><strong>No</strong></label>
          <input type="radio" class="mb-3" id="no" name="no-bath" value="no"><br>
          </div>
        </div>
        <div class="row">
        <li><strong>Does the resident need assistance when eating?</strong></li>
          <div class="col">
          <label for="eat"><strong>Yes</strong></label>
        <input type="radio" id="yes" name="eat" value="yes">
          </div>
          <div class="col">
          <label for="no-eat"><strong>No</strong></label>
        <input type="radio" class="mb-3" id="no" name="no-eat" value="no"><br>
          </div>
        </div>
        <div class="row">
        <li><strong>Does the resident feel restless and walk around?</strong></li>
          <div class="col">
          <label for="restless"><strong>Yes</strong></label>
          <input type="radio" id="yes" name="restless" value="yes">
          </div>
          <div class="col">
          <label for="no-restless"><strong>No</strong></label>
          <input type="radio" class="mb-3" id="no" name="no-restless" value="no"><br>
          </div>
        </div>
        <div class="row">
        <li><strong>Does the resident have a peg/feeding tube/contraption?</strong></li>
          <div class="col">
          <label for="tube"><strong>Yes</strong></label>
        <input type="radio" id="yes" name="tube" value="yes">
          </div>
          <div class="col">
          <label for="no-tube"><strong>No</strong></label>
        <input type="radio" class="mb-3" id="no" name="no-tube" value="no"><br>
          </div>
        </div>
</div>
      </ol>
      </div>
      <div class="py-3">
        <button class="btn btn-primary" type="button"><a class="text-white text-decoration-none" href="patient-info.php">Next</a></button>
</div>
  </div>




