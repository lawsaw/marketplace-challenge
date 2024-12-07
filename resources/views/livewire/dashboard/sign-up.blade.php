<x-dashboard.auth
    title="Sign Up to Dashboard"
    submitLabel="Create account"
>
    <form wire:submit="signUp()">
        <div class="mb-4">
            <x-dashboard.input wire:model="name" placeholder="Enter your full name" label="Name" icon="icons.user"></x-dashboard.input>
        </div>

        <div class="mb-4">
            <x-dashboard.input wire:model="email" type="email" placeholder="Enter your email" label="Email" icon="icons.email"></x-dashboard.input>
        </div>

        <div class="mb-4">
            <x-dashboard.input wire:model="password" type="password" placeholder="Enter your password" label="Password" icon="icons.password"></x-dashboard.input>
        </div>

        <div class="mb-6">
            <x-dashboard.input wire:model="password_confirmation" type="password" placeholder="Re-type Password" label="Password" icon="icons.password"></x-dashboard.input>
        </div>

        <div class="mb-5">
            <x-dashboard.button class="w-full">Create account</x-dashboard.button>
        </div>

        <x-dashboard.button class="w-full" theme="grey" icon="icons.google">Sign up with Google</x-dashboard.button>

        <div class="mt-6 text-center">
            <p class="font-medium">
                Already have an account?
                <a href="{{ route('sign-in') }}" class="text-primary">Sign in</a>
            </p>
        </div>
    </form>
</x-dashboard.auth>
