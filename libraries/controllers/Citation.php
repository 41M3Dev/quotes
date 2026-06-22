<?php


namespace Controllers;

require_once('libraries/autoload.php');

class Citation extends Controller
{
    protected $modelName = \Models\Citation::class;
    //Dirige vers les page
    public function index()
    {
        $pageTitle = "Accueil";
        \Renderer::render('citation/index', compact('pageTitle'));
    }

    public function findDc()
    {
        if (!empty($_GET['cate'])) {
            $cate = $_GET['cate'];
        }
        $citation = $this->model->findTypes($cate);
        \Renderer::render('citation/dc', compact('citation'));
    }
    public function findA()
    {
        if (!empty($_GET['cate'])) {
            $cate = $_GET['cate'];
        }
        $citation = $this->model->findTypes($cate);
        \Renderer::render('citation/anime', compact('citation'));
    }
    public function findMa()
    {
        if (!empty($_GET['cate'])) {
            $cate = $_GET['cate'];
        }
        $citation = $this->model->findTypes($cate);
        \Renderer::render('citation/marvel', compact('citation'));
    }
    public function findMu()
    {
        if (!empty($_GET['cate'])) {
            $cate = $_GET['cate'];
        }
        $citation = $this->model->findTypes($cate);
        \Renderer::render('citation/musique', compact('citation'));
    }
    public function findD()
    {
        if (!empty($_GET['cate'])) {
            $cate = $_GET['cate'];
        }
        $citation = $this->model->findTypes($cate);
        \Renderer::render('citation/disney', compact('citation'));
    }
}
