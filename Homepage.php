<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/study_hall/hall/homeui.css">
</head>
<style>
img {
  width: 10%;
  heidht: 10px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.header {
  background: url('header.jpg') no-repeat;
  font-family: Dubai;
  color: white;
  text-align: center;
}

ul {
	font-family: Dubai;
	text-align: right;
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
	font-family: Dubai;
  float: right;
}

li a {
  font-family: Dubai;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: #00008B;
}
</style>

<body>

<div class="header">

  <h2>به سامانه الكترونيك تالار مطالعه استاد صمدي خوش آمديد</h2>
   <?php date_default_timezone_set('Asia/Tehran');
   echo 'ساعت ورود شما به سامانه';
   echo date('H:i');
   ?>

</div>

<ul>
  <li><a class="active" href="http://localhost/study_hall/hall/">خانه</a></li>
  <li><a href="/registery/mananger/manangerpanel.php">پنل مديريت</a></li>
  <li><a href="#contact">تماس با مراقب</a></li>
  <li><a href="#contact">امور مالي</a></li>
  <li><a href="#contact">ارتباط با مشاور</a></li>
  <li><a href="#contact">منابع آموزشي</a></li>
  <li><a href="#contact">ارتباط با سالن</a></li>
  <li><a href="#contact">درباره ما</a></li>
</ul>
<div class="container">
 <div class="circ3"></div>
  <div class="circ">
       <div class="c7"></div>
       <div class="c9"></div>
       <div class="c6"></div>
       <div class="c5"></div>
       <div class="c12"></div>
       <div class="c21"></div>
  </div>
</div>
<div class="login-box">
  <form  method="POST">
    <a href="/registery/mananger/admins/insertion.admin.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      پنل كاربري دانش آموزان
    </a>
	
    <a href="/study_hall/students/studentsingup.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
     ثبت نام در سالن مطالعه
    </a>

  </form>
  
</div>
</body>
</html>
