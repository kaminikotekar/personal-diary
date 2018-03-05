<?php
session_start();
$link=mysqli_connect("shareddb-g.hosting.stackcp.net","Dairy-User-3235b14f","abcd1234","Dairy-User-3235b14f");
if(!$link)
die('Could not connect: ' . mysql_error());

    $query2="SELECT * FROM Book WHERE email='".mysqli_real_escape_string($link,$_SESSION["email"])."'";
    $result2=mysqli_query($link,$query2);




?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <script src="jquery_ui_go/external/jquery/jquery.js" type="text/javascript"></script>
  <script src="jquery_ui_go/jquery-ui.js"></script>
  <style type="text/css">
      body, html {
    height: 100%;
}
      body{ 
background: url(my_dairy_bck.jpg) no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;


}
.container{
  width: 400px;
  margin-top: 80px;
 background-color: rgba(255, 255, 255, 0.5);
  padding-top: 30px;
  padding-bottom: 30px;
  padding-right: 5px; 
  
  border-radius: 10px;
  height: 600px;
}
@media (min-width: 576px) { 
.container{
    width: 600px;
}

}

@media (max-width: 575.98px) { 
.container{
  width: 380px;
}
}
#top{
    float: right;
}
.h1,.h3{
    font-family: 'Caveat', cursive;
     color: green;
     margin-top: 5px;
}
img{
width: 80px;
height: 80px;
}


.modal[data-modal-color="green"] .modal-content {
  background: #4caf50;
}
.modal[data-modal-color] {
  color: #fff;
}
.modal[data-modal-color] .modal-footer {
  background: rgba(0, 0, 0, 0.2);
border-top: 1px solid green;
}
.modal[data-modal-color] .modal-header {
  background: rgba(0, 0, 0, 0.2);
border-bottom: 1px solid green;
}









  </style>



</head>
<body>
<div class="container bootstrap snippet">
<div class="d-flex">
  <div class="mr-auto p-2"> <p class="h1"> Hello <?php echo " ".$_SESSION["name"]; ?></p></div>
  <div class="p-2"><button id="edit_profile" class="btn btn-success">Edit profile</button></div>
  <div class="p-2"><button id="Signout" class="btn btn-success">Signout</button></div>
</div>
<div class="d-flex p-2"><p class="h3" style="color: red">Your Journals:</p></div>

<div class="text-right">
  

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Add new Journal
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
        <form id="create">
        <input type="next" class="form-control" id="title" name="journal" placeholder="Your Journal Name"></textarea></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <textarea class="form-control" rows="10" id="content" name="content"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button></form>
      </div>
    </div>
  </div>
</div>



<table class="table table-hover">

  <tbody>
  <?php
if($result2)
{
    $i=1;
while($row=mysqli_fetch_array($result2))
{
    echo"<tr id='".$row[2]."'>
      <th scope='row'>".$i."</th>
      <td class='i".$i."'>".$row[2]."</td>
     
    </tr>";
   $i++;
}
   } ?>
   
  </tbody>
</table>
</div>


<div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titled"></h5>
        <form id="changes">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <textarea class="form-control" rows="10" id="contentd" name="content"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="change_save" type="submit" class="btn btn-primary" disabled="true">Save changes</button></form>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" data-modal-color="green" id="edit_profile_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit_profile_form">

      <div class="form-group">
    <label for="edit_name">Name</label>
    <input type="text" class="form-control" id="edit_name" aria-describedby="emailHelp">
    
  </div>
   <div class="form-group row">
    <label for="edit_email" class="col-sm-2">Email</label>
    <input type="text" style="color: white" readonly class="form-control-plaintext col-sm-10" value="" id="edit_email"> 
    
  </div>
  <div class="form-group">
    <label for="edit_password">Password</label>
    <input type="text" class="form-control" id="edit_password">
  </div>
          
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="edit_profile_submit" class="btn btn-primary">Save changes</button>
      </div></form>
    </div>
  </div>
</div>










<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript">
        
$("#create").submit(function(){
    var title=$("#title").val();
    var body=$("#content").val();
    if(title==""||body=="")
    {
        alert("Enter the fields");
      
    }
    else
        {

          xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function(){
  if(this.readyState==4 && this.status==200){
    location.reload();
  }
};
xhttp.open("GET","insert.php?title="+title+"&content="+body, true);
xhttp.send();

        }

});

$("#contentd").keyup(function() { 
    $("#change_save").removeAttr("disabled")
});
$("#demoModal").on('show',function(){

 $("#change_save").addAttr("disabled","true");

});

$("#changes").submit(function(){
var title=$("#titled").html();
var content=$("#contentd").val();
if(content=="")
alert("Enter description!");
else
{
xhttp=new XMLHttpRequest();
xhttp.onreadystatechange=function(){
  if(this.readyState==4 && this.status==200){
    alert("updated successfully");
  }
};
xhttp.open("GET","update.php?title="+title+"&content="+content, true);
xhttp.send();



}
});
//Ajax request to whole.php for selecting prticular row from table
    $('tr').click(function(){
      var i= $(this).attr('id');
      $("#demoModal").modal('show');


      xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) { //if request successful
      $("#titled").html(i);                //insering values to title field of modal
      $("#contentd").val(this.responseText); // response text is the output
    }
  };
  xhttp.open("GET", "whole.php?q="+i, true);
  xhttp.send();   


    });

  $("#Signout").click(function(){
   
    window.location.href = "http://kaminidairy-com.stackstaging.com";

  });
   

$("#edit_profile").click(function()
{
$("#edit_profile_modal").modal('show');

xhttp = new XMLHttpRequest();
xhttp.onreadystatechange=function(){
if(this.readyState == 4 && this.status == 200){
var content=this.responseText;
var arrayValues=content.split("|");
$("#edit_name").val(arrayValues[0]);
$("#edit_email").attr('value',arrayValues[1]);
$("#edit_password").val(arrayValues[2]);

}

};
xhttp.open("GET", "edit_profile_get.php",true);
xhttp.send();

});


$("#edit_profile_form").submit(function(){
var name=$("#edit_name").val();
var password=$("#edit_password").val();

if(name==""||password=="")
  alert("Empty fields!!");
else{

  xhttp= new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState==4 && this.status == 200){
    location.reload();

    }

  };
  xhttp.open("GET","edit_profile_upload.php?name="+name+"&password="+password,true);
  xhttp.send();
}


});


    </script>
</body>
</html>