<?php
namespace Entity;

use \OCFram\Entity;

class Comment extends Entity
{
  protected $news,
            $auteur,
            $contenu,
            $date,
            $email,
            $avertissement;

  const AUTEUR_INVALIDE = 1;
  const CONTENU_INVALIDE = 2;

  public function isValid()
  {
    return !(empty($this->auteur) || empty($this->contenu));
  }

  public function setNews($news)
  {
    $this->news = (int) $news;
  }

  public function setAuteur($auteur)
  {
    if (!is_string($auteur) || empty($auteur))
    {
      $this->erreurs[] = self::AUTEUR_INVALIDE;
    }

    $this->auteur = $auteur;
  }

  public function setContenu($contenu)
  {
    if (!is_string($contenu) || empty($contenu))
    {
      $this->erreurs[] = self::CONTENU_INVALIDE;
    }

    $this->contenu = $contenu;
  }

  public function setDate(\DateTime $date)
  {
    $this->date = $date;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function setAvertissement($avertissement)
  {
    $this->avertissement = $avertissement;
  }

  public function news()
  {
    return $this->news;
  }

  public function auteur()
  {
    return $this->auteur;
  }

  public function contenu()
  {
    return $this->contenu;
  }

  public function date()
  {
    return $this->date;
  }

  public function email()
  {
    return $this->email;
  }

  public function avertissement()
  {
    return $this->avertissement;
  }
}
?>