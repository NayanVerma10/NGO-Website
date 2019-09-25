# NGO-Website
A website made through HTML and styled with CSS.

# How to Start
Download all the files and open homepage.html

```HTML
<!doctype html>
<html>
<head>
	<title>Home Page</title>
	<link rel="shortcut icon" type="text/x-icon" href="Untitled.png">
	<!-- we used background-size to make the image cover the background-->
	<link rel="stylesheet" type="text/css" href="css.css" />
	<style type="text/css" rel="stylesheet" >
		body{background-image:url("UNI9940.jpg");background-repeat:no-repeat;background-position:center center;background-attachment:fixed;background-size:cover;}
		
		footer{position:absolute;bottom:1px;right:30px;background-color:black;padding-left:7px;}	
		#main{margin:12% 150px auto 150px;}
		#main p{font-size:18pt;}
		abbr{text-decoration:none; color:rgb(253,93,3);}
		#main span{color:rgb(253,93,3);}
		p{color:rgb(243,182,49);font-family:comic sans ms;}
	</style>
		
</head>

<body >
<div id="logo">
	<a href="homepage.html"><img src="logo.png"/></a>
</div>

<table id="navigation">
	<tr>
		<th><a href="aboutus.html">About Us</a></th>
		<th><a href="help.html">Our Projects</a></th>	
		<th><a href="join.html">Join Us</a></th>
		<th><a href="donate.html">Support Us</a></th>
		<th><a href="login.html">Member Login</a></th>
		<th><a href="feedback.html">Feedback</a></th>
	</tr>
</table>

<!--------------------------------------- MAIN PART --------------------------------------------->

<div id="main">
<hr />
	<p>
		The <span>'Being Human Foundation'</span> is a Bhopal-based charity, founded by 
		<abbr title="1. Nayan Verma 2. Kumar Kushagra 3. Ishita Sinha ">3 IIIT-Bhopal</abbr>
		Student in 2017, that provides education and healthcare services for the under-
		privileged in India.<span>Our NGO was awarded the best uprising NGO in the world
		by WHO in 2017.</span>
	</p>
<hr />
</div>

<!------------------------------------- End of MAIN PART -------------------------------------------->
<footer>
<table>
	<tr id="footer">
		<th><a href="members.html">Members</a></th>
		<th><a href="Contact.html">Contact Us</a></th>		
		<th><a href="https://www.facebook.com/BeingHumanOnline" target="_blank"><img class="facebook" src="facebook.png" /></a></th>
		<th><a href="https://www.youtube.com/channel/UC7eKam6URdsicf2hbmh9dHg" target="_blank"><img class="youtube" src="youtube.png" /></a></th>
		<th><a href="https://twitter.com/tweetbeinghuman" target="_blank"><img class="twitter" src="twitter.png" /></a></th>		
	</tr>
</table>
</footer>

</body>
```
