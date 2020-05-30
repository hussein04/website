<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php  
        session_start();
        $servername = "localhost";
        try {
            $usernameDB = "usernameDB"; 
            $passwordDB ="passwordDB"; 
            $conn = new PDO("mysql:host=$servername;dbname=dbname",trim($usernameDB),trim($passwordDB));
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //Inserting a record
            $sql = "Insert into techtouchClients (fname,lname,companyName,email,phoneNumber,address,city,state,zipCode,comment) values ";
            $sql.= "('".$_POST['fName']."',";
            $sql.= "'".$_POST['lName']."',";
            $sql.= "'".$_POST['companyName']."',";
            $sql.= "'".$_POST['email']."',";
            $sql.= "'".$_POST['phoneNumber']."',";
            $sql.= "'".$_POST['inputAddress']." ".$_POST['inputAddress2']."',";
            $sql.= "'".$_POST['city']."',";
            $sql.= "'".$_POST['state']."',";
            $sql.= "'".$_POST['zipCode']."',";  
            $sql.= "'".$_POST['comment']."')";

            $conn->exec($sql);

            $stmt = $conn->prepare("SELECT id FROM techtouchClients 
                    where email ='".$_POST['email']."'");
            $stmt->execute();
            $flag = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result= $stmt->fetchColumn();


            //Inserting a record
            $sql2 = "Insert into techtouchClientSubscription (clientId,serviceId) values ";
            $sql2.= "($result,"; 
            $sql2.= "'".$_POST['serviceArea']."')";
            $conn->exec($sql2);


            if ($conn) {
                $mail_to = 'email@gmail.com';
                $subject = 'Message from techtouch Visitor ';
                $body_message = 'New Request';
                mail($mail_to, $subject, $body_message);
                ?>
        <script language="javascript" type="text/javascript">
            alert('Thank you for the Request. We will contact you shortly.');
            history.back(1);
            
        </script>
        <?php
            }
            else { ?>
        <script language="javascript" type="text/javascript">
            alert('Request failed. Please, fill out the form again.');
            history.back(1);
        </script>
        <?php
            }
            $conn = null;
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        } 
        ?>
    </body>
</html>