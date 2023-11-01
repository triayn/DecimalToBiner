<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Desimal Ke Diner</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Signika+Negative:wght@600&display=swap" 
    rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="box">
        <header>
            <label for="">Konversi Desimal Ke Diner</label>
        </header>
        <main>
            <form method="post" action="">
                <div class="row">
                    <div class="col-md-8">
                        <label for="" class="form-label">Angka Desimal</label>
                        <input type="text" class="form-control" name="decimal" 
                        placeholder="Masukkan Angka Desimal">
                        <button type="submit">Hitung</button>
                    </div>
                </div>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $decimal = $_POST["decimal"];
                if (is_numeric($decimal)) {
                    $binary = decbin($decimal);
                    echo "Hasil konversi dari $decimal ke bilangan biner adalah: $binary";
                } else {
                    echo "Masukkan bilangan desimal yang valid.";
                }
            }
            ?>
        </main>
    </div>
</body>
</html>