@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
    <section class="page-heading directory-heading">
        <div><span class="eyebrow">TEAM DIRECTORY</span><h1>User Accounts</h1><p>User records retrieved from the database through the <code>User</code> Eloquent model.</p></div>
        <div class="record-count"><strong>{{ $users->count() }}</strong><span>records</span></div>
    </section>

    <section class="table-card">
        <div class="table-top"><div><span class="eyebrow">TEAM ACCESS</span><h2>All users</h2></div><span class="table-caption">Database records</span></div>
        <div class="table-scroll">
            <table>
                <thead><tr><th>ID</th><th>Username</th><th>Full name</th></tr></thead>
                <tbody>
                    @if ($users->isEmpty())
                        <tr><td colspan="3" class="empty-state">No user records yet. Run <code>php artisan migrate --seed</code> to add the sample data.</td></tr>
                    @else
                        @foreach ($users as $user)
                            <tr>
                                <td><span class="role-tag">U-{{ str_pad((string) $user->id, 4, '0', STR_PAD_LEFT) }}</span></td>
                                <td><span class="role-tag">{{ $user->username }}</span></td>
                                <td><div class="person-cell"><span class="avatar avatar-blue">{{ strtoupper(substr($user->full_name, 0, 1)) }}</span><span><strong>{{ $user->full_name }}</strong></span></div></td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="table-foot">Showing {{ $users->count() }} user accounts</div>
    </section>
@endsection
