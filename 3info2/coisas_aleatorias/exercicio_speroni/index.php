<?xml version="1.0" encoding="UTF-8"?>
<module type="WEB_MODULE" version="4">
  <component name="NewModuleRootManager">
    <content url="file://$MODULE_DIR$" />
    <orderEntry type="inheritedJdk" />
    <orderEntry type="sourceFolder" forTests="false" />
  </component>
</module>                                                                                                                                                                                                                                       me']) AND $_SESSION['tipo'] == 'a'){
        ?>
    <p>Olá<?= $_SESSION['nome'] ?> | <a href="logout.php">sair</a>
    <?php
        }else {
        ?>

        <form action="login.php" method="POST">
            <input type="text" name="usuario" placeholder="Nome do usuario">
            <br>
            <input type="password" name="senha" placeholder="Sua senha"