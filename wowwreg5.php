

<! DOCTYPE html>
<!--This code will be checking the security of program-->
<!--This code is working till submission of data and storing it in mysql DB -->
<!--But, this code can't check or say promtpt for empty fields -->
<html>
    <head>
        <link type = "text/css" rel = "stylesheet" href = "http:\\localhost:8080\\woww.css"/>

        <title> wow 3.3.5 </title>
        
        <style>
            body
            {
                
                background-attachment: fixed;
            }
        </style>
    </head>
    
    <body background = "http:\\localhost:8080\\1634231.jpg">

        <nav id="nav01"></nav>
        <footer id="foot01"></footer>
    
        
        
        <div id="choice">
            <h2 style="font-style:roman; color:#A385C2; text-align: center">REALM</h2>
            <div class = "content"><a href="https://www.warmane.com/"> Deathwing </a></div>
            <div class = "content"><a href="https://www.warmane.com/"> Lordaeron </a></div>
            <div class = "content"><a href="https://www.warmane.com/"> Ragnaros </a></div>
            <div class = "content"><a href="https://www.warmane.com/"> Frostwolf </a></div>
        </div>
            
            <div id = "mid">
                <div id="mid1">
                    <h3 class="team">Allaince</h3>
                    <p>Warmane is  </p>
                </div>
                
                <div id="mid2">
                    <h3 class="team">Horde</h3>
                    <p>lets see what it is going to be</p>
                
                </div>
                
                <div id="currentnews">
                    
                <h2 id="newstitle"> Realm News </h2>
                    <p class="data">fdsgfdsfsfsfdsfdffffsffdfdfdsfdfgsdggsgsdgdsgdfdsfdsfsdfsdfdf</p>
                    <p class="data">fdsgfdsfsfsfdsfdffffsffdfdfdsfdfgsdggsgsdgdsgdfdsfdsfsdfsdfdf</p>
                    <p class="data">fdsgfdsfsfsfdsfdffffsffdfdfdsfdfgsdggsgsdgdsgdfdsfdsfsdfsdfdf</p>
                    <p class="data">fdsgfdsfsfsfdsfdffffsffdfdfdsfdfgsdggsgsdgdsgdfdsfdsfsdfsdfdf</p>
                    <p class="data">fdsgfdsfsfsfdsfdffffsffdfdfdsfdfgsdggsgsdgdsgdfdsfdsfsdfsdfdf</p>
                    <p class="data">fdsgfdsfsfsfdsfdffffsffdfdfdsfdfgsdggsgsdgdsgdfdsfdsfsdfsdfdf</p>
                    <p class="data">fdsgfdsfsfsfdsfdffffsffdfdfdsfdfgsdggsgsdgdsgdfdsfdsfsdfsdfdf</p>
                   
                    
                </div>    
                
            </div>


  
      


        <div id="userdata">
              <!--This $_SERVER[] is an array which stores the path and name of current script -->  
              <!--This $_SERVER['PHP_SELF'] will give the name of current script -->
              <!--HTML is not about designing, it's more about the right structure -->
              <!--There may be some things which may not look good or required -->
              <!--But, those are very much needed for the security perspective :D :D :D -->
            <form class="wull" method ="POST" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

                <h1>Create Logon</h1>
                <!--This "uname" in label is as per "id" -->
                <!--This "placeholder" is used for displaying message in the Field-->
               <label for="uname"> Username:</label>
                <div class="span3"><input type="text" name="uname" id="uname" placeholder="Enter Username" required="required"/></div>
                <pre></pre>

                <!--This "required" field will prompt on the first unfilled field not on all if all are vacant -->
                <label for="pass">Password:</label>
                <div class="span3"><input type="password" name="pass" id="pass" placeholder="Enter Password" required="required"/></div>
                <pre></pre> 


                <!-- You may want to consider adding a "confirm" password box also -->
                <label for="email">Email:</label>
                <div class="line"><input type="email" name="email" id="email" placeholder="Enter Email" required="required"/></div>
                <pre></pre>


                <label for="name">DOB:</label>
                <div class="line"><input type="text" name="dob" placeholder="Date of Birth" required="required"/></div>
                <pre></pre>
                


                <!-- Valid input types: http://www.w3schools.com/html5/html5_form_input_types.asp -->
                <label for="tele">Telephone:</label>
                <div class="line"><input type="tel" name="tele" id="tele" placeholder="Telephone" required="required"/></div>
                <pre></pre>
                
                <label for="address">Address:</label>
                <div class="line"><input type="text" name="address" id="address" placeholder="Address" required="required"/></div>
                <pre></pre>
                
                <label for="pcode">Postal:</label> 
                <div class="line"><input type="text" name="pcode" id="pcode" placeholder="Postal Code" required="required"/></div>
                <pre></pre>
                

                <div class="line submit"><input type="submit" value="Submit" /></div>
 
                <p>Note: Please make sure your details are correct before submitting form and that all fields marked with * are completed!.</p>
            
          
                   <pre></pre>
  
           
                </form>




            <?php

		if($_SERVER['REQUEST_METHOD'] == "POST")
			{
                error_reporting(E_ALL);

                 $servername = "localhost";
                 $username = "";
                 $password = "";
                 $dbname = "";  /* Delibrately didn't give the details here*/

                   // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);

                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                         }
                      /*   
                      sql to create table
                      $sql = "CREATE TABLE User_reg_info2 (
                      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                      Username VARCHAR(30) NOT NULL,
                      Password VARCHAR(30) NOT NULL,
                      email VARCHAR(50) NOT NULL,
                      DOB VARCHAR(12) NOT NULL,
                      Telephone INT(10) NOT NULL,
                      Address VARCHAR(100) NOT NULL,
                      Postal INT(8) NOT NULL
                      )";

                      if (mysqli_query($conn, $sql)) {
                          echo "Table MyGuests created successfully";
                      }

                       else {
                          echo "Error creating table: " . mysqli_error($conn);
                         }   */

                    
                         function test_input($data) 
                        {
                              $data = trim($data);
                              $data = stripslashes($data);
                              $data = htmlspecialchars($data);
                              return $data;
                            }

                       // We have define the above here only.
                       // If we will define it later then it will throw error.  

                          $name = $pass = $email = $dob = $tele = $address = $pcode ="";
                          $nameErr ="";

                  


                        // $_POST['uname'] will collect the data from field by reference.    
                        if(!empty($_POST['uname']))
                        {
                           $name = test_input($_POST['uname']);

                           if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                                $nameErr = "Only letters and white space allowed"; 
                              }

                         }

                         
                        
                       if(!empty($_POST['pass']))
                       {
                          $pass = test_input($_POST['pass']);
                        }

                       

                        if(!empty($_POST['email']))
                        {
                           $email = test_input($_POST['email']);
                         }
                         

                       if(!empty($_POST['dob']))
                           $dob = test_input($_POST['dob']);
                        


                       if(!empty($_POST['tele']))
                           $tele = test_input($_POST['tele']);
                         


                        if(!empty($_POST['address']))
                           $address = test_input($_POST['address']);
                         


                        if(!empty($_POST['pcode']))
                            $pcode = test_input($_POST['pcode']);
                         


                        // function test_input was here.
        
					$sql="INSERT INTO `user_reg_info1`(`Username`, `Password`, `email`, `DOB`, `Telephone`, `Address`, `Postal`) 
											VALUES ('$name','$pass', '$email', '$dob', '$tele', '$address', '$pcode')";
                    
                    if (mysqli_query($conn, $sql)) 
                    {
                        echo "New record created successfully";
                    } 

                    else
                     {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    mysqli_close($conn);
			}

                    ?>  


          </div>

        <script src="woww.js"></script>


    </body>
</html>
