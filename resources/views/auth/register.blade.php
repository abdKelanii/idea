@props(['title', 'subtitle'])

<x-form title="Register an Account" subtitle="Start tracking your ideas today.">
    <form action="/register" method="POST" class="mt-6 space-y-4">
        @csrf
        <x-form.input name="name" label="Name" />
        <x-form.input name="email" label="Email" type="email" />
        <x-form.input name="password" label="Password" type="password" />
        <button type="submit" class="w-full btn">Register</button>
    </form>
</x-form>
