<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir - BPBD Kabupaten Bandung</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 40px 20px;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #d9534f;
            margin-top: 0;
            text-align: center;
        }
        p.subtitle {
            text-align: center;
            color: #666;
            font-size: 14px;
            margin-bottom: 25px;
        }
        .form-group {
            margin-bottom: 18px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }
        button {
            width: 100%;
            background-color: #d9534f;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        button:hover {
            background-color: blue;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>LaporBanjir</h2>
    <p class="subtitle">BPBD Kabupaten Bandung</p>

    <form action="{{ route('lapor.proses') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_pelapor">Nama Pelapor:</label>
            <input type="text" id="nama_pelapor" name="nama_pelapor" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi Kejadian (Kecamatan/Desa):</label>
            <input type="text" id="lokasi" name="lokasi" placeholder="Contoh: Kec. Dayeuhkolot / Desa Citasuk" required>
        </div>

        <div class="form-group">
            <label for="tinggi_air">Tinggi Genangan Air (cm):</label>
            <input type="number" id="tinggi_air" name="tinggi_air" placeholder="Contoh: 50" required>
        </div>

        <button type="submit">Kirim Laporan</button>
    </form>
</div>

</body>
</html>