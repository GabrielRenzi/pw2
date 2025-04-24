<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tipo Contatos') }}
        </h2>
        <br>
        <div class="mb-4">
            <a href="{{ route('tipocontatos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Novo Tipo de Contato
            </a>
        </div>

</x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($tipocontatos as $tipocontato)
                        <div class="mb-4">
                            <a href="{{ route('tipocontatos.show', $tipocontato->id) }}" class="hover:bg-blue-900 hover:white hover:text-white rounded-md px-2 py-1">
                            <strong>{{ $tipocontato->nome }}</strong></a>
                            &nbsp;-&nbsp;
                            <a href="{{ url("tipocontatos") }}/{{ $tipocontato->id }}/edit" class="bg-green-700 hover:bg-green-900 text-white font-bold py-1 px-2 rounded">Alterar</a>
                            &nbsp;-&nbsp;
                            <span class="bg-red-700 hover:bg-red-900 text-white font-bold py-1 px-2 rounded cursor-pointer"
                            onclick="document.getElementById('form-tipocontatos-excluir-{{$tipocontato->id}}').submit()">Excluir</span>
                            <form id="form-tipocontatos-excluir-{{$tipocontato->id}}" action="{{route('tipocontatos.destroy',$tipocontato->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>