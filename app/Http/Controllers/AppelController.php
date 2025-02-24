<?php

namespace App\Http\Controllers;

use App\Repositories\AppelRepository;
use App\Repositories\DocumentRepository;
use App\Repositories\EmployeRepository;
use App\Repositories\MatriceRepository;
use App\Repositories\TypeRepository;
use Illuminate\Http\Request;

class AppelController extends Controller
{
    protected $appelRepository;
    protected $typeRepository;
    protected $matriceRepository;
    protected $employeRepository;
    protected $documentRepository;

    public function __construct(AppelRepository $appelRepository, TypeRepository $typeRepository,MatriceRepository $matriceRepository,
    EmployeRepository $employeRepository,DocumentRepository $documentRepository)
    {
        $this->appelRepository = $appelRepository;
        $this->typeRepository = $typeRepository;
        $this->matriceRepository = $matriceRepository;
        $this->employeRepository = $employeRepository;
        $this->documentRepository = $documentRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appels = $this->appelRepository->getAll();
        return view('appel.index',compact('appels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = $this->typeRepository->getAll();

        return view ('appel.add',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([

            'titre' => 'required|string',
            'pays' => 'required|string',
            'theme' => 'required|string',
            'association' => 'required|string',
            'montant' => 'required|string',
            'dates' => 'required|date',
            'dater' => 'required|date',
            'personne' => 'required|string',
            'type_id' => 'required',
            'etat' => 'required|string',
            'doc' => 'required|file|mimes:docx,pdf,doc',

        ]);

       $imageName = time().'.'.$request->doc->extension();
        $request->doc->move(public_path('doc'), $imageName);
        $request->merge(['document'=>$imageName]);
        $appel = $this->appelRepository->store($request->all());

       return  redirect('appel');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appel = $this->appelRepository->getByIdWithRelation($id);
       // $appels = $this->appelRepository->getAll();
        $employes = $this->employeRepository->getAll();
        $documents = $this->documentRepository->getByappel($id);
        return view('appel.show',compact('appel','employes','documents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = $this->typeRepository->getAll();
        $appel = $this->appelRepository->getById($id);
        return view('appel.edit',compact('appel','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->appelRepository->update($id, $request->all());
        return redirect('appel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->appelRepository->destroy($id);
        return redirect('appel');
    }
}
