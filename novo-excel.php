<html>
    <head>
        <title>Novo Excel</title>
    </head>
    <body>
    <pre>
<ul>
        <?php
            require_once 'classes/excel.class.php';

            $arquivo = $_FILES['excelFile'];
            
            $e = new Excel($arquivo); 
        ?>
    
</ul>
    </pre>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="excelFile">
        <input type="submit" value="Ver Planilha" >
    </form>
    </body>
</html>



