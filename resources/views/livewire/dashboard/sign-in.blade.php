<x-dashboard.auth
    title="Sign In to Dashboard"
    submitLabel="Sign In"
>
    <form>
        <div class="mb-4">
            <x-dashboard.input type="email" placeholder="Enter your email" label="Email" icon="icons.email"></x-dashboard.input>
        </div>
        <div class="mb-6">
            <x-dashboard.input type="password" placeholder="6+ Characters, 1 Capital letter" label="Re-type Password" icon="icons.password"></x-dashboard.input>
        </div>

        <div class="mb-5">
            <x-dashboard.button class="w-full">Sign In</x-dashboard.button>
        </div>

        <x-dashboard.button class="w-full" theme="grey" icon="icons.google">Sign in with Google</x-dashboard.button>

        <div class="mt-6 text-center">
            <p class="font-medium">
                Don’t have any account?
                <a href="{{ route('sign-up') }}" class="text-primary">Sign Up</a>
            </p>
        </div>
    </form>
</x-dashboard.auth>
