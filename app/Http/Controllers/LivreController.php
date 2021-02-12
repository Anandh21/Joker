<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Todo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class LivreController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function showAllLivre()
    {
        $livres =Livre::all();
        return view('livres.viewLivres', ["livres"=>$livres]);

    }

    /**
     * @return Application|Factory|View
     */
    public function showAddLivreForm()
    {
        return view('livres.addLivre');
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function addLivre(Request $request)
    {
        $livre = new Livre();
        $livre->title = $request->title;
        $livre->description = $request->description;
        $livre->author = $request->author;
        $livre->save();

        return redirect('/livres')->with('success', 'Un livre a été ajoutée!!!');
    }
    public function showUpdateLivreForm( Livre $livre)
    {
        return view('livres.updateLivre', ['livre'=>$livre]);
    }

    /**
     * @param Request $request
     * @param Livre $livre
     * @return Application|RedirectResponse|Redirector
     */
    public function updateLivre( Request $request, livre $livre)
    {
        $livre->title = $request->title;
        $livre->description = $request->description;
        $livre->author = $request->author;
        $livre->save();

        return redirect('/livres')->with('warning', 'Le livre a été mis à jour!!!');
    }

    public function deleteLivre(Livre $livre)
    {
        $livre->delete();
        return back()->with('error', 'Le livre a été supprimé');
    }

}
