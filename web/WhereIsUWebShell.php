<!-- You may need to know what is in e2a7106f1cc8bb1e1318df70aa0a3540.php-->
<?php
// index.php
ini_set('display_errors', 'on');
if(!isset($_COOKIE['ctfer'])){
    setcookie("ctfer",serialize("ctfer"),time()+3600);
}else{
    include "function.php";
    echo "I see your Cookie<br>";
    $res = unserialize($_COOKIE['ctfer']);
    if(preg_match('/myclass/i',serialize($res))){
        
        throw new Exception("Error: Class 'myclass' not found ");
    }
}
highlight_file(__FILE__);
echo "<br>";
highlight_file("myclass.php");
echo "<br>";
highlight_file("function.php");
<?php
// myclass.php
class Hello{
    public function __destruct()
    {   if($this->qwb) echo file_get_contents($this->qwb);
    }
}
?>
<?php
// function.php
function __autoload($classname){
    require_once "/var/www/html/$classname.php";
}
?>