
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid py-4 bg-light min-vh-100">

    <!-- Page Heading -->
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Dashboard</h2>
            <p class="text-secondary mb-0">
                Welcome back! Here's your dashboard overview.
            </p>
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>

    <!-- Statistics Cards -->
    <div class="row g-3 mb-4">

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 border-start border-primary border-4 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-secondary mb-2">Total Users</p>
                    <h3 class="fw-bold">1,250</h3>
                    <span class="text-success small">↑ 12% since last month</span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 border-start border-success border-4 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-secondary mb-2">Total Orders</p>
                    <h3 class="fw-bold">856</h3>
                    <span class="text-success small">↑ 8% since last month</span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 border-start border-warning border-4 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-secondary mb-2">Total Revenue</p>
                    <h3 class="fw-bold">$12,500</h3>
                    <span class="text-success small">↑ 15% since last month</span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 border-start border-danger border-4 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-secondary mb-2">Open Tickets</p>
                    <h3 class="fw-bold">75</h3>
                    <span class="text-danger small">Needs attention</span>
                </div>
            </div>
        </div>

    </div>

    <!-- Main Dashboard Sections -->
    <div class="row g-4">

        <!-- Sales Overview -->
        <div class="col-12 col-xl-7">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold">Sales Overview</h5>
                    <a href="#" class="text-decoration-none">View Report</a>
                </div>

                <div class="card-body">
                    <div class="row g-3 align-items-end text-center"
                         style="height: 260px;">

                        @foreach([
                            ['month' => 'Jan', 'height' => 25],
                            ['month' => 'Feb', 'height' => 48],
                            ['month' => 'Mar', 'height' => 38],
                            ['month' => 'Apr', 'height' => 55],
                            ['month' => 'May', 'height' => 72],
                            ['month' => 'Jun', 'height' => 62],
                            ['month' => 'Jul', 'height' => 90],
                            ['month' => 'Aug', 'height' => 100]
                        ] as $item)

                            <div class="col">
                                <div class="bg-primary rounded-top mx-auto"
                                     style="height: {{ $item['height'] }}%; min-height: 10px; max-width: 40px;">
                                </div>

                                <small class="text-secondary d-block mt-2">
                                    {{ $item['month'] }}
                                </small>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="col-12 col-xl-5">
            <div class="card border-0 shadow-sm h-100">

                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-bold">Recent Activity</h5>
                </div>

                <div class="card-body">

                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="rounded-circle bg-primary-subtle text-primary p-3 fw-bold">U</div>
                        <div>
                            <div class="fw-semibold">New user registered</div>
                            <small class="text-secondary">John Smith · 2 hours ago</small>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="rounded-circle bg-success-subtle text-success p-3 fw-bold">O</div>
                        <div>
                            <div class="fw-semibold">New order placed</div>
                            <small class="text-secondary">Order #1234 · 4 hours ago</small>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="rounded-circle bg-warning-subtle text-warning p-3 fw-bold">C</div>
                        <div>
                            <div class="fw-semibold">New comment received</div>
                            <small class="text-secondary">6 hours ago</small>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle bg-danger-subtle text-danger p-3 fw-bold">✓</div>
                        <div>
                            <div class="fw-semibold">Support ticket resolved</div>
                            <small class="text-secondary">8 hours ago</small>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Recent Orders -->
        <div class="col-12 col-xl-8">
            <div class="card border-0 shadow-sm">

                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-bold">Recent Orders</h5>
                </div>

                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>#1234</td>
                                    <td>John Doe</td>
                                    <td>$250.00</td>
                                    <td><span class="badge text-bg-success">Completed</span></td>
                                </tr>

                                <tr>
                                    <td>#1235</td>
                                    <td>Jane Smith</td>
                                    <td>$180.00</td>
                                    <td><span class="badge text-bg-primary">Processing</span></td>
                                </tr>

                                <tr>
                                    <td>#1236</td>
                                    <td>Robert Johnson</td>
                                    <td>$320.00</td>
                                    <td><span class="badge text-bg-warning">Pending</span></td>
                                </tr>

                                <tr>
                                    <td>#1237</td>
                                    <td>Emily Davis</td>
                                    <td>$150.00</td>
                                    <td><span class="badge text-bg-success">Completed</span></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-12 col-xl-4">
            <div class="card border-0 shadow-sm h-100">

                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-bold">Quick Actions</h5>
                </div>

                <div class="card-body">
                    <p class="text-secondary">Choose an action to get started.</p>

                    <div class="d-grid gap-3">
                        <a href="#" class="btn btn-primary">
                            + Add User
                        </a>

                        <a href="#" class="btn btn-success">
                            + Create Order
                        </a>

                        <a href="{{ url('/index2') }}" class="btn btn-outline-primary">
                            Open Dashboard v2
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
