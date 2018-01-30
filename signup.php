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
                <strong>Gender: </strong>
                <label><input type="radio" name="Gender" value="male"/>Male</label>
                <label><input type="radio" name="Gender" value="female"/>female</label>
                <!-- Someone will get triggered by this ^^ -->
            </div>
            <div>
                <strong>Age: </strong>
                <input type="text" name="age" size="5" maxlength="2"/>
            </div>
            <div>
                <strong>Are you a hanzo main?: </strong>
                <select name="yayornay">
                    <option>Yes</option>
                    <option>No (fuck off if this is the case)</option>
                </select>
            </div>
        </fieldset>
    </form>
<?php
} elseif($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $gender = substr($_POST['gender'], 0, 1);
    $age = $_POST['age'];
    $hanzo_main = $_POST['hanzomain'];
    $age_begin = $_POST['ageBegin'];
    $age_end = $_POST['ageEnd'];
    $info = null;
    #need to get the final shit

    file_put_contents('hanzos.txt', "\n", $info, FILE_APPEND);

    ?>
    <h3> Welcome to Hanzo Harmony <?= $name ?></h3>
    <?php
}
?>
<?php
bottom();
?>
