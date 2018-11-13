<?php
   // require('store.php');
	session_start();
    $rv1a=$rv1b=$rv1c=$rv2a=$rv2b=$rv2c=$rv3a=$rv3b=$rv3c=$rv4a=$rv4b=$rv4c=$teamid=$projectguide='';
    $count=0;
     $db = mysqli_connect('localhost', 'root', '', 'statusofproject');
    
            if (!$db) {
            die("failed: " . mysqli_connect_error());
            }
            else{
                echo 'connected';
            }


	if(isset($_POST['maproject']))
    {
   				if(isset($_POST['rv1a'])){
                    $rv1a=$_POST['rv1a'];
                    }    
                if(isset($_POST['rv1b'])){
                    $rv1b=$_POST['rv1b'];
                    }    
                    if(isset($_POST['rv1c'])){
                    $rv1c=$_POST['rv1c'];
                    }    
                    if(isset($_POST['rv2a'])){
                    $rv2a=$_POST['rv2a'];
                    }    
                    if(isset($_POST['rv2b'])){
                    $rv2b=$_POST['rv2b'];
                    }    
                    if(isset($_POST['rv2c'])){
                    $rv2c=$_POST['rv2c'];
                    }    
                    if(isset($_POST['rv3a'])){
                    $rv3a=$_POST['rv3a'];
                    }    
                    if(isset($_POST['rv3b'])){
                    $rv3b=$_POST['rv3b'];
                    }    
                    if(isset($_POST['rv3c'])){
                    $rv3c=$_POST['rv3c'];
                    }    
                    if(isset($_POST['rv4a'])){
                    $rv4a=$_POST['rv4a'];
                    }    
                    if(isset($_POST['rv4b'])){
                    $rv4b=$_POST['rv4b'];
                    }    
                    if(isset($_POST['rv4c'])){
                    $rv4c=$_POST['rv4c'];
                    }                
                $teamid=$_SESSION['teamid'];
                $projectguide=$_SESSION['projectguide'];


               /* echo $rv1a;
                 echo $rv1b;
                 echo $rv1c;
               echo $rv2a;
                echo $rv2b;
                 echo $rv2c;
                  echo $rv3a;
                 echo $rv3b;
                 echo $rv3c;
                 echo $rv4a;
                echo $rv4b;
                echo $rv4c;*/

                //$teamid=$_POST['rv1a'];
                //$projectguide=$_POST['rv2c'];
               //||$rv1a=''||$rv1b=''||$rv1c=''||$rv2a=''||$rv2b=''||$rv2c=''||$rv3a=''||$rv3b=''||$rv3c=''||$rv4a=''||$rv4b=''||$rv4c=''
                if($rv1a!=''|| $rv1b!='' || $rv1c!=''||$rv2a!=''|| $rv2b!=''|| $rv2c!=''||$rv3a!=''||$rv3b!=''||$rv3c!=''||$rv4a!=''||$rv4b!=''||$rv4c!='' || $rv1a==''){
                     if($rv1a){
                    $count=$count+10;
                }
                if($rv1b){
                    $count=$count+10;
                }
                if($rv1c){
                    $count=$count+10;
                }
                if($rv2a){
                    $count=$count+10;
                }
                if($rv2b){
                    $count=$count+10;
                }
                if($rv2c){
                    $count=$count+10;
                }
                if($rv3a){
                    $count=$count+10;
                }
                if($rv3b){
                    $count=$count+10;
                }
                if($rv3c){
                    $count=$count+10;
                }
                if($rv4a){
                    $count=$count+10;
                }
                if($rv4b){
                    $count=$count+10;
                }
                if($rv4c){
                    $count=$count+10;
                }
          /*  else{
                die("countfailed: " . mysqli_connect_error());   
            }*/

            $qu="SELECT * FROM majorproject WHERE teamid='".$teamid."' ";  
            $re=mysqli_query($db,$qu);

            $numrows=mysqli_num_rows($re);  

        if($numrows==1)  
        {  
            $que = "UPDATE majorproject set
rv1a='$rv1a',rv1b='$rv1b',rv1c='$rv1c',rv2a='$rv2a',rv2b='$rv2b',rv2c='$rv2c',rv3a='$rv3a',rv3b='$rv3b',rv3c='$rv3c',rv4a='$rv4a',rv4b='$rv4b',rv4c='$rv4c',count='$count' where teamid='$teamid'";
        $res=mysqli_query($db,$que);
            if($res){
                header("Location:index.html");
            }

    }
    else{

           $query= "INSERT INTO majorproject(teamid,projectguide,rv1a,rv1b,rv1c,rv2a,rv2b,rv2c,rv3a,rv3b,rv3c,rv4a,rv4b,rv4c,count) VALUES('$teamid','$projectguide','$rv1a','$rv1b','$rv1c','$rv2a','$rv2b','$rv2c','$rv3a','$rv3b','$rv3c','$rv4a','$rv4b','$rv4c','$count')";
        $result=mysqli_query($db,$query);
        if($result){
        //echo 'succesful';
        //$_SESSION['sucess']="done";
        header("Location: index.html");
        }
        else{
            echo "fail" .mysqli_error($db);
            //array_push($errors, "Wrong username/password combination");

        }
    }
    }
}

    else{
                    echo '';
         die("1failed: " . mysqli_connect_error());   
    }
    
   
        mysqli_close($db);
?>