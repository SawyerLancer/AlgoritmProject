<html>
<head>
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/index.css">
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<meta charset="UTF-8">
</head>
<script>
    $(init);
    function init() {
        $('#myDiv1>p').replaceWith('<p>НОВОЕ</p>');
    }
</script>
<body>
<div class="autorization">
  <div class="image">
   <p class="text-center">
    <img src="../img/user.png">
    <img src="../img/key.png">
   </p>

  </div>
<div class="input-text">
    <input type="text"   placeholder="введите логин">
</div>
  <div class="input-text">
    <input type="text"   placeholder="введите пароль ">
  </div>
    <div class="input-text" id="div">
    <button class="button" onclick="setupMessageButton('Привет','adsasd')" id="button" >
    <p class="text-center">Авторизироваться</p>
    </button>
    </div>
    </div>
</body>
</html>