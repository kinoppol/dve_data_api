<?php
class dve_data_api{
    protected $url='https://dve.vec.go.th/dvt/';
    protected $uri='';
    function __construct($aid,$akey) {
        $this->url.='?p=api/dvt_api/get/data/aid/'.$aid.'/akey/'.$akey.'/data/';
    }
    function get_data($table_name,$qkey=NULL){
        $this->uri=$table_name;
        if(!empty($qkey)){
            $this->uri.='/qkey/'.$qkey;
        }
        $result=file_get_contents($this->url.$this->uri);
        $result=json_decode($result);
        return $result;
    }
}