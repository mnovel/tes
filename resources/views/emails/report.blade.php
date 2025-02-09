<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Survei Anda</title>
</head>

<body>
    <h2>Hai, {{ $data['name'] }}</h2>

    <p>Terima kasih telah mengikuti tes bakat.</p>

    <p>Kami menghargai waktu dan usaha yang telah Anda luangkan. Hasil dari tes ini akan membantu kami memahami potensi dan bakat Anda serta memberikan rekomendasi yang lebih tepat untuk pengembangan karir Anda di masa depan.</p>

    <p>Silakan mengisi survei berikut sebelum melihat hasil tes:</p>
    <p><strong>Link Survei:</strong> <a href="{{ $data['survey_link'] }}" target="_blank">Klik di sini untuk mengisi survei Anda</a></p>

    <p>Berikut adalah hasil tes Anda:</p>
    <p><strong>Link Laporan:</strong> <a href="{{ $data['report_link'] }}" target="_blank">Lihat laporan Anda</a></p>

    <p>Salam hangat,</p>
    <p><strong>Tim Kami</strong></p>
</body>

</html>
