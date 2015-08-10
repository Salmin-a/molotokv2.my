<?php
class MainController extends Controller {
    public function template()
    {
        $page = new Content($this->db);
        $content = $page->getContent($this->f3->get('PARAMS.0'));

        $bread = new BreadCrumb($this->db);
        $breadcrumbs = $bread->getBREADCRUMB($this->f3->get('PARAMS.0'), $content['level']);

        $module = new Modules($this->db);
        $modules = $module->getModules($this->f3->get('PARAMS.0'));

        $menu = new Menu($this->db);
        $menus = $menu->getMenu($this->f3->get('PARAMS.0'));

        #var_dump($menus);

        $this->f3->set('content', $content);
        $this->f3->set('breadcrumbs', $breadcrumbs);
        $this->f3->set('module', $modules);
        $this->f3->set('menu', $menus);
        $this->f3->set('view', $content['template']);
    }

}
