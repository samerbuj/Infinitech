<!DOCTYPE html>
<html lang="ca">
	 <head>
         <meta charset="UTF-8">
         <title>Llistat de categories - TDIW</title>
         <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">  <!--font menú-->
         <link rel="stylesheet" href="style.css">
	 </head>
	 <body>
         <div class="grid-container">
             <header>
                <?php require __DIR__ . '/views/mostrar_header.php'; ?>
             </header>

             <section></section>
             <div class="container">
                <?php include __DIR__ . "/controller/llistar_categories.php"; ?>
             </div>
         </div>

         <footer class ="Footer">
             <?php include __DIR__ . "/views/mostrar_footer.php" ?>
         </footer>
	 </body>
</html>