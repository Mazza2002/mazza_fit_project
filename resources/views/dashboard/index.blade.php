<x-layoutes>
        <div class="container mx-auto p-6 flex gap-10 W-full">
            <!-- Section pour les Bénéfices -->
            <div class="bg-gradient-to-r from-green-400 to-blue-500 text-white text-left p-6 rounded-lg shadow-lg mb-6 w-6/12">
                <h2 class="text-2xl font-bold mb-2">Total Bénéfices</h2>
                <p class="text-4xl">{{ $benifits }} MAD</p>
            </div>
        
            <!-- Section pour le Total des Clients -->
            <div class="bg-gradient-to-r from-yellow-400 to-yellow-600 text-white text-left p-6 rounded-lg shadow-lg mb-6  w-6/12">
                <h2 class="text-2xl font-bold mb-2">Total Clients</h2>
                <p class="text-4xl">{{ $client_total }} Clients</p>
            </div>
        </div>
        <h1 class="text-2xl font-bold mt-4 mb-2 text-center">Notre client dans par Mois</h1>
        <div id="chart"></div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Préparer les données
            const data = @json($clients);
            const months = data.map(client => client.month);
            const counts = data.map(client => client.count);

            // Configurer le graphique
            var options = {
                chart: {
                    type: 'line',
                    height: 350
                },
                series: [{
                    name: 'Nombre de Clients',
                    data: counts
                }],
                colors: ['#FF4500', '#FF69B4'],
                xaxis: {
                    categories: months.map(month => {
                        const date = new Date(0, month);
                        return date.toLocaleString('default', {
                            month: 'long'
                        }); // Convertir le numéro du mois en nom
                    })
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: ['#FF4500'], // Étiquettes de l'axe Y en orange
                        }
                    }
                },
                dataLabels: {
                    style: {
                        colors: ['#FF4500'], // Couleur des nombres au-dessus des points en orange
                    }
                }
            };

            // Créer le graphique
            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        });
    </script>
</x-layoutes>
