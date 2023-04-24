<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Persona;

class Personas extends Controller{

    public function index(){

        $persona = new Persona();
        $datos['personas'] = $persona->orderBy('ci','ACS')->findAll();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('personas/listar', $datos);
    }

    public function crear(){

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('personas/crear', $datos);
    }

    public function guardar(){
        $persona = new Persona();

        $datos = [
            'ci'=>$this->request->getVar('ci'),
            'nombre_com'=>$this->request->getVar('nombre_com'),
            'fecha_nac'=>$this->request->getVar('fecha_nac'),
            'telefono'=>$this->request->getVar('telefono'),
            'departamento' => $this->request->getVar('departamento')
        ];
        $persona->insert($datos);

        return $this->response->redirect(site_url('listar'));
    }
    public function borrar($ci=null){

        $persona = new Persona();
        $datosPersona = $persona->where('ci',$ci)->first();

        $persona ->where('ci',$ci)->delete($ci);

        return $this->response->redirect(site_url('listar'));

    }
    public function editar($ci=null){
        //print_r($ci);

        $persona = new Persona();

        $datos['persona']=$persona->where('ci',$ci)->first();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('personas/editar', $datos);
    }

    public function actualizar(){

        $persona = new Persona();

        $datos=[
            'ci'=>$this->request->getVar('ci'),
            'nombre_com'=>$this->request->getVar('nombre_com'),
            'fecha_nac'=>$this->request->getVar('fecha_nac'),
            'telefono'=>$this->request->getVar('telefono'),
            'departamento'=>$this->request->getVar('departamento')
        ];
        $ci=$this->request->getVar('ci');
        $persona->update($ci,$datos);

        return $this->response->redirect(site_url('listar'));

    }

}