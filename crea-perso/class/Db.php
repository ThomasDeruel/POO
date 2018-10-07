<?php
class Db{
    /**
     * @var
     */
    private $_pdo;

    /**
     * Db constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->setPdo($pdo);
    }

    /**
     * @return mixed
     */
     public function setPdo(PDO $pdo){
        return $this->_pdo = $pdo;
     }
     public function addPersonnage(Personnage $perso){
         $query ="INSERT INTO personnage SET
                   `nom` = :nom,
                  `classe` = :classe,
                  `sexe` = :sexe,
                  `experience` = :experience,
                  `niveau` = :niveau,
                  `strength`= :strength,
                  `vie` = :vie;";
         $request = $this->_pdo->prepare($query);
         $request->bindValue(':nom',$perso->getName(),PDO::PARAM_STR);
         $request->bindValue(':classe',$perso->getClass(),PDO::PARAM_STR);
         $request->bindValue(':vie',$perso->getLife(),PDO::PARAM_INT);
         $request->bindValue(':sexe',$perso->getSex(),PDO::PARAM_STR);
         $request->bindValue(':niveau',$perso->getLevel(),PDO::PARAM_INT);
         $request->bindValue(':strength',$perso->getStrength(),PDO::PARAM_INT);
         $request->bindValue(':experience',$perso->getExperience(),PDO::PARAM_INT);
         $request->execute() or die(print_r($request->errorInfo()));
     }
}