<?php vF_Check();# ----------------------# Class: Link, Url # Author: Yplit# Date: 14/6/2012#-----------------------class vF_url{	private $_instance;	public $systemUrl = '';	public $systemPath = '';	public $vF;	public function __construct()	{		$this->vF = $GLOBALS['vF'];	}		public static function getInstance()	{		if( !self::$_instance )		{			self::$_instance = new self();		}		return self::$_instance;	}	public function parseUrl( $url )	{		if( empty( $url ) ) return $url;		if( preg_match( '/^http:\/\//i', $url ) ) return $url;		if( $this->vF->Options->vf_rewrite > 0 )		{			return $this->rewriteUrl( $url, $this->vF->Options->vf_rewrite );		}	}}