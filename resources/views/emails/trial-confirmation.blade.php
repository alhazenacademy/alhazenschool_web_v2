<!doctype html>
<html lang="id" xmlns:v="urn:schemas-microsoft-com:vml">

<head>
    <meta charset="UTF-8">
    <meta name="x-apple-disable-message-reformatting">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Trial Class</title>
    <style>
        /* Reset ringan untuk email */
        html,
        body {
            margin: 0 !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important
        }

        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
            border-collapse: collapse !important
        }

        img {
            border: 0;
            outline: none;
            text-decoration: none;
            display: block;
            -ms-interpolation-mode: bicubic
        }

        a {
            text-decoration: none
        }

        /* Responsif sederhana */
        @media screen and (max-width:600px) {
            .container {
                width: 100% !important
            }

            .p-24 {
                padding: 16px !important
            }

            .stack {
                display: block !important;
                width: 100% !important
            }

            .btn {
                width: 100% !important
            }

            .center-sm {
                text-align: center !important
            }
        }
    </style>
</head>

<body style="background:#F9FAFB; margin:0; padding:0;">
    <!-- Preheader (tersembunyi) -->
    <div style="display:none; max-height:0; overflow:hidden; opacity:0;">
        Jadwal trial {{ $className }} untuk {{ $studentName ?? $name }} sudah terdaftar. Simpan jadwal & cek
        detailnya di email ini.
    </div>

    <center role="article" aria-roledescription="email" lang="id" style="width:100%; background:#F9FAFB;">
        <table role="presentation" width="100%" bgcolor="#F9FAFB">
            <tr>
                <td align="center">

                    <!-- Header -->
                    <table role="presentation" width="100%" style="max-width:640px;" class="container">
                        <tr>
                            <td style="padding:24px 16px 8px 16px;" align="left">
                                <a href="{{ $homeUrl ?? url('/') }}" target="_blank" style="display:inline-block;">
                                    <img src="{{ $message->embed(public_path('assets/nav-logo.png')) }}" alt="Alhazen Academy" width="160" height="auto">
                                </a>
                            </td>
                        </tr>
                    </table>

                    <!-- Kartu Utama -->
                    <table role="presentation" width="100%"
                        style="max-width:640px; background:#ffffff; border-radius:16px;" class="container">
                        <tr>
                            <td style="padding:24px;" class="p-24">

                                <!-- Hero -->
                                <table role="presentation" width="100%">
                                    <tr>
                                        <td align="center" style="padding-bottom:8px;">
                                            <span
                                                style="display:inline-block; padding:6px 12px; font:600 12px/1.2 Arial, Helvetica, sans-serif; color:#0F172A; background:#F3F4F6; border:1px solid #E5E7EB; border-radius:999px;">
                                                Konfirmasi Trial Class
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="padding:8px 0 12px 0;">
                                            <h1
                                                style="margin:0; font:800 28px/1.25 Arial, Helvetica, sans-serif; color:#059669;">
                                                Hai {{ $name }}, trial class kamu sudah terjadwal! 🎉
                                            </h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="padding:0 6px 12px 6px;">
                                            <p
                                                style="margin:0; font:400 16px/1.6 Arial, Helvetica, sans-serif; color:#0F172A;">
                                                Terima kasih telah mendaftar trial <strong>{{ $className }}</strong>.
                                                Simpan jadwal berikut dan jangan sampai bertemu nanti di kelas! 
                                            </p>
                                        </td>
                                    </tr>
                                    @if (!empty($heroUrl))
                                        <tr>
                                            <td align="center" style="padding:6px 0 0 0;">
                                                <div
                                                    style="width:560px; height:150px; max-width:100%; border-radius:12px; overflow:hidden;">
                                                    <img src="{{ $message->embed($heroUrl) }}" alt="Trial Class" width="560"
                                                        height="200"
                                                        style="display:block; width:560px; max-width:100%; height:150px; border:0; outline:none; text-decoration:none; -ms-interpolation-mode:bicubic; object-fit:cover; object-position:center;">
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                </table>

                                <!-- Detail Jadwal -->
                                <table role="presentation" width="100%"
                                    style="margin-top:20px; border:1px solid #E5E7EB; border-radius:12px; overflow:hidden;">
                                    <tr>
                                        <td class="stack" style="width:50%; padding:16px;">
                                            <div
                                                style="font:700 14px/1.4 Arial, Helvetica, sans-serif; color:#0F172A; margin-bottom:6px;">
                                                Tanggal & Waktu</div>
                                            <div style="font:400 14px/1.6 Arial, Helvetica, sans-serif; color:#0F172A;">
                                                {{ $date }} • {{ $time }}
                                                @if (!empty($timezone))
                                                    <span style="color:#6B7280;">({{ $timezone }})</span>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="stack" style="width:50%; padding:16px;">
                                            <div
                                                style="font:700 14px/1.4 Arial, Helvetica, sans-serif; color:#0F172A; margin-bottom:6px;">
                                                Program</div>
                                            <div style="font:400 14px/1.6 Arial, Helvetica, sans-serif; color:#0F172A;">
                                                {{ $className }}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="stack" style="width:50%; padding:16px;">
                                            <div style="font:700 14px/1.4 Arial; color:#0F172A; margin-bottom:6px;">
                                                Peserta</div>
                                            <div style="font:400 14px/1.6 Arial; color:#0F172A;">
                                                {{ $studentName ?? $name }} @if (!empty($grade))
                                                    • {{ $grade }}
                                                @endif
                                            </div>
                                        </td>
                                        <td class="stack" style="width:50%; padding:16px;">
                                            <div style="font:700 14px/1.4 Arial; color:#0F172A; margin-bottom:6px;">
                                                Kontak</div>
                                            <div style="font:400 14px/1.6 Arial; color:#0F172A;">
                                                {{ $email ?? '—' }} @if (!empty($phone))
                                                    • {{ $phone }}
                                                @endif
                                            </div>
                                        </td>
                                    </tr>

                                    {{-- Online / Offline detail --}}
                                    @if (!empty($isOnline))
                                        <tr>
                                            <td colspan="2" style="padding:16px; border-top:1px solid #E5E7EB;">
                                                <div style="font:700 14px/1.4 Arial; color:#0F172A; margin-bottom:6px;">
                                                    Mode Kelas: Online</div>
                                                @if (!empty($joinUrl))
                                                    <a href="{{ $joinUrl }}" target="_blank"
                                                        style="display:inline-block; font:600 14px/1.4 Arial; color:#059669; text-decoration:underline;">
                                                        {{ $joinUrl }}
                                                    </a>
                                                    @if (!empty($meetingId))
                                                        <div
                                                            style="font:400 13px/1.6 Arial; color:#6B7280; margin-top:6px;">
                                                            Meeting ID: {{ $meetingId }} @if (!empty($passcode))
                                                                • Passcode: {{ $passcode }}
                                                            @endif
                                                        </div>
                                                    @endif
                                                @else
                                                    <div style="font:400 14px/1.6 Arial; color:#6B7280;">Link pertemuan
                                                        akan dikirim sebelum kelas dimulai.</div>
                                                @endif
                                            </td>
                                        </tr>
                                    @elseif(!empty($location))
                                        <tr>
                                            <td colspan="2" style="padding:16px; border-top:1px solid #E5E7EB;">
                                                <div style="font:700 14px/1.4 Arial; color:#0F172A; margin-bottom:6px;">
                                                    Mode Kelas: Tatap Muka</div>
                                                <div style="font:400 14px/1.6 Arial; color:#0F172A;">
                                                    {{ $location }}</div>
                                                @if (!empty($mapsUrl))
                                                    <div style="margin-top:6px;">
                                                        <a href="{{ $mapsUrl }}" target="_blank"
                                                            style="font:600 14px/1.4 Arial; color:#059669; text-decoration:underline;">
                                                            Buka di Google Maps
                                                        </a>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                </table>

                                <!-- CTA: Add to Google Calendar jika tersedia; jika tidak, Info Program Lainnya -->
                                <table role="presentation" width="100%" style="margin-top:20px;">
                                    <tr>
                                        <td align="center">
                                            @if (!empty($googleCalendarUrl))
                                                <a href="{{ $googleCalendarUrl }}" target="_blank"
                                                    style="display:inline-block; background:#F97316; color:#ffffff; font:700 16px/1 Arial; padding:14px 22px; border-radius:14px;"
                                                    class="btn">
                                                    Tambahkan ke Google Calendar
                                                </a>
                                            @else
                                                <a href="{{ $programsHref ?? url('/program') }}" target="_blank"
                                                    style="display:inline-block; background:#059669; color:#ffffff; font:700 16px/1 Arial; padding:14px 22px; border-radius:14px;"
                                                    class="btn">
                                                    Info Program Lainnya
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                </table>

                                <!-- Tips -->
                                <table role="presentation" width="100%" style="margin-top:24px;">
                                    <tr>
                                        <td
                                            style="padding:12px 16px; background:#F3F4F6; border-radius:12px;">
                                            <div style="font:700 14px/1.4 Arial; color:#0F172A; margin-bottom:6px;">
                                                Tips sebelum mulai:</div>
                                            <ul
                                                style="padding-left:18px; margin:8px 0 0 0; font:400 14px/1.7 Arial; color:#0F172A;">
                                                <li>Masuk 5 menit lebih awal untuk cek audio & koneksi.</li>
                                                <li>Siapkan mouse (lebih nyaman untuk coding visual).</li>
                                                <li>Jika online: gunakan laptop/PC dan koneksi stabil.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>

                                <!-- Bantuan -->
                                <table role="presentation" width="100%" style="margin-top:20px;">
                                    <tr>
                                        <td style="font:400 14px/1.7 Arial; color:#6B7280;" align="center">
                                            Butuh bantuan? Balas email ini atau hubungi WhatsApp:
                                            <a href="{{ $waUrl ?? '#' }}" target="_blank"
                                                style="color:#059669; font-weight:600; text-decoration:underline;">
                                                {{ $waLabel ?? 'Admin Alhazen' }}
                                            </a>
                                        </td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                    </table>

                    <!-- Footer -->
                    <table role="presentation" width="100%" style="max-width:640px;" class="container">
                        <tr>
                            <td align="center" style="padding:18px 16px 32px 16px;">
                                <p style="margin:0; font:400 12px/1.6 Arial; color:#6B7280;">
                                    © {{ date('Y') }} Alhazen Academy •
                                    {{ $orgAddress ?? 'GIIC, Kota Deltamas' }}<br>
                                    Anda menerima email ini karena mendaftar Trial Class di Alhazen Academy.
                                </p>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>
    </center>
</body>

</html>
