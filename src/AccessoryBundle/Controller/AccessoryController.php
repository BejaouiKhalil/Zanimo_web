<?php

namespace AccessoryBundle\Controller;

use AccessoryBundle\Entity\Accessory;
use AccessoryBundle\Form\AccessoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;


class AccessoryController extends Controller
{
    public function showAction(Accessory $accessory)
    {
        return $this->render('AccessoryBundle:Accessory:show.html.twig', array(
            "accessory"=>$accessory
        ));
    }

    public function listAction()
    {
        $accessories = $this->getDoctrine()->getManager()->getRepository(Accessory::class)->findAll();
        return $this->render('AccessoryBundle:Accessory:list.html.twig', array(
            "accessories"=>$accessories
        ));
    }

    public function UpdateAction(Accessory $accessory)
    {

        return $this->render('AccessoryBundle:Accessory:update.html.twig', array(
            // .
        ));
    }

    public function AddAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $accessory = new Accessory();
        $form = $this->createForm(AccessoryType::class,$accessory);
        $form->handleRequest($request);
        if  ($form->isSubmitted() && $form->isValid()) {

          $file = new UploadedFile($accessory->getImageUrl(),'test');

            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('img_directory'),
                $fileName
            );
            $accessory->setImageUrl('uploads/'.$fileName);

            $em->persist($accessory);
            $em->flush();
            return $this->redirectToRoute('list');
        }
        return $this->render('@Accessory/Accessory/add.html.twig',
            array('form'=> $form->createView()));
    }
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }

}
