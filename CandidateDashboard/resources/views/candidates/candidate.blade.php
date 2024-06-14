<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kandidat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .candidate-card {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            background-color: #f9f9f9;
        }
        .candidate-card img {
            max-width: 50px;
            margin-right: 20px;
        }
        .candidate-count {
            font-size: 24px;
            font-weight: bold;
        }
        .details-button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="candidate-card">
                <div>
                    <img src="https://infopemilu.kpu.go.id/assets/img/caleg1.png" alt="DPD">
                    <h3>CALON DPD</h3>
                    <p class="candidate-count">{{ $data['dpd'] }} orang</p>
                    <a href="{{ route('kampanye') }}" class="btn btn-danger">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="candidate-card">
                <div>
                    <img src="https://infopemilu.kpu.go.id/assets/img/caleg1.png" alt="DPR RI">
                    <h3>CALON DPR RI</h3>
                    <p class="candidate-count">{{ $data['dpr'] }} orang</p>
                    <a href="{{ route('kampanye') }}" class="btn btn-danger">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="candidate-card">
                <div>
                    <img src="https://infopemilu.kpu.go.id/assets/img/caleg1.png" alt="DPRD Provinsi">
                    <h3>CALON DPRD PROVINSI</h3>
                    <p class="candidate-count">{{ $data['dprd_provinsi'] }} orang</p>
                    <a href="{{ route('kampanye') }}" class="btn btn-danger">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="candidate-card">
                <div>
                    <img src="https://infopemilu.kpu.go.id/assets/img/caleg1.png" alt="DPRD Kabupaten/Kota">
                    <h3>CALON DPRD KABUPATEN/KOTA</h3>
                    <p class="candidate-count">{{ $data['dprd_kabupaten']}} orang</p>
                    <a href="{{ route('kampanye') }}" class="btn btn-danger">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>