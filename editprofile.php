<?php
    require_once("templates/header.php");
    require_once("dao/UserDao.php");

    $userDao = new UserDao($conn, $BASE_URL);
    $userData = $userDao->verifyToken();

?>
<div id="maincontainer" class="container-fluid">
    <h1>Edição do Perfil</h1>
</div>
<?php
    require_once("templates/footer.php");
?>