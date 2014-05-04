<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>
<?php include '/view/header.php'; ?>
<!-- registration form -->
<form method="POST" action="register.php" name="registerform" class="registerform">


    <div class="row">
        <fieldset>
            <legend>Account registration:</legend>
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <fieldset>
                    <legend>Login:</legend>
                    <!-- the user name input field uses a HTML5 pattern check -->
                    <label for="login_input_username">Username**: </label><br />
                    <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,30}" name="user_name" required /><br />

                    <!-- the email input field uses a HTML5 email type check -->
                    <label for="login_input_email">User's email*</label><br />
                    <input id="login_input_email" class="login_input" type="email" name="user_email" required /><br />

                    <label for="login_input_password_new">Password* (min. 6 characters)</label><br />
                    <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" /><br />

                    <label for="login_input_password_repeat">Repeat password*</label><br />
                    <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" /><br />

                </fieldset>
            </div>
            <div class="col-md-3">
                <fieldset>
                    <legend>Profile:</legend>

                    <label for="login_input_first_name">First name:*</label><br />
                    <input id="login_input_first_name" class="login_input" type="text" name="user_first_name" pattern="[a-Z]{2-20}" required/><br />

                    <label for="login_input_last_name">Last name:*</label><br />
                    <input id="login_input_last_name" class="login_input" type="text" name="user_last_name" pattern="[a-Z]{2-20}" required/><br />

                    <label for="login_input_home_address">Home address:</label><br />
                    <input id="login_input_home_address" class="login_input" type="text" name="user_home_address" pattern="[a-Z0-9]{2-200}" /><br />

                    <label for="login_input_mobile_telephone">Mobile telephone:</label><br />
                    <input id="login_input_mobile_telephone" class="login_input" type="tel" name="user_mobile_telephone" pattern="[0-9]{3,15}"/ ><br />

                    <label for="login_input_telephone">Home telephone:</label><br />
                    <input id="login_input_telephone" class="login_input" type="tel" name="user_telephone" pattern="[0-9]{3,15}"/ ><br />

                    <label for="login_input_birth">Birth date (yyyy-mm-dd):*</label><br />
                    <input id="login_input_birth" class="login_input" type="date" name="user_birth" pattern="[a-zA-Z0-9]{10}" /><br />

                </fieldset>
            </div>
            <div class="col-md-3"></div>
        </fieldset>
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <input type="submit"  name="register" value="Register" class="btn btn-success" /></div>
        <div class="col-md-4"></div><br />

        <i>* required field</i><br />
        <i>** (only letters and numbers, 2 to 30 characters)</i><br />
</form>
<br />
<!-- backlink -->
<button type="button" class="btn btn-default"><a href="index.php">Back to Login Page</a></button>
<?php include '/view/footer.php'; ?>