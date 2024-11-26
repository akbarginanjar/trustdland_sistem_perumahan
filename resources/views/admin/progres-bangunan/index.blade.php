 @extends('layouts.admin')

 @section('content')
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.css" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.js"></script>
     <script type="text/javascript">
         jQuery(document).ready(function($) {
             $('#progres-bangunan').DataTable();
         });
     </script>
     <div class="page-breadcrumb">
         <div class="row align-items-center">
             <div class="col-6">
                 <nav aria-label="breadcrumb">
                     <ol class="breadcrumb mb-0 d-flex align-items-center">
                         <li class="breadcrumb-item"><a href="" class="link"><i
                                     class="mdi mdi-home-outline fs-4"></i></a></li>
                         <li class="breadcrumb-item active" aria-current="page">Progres Bangunan</li>
                     </ol>
                 </nav>
                 <h1 class="mb-0 fw-bold">Progres Bangunan</h1>
             </div>
             <div class="col-6">
                 <div class="text-end upgrade-btn">
                     <a href="/admin/bangunan/{{ $bangunan->id }}/progres-bangunan/create"
                         class="btn btn-primary text-white">Tambah
                         Baru</a>
                 </div>
             </div>
         </div>
     </div>

     <div class="container-fluid">
         @if (session('success'))
             <div class="alert alert-success alert-dismissible fade show" role="alert">
                 {{ session('success') }}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
         @endif
         <div class="card">
             <div class="card-body">
                 <div class="table-responsive">
                     <table class="table" id="progres-bangunan">
                         <thead>
                             <tr>
                                 <th scope="col" class="px-6 py-3">No</th>
                                 <th scope="col" class="px-6 py-3">Foto</th>
                                 <th scope="col" class="px-6 py-3">Video</th>
                                 <th scope="col" class="px-6 py-3">Tanggal Laporan</th>
                                 <th scope="col" class="px-6 py-3">Keterangan</th>
                                 <th scope="col" class="px-6 py-3">Aksi</th>
                             </tr>
                         </thead>
                         <tbody>
                             @php
                                 $no = 1;
                             @endphp
                             @foreach ($progresBangunan as $item)
                                 <tr class="">
                                     <td class="px-6 py-4">{{ $no++ }}</td>
                                     <td class="px-6 py-4">
                                         <a href="{{ $item->foto() }}" target="_blank">
                                             <img src="{{ $item->foto() }}" class="rounded"
                                                 style="width: 80px; height: 50px; object-fit: cover;" alt="">
                                         </a>
                                     </td>
                                     <td class="px-6 py-4">
                                         @if ($item->video)
                                             <a href="{{ $item->video }}" target="_blank" class="btn btn-secondary btn-sm">
                                                 <i class="fa-solid fa-circle-play me-1"></i> Lihat Video
                                             </a>
                                         @else
                                             <span>Tidak ada video.</span>
                                         @endif
                                     </td>
                                     <td class="px-6 py-4">{{ $item->tgl_laporan }}</td>
                                     <td class="px-6 py-4">{{ $item->keterangan }}</td>
                                     <td class="">
                                         <form
                                             action="/admin/bangunan/{{ $bangunan->id }}/progres-bangunan/{{ $item->id }}/delete"
                                             method="post">
                                             @method('delete')
                                             @csrf
                                             <a href="/admin/bangunan/{{ $bangunan->id }}/progres-bangunan/{{ $item->id }}/edit"
                                                 class="btn btn-warning text-white btn-sm">Edit</a>
                                             <button type="submit" class="btn btn-outline-danger btn-sm"
                                                 onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                 Delete
                                             </button>
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
