<!doctype html>
<html lang="fa">
<head>
<title>خرید تلفن همراه</title>
<meta charset = 'utf-8'>
	<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
<style>
body{
font-size:large;
}
body{
      background:linear-gradient(
			90deg,
		  rgba(145, 228, 193, 0.897),
		  rgba(215, 187, 235, 0.9)
					);
      font-size:large;
    }
		form{
			text-align: right;
		}
        background-image:	
</style>
<link   href="assets/css/style.css"   rel="stylesheet"   type="text/css">
</head>

	<body class="body">
	<header>



     
	<nav id = "mainNav">
		<ul>
  <li> <a href="../index.html">خانه</a> </li>
   <li> <a href="#">خرید</a> </li>
  <li> <a href="addProduct.html">فروش</a> </li>
  <li><a href="register.html">ثبت نام</a></li>
  <li><a href="contact.html">ارتباط با ما</a></li>
    </ul>
 
    </nav>
</header>

<main>
<h1>ویرایش مشخصات محصول</h1>

<form class="form" action = "" method = "POST">	
<div id="f">
<label for="name" class="pf2">نام و مدل محصول</label>
<input class="input" type="text" id="name" name="name" placeholder="نام و مدل محصول را وارد کنید" value="<?php if(isset($row['name'])) echo $row['name']; ?>"/> 
</div>
<div id="f">
<label for="price" class="pf3">قیمت</label>
<input class="input1" type="number" name="price" id="price" placeholder="تومان" value="<?php if(isset($row['price'])) echo $row['price']; ?>"/>
</div>
<div id="f">
<label for = "file" class="pf3">تصویر محصول</label>
<input class="input1" type="file" name="imgSrc" id="file" value="<?php if(isset($row['imgSrc'])) echo $row['imgSrc']; ?>"/>
</div>
<div id="f">
<p class="pf4">توضیحات محصول</p>
<textarea class="input1" name="description" id="description" rows="30" cols="150" value="<?php if(isset($row['description'])) echo $row['description']; ?>"/></textarea>
<br>
</div>
<div id="f">
<input class="input2" type="submit" name = "submit" value="ویرایش" > 
</div>
</form>
</main>
 <footer>
 </footer>
 </body>
</html>