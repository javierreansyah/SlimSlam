<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-primary">
            {{ __("Workouts") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl space-y-8 sm:px-6 lg:px-8">
            @foreach ($workouts->groupBy("difficulty") as $difficulty => $workoutsByDifficulty)
                <div class="mb-4 space-y-6">
                    <h2 class="text-5xl font-bold text-primary">{{ ucfirst($difficulty) }}</h2>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($workoutsByDifficulty as $workout)
                            <div href="" class="overflow-hidden bg-card shadow-sm sm:rounded-lg">
                                <a href="/workouts/{{ $workout->slug }}">
                                    <div>
                                        <img class="aspect-[4/2] h-full w-full object-cover grayscale" src="{{ asset("storage/workout-pictures/placeholder.jpeg") }}" alt="" />
                                    </div>
                                    <div class="h-[160px] space-y-1 p-6 text-foreground">
                                        <h3 class="text-xl font-bold text-primary">{{ $workout->name }}</h3>

                                        <p>{{ $workout->description }}</p>
                                        <p class="@if ($workout->difficulty === "easy")
                                            text-green-600
                                        @elseif ($workout->difficulty === "moderate")
                                            text-yellow-600
                                        @elseif ($workout->difficulty === "hard")
                                            text-red-600
                                        @endif w-fit rounded bg-muted px-2 py-1 text-sm font-bold">
                                            {{ ucfirst($workout->difficulty) }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
