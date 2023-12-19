<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Listagem de produtos</title>
</head>
<body class="bg-gray-100 flex flex-col items-center justify-center h-screen">

    <h1 class="bg-black text-black text-xl font-bold p-4 mb-4">Listagem de produtos</h1>

    <div class="max-w-3xl mx-auto">
        <table class="min-w-full bg-white border border-gray-300 shadow-sm rounded-md overflow-hidden">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nome</th>
                    <th class="py-2 px-4 border-b">Preço</th>
                    <th class="py-2 px-4 border-b">Altura</th>
                    <th class="py-2 px-4 border-b">Largura</th>
                    <th class="py-2 px-4 border-b">Comprimento</th>
                    <th class="py-2 px-4 border-b">Peso</th>
                    <th class="py-2 px-4 border-b">...</th>
                    <th class="py-2 px-4 border-b">...</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produto as $produtos)
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-4 border-b">{{ $produtos->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $produtos->nome }}</td>
                    <td class="py-2 px-4 border-b">{{ $produtos->preco }}</td>
                    <td class="py-2 px-4 border-b">{{ $produtos->altura }}</td>
                    <td class="py-2 px-4 border-b">{{ $produtos->largura }}</td>
                    <td class="py-2 px-4 border-b">{{ $produtos->comprimento }}</td>
                    <td class="py-2 px-4 border-b">{{ $produtos->peso }}</td>
                    <td class="py-2 px-4 border-b"><a href="{{ route('edit', ['id'=>$produtos->id]) }}" ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
</svg>
</a></td>
                    <td class="py-2 px-4 border-b"><a href="{{ route('excluir_produto', ['id'=>$produtos->id]) }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
</svg>
</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
       
       

    </div>
    
    <a href="{{ route('novo') }}" class="text-blue-500">Novo Produto</a>



</body>
</html>
