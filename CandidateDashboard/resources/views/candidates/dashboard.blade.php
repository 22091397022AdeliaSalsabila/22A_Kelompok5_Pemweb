<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Partai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .party-card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            background-color: #f9f9f9;
            height: 350px; /* Menetapkan tinggi tetap */
        }
        .party-card img {
            max-width: 100px;
            margin-bottom: 20px;
        }
        .party-card h3 {
            flex-grow: 1; /* Memungkinkan teks untuk tumbuh dan mengisi ruang */
        }
        .party-card .btn {
            margin: 5px 0;
        }
        .header {
            background-color: #343a40;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 15px;
            text-align: center;
            margin-top: 50px
        }
    </style>
</head>
<body>
<div class="header">
    <h1>DAFTAR PARTAI</h1>
</div>
<div class="container mt-5">
    <div class="row">
        @foreach($parties as $party)
        <div class="col-md-4">
            <div class="party-card">
                <h3>{{ $party['name'] }}</h3>
                <img src="{{ $party['logo'] }}" alt="{{ $party['name'] }}" style="width:100px;height:100px;">
                <a href="{{ route('candidate') }}" class="btn btn-danger">Detail Kampanye</a>
                <a href="{{ route('kampanye') }}" class="btn btn-danger">Detail Pelaporan</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="footer">
    <p>&copy; 2024 oleh MI22A</p>
</div>
</body>
</html>