<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }

    public function index()   
    {

        $url = env('URL_SERVER_API');

        $categories = $this->fetchDataFromApi($url . '/categories');
 
        //return $categories;

        return view('category.index', compact('categories'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');

        $category = $this->fetchDataFromApi($url . '/categories/' . $id);

        return view('category.show', compact('category'));
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $url = env('URL_SERVER_API');
        
        $response=Http::post($url. '/categories',$request->all());
        return redirect()->route('categories.index');
    }

    public function destroy($id){
        $url = env('URL_SERVER_API');
        $response=Http::delete($url. '/categories/'.$id);
        return redirect()->route('categories.index');
    }

    public function edit($id){
        $url = env('URL_SERVER_API');
        // Obtiene la categoría desde la API para mostrar en el formulario de edición
        $category = $this->fetchDataFromApi($url . '/categories/' . $id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $url = env('URL_SERVER_API');
        $response=Http::put($url. '/categories/'.$id ,$request->all());
        return redirect()->route('categories.index');

    }
}