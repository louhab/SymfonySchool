<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;

use App\Entity\Etudiant ;
use App\Entity\Filiere ;
use App\Entity\User ;
use App\Entity\Enseignant ;
use App\Entity\Module ;
use App\Entity\Note ;
use App\Entity\Semestre ;








class DashboardController extends AbstractDashboardController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function index(): Response
    {
        return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Gestion Exams');
    } 


    public function configureUserMenu(UserInterface $user): UserMenu
    {
        return parent::configureUserMenu($user)
        ->setName($user->getUserIdentifier())
        ->setGravatarEmail($user->getEmail())
     //   ->setAvatarUrl('https://www.clipartmax.com/middle/m2i8G6N4A0H7H7A0_frozen-clip-art-olaf-frozen/')
        ->displayUserAvatar(true);
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('User','fas fa-list', User::class);
        yield MenuItem::linkToCrud('Filiere','fas fa-list', Filiere::class);
        yield MenuItem::linkToCrud('Semestre','fas fa-list',Semestre::class);
        yield MenuItem::linkToCrud('Module','fas fa-list', Module::class);
        yield MenuItem::linkToCrud('Etudiant','fas fa-list', Etudiant::class);
        yield MenuItem::linkToCrud('Note','fas fa-list',Note::class);

    }
}
