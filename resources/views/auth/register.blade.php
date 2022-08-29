<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
             <!-- Gender -->
             <div>
                <Label>Gender</Label>

                <input id="gender-male" class="block mt-1 w-full" type="radio" name="gender" value="Male" {{old('gender') == "Male" ? 'checked' : ''}} required autofocus />
                <x-label for="gender" :value="__('Male')" />

                <input id="gender-other" class="block mt-1 w-full" type="radio" name="gender" value="Female" {{old('gender') == "Female" ? 'checked' : ''}} required autofocus />
                <x-label for="gender-female" :value="__('Female')" />

                <input id="gender-other" class="block mt-1 w-full" type="radio" name="gender" value="Other" {{old('gender') == "Other" ? 'checked' : ''}} required autofocus />
                <x-label for="gender" :value="__('Other')" />
            </div>
             <!-- City -->
             <div>
                <x-label for="city" :value="__('City')" />

                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus />
            </div>
             <!-- Phone -->
             <div>
                <x-label for="phone" :value="__('Phone')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
            </div>
             <!-- Regulatory Body -->
             <div>
                <x-label for="regulatory_body" :value="__('Regulatory Body')" />

                <select id="regulatory_body" class="block mt-1 w-full" type="text" name="regulatory_body" :value="old('regulatory_name')" required autofocus >
                    <option value="KMPDC"> KMPDC</option>
                    <option value="COC">COC</option>
                    <option value="KPPB">KPPB</option>
                    <option value="NCK">NCK</option>
                    <option value="Other">Other</option>
                </select>

            </div>
             <!-- Place of Work -->
             <div>
                <x-label for="place_of_work" :value="__('Place of Work')" />

                <x-input id="place_of_work" class="block mt-1 w-full" type="text" name="place_of_work" :value="old('place_of_work')" required autofocus />
            </div>
             <!-- Role is Organization -->
             <div>
                <x-label for="role_in_organization" :value="__('Role in Organization')" />

                <x-input id="role_in_organization" class="block mt-1 w-full" type="text" name="role_in_organization" :value="old('role_in_organization')" required autofocus />
            </div>
             <!-- Country -->
             <div>
                <x-label for="country" :value="__('Country')" />

                <x-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
