 @extends('layouts.admin')

 @section('content')
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.css" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.js"></script>
     <script type="text/javascript">
         jQuery(document).ready(function($) {
             $('#siteplan').DataTable();
         });
     </script>
     <div class="page-breadcrumb">
         <div class="row align-items-center">
             <div class="col-6">
                 <nav aria-label="breadcrumb">
                     <ol class="breadcrumb mb-0 d-flex align-items-center">
                         <li class="breadcrumb-item"><a href="" class="link"><i
                                     class="mdi mdi-home-outline fs-4"></i></a></li>
                         <li class="breadcrumb-item active" aria-current="page">Siteplan</li>
                     </ol>
                 </nav>
                 <h1 class="mb-0 fw-bold">Siteplan</h1>
             </div>
             <div class="col-6">
                 <div class="text-end upgrade-btn">
                     <a href="/admin/project/{{ $project->id }}/siteplan/create" class="btn btn-primary text-white">Tambah
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
                     <table class="table" id="siteplan">
                         <thead>
                             <tr>
                                 <th scope="col" class="px-6 py-3">No</th>
                                 <th scope="col" class="px-6 py-3">Kode</th>
                                 <th scope="col" class="px-6 py-3">Luas</th>
                                 <th scope="col" class="px-6 py-3">Aksi</th>
                             </tr>
                         </thead>
                         <tbody>
                             @php
                                 $no = 1;
                             @endphp
                             @foreach ($siteplan as $item)
                                 <tr class="">
                                     <td class="px-6 py-4">{{ $no++ }}</td>
                                     <td class="px-6 py-4">{{ $item->kode }}</td>
                                     <td class="px-6 py-4">{{ $item->luas }}</td>
                                     <td class="">
                                         <form class=""
                                             action="/admin/project/{{ $project->id }}/siteplan/{{ $item->id }}/delete"
                                             method="post">
                                             @method('delete')
                                             @csrf
                                             <a href="/admin/project/{{ $project->id }}/siteplan/{{ $item->id }}/edit"
                                                 class="btn btn-warning text-white btn-sm">Edit</a>
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
