<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;


class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    function handleUploadFoto()
    {

        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "foto";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save;
        }
        if (request()->hasFile('foto1')) {
            $foto1 = request()->file('foto1');
            $destination = "foto1";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto1->extension();
            $url = $foto1->storeAs($destination, $filename);
            $this->foto1 = "app/" . $url;
            $this->save;
        }
        if (request()->hasFile('foto2')) {
            $foto2 = request()->file('foto2');
            $destination = "foto2";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto2->extension();
            $url = $foto2->storeAs($destination, $filename);
            $this->foto2 = "app/" . $url;
            $this->save;
        }
    }

    function handleDeleteFoto()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
