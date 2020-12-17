<?php

namespace Tests;

use Illuminate\Support\Facades\Config;
use PrettyRoutes\Facades\Resources;

class ViewTest extends TestCase
{
    public function testTexts()
    {
        $response = $this->get('/routes');

        $response->assertStatus(200);
        $response->assertSee('<!DOCTYPE html>', false);
        $response->assertSee('<div id="app"></div>', false);

        $response->assertDontSee('Foo Bar');
    }

    public function testClearRoutes()
    {
        $response = $this->get('/routes');

        $response->assertStatus(200);
        $response->assertSee('window.isEnabledCleanup = true;');
    }

    public function testProductionClearRoutes()
    {
        Config::set('app.env', 'production');

        $response = $this->get('/routes');

        $response->assertStatus(200);
        $response->assertSee('window.isEnabledCleanup = false;');
    }

    public function testDisabledClearRoutes()
    {
        Config::set('app.debug', false);

        $response = $this->get('/routes');

        $response->assertStatus(200);
        $response->assertSee('window.isEnabledCleanup = false;');
    }

    public function testDark()
    {
        $response = $this->get('/routes');

        $response->assertStatus(200);
        $response->assertSee('window.dark = \'auto\';', false);
    }

    public function testRoutes()
    {
        $response = $this->get('/routes');

        $response->assertStatus(200);
        $response->assertSee(route('pretty-routes.list'));
        $response->assertSee(route('pretty-routes.clear'));
    }

    public function testResources()
    {
        $response = $this->get('/routes');

        $response->assertStatus(200);

        $response->assertSee(Resources::fonts());
        $response->assertSee(Resources::icons());

        $response->assertSee(Resources::githubIcon());
        $response->assertSee(Resources::repositoryUrl());

        $response->assertSee(Resources::jsManifest());
        $response->assertSee(Resources::jsVendor());
        $response->assertSee(Resources::jsApp());
    }
}
