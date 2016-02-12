<! DOCTYPE html>
<html>
    <head>
        <link type = "text/css" rel = "stylesheet" href = "http:\\localhost:8080\\woww.css"/>
        <title> wow 3.3.5 </title>
        <style> body { background-attachment: fixed }</style>
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
                <div id="mid1"><h3 class="team">Allaince</h3><p>Warmane is  </p></div>
                <div id="mid2"><h3 class="team">Horde</h3><p>lets see what it is going to be</p></div>
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
            <form method ="POST" action ="<?php echo $_SERVER['PHP_SELF']; ?>">

                <h1>Create Logon</h1> <div class="line"><input type="text" name="uname"/></div>
                <pre></pre> <div class="line"><input type="password" name="pass"/></div>
                <pre></pre>
                
                <!-- You may want to consider adding a "confirm" password box also -->
                <div class="line"><input type="email" name="email"/></div><pre></pre>
                <div class="line"><input type="text" name="dob"/></div><pre></pre>
                <!-- Valid input types: http://www.w3schools.com/html5/html5_form_input_types.asp -->
                <div class="line"><input type="text" name="tele"/></div><pre></pre>
                <div class="line"><input type="text" name="address"/></div><pre></pre>
                <div class="line"><input type="text" name="pcode"/></div><pre></pre>
                <div class="line submit"><input type="submit" name="f_submit" value="Submit" /></div>
 
                <p>Note: Please make sure your details are correct before submitting form and that all fields marked with * are completed!.</p>
               <!-- This way we forwarded a page to  other  page on click. --> 
          
            </form>

            <?php

                error_reporting(E_ALL);

                 $servername = "localhost";
                 $username = "root";
                 $password = "secret";  // we have pass in real code
                 $dbname = "userdata";   // we have dbname also in real code

                   // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);

                  // Check connection
                  if (!$conn) {    die("Connection failed: " . mysqli_connect_error());    }

                    /* sql to create table
                      $sql = "CREATE TABLE IF NOT EXISTS User_reg_info (
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
                         } */

                    
                    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['f_submit']) {
                        extract($_POST);
                        
                        if(isset($uname,$pass,$email,$dob,$tele,$address,$pcode)) {
                            
                             $sql = "INSERT INTO User_reg_info1 (Username, Password, email, DOB, Telephone, Address, Postal)
                                        VALUE ('$name', '$pass', '$email', '$dob', '$tele', '$address', '$pcode')";
                                        
                            if (mysqli_query($conn, $sql)) {
                                echo "New record created successfully";
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                        
                        } else {
                            echo 'fields are empty.';
                        } 
                    }        

                    

                    

                    mysqli_close($conn);

                    ?>  


          </div>

        <script src="woww.js"></script>


    </body>
</html>

<! If username and password will not match in the mysql form will not appear.>