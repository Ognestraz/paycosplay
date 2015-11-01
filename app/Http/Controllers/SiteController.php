<?php namespace App\Http\Controllers;

use Response;
use Input;
use App\Models\Site;

class SiteController extends Controller {

    use Traits\Items;

    protected $model = 'site';
    protected $requestParam = array('parent');

    public function tree()
    {
        return $this->model()->createTree();
    }

    public function update($id)
    {
        $result = parent::update($id);

        if (!Input::get('_action')) {

            $model = $this->model($id);
            $model->autopath = Input::get('autopath', 0);
            $model->save();

        }

        return $result;
    }       

    public function move($id)
    {
        $model = $this->model($id);
        $model->move($id, Input::get('parent'), Input::get('position'));

        $this->result['action'] = 'move';
        $this->result['module'] = $this->name();
        $this->result['result'] = true;             

        return Response::json($this->result);
    }         

    public function show($path)
    {
        $site = Site::findPath($path, true, true);
        Site::$site = $site;
        
        return view($site->view(), array('site' => $site));
    }
 
}