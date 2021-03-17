<?php 
  $list = array(
    "Tokyo"          =>  "Japan" ,
    "Mexico-City"    =>  "Mexico"  ,
    "New-York-City"  =>    "USA",
    "Mumbai"         =>   "India",
    "Seoul"          =>    "Korea",
    "Shanghai"       =>    "China",
    "Lagos"          =>   "Nigeria" ,
    "Buenos-Aires"   =>    "Argentina",
    "Cairo"          =>    "Egypt",
    "London"         =>    "UK" 
);
$value ;
$class = '';
if($_SERVER["REQUEST_METHOD"] == 'POST'){
  $select =$_POST['select'];
  $class = 'res';
  $str = '';
  if(!empty($select)){
    foreach($list as $key => $val){
      if(strtoupper($select) == strtoupper($key)){
         $GLOBALS['value'] = $val;
         $str = ucfirst($select) . ' is in <span>'.$value.'</span>';
          break;
      }else{
        $str = 'I Can\'t Found It Pleas Try Agin';
        
      }
  }
}else{
  $str= 'Please Enter Value';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Map Project</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/all.min.css">
    
    <!-- [if lt IE 9]>-- if internt explor version less than 9 defint Html5>
    <script src="html5shiv.min.js"></script>
    
    <! [end if]-->
</head>
<body>
   <div class="whole">
   <div class="overlay">  
         <div class="container">
            <h1>In Which country a city is located?</h1>
            <h2>Please choose a city</h2>
            <form action="index.php" method="post">
                <input list="city" name="select"  placeholder="Select City">
                <datalist id="city" >
                   <?php 
                   foreach($list as $key => $val){
                     echo  "<option value= $key >";
                   }
                   ?>
                </datalist>
                <button type="submit">Go</button>
            </form>
            <div class=<?php echo $class ?>><?php echo @$str; ?></div>
        </div>  
      </div>
</div>
     
	<Script src="js/jquery-3.5.1.min.js"></Script>
    <script src="js/all.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
