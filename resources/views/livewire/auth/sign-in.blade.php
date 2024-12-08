<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <div class="flex items-center justify-center">
            <x-logo></x-logo>
        </div>
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign in to your account</h2>
    </div>
    @if($loginMessage)
        <x-primitives.form.validation-error>{{ $loginMessage  }}</x-primitives.form.validation-error>
    @endif
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" wire:submit="signIn">
            <x-primitives.form.input wire:model="email" type="email" placeholder="Enter your email" label="Email"></x-primitives.form.input>
            <x-primitives.form.input wire:model="password" type="email" placeholder="Enter your password" label="Password"></x-primitives.form.input>
            <x-primitives.button class="w-full">Sign in</x-primitives.button>
        </form>
        <p class="mt-10 text-center text-sm/6 text-gray-500">
            Don’t have any account?
            <a href="{{ route('register') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Sign Up</a>
        </p>
    </div>
</div>
