<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class TicimaxController extends Controller
{
    public function getUyeler()
    {
        $yetkiKodu = "XKO71EGOT9316YI6C8C48G4VJ4GMVC";
        $url = "https://expressmama.com/Servis/UyeServis.svc"; 

        $uyeFiltre = [
            "Aktif" => -1,
            "AlisverisYapti" => -1,
            "Cinsiyet" => -1,
            "DogumTarihi1" => "1992-10-05",
            "MailIzin" => -1,
            "SmsIzin" => -1,
            "UyeID" => -1
        ];

        // Sayfalama objesi
        $uyeSayfalama = [
            "SiralamaDegeri" => "id",
            "SiralamaYonu" => "Desc",
            "SayfaNo" => 1
        ];

        // HTTP POST isteği (SSL doğrulamasını kapattık)
        $response = Http::withOptions(['verify' => false])
            ->withHeaders([
                "Content-Type" => "application/json"
            ])
            ->post($url, [
                "UyeKodu" => $yetkiKodu,
                "uyeFiltre" => $uyeFiltre,
                "uyeSayfalama" => $uyeSayfalama
            ]);

        // Dönen cevabı kontrol et
        if ($response->successful()) {
            $uyeler = $response->json();
            $adet = count($uyeler['Uye'] ?? []); // gelen listeyi say
            return response()->json([
                "adet" => $adet,
                "uyeler" => $uyeler
            ]);
        } else {
            return response()->json([
                "error" => "API isteği başarısız: " . $response->status()
            ], $response->status());
        }
    }
}
