<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="flex gap-6">
                @if(abs(now()->diffInDays(auth()->user()->last_weight_recorded_at)) >= 7)
                    <div class="bg-card shadow-sm sm:rounded-lg p-8">
                        <h3 class="font-bold text-2xl text-primary">Weekly Weight Measurement</h3>
                        <form method="post" action="{{ route('profile.storeMeasurement') }}" class="mt-6 space-y-6">
                            @csrf
                            <div class="flex gap-2">
                                <div>
                                    <x-text-input id="weight" name="weight" type="number" class="block h-10" placeholder="70" required/>
                                </div>
                                <div>
                                    <x-primary-button class="h-10">{{ __('Save') }}</x-primary-button> 
                                </div>
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('weight')" />
                        </form>
                    </div>
                @endif
                <div class="bg-card overflow-hidden shadow-sm sm:rounded-lg p-8 flex items-center gap-4 w-full">
                    <h3 class="font-bold text-5xl text-primary">{{ number_format($bmi["bmi"], 1) }}</h3>
                    <div>
                        <h4 class="font-bold text-foreground">{{ $bmi["category"] }}</h4>
                        <p class="text-foreground">{{ $bmi["message"] }}</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-card overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8">
                    <h1 class="font-bold text-primary text-2xl pb-6">Weight Over Time</h1>
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
                datasets: [{
                    
                    data: weightData,
                    backgroundColor: 'black',
                    borderColor: 'rgba(34, 197, 94, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        type: 'time',
                        time: {
                            unit: 'week'
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Date'
                        }
                    }],
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Weight'
                        }
                    }]
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
</x-app-layout>
