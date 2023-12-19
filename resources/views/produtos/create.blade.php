<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Cadastrar um novo Produto</title>
</head>
<body class="bg-gray-100 p-8 flex flex-col items-center justify-center h-screen">

    <h1 class="bg-black text-white text-xl font-bold p-4 mb-4">Novo Produto</h1>

    <form action="{{ route('registrar_produto') }}" method="POST" class="max-w-md bg-white p-8 rounded-md shadow-md">
        @csrf

        <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
        <input type="text" name="nome" class="w-full p-2 border rounded-md mb-4">

        <label for="preco" class="block text-sm font-medium text-gray-700 mb-1">Preço</label>
        <input type="text" name="preco" class="w-full p-2 border rounded-md mb-4">

        <label for="altura" class="block text-sm font-medium text-gray-700 mb-1">Altura</label>
        <input type="text" name="altura" class="w-full p-2 border rounded-md mb-4">

        <label for="largura" class="block text-sm font-medium text-gray-700 mb-1">Largura</label>
        <input type="text" name="largura" class="w-full p-2 border rounded-md mb-4">

        <label for="comprimento" class="block text-sm font-medium text-gray-700 mb-1">Comprimento</label>
        <input type="text" name="comprimento" class="w-full p-2 border rounded-md mb-4">

        <label for="peso" class="block text-sm font-medium text-gray-700 mb-1">Peso</label>
        <input type="text" name="peso" class="w-full p-2 border rounded-md mb-4">

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Salvar</button>
    </form>

</body>
</html>
