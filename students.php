<?php include('conn.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crop Recommendation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    
    $Nitrogen=$Phosphorus=$Potassium=$Temperature=$Humidity=$PH=$Rainfall=$Crop=""; 
    if(isset($_POST['submit']))
    {
        $Nitrogen = $_POST['Nitrogen'];
        $Phosphorus = $_POST['Phosphorus'];
        $Potassium = $_POST['Potassium'];
        $Temperature = $_POST['Temperature'];
        $Humidity = $_POST['Humidity'];
        $PH = $_POST['PH'];
        $Rainfall = $_POST['Rainfall'];
        $Crop = $_POST['Crop'];

        $sql= "INSERT INTO crop_data VALUES ('$Nitrogen','$Phosphorus','$Potassium','$Temperature','$Humidity','$PH','$Rainfall','$Crop');";

        $conn->query($sql);
        
        /*if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }*/
        
        $conn->close();
    }
    ?>

    <form action="students.php" method="post">
        
    <div class="forms-main-wrapper">
  <div class="forms-form-wrapper">
    <form id="myform">
      <div>
        <center><label class="label-main"><b>Crop Recommendation Management System</b></label></center>
      </div>

      <br><br>
      <div class="forms-input-wrapp forms-mb-3">

        <div>
          <label for="full_name" class="forms-form-label">Nitrogen</label>
        </div>
        <input type="text" name="Nitrogen" id="Nitrogen" placeholder="Nitrogen" class="forms-form-input"/>

        <div>
          <label for="full_name" class="forms-form-label">Phosphorus</label>
        </div>
        <input type="text" name="Phosphorus" id="Phosphorus" placeholder="Phosphorus" class="forms-form-input"/>

        <div>
          <label for="full_name" class="forms-form-label">Potassium</label>
        </div>
        <input type="text" name="Potassium" id="Potassium" placeholder="Potassium" class="forms-form-input"/>

        <div>
          <label for="full_name" class="forms-form-label">Temperature</label>
        </div>
        <input type="text" name="Temperature" id="Temperature" placeholder="Temperature" class="forms-form-input"/>
        
        <div>
          <label for="full_name" class="forms-form-label">Humidity</label>
        </div>
        <input type="text" name="Humidity" id="Humidity" placeholder="Humidity" class="forms-form-input"/>

        <div>
          <label for="full_name" class="forms-form-label">PH</label>
        </div>
        <input type="text" name="PH" id="PH" placeholder="PH" class="forms-form-input"/>

        <div>
          <label for="full_name" class="forms-form-label">Rainfall(mm)</label>
        </div>
        <input type="text" name="Rainfall" id="Rainfall" placeholder="Rainfall" class="forms-form-input"/>

        <div>
          <label for="full_name" class="forms-form-label">Crop</label>
        </div>
        <input type="text" name="Crop" id="Crop" placeholder="Crop" class="forms-form-input"/>

        </div>

        <button class="forms-btn" name='submit' >Submit</button>
    </form>
  </div>
</div>


    
</body>
</html>


