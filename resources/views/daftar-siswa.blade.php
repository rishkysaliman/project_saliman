@php
    $siswa = \App\Models\Siswa::all();
    $satuSiswa = \App\Models\Siswa::first();
    $duaSiswa = \App\Models\Siswa::latest('id')->first();
    $siswaSatu = \App\Models\Siswa::find(20);
    $siswaLaki = \App\Models\Siswa::where('jenis_kelamin', 0)->get();

@endphp

{{-- menampilkan data --}}
@foreach ($siswa as $data)
    nama siswa : {{ $data->nama }} <br>
    jenis_kelamin : {{ $data->jenis_kelamin }} <br>
    umur : {{ $data->umur }} <br>
    alamat : {{ $data->alamat }} <br>
    <hr>
@endforeach

{{-- menampilkan data satu --}}
<h1>data satu</h1>
nama siswa : {{ $satuSiswa->nama }} <br>
jenis_kelamin : {{ $satuSiswa->jenis_kelamin }} <br>
umur : {{ $satuSiswa->umur }} <br>
alamat : {{ $satuSiswa->alamat }} <br>
<hr>
{{-- menam pilkan data dua --}}
<h1>data dua</h1>
nama siswa : {{ $duaSiswa->nama }} <br>
jenis_kelamin : {{ $duaSiswa->jenis_kelamin }} <br>
umur : {{ $duaSiswa->umur }} <br>
alamat : {{ $duaSiswa->alamat }} <br>
<hr>

{{-- menampil kan data yang tidak ada kaitan data atau null --}}
<h1>menampilkan satu</h1>
nama siswa : {{ $siswaSatu->nama ?? '-' }} <br>
jenis_kelamin : {{ $siswaSatu->jenis_kelamin ?? '-' }} <br>
umur : {{ $siswaSatu->umur ?? '-' }} <br>
alamat : {{ $siswaSatu->alamat ?? '-' }} <br>
<hr><br>

{{-- menampilkan jenis kelamin laki laki saja atau perempuan --}}
<h1>menampilkan jenis kelamin laki laki</h1>
@foreach ($siswaLaki as $data)
    nama siswa : {{ $data->nama }} <br>
    jenis_kelamin : {{ $data->jenis_kelamin }} <br>
    umur : {{ $data->umur }} <br>
    alamat : {{ $data->alamat }} <br>
    <hr>
@endforeach
