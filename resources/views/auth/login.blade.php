<x-layouts.guest>

    <form action="" class="flex flex-col gap-y-5 md:min-w-[400px] bg-slate-50 px-12 py-8">
        @csrf
        <h3>Login Here!</h3>
        <x-form.field name="username" lblname="Username" placeholder="Username" />
        <x-form.field name="password" lblname="Password" placeholder="Password" type="password" />
        <button class="w-full p-3 font-bold text-white bg-blue-500">LOGIN</button>

        <div class="flex flex-col items-center justify-center w-full">
            <p>or</p>
            <p>Doesn't have an account? <a href="/register" class="font-bold text-blue-500">Create Account!</a></p>
        </div>
    </form>

</x-layouts.guest>