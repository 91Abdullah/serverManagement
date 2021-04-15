<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Servers;

class ServersApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_servers()
    {
        $servers = Servers::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/servers', $servers
        );

        $this->assertApiResponse($servers);
    }

    /**
     * @test
     */
    public function test_read_servers()
    {
        $servers = Servers::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/servers/'.$servers->id
        );

        $this->assertApiResponse($servers->toArray());
    }

    /**
     * @test
     */
    public function test_update_servers()
    {
        $servers = Servers::factory()->create();
        $editedServers = Servers::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/servers/'.$servers->id,
            $editedServers
        );

        $this->assertApiResponse($editedServers);
    }

    /**
     * @test
     */
    public function test_delete_servers()
    {
        $servers = Servers::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/servers/'.$servers->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/servers/'.$servers->id
        );

        $this->response->assertStatus(404);
    }
}
