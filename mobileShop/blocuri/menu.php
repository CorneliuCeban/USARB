<?php 
      //  echo "continut menu";
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="index.php">Cornel Shop</a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="telefoane.php" class="nav-link">Telefoane</a></li>
                <li class="nav-item"><a href="gadgets.php" class="nav-link">Gadget</a></li>
                <li class="nav-item"><a href="laptops.php" class="nav-link">Laptopuri</a></li>
                <li class="nav-item"><a href="project.php" class="nav-link">Despre Noi</a></li>
                
                
                <?php
				if (! empty( $_SESSION['user_id'] ) ) {
					if ($_SESSION['user_id'] == 1 ) {?>
						<li class="nav-item"><a href="adauga.php" class="nav-link">Adauga</a></li>
					
					<?php
					}		
				}?>

                
                
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
               
               <?php 
				if ( empty( $_SESSION['user_id'] ) ) {
				   include('blocuri/logreg.html');
				}
				else{
                    echo "<div class='welcome'>salut ".$_SESSION['user_login']."</div>";
                    if (! empty( $_SESSION['user_id'] ) ) {
                        if ($_SESSION['user_id'] != 1 ) {?>
                            <button class='cos btn'><img class="icon" src="icons/cart-icon-png-white-16.jpg"></button>
                        <?php
                        }		
                    }
                    ?>   
					<form class="form" role="form" action="index.php?com=logout" method="post">
                      <input id="logout" name="logout" value="logout" class="form-control form-control-sm" type="hidden">
                       <button type="submit" class="btn btn-primary btn-block">Logout</button> 
                    </form>
				<?php } ?>
				
			   
               
               
            </ul>
        </div>
    </div>
</nav>

<div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Cont nou</h3>
                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Form pentru inregistrare</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Inchide</button>
                <button class="btn btn-primary">Confirma</button>
            </div>
        </div>
    </div>
</div>