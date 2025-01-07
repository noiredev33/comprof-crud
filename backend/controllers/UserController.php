<?php

namespace App\Controllers;

use App\Models\Berkas;

class UserController
{
    public function cekBerkas($request, $response)
    {
        // Ambil data yang dikirim dari form
        $kantor = $request->getParam('kantor');
        $nomorBerkas = $request->getParam('nomor_berkas');
        $tahun = $request->getParam('tahun');
        
        // Cek berkas di database
        $berkas = Berkas::where('nomor_berkas', $nomorBerkas)->where('kantor', $kantor)->where('tahun', $tahun)->first();

        if ($berkas) {
            // Jika berkas ditemukan
            return $response->withJson(['status' => 'success', 'data' => $berkas]);
        } else {
            // Jika berkas tidak ditemukan
            return $response->withJson(['status' => 'error', 'message' => 'Berkas tidak ditemukan']);
        }
    }
}
