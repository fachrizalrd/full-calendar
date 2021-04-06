<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Calendar extends CI_Controller
{

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();

		$this->load->model('Calendar_model');
	}


	/*Home page Calendar view  */
	public function index()
	{
		$this->load->view('home');
	}

	/*Get all Events */

	public function getEvents()
	{
		$result = $this->Calendar_model->getEvents();
		echo json_encode($result);
	}
	/*Add new event */
	public function addEvent()
	{
		$result = $this->Calendar_model->addEvent();
		echo $result;
	}
	/*Update Event */
	public function updateEvent()
	{
		$result = $this->Calendar_model->updateEvent();
		echo $result;
	}
	/*Delete Event*/
	public function deleteEvent()
	{
		$result = $this->Calendar_model->deleteEvent();
		echo $result;
	}
	public function dragUpdateEvent()
	{

		$result = $this->Calendar_model->dragUpdateEvent();
		echo $result;
	}
}
