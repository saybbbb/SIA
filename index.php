<html lang="en"><head>
             <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>

<title>Activity 3</title>

</head>  
<body>

      <center>
     <table border=1><tr><td colspan=2>
       <form action="insertrec.php" method="post">
       <div class="mb-3 mt-3">
         <h1>Storing data to Database</h1></td></tr>
         <tr> <td>  
               <label for="sid">Student id:</label>
         </td><td>
               <input type="text" name="sid" id="sid">
         </td></tr> <tr> <td> 
            <label for="lastName">Last Name:</label>
          </td><td>
               <input type="text" name="lastname" id="lastname">
          </td> </tr>  <tr>   <td> 
               <label for="firstName">First Name:</label>
    </td><td>
               <input type="text" name="firstname" id="firstname">
  </td> </tr> <tr> <td colspan="2" style="text-align: center;"> 
   <input type="submit" value="Submit" class="btn btn-primary">
   <input type="button" value="cancel" class="btn btn-primary">
     </td></tr> </div>
         </form>
    

</table>

<div style="margin: 20px 0;">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
</div> <!-- Spacer div -->  

<div class="container mt-3">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbstudents";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sid, lastname, firstname FROM tblstudents";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table id='myTable' class='table table-striped'><thead><tr><th>Student id</th><th>Lastname  </th><th>Firstname</th><th colspan=2>Action</th></tr></thead>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td> " . $row["sid"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["firstname"]. "</td>
<td><a href='editme.php?sid=" . $row["sid"]  . "&firstname=" . $row["firstname"]  .  "&lastname=" . $row["lastname"]  .  "'>Edit</td>

<td><a href='deleteme.php?sid=" . $row["sid"] . "'> delete</a></td>
</tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";
$conn->close();
?>
</div>



<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


</body>
</html>