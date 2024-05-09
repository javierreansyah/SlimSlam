<section>
    <header>
        <h2 class="text-lg font-medium text-primary">
            {{ __('Profile Picture') }}
        </h2>

        <p class="mt-1 text-sm text-foreground">
            {{ __("Update your account's profile picture.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.updateProfilePicture') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div>
            <img id="preview-image" src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('storage/placeholder.png') }}" alt="Current Profile Picture" class="w-40 h-40 rounded-lg object-cover">
        </div>

        <div class="mt-4">
            <label for="profile-picture" class="px-2 py-2 bg-muted text-foreground rounded-md shadow-sm tracking-wide border border-border cursor-pointer hover:bg-primary hover:text-foreground">
                <span>Choose a file</span>
                <input id="profile-picture" name="profile-picture" type="file" class="hidden" onchange="previewImage(this);" required />
            </label>
            <x-input-error class="mt-2" :messages="$errors->get('profile-picture')" />
        </div>

        <script>
            function previewImage(input) {
                var preview = document.getElementById('preview-image');
                var file = input.files[0];
                var reader = new FileReader();

                reader.onloadend = function () {
                    preview.src = reader.result;
                }

                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    preview.src = "";
                }
            }
        </script>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status-image') === 'profile-picture-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
