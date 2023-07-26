<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Register form</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap');

*{
	font-family: 'poppins' sans-serif;
	margin:0; padding: 0;
	box-sizing: border-box;
	outline: none; border: none;
	text-decoration: none;
}
.container{
	min-height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	padding: 20px;
	padding-bottom: 60px;
}
.container .content{
	text-align: center;
}
.container .content h3{
	font-size: 30px;
	color: #333;
}
.container .content h3 span{
	background: #fc6f41;
	color: #ffff;
	border-radius: 5px;
	padding: 0 15px;
}
.container .content h1{
	font-size: 50px;
	color: #333;
}
.container .content h1 span{
	color:  #fc6f41;

}
.container .content p{
	font-size: 25px;
	margin-bottom: 20px;
}
.container .content .btn{
	display: inline-block;
	padding: 10px 30px;
	font-size: 20px;
	background: #333;
	color: #fff;
	margin: 0 5px;
	text-transform: capitalize;
}

.container .content .btn:hover{
	background: #fc6f41;
}
.form-container{
	min-height: 100hv;
	display: flex;
	align-items: center;
	justify-content: center;
	padding: 20px;
	padding-bottom: 60px;
	background: #eee;
}
.form-container form 
{
	padding: 20px;
	border-radius: 5px;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
	background: #fff;
	text-align: center;
	width: 500px;
}
.form-container form h3
{
	font-size: 30px;
	text-transform: uppercase;
	margin-bottom: 10px;
	color: #333;
}
.form-container form input,
.form-container form select
{
	width: 100%;
	padding: 10p 15px;
	font-size: 17px;
	margin:8px 0;
	background: #eee;
	border-radius: 5px;
}
.form-container form select option
{
	background: #fff;
}
.form-container form .form-btn
{
	background: #fbd0d9;
	color: crimson;
	text-transform: capitalize;
	font-size: 20px;
	cursor: pointer;
}

.form-container form .form-btn:hover
{
	background: crimson;
	color:#fff ;
}
.form-container form p 
{
	margin-top: 10px;
	font-size: 20px;
	color: #333;
}
.form-container form p a 
{
	color: crimson;
}
.form-container form .error-msg
{
	margin: 10px 0;
	display: block;
	color: crimson;
	color: #fff;
	border-radius: 5px;
	font-size: 20px;
	padding: 10px;
}

body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Raleway', sans-serif; 
    background-color: powderblue;
    align-items: center;
    justify-content: center;
    
}
a{
    text-decoration: none;
}
ul{
    list-style: none;
}
input,button,textarea{
    border: none;
    outline: none;
}
nav{
    display: flex;
    justify-content: space-around;
    align-items: center;
    left: 0;
    width: 100%;
    z-index: 1;
}
nav ul{
    display: flex;
}
nav ul li a{
    height: 40px;
    line-height: 43px;
    margin: 3px;
    padding: 0 22px;
    display: flex;
    font-size: 0.8rem;
    text-decoration: uppercase;
    font-weight: 700;
    letter-spacing: 1px;
    border-radius: 3px;
    transition: 0.6s ease-in-out;
    color: #000000;
}
nav ul li a:hover{
    background-color: #fc6f41;
    color: #fff;
    box-shadow: 5px 10px 30px rgba(252, 59, 0, 0.397);
}
.active{
    background-color: #fc6f41;
    color: #fff;
    box-shadow: 5px 10px 30px rgba(252, 59, 0, 0.397);
}

.main{
    width: 100%;
    height: 100%;
    position: fixed;
    background-repeat: no-repeat;
    background-size: none;
    background-image: none;
    }
.about-container{
    width: 500px;
    font-size: 13.5px;
    position: relative;
    left: 80%;
    top: 20%;
    transform: translate(-80%,-20%);
}
.about-container h1{
    font-size: 45px;
    margin: 0px;
    letter-spacing: 3px;
    color: #ffff;
}

  /* Styling the container to use flexbox layout */
.horizontal-container {
  display: flex;
  align-items: center; /* Align items vertically in the center */
}

/* Add some spacing between elements */
.horizontal-container label,
.horizontal-container input {
  margin-right: 10px; /* Adjust the spacing as desired */
}  
	</style>
</head>
<body>

	<section class="main">
		<nav>
			
			<ul class="menu">
			<li><a href="home.html" >Home</a></li>
			<li><a href="aboutus.html" >About Us</a></li>
			<li><a href="form.html" class="active">Register</a></li>
			
		</ul>
		</nav>
	<div class="form-container">

		<form action="evform.php" method="post">
			<h3>Register now</h3>

			<input type="text" name="firstname" id="d1" required placeholder="Enter your Firstname">
			<input type="text" name="middlename" required placeholder="Enter your Middlename">
			<input type="text" name="surname" required placeholder="Enter your Surname">
			<input type="text" name="regnumber" required placeholder="Enter your registration number">
			<input type="email" name="email" required placeholder="Enter your email">
			<input type="number" name="mobilenumber" required placeholder="Enter your phone">
			<select id="dropbox" name="degree" >
				<option>Enter your degree program</option>
				<option value="CS">Computer Science</option>
				<option value="BIT">Business IT</option>
				<option value="TE">Telecommunication</option>
				<option value="EET">Electronics</option>
				<option value="CET">Computer Engineeering</option>
			</select>

			<select id="dropbox" name="year" >
				<option>Enter your Year of study</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>

			<div class="horizontal-container">
  <label>Gender:</label>
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Female">Female
</div>			
			<input type="file" name="certificate" >
			
			<input type="submit" name="submit" value="register now" class="form-btn">


	</form>
		</div>

</body>
</html>
