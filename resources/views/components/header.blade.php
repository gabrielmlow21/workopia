<header class="bg-blue-900 p-4 text-white">
    <div class="container mx-auto flex items-center justify-between">
        <h1 class="text-3xl font-semibold">
            <a href="{{ url('/') }}">Workopia</a>
        </h1>
        <nav class="hidden items-center space-x-4 md:flex">
            <x-nav-link url="/jobs" :active="request()->is('jobs')">
                Jobs
            </x-nav-link>
            <x-nav-link url="/jobs/saved" :active="request()->is('jobs/saved')">
                Saved Jobs
            </x-nav-link>
            <x-nav-link url="/login" :active="request()->is('login')">
                Login
            </x-nav-link>
            <x-nav-link url="/register" :active="request()->is('register')">
                Register
            </x-nav-link>
            <x-nav-link url="/dashboard" :active="request()->is('dashboard')" icon="gauge">
                Dashboard</x-nav-link>
            <x-button-link url="/jobs/create" icon="edit">Create Job</x-button-link>
        </nav>
        <button id="hamburger" class="flex items-center text-white md:hidden">
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mt-5 hidden space-y-2 bg-blue-900 pb-4 text-white md:hidden">
        <x-nav-link url="/jobs" :active="request()->is('jobs')" :mobile="true">
            Jobs
        </x-nav-link>
        <x-nav-link url="/jobs/saved" :active="request()->is('jobs/saved')" :mobile="true">
            Saved Jobs
        </x-nav-link>
        <x-nav-link url="/login" :active="request()->is('login')" :mobile="true">
            Login
        </x-nav-link>
        <x-nav-link url="/register" :active="request()->is('register')" :mobile="true">
            Register
        </x-nav-link>
        <x-nav-link url="/dashboard" :active="request()->is('dashboard')" :mobile="true">
            Dashboard</x-nav-link>
        <x-button-link url="/jobs/create" icon="edit" :mobile="true">Create Job</x-button-link>
    </div>
</header>
