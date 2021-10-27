<?php
require_once ("../HTML/components/component.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD SYSTEM</title>

    <script src="https://kit.fontawesome.com/a9428e25d8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <main>
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"> <i class="fas fa-swatchbook"></i> Sales Inventory </h1>
        <div class="d-flex justify-content-center">
            <form action=""method="post" class="w-60">
            <div class="py-2"> 
            <?php inputElement("<i class='fas fa-id-card'></i>","Product ID", "id",""); ?>
            </div>
        

            <div class="pt-2">
            <?php inputElement("<i class='fas fa-book'></i>","First Name", "first_name",""); ?>  
            </div>
             <div class="pt-3">
             <?php inputElement("<i class='fas fa-book'></i>","Last Name", "last_name",""); ?>
             </div>
             <div class="row">
             <div class="col">
             <?php inputElement("<i class='fas fa-table'></i>","Date", "date",""); ?>
             </div>
             <div class="col">
                <?php inputElement("<i class='fas fa-money-check-alt'></i>","Price", "price",""); ?>        
             </div>

        </div>

        </form>
        </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>   


</body>
</html>