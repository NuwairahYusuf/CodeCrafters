<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>CodeCrafters</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="w3-pale-red w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-pale-yellow w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/logo1.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>CodeCrafters</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-light-blue"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Home</a> 
	<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
	<a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
	<a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a>
    <a href="#activities" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITIES</a> 	
    <a href="#achievements" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENTS</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
	<a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-light-blue"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Administrator</a> 
  </div>
  <div class="w3-panel w3-large">
    
	<img src="photo/fb.png" style="width:10%;" class="w3-round">
	<img src="photo/ig.png" style="width:11%;" class="w3-round">
	<img src="photo/twitter.png" style="width:10%;" class="w3-round">
	<img src="photo/in.png" style="width:10%;" class="w3-round">
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <div class="w3-panel w3-pink w3-center">
    <h1 class="w3-opacity w3-serif">
    <b>Welcome to CodeCrafters</b></h1>
    </div>
   

  <!-- Images of Header -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <p align="center"><img src="photo/header.png" alt="Header" style="width:204%"></p>
    </div>
    

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <p class="w3-center">The CodeCrafters Club is a community of individuals passionate about coding, software development, and technology. It serves as a platform for enthusiasts, professionals, and learners to come together to share knowledge, collaborate on projects, and foster a culture of continuous learning and growth in the field of computer science.</p>
    <hr>
    
  <!-- Header -->
  <header id="committee">
  
	<h4><b><p class="w3-center">CodeCrafters Club Committees</p></b></h4>
    <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="photo/nuy.jpeg" alt="nuy" style="width:100%">
      <h3>Nuwairah Yusuf</h3>
      <p class="w3-opacity">President</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="photo/syahmi.jpeg" alt="syahmi" style="width:100%">
	        <h3>Syahmi Zufayri</h3>
      <p class="w3-opacity">Vice President</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="photo/bella.jpg" alt="bella" style="width:100%">
      <h3>Nabila Razali</h3>
      <p class="w3-opacity">Secretary</p>
       <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="photo/sha.jpg" alt="sha" style="width:100%">
      <h3>Shairah Atiqah</h3>
      <p class="w3-opacity">Treasurer</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
  </div>
  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="photo/leen.jpeg" alt="leen" style="width:100%">
      <h3>Shazleen Izzati</h3>
      <p class="w3-opacity">Program Manager</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="photo/reen.jpeg" alt="reen" style="width:100%">
	        <h3>Siti Hazarina</h3>
      <p class="w3-opacity">Communication Exco</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="photo/ainun1.jpeg" alt="ainun" style="width:100%">
      <h3>Ainun Najwa</h3>
      <p class="w3-opacity">Record & Documentation Exco</p>
       <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="photo/una.jpeg" alt="una" style="width:100%">
      <h3>Bahiyyah Husna</h3>
      <p class="w3-opacity">Multimedia Exco</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
  </div>
  <hr>
</div>

    <h4><b><p class="w3-center">CodeCrafters Club Membership</p></b></h4>
    <!-- Progress bars / Skills -->
     <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
	
	
	
	
   <!-- Header -->
   <header id="membership">
	<p align="center"><h3>Membership Form for CodeCrafters Club 2024</h3></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
		  <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td> 
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td>
               <a href="edit_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
    <hr>
    
  
  
  <!-- Activities Section -->
  <header id="activities">
    <h4><b><p class="w3-center">CodeCrafters Club Activities</p></b></h4>
    <div class="w3-row-padding">
    <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  <p align="center"><h3>Activities Form for CodeCrafters</h3></p>
    <a href="add_activity.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM activity";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
            <td>
              <a href="edit_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
	<hr>
  </div>
  
  
  
  <!-- Achievements Section -->
  <header id="achievements">
    <div class="w3-row-padding">
    <h4><b><p class="w3-center">CodeCrafters Club Achievements</p></b></h4>

<br>

    <div class="w3-container">
    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-border" src="photo/acm.jpg" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>ACM International Collegiate Programming Contest (ICPC) Certificate<span class="w3-opacity w3-medium">2021</span></h4>
        <p>Awarded to the members of CodeCrafters that won the third place in ICPC</p><br>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-border" src="photo/cwg.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Code Warriors Game Challenge Certificate<span class="w3-opacity w3-medium">2022</span></h4>
        <p>Awarded to the members of CodeCrafters that won the second place in CWG</p><br>
      </div>
    </div>
	
	<div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-border" src="photo/mips.jpeg" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Malaysian Computing Olympiad (MCO) Certificate<span class="w3-opacity w3-medium">2022</span></h4>
        <p>Awarded to the members of CodeCrafters that won the second place in MCO</p><br>
      </div>
    </div>
	
	<div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-border" src="photo/hitn.jpeg" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Hack In The North (HITN) Certificate<span class="w3-opacity w3-medium">2023</span></h4>
        <p>Awarded to the members of CodeCrafters that participated in HITN</p><br>
      </div>
    </div>
	
	<hr>
    </div>
	
	
	
  <!-- Contact Section -->
  <header id="contact">
  <div class="w3-container w3-padding-large w3-sand">
    <h4 id="contact"><b>Contact Me</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-pale-red">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>nuwairahmyus02@gmail</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Selangor, Malaysia</p>
      </div>
      <div class="w3-third w3-pale-red">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>011-23396514</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>

  
    </div>
  </footer>
  
  
  
  <!-- Header -->
  <header id="contact">
  <!-- Contact Section -->

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>CodeCrafters Club Contacts</title>

<body>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
	
	<hr>

  <p align="center"><h3>Contact Form for CodeCrafters Club</h3></p>
    <a href="add_contact.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Student ID</th>
          <th scope="col">Description</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM contact";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
   
            <td>
              <a href="edit_contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <hr>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-black w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
