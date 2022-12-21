<x-slot name="header">
    @include('template.navbar-admin')
</x-slot>

<div class="py-12">
    <div data-aos="zoom-in" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4" style="overflow: auto; white-space: nowrap;">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <button wire:click="create()" class="bg-primary text-white font-bold py-2 px-4 rounded my-3">Tambah Project</button>

            @if($isModal)
                @include('livewire.assignment.create')
            @endif


            <table class="min-w-full divide-y divide-gray-200 "  >
                <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                    <tr class="bg-white-100">
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Email</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Nama</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Division</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Date</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Project Assignment</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody >
                    @forelse($assignments as $row)
                        <tr>
                            <td class="border px-6 py-2">{{ $row->email }}</td>
                            <td class="border px-4 py-4">{{ $row->name }}</td>
                            <td class="border px-4 py-2">{{ $row->division }}</td>
                            <td class="border px-4 py-2">{{ $row->date }}</td>
                            <td class="border px-4 py-2"><a href="{{ Storage::url($row->assignment) }}">Projek {{ $row->name }}</td>
                            <td class="border px-4 py-2">
                                <button wire:click.prevent="edit({{ $row->id }})"  class="btn btn-sm btn-success">Edit</button>
                                <button wire:click.prevent="delete({{ $row->id }})"  class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" data-bs-spy="scroll"  colspan="14">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card">
            {{ $assignments -> links() }}
        </div>
    </div>
</div>
