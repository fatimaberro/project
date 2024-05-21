<?php 
$sName = "localhost";//it holds the server name or IP address where the database is hosted.
$nName ="root";//this variable stores the username used to connect the databse, root is the default username. 
$pass= "";// variable password holds the password of the mysql, where there is no password required.
$db_name= "login-register";//this variable contains the name of the database that the script intends to connect to.

try{  //The code is wrapped in a try-catch block.
    //This structure allows you to execute code that might throw exceptions, and catch and handle those exceptions if they occur.
    $conn=new PDO("mysql:host=$sName;dbname=$db_name",$nName, $pass);//inside the try block, it attemps to create a new PDO ebject represention the database connection. The new PDO() function takes sevral parameters: we talked about them before.
    $conn->setAttribute(PDO::ATTR_ERRMODE, pdo:: ERRMODE_EXCEPTION);//After establishing the conection, it sets the error handling mode for the PDO object using 'setAttribute()' in this case it sets the error mode to 'PDO::ERRMODE_EXCEPTION', which means that PDO will throw exceptions if errors occur.
    ECHO"CONNECTED!";
}
catch(PDOException $e){//if an exception is thrown during the try block ecample: connection fails, the catch block catches the esception, 'PDOException'specifically, which is the type of exception thrown by PDO.Inside the catch block, it echoes a message indication that the connection failed along with the error m eassage obtained from the exception($e->getMessage()).
    echo"Connection Failed:".$e->getMessage();


}


?>