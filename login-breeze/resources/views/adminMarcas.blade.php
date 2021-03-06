<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel de administración de marcas.
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <table class="w-auto">
                        <thead>
                            <tr>
                                <th>id</th>
                            </tr>
                            <tr>
                                <th>Marca</th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach( $marcas as $marca )
                            <tr>
                                <td>
                                    {{ $marca->idMarca }}
                                </td>
                                <td>
                                    {{ $marca->mkNombre }}
                                </td>
                            </tr>
                    @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
