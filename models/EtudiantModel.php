<?php
class EtudiantModel
{
    public function all(){
        return [
            [
            "id"=>1,
            "nom"=>"plams",
            "promotion"=>"L3 GL",
            "tel"=>"0777777777",
            "image"=>"plams.jpg"
            ],

            [
            "id"=>2,    
            "nom"=>"winnie",
            "promotion"=>"L3 MSI",
            "tel"=>"0666666666",
            "image"=>"winni.jpg"
            ],

            [
            "id"=>3,
            "nom"=>"mohamed",
            "promotion"=>"L3 DSG",
            "tel"=>"0555555555",
            "image"=>"mohamed.jpg"
            ],
            
            [
            "id"=>4,
            "nom"=>"christian",
            "promotion"=>"L4 AS",
            "tel"=>"0444444444",
            "image"=>"christian.jpg"
            ],

            [
            "id"=>5,
            "nom"=>"mhd",
            "promotion"=>"L4 telecom",
            "tel"=>"0333333333",
            "image"=>"mhd.jpg"
            ]
        ];
    }
    public function find($etudiant_id){
  
        foreach ($this->all() as $etudiant) {
            if ($etudiant['id'] == $etudiant_id) {
                return $etudiant;
            }
        }
        return null; // Return null if not found
    }
}