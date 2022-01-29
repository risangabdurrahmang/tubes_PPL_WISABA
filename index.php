<?php 

include "admin/fungsi.php";
include "inc_header.php";

        if(isset($_GET['halaman'])){
            $halaman = $_GET['halaman'];
 
            switch ($halaman) {
                case 'home':
                  include "home.php";
                  break;
                case 'about':
                  include "about.php";
                  break;
                case 'tour':
                  include "tour.php";
                  break;
                case 'view':
                  include "view.php";
                  break;
                case 'details':
                  include "details.php";
                  break;
                case 'contact':
                  include "contact.php";
                  break;
                default:
                  include "home.php";
                  break;
            }
        }

include "inc_footer.php";
?>