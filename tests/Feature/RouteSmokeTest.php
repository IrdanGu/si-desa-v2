<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class RouteSmokeTest extends TestCase
{
    #[DataProvider('publicStaticPagesProvider')]
    public function test_public_static_pages_load_successfully(string $uri): void
    {
        $this->get($uri)->assertOk();
    }

    public static function publicStaticPagesProvider(): array
    {
        return [
            ['/kontak'],
            ['/panduan'],
            ['/visimisi'],
            ['/e-learning'],
            ['/e-learning/hidup-sehat'],
            ['/e-learning/pengolahan-sampah'],
            ['/e-learning/manajemen-keuangan'],
        ];
    }

    public function test_dashboard_redirects_guest_to_login(): void
    {
        $this->get('/dashboard')->assertRedirect('/login');
    }
}
