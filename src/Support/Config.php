<?php

namespace PrettyRoutes\Support;

use Illuminate\Support\Facades\Config as AppConfig;

final class Config
{
    public function enabled(): bool
    {
        return $this->get('enabled');
    }

    public function allowCleanup(): bool
    {
        return AppConfig::get('app.env') !== 'production' && AppConfig::get('app.debug');
    }

    public function url(): string
    {
        return $this->get('url');
    }

    public function middlewares(): array
    {
        return (array) $this->get('middlewares');
    }

    public function webMiddleware(): ?string
    {
        return $this->get('web_middleware');
    }

    public function apiMiddleware(): ?string
    {
        return $this->get('api_middleware');
    }

    public function hideMethods(): array
    {
        return (array) $this->get('hide_methods', []);
    }

    public function hideMatching(): array
    {
        return (array) $this->get('hide_matching', []);
    }

    public function colorScheme(): string
    {
        return $this->get('color_scheme', 'auto');
    }

    public function domainForce(): bool
    {
        return (bool) $this->get('domain_force');
    }

    public function forceLocale(): ?string
    {
        return $this->get('locale_force') ?: null;
    }

    public function set(string $key, $value): void
    {
        AppConfig::set("pretty-routes.{$key}", $value);
    }

    protected function get(string $key, $default = null)
    {
        return AppConfig::get("pretty-routes.{$key}", $default);
    }
}
