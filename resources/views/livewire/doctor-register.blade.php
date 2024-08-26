<div class="py-12 bg-white">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            
                <form wire:submit="register">
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input wire:model="name" id="name" class="block w-full mt-1" type="text" name="name" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
            
                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input wire:model="email" id="email" class="block w-full mt-1" type="email" name="email" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Bio -->
                    <div class="mt-4">
                        <x-input-label for="bio" :value="__('Bio/About')" />
                        <x-text-input wire:model="bio" id="bio" class="block w-full mt-1" type="text" name="bio" required autofocus autocomplete="bio" />
                        <x-input-error :messages="$errors->get('bio')" class="mt-2" />
                    </div>

                    <!-- Hospital Name -->
                    <div class="mt-4">
                        <x-input-label for="hospital_name" :value="__('Hospital Name')" />
                        <x-text-input wire:model="hospital_name" id="hospital_name" class="block w-full mt-1" type="text" name="hospital_name" required autofocus autocomplete="hospital_name" />
                        <x-input-error :messages="$errors->get('hospital_name')" class="mt-2" />
                    </div>

                    <!-- Specialities -->
                    <div class="mt-4">
                        <x-input-label for="specialities" :value="__('Specialities')" />
                        <select class="block w-full px-4 py-3 mt-1 text-sm border-gray-200 rounded-lg pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option selected="">{{ __('Choose Speciality') }}</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
            
                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
            
                        <x-text-input wire:model="password" id="password" class="block w-full mt-1"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
            
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
            
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            
                        <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block w-full mt-1"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
            
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- Social Links -->
                    <!-- X-Twitter -->
                    <div class="mt-4">
                        <x-input-label for="xtwitter" :value="__('X/Twitter')" />
                        <x-text-input wire:model="xtwitter" id="xtwitter" class="block w-full mt-1" type="text" name="xtwitter" required autofocus autocomplete="xtwitter" />
                        <x-input-error :messages="$errors->get('xtwitter')" class="mt-2" />
                    </div>
                    <!-- Instagram -->
                    <div class="mt-4">
                        <x-input-label for="instagram" :value="__('Instagram')" />
                        <x-text-input wire:model="instagram" id="instagram" class="block w-full mt-1" type="text" name="instagram" required autofocus autocomplete="instagram" />
                        <x-input-error :messages="$errors->get('instagram')" class="mt-2" />
                    </div>
            
                    <div class="flex items-center justify-end mt-4">
                        <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-md hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2" href="{{ route('admin-doctors') }}" wire:navigate>
                            {{ __('Cancel') }}
                        </a>
                        <x-primary-button class="ms-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            
        </div>
    </div>
</div>

