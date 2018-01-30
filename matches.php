<?php
/**
 * Created by PhpStorm.
 * User: George
 * Date: 30-Jan-18
 * Time: 2:54 PM
 */
include("common.php");
top();

if(!isset($_GET['name'])){
    ?>
    <form action="matches.php" method="get" enctype="multipart/form-data">
        <fieldset>
            <legend>Returning User:</legend>
            <div>
                <strong>Name:</strong>
                <input type="text" name="name" size="16" />
            </div>
            <div>
                <input type="submit" value="View My Matches" />
            </div>
        </fieldset>
    </form>
<?php
} else {
    $name = $_REQUEST['name'];
    $info = file("hanzos.txt", FILE_IGNORE_NEW_LINES);
    $person = findPerson($info, $name);

    ?>

    <div>
        <h1> Matches for you! </h1>
        <?php
        foreach($info as $line){
            $match = explode(",", $line);
            if(strcmp($match[1], $person[1]) != 0 && $match[2] >= $person[5] && $match[2] <= $person[6]
            && strcmp($match[4], $person[4]) == 0 && strlen(strpbrk($match[3], $person[3])) != 0
            && $person[2] >= $match[5] && $person[2] <= $match[6]){
                ?>

        <div clas="match">
            <p>
                <img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/4/user.jpg" alt="Match Icon"/>
                <?= $match[0] ?>
            </p>

                <ul>
                    <li><strong>Gender: </strong> <?= $match[1] ?></li>
                    <li><strong>Age: </strong> <?= $match[2] ?></li>
                    <li><strong>Hanzo Main?: </strong> <?= $match[3] ?></li>
                </ul>

        </div>
            }
        }
}
        ?>
    </div>
}

function findPerson($info, $name){
    foreach($info as $line){
        $person = explode(",", $line);
        if(strcasecmp($name, $person[0]) == 0){
            return $person;
        }
    }
}
?>