<?php

    $page_title = 'WeCare Staff - Password Settings';
    require_once '../includes/staff-header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }
    
    require_once '../includes/staff-sidebar.php';

?>

    <div class="content">

    <div class="container p-0">
    <h1 class="h3 mb-3">Settings</h1>
    <div class="row">
        <div class="col-md-5 col-xl-4">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Profile Settings</h5>
                </div>

                <div class="list-group list-group-flush" role="tablist">
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="../staff/settings.php" role="tab">
                      Account
                    </a>
                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="../staff/password.php" role="tab">
                      Password
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                      Delete account
                    </a>
                </div>
            </div>
        </div>


        <div class="tab-pane fade show active" id="password" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Password</h5>

                            <form>
                                <div class="form-group">
                                    <label for="inputPasswordCurrent">Current password</label>
                                    <input type="password" class="form-control" id="inputPasswordCurrent">
                                    <small><a href="#">Forgot your password?</a></small>
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew">New password</label>
                                    <input type="password" class="form-control" id="inputPasswordNew">
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew2">Verify password</label>
                                    <input type="password" class="form-control" id="inputPasswordNew2">
                                </div>
                                <button type="submit" class="save-pass-btn">Save changes</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

<?php

  require_once '../includes/staff-footer.php';

?>