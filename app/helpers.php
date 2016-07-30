<?php

function flash($message) {
	return session()->flash('flash-message', $message);
};