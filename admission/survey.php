<?php

    $page_title = 'WeCare - Survey';
    require_once '../includes/header.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<!--Breadscrumbs-->
<div class="p-5">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item active" aria-current="page">Survey</li>
        <li class="breadcrumb-item"><a href="patient-info.php">Patient Information</a></li>
        <li class="breadcrumb-item"><a href="relative-info.php">Relative Information</a></li>
        <li class="breadcrumb-item"><a href="review.php">Review</a></li>
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
                        <?php
                        require_once '../classes/reference.class.php';
                        $relationship = new Reference();

                        $relation = $relationship->get_relationship();
                         ?>
                        <select name="inquire" id="inquire">

                        <?php foreach($relation as $row){ ?>
                        <option value="<?php echo $row['relationship'] ?>"><?php echo $row['relationship'] ?></option>
                        <?php } ?>
                        </select>
                    </div>
                </div>


                <h4>What best describes the resident?</h4>
                <h9 class="mb-4">To help us provide our initial core service and package recommendations, please answer the following questions:</h9>
                <!--Details-->
                <ol class="mb-3">
                
                <?php
                $survey_question = new Reference();

                $survey = $survey_question->get_survey_questions();
                
                 foreach($survey as $row){ ?>

                <div class="row mt-2">
                    <li><strong><?php echo $row['question'] ?></strong></li>
                    <div class="col mt-2">
                        <label for="<?php echo $row['name'] ?>"><strong>Yes</strong></label>
                        <input type="radio" id="yes" name="<?php echo $row['name'] ?>" value="Yes">
                    </div>

                    <div class="col">
                        <label for="<?php echo $row['name'] ?>"><strong>No</strong></label>
                        <input type="radio" class="mb-3" id="no" name="<?php echo $row['name'] ?>" value="No"><br>
                    </div>
                </div>

                <?php } ?>

                <div class="d-flex py-3 justify-content-end">
                    <button class="btn btn-primary" type="button"><a class="text-white text-decoration-none" href="patient-info.php">Next</a></button>
                </div>
            </div>
        <form>
    </div>
</div>