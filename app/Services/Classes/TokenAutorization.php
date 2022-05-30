<?php

namespace App\Services\Classes;

/**
 * Clase TokenAutorization
 *
 **/
class TokenAutorization
{
	/**
	 * 
	 * Autorizacion y autenticacion para el web service a traves de un token
	 * @var string
	 **/
	var $token;

	/**
	 * Autorizacion y autenticacion para el web service a traves de una firma
	 *
	 * @var string
	 **/
	var $sign;

	function __construct($token, $sign)
	{
		$this->token 	= $token;
		$this->sign 	= $sign;
	}
}

