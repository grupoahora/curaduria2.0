<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Post;
use App\Models\Proceeding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:reports.date')->only('reporte_generado', 'reports_date');
      
    }
    public function reporte_generado_publico(Request $request)
    {
        $proceedings = Proceeding::whereDate('fechaexpedicion', '>=', $request->fechaini)->whereDate('fechaexpedicion', '<=', $request->fechafin)->get();
        /*  dd($proceedings); */
        return view('web.reportsgenerado', compact('proceedings'));
    }
    public function reports_date_public()
    {
        return view('web.reports');
    }
    public function reporte_generado(Request $request)
    {
        $proceedings = Proceeding::whereDate('fechaexpedicion','>=', $request->fechaini)->whereDate('fechaexpedicion','<=', $request->fechafin)->get();
       /*  dd($proceedings); */
        return view('users.reports.generado', compact('proceedings'));
    }
    public function reports_date ()
    {
        return view('users.reports.date');
    }
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
        $tipoConsulta = $request->get('consulta');
        switch ($tipoConsulta) {
            case 1:
                $querys = Proceeding::where(
                    'cc',
                    'LIKE',
                    '%' . $term . '%'
                )->get();
                /* dd($querys); */
                $data = [];
                foreach ($querys as $query) {
                    $data[] = [
                        'label' => $query->cc
                    ];
                }
                return $data;
                break;

            case 2:
                $querys = Proceeding::where('radicado', 'LIKE', '%' . $term . '%')->get();
                /* dd($querys); */
                $data = [];
                foreach ($querys as $query) {
                    $data[] = [
                        'label' => $query->radicado
                    ];
                }
                return $data;
                break;
           
            default:
                # code...
                break;
        }
       
    }
    public function search_proceedings(Request $request)
    {
        /* dd($request); */
        $tipoConsulta = $request->get('tipoConsultaInput');
        switch ($tipoConsulta) {
            case 1:
                $proceedings = Proceeding::where(
                    'cc',
                    $request->search_words
                )->get();
                return view('web.reportsgenerado', compact('proceedings'));
                break;

            case 2:
                $proceedings = Proceeding::where(
                    'radicado',
                    $request->search_words
                )->get();
                return view('web.reportsgenerado', compact('proceedings'));
                break;

            default:
                # code...
                break;
        }
        
    }

    public function get_proceed(Request $request)
    {
        
        dd($request);
            $tipoConsulta = $request->get('tipoConsulta');
            switch ($tipoConsulta) {
                case 1:
                    $proceedings = Proceeding::where(
                        'cc',
                        $request->search_words
                    )->get();
                    return view('web.reportsgenerado', compact('proceedings'));
                    break;

                case 2:
                    $proceedings = Proceeding::where(
                        'radicado',
                        $request->search_words
                    )->get();
                    return view('web.reportsgenerado', compact('proceedings'));
                    break;

                default:
                    # code...
                    break;
            }
            
       
    }
    public function post_detail($id)
    {
        
        $post = Post::find($id);
        return view('web.postdetail', compact('post'));
    }
}
