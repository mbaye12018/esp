<?php
require_once __DIR__ . '/../getset/Article.php';

class ArticleDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAllArticles() {
        try {
            $stmt = $this->pdo->query('SELECT * FROM Article');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception('Erreur lors de la récupération des articles: ' . $e->getMessage());
        }
    }

    public function getArticlesByCategory($categoryId) {
        try {
            $stmt = $this->pdo->prepare('SELECT * FROM Article WHERE categorie = :categorie');
            $stmt->execute(['categorie' => $categoryId]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception('Erreur lors de la récupération des articles par catégorie: ' . $e->getMessage());
        }
    }
}
?>
