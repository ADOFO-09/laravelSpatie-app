<x-web-app-layout>

    <x-slot:title>
        My laravel App
    </x-slot:title>
    <div class="py-5">
        <div class="container-fluid">
            <h4>Welcome to index page</h4>
        </div>
    </div>
    <x-slot:scripts>
        <script>
            alert("Hello world!");
        </script>
    </x-slot>
</x-web-app-layout>
