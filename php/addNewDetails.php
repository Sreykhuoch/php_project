<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Information</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <?php include('../includeFiles/header.php'); ?>

    <table style="width:1280px">
        <!-- <tr>
            <td colspan="2">
                <?php include('../includeFiles/header.php'); ?>
            </td>
        </tr> -->
        <tr>
            <td style="width:920px; vertical-align: top">
                <?php  
                  $img = $_FILES["fImg"]["name"];
                  $rand = rand();
                  $imgU = $rand.$img;
                  $path = "../images/".$imgU;
                  move_uploaded_file($_FILES['fImg']['tmp_name'],$path);
                  $indate = date('Y/m/d H:m:s');
          
                  include('../includeFiles/dbCon.php');
           
                  $queryAdd = 'Insert into tblData (ProName, DesURL, ProductTypes, imgURL, Description, DateIn) 
                  Values("'.$_POST["txtProName"].'", "'.$_POST["txtDesLink"].'", "'.$_POST["CatType"].'", "'. $path .'","'.$_POST["des"].'", "'. $indate .'")';
                  //Check From Here  
                  if (mysqli_query($dbCon, $queryAdd)) {
                    echo '"<h1>"The Post Summary !!!"</h1>"';
                    echo 'New record created successfully!';   
                  } 
                  else 
                    echo "Error: " . $queryAdd . "<br>" . mysqli_error($dbCon);
                  echo 'Thank You!!!';
                   $dbCon->close();
                ?>

                    </br>
                    <a href="addnew.php">Add more</a>
            </td>
        </tr>
        <tr>

        </tr>
    </table>

    <section class="footer">
        <div class="left-part">
            <p>COPYRIGHT @2023, IT-CheaSreyKhuoch</p>
        </div>
        <div class="right-part">
            <a href="#">Contact</a>
            <a href="#">About</a>
        </div>
    </section>

</body>

</html>