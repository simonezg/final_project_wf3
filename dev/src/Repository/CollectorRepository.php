<?php

namespace Repository;

use Entity\Collector;

class CollectorRepository extends RepositoryAbstract{
    public function findByEmail($email) {
        $dbCollector = $this->db->fetchAssoc(
            'SELECT * FROM collector WHERE email = :email',
            [
                ':email' => $email
            ]
        );
        
        if(!empty($dbCollector)){
            return $this->buildEntity($dbCollector);
        }
    }
    // pour afficher les infos collecteur dans les vues
    public function findAll() 
    {
        $dbCollectors = $this->db->fetchAll('SELECT * FROM collector ORDER BY idcollector');
        $collectors =[];
        
        foreach ($dbCollectors as $dbCollector){
            $collectors[] = $this->buildEntity($dbCollector);
        }
        return $collectors;
    }
    
    public function save(Collector $collector) {
        $data = [
            'lastname' => $collector->getLastname(),
            'firstname' => $collector->getFirstname(),
            'phone_number' => $collector->getPhone_number(),
            'email' => $collector->getEmail(),
            'password' => $collector->getPassword(),
            'address' => $collector->getAddress(),
            'postal_code' => $collector->getPostal_code(),
            'city' => $collector->getCity(),
            'status' => $collector->getStatus(),
        ];
        
        if ($collector->getIdcollector()) {
            $this->db->update('collector', $data,
                [
                    'id' => $collector->getId()
                ]);
        } else {
            $this->db->insert('collector', $data);
            $collector->setIdcollector($this->db->lastInsertId());
        }
    }
    
    /**
     * 
     * @param array $data
     * @return User
     */
    private function buildEntity(array $data) {
        $collector = new Collector();
        
        $collector
            ->setIdcollector($data['idcollector'])
            ->setLastname($data['lastname'])
            ->setFirstname($data['firstname'])
            ->setPhone_number($data['phone_number'])
            ->setEmail($data['email'])
            ->setPassword($data['password'])
            ->setAddress($data['address'])                
            ->setPostal_code($data['postal_code'])
            ->setCity($data['city'])
            ->setStatus($data['status']);

        
        return $collector;
    }        
}
