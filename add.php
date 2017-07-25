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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>


<script type="text/javascript">

$(document).ready(function(){
    var counter = 2;
    $("#addButton").click(function () {
 if(counter>10){
            alert("Only 10 textboxes allow");
            return false;
 }  
 var newTextBoxDiv = $(document.createElement('div'))
      .attr("id", 'TextBoxDiv' + counter);
 newTextBoxDiv.after().html('<label>  ' + ' ' +
       '<input type="text" name="alamat' + counter +
       '" id="textbox' + counter + '" value="" style="width:300px" required>');
 newTextBoxDiv.appendTo("#TextBoxesGroup");
 counter++;
     });
     $("#removeButton").click(function () {
 if(counter==1){
          alert("No more textbox to remove");
          return false;
       }  
 counter--;
        $("#TextBoxDiv" + counter).remove();
     });
     $("#getButtonValue").click(function () {
 var msg = '';
 for(i=1; i<counter; i++){
 }
       alert(msg);
     });
  });
</script>

<script language='javascript'>
function validAngka(a)
{
	if(!/^[0-9.]+$/.test(a.value))
	{
	a.value = a.value.substring(0,a.value.length-1000);
	}
}
</script>

<div class="container">
<h3>
Create User</h3>
<br><br>


<form role="form" method="post" action="actions/add.php" enctype="multipart/form-data">
<div class="form-group">
		        	<label for="register-username"><i class="icon-user"></i> <b>Nama</b></label>
					<input class="form-control" name="nama" type="text" placeholder=""  maxlength="50" style="width:300px" required>
				</div>
				<div class="form-group">
		        	<label for="register-username"><i class="icon-user"></i> <b>No Hp</b></label>
					<input class="form-control" name="hp" type="text" placeholder=""  minlength="10" style="width:300px" 
					onkeyup="validAngka(this)" required>
				</div>
				<div class="form-group">
		        	<label for="register-username"><i class="icon-user"></i> <b>Email</b></label>
					<input class="form-control" name="email" type="email" placeholder="" style="width:300px" required>
				</div>
				<br>
<div id='TextBoxesGroup'>
 <div id="TextBoxDiv1">
		        	<label for="register-username"><i class="icon-user"></i> <b>Alamat</b></label>
					<input class="form-control" name="alamat" type="text" placeholder="" style="width:300px" required>
 </div>
</div>
<input type='button' value='+' id='addButton'>
<input type='button' value='-' id='removeButton'>


<div class="form-group">
					<button type="submit" style="margin-left:1000px">Add</button>
					<button type="reset">Back</button>
					<div class="clearfix"></div>
				</div>
</form>

</div>
				


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

</body>
</html>

