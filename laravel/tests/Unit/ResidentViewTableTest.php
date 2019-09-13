<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Http\Controllers\ScheduleDataController;

class ResidentViewTable extends TestCase
{
	/**
	* Test to check a certain user exists
	*
	*/
	public function testViewScheduleDataTableHasCurrentProcedure()
	{
		$this->assertDatabaseHas('schedule_data', ['case_procedure' => 'test']);
	}

	public function testViewScheduleDataHasLeadSurgeon()
        {
		$this->assertDatabaseHas('schedule_data',['lead_surgeon'=>'test']);
        }

	public function testViewScheduleDataHasStartTime()
	{
		$this->assertDatabaseHas('schedule_data', ['start_time'=>'07:40:00']);
	} 

	public function testViewScheduleDataHasEndTime()
	{
		$this->assertDatabaseHas('schedule_data',['end_time'=>'15:11:00']);
	}

	public function testViewScheduleDataHasID()
	{
		$this->assertDatabaseHas('schedule_data', ['id' => '22479']);
	}

	public function testViewScheduleDataHasORRoom()
	{
		$this->assertDatabaseHas('schedule_data',['location'=>'OSU UH MAIN OR']);
	}
	
	public function testViewScheduleDataHasDate()
	{
		$this->assertDatabaseHas('schedule_data',['date'=>'2018-11-13']);
	}

	public function testViewScheduleDataHasRoom()
	{
		$this->assertDatabaseHas('schedule_data',['room'=>'UH-16']);
	}

	
}