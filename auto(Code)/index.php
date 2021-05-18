<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Registration form</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700" />
  <!--<link rel="stylesheet" href="assets/css/Contact-Form-Clean.css" />-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css" />
</head>

<body>
  <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
    <div class="container">
      <h2 class="text-center">Testimonial validation form</h2>
    </div>
  </nav>
  <main class="page lanidng-page"></main>
  <form action="connect.php" method="POST">
    <div class="table-responsive d-table" style="margin-top: 35px">
      <table class="table">
        <thead>
          <tr>
            <th>Name<br /></th>
            <th>
              <input class="d-table-cell" type="text" data-toggle="tooltip" data-bs-tooltip="" name="name" placeholder="Your Name" required="" title="Name" />
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Email<br /></td>
            <td>
              <input class="d-table" type="email" data-toggle="tooltip" data-bs-tooltip="" name="email" placeholder="Email-Eg:xyz@gmail.com" required="" title="Enter email" />
            </td>
          </tr>
          <tr>
            <td>Phone Number</td>
            <td>
              <input type="tel" data-toggle="tooltip" data-bs-tooltip="" name="pnum" placeholder="Phone Number" required="" title="Phone Number" />
            </td>
          </tr>
          <tr>
            <td>Address&nbsp;</td>
            <td>
              <textarea data-toggle="tooltip" data-bs-tooltip="" name="addr" placeholder="Address" required="" title="Address "></textarea>
            </td>
          </tr>
          <tr>
            <td>House Number</td>
            <td>
              <input type="number" data-toggle="tooltip" data-bs-tooltip="" name="hnum" placeholder="House Number" required="" title="House Number" />
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div  style="padding-left:10px" class="row">
      <div class="col">
        <input type="submit" style="margin-bottom:50px;">          
      </div>
    </div>
  </form>
  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/bs-init.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
  <script src="assets/js/theme.js"></script>


  <!-- ****************************************************** -->
  <!-- Code for displaying table -->
  <link rel='stylesheet' type='text/css' href='style.css' />
  <?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM info3 ORDER BY id DESC");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Name</td>
    <td>Email</td>
    <td>Phone Number</td>
    <td>Address</td>
	<td>House Number</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["pnum"]; ?></td>
    <td><?php echo $row["addr"]; ?></td>
	<td><?php echo $row["hnum"]; ?></td>

</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>

  
    <!-- ****************************************************** -->

  </body>
</html>

