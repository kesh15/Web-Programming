<!DOCTYPE html>
<html>
<head>
    <title> LOGIN </title>
    <link rel="stylesheet" type="text/css" href="index_style.css">
    <style>
        body {
    background: rgb(82, 120, 83);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    flex-direction: column;
}

*{
    font-family: 'Jost', sans-serif;
    font-family: 'Rubik', sans-serif;
    box-sizing: padding-box;
}

form {
    width: 1000px;
    padding: 20px;
    background: rgb(249, 232, 217);
    border-radius: 20px;
}

h2 {
    text-align: center;
    margin-bottom: 40px;
    color: rgb(31, 23, 23);
}

input {
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
}

label {
    color: rgb(31, 23, 23);
    font-size: 18px;
    padding: 10px;
}

button {
    float: right;
    background: rgb(238, 114, 20);
    padding: 10px 15px;
    color: rgb(249, 232, 217);
    border-radius: 5px;
    margin-right: 10px;
    border: none;
}

.error {
   background:rgb(247, 183, 135);
   color: #0c0101;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
    text-align: center;
    color: rgb(134, 3, 3);
}

a {
    float: right;
    background: rgb(183, 225, 233);
    padding: 10px 15px;
    color: #fff;
    border-radius: 10px;
    margin-right: 10px;
    border: none;
    text-decoration: none;
}

a:hover{
    opacity: .7;
}


    </style>
</head>
<body>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('home')}}" method="get">
        <h2>LOGIN</h2>
        <label> User Name </label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label> Password </label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
    </form>
<body>
</html>