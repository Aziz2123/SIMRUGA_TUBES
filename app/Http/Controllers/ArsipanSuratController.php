<?php

namespace App\Http\Controllers;

use App\Models\ArsipanSurat;
use Illuminate\Http\Request;

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
        //
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
        return view('arsipansurat.edit', $data);
    }

    public function update(Request $request, ArsipanSurat $arsipanSurat)
    {
        //
    }

    public function destroy(ArsipanSurat $arsipanSurat)
    {
        $arsipanSurat->delete();
    }
}
