<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<style type="">
/*	:root {
  --body-bg-color: #1a1c1d;
  --text-color: #aaaebc;
  --hr-color: #26292a;
  --red: #e74c3c;
}

* {
  margin: 0;
  padding: 0;
}*/

ul {
  list-style: none;
}

a {
  color: inherit;
  text-decoration: none;
}

/*body {
  margin: 30px 0;
  font: 22px sans-serif;
  background: var(--body-bg-color);
  color: var(--text-color);
}

hr {
  border-color: var(--hr-color);
  margin: 20px 0;
}*/

.menu {
  display: flex;
  justify-content: center;
}


.menu li {
  margin-right: 70px;
}



.menu .li {
  margin-right: 70px;
}





.menu a {
  position: relative;
  display: block;
  overflow: hidden;
}

.menu a span {
  transition: transform 0.2s ease-out;
}

.menu a span:first-child {
  display: inline-block;
  padding: 10px;
}

.menu a span:last-child {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  transform: translateY(-100%);
}

.menu i {
  font-size: 30px;
}

.menu a:hover span:first-child {
  transform: translateY(100%);
}

.menu a:hover span:last-child,
.menu[data-animation] a:hover span:last-child {
  transform: none;
}

/* ANIMATIONS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.menu[data-animation="to-top"] a span:last-child {
  transform: translateY(100%);
}
/*
.menu[data-animation="to-top"] a:hover span:first-child {
  transform: translateY(-100%);
}

.menu[data-animation="to-right"] a span:last-child {
  transform: translateX(-100%);
}

.menu[data-animation="to-right"] a:hover span:first-child {
  transform: translateX(100%);
}

.menu[data-animation="to-left"] a span:last-child {
  transform: translateX(100%);
}

.menu[data-animation="to-left"] a:hover span:first-child {
  transform: translateX(-100%);
}

 FOOTER
–––––––––––––––––––––––––––––––––––––––––––––––––– 
.page-footer {
  position: absolute;
  bottom: 10px;
  right: 10px;
  font-size: 1rem;
}

.page-footer span {
  color: var(--red);
}*/
</style>
</head>
<body>

<form action="ins.php" method="post">	

<input type="text" name="nomb">
<input type="text" name="apellido">

</form>

</body>
</html>