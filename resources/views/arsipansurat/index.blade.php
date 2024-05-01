@extends('layouts.template')

@section('content')

<div class="card card-body">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h4 class="mb-0">Data Arsip Surat</h4>
        <a href="{{ route('arsipansurat.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover" id="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>No Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Perihal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($arsipansurat as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nomor_surat }}</td>
                    <td>{{ $item->tanggal_surat->format('d F Y')}}</td>
                    <td>{{ $item->perihal }}</td>
                    <td>
                        <button type="button" class="btn btn-dark btn-sm rounded-0 view-action" data-href="{{ asset('storage/arsipsurat/' . $item->foto_surat) }}">
                            <i class="fas fa-eye"></i>
                            <span class="d-none d-lg-inline">Lihat</span>
                        </button>
                        <a href="{{ route('arsipansurat.edit', $item->arsipan_surat_id) }}" class="btn btn-warning btn-sm rounded-0">
                            <i class="fas fa-edit"></i>
                            <span class="d-none d-lg-inline">Edit</span>
                        </a>
                        <form action="{{ route('arsipansurat.destroy', $item->arsipan_surat_id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm rounded-0" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="fas fa-trash"></i>
                                <span class="d-none d-lg-inline">Hapus</span>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" integrity="sha256-Vzbj7sDDS/woiFS3uNKo8eIuni59rjyNGtXfstRzStA=" crossorigin="anonymous">
@endpush

@push('js')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js" integrity="sha256-yt2kYMy0w8AbtF89WXb2P1rfjcP/HTHLT7097U8Y5b8=" crossorigin="anonymous"></script>
<script>
    const viewAction = document.querySelectorAll('.view-action');
    viewAction.forEach((btn) => {
        btn.addEventListener('click', function() {
            $.fancybox.open({src: btn.dataset.href,type: 'image', opts: {buttons: ["zoom","download","close"]}});
        });
    });
</script>
@endpush