<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;


class Profil extends Model
{
    protected $table = 'profil';
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
