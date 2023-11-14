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
                <form name="frmAddNew" action="addNewDetails.php" method="post" enctype="multipart/form-data">
                    <table style="width:800px; font-size:15pt">
                        <tr>
                            <td colspan="2" style="padding: 5px">
                                <h3> Add New Information </h3>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:220px; padding: 5px">Product Id :</td>
                            <td style="width:700px; padding: 5px">
                                <input type="text" name="txtId" style="width:500px;  font-size:15pt">
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px">Product Name :</td>
                            <td style="padding: 5px"><input type="text" name="txtProName" style="width:500px;  font-size:15pt"></td>
                        </tr>
                        <tr>
                            <td style="padding: 5px">Product Type :</td>
                            <td style="padding: 5px">
                                <?php
                               
                                
                                include('../includeFiles/tourTypesQuery.php');
                                if($rtt->num_rows > 0) {
                                    echo'<select name="CatType" style="width:150px">';
                                    while($row = $rtt->fetch_assoc()) 
                                    echo('"<option value="'.$row["CateID"].'">'.$row["Category"].'</option>"');
                                    echo '</select>';
                                   } else {
                                    echo'0 resutls';
                                   }
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px">Description :</td>
                            <td style="padding: 5px"><textarea rows="8" style="width:500px;  font-size:15pt" name ="des">
                            </textarea></td>
                        </tr>
                        <tr>
                            <td style="padding: 5px">Destination Link :</td>
                            <td style="padding: 5px"><input type="text" name="txtDesLink"                                                                                                                                                                      k" style="width:500px;  font-size:15pt"></td>
                        </tr>
                        <tr>
                            <td style="padding: 5px">Choose Image :</td>
                            <td style="padding: 5px"><input type="file" name="fImg" style="font-size:15pt"></td>
                        </tr>
                        <tr>
                            <td style="padding: 5px"></td>
                            <td style="padding: 20px">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="Submit" name="cmdSubmint" value="Submit">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="Reset" name="cmdReset" value="Cancel">
                            </td>
                        </tr>
                    </table>
                </form>
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