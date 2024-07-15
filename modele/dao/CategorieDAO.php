<?php
require_once __DIR__ . '/../getset/Categorie.php';

class CategorieDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAllCategories() {
        try {
            $categ = $this->pdo->query('SELECT * FROM Categorie');
            return $categ->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception('Erreur lors de la récupération des catégories: ' . $e->getMessage());
        }
    }
}
?>
