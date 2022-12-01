    <x-slot name="header">
    @include('template.navbar-admin')
</x-slot>

<div class="py-10">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8" >
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4" style="overflow-x-auto">
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
                @include('livewire.Participant.create')
            @endif


            <table class="min-w-full divide-y divide-gray-200"  >
                <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                    <tr class="bg-white-100">
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">No</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Email</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Nama</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Gender</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Division</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Phone Number</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">University</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Photo</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Proposal</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Recommendation Letter</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">CV</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">transcripts</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200">
                    @forelse($participants as $key => $row)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $participants->firstItem() + $key }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $row->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $row->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $row->gender }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $row->division }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $row->phone }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $row->university }}</td>
                            <td class="px-6 py-4 whitespace-nowrap"><img class="" src="{{  asset('storage')}}/{{ ($row->photo)}}" ></td>
                            <td class="px-6 py-4 whitespace-nowrap"> <a href="{{ Storage::url($row->proposal) }}">{{ $row->name  }}.pdf</td>
                            <td class="px-6 py-4 whitespace-nowrap"><a href="{{ Storage::url($row->recommendation_letter) }}">{{ $row->name  }}.pdf</td>
                            <td class="px-6 py-4 whitespace-nowrap"><a href="{{ Storage::url($row->CV) }}">{{ $row->name  }}.pdf</td>
                            <td class="px-6 py-4 whitespace-nowrap"><a href="{{ Storage::url($row->transcripts) }}">{{ $row->name  }}.pdf</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $row->status }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
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
        </div>

    </div>
    <div >
        {{ $participants -> links() }}
    </div>
</div>
