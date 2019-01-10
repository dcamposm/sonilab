<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../public/css/*" />
    </head>
    
    <body>
        <div class="container">
            <header>
                <div class="header"> 
                    
                    <div class="nav">
                        <a href='<?php echo constant('URL');?>'>Perfil</a>
                        <a href='<?php echo constant('URL');?>usuari/index'>Usuaris</a>
                        <a href='<?php echo constant('URL');?>personal/index'>Personal</a>
                    </div>
                </div>
            </header>
            <div class="main">
                <?php require_once('routes.php'); ?>
            </div>
            <footer>
                Copyright
            </footer>
        </div>
    </body>
</html>