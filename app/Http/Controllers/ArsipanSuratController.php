<?php

namespace App\Http\Controllers;

use App\Models\ArsipanSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArsipanSuratController extends Controller
{
    public function index()
    {
        $data['title'] = 'Arsipan Surat';
        $data['breadcrumbs'] = [
            ['label' => 'Dashboard', 'url' => url('/')],
            ['label' => 'Arsipan Surat', 'url' => '#'],
        ];
        $data['arsipansurat'] = ArsipanSurat::all();
        return view('arsipansurat.index', $data);
    }

    public function create()
    {
        $data['title'] = 'Tambah Arsipan Surat';
        $data['breadcrumbs'] = [
            ['label' => 'Dashboard', 'url' => url('/')],
            ['label' => 'Arsipan Surat', 'url' => route('arsipansurat.index')],
            ['label' => 'Tambah Arsipan Surat', 'url' => '#'],
        ];
        return view('arsipansurat.create', $data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_surat' => 'required|unique:arsipan_surats,nomor_surat',
            'tanggal_surat' => 'required|date',
            'perihal' => 'required',
            'foto_surat' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        $validatedData['foto_surat'] = $this->generateImageSurat($request->file('foto_surat'));
        ArsipanSurat::create($validatedData);

        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('arsipansurat.index');
    }

    public function edit(ArsipanSurat $arsipanSurat)
    {
        $data['title'] = 'Edit Arsipan Surat';
        $data['breadcrumbs'] = [
            ['label' => 'Dashboard', 'url' => url('/')],
            ['label' => 'Arsipan Surat', 'url' => route('arsipansurat.index')],
            ['label' => 'Edit Arsipan Surat', 'url' => '#'],
        ];
        $data['arsipansurat'] = $arsipanSurat;

        session()->flash('success', 'Data berhasil diubah');
        return view('arsipansurat.edit', $data);
    }

    public function update(Request $request, ArsipanSurat $arsipanSurat)
    {
        $validatedData = $request->validate([
            'nomor_surat' => 'required|unique:arsipan_surats,nomor_surat,' . $arsipanSurat->arsipan_surat_id . ',arsipan_surat_id',
            'tanggal_surat' => 'required|date',
            'perihal' => 'required',
            'foto_surat' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        if($request->hasFile('foto_surat')){
            $this->deleteImageSurat($arsipanSurat->foto_surat);
            $validatedData['foto_surat'] = $this->generateImageSurat($request->file('foto_surat'));
        }

        $arsipanSurat->update($validatedData);
        session()->flash('success', 'Data berhasil diubah');
        return redirect()->route('arsipansurat.index');
    }

    public function destroy(ArsipanSurat $arsipanSurat)
    {
        $this->deleteImageSurat($arsipanSurat->foto_surat);
        $arsipanSurat->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('arsipansurat.index');
    }

    public function generateImageSurat($photo, $photoName = null){
        $photoName = $photoName ?? time() . '_' . $photo->getClientOriginalName();
        Storage::disk('public')->put('arsipsurat/' . $photoName, file_get_contents($photo));
        return $photoName;
    }

    public function deleteImageSurat($photoName){
        if(Storage::disk('public')->exists('arsipsurat/' . $photoName)){
            Storage::disk('public')->delete('arsipsurat/' . $photoName);
        }
    }
}
