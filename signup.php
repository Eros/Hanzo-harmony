<?php

include ("common.php");
top();
?>

<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    ?>
    <form action="signup.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>
                New user
            </legend>
            <div>
                <strong>Name: </strong>
                <input type="text" name="name" size="32">
            </div>

            <div>
                <strong>
                    Gender
                </strong>
                <label><input type="radio" name="Gender" value="male"/>Male</label>
                <label><input type="radio" name="Gender" value="female"/>female</label>
                <!-- Someone will get triggered by this ^^ -->
            </div>
        </fieldset>
    </form>
}
