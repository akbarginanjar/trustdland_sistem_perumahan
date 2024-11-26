@extends('layouts.admin')

@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.js"></script>
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="/" class="link"><i
                                    class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Transaksi</h1>
            </div>
            <div class="col-6">
                {{-- <div class="text-end upgrade-btn">
                    <a href="{{ route('mobil.create') }}" class="btn btn-primary text-white">Tambah Baru</a>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="transaksi">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3">No</th>
                                <th scope="col" class="px-6 py-3">Nama</th>
                                <th scope="col" class="px-6 py-3">Mobil</th>
                                <th scope="col" class="px-6 py-3">Tgl Sewa</th>
                                <th scope="col" class="px-6 py-3">Tgl Pengemballian</th>
                                <th scope="col" class="px-6 py-3">Lama Sewa</th>
                                <th scope="col" class="px-6 py-3">Total Bayar</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($transaksi as $item)
                                <tr class="bg-white border-b ">
                                    <td class="px-6 py-4">{{ $no++ }}</td>
                                    <td class="px-6 py-4">{{ $item->penyewa->user->name }}</td>
                                    <td class="px-6 py-4"> {{ $item->mobil->merk }} </td>
                                    <td class="px-6 py-4"> {{ $item->tgl_sewa }} </td>
                                    <td class="px-6 py-4"> {{ $item->tgl_pengembalian }} </td>
                                    <td class="px-6 py-4"> {{ $item->lama_sewa }} Hari</td>
                                    <td class="px-6 py-4">Rp. {{ number_format($item->total_bayar, 0, ',', '.') }}</td>
                                    <td class="px-6 py-4">
                                        @if ($item->status == '1')
                                            <div class="bg-secondary text-white p-1 rounded text-center"
                                                style="width: 80px;">
                                                Pending</div>
                                        @elseif($item->status == '2')
                                            <div class="bg-warning text-white p-1 rounded text-center" style="width: 80px;">
                                                Sedang Disewa</div>
                                        @elseif($item->status == '3')
                                            <div class="bg-success text-white p-1 rounded text-center" style="width: 80px;">
                                                Selesai</div>
                                        @else
                                            <div class="bg-danger text-white p-1 rounded text-center" style="width: 80px;">
                                                Ditolak</div>
                                        @endif
                                    </td>
                                    <td style="width: 200px;">
                                        <button type="button" class="btn btn-info btn-sm text-white mb-1"
                                            data-bs-toggle="modal" data-bs-target="#buktiBayar{{ $item->id }}">
                                            Bukti Bayar
                                        </button>
                                        @if ($item->status == '2')
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#pengembalianMobil{{ $item->id }}">Pengembalian
                                                Mobil</button>
                                        @endif
                                    </td>
                                </tr>
                                <div class="modal fade" id="pengembalianMobil{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="/admin/transaksi/{{ $item->id }}/prosesPengembalian"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Pengembalian Mobil
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div style="font-size: 13px;" class="">Nama Lengkap</div>
                                                    <input type="text" class="form-control form-control-sm mb-2"
                                                        value="{{ $item->penyewa->user->name }}" disabled>
                                                    <div style="font-size: 13px;" class="">No Telepon/Whatsapp</div>
                                                    <input type="text" class="form-control form-control-sm mb-2"
                                                        value="{{ $item->penyewa->no_telepon }}" disabled>
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <div style="font-size: 13px;" class="">Tgl Sewa</div>
                                                            <input type="text" class="form-control mb-2"
                                                                value="{{ $item->tgl_sewa }}" disabled>
                                                        </div>
                                                        <div class="col-sm">
                                                            <div style="font-size: 13px;" class="">Tgl Pengembalian
                                                            </div>
                                                            <input type="text" class="form-control mb-2"
                                                                value="{{ $item->tgl_pengembalian }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-success text-white">Ya,
                                                        Mobil Sudah Dikembalikan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal fade" id="buktiBayar{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Bukti Bayar
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div style="font-size: 13px;" class="">Nama Lengkap</div>
                                                <input type="text" class="form-control form-control-sm mb-2"
                                                    value="{{ $item->penyewa->user->name }}" disabled>
                                                <div style="font-size: 13px;" class="">No Telepon/Whatsapp</div>
                                                <input type="text" class="form-control form-control-sm mb-2"
                                                    value="{{ $item->penyewa->no_telepon }}" disabled>
                                                <div style="font-size: 13px;" class="">Alamat</div>
                                                <input type="text" class="form-control form-control-sm mb-2"
                                                    value="{{ $item->penyewa->alamat }}" disabled>
                                                <img src="{{ $item->buktiBayar() }}" class="img-fluid rounded"
                                                    alt="Bukti Bayar">
                                            </div>
                                            <div class="modal-footer">
                                                <form action="/admin/transaksi/{{ $item->id }}/prosesTolak"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @if ($item->status == '1')
                                                        <button type="submit"
                                                            class="btn btn-danger text-white">Tolak</button>
                                                    @endif
                                                </form>
                                                <form action="/admin/transaksi/{{ $item->id }}/prosesBuktiBayar"
                                                    method="POST" enctype="multipart/form-data">
                                                    <input type="text" hidden name="email"
                                                        value="{{ $item->penyewa->user->email }}">
                                                    <input type="text" hidden name="name"
                                                        value="{{ $item->penyewa->user->name }}">
                                                    <input type="text" hidden name="tgl_pengembalian"
                                                        value="{{ $item->tgl_pengembalian }}">
                                                    @csrf
                                                    @if ($item->status == '1')
                                                        <button type="submit" class="btn btn-success text-white">Ya,
                                                            Sudah
                                                            Bayar</button>
                                                    @endif
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#transaksi').DataTable();
        });
    </script>
@endsection
