<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use Symfony\Component\Process\Process;

class HomepageController extends VoyagerBaseController
{
    public function index(Request $request){
        return parent::index($request);
    }

    public function show(Request $request, $id){
        return parent::show($request,$id);
    }

    public function edit(Request $request, $id){
        return parent::edit($request,$id);
    }

    public function update(Request $request, $id){
        $this->setEnv('PRIMARY_COLOR',$request->color);
        $process = new Process(['npm', 'run', 'prod']);
        $process->run();
        
        return parent::update($request,$id);
    }

    public function create(Request $request){
        return parent::create($request);
    }

    public function store(Request $request){
        $this->setEnv('PRIMARY_COLOR',$request->color);
        exec("npm run prod");
        return parent::store($request);
    }

    public function destroy(Request $request, $id){
        return parent::destroy($request,$id);
    }

    private function setEnv($key, $value)
    {
        //dd($key . '="' . env($key).'"',$key . '="' . $value.'"');
        file_put_contents(
            app()->environmentFilePath(), 
            str_replace(
                $key . '="' . env($key).'"',
                $key . '="' . $value.'"',
            file_get_contents(app()->environmentFilePath())
        ));
    }
}
