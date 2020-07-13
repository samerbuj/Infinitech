<!DOCTYPE html>
<html lang="ca">
	 <head>
         <meta charset="UTF-8">
         <title>Llistat de categories</title>
         <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">  <!--font menú-->
         <link rel="stylesheet" href="../style.css">
         <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	 </head>
	 <body>
         <div class="threeElem" id="LlistarCat">
             <header>
                <?php require __DIR__ . '/../views/mostrar_header.php'; ?>
             </header>

             <div class="container">
                <?php include __DIR__ . "/../controller/llistar_categories.php"; ?>
             </div>

             <footer>
                 <?php include __DIR__ . "/../views/mostrar_footer.php" ?>
             </footer>
         </div>

         <?php include __DIR__ . '/../views/mostrar_cartBar.php'; ?>
	 </body>
</html>