<?php

namespace CanalTP\MttBridgeBundle\Menu\MenuManager;

use CanalTP\MttBridgeBundle\Menu\MenuManager;
use Prophecy\Argument;

class MenuManagerTest extends \PHPUnit_Framework_TestCase
{
    public function testGetMenu()
    {
        $userManagerMock = $this->prophesize('\CanalTP\MttBundle\Services\UserManager');
        $containerMock = $this->prophesize('\Symfony\Component\DependencyInjection\Container');
        $requestStackMock = $this->prophesize('Symfony\Component\HttpFoundation\RequestStack');
        $containerMock->get(Argument::type('string'))->willReturn($requestStackMock->reveal());

        $menuManager = new MenuManager($userManagerMock->reveal(), $containerMock->reveal());
        $menu = $menuManager->getMenu();
    }
}
