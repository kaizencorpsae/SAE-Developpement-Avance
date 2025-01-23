<section class="space-y-6 divbtn divbtnred">
    <header>
        <h2 class="text-xl font-medium text-white">
            {{ __('Supprimer le compte') }}
        </h2>

        <p class="my-2 text-sm text-gray-600 text-white">
            {{ __('Une fois votre compte supprimé, toutes ses ressources et données seront définitivement effacées. Avant de supprimer votre compte, veuillez télécharger toutes les données ou informations que vous souhaitez conserver.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Supprimer le compte') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 bg-main-800">
            @csrf
            @method('delete')

            <h2 class="text-xl font-medium text-white">
                {{ __('Êtes-vous sûr de vouloir supprimer votre compte ?') }}
            </h2>

            <p class="my-2 text-sm text-gray-600 text-white">
                {{ __('Une fois votre compte supprimé, toutes ses ressources et données seront définitivement effacées. Veuillez saisir votre mot de passe pour confirmer que vous souhaitez supprimer définitivement votre compte.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Mot de passe') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4 inputmain2"
                    placeholder="{{ __('Mot de passe') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end divbtn">
                <div class="divbtn">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Annuler') }}
                    </x-secondary-button>
                </div>
                <div class="divbtn divbtnred">
                    <x-danger-button class="ms-3 divbtn divbtnred">
                        {{ __('Supprimer le compte') }}
                    </x-danger-button>
                </div>
            </div>
        </form>
    </x-modal>
</section>
