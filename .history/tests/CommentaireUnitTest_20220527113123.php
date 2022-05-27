<?php

namespace App\Tests;

use DateTime;
use App\Entity\Peinture;
use App\Entity\Commentaire;
use PHPUnit\Framework\TestCase;

class CommentaireUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $commentaire = new Commentaire();
        $datetime = new DateTime();
        $peinture = new Peinture();
        $blogpost = new Blogpost();

        $commentaire->setAuteur('auteur')
            ->setEmail('email@test.com')
            ->setCreatedAt($datetime)
            ->setContenu('contenu')
            ->setBlogpost($blogpost)
            ->setPeinture($peinture);

        $this->assertTrue($commentaire->getAuteur() === 'auteur');
        $this->assertTrue($commentaire->getEmail() === 'email@test.com');
        $this->assertTrue($commentaire->getCreatedAt() === $datetime);
        $this->assertTrue($commentaire->getContenu() === 'contenu');
        $this->assertTrue($commentaire->getBlogpost() === $blogpost);
        $this->assertTrue($commentaire->getPeinture() === $peinture);
    }

    public function testIsfalse()
    {
        $commentaire = new Commentaire();
        $datetime = new DateTime();
        $peinture = new Peinture();
        $blogpost = new Blogpost();

        $commentaire->setAuteur('false')
            ->setEmail('false@test.com')
            ->setCreatedAt($datetime)
            ->setContenu('false')
            ->setBlogpost(new Blogpost)
            ->setPeinture(new Peinture);

        $this->assertFalse($commentaire->getAuteur() === 'auteur');
        $this->assertFalse($commentaire->getEmail() === 'email@test.com');
        $this->assertFalse($commentaire->getCreatedAt() === new DateTime());
        $this->assertFalse($commentaire->getContenu() === 'contenu');
        $this->assertFalse($commentaire->getBlogpost() === $blogpost);
        $this->assertFalse($commentaire->getPeinture() === $peinture);
    }

    public function testIsEmpty()
    {
        $commentaire = new Commentaire();

        $this->assertEmpty($commentaire->getAuteur());
        $this->assertEmpty($commentaire->getEmail());
        $this->assertEmpty($commentaire->getCreatedAt());
        $this->assertEmpty($commentaire->getContenu());
        $this->assertEmpty($commentaire->getBlogpost());
        $this->assertEmpty($commentaire->getPeinture());
        $this->assertEmpty($commentaire->getId());
    }
}
