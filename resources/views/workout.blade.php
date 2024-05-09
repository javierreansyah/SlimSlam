<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary leading-tight">
            {{ $workout->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <button id="startBtn" class="bg-primary text-white py-2 px-4 sm:rounded w-full" onclick="startWorkout()">Start</button>
            <button id="nextBtn" class="bg-primary text-white py-2 px-4 sm:rounded hidden w-full" onclick="nextExercise()">Next</button>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-2 pt-4">
            @foreach ($workout->exercises as $index => $exercise)
                <div id="exercise_{{ $index }}" class="bg-card overflow-hidden shadow-sm sm:rounded-lg transition-all">
                    <div class="p-6 text-foreground">
                        <h3 class="text-xl font-bold">{{ $exercise->name }}</h3>
                        <p>Repetition: {{ $exercise->pivot->repetitions }}x</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        var exercises = @json($workout->exercises);
        var currentIndex = 0;

        function startWorkout() {
            currentIndex = 0;
            highlightExercise();
            document.getElementById('startBtn').classList.add('hidden');
            document.getElementById('nextBtn').classList.remove('hidden');
        }

        function nextExercise() {
            var currentExercise = document.getElementById('exercise_' + currentIndex);
            currentExercise.remove(); // Remove the current exercise card
            currentIndex++;
            if (currentIndex >= exercises.length) {
                window.location.href = "/workouts"; // Redirect to workouts page if workout is finished
                return;
            }
            if (currentIndex === exercises.length - 1) {
                document.getElementById('nextBtn').textContent = 'Finish';
            }
            highlightExercise();
        }

        function highlightExercise() {
            var currentExercise = document.getElementById('exercise_' + currentIndex);
            var nextExercise = document.getElementById('exercise_' + currentIndex+1);
            var exerciseElements = document.querySelectorAll('.bg-card');
            exerciseElements.forEach(function(element) {
                element.classList.remove('bg-primary');
                element.classList.remove('scale-110');
            });
            currentExercise.classList.add('bg-primary');
            currentExercise.classList.add('sm:scale-105');
            currentExercise.classList.add('my-4');
        }
    </script>
</x-app-layout>
