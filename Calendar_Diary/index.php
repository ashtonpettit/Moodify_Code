<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
    </head>

    <body>

        <div class="container">

                <?php include 'calendar.php'; 
                
                $calendar = new Calendar();
 
                echo $calendar->show();
                ?>  

            <?php include 'content.php'; ?>    

        <script src="process.js"></script>
        </div>
    </body>
</html>