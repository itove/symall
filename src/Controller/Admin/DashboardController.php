<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use App\Entity\Address;
use App\Entity\Aftersales;
use App\Entity\Attrib;
use App\Entity\Brand;
use App\Entity\Cart;
use App\Entity\Category;
use App\Entity\Comment;
use App\Entity\Coupon;
use App\Entity\Favorite;
use App\Entity\Feedback;
use App\Entity\Footprint;
use App\Entity\Goods;
use App\Entity\Groupon;
use App\Entity\GrouponRule;
use App\Entity\Keyword;
use App\Entity\Node;
use App\Entity\OrderItem;
use App\Entity\Order;
use App\Entity\Post;
use App\Entity\Product;
use App\Entity\Search;
use App\Entity\Spec;
use App\Entity\StoreApply;
use App\Entity\Store;
use App\Entity\Topic;
use App\Entity\UserCoupon;
use App\Entity\User;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(ProductCrudController::class)->generateUrl());

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
            ->setTitle('Symall');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Address', 'fas fa-list', Address::class);
        yield MenuItem::linkToCrud('Aftersales', 'fas fa-list', Aftersales::class);
        yield MenuItem::linkToCrud('Attrib', 'fas fa-list', Attrib::class);
        yield MenuItem::linkToCrud('Brand', 'fas fa-list', Brand::class);
        yield MenuItem::linkToCrud('Cart', 'fas fa-list', Cart::class);
        yield MenuItem::linkToCrud('Category', 'fas fa-list', Category::class);
        yield MenuItem::linkToCrud('Comment', 'fas fa-list', Comment::class);
        yield MenuItem::linkToCrud('Coupon', 'fas fa-list', Coupon::class);
        yield MenuItem::linkToCrud('Favorite', 'fas fa-list', Favorite::class);
        yield MenuItem::linkToCrud('Feedback', 'fas fa-list', Feedback::class);
        yield MenuItem::linkToCrud('Footprint', 'fas fa-list', Footprint::class);
        yield MenuItem::linkToCrud('Goods', 'fas fa-list', Goods::class);
        yield MenuItem::linkToCrud('Groupon', 'fas fa-list', Groupon::class);
        yield MenuItem::linkToCrud('GrouponRule', 'fas fa-list', GrouponRule::class);
        yield MenuItem::linkToCrud('Keyword', 'fas fa-list', Keyword::class);
        yield MenuItem::linkToCrud('Node', 'fas fa-list', Node::class);
        yield MenuItem::linkToCrud('OrderItem', 'fas fa-list', OrderItem::class);
        yield MenuItem::linkToCrud('Order', 'fas fa-list', Order::class);
        yield MenuItem::linkToCrud('Post', 'fas fa-list', Post::class);
        yield MenuItem::linkToCrud('Product', 'fas fa-list', Product::class);
        yield MenuItem::linkToCrud('Search', 'fas fa-list', Search::class);
        yield MenuItem::linkToCrud('Spec', 'fas fa-list', Spec::class);
        yield MenuItem::linkToCrud('StoreApply', 'fas fa-list', StoreApply::class);
        yield MenuItem::linkToCrud('Store', 'fas fa-list', Store::class);
        yield MenuItem::linkToCrud('Topic', 'fas fa-list', Topic::class);
        yield MenuItem::linkToCrud('UserCoupon', 'fas fa-list', UserCoupon::class);
        yield MenuItem::linkToCrud('User', 'fas fa-list', User::class);
    }
}

