<?php
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Entity\User;
use App\Controller\UserController;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserControllerTest extends WebTestCase
{
    // show test
    public function testShow(){
        $user = new UserController();
        $userRepository = array('user1','user2','user3');
        $user = $user->showTest($userRepository);
        $this->assertSame(true, $user);
    }

    // new user
    public function testNewUserTrue()
    {
        $user = new UserController();
        $user = $user->newTest('rodolphe','de Scorraille','roro@gmail.com','0610343597');
        $this->assertSame(true, $user);
    }

    public function testNewUserFalse()
    {
        $user = new UserController();
        $user = $user->newTest(12,'de Scorraille','roro@gmail.com','0610343597');
        $this->assertSame(false, $user);
    }

    // edit user
    public function testeditUserTrue()
    {
        $user = new UserController();
        $user = $user->editTest('rodolphe','de Scorraille');
        $this->assertSame(true, $user);
    }

    public function testeditUserFalse()
    {
        $user = new UserController();
        $user = $user->editTest(12);
        $this->assertSame(false, $user);
    }
}