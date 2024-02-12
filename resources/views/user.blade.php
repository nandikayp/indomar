    @extends('layout.main')
    @section('container')
        {{-- Modal Tambah --}}

        <!-- Modal toggle -->

        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
            class="block mb-5 font-poppins text-white bg-blue-800 mt-3  hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            Add User
        </button>

        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">


                <!-- Modal content -->
                <div class="relative bg-blue-800  rounded-lg shadow dark:bg-gray-700">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-slate-50 dark:text-white">Tambahkan User</h3>
                        <form enctype="multipart/form-data" class="space-y-6" action="/user/storeinput" method="post">
                            @csrf
                            <div>
                                <label for="nama"
                                    class="block mb-2 ms-1  text-sm font-medium text-slate-100 dark:text-white">Nama
                                </label>
                                <input type="text" name="nama" id="nama"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>
                            </div>
                            <div>
                                <label for="telepon"
                                    class="block mb-2 ms-1  text-sm font-medium text-slate-100 dark:text-white">No
                                    Telepon</label>
                                <input type="text" name="telepon" id="telepon"
                                    class="bg-gray-50 mb-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>
                            </div>
                            <div>
                                <label for="alamat1"
                                    class="block mb-2 ms-1  text-sm font-medium text-slate-100 dark:text-white">Alamat
                                    1</label>
                                <input type="text" name="alamat1" id="alamat1"
                                    class="bg-gray-50 mb-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>
                            </div>
                            <div>
                                <label for="alamat2"
                                    class="block mb-2 ms-1  text-sm font-medium text-slate-100 dark:text-white">Alamat
                                    2</label>
                                <input type="text" name="alamat2" id="alamat2"
                                    class="bg-gray-50 mb-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>
                            </div>
                            <div>
                                <label for="kodepos"
                                    class="block mb-2 ms-1  text-sm font-medium text-slate-100 dark:text-white">Kode
                                    Pos</label>
                                <input type="number" name="kodepos" id="kodepos"
                                    class="bg-gray-50 mb-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>
                            </div>
                            <div>
                                <label for="email"
                                    class="block mb-2 ms-1  text-sm font-medium text-slate-100 dark:text-white">Email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 mb-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 ms-1  text-sm font-medium text-slate-100 dark:text-white">Password</label>
                                <input type="password" name="password" id="password"
                                    class="bg-gray-50 mb-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>
                            </div>

                            <button type="submit"
                                class="w-full text-slate-900 bg-slate-50 hover:bg-slate-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>




        {{-- Tabel Kategori --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-slate-700 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-slate-50">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3 text-slate-50">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3 text-slate-50">
                            Telepon
                        </th>
                        <th scope="col" class="px-6 py-3 text-slate-50">
                            Alamat 1
                        </th>
                        <th scope="col" class="px-6 py-3 text-slate-50">
                            Alamat 2
                        </th>
                        <th scope="col" class="px-6 py-3 text-slate-50">
                            Kode Pos
                        </th>
                        <th scope="col" class="px-6 py-3 text-slate-50">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-slate-50">
                            Password
                        </th>
                        <th scope="col" class="ps-20 py-3  text-slate-50">
                            Option
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $b)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-blue-800 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 font-mediu m font-poppins py-4">
                                {{ $b->nama }}
                            </td>
                            <td class="px-6 font-poppins font-medium text-blue-700 py-4">
                                {{ $b->telepon }}
                            </td>
                            <td class="px-6 font-poppins font-medium text-slate-900 py-4">
                                {{ $b->alamat1 }}
                            </td>
                            <td class="px-6 font-poppins font-medium text-slate-900 py-4">
                                {{ $b->alamat2 }}
                            </td>
                            <td class="px-6 font-poppins font-medium text-slate-900 py-4">
                                {{ $b->kodepos }}
                            </td>
                            <td class="px-6 font-poppins font-medium text-slate-900 py-4">
                                {{ $b->email }}
                            </td>
                            <td class="px-6 font-poppins font-medium text-slate-900 py-4">
                                {{ $b->password }}
                            </td>
                            <td class=" py-4 flex ">
                                <button type="button" data-modal-target="authentication-modal{{ $b->userID }}"
                                    data-modal-toggle="authentication-modal{{ $b->userID }}"
                                    class="bg-green-600 text-slate-50 font-poppins font-light hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800  rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Update</button>
                                <form class="inline-block" action="/user/delete/{{ $b->userID }}" method="get">
                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('Apakah Ingin Menghapus')" type="submit"
                                        class="text-white bg-red-700 font-poppins font-light hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800  rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delete</button>
                                </form>
                            </td>
                        </tr>



                        {{-- Update --}}

                        <!-- Main modal -->

                        <div id="authentication-modal{{ $b->userID }}" tabindex="-1" aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">

                                <!-- Modal content -->

                                <div class="relative bg-blue-700 rounded-lg shadow dark:bg-gray-700">
                                    <button type="button"
                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="authentication-modal{{ $b->userID }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-slate-50 dark:text-white">Update User
                                        </h3>
                                        <form class="space-y-6" action="/user/storeupdate" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $b->userID }}">
                                            <div>
                                                <label for="nama"
                                                    class="block mb-2 mt-2 text-sm font-medium text-slate-50 dark:text-white">Nama
                                                </label>
                                                <input type="text" value="{{ $b->nama }}" name="nama"
                                                    id="nama"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                            <div>
                                                <label for="telepon"
                                                    class="block mb-2 mt-2 text-sm font-medium text-slate-50 dark:text-white">No
                                                    Telepon
                                                </label>
                                                <input type="text" value="{{ $b->telepon }}" name="telepon"
                                                    id="telepon"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                            <div>
                                                <label for="alamat1"
                                                    class="block mb-2 mt-2 text-sm font-medium text-slate-50 dark:text-white">Alamat
                                                    1
                                                </label>
                                                <input type="text" value="{{ $b->alamat1 }}" name="alamat1"
                                                    id="alamat1"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                            <div>
                                                <label for="alamat2"
                                                    class="block mb-2 mt-2 text-sm font-medium text-slate-50 dark:text-white">Alamat
                                                    2
                                                </label>
                                                <input type="text" value="{{ $b->alamat2 }}" name="alamat2"
                                                    id="alamat2"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                            <div>
                                                <label for="kodepos"
                                                    class="block mb-2 mt-2 text-sm font-medium text-slate-50 dark:text-white">Kode
                                                    Pos
                                                </label>
                                                <input type="number" value="{{ $b->kodepos }}" name="kodepos"
                                                    id="kodepos"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                            <div>
                                                <label for="email"
                                                    class="block mb-2 mt-2 text-sm font-medium text-slate-50 dark:text-white">Email
                                                </label>
                                                <input type="email" value="{{ $b->email }}" name="email"
                                                    id="email"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                            <div>
                                                <label for="password"
                                                    class="block mb-2 mt-2 text-sm font-medium text-slate-50 dark:text-white">Jumlah
                                                </label>
                                                <input type="password" value="{{ $b->password }}" name="password"
                                                    id="password"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                                <button type="submit"
                                                    class="w-full mt-6 mb-3 text-slate-800 bg-white hover:bg-slate-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
        </div>
        @endforeach
        </tbody>
        </table>
        </div>
    @endsection
