@extends('layouts.template')

@section('content')

<form action="{{ route('arsipansurat.store') }}" method="POST" class="card card-body">
  <div class="d-flex align-items-center justify-content-between mb-4">
      <h4 class="mb-0">Buat Arsipan Surat</h4>
      <a href="{{ route('arsipansurat.index') }}" class="btn btn-primary btn-sm">Back</a>
  </div>
  <div class="form-group">
    <label for="nomor_surat">Nomor Surat</label>
    <input type="text" name="nomor_surat" id="nomor_surat" class="form-control" required>
  </div>
  
  <div class="form-group">
    <label for="tanggal_surat">Tanggal Surat</label>
        <input type="date" name="tanggal_surat" id="tanggal_surat" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label for="perihal">Perihal</label>
        <input type="text" name="perihal" id="perihal" class="form-control" required>
      </div>
      
      <div class="form-group">
        <label for="file">File</label>
        <input type="file" name="file" id="file" class="form-control" required>
      </div>
      
      @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection