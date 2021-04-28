<?php

    include_once("login.php");

    include("print_bill.php");
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reciept</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="bills.css">
</head>

<body>

    <div class="container">
   
            <h1> You can choose the relevant option to print the Bill</h1>

    <form action="print_bill.php" method="POST">  

        <table style="font-size: 1.3rem;">
        
                    <th>Consumer Name</th>
                    <th>Registration Number</th>
                    <th>Water(Choose options)</th>
                    <th>Date of Issue</th>
                

                <tr style="padding:35px auto;">
                    <td> <?php echo "<h3 style='text-align:center;'>" .$_SESSION['fname']. "</h3>";  ?></td>
                    <td><input type="number" name="reg_no" style="text-align:center; " placeholder="<?php echo $_SESSION['id']; ?> " disabled>
                    </td>
                    <td >
                    <select name="level">
                        <option selected>--Choose Water--</option>
                        <option value="200ml">A Glass</option>
                        <option value="400ml">A Big Glass</option>
                        <option value="500ml">A Jug</option>
                        <option value="1000ml">2 Jug</option>
                        <option value="5000ml">A small Bucket</option>
                        <option value="10000ml">A big Bucket</option>
                        </select>
                    </td>
                    <td><input type="date" name="date"></td>
                </tr>
        </table>

             <br>
             <br>
        <!-- <fieldset>
            <legend>Reciept for?:</legend>
            <label for="week">Weekly &nbsp;</label><input type="radio" id="week" name="receipt" value="weekly">
            &nbsp;&nbsp;<label for="month">Monthly &nbsp;</label><input type="radio" id="month" name="receipt" value="monthly">
            &nbsp;&nbsp;<label for="quarter">Quarterly &nbsp;</label><input type="radio" id="quarter" name="receipt" value="quarterly">
            &nbsp;&nbsp;<label for="year">Yearly &nbsp;</label><input type="radio" id="year" name="receipt" value="yearly">
        </fieldset> -->

        <hr>

        

        <br><br>
        <input id="bill" type="submit" role="button" onclick="document.getElementById('id01').style.display='none'"  class="btn btn-warning" value="Print Bill">

        <button onclick="goBack()" class="btn btn-primary btn-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
            </svg> &nbsp; Previous page
        </button>

        <marquee direction="front"><strong>Note: &nbsp;</strong>Donot refresh, back and reload the page while using this billing page. This may effect your data loss. </marquee>

    </div>
    
    <div ></div>

    <script>
        function goBack() {
        window.history.back();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>

