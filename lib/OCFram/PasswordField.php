<?php
namespace OCFram;

class PasswordField extends Field
{
  
  public function buildWidget()
  {
    $widget = '';

    if (!empty($this->errorMessage))
    {
      $widget .= $this->errorMessage.'<br />';
    }
    
    $widget .= '<label>'.$this->label.'</label><input type="password" name="'.$this->name.'" id="'.$this->id.'"';
    
    if (!empty($this->value))
    {
      $widget .= ' value="'.htmlspecialchars($this->value).'"';
    }

    if (!empty($this->maxLength))
    {
      $widget .= ' maxlength="'.$this->maxLength.'"';
    }
    
    return $widget .= ' />';
  }
}
?>