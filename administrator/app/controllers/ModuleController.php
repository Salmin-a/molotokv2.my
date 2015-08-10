<?php

class ModuleController extends Controller {
    public function index()
    {
        $module = new Module($this->db);
        $this->f3->set('module',$module->all());
        $this->f3->set('view','module/index.html');
    }

    public function editById()
    {
        $module = new Module($this->db);
        $this->f3->set('module',$module->editById($this->f3->get('PARAMS.id')));

        $this->f3->set('pages',$module->link_pages($this->f3->get('PARAMS.id')));

        $this->f3->set('view','module/edit.html');
    }

    public function add_module()
    {
        $module = new Module($this->db);
        $module->add_module();
        $this->f3->set('view','module/ajax/add_module.html');
    }

    public function save_module()
    {
        $module = new Module($this->db);
        $id_module = $this->f3->get('POST.id_html');

        $html = $this->f3->get('POST.html');
        $html = htmlspecialchars($html);
        $this->f3->set('POST.html', $html);


        $module->save_module($id_module);

        $this->f3->reroute('/module/editbyid/' .$id_module);
    }


    public function link_module()
    {
        $module = new Module($this->db);

        $id_module = $this->f3->get('POST.id_html');
        $arr_pages = explode(' ' , $this->f3->get('POST.arr_pages'));

        $arr_pages = array_filter ($arr_pages);

        $module->link_module($id_module, $arr_pages);

        $this->f3->set('view','module/ajax/link_module.html');
    }


}