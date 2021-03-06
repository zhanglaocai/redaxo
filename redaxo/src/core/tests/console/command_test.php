<?php

class rex_console_command_test extends PHPUnit_Framework_TestCase
{
    public function testDecodeMessage()
    {
        $method = new ReflectionMethod(rex_console_command::class, 'decodeMessage');
        $method->setAccessible(true);

        $command = $this->getMockForAbstractClass(rex_console_command::class);

        $this->assertSame("\"Foo\"\nbar\nbaz\nabc\ndef", $method->invoke($command, "&quot;Foo&quot;<br><b>bar</b><br />\nbaz<br/>\rabc<br>\r\ndef"));
    }
}
