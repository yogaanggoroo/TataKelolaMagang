<x-slot name="header">
</style>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Laporan Peserta
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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

            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded my-3">Create</button>

            @if($isModal)
                @include('livewire.report.create')
            @endif


            <table class="table-fixed w-full "  >
                <thead >
                    <tr class="bg-white-100">
                        <th >Email</th>
                        <th >Nama</th>
                        <th >Division</th>
                        <th >Date</th>
                        <th >LogBook</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody >
                    @forelse($reports as $row)
                        <tr>
                            <td class="border px-6 py-2">{{ $row->email }}</td>
                            <td class="border px-4 py-4">{{ $row->name }}</td>
                            <td class="border px-4 py-2">{{ $row->division }}</td>
                            <td class="border px-4 py-2">{{ $row->date }}</td>
                            <td class="border px-4 py-2">{{ $row->logbook }}</td>
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
        <div class="div">
            {{ $reports -> links() }}
        </div>
    </div>
</div>
