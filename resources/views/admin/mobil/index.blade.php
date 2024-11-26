@extends('layouts.admin')

@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#mobil').DataTable();
        });
    </script>
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="index.html" class="link"><i
                                    class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mobil</li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Mobil</h1>
            </div>
            <div class="col-6">
                <div class="text-end upgrade-btn">
                    <a href="{{ route('mobil.create') }}" class="btn btn-primary text-white">Tambah Baru</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="mobil">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3">No</th>
                                <th scope="col" class="px-6 py-3">Foto</th>
                                <th scope="col" class="px-6 py-3">Plat</th>
                                <th scope="col" class="px-6 py-3">Nomer mobil</th>
                                <th scope="col" class="px-6 py-3">merk</th>
                                <th scope="col" class="px-6 py-3">Jenis</th>
                                <th scope="col" class="px-6 py-3">Harga sewa</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($mobil as $item)
                                <tr class="bg-white border-b ">
                                    <td class="px-6 py-4">{{ $no++ }}</td>
                                    <td class="px-6 py-4"><img src="{{ $item->gambar() }}" width="100px;" alt="">
                                    </td>
                                    <td class="px-6 py-4">{{ $item->plat }}</td>
                                    <td class="px-6 py-4"> {{ $item->nomor_mobil }} </td>
                                    <td class="px-6 py-4"> {{ $item->merk }} </td>
                                    <td class="px-6 py-4"> {{ $item->jenis }} </td>
                                    <td class="px-6 py-4"> {{ $item->harga_sewa }} </td>
                                    <td class="px-6 py-4">
                                        @if ($item->status == 'Tersedia')
                                            <div class="bg-success text-white p-1 rounded text-center" style="width: 80px;">
                                                Tersedia</div>
                                        @else
                                            <div class="bg-primary text-white p-1 rounded text-center" style="width: 80px;">
                                                Sedang Disewa</div>
                                        @endif
                                    </td>
                                    <td style="width: 200px;">
                                        <form class="" action="{{ route('mobil.destroy', $item->id) }}"
                                            method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="{{ route('mobil.edit', $item->id) }}"
                                                class="btn btn-warning text-white btn-sm {{ $item->status != 'Tersedia' ? 'disabled' : '' }}">Edit</a>
                                            <button type="submit"
                                                class="btn btn-outline-danger btn-sm {{ $item->status != 'Tersedia' ? 'disabled' : '' }}"
                                                onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
