<?php

namespace Tests\Unit;

use App\Thread;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ThreadTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function a_thread_has_replies()
    {
        $thread = factory(Thread::class)->create();

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $thread->replies);
    }

    /** @test */
    function a_thread_has_a_creator()
    {
        $thread = factory(Thread::class)->create();

        $this->assertInstanceOf('App\User', $thread->creator);
    }
}
