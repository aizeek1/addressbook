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
      <div><a href ="/Account.html">Account</a></div>
   <form class="navbar-form navbar-left" role="search" > 
 
  <div class="form-group" >
    <input  type="search" class="form-control input-sm"  name="doSearch" placeholder="Search" aria-controls="example">
  <button id= "hide" type="submit" name="submit" class="btn btn-primary"   onclick="doSomething1();">Search</button>
  </div>
</form></div>
  <!-- <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Branch</th>
        <th>Department</th>
        <th>Extension</th>
        <th>Manager</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>Duke Street</td>
        <td></td>
        <td>3478</td>
        <td>Mark Brown</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
          <td>HWT</td>
        <td>IT</td>
        <td>3442</td>
        <td><a href = "#test">Mark Phillips</a></td>
      </tr>
      <tr>
        <td>Lindsey</td>
        <td>McIntosh</td>
          <td>Montego Bay</td>
        <td>Marketing</td>
        <td>4273</td>
        <td>Mark Phillips</td>
      </tr>
      <tr>
        <td>Joseph</td>
        <td>Stalin</td>
          <td>Cross Roads</td>
        <td>IT</td>
        <td>2349</td>
        <td>Mark Phillips</td>
      </tr>
      <tr>
        <td>Kristoff</td>
        <td>Harrison</td>
          <td>HWT</td>
        <td>Human Resources</td>
        <td>8761</td>
        <td>Mark Phillips</td>
      </tr>
       <tr>
        <td>Sasha</td>
        <td>Fierce</td>
          <td>Cross Roads</td>
        <td>IT</td>
        <td>9372</td>
        <td>Mark Phillips</td>
      </tr>
      <tr>
        <td>Thomas</td>
        <td>Jefferson</td>
          <td>HWT</td>
        <td>Human Resources</td>
        <td>3217</td>
        <td>Mark Brown</td>
      </tr>
       <tr>
        <td>Catherine</td>
        <td>Smith</td>
          <td>HWT</td>
        <td>Marketing</td>
        <td>6342</td>
        <td>Mark Phillips</td>
      </tr>
      <tr>
        <td>Jody-Ann</td>
        <td>Samuels</td>
          <td>HWT</td>
        <td>Human Resources</td>
        <td>8761</td>
        <td>Mark Phillips</td>
      </tr>
       <tr>
        <td>Veronica</td>
        <td>Mars</td>
          <td>Cross Roads</td>
        <td>IT</td>
        <td>6370</td>
        <td>Mark Phillips</td>
      </tr>
      <tr>
        <td>Zack</td>
        <td>Effron</td>
          <td>HWT</td>
        <td>Human Resources</td>
        <td>9023</td>
        <td>Mark Phillips</td>
      </tr>
       <tr>
        <td>Helen</td>
        <td>Parker</td>
          <td>Cross Roads</td>
        <td>IT</td>
        <td>8648</td>
        <td>Mark Phillips</td>
      </tr>
      <tr>
        <td>William</td>
        <td>Richards</td>
          <td>HWT</td>
        <td>Human Resources</td>
        <td>3873</td>
        <td>Mark Phillips</td>
      </tr>
      <tr>
        <td><a name ="test">Mark</a></td>
        <td>Phillips</td>
          <td>HWT</td>
        <td>IT</td>
        <td>5562</td>
        <td>Francesca Martin</td>
      </tr>
    </tbody>
  </table> -->
<div class="dataTables_length" id="example_length" align="center" ><label style="display:inline">Show <select style="display:inline;    width: 75px;" name="select_catalog" aria-controls="example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div> 

     
          <?php include 'somepage.php'; ?>
   
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
    <?php  include 'somepage1.php';  ?>
</body>
</html>
