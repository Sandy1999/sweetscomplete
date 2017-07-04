<?php
require_once('includes/arrays.php');
 $maxproducts = count($products);
 $page = isset($_GET['page']) ? (int)$_GET['page']:0;
 $prev = ($page==0)?0:$page-1;
 $next = $page+1;
class view{
 public function print_products($page,$maxproducts){
    $offset = $page*6;
    global $products;
    $output = "<ul>";
    for($x = 0; $x < 6; $x++){
        if($x+$offset>=$maxproducts){
        break;
    }
        $output.="<li>";
        $output.="<div class = \"image\">";
        $output.="<a href  = \"details.php\">";
        $output.="<img src =\"images/".$products[$x+$offset]['link'].".scale_20.JPG\" alt =".$products[$x+$offset]['title']."width=\"190\" height =\"130\">";
        $output.="</a>";
        $output.="</div>";
        $output.="<div class=\"detail\">";
        $output.="<p class=\"name\"><a href=\"detail.php\">".$products[$x+$offset]['title']."</a></p>";
        $output.="<p class=\"view\"><a href=\"detail.php\">purchase</a> | <a href=\"detail.php\">view details >></a></p>";
        $output.="</div>";
        $output.="</li>";
    }
    $output.="</ul>";
    $output.="</div>";
    return $output;
}
}
?>