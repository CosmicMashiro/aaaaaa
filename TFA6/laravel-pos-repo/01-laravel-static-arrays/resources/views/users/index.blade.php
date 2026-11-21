@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
    <section class="page-heading directory-heading">
        <div><span class="eyebrow">TEAM DIRECTORY</span><h1>User Accounts</h1><p>Sample team accounts stored in a PHP array inside <code>UserController</code>.</p></div>
        <div class="record-count"><strong>{{ count($users) }}</strong><span>sample records</span></div>
    </section>

    <section class="table-card">
        <div class="table-top"><div><span class="eyebrow">TEAM ACCESS</span><h2>All users</h2></div><span class="table-caption">Temporary static data</span></div>
        <div class="table-scroll">
            <table>
                <thead><tr><th>User</th><th>Email</th><th>Role</th><th>Status</th></tr></thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td><div class="person-cell"><span class="avatar avatar-blue">{{ strtoupper(substr($user['name'], 0, 1)) }}</span><span><strong>{{ $user['name'] }}</strong><small>{{ $user['id'] }}</small></span></div></td>
                            <td>{{ $user['email'] }}</td>
                            <td><span class="role-tag">{{ $user['role'] }}</span></td>
                            <td><span class="badge {{ $user['status'] === 'Active' ? 'badge-active' : 'badge-inactive' }}">{{ $user['status'] }}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="table-foot">Showing {{ count($users) }} sample user accounts</div>
    </section>
@endsection
