
<?php include('dbcon.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Airline Reservation System</title>

  <link rel="stylesheet" href="http://localhost/airline/css/bootstrap.min.css">
  


</head>
<body>






 <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <a class="navbar-brand" href="http://localhost/airline/">
    <img src="http://localhost/airline/img/cooltext320905888989622.png" alt="Nsu Airline Reservation">
  </a>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
       <a class="nav-link" href="http://localhost/airline/">Home <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="http://localhost/airline/registrition/registrition.php">Passenger</a>
     </li>
     <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Dropdown
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="#">Action</a>
         <a class="dropdown-item" href="#">Another action</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="#">Something else here</a>
       </div>
     </li>
     <li class="nav-item">
       <a class="nav-link disabled" href="http://localhost/airline/login/login.php">Agents</a>
     </li>
   </ul>
   <form class="form-inline my-2 my-lg-0">
     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
   </form>
 </div>
</nav>

<br />
<br />







<div class="list-group-item active"><center>Agent Sells Ticket</center></div>

<form action="TicketInsert.php" method="post">

<div class="form-group">
 Ticket Price :
   <input type="text" class="form-control"  name="Ticket_id">
</div>

    <div class="form-group">
  Ticket_Price : <input type="text" class="form-control"  name="Ticket_Price">
  </div>


  <div class="form-group">
   Passport_no : <input type="text" class="form-control"  name="Passport_no">
   </div>


   <div class="form-group">
   Flight_id : <input type="text" class="form-control"  name="Flight_id">
   </div>

   <div class="form-group">
   Agent_M :<input type="text" class="form-control"  name="Agent_M">
    </div>
   
             <input type="submit" class="btn btn-primary" value="Insert">
  


</form>




















<div class="bg-dark  text-light">
<p><center><font size="5">Nsu Airline Reservation</font></center></p>
  </div>


  

  <scrpt src="http://localhost/airline/js/bootstrap.min.js"></scrpt>


</body>
</html>