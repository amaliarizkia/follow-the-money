<?php

namespace BD\Ajax;

defined('ABSPATH') || die("Can't access directly");

class AnswerSequence {
	public function __construct()
	{
		add_action('wp_ajax_choose_episode', [$this, 'ajax']);
		add_action('wp_ajax_nopriv_choose_episode', [$this, 'ajax']);
	}

	public function ajax()
	{
		$this->_sanitize();
		$this->_validate();
		$this->_response();
	}

	private function _sanitize()
	{
	}

	private function _validate()
	{
	}

	private function _response()
	{
	}
}