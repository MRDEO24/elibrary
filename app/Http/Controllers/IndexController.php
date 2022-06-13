<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index()
    {

        $context = [
            'allbook' => Book::all()->take(3),
            'allbooks' => Book::inRandomOrder()->take(4)->get(),
            'judul_halaman' => "Beranda",
        ];

        return view('index', $context);
    }
    public function detail($id)
    {

        $context = [
            'rekom' => Book::inRandomOrder()->take(4)->get(),
            'book' => Book::where('id', $id)->first(),
            'judul_halaman' => "Detail buku",
        ];

        return view('detail', $context);
    }
    public function allbook()
    {

        $context = [
            'allbook' => Book::all(),
            'judul_halaman' => "Detail buku",
        ];

        return view('allbook', $context);
    }

    public function dashboard()
    {
        if (Auth::user()&&Auth::user()->is_admin == 1) {
            $context = [
                'allbook' => Book::all(),
                'judul_halaman' => "Dashboard Admin",
            ];

            return view('dashboard', $context);
        } else {
            return redirect('/');
        }
    }
    public function add(Request $request)
    {
        if (Auth::user()&&Auth::user()->is_admin == 1) {
            $book = new Book;
            switch ($request->method()) {
                case 'POST':
                    // dd($request->all());
                    if ($request->hasFile('gambar')) {
                        //  Let's do everything here
                        if ($request->file('gambar')->isValid()) {
                            //
                            $validated = $request->validate([
                                // 'name' => 'string|max:40',
                                'gambar' => 'mimes:jpeg,png|max:1024',
                            ]);
                            $imageName = time() . '.' . $request->gambar->extension();
                            $request->gambar->move(public_path('book'), $imageName);

                            $book::create([
                                'judul' => $request->judul,
                                'genre' => $request->genre,
                                'deskripsi' => $request->deskripsi,
                                'link' => $request->link,
                                'gambar' => 'book/' . $imageName
                            ]);
                            return redirect('/dashboard')->with('status', "Data Berhasil Ditambah");
                        }
                    }

                    break;

                case 'GET':
                    $context = [

                        'judul_halaman' => "Tambah buku",
                    ];

                    return view('add', $context);
                    break;
            }
        } else {
            return redirect('/');
        }
    }
    public function edit(Request $request, $id)
    {
        if (Auth::user()&&Auth::user()->is_admin == 1) {
            $book = new Book;
            switch ($request->method()) {
                case 'POST':
                    // dd($request->all());
                    if ($request->hasFile('gambar')) {
                        //  Let's do everything here
                        if ($request->file('gambar')->isValid()) {
                            //
                            $validated = $request->validate([
                                // 'name' => 'string|max:40',
                                'gambar' => 'mimes:jpeg,png|max:1024',
                            ]);
                            $imageName = time() . '.' . $request->gambar->extension();
                            $request->gambar->move(public_path('book'), $request->old);

                            $book::where('id', $id)->update([
                                'judul' => $request->judul,
                                'genre' => $request->genre,
                                'deskripsi' => $request->deskripsi,
                                'link' => $request->link,
                                'gambar' => 'book/' . $request->old
                            ]);
                            return redirect('/dashboard')->with('status', "Data Berhasil Diubah");
                        }
                    } else {
                        $book::where('id', $id)->update([
                            'judul' => $request->judul,
                            'genre' => $request->genre,
                            'deskripsi' => $request->deskripsi,
                            'link' => $request->link,

                        ]);
                        return redirect('/dashboard')->with('status', "Data Berhasil Diubah");
                    }

                    break;

                case 'GET':
                    $context = [
                        'book' => Book::where('id', $id)->first(),
                        'judul_halaman' => "Edit buku",
                    ];

                    return view('edit', $context);
                    break;
            }
        } else {
            return redirect('/');
        }
    }

    public function hapus($id)
    {
        if (Auth::user()&&Auth::user()->is_admin == 1) {
            $file = Book::where('id', $id)->first()->gambar;

            File::delete($file);
            Book::where('id', $id)->delete();
            return redirect('/dashboard')->with('status', "Data Berhasil Dihapus");
        } else {
            return redirect('/');
        }
    }
}
