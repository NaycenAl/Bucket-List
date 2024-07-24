<?php



namespace App\Services;
use Doctrine\ORM\EntityManagerInterface;

class Censuration{

    private $offensiveWords = [
        "pute", "connard", "enfoiré", "salopard", "bâtard", "gouine", "pd",
        "merde", "chienne", "nique",  "enflure", "cul", "con"
    ];
    protected $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;

}
    public function purify($string ){

        foreach ($this->offensiveWords as $word) {
            $pattern = '/\b' . preg_quote($word, '/') . '\b/i';
            $replacement = str_repeat('*', strlen($word));
            $string = preg_replace($pattern, $replacement, $string);
        }
        return $string;
    }


}