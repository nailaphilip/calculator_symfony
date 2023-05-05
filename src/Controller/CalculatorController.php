<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController extends AbstractController
{
    #[Route('/', name: 'app_calculator')]
    public function index(Request $request)
    {
        $firstNumber = $request->$request->get('firstNumber');
        $secondNumber = $request->$request->get('secondNumber');
        $operation = $request->$request->get('operation');

        $result=0;
        switch ($operation) {
            case '+':
                $result = $firstNumber + $secondNumber;
                case '-':
                    $result = $firstNumber - $secondNumber;
                    case '*':
                        $result = $firstNumber * $secondNumber;
                        case '/':
                            $result = $firstNumber / $secondNumber;

        }
        return $this->render('calculator/index.html.twig', [
            'result' =>$result,
        ]);
    }
}

