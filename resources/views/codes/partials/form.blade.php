<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Create Codes
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Please fill in the form below with a list of comma separated account numbers.
        </p>
    </header>

    <form method="post" action="{{ route('codes.store') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Account Numbers')" />
            <x-text-input id="name" name="account_numbers" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('account_numbers')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
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
