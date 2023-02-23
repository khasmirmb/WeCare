    <!--Survey & Services-->
    <div class="container align-items-center pt-3" id="survey-details">
        <div class="survey-container form-control">
            <h2 class="text-center">Survey & Services</h2>
            <h6 class="text-center">Just fill out this form, and we will know the initial care level recommendation </h6>
                    <div class="row align-items-start">
                        <label for="service"><strong>Services Needed:</strong></label><br>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <input class="form-check-input" type="checkbox" id="service[]" name="service[]" value="Caregiving" <?php if(isset($_POST['service'])) { if (preg_match('/(Caregiving)/', $services)) echo ' checked'; } ?>>
                            <label for="service[]">Caregiving</label><br>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <input class="form-check-input" type="checkbox" id="service[]" name="service[]" value="Rehabilitation" <?php if(isset($_POST['service'])) { if (preg_match('/(Rehabilitation)/', $services)) echo ' checked'; } ?>>
                            <label for="service[]">Rehabilitation</label><br>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <input class="form-check-input" type="checkbox" id="service[]" name="service[]" value="Consultation" <?php if(isset($_POST['service'])) { if (preg_match('/(Consultation)/', $services)) echo ' checked'; } ?>>
                            <label for="service[]">Consultation</label><br>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <input class="form-check-input" type="checkbox" id="service[]" name="service[]" value="Rooms" <?php if(isset($_POST['service'])) { if (preg_match('/(Rooms)/', $services)) echo ' checked'; } ?>>
                            <label for="service[]">Rooms</label><br>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <input class="form-check-input" type="checkbox" id="service[]" name="service[]"  value="Bundle" <?php if(isset($_POST['service'])) { if (preg_match('/(Bundle)/', $services)) echo ' checked'; } ?>>
                            <label for="service[]">Bundle</label><br>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <input class="form-check-input" type="checkbox" id="service[]" name="service[]" value="All" <?php if(isset($_POST['service'])) { if (preg_match('/(All)/', $services)) echo ' checked'; } ?>>
                            <label for="service[]" class="mb-3">Applied All</label><br>
                        </div>
                    </div>

                        <?php
                            //Display the error message if there is any.
                            if(isset($error)){
                                echo '<div><p class="error">'.$error.'</p></div>';
                            }     
                        ?>

                    <div class="mb-3">
                        <div class = "inquiries">
                            <label for="inquire"><strong>I want to inquire for?</strong></label><br>
                            <?php
                            require_once '../classes/reference.class.php';
                            $relationship = new Reference();

                            $relation = $relationship->get_relationship();
                            ?>
                            <select class="form-select" name="inquire" id="inquire">

                            <?php foreach($relation as $row){ ?>
                            <option value="<?php echo $row['relationship'] ?>" <?php if(isset($_POST['inquire'])) { if ($_POST['inquire'] == $row['relationship']) echo ' selected="selected"'; } ?>><?php echo $row['relationship'] ?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>


                    <h4>What best describes the resident?</h4>
                    <h9 class="mb-4">To help us provide our initial core service and package recommendations, please answer the following questions:</h9>
                    <!--Details-->
                    <?php
                        if(isset($_POST['submit']) && !validate_survey_questions($_POST)){
                    ?>
                        <p class="error mt-2 mb-2">Please Complete The Survey Questions.</p>
                    <?php
                        }
                    ?>
                    <ol class="mb-3">
                        <div class="row mt-2">
                            <li><strong>Does the resident walk with assistance?</strong></li>
                            <div class="col mt-2">
                                <label for="walk"><strong>Yes</strong></label>
                                <input type="radio" id="yes" name="walk" value="Yes" <?php if(isset($_POST['walk'])) { if ($_POST['walk'] == 'Yes') echo ' checked'; } ?>>
                            </div>
                            <div class="col mt-2">
                                <label for="walk"><strong>No</strong></label>
                                <input type="radio" class="mb-3" id="no" name="walk" value="No" <?php if(isset($_POST['walk'])) { if ($_POST['walk'] == 'No') echo ' checked'; } ?>><br>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <li><strong>Is the resident is Wheelchair-bound?</strong></li>
                            <div class="col mt-2">
                                <label for="wheelchair"><strong>Yes</strong></label>
                                <input type="radio" id="yes" name="wheelchair" value="Yes" <?php if(isset($_POST['wheelchair'])) { if ($_POST['wheelchair'] == 'Yes') echo ' checked'; } ?>>
                            </div>
                            <div class="col mt-2">
                                <label for="wheelchair"><strong>No</strong></label>
                                <input type="radio" class="mb-3" id="no" name="wheelchair" value="No" <?php if(isset($_POST['wheelchair'])) { if ($_POST['wheelchair'] == 'No') echo ' checked'; } ?>><br>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <li><strong>Is the resident is bedridden?</strong></li>
                            <div class="col mt-2">
                                <label for="bedridden"><strong>Yes</strong></label>
                                <input type="radio" id="yes" name="bedridden" value="Yes" <?php if(isset($_POST['bedridden'])) { if ($_POST['bedridden'] == 'Yes') echo ' checked'; } ?>>
                            </div>
                            <div class="col mt-2">
                                <label for="bedridden"><strong>No</strong></label>
                                <input type="radio" class="mb-3" id="no" name="bedridden" value="No" <?php if(isset($_POST['bedridden'])) { if ($_POST['bedridden'] == 'No') echo ' checked'; } ?>><br>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <li><strong>Is the resident experiencing memory loss or difficulty remembering the time, date, place, other people, or themselves?</strong></li>
                            <div class="col mt-2">
                                <label for="memory"><strong>Yes</strong></label>
                                <input type="radio" id="yes" name="memory" value="Yes" <?php if(isset($_POST['memory'])) { if ($_POST['memory'] == 'Yes') echo ' checked'; } ?>>
                            </div>
                            <div class="col mt-2">
                                <label for="memory"><strong>No</strong></label>
                                <input type="radio" class="mb-3" id="no" name="memory" value="No" <?php if(isset($_POST['memory'])) { if ($_POST['memory'] == 'No') echo ' checked'; } ?>><br>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <li><strong>Does the resident need assistance when taking a bath?</strong></li>
                            <div class="col mt-2">
                                <label for="bath"><strong>Yes</strong></label>
                                <input type="radio" id="yes" name="bath" value="Yes" <?php if(isset($_POST['walk'])) { if ($_POST['walk'] == 'Yes') echo ' checked'; } ?>>
                            </div>
                            <div class="col mt-2">
                                <label for="bath"><strong>No</strong></label>
                                <input type="radio" class="mb-3" id="no" name="bath" value="No" <?php if(isset($_POST['walk'])) { if ($_POST['walk'] == 'No') echo ' checked'; } ?>><br>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <li><strong>Does the resident need assistance when eating?</strong></li>
                            <div class="col mt-2">
                                <label for="eating"><strong>Yes</strong></label>
                                <input type="radio" id="yes" name="eating" value="Yes" <?php if(isset($_POST['eating'])) { if ($_POST['eating'] == 'Yes') echo ' checked'; } ?>>
                            </div>
                            <div class="col mt-2">
                                <label for="eating"><strong>No</strong></label>
                                <input type="radio" class="mb-3" id="no" name="eating" value="No" <?php if(isset($_POST['eating'])) { if ($_POST['eating'] == 'No') echo ' checked'; } ?>><br>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <li><strong>Does the resident feel restless and walk around?</strong></li>
                            <div class="col mt-2">
                                <label for="restless"><strong>Yes</strong></label>
                                <input type="radio" id="yes" name="restless" value="Yes" <?php if(isset($_POST['restless'])) { if ($_POST['restless'] == 'Yes') echo ' checked'; } ?>>
                            </div>
                            <div class="col mt-2">
                                <label for="restless"><strong>No</strong></label>
                                <input type="radio" class="mb-3" id="no" name="restless" value="No" <?php if(isset($_POST['restless'])) { if ($_POST['restless'] == 'No') echo ' checked'; } ?>><br>    
                            </div>
                        </div>

                        <div class="row mt-2">
                            <li><strong>Does the resident have a peg/feeding tube/contraption?</strong></li>
                            <div class="col mt-2">
                                <label for="feeding"><strong>Yes</strong></label>
                                <input type="radio" id="yes" name="feeding" value="Yes" <?php if(isset($_POST['feeding'])) { if ($_POST['feeding'] == 'Yes') echo ' checked'; } ?>>
                            </div>
                            <div class="col mt-2">
                                <label for="feeding"><strong>No</strong></label>
                                <input type="radio" class="mb-3" id="no" name="feeding" value="No" <?php if(isset($_POST['feeding'])) { if ($_POST['feeding'] == 'No') echo ' checked'; } ?>><br>
                            </div>
                        </div>
                    </ol>


                    <div class="d-flex py-3 justify-content-end">
                        <a class="btn btn-primary me-2" id="next-patient" href="#">Next</a>
                    </div>
                    
        </div>
    </div>