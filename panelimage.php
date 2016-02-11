<?php

class PanelimageField extends BaseField {

  public function result() {
    return null;
  }
  
  public function content() {
    return '<img src="' . $this->i18n($this->imageurl()) . '"style="width: 100%;">';
  }

}