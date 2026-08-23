<nav class="border-b border-border px-6">
    <div class="max-w-7xl mx-auto h-16 flex items-center justify-between">
        <div>
            <a href="/">Idea</a>
        </div>

        @guest
            <div class=" flex gap-x-5 items-center">
                <a href="/login">Login</a>
                <a href="/register" class="btn">Register</a>
            </div>
        @endguest

        @auth
            <div class="flex gap-x-5 items-center">
                <span>{{ auth()->user()->name }}</span>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn" type="submit">Logout</button>
                </form>

            </div>
        @endauth
    </div>
</nav>
