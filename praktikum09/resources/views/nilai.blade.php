@php
$nama = 'Muhammad Zidan';
$nilai = 90.99;
@endphp
{{-- struktur kendali if --}}
@if ($nilai >= 70)
    @php $ket = "Lulus"; @endphp
@else
    @php $ket = "Gagal"; @endphp
@endif

siswa dinyatakan {{$nama}} dinyatakan {{$ket}}