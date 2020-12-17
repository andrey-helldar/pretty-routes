<?php

namespace PrettyRoutes\Support;

use Helldar\Support\Facades\Http;
use PrettyRoutes\Application;

final class Resources
{
    public function fonts(): string
    {
        return 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap';
    }

    public function icons(): string
    {
        return 'https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css';
    }

    public function githubIcon(): string
    {
        return 'https://github.githubassets.com/pinned-octocat.svg';
    }

    public function jsApp(): string
    {
        return $this->jsTemplate('app.js');
    }

    public function jsManifest(): string
    {
        return $this->jsTemplate('manifest.js');
    }

    public function jsVendor(): string
    {
        return $this->jsTemplate('vendor.js');
    }

    public function repositoryUrl(): string
    {
        return 'https://github.com/andrey-helldar/pretty-routes';
    }

    public function hosts(): array
    {
        $values = [
            $this->fonts(),
            $this->icons(),
            $this->jsApp(),
            $this->jsManifest(),
            $this->jsVendor(),
            $this->githubIcon(),
        ];

        return array_values(array_unique(array_map(function ($url) {
            return Http::host($url);
        }, $values)));
    }

    protected function version(): string
    {
        return Application::VERSION;
    }

    protected function jsTemplate(string $filename): string
    {
        $version = $this->version();

        return "https://cdn.jsdelivr.net/gh/andrey-helldar/pretty-routes@{$version}/dist/{$filename}";
    }
}
