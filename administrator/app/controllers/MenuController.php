<?php

class MenuController extends Controller {
    public function index()
    {
        $menu = new Menu($this->db);
        $this->f3->set('menu',$menu->all());
        $this->f3->set('view','menu/index.html');
    }

    public function editById()
    {
        $menu = new Menu($this->db);
        $this->f3->set('menu',$menu->editById($this->f3->get('PARAMS.id')));
        $this->f3->set('menu_list',$menu->listById($this->f3->get('PARAMS.id')));
        $this->f3->set('pages',$menu->link_pages($this->f3->get('PARAMS.id')));
        $this->f3->set('view','menu/edit.html');
    }

    public function delete()
    {
        $menu = new Menu($this->db);
        $this->f3->set('menu',$menu->all($this->f3->get('PARAMS.id')));



        $this->f3->set('view','menu/index.html');
    }

    public function add_menu()
    {
        $menu = new Menu($this->db);
        $menu->add_menu();

        $this->f3->set('view','menu/ajax/add_menu.html');
    }

    public function save_menu()
    {
        $menu = new Menu($this->db);
        $id_page = $this->f3->get('POST.id_menu');
        $menu->save_menu($id_page);

        $this->f3->set('view','menu/ajax/save_menu.html');
    }

    public function addlist_menu()
    {
        $menu = new Menu($this->db);
        $menu->addlist_menu();

        $this->f3->set('view','menu/ajax/addlist_menu.html');
    }

    public function link_menu()
    {
        $menu = new Menu($this->db);

        $id_menu = $this->f3->get('POST.id_menu');
        $arr_pages = explode(' ' , $this->f3->get('POST.arr_pages'));

        $arr_pages = array_filter ($arr_pages);

        $menu->link_menu($id_menu, $arr_pages);

        $this->f3->set('view','menu/ajax/link_menu.html');
    }


    public function filter_menu()
    {
        $menu = new Menu($this->db);
        $filter = $this->f3->get('POST.filter');

        $this->f3->set('menu',$menu->filter($filter));

        $this->f3->set('view','menu/ajax/filter_menu.html');
    }


}