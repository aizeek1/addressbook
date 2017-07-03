<!DOCTYPE html>
<!-- HTML5 Hello world by kirupa - http://www.kirupa.com/html5/getting_your_feet_wet_html5_pg1.htm -->
<html lang="en-us">

<head>
     <link rel="shortcut icon" href ="/jn1.png"/>
    <title> JN Address Book |</title>
        <!-- Bootstrap -->
    <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
       <link href="/main.css" rel="stylesheet">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
      <script src="/hideshow.js"></script>

       
       
       
<div class="heading"><h1 align="center">   <img src="/jn.png" style="float:left"/>  JN Address Book </h1></div>
    
</head>
<body>
    <div style="float:right">
   <form class="navbar-form navbar-left" role="search" > 
 
  <div class="form-group" >
    <input  type="search" class="form-control input-sm"  name="doSearch" placeholder="Search" aria-controls="example">
  <button id= "hide" type="submit" name="submit" class="btn btn-primary"   onclick="doSomething1();">Search</button></div>
    <button id="show" type="submit" name="submit" class="btn btn-default" onclick="doSomething();">Home</button></div>
</form></div>
<div class="dataTables_length" id="example_length" align="center" ><label style="display:inline">Show <select style="display:inline;    width: 75px;" name="select_catalog" aria-controls="example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div> 

     
          <?php include 'somepage.php';?>
     <?php include 'somepage1.php';?>
      <script type="text/javascript">
function doSomething() {
    $.get("somepage.php");
    return false;
}
    function doSomething1() {
    $.get("somepage1.php");
    return false;
    
}

</script>
  
</body>
</html>
