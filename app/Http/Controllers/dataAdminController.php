<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\CssSelector\Parser\Shortcut\ElementParser;

class dataAdminController extends Controller
{
    public function index()
    {

        $admin = DB::table('users')->where('userRole', 'admin')->orWhere('userRole', 'pemilik')->get();

        return view('admin.dataMaster.dataadmin', ['admin' => $admin]);

    }

    public function user()
    {
        $petani = DB::table('users')->where('userRole', 'user')->get();

        return view('admin.dataMaster.datapetani', ['petani' => $petani]);
    }



    public function tambahAdmin()
    {
        $idadm = User::orderBy('idUser', 'desc')->first();
        $idg  = 'Admin-'.CarbonImmutable::now()->timestamp.str::random(3);
        return view('admin.dataMaster.tambahAdmin',['idg'=>strtolower($idg)]);
    }

    public function tambahPetani()
    {
        $idptn = User::orderBy('idUser', 'desc')->first();
        $idp = 'Petani-' .CarbonImmutable::now()->timestamp.str::random(3);
        return view('admin.dataMaster.tambahPetani',['idp'=>strtolower($idp)]);
    }

    public function editAdmin($id)
    {
        $editAdmin = User::where('key', $id)->first();
        return view('admin.dataMaster.editAdmin', ['editAdmin' => $editAdmin]);
    }

    public function editPetani($id)
    {
        $editPetani = User::where('key', $id)->first();
        return view('admin.dataMaster.editPetani', ['editPetani' => $editPetani]);
    }
    public function simpanAdmin(Request $request)
    {

        $this->validate($request, [
            'namaPengguna' => 'required',
            'username' => 'required|unique:users',
            'gambar' => 'required',
            'idUser' => 'required',
            'userRole' => 'required',
            'alamat' => 'required',
            'password' => 'required|min:8|confirmed',
        ], [

            'namaPengguna.required' => 'nama tidak boleh kosong.',

            'username.required' => 'nama pengguna tidak boleh kosong.',
            'username.required|unique:users' => 'nama pengguna sudah ada yang menggunakan.',

            'idUser.required' => 'id user tidak boleh kosong.',
            'gambar.required' => 'gambar tidak boleh kosong.',

            'userRole.required' => 'Harus mengisi role.',

            'alamat.required' => 'alamat tidak boleh kosong',

            'password.required' => 'kata sandi tidak boleh kosong',
            'password.min:8' => 'kata sandi minimal 8 karakter',
            'password.confirmed' => 'kata sandi harus sama',


        ]);

        $image_name = uniqid() . '.' . $request->gambar->getClientOriginalExtension();
        $image_path = 'images/' . $image_name;
        Image::make($request->gambar->getRealPath())->fit(500, 500)->save(storage_path('app/public/'.$image_path));

        if ($request->userRole == 'pemilik') {
            $idUsr = 'pemilik-' . CarbonImmutable::now()->timestamp;
        } else {
            $idUsr = $request->idUser;
        };

        User::create([
            'namaPengguna'=>$request->namaPengguna,
            'idUser'=> $idUsr,
            'username'=>$request->username,
            'gambar'=>$image_path,
            'jenisKelamin'=>'Laki-laki',
            'userRole'=>$request->userRole,
            'alamat'=>$request->alamat,
            'password'=>Hash::make($request->password),
        ]);
        Alert::success('Berhasil','Menambahkan Data Admin');
        return redirect()->route('data-admin')
                        ->with('success',' created successfully.');
    }

    public function updateAdmin(Request $request)
    {
    $dAdmin = User::where('idUser',$request->idUser)->first();

    if ($request->password) {
        $this->validate($request, [
            'namaPengguna' => 'required',
            'username' => [
                'required',
                Rule::unique('users')->ignore($request->idUser, 'idUser'),
            ],
            // 'gambar' => 'required',
            'userRole' => 'required',
            'alamat' => 'required',
            'password' => 'required|min:8|confirmed',
        ], [

            'namaPengguna.required' => 'nama tidak boleh kosong.',

            'username.required' => 'nama pengguna tidak boleh kosong.',
            'username.unique:users' => 'nama pengguna sudah ada yang menggunakan.',

            'gambar.required' => 'gambar tidak boleh kosong.',

            'userRole.required' => 'Harus mengisi role.',

            'alamat.required' => 'alamat tidak boleh kosong',

            'password.required' => 'kata sandi tidak boleh kosong',
            'password.min:8' => 'kata sandi minimal 8 karakter',
            'password.confirmed' => 'kata sandi harus sama',
        ]);
    } else {
        $this->validate($request, [
            'namaPengguna' => 'required',
            'username' => [
                'required',
                Rule::unique('users')->ignore($request->idUser, 'idUser'),
            ],
            // 'gambar' => 'required',
            'userRole' => 'required',
            'alamat' => 'required',

        ], [

            'namaPengguna.required' => 'nama tidak boleh kosong.',

            'username.required' => 'nama pengguna tidak boleh kosong.',
            'username.required|unique:users' => 'nama pengguna sudah ada yang menggunakan.',

            'gambar.required' => 'gambar tidak boleh kosong.',

            'userRole.required' => 'Harus mengisi role.',

            'alamat.required' => 'alamat tidak boleh kosong',

            'password.required' => 'kata sandi tidak boleh kosong',
            'password.min:8' => 'kata sandi minimal 8 karakter',
            'password.confirmed' => 'kata sandi harus sama',
        ]);
    }

    if ($request->gambar) {

        if (Storage::exists('public/' . $dAdmin->gambar)) {
            Storage::delete('public/' . $dAdmin->gambar);
            // $this->alert('success', 'gambar Berhasil Diupdate');
        };

        $image_name = uniqid() . '.' . $request->gambar->getClientOriginalExtension();
        $image_path = 'images/' . $image_name;
        Image::make($request->gambar->getRealPath())->fit(500, 500)->save(storage_path('app/public/' . $image_path));
    }else{
        $image_path = $dAdmin->gambar;
    }

    $dAdmin->update([
            'namaPengguna'=>$request->namaPengguna,
            'username'=>$request->username,
            'gambar'=>$image_path,
            'userRole'=>$request->userRole,
            'alamat'=>$request->alamat,
            'password'=>Hash::make($request->password),
]);
            Alert::success('Berhasil','Mengubah Data Admin');

            return redirect()->route('data-admin')
            ->with('success',' created successfully.');

}
    public function deleteAdmin(Request $request,$id)
    {
        $user = User::where('idUser', $id)->first();
        Storage::delete('public/' . $user->gambar);
        if (!$user) {
            Alert::success('GAGAL', 'Menghapus Data Admin');
            return redirect()->route('data-admin')
                ->with('error', 'User not found');
        }
        $user->delete();
        Alert::success('Berhasil', 'Menghapus Data Admin');
        return redirect()->route('data-admin')
            ->with('success', 'Deleted successfully');
}

    # Bagian Petani


    public function simpanPetani(Request $request)
    {

        $this->validate($request, [
            'namaPengguna' => 'required',
            'username' => 'required|unique:users',
            'idUser' => 'required',
            'gambar' => 'required',
            'jenisKelamin' => 'required',
            'alamat' => 'required',
            'password' => 'required|min:8|confirmed',
        ], [

            'namaPengguna.required' => 'nama tidak boleh kosong.',

            'username.required' => 'nama pengguna tidak boleh kosong.',
            'jenisKelamin.required' => 'Jenis Kelamin tidak boleh kosong.',
            'username.unique:users' => 'nama pengguna sudah ada yang menggunakan.',

            'gambar.required' => 'gambar tidak boleh kosong.',

            'alamat.required' => 'alamat tidak boleh kosong',

            'password.required' => 'kata sandi tidak boleh kosong',
            'password.min:8' => 'kata sandi minimal 8 karakter',
            'password.confirmed' => 'kata sandi harus sama',


        ]);

        $image_name = uniqid() . '.' . $request->gambar->getClientOriginalExtension();
        $image_path = 'images/' . $image_name;
        Image::make($request->gambar->getRealPath())->fit(500, 500)->save(storage_path('app/public/'.$image_path));

        User::create([
            'namaPengguna'=>$request->namaPengguna,
            'username'=>$request->username,
            'idUser' =>$request->idUser,
            'gambar'=>$image_path,
            'jenisKelamin'=>$request->jenisKelamin,
            'alamat'=>$request->alamat,
            'password'=>Hash::make($request->password),
        ]);
        Alert::success('Berhasil','Menambahkan Data Petani');
        return redirect()->route('data-petani')
                        ->with('success',' created successfully.');
    }

    public function updatePetani(Request $request)
    {
    $dPetani = User::where('idUser',$request->idUser)->first();

    if ($request->password) {
        $this->validate($request, [
            'namaPengguna' => 'required',
            'username' => [
                'required',
                Rule::unique('users')->ignore($request->idUser, 'idUser'),
            ],
            // 'gambar' => 'required',
            'jenisKelamin' => 'required',
            'alamat' => 'required',
            'password' => 'required|min:8|confirmed',
        ], [

            'namaPengguna.required' => 'nama tidak boleh kosong.',

            'username.required' => 'nama pengguna tidak boleh kosong.',
            'username.unique:users' => 'nama pengguna sudah ada yang menggunakan.',

            'gambar.required' => 'gambar tidak boleh kosong.',

            'jenisKelamin.required' => 'Harus memilih jenis kelamin.',

            'alamat.required' => 'alamat tidak boleh kosong',

            'password.required' => 'kata sandi tidak boleh kosong',
            'password.min:8' => 'kata sandi minimal 8 karakter',
            'password.confirmed' => 'kata sandi harus sama',
        ]);
    } else {
        $this->validate($request, [
            'namaPengguna' => 'required',
            'username' => [
                'required',
                Rule::unique('users')->ignore($request->idUser, 'idUser'),
            ],
            // 'gambar' => 'required',
            'jenisKelamin' => 'required',
            'alamat' => 'required',

        ], [

            'namaPengguna.required' => 'nama tidak boleh kosong.',

            'username.required' => 'nama pengguna tidak boleh kosong.',
            'username.required|unique:users' => 'nama pengguna sudah ada yang menggunakan.',

            'gambar.required' => 'gambar tidak boleh kosong.',

            'jenisKelamin.required' => 'Harus memilih role.',

            'alamat.required' => 'alamat tidak boleh kosong',

            'password.required' => 'kata sandi tidak boleh kosong',
            'password.min:8' => 'kata sandi minimal 8 karakter',
            'password.confirmed' => 'kata sandi harus sama',
        ]);
    }

    if ($request->gambar) {

        if (Storage::exists('public/' . $dPetani->gambar)) {
            Storage::delete('public/' . $dPetani->gambar);
            // $this->alert('success', 'gambar Berhasil Diupdate');
        };

        $image_name = uniqid() . '.' . $request->gambar->getClientOriginalExtension();
        $image_path = 'images/' . $image_name;
        Image::make($request->gambar->getRealPath())->fit(500, 500)->save(storage_path('app/public/' . $image_path));
    }else{
        $image_path = $dPetani->gambar;
    }


$dPetani->update([
            'namaPengguna'=>$request->namaPengguna,
            'username'=>$request->username,
            'gambar'=> $image_path,
            'jenisKelamin'=>$request->jenisKelamin,
            'alamat'=>$request->alamat,
            'password'=>Hash::make($request->password),
]);
            Alert::success('Berhasil','Mengubah Data Petani');

            return redirect()->route('data-petani')
            ->with('success',' created successfully.');

}
            public function deletePetani(Request $request,$id)
    {
        $user = User::where('idUser', $id)->first();
        Storage::delete('public/' . $user->gambar);
        if (!$user) {
            Alert::success('GAGAL', 'Menghapus Data Petani');
            return redirect()->route('data-petani')
                ->with('error', 'User not found');
        }
        $user->delete();
        Alert::success('Berhasil', 'Menghapus Data Petani');
        return redirect()->route('data-petani')
            ->with('success', 'Deleted successfully');
}

}
