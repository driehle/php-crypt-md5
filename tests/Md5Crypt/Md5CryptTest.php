<?php

use Md5Crypt\Md5Crypt;

class Md5CryptTest extends PHPUnit_Framework_TestCase
{
	public function testCryptApache()
	{
		$hashs = array(
			'$apr1$LhjuTBTG$1yyIoSO1SonJQrGaHwQkG/' => 'test123',
			'$apr1$w2go1jJe$7fxPGEMF4Bt9r86NGDdcV/' => 'test123',
			'$apr1$0MSTHowM$hP/I/aMgXfOZV9OAVg14t.' => 'test123',
			'$apr1$4cumEdQx$82LyOEwV2gxHc4SVnzjB8.' => 'su/P3R%se#ret!',
			'$apr1$aKppLQLP$Vk.YsHCENJQVooBehuEeP.' => 'su/P3R%se#ret!',
			'$apr1$XdX7skyY$XnBqBmU6XBvbljPX5uyip.' => 'su/P3R%se#ret!'
		);
		
		foreach ($hashs as $hash => $plain) {
			$salt = substr($hash, 6, 8);
			$calc = Md5Crypt::apache($plain, $salt);
			$this->assertEquals($hash, $calc);
		}
	}
	
	public function testCryptUnix()
	{
		$hashs = array(
			'$1$bdy7K2F5$0vwww3cF65jxjSNrqf4D61' => 'test123',
			'$1$DINllbW2$fp/T3/GNNqJetH9pg/7q91' => 'test123',
			'$1$CDEt7N.1$LSPGEQscQy8ET/OxM2XZx1' => 'test123',
			'$1$36D57MdR$dxeAJ0ui5Kw2rnTBm1cdV1' => 'su/P3R%se#ret!',
			'$1$lI4qkDn4$Q32BgF2LjjcMmMfAoIPHZ0' => 'su/P3R%se#ret!',
			'$1$6D3ntBXk$Z73y/.fMJLxDR1QCgBhug1' => 'su/P3R%se#ret!'
		);
		
		foreach ($hashs as $hash => $plain) {
			$salt = substr($hash, 3, 8);
			$calc = Md5Crypt::unix($plain, $salt);
			$this->assertEquals($hash, $calc);
		}
	}
}

// eof