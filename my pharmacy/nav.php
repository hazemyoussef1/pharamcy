
<header class="navbar" style="background-color: #e3f2fd;">
       <div class="he"><img src="images/R1.png" height="50px" ><h1>My Pharmacy</h1></div>
        <a href="search_medication.php" class="home">HOME</a>
        <a href="myorder.php?<?php echo $_SESSION['idcu'] ?>" class="myord" >My Orders</a>

        <a href="mypage.php?<?php echo $_SESSION['idcu'] ?>" class="myinfo" >My Info</a>
        <a href="index.php?logout=logout">LogOut</a>
       
    </header>
