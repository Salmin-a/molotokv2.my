<?php
class IndexController extends Controller {
    public function index()
    {
        $this->f3->reroute('/index.html');
    }


}
