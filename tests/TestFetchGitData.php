<?php

namespace League\Evangelist\Test;

use League\Evangelist\FetchGitData;


class FetchGitTest extends \PHPUnit_Framework_TestCase
{
  /**
   * Test that true does in fact equal true
   */
    public function test_git_result()
    {
        //$user = new EvangelistStatus('dipo');
        $this->assertTrue(FetchGitData::FetchData('dzpo'));
    }
}