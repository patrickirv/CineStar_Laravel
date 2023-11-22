<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Cines;
use Illuminate\Support\Facades\DB;

class CineStarController extends Controller
{
  public function Index()
  {
    return view('Index');
  }

  public function Cine($id)
  {
    $Cine = DB::select('call sp_getCine('.$id.')');
    $Tarifas = DB::select('call sp_getCineTarifas('.$id.')');
    $Peliculas = DB::select('call sp_getCinePeliculas('.$id.')');
    return view('Cine', ['Cine' => $Cine, 'Tarifas' => $Tarifas, 'Peliculas' => $Peliculas]);
  }

  public function Cines()
  {
    $Cines = DB::select('call sp_getCines');
    return view('Cines',['Cines' => $Cines]);
  }

  public function Pelicula($id)
  {
    $Pelicula = DB::select('call sp_getPelicula('.$id.')');
    return view('Pelicula',['Pelicula' => $Pelicula]);
  }

  public function Peliculas($id)
  {
    $Peliculas = DB::select('call sp_getPeliculas('.($id == 'cartelera' ? 1 : 2).')');
    return view('Peliculas',['Peliculas' => $Peliculas]);
  }
}