<?php
$servername = "localhost";
$username = "root";
$pwd = "manager";
$dbname="lab_farmer";
$conn = new mysqli($servername, $username, $pwd,$dbname);
$myrail="SELECT * FROM  labtest_report ORDER BY Farmer_id DESC LIMIT 1";
$resin = $conn->query($myrail);

$rose = $resin->fetch_assoc();

$cook= $rose["Nitrogen"];
$phos=$rose["Phosphorous"];
$pota=$rose["potassium"];
$tos=$rose["soil_type"];
echo'
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Soil Test Results</title>
  <style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  
  header {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
  }
  
  h1 {
    margin: 0;
  }
  
  main {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }
  
  section {
    margin-top: 50px;
  }
  
  h2 {
    margin-bottom: 20px;
  }
  
  table {
    border-collapse: collapse;
    width: 100%;
  }
  
  thead {
    background-color: #f2f2f2;
  }
  
  th, td {
    text-align: left;
    padding: 8px;
  }
  .div1 {
    width: 35%;
    margin: 3em auto;
    background: rgba(0, 0, 0, 0.18);
    background-size: cover;
  }
  
  input[type="text"]
  {
    font-size: 0.9em;
    color:black;
    font-weight: 100;
    width: 94.5%;
    display: block;
    border: none;
    padding: 0.8em;
    border: solid 1px rgba(255, 255, 255, 0.37);
    -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
    transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
    background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
    background-position: -800px 0;
    background-size: 100%;
    background-repeat: no-repeat;
    color: black;
    font-family: sans-serif;
  }
  </style>
</head>
<body>
  <header>
    <h1>Soil Test Results</h1>
  </header>

  <main>
    <section>
      <h2>Nutrient Contents</h2>
      <table>
        <div class="div1">
        <tr>
            <th>Nutrient</th>
            <th>Test Value</th>
            <th>Ideal Range</th>
        </tr>
        <tr>
            <td>Nitrogen (N)</td>
            <td><input type="text" name="nitrogen" value="';echo $cook;echo'"></td>
            <td>5.5-7.5</td>
        </tr>
        <tr>
            <td>Phosphorus (P)</td>
            <td><input type="text" name="phosphorus" value="';echo $phos;echo'"></td>
            <td>8.0-12.0</td>
        </tr>
        <tr>
            <td>Potassium (K)</td>
            <td><input type="text" name="potassium" value="';echo $pota;echo'"></td>
            <td>4.0-6.0</td>
        </tr>
        <tr>
            <td>Soil type</td>
            <td><input type="text" name="calcium" value="';echo $tos;echo'"></td>
            
        </tr>
       </div>
      </table>
    </section>
  </main>

  <footer>
    
  </footer>
</body>
</html>'

?>