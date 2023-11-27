
<header  class="navbar" style="background-color: #e3f2fd;">
       <div class="he"><img src="images/R1.png" height="50px" ><h1>My Pharmacy</h1></div>
        <a href="add_medication.php" class="home">HOME</a>
        <a href="viewallmed.php?phid=<?php $_SESSION['id'] ?>"  class="myord">View Orders  <i class='fas fa-bell' style='font-size:20px'><?php echo $_SESSION['order']  ?></i></a>
        <a href="mymed.php?phid=<?php  $_SESSION['id'] ?>" class="mymed"> My Medicines </a>
        <a href="Pharmacist.php?logout=logout">LogOut</a>
    </header>
