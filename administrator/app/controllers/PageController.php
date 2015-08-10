<?php

class PageController extends Controller {
    public function index()
    {
        $page = new Page($this->db);

        $this->f3->set('page',$page->all());
        $this->f3->set('view','page/index.html');
    }

    public function editById()
    {
        $page = new page($this->db);
        $this->f3->set('page',$page->editById($this->f3->get('PARAMS.id')));
        $this->f3->set('id_page',$page->getParent($this->f3->get('PARAMS.id')));


        $this->f3->set('pages',$page->all());
        $this->f3->set('html',$page->getHtml($this->f3->get('PARAMS.id')));
        $this->f3->set('templ',$page->getTempl($this->f3->get('PARAMS.id')));

        $this->f3->set('view','page/edit.html');
    }


    public function save_page()
    {
        $page = new Page($this->db);
        $id_page = $this->f3->get('POST.id_page');

        $html = $this->f3->get('POST.html');
        $page->save_page($id_page, $html);

        $this->f3->reroute('/page/editbyid/' . $this->f3->get('POST.id_page'));
    }


    public function add_page()
    {
        $page = new Page($this->db);

        $url = $this->f3->get('POST.url');

        $url = str_replace('http://molotok-na-chas.ru/', '/', $url);
        $this->f3->set('POST.url', $url);

        $page->add_page($this->f3->get('POST'));

        $this->f3->set('view','page/ajax/add_page.html');
    }




    public function delete()
    {
        $menu = new Menu($this->db);
        $this->f3->set('page',$menu->all($this->f3->get('PARAMS.id')));
        $this->f3->set('view','page/index.html');
    }

}