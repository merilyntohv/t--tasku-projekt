<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Kustuta konto') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Kui su konto on kustutatud, kustutatakse jäädavalt kõik selle andmed. Enne konto kustutamist lae alla kõik andmed või teave, mida soovid säilitada.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Kustuta konto') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Oled sa kindel, et soovid oma konto kustutada?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Kui su konto on kustutatud, kustutatakse jäädavalt kõik selle andmed. Palun sisesta oma parool, et kinnitada, et soovid oma kontot alaliselt kustutada.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Salasõna') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Loobu') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Kustuta konto') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
