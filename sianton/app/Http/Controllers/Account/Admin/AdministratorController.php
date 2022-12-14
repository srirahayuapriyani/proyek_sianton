<?php

namespace App\Http\Controllers\Account\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdministratorController extends Controller
{
    public function index()
    {
        $data["user"] = User::where("level", "1")->get();

        return view("admin.v_admin.index", $data);
    }

    public function create()
    {
        return view("admin.v_admin.create");
    }

    public function store(Request $request)
    {
        if ($request->file("gambar"))
        {
            $data = $request->file("gambar")->store("admin");
        }

        User::create([
            "nama" => $request->nama,
            "email" => $request->email,
            "nomer_telepon" => $request->nomer_telepon,
            "jenis_kelamin" => $request->jenis_kelamin,
            "password" => bcrypt("admin"),
            "alamat" => $request->alamat,
            "gambar" => $data,
            "level" => "1",
            "dibuat_oleh" => Auth::user()->id
        ]);

        return redirect("/admin/admin");
    }

    public function edit($id)
    {
        $data["edit"] = User::where("id", $id)->first();

        return view("admin.v_admin.edit", $data);
    }

    public function update(Request $request, $id)
    {
        if ($request->file("gambar")) {
            if ($request->gambar_lama) {
                Storage::delete($request->gambar_lama);
            }

            $data = $request->file("gambar")->store("admin");
        }

        User::where("id", $id)->update([
            "nama" => $request->nama,
            "email" => $request->email,
            "nomer_telepon" => $request->nomer_telepon,
            "jenis_kelamin" => $request->jenis_kelamin,
            "alamat" => $request->alamat,
            "gambar" => $data,
        ]);

        return redirect("/admin/v_admin");
    }

    public function destroy(Request $request, $id)
    {
        if ($request->gambar_lama) {
            Storage::delete($request->gambar_lama);
        }

        User::where("id", $id)->delete();

        return redirect("/admin/v_admin");
    }
}
