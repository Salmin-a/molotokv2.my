<?php

class TemplateController extends Controller {
    public function index()
    {
        $template = new Templat($this->db);

        $this->f3->set('template',$template->all());
        $this->f3->set('view','template/index.html');
    }

    public function editById()
    {
        $template = new Templat($this->db);
        $this->f3->set('template',$template->editById($this->f3->get('PARAMS.id')));

        $pages = new Page($this->db);
        $this->f3->set('pages',$pages->all());

        $this->f3->set('view','template/edit.html');
    }

    public function add_template()
    {
        $template = new Templat($this->db);
        $template->add_template();
        $this->f3->set('view','template/ajax/add_template.html');
    }

    public function save_template()
    {
        $template = new Templat($this->db);
        $id_template = $this->f3->get('POST.id');
        $template->save_template($id_template);

        $this->f3->set('view','template/ajax/save_template.html');
    }
}