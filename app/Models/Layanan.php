<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;

class Layanan extends Model
{
    protected $table = 'layanan';
    // protected $guarded = ['id'];

    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function handleUploadFile()
    {

        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $destination = "file";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->file = "app/" . $url;
            $this->save;
        }
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

    function handleDeleteFile()
    {
        $file = $this->file;
        return true;
    }

    function handleDeleteFoto()
    {
        $foto = $this->foto;
        return true;
    }
}
