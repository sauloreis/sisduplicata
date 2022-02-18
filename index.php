<?php
getUrl();

function getUrl(){
    $url = isset($_GET['url'])?$_GET['url']:'';
    if($url !=''){
        if($url =='admin'){
            pageAdmin($url);
        }else{
            page($url);
        }
    }else{
        $url = 'login.php';
        include($url); 
    }
  
}

function pageAdmin($url){
    
        if (file_exists('admin/'.$url.'.php')) {
            
            include('admin/'.$url . '.php');
    
        } else{
           
            include('404.php');
        }
   
}
function page($url){
    if (file_exists($url.'.php')) {
      
        include($url . '.php');

    } else{
       
        include('404.php');
    }
}
  
    
    

