<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Post;
use App\Models\Proceeding;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function archive_by_proceeding($id)
    {
        $proceeding = Proceeding::find($id);
        $archive = $proceeding->archives->first();
        /* dd($archive); */
        return redirect($archive->url);
    }
    public function change_actions(Request $request)
    {
        
      
       /*  dd($request->check); */
        switch ($request->check) {
            case 1:
                
                switch (Post::where('action', 1)->count()) {
                    case 3:
                       /*  dd($valor); */
                        $data = 'se ha desacativado un post correctamente';
                        $valor = $request->check - 1;
                        $post = Post::find($request->post);
                        $post->update([
                            'action' => $valor,
                        ]);

                        return $data;
                        break;
                    case 1:
                        $data = 'se ha desacativado un post correctamente';
                        $valor = $request->check - 1;
                        $post = Post::find($request->post);
                        $post->update([
                            'action' => $valor,
                        ]);
                        
                        return $data;
                        
                        break;
                    case 2:
                        $data = 'se ha desacativado un post correctamente';
                        $valor = $request->check - 1;
                        $post = Post::find($request->post);
                        $post->update([
                            'action' => $valor,
                        ]);
                        return $data;
                        
                        break;
                    case 0:
                        $data = 'se ha desacativado un post correctamente';
                        $valor = $request->check - 1;
                        $post = Post::find($request->post);
                        $post->update([
                            'action' => $valor,
                        ]);

                        return $data;
                        
                        break;

                        
                        default:
    
                    break;
                    }
            case 0:
                
                switch (Post::where('action', 1)->count()) {
                    case 3:
                        $data = 'ya existen 3 post activos, por favor desactiva 1 post activo para activar correctamente el post';
                        

                        return $data;
                        break;
                    case 1:
                        $data = 'se ha modificado un post correctamente';
                        $valor = $request->check + 1;
                        $post = Post::find($request->post);
                        $post->update([
                            'action' => $valor,
                        ]);

                        return $data;
                        break;
                    case 2:
                        $data = 'se ha modificado un post correctamente';
                        $valor = $request->check + 1;
                        $post = Post::find($request->post);
                        $post->update([
                            'action' => $valor,
                        ]);

                        return $data;
                        break;
                    case 0:
                        $data = 'se ha modificado un post correctamente';
                        $valor = $request->check + 1;
                        $post = Post::find($request->post);
                        $post->update([
                            'action' => $valor,
                        ]);

                        return $data;
                        break;

                    default:
                        
                        break;
                }

                break;
            default:
                # code...
                break;
        }
       
        
    }
    public function proceed(Request $request)
    {

        $term = $request->get('term');
        /* return $term; */

        $querys = Proceeding::where('radicado', 'LIKE', '%' . $term . '%')->get();
        /* dd($querys); */
        $data = [];
        foreach ($querys as $query) {
            $data[] = [
                'label' => $query->radicado
            ];
        }
        return $data;
    }
    public function search_proceedings(Request $request)
    {
        $proceedings  = Proceeding::where('radicado', $request->search_words)->paginate(12);
        return view('search', compact('proceedings'));
    }

    public function get_proceed(Request $request)
    {
        if ($request->ajax()) {
            $proceedings = Proceeding::where(
                'radicado',
                $request->proceed
            )->get();
            return response()->json($proceedings);
        }
    }
    public function post_detail($id)
    {
        
        $post = Post::find($id);
        return view('web.postdetail', compact('post'));
    }
}
