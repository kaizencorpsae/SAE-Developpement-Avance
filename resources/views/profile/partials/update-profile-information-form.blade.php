<section>
    <header>
        <h2 class="text-xl font-medium text-white">
            {{ __('Information du profil') }}
        </h2>

        <p class="my-2 text-sm text-gray-600 text-white">
            {{ __("Mettez à jour les informations de profil de votre compte et l'adresse e-mail.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <!-- Nom -->
        <div>
            <x-input-label class="text-white" for="name" :value="__('Nom')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full text-white border-lg inputmain2" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2 text-white" :messages="$errors->get('name')" />
        </div>

        <!-- Email -->
        <div>
            <x-input-label for="email" class="text-white" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full text-white border-lg inputmain2" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2 text-white" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __("Votre adresse électronique n'est pas vérifiée.") }}

                        <button form="send-verification" class="text-white underline text-sm rounded-md">
                            {{ __("Cliquez ici pour renvoyer l'e-mail de vérification.") }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('Un nouveau lien de vérification a été envoyé à votre adresse électronique.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4 divbtn">
            <x-primary-button class="mainbtn">{{ __('Enregistrer') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class=""
                >{{ __('Enregistré.') }}</p>
            @endif
        </div>
    </form>
</section>
