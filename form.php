<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
    <style>
            .home
            {
                text-align: center;
 
            }
            .image{
                flex:1 1 40rem;
            }
            .image img
            {
                width:30%;
                padding:1rem;
                animation:float 3s linear infinite;
            }
            @keyframes float
            {
                0%, 100%
                {
                    transform: translateY(0rem);
                }
                50%
                {
                    transform: translateY(3rem);
                }
            }
            h1{
                text-align: center;
                font-family: Garamond,serif;
                
            }
            body
            {
                background-image: url('images/home-bg.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;  
                background-size: cover;
            }
            input[type=submit]
            {
                background-color: #be994e;
                border: none;
                color: #fff;
                padding: 15px 30px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 12px;
            }
            input[type=button]
            {
                background-color:rgb(194, 160, 212);
                border: none;
                color:white;
                padding: 15px 30px;
                text-decoration:wavy;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 12px;
            }
            .button1
            {
                border-radius: 12px;
            }

        </style>
</head>

<body>
	<center>
	<?php
    $host='localhost';
    $username='root';
    $password='';
    $dbname = 'food';
    $conn2=mysqli_connect($host,$username,$password,$dbname);
	
		if($conn2 === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
        $foodName = $_REQUEST['foodName'];
		$address = $_REQUEST['address'];

		$sql = "INSERT INTO details VALUES ('$name','$email','$phone','$foodName','$address')";
		
	if(mysqli_query($conn2, $sql)){

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn2);

		}

		mysqli_close($conn2);
		?>
	</center>
    <section class="home">
        <div class="share">
            
            <div class="image">
                <img src="images/s-img-1.jpg" alt="">
            </div><br><br><br>

            <a href="#" ><input type="button" value="ORDER RECIEVED"></a><br><br><br>
            <a href="index.php" target="_self"><input type="submit" value="CLICK HERE TO GO BACK"></a>
        </div>
    </section>
</body>

</html>
