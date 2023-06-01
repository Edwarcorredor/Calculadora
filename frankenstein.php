<!DOCTYPE html>
<html>
<head>
  <title>Calculadora</title>
  <!-- Agrega los enlaces a los estilos de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
    .calculator {
      margin-top: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      width: 220px;
    }
    .calculator .result {
      background-color: #f5f5f5;
      text-align: right;
      padding: 5px;
      margin-bottom: 10px;
      height: 40px;
    }
    .calculator .buttons {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-gap: 5px;
    }
    .calculator .buttons button {
      width: 100%;
      height: 40px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Calculadora</h2>
    <div class="calculator">
      <div class="result">
        <?php
          session_start();
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['number'])) {
              $_SESSION['expression'] .= $_POST['number'];
            } elseif (isset($_POST['operation'])) {
              $_SESSION['expression'] .= $_POST['operation'];
            } elseif (isset($_POST['calculate'])) {
              eval('$result = ' . $_SESSION['expression'] . ';');
              $_SESSION['expression'] = $result;
            }
          }
          echo $_SESSION['expression'];
        ?>
      </div>
      <form method="POST">
        <div class="buttons">
          <button type="submit" class="btn btn-default" name="number" value="7">7</button>
          <button type="submit" class="btn btn-default" name="number" value="8">8</button>
          <button type="submit" class="btn btn-default" name="number" value="9">9</button>
          <button type="submit" class="btn btn-default" name="operation" value="+">+</button>
          <button type="submit" class="btn btn-default" name="number" value="4">4</button>
          <button type="submit" class="btn btn-default" name="number" value="5">5</button>
          <button type="submit" class="btn btn-default" name="number" value="6">6</button>
          <button type="submit" class="btn btn-default" name="operation" value="-">-</button>
          <button type="submit" class="btn btn-default" name="number" value="1">1</button>
          <button type="submit" class="btn btn-default" name="number" value="2">2</button>
          <button type="submit" class="btn btn-default" name="number" value="3">3</button>
          <button type="submit" class="btn btn-default" name="operation" value="*">*</button>
          <button type="submit" class="btn btn-default" name="number" value="0">0</button>
          <button type="submit" class="btn btn-default" name="operation" value="/">/</button>
          <button type="submit" class="btn btn-primary" name="calculate" value="=">=</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
