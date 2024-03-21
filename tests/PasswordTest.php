<?php

// Inclusion des dépendances vendor (PHPUnit)
include( __DIR__ . '/../vendor/autoload.php');

use PHPUnit\Framework\TestCase;

// Inclusion du fichier des fonctions à tester
include(__DIR__ . '/../src/functions.php');


class PasswordTest extends TestCase
{
    /**
     * Test de la fonction VerifPassword
     */
    public function testVerifPassword()
    {
        $this->assertSame(false, verifPassword("Qam3"));
        $this->assertSame(false, verifPassword("qamQdVDbdAbc"));
        $this->assertSame(false, verifPassword("qamqdvdbabc3"));
        $this->assertSame(false, verifPassword("QAMQDVDBABC3"));
        $this->assertSame(false, verifPassword("qamQdVD3")); // 0 -> refusé (longueur insuffisante)
        $this->assertSame(false, verifPassword("qamQdVD3@")); // 0 -> refusé (4 critères mais longueur insuffisante)
        $this->assertSame(false, verifPassword("qamQdVD3vbn1")); // 6 -> refusé (longueur suffisante mais pas de caractère spécial)
        $this->assertSame(true, verifPassword("qamQdVD3@bn1")); // 10 ->accepté (longueur correcte et 4 critères présents)
    }
}