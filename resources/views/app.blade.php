<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    <title>{{ \PrettyRoutes\Facades\Trans::get('title') }} | {{ config('app.name') }}</title>

    @foreach(\PrettyRoutes\Facades\Resources::hosts() as $host)
        <link rel="preconnect" href="{{ $host }}" crossorigin>
        <link rel="dns-prefetch" href="{{ $host }}">
    @endforeach

    <link href="{{ \PrettyRoutes\Facades\Resources::fonts() }}" rel="stylesheet">
    <link href="{{ \PrettyRoutes\Facades\Resources::icons() }}" rel="stylesheet">
</head>
<body>

<div id="app"></div>

<script>
    window.trans = {!! json_encode(\PrettyRoutes\Facades\Trans::all(), JSON_UNESCAPED_UNICODE) !!};
    window.dark = '{{ \PrettyRoutes\Facades\Config::colorScheme() }}';
    window.isEnabledCleanup = {{ \PrettyRoutes\Facades\Config::allowCleanup() ? 'true' : 'false' }};
    window.githubIcon = '{{ \PrettyRoutes\Facades\Resources::githubIcon() }}';
    window.repositoryUrl = '{{ \PrettyRoutes\Facades\Resources::repositoryUrl() }}';

    window.url = {
        routes: '{{ route("pretty-routes.list") }}',
        clean: '{{ route("pretty-routes.clear") }}'
    };
</script>

<script src="{{ \PrettyRoutes\Facades\Resources::jsManifest() }}"></script>
<script src="{{ \PrettyRoutes\Facades\Resources::jsVendor() }}"></script>
<script src="{{ \PrettyRoutes\Facades\Resources::jsApp() }}"></script>

</body>
</html>
