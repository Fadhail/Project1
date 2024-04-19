<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Navbar -->
    @include('components.navbar')
    <!-- Akhir Navbar -->

    <!-- Button Tambah -->
    <div class="my-8">
        <a href="{{ route('mahasiswa.create') }}" class="btn ml-2 px-4 py-2 font-medium text-white bg-green-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">Tambah Mahasiswa</a>
    </div>
    <!-- Akhir Button Tambah -->

    <!-- Table -->
    <div class="px-3 py-4 flex justify-center">
        <div class="overflow-x-auto w-full">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NPM</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jurusan</th>
                        <!-- <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th> -->
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $mahasiswa->npm }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $mahasiswa->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $mahasiswa->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $mahasiswa->kelas }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $mahasiswa->jurusan }}</td>
                        {{-- <td class="px-6 py-4 whitespace-nowrap">{{ $mahasiswa->created_at }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $mahasiswa->updated_at }}</td> --}}
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{-- <a href="{{ route('mahasiswa.show', $mahasiswa->npm) }}" class="btn px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">View</a> --}}
                            <a href="{{ route('mahasiswa.edit', $mahasiswa->npm) }}" class="btn px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Edit</a>
                            <form action="{{ route('mahasiswa.destroy', $mahasiswa->npm) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out" onclick="return confirm('Are you sure you want to delete this Mahasiswa?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Akhir Table -->

</body>
</html>
