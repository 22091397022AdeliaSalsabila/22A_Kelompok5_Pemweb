<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kandidat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .candidate-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            background-color: #f9f9f9;
            text-align: center;
            height: 100%; /* Menetapkan tinggi tetap */
            display: flex;
            flex-direction: column;
            justify-content: space-between
        }
        .candidate-card img {
            max-width: 100px;
            margin-bottom: 10px;
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
    <div class="mb-3">
        <label for="region-select" class="form-label">Pilih Nama Wilayah:</label>
        <select class="form-select" id="region-select">
            <option selected>-- PILIH --</option>
            <option value="1">ACEH</option>
            <option value="2">JAWA TIMUR</option>
            <option value="3">BALI</option>
            <option value="4">KALIMANTAN TIMUR</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="entries-select" class="form-label">Show</label>
        <select class="form-select d-inline-block w-auto" id="entries-select">
            <option selected>10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        entries
        <input type="search" class="form-control d-inline-block w-auto" placeholder="Search...">
    </div>

    <div class="row">
        @foreach ($candidates as $candidate)
            <div class="col-md-4 col-lg-3">
                <div class="candidate-card">
                    <div>
                        <p class="mb-1">Nama Provinsi</p>
                        <h4 class="mb-3">{{ $candidate['provinsi'] }}</h4>
                        <p class="mb-1">Nomor urut</p>
                        <h5 class="mb-3">{{ $candidate['nomor_urut'] }}</h5>
                        <img src="{{ $candidate['photo'] }}" alt="Calon {{ $candidate['nomor_urut'] }}">
                        <h6 class="mt-3">Nama Calon</h6>
                        <p>{{ $candidate['nama_calon'] }}</p>
                        <a href="{{ route('kampanye.detail', ['id' => $candidate['id']]) }}" class="btn btn-danger">Selengkapnya</a>
                        </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>