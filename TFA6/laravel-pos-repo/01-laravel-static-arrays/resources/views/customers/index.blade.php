@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
    <section class="page-heading directory-heading">
        <div><span class="eyebrow">ACCOUNT DIRECTORY</span><h1>Customer Accounts</h1><p>Sample customers stored in a PHP array inside <code>CustomerController</code>.</p></div>
        <div class="record-count"><strong>{{ count($customers) }}</strong><span>sample records</span></div>
    </section>

    <section class="table-card">
        <div class="table-top"><div><span class="eyebrow">CUSTOMERS</span><h2>All customers</h2></div><span class="table-caption">Temporary static data</span></div>
        <div class="table-scroll">
            <table>
                <thead><tr><th>Customer</th><th>Contact</th><th>Phone</th><th>Loyalty points</th><th>Status</th></tr></thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td><div class="person-cell"><span class="avatar avatar-coral">{{ strtoupper(substr($customer['name'], 0, 1)) }}</span><span><strong>{{ $customer['name'] }}</strong><small>{{ $customer['id'] }}</small></span></div></td>
                            <td>{{ $customer['email'] }}</td>
                            <td>{{ $customer['phone'] }}</td>
                            <td><strong>{{ number_format($customer['loyalty_points']) }}</strong></td>
                            <td><span class="badge {{ $customer['status'] === 'Active' ? 'badge-active' : 'badge-inactive' }}">{{ $customer['status'] }}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="table-foot">Showing {{ count($customers) }} sample customer accounts</div>
    </section>
@endsection
