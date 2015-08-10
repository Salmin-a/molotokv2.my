<?php

class BreadCrumb extends DB\SQL\Mapper {

    public function __construct(DB\SQL $db)
    {
        parent::__construct($db,'page');
    }
    public function getBREADCRUMB($url, $level)
    {
        $sql_header = "SELECT ";
        $sql_body = " FROM page as b1 ";
        $sql_footer = " WHERE b$level.url = '$url'";
        $sql = '';
        for ($i=1; $i < $level+1; $i++) {
            $sql_header .= "b$i.name as name$i, b$i.url as url$i";
            if ($i < $level) $sql_header .= ', ';
            if ($i>1)
            {
                $sql_body .= " Left JOIN page as b$i ON (b$i.parent = b" . ($i-1) . ".id_page)";
            }
        }
        $sql = $sql_header . $sql_body . $sql_footer;
        $result = $this->db->exec($sql);
        $count = (count($result[0]))/2;
        $breadcrumb = [];
        for ($i=1; $i <= $count; $i++) {
            $name = 'name' . $i;
            $url = 'url' . $i;
            $breadcrumb[]= ['name'=>$result[0][$name], 'url'=>$result[0][$url]];
        }
        return $breadcrumb;
    }

}
