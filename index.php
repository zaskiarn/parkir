<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkir</title>
    <style>
        body {
            margin: 0;
            padding: 32px 16px;
            background: #ffbdbd;
            color: #1e293b;
            font-family: Arial, sans-serif;
        }

        .form,
        .hasil {
            max-width: 420px;
            margin: 0 auto 16px;
            padding: 24px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(15, 23, 42, 0.08);
        }

        label {
            font-weight: 600;
        }

        input,
        select {
            box-sizing: border-box;
            width: 100%;
            margin-top: 6px;
            padding: 10px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font: inherit;
        }

        input:focus,
        select:focus {
            outline: 2px solid #93c5fd;
            border-color: #2563eb;
        }

        button {
            padding: 10px 18px;
            border: 0;
            border-radius: 6px;
            background: #ffb0b0;
            color: #ffffff;
            font: inherit;
            font-weight: 600;
            display: block;
            margin: auto;
        }

        button:hover {
            background: #c66969;
        }

        .hasil {
            text-align: center;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="form">
        <form action="" method="post">
            <label>No parkir:</label><br>
            <input type="text" name="no_parkir" required> <br><br>

            <label>No kendaraan:</label><br>
            <input type="text" name="no_kendaraan" required> <br><br>

            <label>Jenis kendaraan:</label>
            <select name="jenis">
                <option disabled selected>Pilih jenis kendaraan</option>
                <option value="motor">Motor</option>
                <option value="mobil">Mobil</option>
                <option value="truk">Truk</option>
            </select> <br><br>

            <label>Lama parkir (menit):</label><br>
            <input type="number" name="lama" required><br><br>

            <label>Nama petugas:</label><br>
            <input type="text" name="nama" required><br><br>

            <button type="submit" name="submit">Submit</button><br><br>

        </form>
    </div>

    <div class="hasil">
    <?php

    if(isset($_POST['submit'])) {
        $jenis = $_POST['jenis'];
        $waktuMenit = $_POST['lama'];
        $waktuJam = ($waktuMenit/60);
        $totalWaktu = ceil($waktuJam);
        $bayar = 0;

        if ($jenis == "motor") {
            $bayar = 3000 + ($totalWaktu - 1) * 2000;
        } else if ($jenis == "mobil") {
            $bayar = 5000 + ($totalWaktu - 1) * 3000;
        } else {
            $bayar = 7000 + ($totalWaktu - 1) * 3000;
        }
        echo "Total bayar: " . $bayar;
    }

    ?>
    </div>
</body>
</html>