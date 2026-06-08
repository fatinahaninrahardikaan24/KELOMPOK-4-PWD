<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - IAST Institute</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f8fc;
            margin: 0;
            padding: 0;
        }

        /* --- Styling Header/Navbar Baru --- */
        header {
            background-color: #0b4ca3; /* Warna biru tua khas IAST Institute */
            padding: 15px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 16px;
            font-weight: 500;
            transition: opacity 0.2s;
        }

        nav a:hover {
            opacity: 0.8;
        }
        /* ---------------------------------- */

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1 {
            color: #0d6efd;
            text-align: center;
            margin-bottom: 25px;
        }

        .info {
            margin-bottom: 25px;
            line-height: 1.8;
        }

        .info strong {
            color: #0d6efd;
        }

        form input,
        form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
        }

        button {
            background: #0d6efd;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #0b5ed7;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #0d6efd;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <header>
        <a href="/" class="logo">IAST Institute</a>
        <nav>
            <a href="/">Home</a>
            <a href="/publikasi">Publikasi</a>
            <a href="/jurnal">Jurnal</a>
            <a href="/beasiswa">Beasiswa</a>
            <a href="/kontak">Kontak</a>
        </nav>
    </header>

    <div class="container">
        <div class="card">
            <h1>Hubungi Kami</h1>

            <div class="info">
                <p><strong>Email:</strong> info@iastinstitute.com</p>
                <p><strong>Telepon:</strong> +62 812-3456-7890</p>
                <p><strong>Alamat:</strong> Jakarta, Indonesia</p>
            </div>

            <form>
                <input type="text" placeholder="Nama Lengkap">
                <input type="email" placeholder="Email">
                <textarea rows="5" placeholder="Tulis pesan Anda"></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>

            <a href="/" class="back-link">← Kembali ke Home</a>
        </div>
    </div>

</body>
</html>