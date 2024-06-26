<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-primary">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
            <div class="space-y-6 xl:flex xl:gap-6 xl:space-y-0">
                @if (abs(now()->diffInDays(auth()->user()->last_weight_recorded_at)) >= 7)
                    <div class="bg-card p-8 shadow-sm sm:rounded-lg">
                        <h3 class="text-2xl font-bold text-primary">Weekly Weight Measurement</h3>
                        <form method="post" action="{{ route('profile.storeMeasurement') }}" class="mt-6 space-y-6">
                            @csrf
                            <div class="space-y-4 sm:flex sm:gap-2 sm:space-y-0">
                                <div>
                                    <x-text-input id="weight" name="weight" type="number" class="block h-10 w-full sm:w-fit" placeholder="70" required />
                                </div>
                                <div>
                                    <x-primary-button class="h-10 w-full sm:w-fit">{{ __('Save') }}</x-primary-button>
                                </div>
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('weight')" />
                        </form>
                    </div>
                @endif

                <div class="space-y-6 md:flex md:gap-6 md:space-y-0">
                    <div class="h-full w-full items-center gap-4 space-y-4 overflow-hidden bg-card p-8 shadow-sm sm:flex sm:space-y-0 sm:rounded-lg">
                        <h3 class="text-5xl font-bold text-primary">{{ number_format($bmi['bmi'], 1) }}</h3>
                        <div>
                            <h4 class="font-bold text-foreground">{{ $bmi['category'] }}</h4>
                            <p class="text-foreground">{{ $bmi['message'] }}</p>
                        </div>
                    </div>
                    <div class="flex h-full gap-6 sm:space-y-0 md:block md:gap-0 md:space-y-6">
                        <div class="w-full items-center space-y-4 overflow-hidden bg-card p-8 shadow-sm sm:space-y-0 sm:rounded-lg">
                            <h3 class="text-3xl font-bold text-primary">{{ auth()->user()->height }}cm</h3>
                        </div>
                        <div class="w-full items-center space-y-4 overflow-hidden bg-card p-8 shadow-sm sm:space-y-0 sm:rounded-lg">
                            <h3 class="text-3xl font-bold text-primary">{{ auth()->user()->weight }}kg</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-hidden bg-card shadow-sm sm:rounded-lg">
                <div class="p-8">
                    <h1 class="pb-6 text-2xl font-bold text-primary">Weight Over Time</h1>
                    <canvas id="weightChart" width="800" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var ctx = document.getElementById('weightChart').getContext('2d');
        var weightData = {!! json_encode($weightData) !!};
        var dates = {!! json_encode($dates) !!};

        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: dates,
                datasets: [
                    {
                        data: weightData,
                        backgroundColor: 'black',
                        borderColor: 'rgba(34, 197, 94, 1)',
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    xAxes: [
                        {
                            type: 'time',
                            time: {
                                unit: 'week',
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Date',
                            },
                        },
                    ],
                    yAxes: [
                        {
                            scaleLabel: {
                                display: true,
                                labelString: 'Weight',
                            },
                        },
                    ],
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                },
            },
        });
    </script>
</x-app-layout>
