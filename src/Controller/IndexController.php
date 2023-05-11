<?php

namespace App\Controller;

use App\Form\Type\AdressbuchType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/index/adressen', name: 'app_adressen')]
    public function indexAction(Request $request): Response
    {

        $Orte = ['Offenburg', 'Bühl', 'Karlsruhe'];
        $Strassen = ['Pausenweg 4', 'Musterweg 14', 'Pausenweg 4'];
        $Postleitzahlen = ['77652', '12345', '53467'];

        $form = $this->createForm(AdressbuchType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $data = $form->getData();
            dd($data);
        }

        return $this->render('index/index.html.twig', array(
            'Orte' => $Orte,
            'Strassen' => $Strassen,
            'Postleitzahlen' => $Postleitzahlen,
            'AdressbuchForm' => $form
        ));
    }
}
