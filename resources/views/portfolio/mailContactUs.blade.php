<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sample Email</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f6f6f6;
            padding: 20px;
        }
        .email-container {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .email-header {
            margin-bottom: 20px;
            font-size: 20px;
            font-weight: bold;
        }
        .email-content table {
            width: 100%;
            border-collapse: collapse;
        }
        .email-content td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        .email-footer {
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">📧 New Form Submission</div>
        <div class="email-content">
            <table>
                @foreach ($data as $key => $value)
                    <tr>
                        <td><strong>{{ ucwords(str_replace('_', ' ', $key)) }}</strong></td>
                        <td>{{ $value }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="email-footer">
            This is an automated message. Please do not reply.
        </div>
    </div>
</body>
</html>
