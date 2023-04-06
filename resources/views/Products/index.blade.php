@extends('layouts.app')
@section('title', 'Product Index Page')
@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
@endsection
@section('content')
    {{-- @auth --}}
    <a href="{{ route('products.create') }}"type="buttons" class="btn btn-primary">Tambah</a>
    {{-- @endauth --}}
    <table id="exampleTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stocks</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->stocks }}</td>
                    <td class="d-flex">
                        <a href="{{ route('products.edit', $item->id) }}" type="buttons" class="btn btn-info">Edit</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#exampleTable').DataTable();
        });
    </script>
@endsection
