
<?php if (isset($message)) {
    echo $message;
}?>

<div id="regFormContainer">
    <form action="../accounts/index.php" method="post">

        <p>
            <label for="ClientFirstName">first name:</label><br>
            <input type="text" id="ClientfirstName" name="ClientFirstName" 
                   <?php if (isset($ClientFirstName)){
                       echo "value='$ClientFirstName'";} ?>
                   required/>
        </p>
        <p> 
            <label for="ClientLastName">last name:</label><br>
            <input type="text" id="ClientLastName" name="ClientLastName"
                   <?php if (isset($ClientLastName)) {
                   echo "value='$ClientLastName'";
                   
                   } ?>
                   required/>
        </p>
        <p>
            <label for="ClientEmail">email:</label><br>
            <input type="email" id="ClientEmail" name="ClientEmail"
                   <?php if (isset($ClientEmail)) {
                   echo "value='$ClientEmail'";
                   } ?>
                   required/>
                   
        </p>
        
        <p>
            <label for="password">password:</label><br>
            <input type="password" id="password" name="ClientPassword" required 
                  pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])
                  (?=.*[a-z]).*$"/>
               <span id="pw_spec_notice">password must be at least 8 characters, and
                have at least one uppercase, one number and one special character.</span>
        </p>
        <p>
            <input type="reset" name="reset" value="reset" />
            <input type="submit" name="submit" value="submit"/>     
        </p>
            <input type="hidden" name="action" value="register"/>
    </form>

</div>