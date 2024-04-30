@extends('layouts.template')

@section('content')

<form action="{{ route('arsipansurat.update', $arsipansurat->arsipan_surat_id) }}" method="POST" class="card card-body" enctype="multipart/form-data">
  <div class="d-flex align-items-center justify-content-between mb-4">
      <h4 class="mb-0">Buat Arsipan Surat</h4>
      <a href="{{ route('arsipansurat.index') }}" class="btn btn-primary btn-sm">Back</a>
  </div>
  <div class="form-group">
    <label for="nomor_surat">Nomor Surat</label>
    <input type="text" name="nomor_surat" id="nomor_surat" value="{{ old('nomor_surat') ?? $arsipansurat->nomor_surat }}" class="form-control @error('nomor_surat') is-invalid @enderror" required>
    @error('nomor_surat') <span class="text-danger">{{ $message }}</span> @enderror
  </div>
  
  <div class="form-group">
    <label for="tanggal_surat">Tanggal Surat</label>
    <input type="date" name="tanggal_surat" id="tanggal_surat" value="{{ old('tanggal_surat') ?? $arsipansurat->tanggal_surat->format('Y-m-d')}}" class="form-control @error('tanggal_surat') is-invalid @enderror" required>
    @error('tanggal_surat') <span class="text-danger">{{ $message }}</span> @enderror
  </div>
    
  <div class="form-group">
    <label for="perihal">Perihal</label>
    <input type="text" name="perihal" id="perihal" value="{{ old('perihal') ?? $arsipansurat->perihal }}" class="form-control @error('perihal') is-invalid @enderror" required>
    @error('perihal') <span class="text-danger">{{ $message }}</span> @enderror
  </div>
      
  <div class="form-group">
    <label for="foto_surat">Photo Surat</label>
    <input type="file" accept="image/*" name="foto_surat" id="foto_surat" class="form-control @error('foto_surat') is-invalid @enderror" required>
    @error('foto_surat') <span class="text-danger">{{ $message }}</span> @enderror
  </div>
  
  @csrf
  @method('PUT')
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection