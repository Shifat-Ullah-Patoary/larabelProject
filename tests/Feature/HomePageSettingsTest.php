<?php

namespace Tests\Feature;

use App\Models\HomePageSetting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class HomePageSettingsTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_settings_are_only_available_to_admins(): void
    {
        $this->get(route('admin.home-settings.index'))
            ->assertRedirect(route('login'));

        $user = User::factory()->create();

        $this->actingAs($user)
            ->get(route('admin.home-settings.index'))
            ->assertForbidden();
    }

    public function test_admin_can_update_home_page_hero_content(): void
    {
        Storage::fake('public');

        $admin = User::factory()->create();
        $admin->is_admin = true;
        $admin->save();

        $this->actingAs($admin)
            ->get(route('admin.dashboard'))
            ->assertOk()
            ->assertSee('Sales overview')
            ->assertSee(route('admin.home-settings.index'));

        $this->actingAs($admin)
            ->put(route('admin.home-settings.update'), [
                'title' => 'Updated homepage title',
                'description' => 'Updated description',
                'button_text' => 'See our services',
                'button_link' => '/contracts',
                'image' => UploadedFile::fake()->image('banner.jpg'),
                'travel_image' => UploadedFile::fake()->image('travel.jpg'),
            ])
            ->assertRedirect(route('admin.home-settings.index'))
            ->assertSessionHas('success');

        $this->assertDatabaseHas('home_page_settings', [
            'title' => 'Updated homepage title',
            'description' => 'Updated description',
            'button_text' => 'See our services',
            'button_link' => '/contracts',
        ]);

        $settings = HomePageSetting::query()->firstOrFail();
        Storage::disk('public')->assertExists($settings->image);
        $this->assertNotNull($settings->travel_image);
        Storage::disk('public')->assertExists($settings->travel_image);

        $this->get(route('index'))
            ->assertOk()
            ->assertSee('Updated homepage title')
            ->assertSee('Updated description')
            ->assertSee('See our services')
            ->assertSee('storage/'.$settings->image)
            ->assertSee('storage/'.$settings->travel_image);

        $this->actingAs($admin)
            ->put(route('admin.home-settings.update'), [
                'title' => 'Updated homepage title',
                'description' => 'Updated description',
                'button_text' => 'See our services',
                'button_link' => '/contracts',
            ])
            ->assertRedirect(route('admin.home-settings.index'));

        $this->assertDatabaseHas('home_page_settings', ['image' => $settings->image]);
        Storage::disk('public')->assertExists($settings->image);
    }
}
