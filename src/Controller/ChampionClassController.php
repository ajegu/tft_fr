<?php

namespace App\Controller;

use App\Entity\ChampionClass;
use App\Entity\ClassSynergy;
use App\Entity\ClassSynergyRequirement;
use App\Form\ChampionClassType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ChampionClassController extends AbstractController
{
    /**
     * @Route("/champion/class", name="app_champion_class")
     */
    public function index()
    {
        return $this->render('champion_class/index.html.twig', [
            'controller_name' => 'ChampionClassController',
        ]);
    }

    /**
     * @Route("/add/champion/class", name="app_champion_class_add")
     */
    public function add(Request $request)
    {
        $championClass = new ChampionClass();

        $synergy = new ClassSynergy();

        $req1 = new ClassSynergyRequirement();
        $req1->setCount(2)
            ->setDescription('desc 1');
        $synergy->addRequirement($req1);

        $req2 = new ClassSynergyRequirement();
        $req2->setCount(4)
            ->setDescription('desc 2');
        $synergy->addRequirement($req2);
        $championClass->setSynergy($synergy);

        $form = $this->createForm(ChampionClassType::class, $championClass);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

        }

        return $this->render('champion_class/add.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
