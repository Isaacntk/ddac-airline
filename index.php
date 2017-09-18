<?php require_once (__DIR__.'/controller/init.php');?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Head -->
        <?php 
            $page = Param::get('page'); 
            require_once (__DIR__.'/view/head.php'); 
        ?>
	</head>
	
	<body>
		<!-- Navigation -->
		<?php require_once (__DIR__.'/view/nav.php'); ?>
		
		<!-- Page -->
		<?php
            //Get page
            if (Param::get('page')) {
                if(file_exists(__DIR__.'/view/pages/'.Param::get('page').'.php')){
                    require_once(__DIR__.'/view/pages/'.Param::get('page').'.php');
                }
                else {
                    header('Location: error404');
                    exit();
                }
            }
            else {
                header('Location: '.Config::get('home'));
                exit();
            }
		?>
        
        <!-- Footer -->
        <?php require_once(__DIR__.'/view/footer.php'); ?>
	</body>
</html>