<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body {
  font-family: "Viner Hand ITC", sans-serif;
color:#dad;
  height: 100vh;
background: url("0.jpg") 50% fixed;
    background-size: cover;
}

@keyframes spinner {
  0% {
    transform: rotateZ(0deg);
  }
  100% {
    transform: rotateZ(359deg);
  }
}
* {
  box-sizing: border-box;
}

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
  background: rgba(4, 40, 68, 0.85);
}
.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.8);
    overflow-y: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 40px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
span
{ 
font-family: "Viner Hand ITC";
font-color:"red";
}
a
{
text-decoration:none;
color:yellow;
font-size:40px;
}


    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="wrapper">
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
 <a href="admin.jsp">Home</a>
    <a href="login.html">Logout</a>
  </div>
</div><pre>
                                                                                                                            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;Home</span></pre>

<a href="library.jsp>Library</a>
<a href="department.jsp>Departments</a>
<a href="classroom.jsp>Classrooms</a>
<a href="lab.jsp>Labs</a>
<a href="canteen.jsp>Canteen</a>
<a href="pat.jsp>Placement& Training</a>
<a href="office.jsp>Office</a>
<a href="transport.jsp>Transport</a>
<script  src="js/index.js"></script>
<script>
function openNav() 
{
    document.getElementById("myNav").style.height = "100%";
}
function closeNav() 
{
    document.getElementById("myNav").style.height = "0%";
}
</script>
</form>

</body>

</html>