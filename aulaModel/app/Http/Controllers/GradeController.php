<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;

class GradeController extends Controller
{
    public function createGrade(Request $request) {

        $nota = new Grade;

        $nota->por = $request->por;
        $nota->eng = $request->eng;
        $nota->sci = $request->sci;
        $nota->mat = $request->mat;
        $nota->save();

        return response()->success($nota);
    }

    public function listGrade() {

        return Grade::all();
    }

    public function showGrade($id) {

        $nota = Grade::find($id);

        if($nota){
            return response()->success($nota);
        } else{
            $data = "Nota não encontrada, verifique o id novamente";
            return response()->error($data, 400);
        }
    }

    public function updateGrade(Request $request, $id) {

        $nota = Grade::findOrFail($id);

        if($request->port)
            $nota->port = $request->port;
        if ($request->eng)
            $nota->eng = $request->eng;
        if ($request->sci)
            $nota->sci = $request->sci;
        if($request->mat)
            $nota->mat = $request->mat;
        $nota->save();

        return response()->success($nota);
    }

    public function deleteGrade($id) {

        Grade::destroy($id);
        return response()->json(['Nota deletada']);
    }
}
