<?php
    session_start();
    $dbusername=$dbpassword=$type=$error=$ad=$pd="";
     $db = mysqli_connect('localhost', 'root', '', 'statusofproject');
    
            if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
            }
            else{
               /* echo 'connected';*/
            }

     if(isset($_POST["btn"])){  
      
    if(!empty($_POST['TeamId']) && !empty($_POST['password'])) {  
        $user=$_POST['TeamId'];  
        $pass=$_POST['password']; 
        $_SESSION['teamid']=$user;      
        $query="SELECT * FROM registerpages WHERE TeamId='".$user."' AND password='".$pass."'";  
        $result=mysqli_query($db,$query) or die(mysqli_error());
        $numrows=mysqli_num_rows($result);  

        if($numrows==1)  
        {  
        /*while($row=mysqli_fetch_assoc($query))  
        {  
        $dbusername=$row['TeamId'];  
        $dbpassword=$row['password'];  
        }  
        if($user == $dbusername && $pass == $dbpassword)  
        { 

            echo 'login sucess';
         
        header("Location: member.php");  
        }*/
        while($row=mysqli_fetch_array($result)){
            $type=$row['projecttype'];
            $ad=$row['teamid'];
            $pd=$row['password'];
            $_SESSION['projectguide']=$row['projectguide'];
        if($ad=="admin" && $pd="admin"){
            header("Location: teacherpage.php");
        }
        else{
         if($type=="mini"){
            header("Location: MiniProject.html");
         }
        else{
        header("Location: MajorProject.html");
        }
    }
}
    }
    else {    
   header("Location: index.html");
    }
        
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
 
?>  