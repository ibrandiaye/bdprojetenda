<?php

namespace App\Http\Controllers;

use App\Repositories\AppelRepository;
use Illuminate\Http\Request;

class Home1Controller extends Controller
{
    protected $appelRepository;
    public function __construct(AppelRepository $appelRepository){
        $this->appelRepository = $appelRepository;
    }
    public function home()
    {
        $nbLoading = $this->appelRepository->getNbProjectLoading();
        $nbApprouved = $this->appelRepository->getNbProjectApprouved();
        $nbNotApprouved = $this->appelRepository->getNbProjectNotApprouved();
        $appels = $this->appelRepository->getAll();
        return view('dashboard',compact('nbLoading','nbApprouved','nbNotApprouved','appels'));
    }

}
