<?php
    include "config/connection.php";
    include "fixed/head.php";
    include "fixed/nav.php";
?>

    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto py-2">
                <h2>Prijavi se</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto my-5">
                <div class="form-login">
                    <div>
                        <div class="form-group">
                            <label for="tbEmail">Email</label>
                            <input type="email" id="tbEmail" class="form-control">
                            <span style="color: red;"id="email-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="tbPassword">Password</label>
                            <input type="password" id="tbPassword" class="form-control">
                            <span style="color: red;" id="password-error"></span>
                        </div>
                        <button type="button" class="btn btn-dark" name="btnKlik" onclick="login();">Prijavi se</button>
                        <p style="margin-top: 1rem; font-weight: 700;" id="message-info"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
    include "fixed/footer.php";
?>

<script src="assets/js/functions.js"></script>