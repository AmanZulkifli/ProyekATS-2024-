<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />    
</head>
<body>
    <header></header>
    <main>
        <div class="container">
            <div class="box">

                <div class="show">
                    <div class="con">
                        <div class="atas">
                        <?php
                        if (isset($_POST['nama']) && isset($_POST['nilai'])) {
                            if ($_POST['nilai'] > 70 && $_POST['nilai'] <=100) {
                                echo "<span class='material-symbols-outlined' style='color: rgb(58, 115, 230);'>".
                                    "sentiment_satisfied".
                                    "</span>"."<p class='h' style='
                                text-align: center;
                                display : flex;
                                justify-content : center;
                                align-items : center;
                                font-weight: 600;
                                color :  rgb(58, 115, 230);'>"
                                ."<br>" ."Kompeten" .
                                "</p>";
                                    } elseif($_POST['nilai'] < 71 && $_POST['nilai'] >=0) {
                                    echo "<span class='material-symbols-outlined' style='color: crimson'>".
                                        "sentiment_dissatisfied".
                                        "</span>" ."<p class='h' style='
                                    text-align: center;
                                    display : flex;
                                    justify-content : center;
                                    align-items : center;
                                    font-weight: 600;
                                    color :  crimson;'>"
                                    . "<br>" ."Belum Kompeten" .
                                    "</p>";
                                    } else {
                                        echo "Error";
                                    }
                                } else {
                                    echo "";
                                }
                        ?>
                        <!-- <p class="h" style="
                                text-align: center;
                                display : flex;
                                justify-content : center;
                                align-items : center;                                font-weight: 600;
                                color :  rgb(58, 115, 230);">
                                😊 <br> Kompeten
                                </p> -->
                        </div>
                        <div class="tengah">
                            <p>Rincian Nilai</p>
                        </div>
                        <div class="bawah">
                        <?php
                        if (isset($_POST['nama']) && isset($_POST['nilai'])) {
                            if ($_POST['nilai'] > 70 && $_POST['nilai'] <=100) {
                                echo "<p class='g' style='
                                text-align: center;
                                display : flex;
                                justify-content : center;
                                align-items : center;
                                font-weight: 500;
                                '>".$_POST['nama']."</p>";
    
                                echo "<p class='h' style='
                                text-align: center;
                                display : flex;
                                justify-content : center;
                                align-items : center;
                                font-weight: 600;
                                flex-direction :column;'>" . "Nilai" .
                                "<span style='color :  rgb(58, 115, 230);'>" .$_POST['nilai']. "</span>
                                </p>"; 
                                } elseif($_POST['nilai'] < 71 && $_POST['nilai'] >=0) {
                                    echo "<p class='g' style='
                                    text-align: center;
                                    display : flex;
                                    justify-content : center;
                                    align-items : center;
                                    font-weight: 500;
                                    '>".$_POST['nama']."</p>";
        
                                    echo "<p class='h' style='
                                    text-align: center;
                                    display : flex;
                                    justify-content : center;
                                    align-items : center;
                                    font-weight: 600;
                                    flex-direction :column;'>" . "Nilai" .
                                    "<span style='color :  crimson;'>" .$_POST['nilai']. "</span>
                                    </p>";         
                                } else {
                                    echo "Error";
                                }
                            } else {
                                echo "";
                            }
                        ?>
                        <!-- <p class="g" style="
                                text-align: center;
                                display : flex;
                                justify-content : center;
                                align-items : center;
                                font-weight: 500;
                                ">alana</p>    
                                <p class="h" style="
                                text-align: center;
                                display : flex;
                                justify-content : center;
                                align-items : center;
                                font-weight: 600;
                                flex-direction :column;"> Nilai
                                <span style='color :  rgb(58, 115, 230);'> 80 </span>
                                </p> -->
                        </div>
                    </div>
                </div>
                
                <div class="kontener">
                    <div class="titel">
                        <h1>CEK KETERANGAN NILAI
                        </h1>
                    </div>
                    <div class="form">
                    <form method="post" action="">
                        <label for="nama"> Nama</label> <br>
                        <input type="text" id="nama" name="nama" class="isi" required> <br>
                        <label for="nilai"> Nilai </label> <br>
                        <input type="number" id="nilai" name="nilai" class="isi" required> <br> <br>
                        <input type="submit" value="Kirim" class="btn" id="submit-btn"><br>
                        
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer></footer>

    
</body>
</html>