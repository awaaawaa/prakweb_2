<!-- isi.php -->
<?php
include_once 'header.php';
include_once 'sidebar.php';

?>

<!-- main.php -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projek akhir</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Permainan Tebak Kata</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Permainan Tebak Kata</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        width: 300px;
        margin: 50px auto;
        text-align: center;
    }
    input[type="text"] {
        padding: 10px;
        font-size: 16px;
        width: 100%;
        margin-bottom: 10px;
    }
    button {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        margin-right: 10px;
    }
    #hint {
        margin-top: 20px;
        font-size: 18px;
    }
    #message {
        margin-top: 20px;
        font-size: 18px;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Dapatkah Anda menebak tebakan ini!!</h1>
    <p id="hint">apa yang ada di depan mata tapi ga pernah terlihat?</p>
    <input type="text" id="guess" placeholder="Kata Tebakan" onkeypress="checkKeyPress(event)">
    <button onclick="checkGuess()">Tebak</button>
    <button onclick="restartGame()">Restart</button>
    <p id="message"></p>
</div>

<script>
    const secretWord = "bulu mata";
    let remainingAttempts = 2;

    function checkGuess() {
        const guess = document.getElementById('guess').value.toLowerCase();
        const messageElement = document.getElementById('message');

        if (guess === secretWord) {
            messageElement.textContent = 'YAAAAA BETULLL SEKALIII!!!!';
            messageElement.style.color = 'green';
        } else {
            remainingAttempts--;
            if (remainingAttempts > 0) {
                messageElement.textContent = `Tetotttt!!! salahhh kamu punya ${remainingAttempts} percobaan lagii. semangat!`;
                messageElement.style.color = 'red';
            } else {
                messageElement.textContent = `Jawabanya masi salah, jawaban yang bener tuh "${secretWord}"masa gitu aja gatau payahh!!`;
                messageElement.style.color = 'red';
                document.getElementById('guess').disabled = true;
            }
        }
    }

    function restartGame() {
        remainingAttempts = 2;
        document.getElementById('guess').value = "";
        document.getElementById('message').textContent = "";
        document.getElementById('guess').disabled = false;
    }

    function checkKeyPress(event) {
        if (event.key === "Enter") {
            event.preventDefault();
            checkGuess();
        }
    }
</script>
</body>
</html>


              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
include_once 'footer.php';
?>
