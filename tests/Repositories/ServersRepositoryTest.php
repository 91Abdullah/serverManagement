<?php namespace Tests\Repositories;

use App\Models\Servers;
use App\Repositories\ServersRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ServersRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ServersRepository
     */
    protected $serversRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->serversRepo = \App::make(ServersRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_servers()
    {
        $servers = Servers::factory()->make()->toArray();

        $createdServers = $this->serversRepo->create($servers);

        $createdServers = $createdServers->toArray();
        $this->assertArrayHasKey('id', $createdServers);
        $this->assertNotNull($createdServers['id'], 'Created Servers must have id specified');
        $this->assertNotNull(Servers::find($createdServers['id']), 'Servers with given id must be in DB');
        $this->assertModelData($servers, $createdServers);
    }

    /**
     * @test read
     */
    public function test_read_servers()
    {
        $servers = Servers::factory()->create();

        $dbServers = $this->serversRepo->find($servers->id);

        $dbServers = $dbServers->toArray();
        $this->assertModelData($servers->toArray(), $dbServers);
    }

    /**
     * @test update
     */
    public function test_update_servers()
    {
        $servers = Servers::factory()->create();
        $fakeServers = Servers::factory()->make()->toArray();

        $updatedServers = $this->serversRepo->update($fakeServers, $servers->id);

        $this->assertModelData($fakeServers, $updatedServers->toArray());
        $dbServers = $this->serversRepo->find($servers->id);
        $this->assertModelData($fakeServers, $dbServers->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_servers()
    {
        $servers = Servers::factory()->create();

        $resp = $this->serversRepo->delete($servers->id);

        $this->assertTrue($resp);
        $this->assertNull(Servers::find($servers->id), 'Servers should not exist in DB');
    }
}
