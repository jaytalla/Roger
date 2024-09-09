<x-layouts.guest>
    
    <form method="POST" action="/register" class="flex flex-col gap-y-5 md:min-w-[400px] bg-slate-50 px-12 py-8">
        @csrf
        <h3>Create Account</h3>
        <x-form.field name="username" lblname="Username" placeholder="Username" />
        <x-form.field name="email" lblname="Email" placeholder="Email" type="email"/>
        <x-form.field name="password" lblname="Password" placeholder="Password" type="password"/>
        <x-form.field name="password_confirmation" lblname="Confirm Password" placeholder="Confirm Password" type="password" />
        <button class="w-full p-3 font-bold text-white bg-blue-500">CREATE ACCOUNT</button>

        <div class="flex flex-col items-center justify-center w-full">
            <p>or</p>
            <p>Already have an account? <a href="/login" class="font-bold text-blue-500">Login!</a></p>
        </div>
    </form>

</x-layouts.guest>