<section>
    <header>
        <h2 class="text-xl font-medium text-white">
            {{ __('Mise à jour du mot de passe') }}
        </h2>

        <p class="my-2 text-sm text-gray-600 text-white">
            {{ __('Veillez à ce que votre compte utilise un mot de passe long et aléatoire pour rester sécurisé.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label class="text-white" for="update_password_current_password" :value="__('Mot de passe actuel')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full inputmain2" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-white" />
        </div>

        <div>
            <x-input-label class="text-white" for="update_password_password" :value="__('Nouveau mot de passe')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full inputmain2" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-white" />
        </div>

        <div>
            <x-input-label class="text-white" for="update_password_password_confirmation" :value="__('Confirmer le mot de passe')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full inputmain2" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-white" />
        </div>

        <div class="flex items-center gap-4 divbtn">
            <x-primary-button>{{ __('Enregistrer') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Enregistré.') }}</p>
            @endif
        </div>
    </form>
</section>
