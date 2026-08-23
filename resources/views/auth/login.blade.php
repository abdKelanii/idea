<x-form title="Login to your account" subtitle="Welcome back! Please enter your details.">
    <form action="/login" method="POST" class="mt-6 space-y-4">
        @csrf
        <x-form.input name="email" label="Email" type="email" />
        <x-form.input name="password" label="Password" type="password" />
        <button type="submit" class="w-full btn">Login</button>
    </form>
</x-form>
