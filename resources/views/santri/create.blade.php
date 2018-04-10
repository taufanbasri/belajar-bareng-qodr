<h1>Input Data Santri</h1>

{{-- <form action="santri" method="post"> --}}
{{-- <form action="{{ url('santri') }}" method="post"> --}}
<form action="{{ route('santri.store') }}" method="post">
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

    {{-- {{ csrf_field() }} --}}

    @csrf


    <input type="text" name="nama" placeholder="Masukkan namamu bro!"><br>
    @if ($errors->has('nama'))
        <strong>{{ $errors->first('nama') }}</strong><br>
    @endif
    <input type="text" name="umur" placeholder="Masukkan umurmu bro!"><br>
    @if ($errors->has('umur'))
        <strong>{{ $errors->first('umur') }}</strong><br>
    @endif
    <textarea name="alamat" placeholder="Masukkan alamatmu bro!"></textarea><br>
    <input type="text" name="jenis_kelamin" placeholder="Masukkan jenis kelaminmu bro!"><br>
    <button type="submit" name="button">Simpan</button>
    <a href="{{ route('santri.index') }}">Batal</a>
</form>
