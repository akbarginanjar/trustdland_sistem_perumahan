@extends('layouts.admin')


@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#penyewa').DataTable();
        });
    </script>
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="index.html" class="link"><i
                                    class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Penyewa</li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Penyewa</h1>
            </div>
            <div class="col-6">
                <!-- <div class="text-end upgrade-btn">
                                                        <a href="{{ route('user.create') }}" class="btn btn-primary text-white">Tambah Baru</a>
                                                    </div> -->
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="penyewa">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3">No</th>
                                <th scope="col" class="px-6 py-3">Name</th>
                                <th scope="col" class="px-6 py-3">Email</th>
                                <th scope="col" class="px-6 py-3">No telepon</th>
                                <th scope="col" class="px-6 py-3">Alamat</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($penyewa as $item)
                                <tr class="">
                                    <td class="px-6 py-4">{{ $no++ }}</td>
                                    <td class="px-6 py-4">{{ $item->user->name }}</td>
                                    <td class="px-6 py-4">{{ $item->user->email }}</td>
                                    <td class="px-6 py-4">{{ $item->no_telepon }}</td>
                                    <td class="px-6 py-4">{{ $item->alamat }}</td>
                                    <td class="">
                                        <form action="{{ route('penyewa.destroy', $item->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger btn-sm"
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
