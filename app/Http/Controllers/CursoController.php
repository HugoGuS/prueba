<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;
class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }
    public function create()
    {
        return view('cursos.create');
    }

    public function store(StoreCurso $request)
    {

        /*$curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save();*/

        $curso = Curso::create($request->all());
        return redirect()->route('cursos.show', $curso);
    }


    public function show($id)
    {
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
       return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {

        $request->validate([
            'name'=>'required | max:12',
            'description'=>'required | min:10',
            'category'=>'required'
        ]);
        /*$curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save();*/
        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);
    }
}
