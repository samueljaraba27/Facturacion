<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $username = $request->post('username');
        $password = $request->post('password');
        $mode = $_POST['mode'];
        $stmt = null;
        try {
            switch ($mode) {
                case 'login':
                    $login = DB::table('t80')->select('PERFIL', 'CLAVE','NOMUSU', 'GRUPUS', 'NITCLI')
                    ->where('PERFIL','=',$username)
                    ->where('CLAVE','=',$password)
                    ->get();
                   /* dd($login); */
                    break;
                /* case 'validate':
                    $query .= "  AND NOMUSU = ? AND GRUPUS = ? AND NITCLI = ?";
                    $stmt = $conexion->prepare($query);
                    $perfil = $_POST['username'];
                    $pwd = $_POST['password'];
                    $nomusu = $_POST['nomusu'];
                    $grupus = $_POST['grupus'];
                    $nitcli = $_POST['nitcli'];
                    $stmt->bind_param('sssss', $perfil, $pwd, $nomusu, $grupus, $nitcli);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $response = $result->fetch_assoc();
                    break; */
            }
        } catch (Exception $e) {
            return  response()->json($login['error'] = $e->getMessage());
        } finally {
            return  response()->json($login);
        }
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
