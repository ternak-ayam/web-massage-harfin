<footer class="text-center lg:text-left">
    <div class="text-gray-700 text-sm text-center p-4">
        © {{ now()->format('Y') }} Copyright
        <a class="text-gray-800" href="{{ url('/') }}">{{ config('app.name') }}</a>
    </div>
</footer>
