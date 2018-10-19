<?php

namespace Art\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    protected $p_rep;
    protected $s_rep;
    protected $a_rep;
    protected $m_rep;

    protected $template;
    protected $vars;

    public function __construct()
    {

    }
    protected function renderOutput(){
        //Вывод шаблона на экран
        return view($this->template)->with($this->vars);
    }
}
