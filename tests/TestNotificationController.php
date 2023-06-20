<?php

namespace Tests\Feature;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NotificationControllerTest extends TestCase
{
    use DatabaseMigrations, RefreshDatabase;

    

    /**
     * Test the index method.
     *
     * @return void
     */
    public function testIndex()
    {
        // Cria um usuário autenticado
        $user = User::factory()->create();
        $this->actingAs($user);

        // Cria algumas notificações associadas ao usuário
        $notifications = Notification::factory()->count(5)->create([
            'recipient_id' => $user->id,
        ]);

        // Faz a requisição para a rota notifications.index
        $response = $this->get(route('notifications.index'));

        // Verifica se a resposta tem o status 200 (OK)
        $response->assertStatus(200);

        // Verifica se as notificações são passadas para a view
        $response->assertViewHas('notifications', $notifications);
    }

    /**
     * Test the markAsRead method.
     *
     * @return void
     */
    public function testMarkAsRead()
    {
        // Cria um usuário autenticado
        $user = User::factory()->create();
        $this->actingAs($user);

        // Cria uma notificação associada ao usuário
        $notification = Notification::factory()->create([
            'recipient_id' => $user->id,
        ]);

        // Faz a requisição para a rota notifications.markAsRead
        $response = $this->put(route('notifications.markAsRead', $notification));

        // Verifica se a notificação foi marcada como lida no banco de dados
        $this->assertDatabaseHas('notifications', [
            'id' => $notification->id,
            'read' => true,
        ]);

        // Verifica se a resposta redireciona de volta
        $response->assertRedirect();

        // Verifica se a mensagem de sucesso está presente na sessão
        $this->assertSessionHas('success', 'Notification marked as read.');
    }

    /**
     * Test the destroy method.
     *
     * @return void
     */
    public function testDestroy()
    {
        // Cria um usuário autenticado
        $user = User::factory()->create();
        $this->actingAs($user);

        // Cria uma notificação associada ao usuário
        $notification = Notification::factory()->create([
            'recipient_id' => $user->id,
        ]);

        // Faz a requisição para a rota notifications.destroy
        $response = $this->delete(route('notifications.destroy', $notification));

        // Verifica se a notificação foi removida do banco de dados
        $this->assertDatabaseMissing('notifications', [
            'id' => $notification->id,
        ]);

        // Verifica se a resposta redireciona de volta
        $response->assertRedirect();

        // Verifica se a mensagem de sucesso está presente na sessão
        $this->assertSessionHas('success', 'Notification deleted successfully.');
    }
}
