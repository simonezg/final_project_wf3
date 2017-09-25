<?php

namespace Controller;

use Entity\ProcessingLocation;
Use Repository\LieuTraitementRepository;

/**
 * Description of LieuTraitementController
 *
 * @author ghmor
 */
class LieuTraitementController extends ControllerAbstract{
    public function registerAction($id = null){
        
        
         if(is_null($id)){
            $location = new ProcessingLocation();
        } else {
            $location = $this->app['lieutraitement.repository']->find($id);
            if(is_null($location)){
                $this->app->abort(404);
            }
        }
            
        //$location = new ProcessingLocation();
        $errors = [];
        $clients = $this->app['client.repository']->findAll();
        //affichages des infos de lieu de traitement
        $locations = $this->app['lieutraitement.repository']->findAll();
        
        if(!empty($_POST)){
            $location->setProcessing_location($_POST['processing_location'])
                     ->setProcessing_address($_POST['processing_address'])
                     ->setPostal_code($_POST['postal_code'])
                     ->setCity($_POST['city'])
                     ->setCountry($_POST['country'])
                    ;
            
            if(empty($_POST['processing_location'])){
                $errors['processing_location'] = "Le lieu de traitement est obligatoire";
            }
            
            if(empty($_POST['processing_address'])){
                $errors['processing_address'] = "L'adresse du lieu de traitement est obligatoire";
            }
            
            if(empty($_POST['postal_code'])){
                $errors['postal_code'] = "Le code postal est obligatoire";
            }
            
            if(empty($_POST['city'])){
                $errors['city'] = "La ville est obligatoire";
            }
            
            if(empty($_POST['country'])){
                $errors['country'] = "Le pays est obligatoire";
            }
            
            if(empty($errors)){
                $this->app['lieutraitement.repository']->save($location);
                $message = '<strong>Le lieu de traitement à bien été enregistré</strong>';
                $this->addFlashMessage($message, 'success');
                return $this->redirectRoute('compteadmin');
            }
            else{
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>'.implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        
        }
        return $this->render('admin/formulaireLieuTraitement.html.twig', 
                [
                    'lieutraitement' =>$location,
                    'clients' =>$clients,
                    'locations' =>$locations
                ]);
        
    }
    public function listAction() {
       // $clients = $this->app['client.repository']->findAll();
    //    $collectors = $this->app['collector.repository']->findAllByLocation();
        
        // pour les biodéchets
        $totalweightbyweek = $this->app['collecte.repository']->findTotalBioWasteWeightByWeek();
        $totalweight = $this->app['collecte.repository']->findTotalBioWasteWeight();
        $locations = $this->app['lieutraitement.repository']->findAll();
        //pour le compost (matière valorisé)
        $totalweightoutputcompost = $this->app['outputcompost.repository']->findTotalCompostWeight();
        $totalweightoutputcompostbyweek = $this->app['outputcompost.repository']->findTotalCompostWeightByWeek();
        
        foreach ($locations as $location) {
            $collectors = $this->app['collector.repository']->findAllByLocationId($location->getId_location_processing());
            $Lieux = $this->app['lieucollecte.repository']->findAllByLocationId($location->getId_location_processing());
            $clients = $this->app['client.repository']->findAllByLocationId($location->getId_location_processing());
            
            $location->setCollectors($collectors);
            $location->setLieux($Lieux);
            $location->setClients($clients);
        } 
        
        
        return $this->render('compteadmin.html.twig', 
                    [
                    'locations' => $locations,
                    'clients' => $clients, //pour la requete 2 du client.rep
                    'totalweight' => $totalweight,
                    'totalweightbyweek' => $totalweightbyweek,
                        'totalweightoutputcompost' => $totalweightoutputcompost,
                        'totalweightoutputcompostbyweek' => $totalweightoutputcompostbyweek
//                    'collectors' => $collectors,
//                    'clients' => $clients
                    ]
        );
    }
    
    public function editAction($id = null){
        if(is_null($id)){
            $location = new ProcessingLocation();
        }
        else{
            $location = $this->app['lieutraitement.repository']->find($id);
        }
        
        $errors = [];
        $clients = $this->app['client.repository']->findAll();
        //affichages des infos de lieu de traitement
        $locations = $this->app['lieutraitement.repository']->findAll();
        
        if(!empty($_POST)){
            $location->setProcessing_location($_POST['processing_location'])
                     ->setProcessing_address($_POST['processing_address'])
                     ->setPostal_code($_POST['postal_code'])
                     ->setCity($_POST['city'])
                     ->setCountry($_POST['country'])
                    ;
            
            if(empty($_POST['processing_location'])){
                $errors['processing_location'] = "Le lieu de traitement est obligatoire";
            }
            
            if(empty($_POST['processing_address'])){
                $errors['processing_address'] = "L'adresse du lieu de traitement est obligatoire";
            }
            
            if(empty($_POST['postal_code'])){
                $errors['postal_code'] = "Le code postal est obligatoire";
            }
            
            if(empty($_POST['city'])){
                $errors['city'] = "La ville est obligatoire";
            }
            
            if(empty($_POST['country'])){
                $errors['country'] = "Le pays est obligatoire";
            }
            
            if(empty($errors)){
                $this->app['lieutraitement.repository']->save($location);
                $message = '<strong>Le lieu de traitement à bien été mis à jour</strong>';
                $this->addFlashMessage($message, 'success');
                return $this->redirectRoute('compteadmin');
            }
            else{
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>'.implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        return $this->render('admin/formulaireLieuTraitement.html.twig', 
                [
                    'lieutraitement' => $location,
                    'clients' =>$clients,
                    'locations' => $locations
                ]);
    }
    
    public function listAllLieuxTraitement(){
        $lieux = $this->app['lieutraitement.repository']->findAll();
        
        return $this->render(
            'listLieuTraitement.html.twig',
            [
                'lieux' => $lieux
            ]
        );
    }
    public function deleteAction($id){
       
         $this->app['lieutraitement.repository']->delete($id);
        
        return $this->render(
                'listLieuTraitement.html.twig'
                );
    }
}
