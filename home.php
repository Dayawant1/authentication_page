<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
   
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<HTML>
<HEAD>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <link rel = "stylesheet" href = "main.css">
<TITLE>Welcome</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
    body{
        background-image:url("./assets/bg.jpg");
        background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover; 
    }
    .daya{
        text-align: center;
        color: Yellow;
    }

</style>
</HEAD>
<BODY>
    
            <div>
                <h1><p class="daya"> WELCOME TO YOU </p></h1>
                <span class="login-signup btn btn-warning"><a href="logout.php" style="color:white">Logout</a></span>
               
                
            </div>
             
        
            <div class = "search-element">
                
                <span class="Search-movie btn btn-warning"><a href="home.php" style="color:white">HOME PAGE</a></span>
               
                <div class = "search-list" id = "search-list">
                    
                </div>
            </div>
        </div>
        


         <div class = "container">
            <div class = "result-container">
                <div class = "result-grid" id = "result-grid">



                
                   
                </div>
            </div>
        </div>
        
    </div>


    
     <script src = "script.js"></script>
		
  
</BODY>
</HTML>
