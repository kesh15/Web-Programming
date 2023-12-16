<!--resources/views/pesan.blade.php-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())
 }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
 initial-scale=1">
    <title>Data Kelurahan</title>
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <style>

        label {
            font-size: 24px;
            /* Ganti ukuran teks sesuai kebutuhan */
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 20px;
        }

        input[type=number],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 20px;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 20px;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>

<body>
    <h1>Form Data Kelurahan</h1>
    <form method="post" action="{{ route('submit-data')
 }}">
        <div>
            @csrf
            <label for="nik">Nik:</label>
            <input type="number" id="nik" name="nik" required><br>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required><br>
            <label for="provinsi">Provinsi:</label>
            <select id="provinsi" name="provinsi" required>
                <option value="DKI Jakarta"> DKI Jakarta</option>
                <option value="Jawa Barat"> Jawa Barat</option>
                <option value="Jawa Timur"> Jawa Timur</option>
            </select><br>
            <label for="kota">Kota:</label>
            <select id="kota" name="kota" required>
                <option value="Cengkareng"> Cengkareng</option>
                <option value="Bandung"> Bandung</option>
                <option value="Surabaya"> Surabaya</option>
            </select><br><br>
            <label for="telp">Nomor Telepon:</label>
            <input type="number" id="telp" name="telp" required><br>
            <input type="submit"></input>
        </div>
    </form>
</body>

</html>