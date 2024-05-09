<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary leading-tight">
            {{ __('Workouts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-2">
            @foreach($workouts as $workout)
              <div href="" class="bg-card overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/workouts/{{ $workout->slug }}">
                  <div class="p-6 text-foreground">
                      <h3 class="text-primary text-xl font-bold">{{ $workout->name }}</h3>
                      <p>{{ $workout->description }}</p>
                  </div>
                </a>
              </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
