@extends('layouts.admin')

@section('title', 'Contract Messages | Diamond Group')

@section('content')
    <div class="mb-6 flex flex-wrap items-end justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold tracking-tight text-slate-900">Contract messages</h1>
            <p class="mt-1 text-slate-600">View and manage messages submitted through the contact form.</p>
        </div>
        <span class="rounded-full bg-cyan-100 px-4 py-2 text-sm font-semibold text-cyan-900">Total: {{ $contracts->total() }} messages</span>
    </div>
    @if (session('success'))
        <div role="status" class="mb-5 rounded-lg border border-emerald-200 bg-emerald-50 p-4 text-emerald-800">{{ session('success') }}</div>
    @endif
    <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200 text-left text-sm">
                <thead class="bg-slate-50 text-xs uppercase tracking-wide text-slate-500">
                    <tr>
                        <th scope="col" class="px-4 py-4">#</th>
                        <th scope="col" class="px-4 py-4">Name</th>
                        <th scope="col" class="px-4 py-4">Email</th>
                        <th scope="col" class="px-4 py-4">Subject</th>
                        <th scope="col" class="px-4 py-4">Message</th>
                        <th scope="col" class="px-4 py-4">Submitted</th>
                        <th scope="col" class="px-4 py-4">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($contracts as $contract)
                        <tr class="align-top hover:bg-slate-50">
                            <td class="whitespace-nowrap px-4 py-4 text-slate-500">{{ $contracts->firstItem() + $loop->index }}</td>
                            <td class="whitespace-nowrap px-4 py-4 font-semibold text-slate-900">{{ $contract->name }}</td>
                            <td class="px-4 py-4"><a href="mailto:{{ $contract->email }}" class="text-cyan-800 hover:underline">{{ $contract->email }}</a></td>
                            <td class="px-4 py-4 text-slate-700">{{ $contract->subject }}</td>
                            <td class="max-w-sm whitespace-normal px-4 py-4 text-slate-600">{{ $contract->message }}</td>
                            <td class="whitespace-nowrap px-4 py-4 text-slate-600">{{ $contract->created_at->format('d M Y, h:i A') }}</td>
                            <td class="whitespace-nowrap px-4 py-4">
                                <form action="{{ route('contractsTable.destroy', $contract) }}" method="POST" onsubmit="return confirm('Delete this contract message?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded-lg bg-red-50 px-3 py-2 font-semibold text-red-700 transition hover:bg-red-100">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-14 text-center">
                                <p class="font-semibold text-slate-800">No contract messages yet</p>
                                <p class="mt-1 text-slate-500">New messages will appear here when submitted.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if ($contracts->hasPages())
            <div class="border-t border-slate-200 px-4 py-4">{{ $contracts->links() }}</div>
        @endif
    </div>
@endsection
