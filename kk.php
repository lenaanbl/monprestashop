<?php
 include("DAO/DatabaseUserDAO.php");

 $user = UserDAO::getUserById(3);
 echo $user->getMail();

?>