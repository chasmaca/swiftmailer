<?php

require_once 'swift_required.php';
require_once 'Swift/Mime/MimePartAcceptanceTest.php';

class Swift_MimePartAcceptanceTest extends Swift_Mime_MimePartAcceptanceTest
{
  
  protected function _createMimePart()
  {
    return Swift_MimePart::newInstance();
  }
  
}