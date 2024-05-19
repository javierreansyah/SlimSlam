<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-primary">
            {{ $workout->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div id="description" class="mx-auto mb-4 max-w-7xl sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded">
                <img class="aspect-[6/2] h-full w-full object-cover brightness-50" src="{{ $workout->image ? asset("storage/workout-pictures/" . $workout->image) : asset("storage/workout-pictures/placeholder.jpeg") }}" alt="" />
                <div class="absolute left-0 top-0 space-y-2 p-8">
                    <h3 class="text-5xl font-extrabold text-primary">{{ $workout->name }}</h3>
                    <p class="max-w-[400px] text-foreground">{{ $workout->description }}</p>
                    <p class="@if ($workout->difficulty === "easy")
                        text-green-600
                    @elseif ($workout->difficulty === "moderate")
                        text-yellow-600
                    @elseif ($workout->difficulty === "hard")
                        text-red-600
                    @endif w-fit rounded bg-muted px-2 py-1 text-sm font-bold opacity-80">
                        {{ ucfirst($workout->difficulty) }}
                    </p>
                </div>
            </div>
        </div>
        <div class="mx-auto mb-4 max-w-7xl sm:px-6 lg:px-8">
            <div class="rounded bg-card">
                <div id="timerDisplay" class="py-4 text-center text-3xl font-bold text-primary">Timer</div>
            </div>
        </div>
        <div class="mx-auto flex max-w-7xl gap-4 space-y-2 sm:px-6 lg:px-8">
            <button id="startBtn" class="w-full bg-primary px-4 py-4 font-bold text-white hover:bg-muted hover:text-primary sm:rounded" onclick="startWorkout()">Start</button>
            <button id="pauseBtn" class="hidden w-full bg-card px-4 py-4 font-bold text-white hover:bg-primary sm:rounded" onclick="pauseWorkout()">Pause</button>
            <button id="resumeBtn" class="hidden w-full bg-card px-4 py-4 font-bold text-white hover:bg-primary sm:rounded" onclick="resumeWorkout()">Resume</button>
            <button id="nextBtn" class="hidden w-full bg-card px-4 py-4 font-bold text-white hover:bg-primary sm:rounded" onclick="nextExercise()">Next</button>
        </div>
        <div class="mx-auto max-w-7xl space-y-4 pt-4 sm:px-6 lg:px-8">
            @foreach ($workout->exercises as $index => $exercise)
                <div id="exercise_{{ $index }}" class="overflow-hidden bg-card shadow-sm transition-all sm:rounded-lg">
                    <div class="flex">
                        <div id="image_{{ $index }}" class="h-[180px]">
                            <img class="aspect-[6/5] h-full w-full object-cover" src="{{ $exercise->image ? asset("storage/exercise-pictures/" . $exercise->image) : asset("storage/exercise-pictures/placeholder.jpeg") }}" alt="" />
                        </div>
                        <div class="p-6 text-foreground">
                            <h3 id="name_{{ $index }}" class="text-xl font-bold">{{ $exercise->name }}</h3>
                            <p>{{ $exercise->pivot->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        var exercises = @json($workout->exercises);
        var currentIndex = 0;
        var timer;
        var timeLeft;

        function startWorkout() {
            document.getElementById('description').remove();
            currentIndex = 0;
            highlightExercise();
            startTimer();
            document.getElementById('startBtn').classList.add('hidden');
            document.getElementById('pauseBtn').classList.remove('hidden');
            document.getElementById('nextBtn').classList.remove('hidden');
            document.getElementById('timerDisplay').classList.remove('hidden');
        }

        function startTimer() {
            timeLeft = exercises[currentIndex].pivot.duration;
            var timerElement = document.getElementById('timerDisplay');
            timer = setInterval(function () {
                var minutes = Math.floor(timeLeft / 60);
                var seconds = timeLeft % 60;
                timerElement.textContent = (minutes < 10 ? '0' : '') + minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
                timeLeft--;
                if (timeLeft < 0) {
                    clearInterval(timer);
                    nextExercise();
                }
            }, 1000);
        }

        function pauseWorkout() {
            clearInterval(timer);
            document.getElementById('pauseBtn').classList.add('hidden');
            document.getElementById('resumeBtn').classList.remove('hidden');
        }

        function resumeWorkout() {
            startTimerFromCurrentTime();
            document.getElementById('pauseBtn').classList.remove('hidden');
            document.getElementById('resumeBtn').classList.add('hidden');
        }

        function startTimerFromCurrentTime() {
            var timerElement = document.getElementById('timerDisplay');
            timer = setInterval(function () {
                var minutes = Math.floor(timeLeft / 60);
                var seconds = timeLeft % 60;
                timerElement.textContent = (minutes < 10 ? '0' : '') + minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
                timeLeft--;
                if (timeLeft < 0) {
                    clearInterval(timer);
                    nextExercise();
                }
            }, 1000);
        }

        function nextExercise() {
            clearInterval(timer);
            var currentExercise = document.getElementById('exercise_' + currentIndex);
            currentExercise.remove();
            currentIndex++;
            if (currentIndex >= exercises.length) {
                window.location.href = '/workouts';
                return;
            }
            if (currentIndex === exercises.length - 1) {
                document.getElementById('nextBtn').textContent = 'Finish';
            }
            highlightExercise();
            startTimer();
            document.getElementById('pauseBtn').classList.remove('hidden');
            document.getElementById('resumeBtn').classList.add('hidden');
        }

        function highlightExercise() {
            var currentExercise = document.getElementById('exercise_' + currentIndex);
            var currentExerciseName = document.getElementById('name_' + currentIndex);
            var currentExerciseImage = document.getElementById('image_' + currentIndex);
            var nextExercise = document.getElementById('exercise_' + currentIndex + 1);
            var exerciseElements = document.querySelectorAll('.bg-card');
            exerciseElements.forEach(function (element) {
                element.classList.remove('bg-primary');
                element.classList.remove('scale-110');
            });
            currentExerciseName.classList.remove('text-xl');
            currentExercise.classList.add('bg-primary');
            currentExercise.classList.add('sm:scale-105');
            currentExercise.classList.add('my-6');
            currentExerciseName.classList.add('text-5xl');
            currentExerciseName.classList.add('font-extrabold');
            currentExerciseName.classList.add('pb-4');
            currentExerciseImage.classList.add('h-[360px]');
        }
    </script>
</x-app-layout>
