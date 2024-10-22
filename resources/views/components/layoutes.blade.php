<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <title>Dashboard Noir et Or</title>
</head>
<body class="bg-black text-white flex">

    <!-- Barre latérale -->
    <aside class="w-64 bg-black h-screen shadow-lg">
        <div class="p-6">
            <h1 class="text-2xl font-bold text-gold mb-6">Dashboard</h1>
            <nav>
                <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Gestion des clients</a>
                <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Gestion des employés</a>
                <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Gestion des programmes</a>
            </nav>
        </div>
    </aside>

    <!-- Contenu principal -->
    <main class="flex-1 p-10 bg-gray-900">
        {{$slot}}
    </main>

</body>
</html>
