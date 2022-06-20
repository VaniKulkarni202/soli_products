<!doctype html>
<html>
<head>

		<title>Homepage</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" 
 integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" 
 integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    
    <style>

body{
    font-family: 'Roboto Condensed', sans-serif;
    overflow-x: hidden;

}

th{
    background-color:#e8d8e0;
}

tr:nth-child(even) {
  background-color: #a3d6d1;
}


h3{
    color:blue;
    font-weight:bold;
    text-align:center;
    
}


.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: -2px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius:5px;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

img{
    height:50px;
    width:100px;
}





</style>
</head>
    
 <body>
<br><br>
 <div class="main-card" style ="border-radius:20px;">
 


  <h2 class="card-text" style="padding:30px;height:100px;margin-top:-48px;margin-left:-20px;
  background-color:rgb(242, 230, 255);font-family: Verdana, Arial, Helvetica, sans-serif,bold;
  font-weight:bold;"><img src="{{url('/images/soli.png')}}" alt="Image"/>
Solidaridad Products         
      <button type="button" class="btn btn-Light" style="margin-left:1050px;
      margin-top:-75px;font-weight:bold;font-size:20px;color:red">
        <i class="fa fa-sign-out"></i>&nbsp;&nbsp;LOGOUT</button></h2>

</div>

<br>
<br>
@yield('content')

</body>
</html>