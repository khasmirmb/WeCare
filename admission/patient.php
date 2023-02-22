    <!--Patient Details-->
    <div class="container align-items-center pt-3" id="patient-details">
        <div class="container form-control">
            <div class="container-fluid">
            <h2 class="mb-4"><strong>Patient's Personal Details</strong></h2>
                <div class="row">
                <div class="mb-3">
                    <label for="patient-image" class="form-label"><strong>Patient Image</strong></label>
                    <input class="form-control" type="file" id="patient-image">
                </div>

                <div class="col-sm">
                    <label for="patient-fname"><strong>Firstname:</strong></label><br>
                    <input class="form-control" type="text" name="patient-fname" id="patient-fname" placeholder="Ex.Juan"><br>
                </div>
                
                <div class="col-sm">
                    <label for="patient-mname"><strong>Middlename:</strong></label><br>
                    <input class="form-control" type="text" name="patient-mname" id="patient-mname" placeholder="Ex. Buenaventura"><br>
                </div>

                <div class="col-sm">
                    <label for="patient-lname"><strong>Lastname:</strong></label><br>
                    <input class="form-control" type="text" name="patient-lname" id="patient-lname" placeholder="Ex. Carlos"><br>
                </div>
                
                <div class="col-sm">
                    <label for="patient-suffix"><strong>Suffix:</strong></label><br>
                    <input class="form-control" type="text" name="patient-suffix" id="patient-suffix" placeholder="Ex. Jr"><br>
                </div>
                </div>

                <div class="row">
                <div class="col-sm">
                    <label for="dateofbirth"><strong>Date of Birth</strong></label><br>
                    <input class="form-control" type="date" value="dateofbirth"><br>
                </div>

                <div class="col-sm">
                    <label for="patient-place-birth"><strong>Place of Birth:</strong></label><br>
                    <input class="form-control" type="text" name="patient-place-birth" id="patient-place-birth"><br>
                </div>

                <div class="col-sm">
                    <label for="patient-province"><strong>Province:</strong></label><br>
                    <input class="form-control" type="text" name="patient-province" id="patient-province"><br>
                </div>

                <div class="col-sm">
                    <label for="patient-gender"><strong>Gender:</strong></label><br>
                    <select class="form-select" name="patient-gender" id="patient-gender">
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    </select><br>
                </div>
                </div>
                <div class="row">
                <div class="col-sm">
                    <label for="patient-street"><strong>Street:</strong></label><br>
                    <input class="form-control" type="text" name="patient-street" id="patient-street"><br>
                </div>

                <div class="col-sm">
                    <label for="patient-barangay"><strong>Barangay:</strong></label><br>
                    <input class="form-control" type="text" name="patient-barangay" id="patient-barangay"><br>
                </div>

                <div class="col-sm">
                    <label for="patient-city"><strong>City:</strong></label><br>
                    <input class="form-control" type="text" name="patient-city" id="patient-city"><br>
                </div>

                <div class="col-sm">
                    <label for="patient-postal"><strong>Postal:</strong></label><br>
                    <input class="form-control" type="number" name="patient-postal" id="patient-postal" min="1" max="10"><br>
                </div>
                </div>
                
                <div class="mb-3">
                    <label for="history" class="form-label"><strong>Background History:</strong></label><br>
                    <textarea class="form-control" id="history" rows="3"></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="diagnosis" class="form-label"><strong>Doctors Diagnosis:</strong></label><br>
                    <textarea class="form-control" id="diagnosis" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="allergies" class="form-label"><strong>Allergies:</strong></label><br>
                    <textarea class="form-control" id="allergies" rows="3"></textarea>
                </div>

                <div class="d-flex py-3 justify-content-end">
                    <a class="btn btn-outline-primary me-1" type="button" id="back-survey" href="#">Back</a>

                    <a class="btn btn-primary" type="button" id="next-relative" href="#">Next<a>
                </div>
            </div>
        </div>
    </div>