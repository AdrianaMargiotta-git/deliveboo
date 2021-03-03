<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Order;
use App\User;
use App\Dish;
use App\Typology;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    // prendiamo user registrato e le tipologie
    {
      $user = Auth::user();
      $typologies = Typology::all();
      return view('home',compact('user','typologies'));
    }

    public function dishIndex() {
      // prendiamo tutti i piatti
      $user = Auth::user();
      $dishes = Dish::all();
      return view('pages.dish-index',compact('dishes', 'user'));
    }

    public function dishCreate() {
      // visulizzare pagina crea piatto
      return view('pages.dish-create');
    }

    public function dishShow($id) {
      // visualizzare pagina piatto
      $dish = Dish::findOrFail($id);
      return view('pages.dish-show',compact('dish'));
    }

    public function dishStore(Request $request) {
      // inseriamo il nuovo piatto creato nel database associato
      // all'utente loggato
      $data = $request -> all(); // dati inseriti nel form
      $user = Auth::user(); // utente loggato

      $newDish = Dish::make($data); // $newDish = dati inseriti
      $newDish -> user() -> associate($user); // associamo il piatto creato all'utente loggato.
      $newDish -> save(); // salviamo il piatto creato.

      return redirect() -> route('dish-index');
    }

    public function dishEdit($id) {
      // possibilità di modificare i piatti del menu all'utente
      //registrato
      $dish = Dish::findOrFail($id);
      return view('pages.dish-edit',compact('dish'));
    }

    public function dishUpdate(Request $request, $id) {
      // aggiorniamo la modifica del piatto
      $dish = Dish::findOrFail($id);
      $dish -> update($request -> all());
      return redirect() -> route('dish-index');

    }
      public function dishDelete($id) {
      // cancellazione del piatto
      $dish = Dish::findOrFail($id);

      $dish -> delete();

      return redirect() -> route('dish-index');

    }

    public function orderIndex(){
      $user = Auth::user();
      $orders = Order::all();
      return view('pages.order-index',compact('orders', 'user'));
    }

}
