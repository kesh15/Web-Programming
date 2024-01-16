<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!doctype html>
    <html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .bg-cover {
            background-size: cover;
            background-position: center;
            position: relative;
            /* Menentukan posisi relatif untuk elemen ini */
            color: white;
            /* Warna teks yang sesuai dengan gambar latar belakang */
        }

        h2 {
            position: absolute;
            /* Menentukan posisi absolut untuk elemen h2 */
            top: 50%;
            /* Menempatkan elemen h2 di tengah vertikal */
            left: 50%;
            /* Menempatkan elemen h2 di tengah horizontal */
            transform: translate(-50%, -50%);
            /* Menggeser elemen h2 ke tengah */
            z-index: 1;
            /* Memprioritaskan elemen h2 di atas gambar latar belakang */
        }

        gymclass {
            display: flex;
            width: 1399px;
            align-items: flex-start;
            gap: 29px;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-cover bg-center" style="background-image: url('/public/images/training-gym-buddy.jpg');">
        <h2>Keep Your Body Fit & Strong</h2>
    </div>

 
    
    




</body>

</html>
