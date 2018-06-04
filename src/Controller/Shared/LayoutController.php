<?php
/**
 * Created by PhpStorm.
 * User: aogaga
 * Date: 5/31/18
 * Time: 11:35 AM
 */

namespace App\Controller\Shared;
use App\Services\MessageGenerator;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

/**
 * Class LayoutController
 *
 *
 */
class LayoutController extends FOSRestController
{
    private $messageGenerator;
    public function __construct(MessageGenerator $MessageGenerator)
    {
        $this->messageGenerator = $MessageGenerator;
    }

    /**
     * @Rest\View();
     * @Rest\Get("/")
     */
    public function siteName( ){

        $books = ["ogaga", "james", "Karl Max"];
       /// return $this->messageGenerator->getHappyMessage();
        return $books;
    }
}