<?php
/**
 * Created by PhpStorm.
 * User: Karolina
 * Date: 27/07/19
 * Time: 12:50
 */



function JeEmail ($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
       return true;
    }else {
        return false;
    }
}

if (empty ($_POST))
{
    ?>
    <form method="post" action="zpracuj.php">
        E-mail: <input name="email">
        <input type="Submit" name="odesli">
    </form>
    <?
}
else
{
    if (!JeEmail($_POST["email"])) echo "Tohle nevypadá jako e-mail";
    else echo "Zpracovávám ". $_POST["email"];
}