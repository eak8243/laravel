<?php
class SiteController extends BaseController{
  public function indexAction(){
    return View::make('site/index');
  }
}
