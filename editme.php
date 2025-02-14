<!DOCTYPE html>

 <html lang="en"><head>
             <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



<title>Activity 3</title>

</head>  
<body>
      <center>
      <table border=1><tr><td colspan=2>
       <form action="updateme.php" method="post">
         <h1>Update data from Database</h1></td></tr>

         
         <tr> <td>  
               <label for="sid">Student id:</label>
         </td><td>
               <input type="text" value= <?php echo $_REQUEST['sid'];?> name="sid" id="sid">
         </td></tr>     
         <tr> <td> 
               <label for="firstName">First Name:</label>
         </td><td>
               <input type="text" value= <?php echo $_REQUEST['firstname'];?> name="firstname" id="firstname">
          </td></tr>  
          <tr> <td> 
            <label for="lastName">Last Name:</label>
          </td><td>
               <input type="text" value= <?php echo $_REQUEST['lastname'];?> name="lastname" id="lastname">
          </td></tr> 
          <tr> <td colspan="2" style="text-align: center;"> 
            <input type="submit" value="Submit" class="btn btn-primary">
            <input type="button" value="cancel" class="btn btn-primary">
          </td></tr> 

         </form>
    

</table>

<div style="margin: 20px 0;"></div> <!-- Spacer div -->  

