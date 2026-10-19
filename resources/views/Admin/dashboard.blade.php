@extends('layouts.admin')

@section('title', 'Dashboard | Diamond Group')

@section('content')
    <div class="mb-7 flex flex-wrap items-end justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold tracking-tight text-slate-900">Dashboard</h1>
            <p class="mt-1 text-slate-600">Welcome back, {{ auth()->user()->name ?? 'Admin' }}. Here's your overview.</p>
        </div>
        <span class="rounded-lg border border-slate-200 bg-white px-4 py-2 text-sm text-slate-600">{{ now()->format('d M Y') }}</span>
    </div>
    <div class="mb-7 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
        @foreach ([
            ['Total users', '1,248', '+12%', 'text-blue-700'],
            ['Total orders', '856', '+18%', 'text-emerald-700'],
            ['Total revenue', '$24,780', '+22%', 'text-amber-700'],
            ['Pending orders', '42', '-5%', 'text-red-700'],
        ] as [$label, $value, $change, $tone])
            <article class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-slate-200">
                <p class="text-sm font-medium text-slate-500">{{ $label }}</p>
                <p class="mt-3 text-3xl font-bold tracking-tight text-slate-900">{{ $value }}</p>
                <p class="mt-2 text-sm {{ $tone }}">{{ $change }} <span class="text-slate-500">vs last month</span></p>
            </article>
        @endforeach
    </div>
    <div class="grid gap-6 xl:grid-cols-3">
        <section class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 xl:col-span-2">
            <div class="mb-5 flex items-center justify-between">
                <h2 class="font-bold text-slate-900">Sales overview</h2>
                <span class="rounded-full bg-cyan-100 px-3 py-1 text-xs font-semibold text-cyan-900">This year</span>
            </div>
            <div class="h-72"><canvas id="salesChart" aria-label="Sales overview chart" role="img"></canvas></div>
        </section>
        <section class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
            <h2 class="font-bold text-slate-900">Recent activity</h2>
            <ul class="mt-4 divide-y divide-slate-100">
                @foreach ([
                    ['New user registered', 'A new account was created.'],
                    ['New order received', 'A new order was placed.'],
                    ['Settings updated', 'System settings changed.'],
                    ['New message', 'You have a new message.'],
                ] as [$activity, $detail])
                    <li class="py-4">
                        <p class="font-semibold text-slate-800">{{ $activity }}</p>
                        <p class="mt-1 text-sm text-slate-500">{{ $detail }}</p>
                    </li>
                @endforeach
            </ul>
        </section>
        <section class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 xl:col-span-3">
            <h2 class="mb-4 font-bold text-slate-900">Recent users</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-slate-200 text-left text-sm">
                    <thead class="text-xs uppercase tracking-wide text-slate-500">
                        <tr><th class="py-3 pr-4">Name</th><th class="py-3 pr-4">Email</th><th class="py-3 pr-4">Status</th><th class="py-3">Role</th></tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr><td class="py-3 pr-4 font-medium">John Doe</td><td class="py-3 pr-4">john@example.com</td><td class="py-3 pr-4"><span class="rounded-full bg-emerald-100 px-2.5 py-1 text-xs font-semibold text-emerald-800">Active</span></td><td class="py-3">User</td></tr>
                        <tr><td class="py-3 pr-4 font-medium">Sarah Smith</td><td class="py-3 pr-4">sarah@example.com</td><td class="py-3 pr-4"><span class="rounded-full bg-emerald-100 px-2.5 py-1 text-xs font-semibold text-emerald-800">Active</span></td><td class="py-3">Editor</td></tr>
                        <tr><td class="py-3 pr-4 font-medium">Michael Brown</td><td class="py-3 pr-4">michael@example.com</td><td class="py-3 pr-4"><span class="rounded-full bg-amber-100 px-2.5 py-1 text-xs font-semibold text-amber-800">Pending</span></td><td class="py-3">User</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="mt-4 text-xs text-slate-500">Sample dashboard data — connect your database to display real records.</p>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const chartCanvas = document.getElementById('salesChart');
        if (chartCanvas && window.Chart) {
            new Chart(chartCanvas, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Sales',
                        data: [3000, 5200, 4100, 7500, 6800, 9000, 6200, 10500, 9200, 13000, 11800, 15500],
                        borderColor: '#0891b2',
                        backgroundColor: 'rgba(8, 145, 178, 0.12)',
                        fill: true,
                        tension: 0.4,
                        pointRadius: 3,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: { y: { beginAtZero: true }, x: { grid: { display: false } } }
                }
            });
        }
    </script>
@endpush
