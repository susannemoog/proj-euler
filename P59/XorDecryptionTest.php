<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 21.02.2015
 * Time: 11:10
 */

namespace P59;


class XorDecryptionTest extends \PHPUnit_Framework_TestCase {

    public function testFindMostUsedChar()
    {
        $xd = new XorDecryption();
        // key=abc, value = ABF      (6 spaces)
        $ret = $xd->decrypt('32,32,37,65,66,67,65,66,67');
        $this->assertSame('ABF      ', $ret);
    }

    public function testDecrypt()
    {
        $xd = new XorDecryption();
        $string = file_get_contents('../Ressources/p059_cipher.txt');
        $ret = $xd->decryptedSum($string);
        $this->assertSame('ABF      ', $ret);
    }


}
