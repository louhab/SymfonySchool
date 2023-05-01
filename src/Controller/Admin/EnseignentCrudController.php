<?php

namespace App\Controller\Admin;

use App\Entity\Enseignent;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class EnseignentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Enseignent::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
