<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Kalkulator</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- CSS Template -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    /* Custom styles */
    .form-container {
      max-width: 500px;
      margin: auto;
      padding: 20px;
      background-color: #f1f1f1;
      border-radius: 10px;
    }
    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .form-container input[type=number], .form-container select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    .form-container button[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }
    .form-container button[type=submit]:hover {
      background-color: #45a049;
    }
    .result-container {
      margin-top: 20px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="w3-container w3-teal">
    <h1>Formulir Kalkulator</h1>
  </div>

  <div class="form-container">
    <form method="POST">
      <h2>Kalkulator Sederhana</h2>
      <div class="form-group">
        <label for="number-input">Masukkan angka pertama:</label>
        <input type="number" id="number-input" name="number-input" required>
      </div>

      <div class="form-group">
        <label for="dropdown-input">Pilih operasi:</label>
        <select id="dropdown-input" name="dropdown-input" required>
          <option value="kali">Kali</option>
          <option value="bagi">Bagi</option>
          <option value="kurang">Kurang</option>
          <option value="tambah">Tambah</option>
        </select>
      </div>

      <div class="form-group">
        <label for="number-input2">Masukkan angka kedua:</label>
        <input type="number" id="number-input2" name="number-input2" required>
      </div>

      <button type="submit" name="hitung">Hitung</button>
    </form>

    <!-- PHP -->
    <?php
      if (isset($_POST['hitung'])) {
        $number1 = $_POST["number-input"];
        $number2 = $_POST["number-input2"];
        $option = $_POST["dropdown-input"];
        $result = 0;

        if(is_numeric($number1) && is_numeric($number2)){ 
          switch ($option) {
            case "kali":
              $result = $number1 * $number2;
              break;
            case "bagi":
              if($number2 != 0){ 
                $result = $number1 / $number2;
              } else {
                $result = "Tidak dapat dibagi oleh 0";
              }
              break;
            case "kurang":
              $result = $number1 - $number2;
              break;
            case "tambah":
              $result = $number1 + $number2;
              break;
            default:
              $result = "Opsi tidak valid";
          }
        } else {
          $result = "Masukkan angka yang valid";
        }

        echo "<div class='result-container'><h3>Hasil: " . $result . "</h3></div>";
      }
    ?>
  </div>
</body>
</html>


