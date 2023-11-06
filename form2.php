<?php
  require 'DbConnection.php';
  $pdo = DbConnection::make();
  if($_SERVER['REQUEST_METHOD']==='POST'){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $subjects = implode(',',$_POST['subjects']);
    $city = $_POST['city'];
    $query = "INSERT INTO students(name, gender,subjects,city) VALUES (?,?,?,?)";
    $statement =$pdo->prepare($query);
    if($statement->execute([$name,$gender,$subjects,$city])){
      echo'Data Entered Successfully';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <style>
      body {
        background: linear-gradient(112.1deg, rgb(32, 38, 57) 11.4%, rgb(63, 76, 119) 70.2%);
        background-color: rgb(150, 233, 242);
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      }

      .card {
        background-color: rgb(216, 200, 108);
        background: radial-gradient(circle at -8.9% 51.2%, rgb(255, 124, 0) 0%, rgb(255, 124, 0) 15.9%, rgb(255, 163, 77) 15.9%, rgb(255, 163, 77) 24.4%, rgb(19, 30, 37) 24.5%, rgb(19, 30, 37) 66%);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 700px;
        margin: auto;
        margin-top: 20px;
        text-align: center;
        padding: 20px;
      }

      .title {
        color: white;
        font-size: 20px;
        margin-bottom: 20px;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      }

      button {
        width: 50%;
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        
        font-size: 18px;
        margin-top: 20px;
      }

      label {
        display: block;
        margin-top: 10px;
        color: white;
      }

      .form-group {
        text-align: left;
        padding: 10px;
      }

      .radio-group,
      .checkbox-group {
        display: flex;
        align-items: center;
        margin-top: 10px;
      }

      input[type="text"] {
        width: 50%; 
        padding: 5px;
      }
      

      select {
        width: 50%;
        padding: 5px;
      }

      a {
        text-decoration: none;
        font-size: 22px;
        color: white;
      }

      button:hover,
      a:hover {
        opacity: 0.7;
      }
    </style>
  </head>
  <body>
    <div class="card">
      <h1 style="color:white">FORM</h1>
      <p class="title">Enter Your Details</p>
      <form method="post" >
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name">
        </div>
        <div class="form-group">
          <label>Gender</label>
          <div class="radio-group">
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for "female">Female</label>
          </div>
        </div>
        <div class="form-group">
          <label>Subjects</label>
          <div class="checkbox-group">
            <input type="checkbox" name="subjects[]" value="DS" id="DS">
            <label for="DS">DS</label>
            <input type="checkbox" name="subjects[]" value="CAO" id="CAO">
            <label for="CAO">CAO</label>
            <input type="checkbox" name="subjects[]" value="TOC" id="TOC">
            <label for="TOC">TOC</label>
          </div>
        </div>
        <div class="form-group">
          <label for="city">City</label>
          <select name="city" id="city">
            <option value="nagpur">Nagpur</option>
            <option value="mumbai">Mumbai</option>
            <option value="delhi">Delhi</option>
            <option value="chennai">Chennai</option>
          </select>
        </div>
        <p><button type="submit">Submit</button></p>
        
      </form>
      <a href="index.html"><button type="menu">Go Back</button></a>
    </div>
  </body>
</html>

