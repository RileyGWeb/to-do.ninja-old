<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div class="flex">
                <x-jet-authentication-card-logo />
                <div style="font-family: 'Julius Sans One', sans-serif;" class="self-center pl-4 text-3xl text-gray-500">To-do.Ninja</div>
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                {!! $policy !!}
            </div>
        </div>
    </div>
</x-guest-layout>
