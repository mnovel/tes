<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 600px;
            background: #fff;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #ddd;
        }

        .logo {
            max-width: 120px;
            margin-bottom: 10px;
        }

        .app-name {
            font-size: 20px;
            font-weight: bold;
            color: #2c3e50;
        }

        h2 {
            color: #2c3e50;
            text-align: center;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            margin-top: 10px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
            border-top: 2px solid #ddd;
            padding-top: 15px;
        }

        .contact-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-top: 10px;
            font-size: 14px;
            color: #000;
        }

        .contact-container a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
        }

        .contact-container a:hover {
            text-decoration: underline;
        }

        .icon {
            width: 20px;
            height: 20px;
            vertical-align: middle;
        }

        .divider {
            height: 18px;
            width: 1px;
            background-color: #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ $icon }}" alt="{{ $title }}" class="logo">
            <div class="app-name">{{ $title }}</div>
            {{ dd($title) }}
        </div>

        <h2>Hai, {{ $data['name'] }}! 🌟</h2>

        <p>Terima kasih telah mengikuti tes bakat! 🎉 Kami sangat mengapresiasi waktu dan usaha yang Anda luangkan.</p>

        <p>Tes ini dirancang untuk membantu Anda mengenali potensi terbaik dalam diri Anda dan memberikan rekomendasi yang tepat untuk pengembangan karir di masa depan.</p>

        <p><strong>Sebelum melihat hasil tes Anda, yuk isi survei singkat berikut:</strong></p>
        <p style="text-align: center;">
            <a href="{{ $data['survey_link'] }}" class="btn" target="_blank">Isi Survei Sekarang</a>
        </p>

        <p><strong>Hasil tes bakat Anda sudah siap!</strong></p>
        <p style="text-align: center;">
            <a href="{{ $data['report_link'] }}" class="btn" target="_blank">Lihat Laporan Anda</a>
        </p>

        <p>Semoga hasil ini dapat memberikan wawasan baru untuk perjalanan karir Anda! Jika ada pertanyaan, jangan ragu untuk menghubungi kami.</p>

        <!-- Footer dengan Informasi Kontak -->
        <div class="footer">
            <p>Salam sukses,<br><strong>{{ $title }}</strong></p>

            <div class="contact-container">
                <img src="https://img.icons8.com/ios-glyphs/30/000000/phone.png" class="icon" alt="Phone Icon">
                <span>{{ $contact['phone'] }}</span>
                <div class="divider"></div>
                <img src="https://img.icons8.com/ios-glyphs/30/000000/new-post.png" class="icon" alt="Email Icon">
                <a href="mailto:tes@gmail.com">{{ $contact['email'] }}</a>
            </div>

            <p style="margin-top: 10px; font-size: 12px;">{{ $contact['address'] }}</p>
        </div>
    </div>
</body>

</html>
