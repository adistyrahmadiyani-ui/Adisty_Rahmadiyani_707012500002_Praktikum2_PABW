<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Laporan - LaporBanjir</title>
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
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 12px;
            border-radius: 4px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }
        .data-group {
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        .data-group:last-child {
            border-bottom: none;
        }
        .label {
            font-size: 12px;
            color: #777;
            text-transform: uppercase;
        }
        .value {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-top: 4px;
        }
        .btn-back {
            display: block;
            width: 100%;
            text-align: center;
            background-color: #6c757d;
            color: white;
            padding: 10px;
            border-radius: 4px;
            text-decoration: none;
            margin-top: 20px;
            box-sizing: border-box;
        }
        .btn-back:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="alert-success">
        ✓ Laporan Berhasil Dikirim!
    </div>

    <h3>Rincian Konfirmasi Laporan:</h3>

    <div class="data-group">
        <div class="label">Nama Pelapor</div>
        <div class="value">{{ $namaPelapor }}</div>
    </div>

    <div class="data-group">
        <div class="label">Lokasi Kejadian</div>
        <div class="value">{{ $lokasi }}</div>
    </div>

    <div class="data-group">
        <div class="label">Tinggi Genangan Air</div>
        <div class="value">{{ $tinggiAir }} cm</div>
    </div>

    <a href="{{ route('lapor.form') }}" class="btn-back">Buat Laporan Baru</a>
</div>

</body>
</html>