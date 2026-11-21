@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
    <section class="page-heading directory-heading">
        <div><span class="eyebrow">ACCOUNT DIRECTORY</span><h1>Customer Accounts</h1><p>Customer records retrieved from the database through the <code>Customer</code> Eloquent model.</p></div>
        <div class="record-count"><strong>{{ $customers->count() }}</strong><span>records</span></div>
    </section>

    <section class="table-card">
        <div class="table-top"><div><span class="eyebrow">CUSTOMERS</span><h2>All customers</h2></div><span class="table-caption">Database records</span></div>
        <div class="table-scroll">
            <table>
                <thead><tr><th>ID</th><th>Customer</th><th>Email</th><th>Phone</th></tr></thead>
                <tbody>
                    @if ($customers->isEmpty())
                        <tr><td colspan="4" class="empty-state">No customer records yet. Run <code>php artisan migrate --seed</code> to add the sample data.</td></tr>
                    @else
                        @foreach ($customers as $customer)
                            <tr>
                                <td><span class="role-tag">C-{{ str_pad((string) $customer->id, 4, '0', STR_PAD_LEFT) }}</span></td>
                                <td><div class="person-cell"><span class="avatar avatar-coral">{{ strtoupper(substr($customer->full_name, 0, 1)) }}</span><span><strong>{{ $customer->full_name }}</strong></span></div></td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->phone }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="table-foot">Showing {{ $customers->count() }} customer accounts</div>
    </section>
@endsection
