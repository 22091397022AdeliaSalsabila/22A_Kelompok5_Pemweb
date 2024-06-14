<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Calon DPD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .candidate-details {
            border: 2px solid #dc3545;
            padding: 20px;
            border-radius: 10px;
            margin: 20px;
        }
        .candidate-photo {
            max-width: 150px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="candidate-details">
        <div class="text-center">
            <img src="{{ $candidate->photo }}" alt="Candidate Photo" class="candidate-photo">
        </div>
        <h2 class="text-center">{{ $candidate->title }}</h2>
        <h3 class="text-center">{{ $candidate->name }}</h3>
        <h4>Visi Misi:</h4>
        <p>{{ $candidate->visi_misi }}</p>
    </div>
</div>
</body>
</html>