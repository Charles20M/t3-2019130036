@extends('books.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 align="center"><strong>Database CRUD Buku</strong></h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Book</a>
            </div>
            <br>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Judul</th>
            <th>Halaman</th>
            <th>Kategori</th>
            <th>Penerbit</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->halaman }}</td>
            <td>{{ $book->kategori }}</td>
            <td>{{ $book->penerbit }}</td>
            <td>
                <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $books->links() !!}

@endsection
