
<?php
if (isset($message)) {
    echo $message;
}
?>
<form class="login" action="../accounts/index.php">
    <label for="ClientEmail">email :</label>
    <br>
    <input type="email" id="ClientEmail" name="ClientEmail"
           <?php if(isset($ClientEmail)){
            echo"value='$ClientEmail'";  
           } ?>
           required/>
    <br>
    <label for="ClientPassword">password :</label>
    <br>
    <input type="password" id="ClientPassword" name="ClientEmail" required 
           />
    <span id="pw_spec_notice">password must be at least 8 characters, and
        have at least one uppercase, one number and one special character.</span>
    <br>
    <br>
    <div class="buttons">
        <input type="submit" value="login"/>

        <br>
        <br>
        <label for="login_button">become a Member :</label>
        
        <input type="hidden" name="action" value="login"/>
        
    </div>
</form>

<a href="/acme/accounts/index.php?action=registration"  >register</a>
