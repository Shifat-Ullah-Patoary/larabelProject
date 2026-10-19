<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContractSettingControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_updates_contract_page_settings_shown_on_public_page(): void
    {
        $admin = User::factory()->create();
        $admin->is_admin = true;
        $admin->save();

        $settings = [
            'top_header' => 'Contact Diamond Group',
            'header_description' => 'Talk with our team about your next project.',
            'address_description' => '123 Example Road',
            'phone_number' => '+880 1234567890',
            'email' => 'contact@example.com',
            'business_our' => 'Sunday to Thursday, 9 AM to 5 PM',
        ];

        $this->actingAs($admin)
            ->get(route('admin.contract-settings.index'))
            ->assertOk()
            ->assertSee('Contract Page Settings');

        $this->actingAs($admin)
            ->from(route('admin.contract-settings.index'))
            ->put(route('admin.contract-settings.update'), $settings)
            ->assertRedirect(route('admin.contract-settings.index'))
            ->assertSessionHas('success', 'Contract Page Settings updated successfully');

        $this->assertDatabaseHas('contract_page_settings', $settings);

        $this->get(route('contracts'))
            ->assertOk()
            ->assertSee($settings['top_header'])
            ->assertSee($settings['header_description'])
            ->assertSee($settings['address_description'])
            ->assertSee($settings['phone_number'])
            ->assertSee($settings['email'])
            ->assertSee($settings['business_our']);
    }
}
