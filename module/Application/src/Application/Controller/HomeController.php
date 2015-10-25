<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class HomeController extends AbstractActionController
{
    static $CultureMap;
    
    private function Init($actionName)
    {
        $culture = $this->getEvent()->getRouteMatch()->getParam('lang','de');
        if(array_key_exists($culture,HomeController::$CultureMap) == false)
        {
            $culture = "de";
        }
        $this->layout()->culture = $culture;
        $this->layout()->actionName = $actionName;
        
        $translator = $this->getServiceLocator()->get('translator');
        $translator->setLocale(HomeController::$CultureMap[$culture]);
    }
    
    public function indexAction()
    {
        $this->Init("index");
        
        $slides = array();
        $slides["/images/Slider/BellaPic4.jpg"] = "LocalResources.ContentPage.slide_start_imagecaption_1";
        $slides["/images/Slider/BellaPic40.jpg"] = "LocalResources.ContentPage.slide_start_imagecaption_2";
        $slides["/images/Slider/BellaPic2.jpg"] = "LocalResources.ContentPage.slide_start_imagecaption_3";
        $slides["/images/Slider/BellaPic10.jpg"] = "LocalResources.ContentPage.slide_start_imagecaption_4";
        $slides["/images/Slider/BellaPic1.jpg"] = "LocalResources.ContentPage.slide_start_imagecaption_5";
        
        $this->layout()->slides = $slides;
                
        return new ViewModel();
    }
    
    public function specialsAction()
    {
        $this->Init("specials");
    }
    
    public function hotelAction()
    {
        $this->Init("hotel");

        $slides = array();
        $slides["/images/Slider/BellaPic5.jpg"] = "LocalResources.ContentPage.slide_hotel_imagecaption_1";
        $slides["/images/Slider/terrasse1.jpg"] = "LocalResources.ContentPage.slide_hotel_imagecaption_3";
        $slides["/images/Slider/terrasse2.jpg"] = "LocalResources.ContentPage.slide_hotel_imagecaption_3";
        $slides["/images/Slider/BellaPic7.jpg"] = "LocalResources.ContentPage.slide_hotel_imagecaption_2";
        $slides["/images/Slider/BellaPic23.jpg"] = "LocalResources.ContentPage.slide_hotel_imagecaption_3";
        $slides["/images/Slider/BellaPic33.jpg"] = "LocalResources.ContentPage.slide_hotel_imagecaption_4";
        $slides["/images/Slider/zimmer_balkon.png"] = "LocalResources.ContentPage.slide_hotel_imagecaption_5";
        
        $this->layout()->slides = $slides;
                
        return new ViewModel();
    }
    
    public function bookingAction()
    {
        $this->Init("booking");
                        
        return new ViewModel();
    }
    
    public function reviewAction()
    {
        $this->Init("review");
                        
        return new ViewModel();
    }
    
    public function restaurantAction()
    {
        $this->Init("restaurant");
                
        $slides = array();
        $slides["/images/Slider/BellaPic17.jpg"] = "LocalResources.ContentPage.slide_restaurant_imagecaption_1";
        $slides["/images/Slider/BellaPic22.jpg"] = "LocalResources.ContentPage.slide_restaurant_imagecaption_2";
        $slides["/images/Slider/BellaPic25.jpg"] = "LocalResources.ContentPage.slide_restaurant_imagecaption_3";
        $slides["/images/Slider/BellaPic34.jpg"] = "LocalResources.ContentPage.slide_restaurant_imagecaption_4";
                
        $this->layout()->slides = $slides;
        
        return new ViewModel();
    }
    
    public function roomsAction()
    {
        $this->Init("rooms");
                
        $slides = array();
        $slides["/images/Slider/BellaPic13.jpg"] = "LocalResources.ContentPage.slide_rooms_imagecaption_1";
        $slides["/images/Slider/BellaPic15.jpg"] = "LocalResources.ContentPage.slide_rooms_imagecaption_2";
        $slides["/images/Slider/BellaPic37.jpg"] = "LocalResources.ContentPage.slide_rooms_imagecaption_3";
        $slides["/images/Slider/BellaPic38.jpg"] = "LocalResources.ContentPage.slide_rooms_imagecaption_4";
        $slides["/images/Slider/gzimmer1.jpg"] = "LocalResources.ContentPage.slide_rooms_imagecaption_4";
        $slides["/images/Slider/gzimmer2.jpg"] = "LocalResources.ContentPage.slide_rooms_imagecaption_4";
        
        $this->layout()->slides = $slides;
                
        return new ViewModel();
    }
    
    public function aboutAction()
    {
        $this->Init("about");
                        
        $slides = array();
        $slides["/images/Slider/BellaPic16.jpg"] = "LocalResources.ContentPage.slide_about_imagecaption_1";
        $slides["/images/Slider/BellaPic30.jpg"] = "LocalResources.ContentPage.slide_about_imagecaption_2";
        $slides["/images/Slider/BellaPic31.jpg"] = "LocalResources.ContentPage.slide_about_imagecaption_3";
        
        $this->layout()->slides = $slides;
        
        return new ViewModel();
    }
}

HomeController::$CultureMap = array("de" => "de_CH", "it" => "it_CH", "en" => "en_US");
