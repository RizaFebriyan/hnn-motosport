<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            padding: 20px;
            border: 1px solid #eee;
            max-width: 600px;
        }

        .header {
            background: #000;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }

        .label {
            font-weight: bold;
            color: #e11d48;
            text-transform: uppercase;
            font-size: 12px;
        }

        .content {
            margin-top: 20px;
        }

        .footer {
            margin-top: 30px;
            font-size: 11px;
            color: #777;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <div class="content">
        <p>Halo Admin, ada penawaran unit masuk dari website:</p>
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
                <td style="padding: 8px 0; border-bottom: 1px solid #eee;"><span class="label">Pengirim</span></td>
                <td style="padding: 8px 0; border-bottom: 1px solid #eee;">: {{ $data['nama'] }}
                    ({{ $data['whatsapp'] }})</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; border-bottom: 1px solid #eee;"><span class="label">Unit</span></td>
                <td style="padding: 8px 0; border-bottom: 1px solid #eee;">: {{ $data['merk_tipe'] }}
                    ({{ $data['tahun'] }})</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; border-bottom: 1px solid #eee;"><span class="label">Kilometer</span></td>
                <td style="padding: 8px 0; border-bottom: 1px solid #eee;">: {{ $data['km'] }} KM</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; border-bottom: 1px solid #eee;"><span class="label">Pajak</span></td>
                <td style="padding: 8px 0; border-bottom: 1px solid #eee;">: {{ $data['pajak'] }}</td>
            </tr>
        </table>

        <div style="margin-top: 20px; background: #f9f9f9; padding: 15px;">
            <span class="label">Catatan Tambahan:</span><br>
            <p style="margin-top: 5px; font-style: italic;">"{{ $data['catatan'] ?? 'Tidak ada catatan' }}"</p>
        </div>
    </div>
</body>

</html>