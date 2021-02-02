<html>
    <head>
        <meta charset="UTF-8">
        <meta nome="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="João Marcus Cardoso">
<!--    Icone     <link rel="icon" type="img/svg" href="<?php echo BASE_URL; ?>assets/images/logo_web_large.svg" /> 	
 -->		
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
		<link  rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />


        <title>Job</title>
        
        
    </head>
    <body>
        <header>
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?php echo BASE_URL; ?>">LadyLúDenim</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>">Home</a>
                    </li>


                </ul>

                <div class="container-login">
                        
                        <?php  if(empty($_SESSION['token'])): ?>
                        <a href="<?php echo BASE_URL; ?>Login" >Login</a>
                        <?php else: ?>
                        <a href="<?php echo BASE_URL; ?>Login/logout">Sair</a>
     
                        <?php endif; ?>
                </div>

            </div>
            
        </nav>
        </header>

        <div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div>

        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js" ></script>
        <script type="text/javascript"  >var BASE_URL = '<?php echo BASE_URL; ?>';</script>
    </body>

</html>