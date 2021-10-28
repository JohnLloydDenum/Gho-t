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
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <main>
        <div class="container text-center">
            <h1 class="py-5 bg-dark text-light rounded"> <i class="fas fa-swatchbook"></i> Sales Inventory </h1>
        <div class="d-flex justify-content-center">
            <form action=""method="post" class="w-60">
            <div class="py-2"> 
            <?php inputElement("<i class='fas fa-id-card'></i>","Product ID", "id",""); ?>
            </div>
        

            <div class="pt-2">
            <?php inputElement("<i class='fas fa-book'></i>","Product Name", "fproduct_name",""); ?>  
            </div>
            <div class="pt-2">
            <?php inputElement("<i class='fas fa-book'></i>","Quantity", "quantity",""); ?>  
            </div>
            <div class="pt-2">
            <?php inputElement("<i class='fas fa-book'></i>","First Name", "first_name",""); ?>  
            </div>
             <div class="pt-2">
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
        <div class="d-flex justify-content-center">
            
            <?php buttonElement("btn-create", "btn btn-success", "<i class='fas fa-plus'> </i>", "create", "dat-toggle='tooltip'data-placement='bottom' title='Create'"); ?>
            <?php buttonElement("btn-read", "btn btn-primary", "<i class='fas fa-sync'> </i>", "read", "dat-toggle='tooltip'data-placement='bottom' title='Read'"); ?>
            <?php buttonElement("btn-update", "btn btn-light border", "<i class='fas fa-pen-alt'> </i>", "update", "dat-toggle='tooltip'data-placement='bottom' title='Update'"); ?>
            <?php buttonElement("btn-delete", "btn btn-danger", "<i class='fas fa-trash-alt'> </i>", "delete", "dat-toggle='tooltip'data-placement='bottom' title='Delete'"); ?>
            
        </div>

        </form>
        </div>
        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
            <thead class="table-dark"> 
                <tr>
                    <th> Product ID </th>
                    <th> Product Name</th>
                    <th> Quantity </th>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th> Date </th>
                    <th> Price </th>
                    <th> Edit </th>
                </tr>
            </thead>
            <tbody id="tbody">
                <tr>
                    <td>1</td>
                    <td>Alfonso Platinum</td>
                    <td>3</td>
                    <td>JohnLloyd</td>
                    <td>Denum</td>
                    <td>10/28/21</td>
                    <td>1500</td>
                    <td> <i class="fas fa-edit btnedit"> </i> </td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>   

    </link>
</body>
</html>