@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Anggota</h2>

    <!-- Form Pencarian -->
    <form action="{{ route('members.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari nama anggota..." value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
            <tr>
                <td>{{ $member->nama }}</td>
                <td>{{ $member->nim }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination dengan appends query search -->
    {{ $members->appends(request()->query())->links() }}
</div>
@endsection