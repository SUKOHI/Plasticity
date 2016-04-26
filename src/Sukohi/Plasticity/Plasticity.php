<?php namespace Sukohi\Plasticity;

use Symfony\Component\HttpFoundation\BinaryFileResponse;

class Plasticity {

	public function download($file, $name = null, array $headers = array(), $disposition = 'attachment') {

		$response = new BinaryFileResponse($file, 200, $headers, true, $disposition);
		$response->headers->set('Content-Disposition', 'attachment; filename*=UTF-8\'\''.rawurlencode($name));
		return $response;

	}

}