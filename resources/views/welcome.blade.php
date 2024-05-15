<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

    {{-- Chart JS --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-background font-sans antialiased">
    <div class="flex min-h-screen justify-center">
        <div class="flex w-full flex-col">
            <header class="fixed left-0 right-0 bg-black bg-opacity-45">
                @include('layouts.navigation')
            </header>
            <main class="">
                <div class="flex h-screen bg-cover bg-center" style="background-image: url('storage/home/home-bg.jpg')">
                    <div class="mt-40 mx-auto px-10 leading-tight text-white">
                        <p class="text-4xl md:text-2xl lg:text-5xl xl:text-7xl font-black leading-tight">Empowering <br> Wellness <br> Inspiring Fitness</p>
                        <p class="text-xl text-muted-foreground max-w-sm pt-4 font-normal leading-tight">Slam into Fitness with <span class="text-primary font-semibold">SlimSlam</span></p>

                        <div class="mt-10">
                            <a href="https://www.linkedin.com/in/javierreansyah/" class="text-xl rounded bg-primary px-5 py-3 font-medium text-background hover:bg-muted" target="_blank">Join Now</a>
                        </div>
                    </div>

                    <div class="overflow-hidden">
                        <img class="hidden md:block h-[720px] mr-60 mt-40" src="storage/home/model.png" alt="Model">
                    </div>
                </div>

                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="bg-background shadow-lg rounded-lg p-8">
                        <h1 class="text-4xl font-bold text-primary mb-6 justify-start">About SlimSlam</h1>
                        <p class="text-lg text-white mb-4">
                            Welcome to SlimSlam, your ultimate partner in achieving a healthier and more active lifestyle. Our platform offers a range of features tailored to help you reach your fitness goals with ease and enjoyment. Here's what you can expect from SlimSlam:
                        </p>
                        
                        <h2 class="text-3xl font-semibold text-primary mt-8 mb-4">Personalized Workouts</h2>
                        <p class="text-lg text-white mb-4">
                            At SlimSlam, we understand that fitness is not a one-size-fits-all journey. That's why we offer a variety of workouts that cater to different hobbies and interests. Whether you're into yoga, gym workouts, or other fitness activities, we've got you covered. Our workout plans are designed to be flexible and enjoyable, ensuring that you stay motivated and engaged.
                        </p>
                        <ul class="list-disc list-inside text-lg text-white mb-4">
                            <li><strong>Yoga:</strong> Find your inner peace and improve your flexibility with our range of yoga sessions, suitable for all levels.</li>
                            <li><strong>Gym Workouts:</strong> Build strength and endurance with our comprehensive gym workout plans, from beginner to advanced levels.</li>
                            <li><strong>Specialized Activities:</strong> Enjoy other fitness activities tailored to your hobbies and preferences.</li>
                        </ul>
            
                        <h2 class="text-3xl font-semibold text-primary mt-8 mb-4">BMI and Weight Tracking</h2>
                        <p class="text-lg text-white mb-4">
                            Stay on top of your health with our advanced tracking features. SlimSlam allows you to monitor your Body Mass Index (BMI) and weight over time, helping you understand your progress and adjust your fitness plan accordingly. Our tracking tools are easy to use and provide valuable insights into your health journey.
                        </p>
                        <ul class="list-disc list-inside text-lg text-white mb-4">
                            <li><strong>BMI Tracking:</strong> Calculate and track your BMI to understand your body composition and health status.</li>
                            <li><strong>Weight Monitoring:</strong> Record your weight regularly and see how it changes over time. We'll remind you to update your weight at specific intervals to ensure you're staying on track.</li>
                        </ul>
            
                        <h2 class="text-3xl font-semibold text-primary mt-8 mb-4">Regular Progress Check-ins</h2>
                        <p class="text-lg text-white mb-4">
                            Consistency is key to achieving your fitness goals. SlimSlam provides regular check-ins to help you stay accountable and motivated. Our system will remind you to check your BMI and weight at regular intervals, allowing you to see your progress and make necessary adjustments to your fitness plan.
                        </p>
                        <ul class="list-disc list-inside text-lg text-white mb-4">
                            <li><strong>Scheduled Check-ins:</strong> Receive reminders to update your BMI and weight, keeping you on track with your health journey.</li>
                            <li><strong>Progress Reports:</strong> Get detailed reports on your progress, helping you visualize your achievements and areas for improvement.</li>
                        </ul>
            
                        <p class="text-lg text-white mt-8">
                            Join SlimSlam today and start your journey towards a healthier, happier you. With our personalized workouts, comprehensive tracking tools, and regular check-ins, achieving your fitness goals has never been easier or more enjoyable. Let's transform your health together!
                        </p>
                    </div>
                </div>
            </main>
            <footer class="flex flex-col items-center justify-between bg-black p-3 text-sm text-white">
                <div class="flex flex-col space-y-2 text-center sm:flex-row sm:space-x-4">
                    <p>Copyright © 2024 SlimSlam | All Rights Reserved</p>
                </div>
                <div class="flex justify-center py-2 sm:mt-0">
                    <a href="/">
                        <img class="h-6" src="{{ asset('/storage/SlimSlam.png') }}" alt="SlimSlam" />
                    </a>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>
