<!doctype html>

<?php
include("actions/connection.php");
session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
<title>Teravin Technovations</title>
<meta content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" name="viewport"/>
<meta content="Aguzrybudy" name="author"/>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
<h3>
List User</h3>
<br><br>



<form role="form" method="post" action="actions/search.php" enctype="multipart/form-data">
<p style="margin-left:800px">Search&nbsp;<input name="search" type="text" > 
&nbsp;<button type="submit">Search</button></p>
  
</form>



<br>
<center>
<table  width="500px" id="myTable2" border="1px">
<tr>       
<th onclick="sortTable(0)">Nama</th>       
<th onclick="sortTable(1)">Email</th>       
</tr>

<?php 
  include("actions/connection.php");
$query = mysql_query("select * from teravin_technovations");
        while($row = mysql_fetch_array($query)){
       
?>

<tr class="tbl-item" ><!--<img/>-->
    <td class="td-block"><p><?php echo $row['NAMA'];?></p></td>
    <td class="td-block"><p><?php echo $row['EMAIL'];?></p></td>
</tr>
<?php } ?> </table></center>
</div>


<a href="add.php" class="btn btn-success" data-toggle="modal" style="margin-left:1000px; background-color:white; color:black">ADD</a>

<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
     $.ajax({
          url: "modal_edit.php",
          type: "GET",
          data : {modal_id: m,},
          success: function (ajaxData){
            $("#ModalEdit").html(ajaxData);
            $("#ModalEdit").modal('show',{backdrop: 'true'});
           }
         });
        });
      });
</script>

<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable2");
  switching = true;
  dir = "asc"; 
  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount ++; 
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>



</body>
</html>